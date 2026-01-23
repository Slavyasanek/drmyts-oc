<?php
class ControllerCatalogReview extends Controller {
	private $error = array();

	public function index() {
		$this->load->language('catalog/review');
		$this->document->setTitle($this->language->get('heading_title'));
		$this->load->model('catalog/review');
		$this->getList();
	}

	public function add() {
		$this->load->language('catalog/review');
		$this->document->setTitle($this->language->get('heading_title'));
		$this->load->model('catalog/review');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {
			$this->model_catalog_review->addReview($this->request->post);
			$this->session->data['success'] = $this->language->get('text_success');
			$url = $this->getUrlData();
			$this->response->redirect($this->url->link('catalog/review', 'user_token=' . $this->session->data['user_token'] . $url, true));
		}
		$this->getForm();
	}

	public function edit() {
		$this->load->language('catalog/review');
		$this->document->setTitle($this->language->get('heading_title'));
		$this->load->model('catalog/review');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {
			$this->model_catalog_review->editReview($this->request->get['review_id'], $this->request->post);
			$this->session->data['success'] = $this->language->get('text_success');
			$url = $this->getUrlData();
			$this->response->redirect($this->url->link('catalog/review', 'user_token=' . $this->session->data['user_token'] . $url, true));
		}
		$this->getForm();
	}

	public function delete() {
		$this->load->language('catalog/review');
		$this->document->setTitle($this->language->get('heading_title'));
		$this->load->model('catalog/review');

		if (isset($this->request->post['selected']) && $this->validateDelete()) {
			foreach ($this->request->post['selected'] as $review_id) {
				$this->model_catalog_review->deleteReview($review_id);
			}
			$this->session->data['success'] = $this->language->get('text_success');
			$url = $this->getUrlData();
			$this->response->redirect($this->url->link('catalog/review', 'user_token=' . $this->session->data['user_token'] . $url, true));
		}
		$this->getList();
	}

