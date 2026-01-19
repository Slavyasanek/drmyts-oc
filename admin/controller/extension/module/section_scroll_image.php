<?php
class ControllerExtensionModuleSectionScrollImage extends Controller {
    private $error = array();

    public function index() {
        $this->load->language('extension/module/section_scroll_image');
        $this->document->setTitle($this->language->get('heading_title'));
        $this->load->model('setting/module');

        if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
            if (!isset($this->request->get['module_id'])) {
                $this->model_setting_module->addModule('section_scroll_image', $this->request->post);
            } else {
                $this->model_setting_module->editModule($this->request->get['module_id'], $this->request->post);
            }
            $this->session->data['success'] = $this->language->get('text_success');
            $this->response->redirect($this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true));
        }

        // Помилки
        $data['error_warning'] = $this->error['warning'] ?? '';
        $data['error_name'] = $this->error['name'] ?? '';
        $data['error_rotate_image'] = $this->error['rotate_image'] ?? '';
        $data['error_static_image'] = $this->error['static_image'] ?? '';

        // Хлібні крихти
        $data['breadcrumbs'] = array();
        $data['breadcrumbs'][] = array('text' => $this->language->get('text_home'), 'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true));
        $data['breadcrumbs'][] = array('text' => $this->language->get('text_extension'), 'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true));
        $data['breadcrumbs'][] = array('text' => $this->language->get('heading_title'), 'href' => $this->url->link('extension/module/section_scroll_image', 'user_token=' . $this->session->data['user_token'], true));

        if (isset($this->request->get['module_id']) && ($this->request->server['REQUEST_METHOD'] != 'POST')) {
            $module_info = $this->model_setting_module->getModule($this->request->get['module_id']);
        }

        $data['user_token'] = $this->session->data['user_token'];
        $data['action'] = $this->url->link('extension/module/section_scroll_image', 'user_token=' . $this->session->data['user_token'] . (isset($this->request->get['module_id']) ? '&module_id=' . $this->request->get['module_id'] : ''), true);
        $data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true);

        // Дані
        $data['name'] = $this->request->post['name'] ?? $module_info['name'] ?? '';
        $data['status'] = $this->request->post['status'] ?? $module_info['status'] ?? '';
        $data['rotate_image'] = $this->request->post['rotate_image'] ?? $module_info['rotate_image'] ?? '';
        $data['static_image'] = $this->request->post['static_image'] ?? $module_info['static_image'] ?? '';

        // Зображення прев'ю
        $this->load->model('tool/image');
        $data['placeholder'] = $this->model_tool_image->resize('no_image.png', 100, 100);

        $data['rotate_thumb'] = (!empty($data['rotate_image'])) ? $this->model_tool_image->resize($data['rotate_image'], 100, 100) : $data['placeholder'];
        $data['static_thumb'] = (!empty($data['static_image'])) ? $this->model_tool_image->resize($data['static_image'], 100, 100) : $data['placeholder'];

        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view('extension/module/section_scroll_image', $data));
    }

    protected function validate() {
        if (!$this->user->hasPermission('modify', 'extension/module/section_scroll_image')) {
            $this->error['warning'] = $this->language->get('error_permission');
        }
        if ((utf8_strlen($this->request->post['name']) < 3) || (utf8_strlen($this->request->post['name']) > 64)) {
            $this->error['name'] = $this->language->get('error_name');
        }
        if (empty($this->request->post['rotate_image'])) {
            $this->error['rotate_image'] = $this->language->get('error_image');
        }
        if (empty($this->request->post['static_image'])) {
            $this->error['static_image'] = $this->language->get('error_image');
        }
        return !$this->error;
    }
}