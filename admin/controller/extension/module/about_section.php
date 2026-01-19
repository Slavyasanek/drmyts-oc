<?php
class ControllerExtensionModuleAboutSection extends Controller {
    private $error = array();

    public function index() {
        $this->load->language('extension/module/about_section');

        $this->document->setTitle($this->language->get('heading_title'));

        $this->load->model('setting/module');

        if (($this->request->server['REQUEST_METHOD'] == 'POST')  && $this->validate() ) {
            if (!isset($this->request->get['module_id'])) {
                $this->model_setting_module->addModule('about_section', $this->request->post);
            } else {
                $this->model_setting_module->editModule($this->request->get['module_id'], $this->request->post);
            }

            $this->session->data['success'] = $this->language->get('text_success');

            $this->response->redirect($this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true));
        }

        if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		if (isset($this->error['name'])) {
			$data['error_name'] = $this->error['name'];
		} else {
			$data['error_name'] = '';
		}

        $errors = ['warning', 'name', 'image', 'red_button_text'];

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
			'href' => $this->url->link('extension/module/about_section', 'user_token=' . $this->session->data['user_token'], true)
		);

        $data['user_token'] = $this->session->data['user_token'];
        $data['action'] = $this->url->link('extension/module/about_section', 'user_token=' . $this->session->data['user_token'] . (isset($this->request->get['module_id']) ? '&module_id=' . $this->request->get['module_id'] : ''), true);
		$data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true);

        // Основні дані
        
		if (isset($this->request->post['name'])) {
			$data['name'] = $this->request->post['name'];
		} elseif (!empty($module_info)) {
			$data['name'] = $module_info['name'];
		} else {
			$data['name'] = '';
		}

        $data['section_title_accent'] = $this->request->post['section_title_accent'] ?? $module_info['section_title_accent'] ?? '';
        $data['section_title_main'] = $this->request->post['section_title_main'] ?? $module_info['section_title_main'] ?? '';
        $data['subtitle'] = $this->request->post['subtitle'] ?? $module_info['subtitle'] ?? '';
        $data['title'] = $this->request->post['title'] ?? $module_info['title'] ?? '';

        if (isset($this->request->post['status'])) {
			$data['status'] = $this->request->post['status'];
		} elseif (!empty($module_info)) {
			$data['status'] = $module_info['status'];
		} else {
			$data['status'] = '';
		}

        $data['help_block_text'] = $this->request->post['help_block_text'] ?? $module_info['help_block_text'] ?? '';
        $data['red_button_link'] = $this->request->post['red_button_link'] ?? $module_info['red_button_link'] ?? '';
        $data['red_button_text'] = $this->request->post['red_button_text'] ?? $module_info['red_button_text'] ?? '';

        // Зображення
        $this->load->model('tool/image');

        if (isset($this->request->post['image'])) {
			$data['image'] = $this->request->post['image'];
		} elseif (!empty($module_info)) {
			$data['image'] = $module_info['image'];
		} else {
			$data['image'] = '';
		}

        $data['placeholder'] = $this->model_tool_image->resize('no_image.png', 100, 100);
        $data['thumb'] = $data['image'] ? $this->model_tool_image->resize($data['image'], 100, 100) : $data['placeholder'];

        
        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view('extension/module/about_section', $data));
    }

    
	protected function validate() {
		if (!$this->user->hasPermission('modify', 'extension/module/about_section')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		if ((utf8_strlen($this->request->post['name']) < 3) || (utf8_strlen($this->request->post['name']) > 64)) {
			$this->error['name'] = $this->language->get('error_name');
		}

        if (empty($this->request->post['image'])) {
            $this->error['image'] = $this->language->get('error_image');
        }
        if (!empty($this->request->post['red_button_link']) && utf8_strlen($this->request->post['red_button_text']) < 1) {
            $this->error['red_button_text'] = $this->language->get('error_red_button_text');
        }
        
		return !$this->error;
	}
}