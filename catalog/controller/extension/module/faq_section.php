<?php
class ControllerExtensionModuleFaqSection extends Controller {
    public function index($setting) {
        $data['title_main'] = $setting['title_main'] ?? '';
        $data['title_accent'] = $setting['title_accent'] ?? '';

        $data['faqs'] = array();
        if (!empty($setting['faq_items'])) {
            foreach ($setting['faq_items'] as $faq) {
                $data['faqs'][] = array(
                    'question' => $faq['question'],
                    'answer'   => html_entity_decode($faq['answer'], ENT_QUOTES, 'UTF-8')
                );
            }
        }

        return $this->load->view('extension/module/faq_section', $data);
    }
}