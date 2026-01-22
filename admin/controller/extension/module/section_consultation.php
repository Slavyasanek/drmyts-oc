<?php
class ControllerExtensionModuleSectionConsultation extends Controller {
    private $error = array();

    public function index() {
        $this->load->language('extension/module/section_consultation');
        $this->document->setTitle($this->language->get('heading_title'));
        $this->load->model('setting/module');
        $this->load->model('tool/image');

        if (($this->request->server['REQUEST_METHOD'] == 'POST')  && $this->validate() ) {
            if (!isset($this->request->get['module_id'])) {
                $this->model_setting_module->addModule('section_consultation', $this->request->post);
            } else {
                $this->model_setting_module->editModule($this->request->get['module_id'], $this->request->post);
            }

            $this->session->data['success'] = $this->language->get('text_success');

            $this->response->redirect($this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true));
        }

        $errors = ['warning', 'name', 'image', 'btn_text'];

        foreach ($errors as $error_key) {
            if (isset($this->error[$error_key])) {
                $data['error_' . $error_key] = $this->error[$error_key] ?? '';
            } else {
                $data['error_' . $error_key] = '';
            }
        }

        if (isset($this->request->get['module_id']) && ($this->request->server['REQUEST_METHOD'] != 'POST')) {
            $module_info = $this->model_setting_module->getModule($this->request->get['module_id']);
        }

        $data['breadcrumbs'] = array();
        $data['breadcrumbs'][] = array('text' => $this->language->get('text_home'), 'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true));
        $data['breadcrumbs'][] = array('text' => $this->language->get('text_extension'), 'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true));
        $data['breadcrumbs'][] = array('text' => $this->language->get('heading_title'), 'href' => $this->url->link('extension/module/section_consultation', 'user_token=' . $this->session->data['user_token'], true));

        $data['user_token'] = $this->session->data['user_token'];
        $data['action'] = $this->url->link('extension/module/section_consultation', 'user_token=' . $this->session->data['user_token'] . (isset($this->request->get['module_id']) ? '&module_id=' . $this->request->get['module_id'] : ''), true);
        $data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true);
        $data['name'] = $this->request->post['name'] ?? $module_info['name'] ?? '';
        $data['status'] = $this->request->post['status'] ?? $module_info['status'] ?? '';
        
        // fields
        $data['title'] = $this->request->post['title'] ?? $module_info['title'] ?? '';
        $data['subtitle'] = $this->request->post['subtitle'] ?? $module_info['subtitle'] ?? '';
        $data['quote'] = $this->request->post['quote'] ?? $module_info['quote'] ?? '';
        
        $data['image'] = $this->request->post['image'] ?? $module_info['image'] ?? '';
        $data['placeholder'] = $this->model_tool_image->resize('no_image.png', 100, 100);
        $data['thumb'] = ($data['image']) ? $this->model_tool_image->resize($data['image'], 100, 100) : $data['placeholder'];
        $data['price_text'] = $this->request->post['price_text'] ?? $module_info['price_text'] ?? '';
        $data['btn_text'] = $this->request->post['btn_text'] ?? $module_info['btn_text'] ?? '';

        $data['list_title'] = $this->request->post['list_title'] ?? $module_info['list_title'] ?? '';

        if (isset($this->request->post['instructions'])) {
            $data['instructions'] = $this->request->post['instructions'];
        } elseif (!empty($module_info['instructions'])) {
            $data['instructions'] = $module_info['instructions'];
        } else {
            $data['instructions'] = array();
        }

        $data['warning'] = $this->request->post['warning'] ?? $module_info['warning'] ?? '';

        // close
        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view('extension/module/section_consultation', $data));
    }

    protected function validate() {
        if (!$this->user->hasPermission('modify', 'extension/module/section_consultation')) {
            $this->error['warning'] = $this->language->get('error_permission');
        }
        if ((utf8_strlen($this->request->post['name']) < 3) || (utf8_strlen($this->request->post['name']) > 64)) {
            $this->error['name'] = $this->language->get('error_name');
        }
        if (empty($this->request->post['image'])) {
            $this->error['image'] = $this->language->get('error_image');
        }
        if (!empty($this->request->post['btn_text']) && utf8_strlen($this->request->post['btn_text']) < 1) {
            $this->error['btn_text'] = $this->language->get('error_red_button_text');
        }
        
        return !$this->error;
    }
}