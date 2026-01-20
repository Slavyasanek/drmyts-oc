<?php
class ControllerExtensionModuleSectionAboutShop extends Controller {
    private $error = array();

    public function index() {
        $this->load->language('extension/module/section_about_shop');
        $this->document->setTitle($this->language->get('heading_title'));
        $this->load->model('setting/module');
        $this->load->model('tool/image');

        if (($this->request->server['REQUEST_METHOD'] == 'POST')  && $this->validate() ) {
            if (!isset($this->request->get['module_id'])) {
                $this->model_setting_module->addModule('section_about_shop', $this->request->post);
            } else {
                $this->model_setting_module->editModule($this->request->get['module_id'], $this->request->post);
            }

            $this->session->data['success'] = $this->language->get('text_success');

            $this->response->redirect($this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true));
        }

        $errors = ['warning', 'name'];

        foreach ($errors as $error_key) {
            if (isset($this->error[$error_key])) {
                $data['error_' . $error_key] = $this->error[$error_key] ?? '';
            } else {
                $data['error_' . $error_key] = '';
            }
        }


        $data['breadcrumbs'] = array();
        $data['breadcrumbs'][] = array('text' => $this->language->get('text_home'), 'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true));
        $data['breadcrumbs'][] = array('text' => $this->language->get('text_extension'), 'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true));
        $data['breadcrumbs'][] = array('text' => $this->language->get('heading_title'), 'href' => $this->url->link('extension/module/section_about_shop', 'user_token=' . $this->session->data['user_token'], true));

        if (isset($this->request->get['module_id']) && ($this->request->server['REQUEST_METHOD'] != 'POST')) {
            $module_info = $this->model_setting_module->getModule($this->request->get['module_id']);
        }

        $data['user_token'] = $this->session->data['user_token'];

        $data['name'] = $this->request->post['name'] ?? $module_info['name'] ?? '';
        $data['status'] = $this->request->post['status'] ?? $module_info['status'] ?? '';
        
        $data['title_start'] = $this->request->post['title_start'] ?? $module_info['title_start'] ?? '';
        $data['title_accent'] = $this->request->post['title_accent'] ?? $module_info['title_accent'] ?? '';
        $data['description'] = $this->request->post['description'] ?? $module_info['description'] ?? '';
        
        $data['image'] = $this->request->post['image'] ?? $module_info['image'] ?? '';
        $data['placeholder'] = $this->model_tool_image->resize('no_image.png', 100, 100);
        $data['thumb'] = ($data['image']) ? $this->model_tool_image->resize($data['image'], 100, 100) : $data['placeholder'];

        $data['btn_1_text'] = $this->request->post['btn_1_text'] ?? $module_info['btn_1_text'] ?? '';
        $data['btn_1_link'] = $this->request->post['btn_1_link'] ?? $module_info['btn_1_link'] ?? '';
        $data['btn_2_text'] = $this->request->post['btn_2_text'] ?? $module_info['btn_2_text'] ?? '';
        $data['btn_2_link'] = $this->request->post['btn_2_link'] ?? $module_info['btn_2_link'] ?? '';

        $data['action'] = $this->url->link('extension/module/section_about_shop', 'user_token=' . $this->session->data['user_token'] . (isset($this->request->get['module_id']) ? '&module_id=' . $this->request->get['module_id'] : ''), true);
        $data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true);

        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view('extension/module/section_about_shop', $data));
    }

    protected function validate() {
        if (!$this->user->hasPermission('modify', 'extension/module/section_about_shop')) {
            $this->error['warning'] = $this->language->get('error_permission');
        }
        if ((utf8_strlen($this->request->post['name']) < 3) || (utf8_strlen($this->request->post['name']) > 64)) {
            $this->error['name'] = $this->language->get('error_name');
        }
        return !$this->error;
    }
}