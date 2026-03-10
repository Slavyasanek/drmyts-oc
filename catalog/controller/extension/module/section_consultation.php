<?php
class ControllerExtensionModuleSectionConsultation extends Controller {
    public function index($setting) {
        $this->load->model('tool/image');

        $data['title'] = $setting['title'] ?? '';
        $data['subtitle'] = $setting['subtitle'] ?? '';
        $data['price_text'] = $setting['price_text'] ?? '';
        $data['list_title'] = $setting['list_title'] ?? '';
        $data['warning'] = $setting['warning'] ?? '';
        $data['quote'] = $setting['quote'] ?? '';

        $data['btn_text'] = $setting['btn_text'] ?? '';
        $data['btn_link'] = $setting['btn_link'] ?? '';
        $data['btn_target'] = (!empty($setting['btn_target'])) ? '_blank' : '_self';

        $data['small_btn_text'] = $setting['small_btn_text'] ?? '';
        $data['small_btn_link'] = $setting['small_btn_link'] ?? '';
        $data['small_btn_target'] = (!empty($setting['small_btn_target'])) ? '_blank' : '_self';

        $data['instructions'] = array();
        if (!empty($setting['instructions'])) {
            foreach ($setting['instructions'] as $faq) {
                $data['instructions'][] = array(
                    'text' => html_entity_decode($faq['text'], ENT_QUOTES, 'UTF-8')
                );
            }
        }

        if (!empty($setting['image'])) {
            $data['image'] = $this->model_tool_image->resize($setting['image'], 550, 726);
        } else {
            $data['image'] = '';
        }

        return $this->load->view('extension/module/section_consultation', $data);
    }
}