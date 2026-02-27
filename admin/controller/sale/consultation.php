<?php
class ControllerSaleConsultation extends Controller {
    public function index() {
        $this->load->language('sale/consultation');
        $this->document->setTitle($this->language->get('heading_title'));
        $this->load->model('sale/consultation');

        if (isset($this->request->get['page'])) {
            $page = (int)$this->request->get['page'];
        } else {
            $page = 1;
        }

        $url = '';
        if (isset($this->request->get['page'])) {
            $url .= '&page=' . $this->request->get['page'];
        }

        $data['consultations'] = array();

       $limit = $this->config->get('config_limit_admin'); 
    
        $filter_data = array(
            'start' => ($page - 1) * $limit,
            'limit' => $limit
        );


        $consultation_total = $this->model_sale_consultation->getTotalConsultations();
        $results = $this->model_sale_consultation->getConsultations($filter_data); 

        foreach ($results as $result) {
            $data['consultations'][] = array(
                'consultation_id' => $result['consultation_id'],
                'customer'        => $result['customer_name'],
                'telegram_id'     => $result['telegram_id'],
                'status'          => $result['status'] ? $this->language->get('text_processed') : $this->language->get('text_pending'),
                'status_raw'      => $result['status'], 
                'date_added'      => date($this->language->get('date_format_short'), strtotime($result['date_added'])),
                'edit'            => $this->url->link('sale/consultation/edit', 'user_token=' . $this->session->data['user_token'] . '&consultation_id=' . $result['consultation_id'], true),
                'create'          => $this->url->link('sale/consultation/create', 'user_token=' . $this->session->data['user_token'] . '&consultation_id=' . $result['consultation_id'], true),
                'delete' => $this->url->link('sale/consultation/delete', 'user_token=' . $this->session->data['user_token'] . '&consultation_id=' . $result['consultation_id'], true),
            );
        }

        $pagination = new Pagination();
        $pagination->total = $consultation_total;
        $pagination->page = $page;
        $pagination->limit = $limit;
        $pagination->url = $this->url->link('sale/consultation', 'user_token=' . $this->session->data['user_token'] . '&page={page}', true);

        $data['results'] = sprintf(
            $this->language->get('text_pagination'), 
            ($consultation_total) ? (($page - 1) * $limit) + 1 : 0, 
            ((($page - 1) * $limit) > ($consultation_total - $limit)) ? $consultation_total : ((($page - 1) * $limit) + $limit), 
            $consultation_total, 
            ceil($consultation_total / $limit)
        );

        $data['pagination'] = $pagination->render();

        $data['user_token'] = $this->session->data['user_token'];

        $data['breadcrumbs'] = array();
        $data['breadcrumbs'][] = array('text' => $this->language->get('text_home'), 'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true));
        $data['breadcrumbs'][] = array('text' => $this->language->get('heading_title'), 'href' => $this->url->link('sale/consultation', 'user_token=' . $this->session->data['user_token'], true));

        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view('sale/consultation_list', $data));
    }

    public function create() {
        $this->getForm();
    }

    public function edit() {
        $this->getForm();
    }

    public function save() {
        $this->load->language('sale/consultation');
        $this->load->model('sale/consultation');

        if (($this->request->server['REQUEST_METHOD'] == 'POST') && isset($this->request->get['consultation_id'])) {
            $this->model_sale_consultation->saveResult($this->request->get['consultation_id'], $this->request->post);

            $this->session->data['success'] = 'Результати успішно збережено!';
            $this->response->redirect($this->url->link('sale/consultation/edit', 'user_token=' . $this->session->data['user_token'] . '&consultation_id=' . $this->request->get['consultation_id'], true));
        }
    }

    public function delete() {
        $this->load->language('sale/consultation');
        $this->load->model('sale/consultation');

        if (isset($this->request->get['consultation_id'])) {
            $this->model_sale_consultation->deleteConsultation($this->request->get['consultation_id']);
            $this->session->data['success'] = 'Консультацію та її результати успішно видалено!';
        }

        $this->response->redirect($this->url->link('sale/consultation', 'user_token=' . $this->session->data['user_token'], true));
    }

    protected function getForm() {
        $this->load->language('sale/consultation');
        $this->load->model('sale/consultation');
        $this->load->model('catalog/product');

        $data['heading_title'] = $this->language->get('button_create');
        $data['user_token'] = $this->session->data['user_token'];

        $data['action'] = $this->url->link('sale/consultation/save', 'user_token=' . $this->session->data['user_token'] . '&consultation_id=' . $this->request->get['consultation_id'], true);
        $data['cancel'] = $this->url->link('sale/consultation', 'user_token=' . $this->session->data['user_token'], true);
        $data['delete'] = $this->url->link('sale/consultation/delete', 'user_token=' . $this->session->data['user_token'] . '&consultation_id=' . $this->request->get['consultation_id'], true);
        $data['text_confirm'] = $this->language->get('text_confirm');

        if (isset($this->request->get['consultation_id'])) {
            $consultation_info = $this->model_sale_consultation->getConsultation($this->request->get['consultation_id']);
        }

        if (!empty($consultation_info)) {
            $this->load->model('customer/customer');
            $customer_info = $this->model_customer_customer->getCustomer($consultation_info['customer_id']);

            if ($customer_info) {
                $data['customer_id'] = $consultation_info['customer_id'];
                $data['customer_name'] = $customer_info['firstname'] . ' ' . $customer_info['lastname'];
            } else {
                $data['customer_id'] = 0;
                $data['customer_name'] = '-';
            }

            $data['user_data'] = $consultation_info;
            
            $data['user_photos'] = json_decode($consultation_info['photos'], true) ?: array();
            $data['skin_problems'] = json_decode($consultation_info['skin_problems'], true) ?: array();
        }


        $result_info = $this->model_sale_consultation->getResultByConsultationId($this->request->get['consultation_id']);
        
        if ($result_info) {
            $data['morning_care'] = json_decode($result_info['morning_care'], true);
            $data['evening_care'] = json_decode($result_info['evening_care'], true);
            $data['comment'] = $result_info['comment'];
            $data['result_hash'] = $result_info['hash'];
            
            $data['products'] = array();
            $products = json_decode($result_info['products'], true);
            foreach ($products as $product_id) {
                $product_info = $this->model_catalog_product->getProduct($product_id);
                if ($product_info) {
                    $data['products'][] = array(
                        'product_id' => $product_info['product_id'],
                        'name'       => $product_info['name']
                    );
                }
            }
            $data['result_url'] = HTTP_CATALOG . 'index.php?route=information/consultation_result&id=' . $result_info['hash'];
        } else {
            $data['comment'] = '';
            $data['result_hash'] = '';
            $data['result_url'] = '';
        }

        $data['success'] = isset($this->session->data['success']) ? $this->session->data['success'] : '';
        if (isset($this->session->data['success'])) unset($this->session->data['success']);
        
        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view('sale/consultation_form', $data));
    }
}