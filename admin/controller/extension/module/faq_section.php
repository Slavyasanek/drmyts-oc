<?php
class ControllerExtensionModuleFaqSection extends Controller {
    private $error = array();

    public function index() {
        $this->load->language('extension/module/faq_section');
        $this->document->setTitle($this->language->get('heading_title'));
        $this->load->model('setting/module');

        if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
            if (!isset($this->request->get['module_id'])) {
                $this->model_setting_module->addModule('faq_section', $this->request->post);
            } else {
                $this->model_setting_module->editModule($this->request->get['module_id'], $this->request->post);
            }
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

        if (isset($this->request->get['module_id']) && ($this->request->server['REQUEST_METHOD'] != 'POST')) {
			$module_info = $this->model_setting_module->getModule($this->request->get['module_id']);
		}

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_extension'),
			'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('extension/module/faq_section', 'user_token=' . $this->session->data['user_token'], true)
		);

        $data['user_token'] = $this->session->data['user_token'];
        $data['action'] = $this->url->link('extension/module/faq_section', 'user_token=' . $this->session->data['user_token'] . (isset($this->request->get['module_id']) ? '&module_id=' . $this->request->get['module_id'] : ''), true);
		$data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true);


        $data['name'] = $this->request->post['name'] ?? $module_info['name'] ?? '';
        $data['status'] = $this->request->post['status'] ?? $module_info['status'] ?? '';
        $data['title_main'] = $this->request->post['title_main'] ?? $module_info['title_main'] ?? 'Поширені';
        $data['title_accent'] = $this->request->post['title_accent'] ?? $module_info['title_accent'] ?? 'Запитання';

        // FAQ ITEMS - головна частина
        if (isset($this->request->post['faq_items'])) {
            $data['faq_items'] = $this->request->post['faq_items'];
        } elseif (!empty($module_info['faq_items'])) {
            $data['faq_items'] = $module_info['faq_items'];
        } else {
            $data['faq_items'] = array();
        }

        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view('extension/module/faq_section', $data));
    }

    protected function validate() {
        if (!$this->user->hasPermission('modify', 'extension/module/faq_section')) {
            $this->error['warning'] = $this->language->get('error_permission');
        }

        if ((utf8_strlen($this->request->post['name']) < 3) || (utf8_strlen($this->request->post['name']) > 64)) {
			$this->error['name'] = $this->language->get('error_name');
		}

        return !$this->error;
    }
}