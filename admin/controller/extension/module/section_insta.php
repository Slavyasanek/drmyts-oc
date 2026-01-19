<?php
class ControllerExtensionModuleSectionInsta extends Controller {
    private $error = array();

    public function index() {
        $this->load->language('extension/module/section_insta');
        $this->document->setTitle($this->language->get('heading_title'));
        $this->load->model('setting/module');

        if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
            if (!isset($this->request->get['module_id'])) {
                $this->model_setting_module->addModule('section_insta', $this->request->post);
            } else {
                $this->model_setting_module->editModule($this->request->get['module_id'], $this->request->post);
            }
            $this->session->data['success'] = $this->language->get('text_success');
            $this->response->redirect($this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true));
        }

        // Обробка помилок
        $data['error_warning'] = $this->error['warning'] ?? '';
        $data['error_name'] = $this->error['name'] ?? '';
        $data['error_token'] = $this->error['token'] ?? '';
        $data['error_account_id'] = $this->error['account_id'] ?? '';

        // Breadcrumbs
        $data['breadcrumbs'] = array();
        $data['breadcrumbs'][] = array('text' => $this->language->get('text_home'), 'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true));
        $data['breadcrumbs'][] = array('text' => $this->language->get('text_extension'), 'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true));
        $data['breadcrumbs'][] = array('text' => $this->language->get('heading_title'), 'href' => $this->url->link('extension/module/section_insta', 'user_token=' . $this->session->data['user_token'], true));

        if (isset($this->request->get['module_id']) && ($this->request->server['REQUEST_METHOD'] != 'POST')) {
            $module_info = $this->model_setting_module->getModule($this->request->get['module_id']);
        } else {
            $module_info = array();
        }

        $data['user_token'] = $this->session->data['user_token'];
        $data['action'] = $this->url->link('extension/module/section_insta', 'user_token=' . $this->session->data['user_token'] . (isset($this->request->get['module_id']) ? '&module_id=' . $this->request->get['module_id'] : ''), true);
        $data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true);

        // Дані (POST -> БД -> Default)
        $data['name'] = $this->request->post['name'] ?? $module_info['name'] ?? '';
        $data['status'] = $this->request->post['status'] ?? $module_info['status'] ?? '';
        
        $data['title_main'] = $this->request->post['title_main'] ?? $module_info['title_main'] ?? 'ДОЛУЧАЙСЯ В';
        $data['title_accent'] = $this->request->post['title_accent'] ?? $module_info['title_accent'] ?? 'Instagram';
        $data['description'] = $this->request->post['description'] ?? $module_info['description'] ?? '';

        $data['insta_token'] = $this->request->post['insta_token'] ?? $module_info['insta_token'] ?? '';
        $data['insta_account_id'] = $this->request->post['insta_account_id'] ?? $module_info['insta_account_id'] ?? '';
        $data['insta_limit'] = $this->request->post['insta_limit'] ?? $module_info['insta_limit'] ?? '8';
        $data['btn_link'] = $this->request->post['btn_link'] ?? $module_info['btn_link'] ?? '';

        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view('extension/module/section_insta', $data));
    }

    protected function validate() {
        if (!$this->user->hasPermission('modify', 'extension/module/section_insta')) {
            $this->error['warning'] = $this->language->get('error_permission');
        }
        if ((utf8_strlen($this->request->post['name']) < 3) || (utf8_strlen($this->request->post['name']) > 64)) {
            $this->error['name'] = $this->language->get('error_name');
        }
        if (empty($this->request->post['insta_token'])) {
            $this->error['token'] = 'Access Token обов\'язковий!';
        }
        if (empty($this->request->post['insta_account_id'])) {
            $this->error['account_id'] = 'Instagram Account ID обов\'язковий!';
        }
        return !$this->error;
    }
}