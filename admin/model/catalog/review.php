<?php
class ModelCatalogReview extends Model {
	public function addReview($data) {
		$this->db->query("INSERT INTO " . DB_PREFIX . "review SET author = '" . $this->db->escape($data['author']) . "', email = '" . $this->db->escape($data['email']) . "', product_id = '" . (int)$data['product_id'] . "', text = '" . $this->db->escape(strip_tags($data['text'])) . "', rating = '" . (int)$data['rating'] . "', status = '" . (int)$data['status'] . "', date_added = '" . $this->db->escape($data['date_added']) . "'");

		$review_id = $this->db->getLastId();

		if (isset($data['review_image'])) {
			foreach ($data['review_image'] as $image) {
				if ($image) {
					$this->db->query("INSERT INTO " . DB_PREFIX . "review_image SET review_id = '" . (int)$review_id . "', image = '" . $this->db->escape($image) . "'");
				}
			}
		}

		$this->cache->delete('product');
		return $review_id;
	}

	public function editReview($review_id, $data) {
		$this->db->query("UPDATE " . DB_PREFIX . "review SET author = '" . $this->db->escape($data['author']) . "', email = '" . $this->db->escape($data['email']) . "', product_id = '" . (int)$data['product_id'] . "', text = '" . $this->db->escape(strip_tags($data['text'])) . "', rating = '" . (int)$data['rating'] . "', status = '" . (int)$data['status'] . "', date_added = '" . $this->db->escape($data['date_added']) . "', date_modified = NOW() WHERE review_id = '" . (int)$review_id . "'");

		$this->db->query("DELETE FROM " . DB_PREFIX . "review_image WHERE review_id = '" . (int)$review_id . "'");

		if (isset($data['review_image'])) {
			foreach ($data['review_image'] as $image) {
				if ($image) {
					$this->db->query("INSERT INTO " . DB_PREFIX . "review_image SET review_id = '" . (int)$review_id . "', image = '" . $this->db->escape($image) . "'");
				}
			}
		}

		$this->cache->delete('product');
	}

	public function deleteReview($review_id) {
		$this->db->query("DELETE FROM " . DB_PREFIX . "review WHERE review_id = '" . (int)$review_id . "'");
		$this->db->query("DELETE FROM " . DB_PREFIX . "review_image WHERE review_id = '" . (int)$review_id . "'");
		$this->cache->delete('product');
	}

	public function getReview($review_id) {
		$query = $this->db->query("SELECT DISTINCT *, (SELECT pd.name FROM " . DB_PREFIX . "product_description pd WHERE pd.product_id = r.product_id AND pd.language_id = '" . (int)$this->config->get('config_language_id') . "') AS product FROM " . DB_PREFIX . "review r WHERE r.review_id = '" . (int)$review_id . "'");
		return $query->row;
	}

	public function getReviewImages($review_id) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "review_image WHERE review_id = '" . (int)$review_id . "'");
		return $query->rows;
	}

    public function deleteImage() {
        $json = array();
        if (isset($this->request->post['review_image_id']) && $this->user->hasPermission('modify', 'catalog/review')) {
            $this->load->model('catalog/review');
            $this->model_catalog_review->deleteReviewImage($this->request->post['review_image_id']);
            $json['success'] = 'Фото видалено';
        } else {
            $json['error'] = 'Помилка доступу';
        }
        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }

	public function getReviews($data = array()) {
		$sql = "SELECT r.review_id, pd.name, r.author, r.rating, r.status, r.date_added FROM " . DB_PREFIX . "review r LEFT JOIN " . DB_PREFIX . "product_description pd ON (r.product_id = pd.product_id) WHERE pd.language_id = '" . (int)$this->config->get('config_language_id') . "'";

		if (!empty($data['filter_product'])) { $sql .= " AND pd.name LIKE '" . $this->db->escape($data['filter_product']) . "%'"; }
		if (!empty($data['filter_author'])) { $sql .= " AND r.author LIKE '" . $this->db->escape($data['filter_author']) . "%'"; }
		if (isset($data['filter_status']) && $data['filter_status'] !== '') { $sql .= " AND r.status = '" . (int)$data['filter_status'] . "'"; }
		if (!empty($data['filter_date_added'])) { $sql .= " AND DATE(r.date_added) = DATE('" . $this->db->escape($data['filter_date_added']) . "')"; }

		$sql .= " ORDER BY " . ($data['sort'] ?? 'r.date_added') . " " . ($data['order'] ?? 'DESC');
		if (isset($data['start']) || isset($data['limit'])) { $sql .= " LIMIT " . (int)($data['start'] ?? 0) . "," . (int)($data['limit'] ?? 20); }

		return $this->db->query($sql)->rows;
	}

	public function getTotalReviews($data = array()) {
		$sql = "SELECT COUNT(*) AS total FROM " . DB_PREFIX . "review r LEFT JOIN " . DB_PREFIX . "product_description pd ON (r.product_id = pd.product_id) WHERE pd.language_id = '" . (int)$this->config->get('config_language_id') . "'";
		// ... (ті ж фільтри, що в getReviews)
		return $this->db->query($sql)->row['total'];
	}
}