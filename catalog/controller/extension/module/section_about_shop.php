<?php
class ControllerExtensionModuleSectionAboutShop extends Controller {
    public function index($setting) {
        $this->load->model('tool/image');

        $data['title_start'] = $setting['title_start'] ?? '';
        $data['title_accent'] = $setting['title_accent'] ?? '';
        
        // Розбиваємо текст на параграфи для верстки
        $data['description'] = array();
        if (!empty($setting['description'])) {
            $paragraphs = explode("\n", str_replace("\r", "", $setting['description']));
            foreach ($paragraphs as $p) {
                if (trim($p)) $data['description'][] = trim($p);
            }
        }

        if (!empty($setting['image'])) {
            $data['image'] = $this->model_tool_image->resize($setting['image'], 800, 920); // Адаптивно під ретину
        } else {
            $data['image'] = '';
        }

        $data['btn_1_text'] = $setting['btn_1_text'] ?? '';
        $data['btn_1_link'] = $setting['btn_1_link'] ?? '';
        $data['btn_2_text'] = $setting['btn_2_text'] ?? '';
        $data['btn_2_link'] = $setting['btn_2_link'] ?? '';

        return $this->load->view('extension/module/section_about_shop', $data);
    }
}