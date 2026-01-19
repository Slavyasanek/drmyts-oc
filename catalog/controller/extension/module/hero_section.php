<?php
class ControllerExtensionModuleHeroSection extends Controller {
    public function index($setting) {
        $this->load->model('tool/image');
        $this->document->addScript('catalog/view/theme/drmyts/js/home-hero.js', 'footer');

        // Основні текстові дані
        $data['title_accent'] = $setting['title_accent'] ?? '';
        $data['title_main']   = isset($setting['title_main']) ? html_entity_decode($setting['title_main'], ENT_QUOTES, 'UTF-8') : '';

        // Головне зображення (ресайз до оптимальних розмірів для Hero-секції)
        if (!empty($setting['image'])) {
            $data['image'] = $this->model_tool_image->resize($setting['image'], 488, 580);
        } else {
            $data['image'] = '';
        }

        // Формуємо масив бейджів (професії на фото)
        $data['badges'] = [];
        for ($i = 1; $i <= 3; $i++) {
            if (!empty($setting['badge_text_' . $i])) {
                $data['badges'][] = [
                    'text' => $setting['badge_text_' . $i]
                ];
            }
        }

        // Формуємо масив карток переваг
        $data['cards'] = [];
        for ($i = 1; $i <= 3; $i++) {
            // Картка вважається валідною, якщо заповнена цифра або текст
            if (!empty($setting['card_num_' . $i]) || !empty($setting['card_text_' . $i])) {
                $data['cards'][] = [
                    'icon' => $setting['card_icon_' . $i] ?? 'note',
                    'num'  => $setting['card_num_' . $i],
                    'text' => $setting['card_text_' . $i]
                ];
            }
        }

        // Кнопки (виводяться тільки якщо заповнено посилання та текст)
        $data['red_button'] = [];
        if (!empty($setting['red_button_link']) && !empty($setting['red_button_text'])) {
            $data['red_button'] = [
                'link' => $setting['red_button_link'],
                'text' => $setting['red_button_text']
            ];
        }

        $data['black_button'] = [];
        if (!empty($setting['black_button_link']) && !empty($setting['black_button_text'])) {
            $data['black_button'] = [
                'link' => $setting['black_button_link'],
                'text' => $setting['black_button_text']
            ];
        }

        return $this->load->view('extension/module/hero_section', $data);
    }
}