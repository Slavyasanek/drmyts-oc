<?php
class ControllerExtensionModuleSectionNeedHelp extends Controller {
    public function index($setting) {
        $data['title'] = $setting['title'] ?? '';
        $data['description'] = $setting['description'] ?? '';
        $data['btn_text'] = $setting['btn_text'] ?? '';
        $data['btn_link'] = $setting['btn_link'] ?? '';

        return $this->load->view('extension/module/section_need_help', $data);
    }
}