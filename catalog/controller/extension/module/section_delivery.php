<?php
class ControllerExtensionModuleSectionDelivery extends Controller {
    public function index($setting) {
        // Декодуємо HTML для блоку доставки
        $data['delivery_title'] = $setting['delivery_block_title'] ?? '';
        $data['delivery_content'] = isset($setting['delivery_block_content']) ? html_entity_decode($setting['delivery_block_content'], ENT_QUOTES, 'UTF-8') : '';
        
        $data['payment_title'] = $setting['payment_block_title'] ?? '';
        $data['payments'] = $setting['payments'] ?? [];
        
        // Декодуємо HTML для додаткового блоку
        $data['extra_title'] = $setting['text_block_title'] ?? '';
        $data['extra_content'] = isset($setting['text_block_content']) ? html_entity_decode($setting['text_block_content'], ENT_QUOTES, 'UTF-8') : '';

        return $this->load->view('extension/module/section_delivery', $data);
    }
}