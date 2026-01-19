<?php
class ControllerExtensionModuleSectionScrollImage extends Controller {
    public function index($setting) {
        $this->load->model('tool/image');

        if (!empty($setting['rotate_image'])) {
            $data['rotate_image'] = $this->model_tool_image->resize($setting['rotate_image'], 180, 180);
        } else {
            $data['rotate_image'] = '';
        }

        if (!empty($setting['static_image'])) {
            $data['static_image'] = $this->model_tool_image->resize($setting['static_image'], 41, 36); 
        } else {
            $data['static_image'] = '';
        }

        return $this->load->view('extension/module/section_scroll_image', $data);
    }
}