<?php
class ControllerExtensionModuleSectionProductsSlider extends Controller {
    public function index($setting) {
        $this->load->model('catalog/product');
        $this->load->model('tool/image');
        $this->document->addScript('catalog/view/theme/drmyts/js/products-slider.js', 'footer');


        $data['title_main'] = $setting['title_main'] ?? '';
        $data['title_accent'] = $setting['title_accent'] ?? '';
        $data['btn_text'] = $setting['btn_text'] ?? '';
        $data['btn_link'] = $setting['btn_link'] ?? '';

        $data['products'] = array();

        if (!empty($setting['product'])) {
            $products = array_slice($setting['product'], 0, 4);

            foreach ($products as $product_id) {
                $product_info = $this->model_catalog_product->getProduct($product_id);

                if ($product_info) {
                    if ($product_info['image']) {
                        $image = $this->model_tool_image->resize($product_info['image'], 280, 280);
                    } else {
                        $image = $this->model_tool_image->resize('placeholder.png', 280, 280);
                    }

                    if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
                        $price = $this->currency->format($this->tax->calculate($product_info['price'], $product_info['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
                    } else {
                        $price = false;
                    }

                    if ((float)$product_info['special']) {
                        $special = $this->currency->format($this->tax->calculate($product_info['special'], $product_info['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
                        $discount = '-' . round((($product_info['price'] - $product_info['special']) / $product_info['price']) * 100) . '%';
                    } else {
                        $special = false;
                        $discount = false;
                    }

                    // Перевірка чи товар в Wishlist (для класу liked)
                    $in_wishlist = false;
                    if ($this->customer->isLogged() && isset($this->session->data['wishlist'])) {
                        $in_wishlist = in_array($product_id, $this->session->data['wishlist']);
                    }

                    $data['products'][] = array(
                        'product_id'  => $product_info['product_id'],
                        'thumb'       => $image,
                        'name'        => $product_info['name'],
                        'manufacturer'=> $product_info['manufacturer'],
                        'brand_href'   => $this->url->link('product/manufacturer/info', 'manufacturer_id=' . $product_info['manufacturer_id']),
                        'price'       => $price,
                        'special'     => $special,
                        'discount'    => $discount,
                        'in_wishlist' => $in_wishlist,
                        'href'        => $this->url->link('product/product', 'product_id=' . $product_info['product_id'])
                    );
                }
            }
        }

        return $this->load->view('extension/module/section_products_slider', $data);
    }
}