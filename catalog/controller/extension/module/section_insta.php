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
            
            $refresh_cache_key = 'insta_token_refresh_check.' . $data['insta_account_id'];
            
            if (!$this->cache->get($refresh_cache_key)) {
                $refreshed_token = $this->refreshToken($data['insta_token'], $setting);
                if ($refreshed_token) {
                    $data['insta_token'] = $refreshed_token; 
                }
                $this->cache->set($refresh_cache_key, true);
            }

            $cache_key = 'instagram_posts.' . (int)$this->config->get('config_store_id') . '.' . ($setting['name'] ?? 'default');
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
                    $posts = array(); 
                }
            }
            
            $data['posts'] = $posts;
        }

        return $this->load->view('extension/module/section_insta', $data);
    }


    private function refreshToken($old_token, $setting) {
        $url = "https://graph.instagram.com/refresh_access_token?grant_type=ig_refresh_token&access_token=" . $old_token;

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);
        $output = curl_exec($ch);
        curl_close($ch);

        $result = json_decode($output, true);

        if (isset($result['access_token'])) {
            $new_token = $result['access_token'];
            $this->load->model('setting/module');
    
            if (isset($this->request->get['module_id'])) {
                $module_id = $this->request->get['module_id'];
            } else {
                return $new_token; 
            }

            $module_info = $this->model_setting_module->getModule($module_id);
            if ($module_info) {
                $module_info['insta_token'] = $new_token;
                $this->model_setting_module->editModule($module_id, $module_info);
            }

            return $new_token;
        }

        return false;
    }
}