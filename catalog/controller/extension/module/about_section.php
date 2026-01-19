<?php
class ControllerExtensionModuleAboutSection extends Controller {
    public function index($setting) {

        $this->load->model('tool/image');

        $data['section_title_main'] = $setting['section_title_main'] ?? '';
        $data['section_title_accent'] = $setting['section_title_accent'] ?? '';
        $data['subtitle'] = $setting['subtitle'] ?? '';
       
        $data['title'] = isset($setting['title']) ? html_entity_decode($setting['title'], ENT_QUOTES, 'UTF-8') : '';
        $data['help_block_text'] = $setting['help_block_text'] ?? '';

        if (!empty($setting['image'])) {
            $data['image'] = $this->model_tool_image->resize($setting['image'], 350, 448);
        } else {
            $data['image'] = '';
        }

        $data['red_button_text'] = $setting['red_button_text'] ?? '';
        $data['red_button_link'] = !empty($setting['red_button_link']) ? $setting['red_button_link'] : '#';

        return $this->load->view('extension/module/about_section', $data);
    }
}