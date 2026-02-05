<?php
class ControllerExtensionModuleSectionProductTabs extends Controller {
    public function index($setting) {
        $this->load->model('catalog/manufacturer');
        $this->load->model('catalog/category');
        $this->load->model('tool/image');

        $data['title_main'] = $setting['title_main'] ?? '';
        $data['title_accent'] = $setting['title_accent'] ?? '';

        $data['brands'] = array();
        $manufacturers = $this->model_catalog_manufacturer->getManufacturers();
        foreach ($manufacturers as $m) {
            if (!empty($m['image']) && is_file(DIR_IMAGE . $m['image'])) {
                $image = $this->model_tool_image->resize($m['image'], 116, 116);

                $data['brands'][] = array(
                    'name'  => $m['name'],
                    'image' => $image,
                    'href'  => $this->url->link('product/manufacturer/info', 'manufacturer_id=' . $m['manufacturer_id'])
                );
            }
        }

        $data['tabs'] = array();
        if (!empty($setting['selected_categories'])) {
            foreach ($setting['selected_categories'] as $category_id) {
                $category_info = $this->model_catalog_category->getCategory($category_id);
                if ($category_info) {
                    $data['tabs'][] = array(
                        'id'   => $category_id,
                        'name' => $category_info['name']
                    );
                }
            }
        }

        return $this->load->view('extension/module/section_product_tabs', $data);
    }

    public function ajax() {
        $category_id = (int)$this->request->get['category_id'];
        $this->load->model('catalog/product');
        $this->load->model('tool/image');

        $results = $this->model_catalog_product->getProducts(array(
            'filter_category_id' => $category_id,
            'start' => 0,
            'limit' => 12,
            'sort'  => 'p.date_added',
            'order' => 'DESC'
        ));

        $data['products'] = array();
        foreach ($results as $result) {
            if ($result['image']) {
                $image = $this->model_tool_image->resize($result['image'], 280, 280);
            } else {
                $image = $this->model_tool_image->resize('placeholder.png', 280, 280);
            }

            if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
                $price = $this->currency->format($this->tax->calculate($result['price'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
            } else {
                $price = false;
            }

            if ((float)$result['special']) {
                $special = $this->currency->format($this->tax->calculate($result['special'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
                $discount = round((($result['price'] - $result['special']) / $result['price']) * 100);
            } else {
                $special = false;
                $discount = false;
            }

            $in_wishlist = false;
            if ($this->customer->isLogged() && isset($this->session->data['wishlist'])) {
                $this->load->model('account/wishlist');
                $wishlist_full_data = $this->model_account_wishlist->getWishlist();
                $wishlist_ids = array_column($wishlist_full_data, 'product_id');
                if (in_array($result['product_id'], $wishlist_ids)) {
                    $in_wishlist = true;
                }
            }

            $data['products'][] = array(
                'product_id'   => $result['product_id'],
                'thumb'        => $image,
                'name'         => $result['name'],
                'manufacturer' => $result['manufacturer'],
                'brand_href'   => $this->url->link('product/manufacturer/info', 'manufacturer_id=' . $result['manufacturer_id']),
                'price'        => $price,
                'special'      => $special,
                'discount'     => $discount,
                'in_wishlist'  => $in_wishlist,
                'href'         => $this->url->link('product/product', 'product_id=' . $result['product_id'])
            );
        }

        $this->response->setOutput($this->load->view('extension/module/section_product_tabs_items', $data));
    }
}