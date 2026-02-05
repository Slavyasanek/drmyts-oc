<?php
class ControllerExtensionModulePriceFilter extends Controller
{

    public function index()
    {

        $this->load->model('catalog/product');

        if (isset($this->request->get['filter'])) {
            $filter = $this->request->get['filter'];
        } else {
            $filter = '';
        }

        if (isset($this->request->get['manufacturer_id'])) {
            $manufacturer_id = (int) $this->request->get['manufacturer_id'];
            $data['action'] = str_replace('&amp;', '&', $this->url->link('product/manufacturer/info', 'manufacturer_id=' . $manufacturer_id));
        } else {
            $manufacturer_id = 0;
        }

        if (isset($this->request->get['path'])) {
            $url = '';

            if (isset($this->request->get['sort'])) {
                $url .= '&sort=' . $this->request->get['sort'];
            }

            if (isset($this->request->get['order'])) {
                $url .= '&order=' . $this->request->get['order'];
            }

            if (isset($this->request->get['limit'])) {
                $url .= '&limit=' . $this->request->get['limit'];
            }

            $path = '';

            $parts = explode('_', (string) $this->request->get['path']);

            $category_id = (int) array_pop($parts);
            $data['action'] = str_replace('&amp;', '&', $this->url->link('product/category', 'path=' . $this->request->get['path'] . $url));

            foreach ($parts as $path_id) {
                if (!$path) {
                    $path = (int) $path_id;
                } else {
                    $path .= '_' . (int) $path_id;
                }

                $category_info = $this->model_catalog_category->getCategory($path_id);

                if ($category_info) {
                    $data['breadcrumbs'][] = array(
                        'text' => $category_info['name'],
                        'href' => $this->url->link('product/category', 'path=' . $path . $url)
                    );
                }
            }
        } else {
            $category_id = 0;
        }

        $filter_data = array(
            'filter_category_id' => $category_id,
            'filter_filter' => $filter,
            'filter_manufacturer_id' => $manufacturer_id
        );

        $price_range = $this->model_catalog_product->getMinMaxPrice($filter_data);

        $data['min_price'] = $price_range['min_price'];
        $data['max_price'] = $price_range['max_price'];
        

        if (isset($this->request->get['price_min']) & !empty($this->request->get['price_min'])) {
            $price_min = (float) $this->request->get['price_min'];
            $data['price_min'] = $price_min;
        } else {
            $price_min = '';
            $data['price_min'] = $price_range['min_price'];
        }

        if (isset($this->request->get['price_max']) & !empty($this->request->get['price_max'])) {
            $price_max = (float) $this->request->get['price_max'];
            $data['price_max'] = $price_max;
        } else {
            $price_max = '';
            $data['price_max'] = $price_range['max_price'];
        }

        return $this->load->view('extension/module/price_filter', $data);
    }
}
