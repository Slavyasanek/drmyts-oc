<?php
class ControllerInformationConsultationResult extends Controller {
    public function index() {
        if (!isset($this->request->get['id'])) {
            $this->response->redirect($this->url->link('common/home'));
        }
        $this->load->model('setting/extension');
        $this->load->model('extension/module/consultation');
        $this->load->model('catalog/product');
        $this->load->model('tool/image');
        $this->load->language('information/consultation_result');

        $result_info = $this->model_extension_module_consultation->getResultByHash($this->request->get['id']);

        if (!$result_info) {
            $this->response->redirect($this->url->link('common/home'));
        }

        // Отримуємо ім'я клієнта
        $this->load->model('account/customer');
        $customer_info = $this->model_account_customer->getCustomer((int)$result_info['customer_id']);
        $customer_name = ($customer_info) ? $customer_info['firstname'] : '';
        $data['customer_name'] = $customer_name;

        $data['morning_care'] = json_decode($result_info['morning_care'], true) ?: array();
        $data['evening_care'] = json_decode($result_info['evening_care'], true) ?: array();
        $data['comment'] = $result_info['comment'];

        // Готуємо товари
        $data['products'] = array();
        $product_ids = json_decode($result_info['products'], true) ?: array();

        foreach ($product_ids as $key => $product_id) {
            $product_info = $this->model_catalog_product->getProduct($product_id);

            if ($product_info) {
                if ($product_info['image']) {
                    $image = $this->model_tool_image->resize($product_info['image'], 120, 120);
                } else {
                    $image = $this->model_tool_image->resize('placeholder.png', 120, 120);
                }

                $data['products'][] = array(
                    'count'             => str_pad($key + 1, 2, '0', STR_PAD_LEFT),
                    'name'              => $product_info['name'],
                    'manufacturer'      => $product_info['manufacturer'],
                    'manufacturer_href' => $this->url->link('product/manufacturer/info', 'manufacturer_id=' . $product_info['manufacturer_id']),
                    'thumb'             => $image,
                    'price'             => $this->currency->format($this->tax->calculate($product_info['price'], $product_info['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']),
                    'href'              => $this->url->link('product/product', 'product_id=' . $product_info['product_id'])
                );
            }
        }

        $this->document->setTitle('Експрес-консультація для ' . $customer_name);

        $data['header'] = $this->load->controller('common/header_empty');
        $data['footer'] = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view('information/consultation_result', $data));
    }
}