	public function deleteImage() {
		$json = array();
		if (isset($this->request->post['review_image_id']) && $this->user->hasPermission('modify', 'catalog/review')) {
			$this->load->model('catalog/review');
			
			$query = $this->db->query("SELECT image FROM " . DB_PREFIX . "review_image WHERE review_image_id = '" . (int)$this->request->post['review_image_id'] . "'");
			
			if ($query->row && is_file(DIR_IMAGE . $query->row['image'])) {
				// За бажанням можна видаляти і фізичний файл: unlink(DIR_IMAGE . $query->row['image']);
			}

			$this->db->query("DELETE FROM " . DB_PREFIX . "review_image WHERE review_image_id = '" . (int)$this->request->post['review_image_id'] . "'");
			$json['success'] = true;
		}
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	protected function getForm() {
		$data['text_form'] = !isset($this->request->get['review_id']) ? $this->language->get('text_add') : $this->language->get('text_edit');
		$data['user_token'] = $this->session->data['user_token'];

		$errors = array('warning', 'product', 'author', 'text', 'rating');
		foreach ($errors as $error) {
			$data['error_' . $error] = $this->error[$error] ?? '';
		}

		$url = $this->getUrlData();

		$data['breadcrumbs'] = array();
		$data['breadcrumbs'][] = array('text' => $this->language->get('text_home'), 'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true));
		$data['breadcrumbs'][] = array('text' => $this->language->get('heading_title'), 'href' => $this->url->link('catalog/review', 'user_token=' . $this->session->data['user_token'] . $url, true));

		if (!isset($this->request->get['review_id'])) {
			$data['action'] = $this->url->link('catalog/review/add', 'user_token=' . $this->session->data['user_token'] . $url, true);
		} else {
			$data['action'] = $this->url->link('catalog/review/edit', 'user_token=' . $this->session->data['user_token'] . '&review_id=' . $this->request->get['review_id'] . $url, true);
		}

		$data['cancel'] = $this->url->link('catalog/review', 'user_token=' . $this->session->data['user_token'] . $url, true);

		if (isset($this->request->get['review_id']) && ($this->request->server['REQUEST_METHOD'] != 'POST')) {
			$review_info = $this->model_catalog_review->getReview($this->request->get['review_id']);
		}

		$fields = array('product_id', 'product', 'author', 'email', 'text', 'rating', 'date_added', 'status');
		foreach ($fields as $field) {
			if (isset($this->request->post[$field])) {
				$data[$field] = $this->request->post[$field];
			} elseif (!empty($review_info)) {
				$data[$field] = $review_info[$field];
			} else {
				$data[$field] = ($field == 'status') ? 1 : '';
			}
		}

		// Фотографії
		$this->load->model('tool/image');
		$data['placeholder'] = $this->model_tool_image->resize('no_image.png', 100, 100);
		$data['review_images'] = array();

		if (isset($this->request->post['review_image'])) {
			$review_images = $this->request->post['review_image'];
		} elseif (isset($this->request->get['review_id'])) {
			$review_images = $this->model_catalog_review->getReviewImages($this->request->get['review_id']);
		} else {
			$review_images = array();
		}

		foreach ($review_images as $val) {
			$img_path = is_array($val) ? $val['image'] : $val;
			$review_image_id = is_array($val) ? ($val['review_image_id'] ?? 0) : 0;

			if (is_file(DIR_IMAGE . $img_path)) {
				$data['review_images'][] = array(
					'review_image_id' => $review_image_id,
					'image' => $img_path,
					'thumb' => $this->model_tool_image->resize($img_path, 100, 100)
				);
			}
		}

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('catalog/review_form', $data));
	}

	private function getUrlData() {
		$url = '';
		$params = array('filter_product', 'filter_author', 'filter_status', 'filter_date_added', 'sort', 'order', 'page');
		foreach ($params as $param) {
			if (isset($this->request->get[$param])) {
				$url .= '&' . $param . '=' . (in_array($param, array('filter_product', 'filter_author')) ? urlencode(html_entity_decode($this->request->get[$param], ENT_QUOTES, 'UTF-8')) : $this->request->get[$param]);
			}
		}
		return $url;
	}

	protected function validateForm() {
		if (!$this->user->hasPermission('modify', 'catalog/review')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		if (!$this->request->post['product_id']) {
			$this->error['product'] = $this->language->get('error_product');
		}

		if ((utf8_strlen($this->request->post['author']) < 3) || (utf8_strlen($this->request->post['author']) > 64)) {
			$this->error['author'] = $this->language->get('error_author');
		}

		if (utf8_strlen($this->request->post['text']) < 1) {
			$this->error['text'] = $this->language->get('error_text');
		}

		if (!isset($this->request->post['rating']) || $this->request->post['rating'] < 0 || $this->request->post['rating'] > 5) {
			$this->error['rating'] = $this->language->get('error_rating');
		}
		return !$this->error;
	}

	public function enable() { $this->statusChange(1); }
	public function disable() { $this->statusChange(0); }

	private function statusChange($status) {
		$this->load->model('catalog/review');
		if (isset($this->request->post['selected']) && $this->user->hasPermission('modify', 'catalog/review')) {
			foreach ($this->request->post['selected'] as $review_id) {
				$review_info = $this->model_catalog_review->getReview($review_id);
				if ($review_info) {
					$review_info['status'] = $status;
					$this->model_catalog_review->editReview($review_id, $review_info);
				}
			}
			$this->session->data['success'] = $this->language->get('text_success');
		}
		$this->response->redirect($this->url->link('catalog/review', 'user_token=' . $this->session->data['user_token'] . $this->getUrlData(), true));
	}

	protected function getList() {
        // Стандартний метод getList...
        $url = $this->getUrlData();
        $data['breadcrumbs'] = array();
        $data['breadcrumbs'][] = array('text' => $this->language->get('text_home'), 'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true));
        $data['breadcrumbs'][] = array('text' => $this->language->get('heading_title'), 'href' => $this->url->link('catalog/review', 'user_token=' . $this->session->data['user_token'] . $url, true));
        
        $data['add'] = $this->url->link('catalog/review/add', 'user_token=' . $this->session->data['user_token'] . $url, true);
        $data['delete'] = $this->url->link('catalog/review/delete', 'user_token=' . $this->session->data['user_token'] . $url, true);

        $filter_data = array(
            'filter_product'    => $this->request->get['filter_product'] ?? '',
            'filter_author'     => $this->request->get['filter_author'] ?? '',
            'filter_status'     => $this->request->get['filter_status'] ?? '',
            'filter_date_added' => $this->request->get['filter_date_added'] ?? '',
            'sort'              => $this->request->get['sort'] ?? 'r.date_added',
            'order'             => $this->request->get['order'] ?? 'DESC',
            'start'             => (($this->request->get['page'] ?? 1) - 1) * $this->config->get('config_limit_admin'),
            'limit'             => $this->config->get('config_limit_admin')
        );

        $results = $this->model_catalog_review->getReviews($filter_data);
        $review_total = $this->model_catalog_review->getTotalReviews($filter_data);
        $data['reviews'] = array();

        foreach ($results as $result) {
            $data['reviews'][] = array(
                'review_id'  => $result['review_id'],
                'name'       => $result['name'],
                'author'     => $result['author'],
                'rating'     => $result['rating'],
                'status'     => ($result['status']) ? $this->language->get('text_enabled') : $this->language->get('text_disabled'),
                'date_added' => date($this->language->get('date_format_short'), strtotime($result['date_added'])),
                'edit'       => $this->url->link('catalog/review/edit', 'user_token=' . $this->session->data['user_token'] . '&review_id=' . $result['review_id'] . $url, true)
            );
        }

        $data['user_token'] = $this->session->data['user_token'];
        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view('catalog/review_list', $data));
    }
    
    protected function validateDelete() {
        if (!$this->user->hasPermission('modify', 'catalog/review')) {
            $this->error['warning'] = $this->language->get('error_permission');
        }
        return !$this->error;
    }
}