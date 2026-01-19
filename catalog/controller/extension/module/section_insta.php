<?php
class ControllerExtensionModuleSectionInsta extends Controller {
    public function index($setting) {
        $this->document->addScript('catalog/view/theme/drmyts/js/instagram-slider.js', 'footer');
        $data['insta_token'] = $setting['insta_token'] ?? '';
        $data['insta_account_id'] = $setting['insta_account_id'] ?? '';
        $data['insta_limit'] = $setting['insta_limit'] ?? 8;
        

        $data['title_main'] = $setting['title_main'] ?? '';
        $data['title_accent'] = $setting['title_accent'] ?? '';
        $data['description'] = isset($setting['description']) ? html_entity_decode($setting['description'], ENT_QUOTES, 'UTF-8') : '';
        $data['btn_link'] = $setting['btn_link'] ?? '#';

        $data['posts'] = array();

        if ($data['insta_token'] && $data['insta_account_id']) {
            // Кешуємо на 1 годину за унікальним ключем модуля
            $cache_key = 'instagram_posts.' . (int)$this->config->get('config_store_id') . '.' . $setting['name'];
            $posts = $this->cache->get($cache_key);

            if (!$posts) {
                $url = "https://graph.instagram.com/v22.0/" . $data['insta_account_id'] . "/media?fields=caption,media_type,media_url,permalink,thumbnail_url&access_token=" . $data['insta_token'];

                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, $url);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($ch, CURLOPT_TIMEOUT, 10);
                
                $output = curl_exec($ch);
                $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
                curl_close($ch);

                $result = json_decode($output, true);

                if ($http_code == 200 && isset($result['data'])) {
                    $posts = array_slice($result['data'], 0, (int)$data['insta_limit']);
                    $this->cache->set($cache_key, $posts);
                } else {
                    $posts = array(); // Якщо помилка API, повертаємо пустий масив
                }
            }
            
            $data['posts'] = $posts;
        }

        return $this->load->view('extension/module/section_insta', $data);
    }
}