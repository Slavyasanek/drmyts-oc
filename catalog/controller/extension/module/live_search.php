<?php
class ControllerExtensionModuleLiveSearch extends Controller
{
public function index()
    {
        $json = array();
        if (isset($this->request->get['filter_name'])) {
            $search = $this->request->get['filter_name'];
        } else {
            $search = '';
        }
        if (isset($this->request->get['cat_id'])) {
            $cat_id = (int) $this->request->get['cat_id'];
        } else {
            $cat_id = 0;
        }

        $tag = $search;
        $description = '';
        $category_id = $cat_id;
        $sub_category = '';
        $sort = 'p.sort_order';
        $order = 'ASC';
        $page = 1;
        $limit = $this->config->get('module_live_search_limit');
        $search_result = 0;
        $error = false;
        
        if (version_compare(VERSION, '3.0.0.0', '>=')) {
            $currency_code = $this->session->data['currency'];
        } else {
            $error = true;
            $json[] = array(
                'product_id' => 0,
                'minimum' => 0,
                'image' => null,
                'name' => 'Version Error: ' . VERSION,
                'extra_info' => null,
                'price' => 0,
                'special' => 0,
                'url' => '#'
            );
        }

        if (!$error) {
            if (isset($this->request->get['filter_name'])) {
                // --- 1. PRODUCT SEARCH (Original Logic) ---
                $this->load->model('catalog/product');
                $this->load->model('tool/image');
                $filter_data = array(
                    'filter_name' => $search,
                    'filter_tag' => $tag,
                    'filter_description' => $description,
                    'filter_category_id' => $category_id,
                    'filter_sub_category' => $sub_category,
                    'sort' => $sort,
                    'order' => $order,
                    'start' => ($page - 1) * $limit,
                    'limit' => $limit
                );
                $results = $this->model_catalog_product->getProducts($filter_data);

                $search_result = $this->model_catalog_product->getTotalProducts($filter_data);
                $image_width = $this->config->get('module_live_search_image_width') ? (int) $this->config->get('module_live_search_image_width') : 0;
                $image_height = $this->config->get('module_live_search_image_height') ? (int) $this->config->get('module_live_search_image_height') : 0;
                $title_length = (int) $this->config->get('module_live_search_title_length');
                $description_length = (int) $this->config->get('module_live_search_description_length');

                $json['total'] = (int) $search_result;
                $json['products'] = array(); // Initialize arrays
                $json['manufacturers'] = array();
                $json['categories'] = array();

                foreach ($results as $result) {
                    if ($result['image']) {
                        $image = $this->model_tool_image->resize($result['image'], $image_width, $image_height);
                    } else {
                        $image = $this->model_tool_image->resize('placeholder.png', $image_width, $image_height);
                    }

                    if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
                        $price = $this->currency->format($this->tax->calculate($result['price'], $result['tax_class_id'], $this->config->get('config_tax')), $currency_code);
                    } else {
                        $price = false;
                    }

                    if ((float) $result['special']) {
                        $special = $this->currency->format($this->tax->calculate($result['special'], $result['tax_class_id'], $this->config->get('config_tax')), $currency_code);
                    } else {
                        $special = false;
                    }

                    if ($this->config->get('config_tax')) {
                        $tax = $this->currency->format((float) $result['special'] ? $result['special'] : $result['price'], $currency_code);
                    } else {
                        $tax = false;
                    }

                    $json['products'][] = array(
                        'product_id' => $result['product_id'],
                        'minimum' => $result['minimum'],
                        'image' => $image,
                        'stock_status' => $result['stock_status'],
                        'name' => utf8_substr(strip_tags(html_entity_decode($result['name'], ENT_QUOTES, 'UTF-8')), 0, $title_length) . '..',
                        'extra_info' => utf8_substr(strip_tags(html_entity_decode($result['description'], ENT_QUOTES, 'UTF-8')), 0, $description_length) . '..',
                        'price' => $price,
                        'special' => $special,
                        'url' => $this->url->link('product/product', 'product_id=' . $result['product_id'])
                    );
                }

                // --- 2. MANUFACTURERS SEARCH (Added) ---
                // Limit to 5 results to keep search clean
                $sql_man = "SELECT * FROM " . DB_PREFIX . "manufacturer WHERE LCASE(name) LIKE '%" . $this->db->escape(utf8_strtolower($search)) . "%' LIMIT 5";
                $query_man = $this->db->query($sql_man);

                foreach ($query_man->rows as $man_result) {
                    $json['manufacturers'][] = array(
                        'manufacturer_id' => $man_result['manufacturer_id'],
                        'name'            => strip_tags(html_entity_decode($man_result['name'], ENT_QUOTES, 'UTF-8')),
                        'url'             => $this->url->link('product/manufacturer/info', 'manufacturer_id=' . $man_result['manufacturer_id'])
                    );
                }

                // --- 3. CATEGORIES SEARCH (Added) ---
                // Limit to 5 results
                $sql_cat = "SELECT c.category_id, cd.name FROM " . DB_PREFIX . "category c LEFT JOIN " . DB_PREFIX . "category_description cd ON (c.category_id = cd.category_id) WHERE cd.language_id = '" . (int)$this->config->get('config_language_id') . "' AND LCASE(cd.name) LIKE '%" . $this->db->escape(utf8_strtolower($search)) . "%' AND c.status = '1' LIMIT 5";
                $query_cat = $this->db->query($sql_cat);

                foreach ($query_cat->rows as $cat_result) {
                    $json['categories'][] = array(
                        'category_id' => $cat_result['category_id'],
                        'name'        => strip_tags(html_entity_decode($cat_result['name'], ENT_QUOTES, 'UTF-8')),
                        'url'         => $this->url->link('product/category', 'path=' . $cat_result['category_id'])
                    );
                }
            }
        }
        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }
    // Extensions Events
    public function injectLiveSearch(&$route, &$data, &$output)
    {
        if ($this->config->get('module_live_search_status')) {
            $this->load->language('product/search', 'search');
            $text_view_all_results = $this->config->get('module_live_search_view_all_results');

            $liveSearch = [
                'text_view_all_results' => htmlspecialchars($text_view_all_results[$this->config->get('config_language_id')]['name']),
                'text_empty' => $this->language->get('search')->get('text_empty'),
                'module_live_search_show_image' => $this->config->get('module_live_search_show_image'),
                'module_live_search_show_price' => $this->config->get('module_live_search_show_price'),
                'module_live_search_show_description' => $this->config->get('module_live_search_show_description'),
                'module_live_search_min_length' => $this->config->get('module_live_search_min_length'),
                'module_live_search_show_add_button' => $this->config->get('module_live_search_show_add_button'),
                'all_search_href' => $this->url->link('product/search')
            ];

            // $liveSearchJS = '<link href="catalog/view/javascript/live_search/live_search.css" rel="stylesheet" type="text/css">' . "\n";
            $liveSearchJS = '<script src="catalog/view/javascript/live_search/live_search.js"></script>' . "\n";
            $script = "document.addEventListener('DOMContentLoaded', function() {
                const options = " . json_encode($liveSearch) . ";
                new LiveSearch(options);
            });";
            $liveSearchJS .= '<script type="text/javascript"><!--' . "\n";
            $liveSearchJS .= $script;
            $liveSearchJS .= '//--></script>' . "\n";
            $liveSearchJS .= '</head>' . "\n";
            $output = str_replace('</head>', $liveSearchJS, $output);
        }
    }
}

