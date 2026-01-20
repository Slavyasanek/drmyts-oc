<?php
class ControllerExtensionModuleSectionPageTitle extends Controller {
    public function index($setting) {
        $data['heading_title'] = $this->document->getTitle();
        $data['breadcrumbs'] = array();


        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_home') ?: 'Головна',
            'href' => $this->url->link('common/home')
        );

        if (isset($this->request->get['route'])) {
            $url_data = $this->request->get;
            unset($url_data['_route_']); // Видаляємо системний параметр SEO
            $route = $url_data['route'];
            unset($url_data['route']);
            
            $url = '';
            if ($url_data) {
                $url = '&' . http_build_query($url_data);
            }

            $data['breadcrumbs'][] = array(
                'text' => $this->document->getTitle(),
                'href' => $this->url->link($route, $url)
            );
        }

        return $this->load->view('extension/module/section_page_title', $data);
    }
}