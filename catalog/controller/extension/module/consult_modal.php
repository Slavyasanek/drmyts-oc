<?php
class ControllerExtensionModuleConsultModal extends Controller {
    public function index() {
        if (!isset($this->session->data['tg_id']) || !$this->customer->isLogged()) {
            return '';
        }
        $data = $this->load->language('extension/module/consult_modal');
        $data['tg_id'] = $this->session->data['tg_id'];
        
        $data['firstname'] = $this->customer->getFirstName();
        $data['email'] = $this->customer->getEmail();

        return $this->load->view('extension/module/consult_modal', $data);
    }

    public function save() {
        $this->load->language('extension/module/consult_modal');
        $json = array();

        if (!$this->customer->isLogged()) {
            $json['error']['warning'] = $this->language->get('error_login');
        }

        if (!$json && $this->request->server['REQUEST_METHOD'] == 'POST') {
            

            if ((int)$this->request->post['user_age'] <= 0) {
                $json['error']['age'] = $this->language->get('error_age');
            }

            if (empty($this->request->post['user_city'])) {
                $json['error']['city'] = $this->language->get('error_city');
            }

            if (empty($this->request->post['user_gender'])) {
                $json['error']['gender'] = $this->language->get('error_gender');
            }

            if (empty($this->request->post['skin'])) {
                $json['error']['skin'] = $this->language->get('error_skin');
            }

            $uploaded_photos = array();
            if (isset($this->request->files['review_photos'])) {
                foreach ($this->request->files['review_photos']['name'] as $key => $value) {
                    if (!$this->request->files['review_photos']['error'][$key]) {
                        $filename = basename($this->request->files['review_photos']['name'][$key]);
                        $file_ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
                        
                        $allowed = array('jpg', 'jpeg', 'png', 'webp');
                        if (!in_array($file_ext, $allowed)) {
                            $json['error']['photos'] = $this->language->get('error_file_type');
                            break;
                        }

                        $target_dir = DIR_IMAGE . 'catalog/consultations/';
                        if (!is_dir($target_dir)) mkdir($target_dir, 0777, true);

                        $new_name = 'consult_' . $this->customer->getId() . '_' . token(5) . '.' . $file_ext;
                        
                        if (move_uploaded_file($this->request->files['review_photos']['tmp_name'][$key], $target_dir . $new_name)) {
                            $uploaded_photos[] = 'catalog/consultations/' . $new_name;
                        }
                    }
                }
            }

            if (!$json) {
                $this->load->model('extension/module/consultation');
                

                $this->model_extension_module_consultation->addConsultation($this->request->post, $uploaded_photos);

                $tg_id = $this->session->data['tg_id'];
                unset($this->session->data['tg_id']);
                unset($this->session->data['show_consult_warning']);

                $bot_main_link = $this->config->get('config_telegram_bot_url');
            
                if (!$bot_main_link) {
                    $bot_main_link = 'https://t.me/your_default_bot';
                }

                $json['success'] = true;
                $json['redirect'] = rtrim($bot_main_link, '/') . '' . $tg_id;
            }
        }

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }
}