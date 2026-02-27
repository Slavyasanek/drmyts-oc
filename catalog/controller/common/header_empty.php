<?php
class ControllerCommonHeaderEmpty extends Controller {
    public function index() {

        if ($this->request->server['HTTPS']) {
            $server = $this->config->get('config_ssl');
        } else {
            $server = $this->config->get('config_url');
        }


        if (is_file(DIR_IMAGE . $this->config->get('config_icon'))) {
            $this->document->addLink($server . 'image/' . $this->config->get('config_icon'), 'icon');
        }


        if (is_file(DIR_IMAGE . $this->config->get('config_logo'))) {
            $data['logo'] = $server . 'image/' . $this->config->get('config_logo');
        } else {
            $data['logo'] = '';
        }

        $data['title'] = $this->document->getTitle();
        $data['links'] = $this->document->getLinks();
        $data['styles'] = $this->document->getStyles();
        $data['scripts'] = $this->document->getScripts('header');
        $data['lang'] = $this->language->get('code');
        $data['direction'] = $this->language->get('direction');
        $data['name'] = $this->config->get('config_name');
        $data['home'] = $this->url->link('common/home');

        $data['custom_header_text'] = $this->config->get('config_custom_header_text');

        return $this->load->view('common/header_empty', $data);
    }
}