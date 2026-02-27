<?php
class ControllerCommonHome extends Controller {
	public function index() {
		$this->document->setTitle($this->config->get('config_meta_title'));
		$this->document->setDescription($this->config->get('config_meta_description'));
		$this->document->setKeywords($this->config->get('config_meta_keyword'));

		if (isset($this->request->get['route'])) {
			$canonical = $this->url->link('common/home');
			if ($this->config->get('config_seo_pro') && !$this->config->get('config_seopro_addslash')) {
				$canonical = rtrim($canonical, '/');
			}
			$this->document->addLink($canonical, 'canonical');
		}


        // Консультація: фіксуємо ID та перевіряємо авторизацію
        if (isset($this->request->get['consult_modal'])) {
            $this->session->data['tg_id'] = $this->request->get['consult_modal'];
            $this->session->data['show_consult_warning'] = true;
        }

        if (isset($this->session->data['tg_id']) && !$this->customer->isLogged()) {
            $this->session->data['show_consult_warning'] = true;
            $this->response->redirect($this->url->link('account/login', '', 'SSL'));
        }

        $data['open_consult_modal'] = (isset($this->session->data['tg_id']) && $this->customer->isLogged());
        $data['consult_modal'] = $this->load->controller('extension/module/consult_modal');
            
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');

		$this->response->setOutput($this->load->view('common/home', $data));
	}
}