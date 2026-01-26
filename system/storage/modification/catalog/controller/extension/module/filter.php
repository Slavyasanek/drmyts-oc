<?php
class ControllerExtensionModuleFilter extends Controller {
	public function index() {
		if (isset($this->request->get['path'])) {
			$parts = explode('_', (string)$this->request->get['path']);
		} else {
			$parts = array();
		}

		$category_id = end($parts);

		$this->load->model('catalog/category');

		$category_info = $this->model_catalog_category->getCategory($category_id);

		if ($category_info) {
			$this->load->language('extension/module/filter');

			$url = '';

			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			if (isset($this->request->get['limit'])) {
				$url .= '&limit=' . $this->request->get['limit'];
			}

			$data['action'] = str_replace('&amp;', '&', $this->url->link('product/category', 'path=' . $this->request->get['path'] . $url));

			if (isset($this->request->get['filter'])) {
				$data['filter_category'] = explode(',', $this->request->get['filter']);
			} else {
				$data['filter_category'] = array();
			}

			$this->load->model('catalog/product');

			$data['filter_groups'] = array();

			$filter_groups = $this->model_catalog_category->getCategoryFilters($category_id);

			if ($filter_groups) {
				foreach ($filter_groups as $filter_group) {
					$childen_data = array();

					foreach ($filter_group['filter'] as $filter) {
						$filter_data = array(
							'filter_category_id' => $category_id,
							'filter_filter'      => $filter['filter_id']
						);

						$childen_data[] = array(
							'filter_id' => $filter['filter_id'],
							
                'name'      => $filter['name'] . '<span class="text--color_gray">' . ($this->config->get('config_product_count') ? ' (' . $this->model_catalog_product->getTotalProducts($filter_data) . ')' : '') . '</span>',
            
						);
					}

					$data['filter_groups'][] = array(
						'filter_group_id' => $filter_group['filter_group_id'],
						'name'            => $filter_group['name'],
						'filter'          => $childen_data
					);
				}


            // Визначаємо поточні фільтри з URL для коректної роботи логіки
            $current_filters = isset($this->request->get['filter']) ? $this->request->get['filter'] : '';

            $data['active_filters'] = array();
            $data['reset_url'] = $this->url->link('product/category', 'path=' . $this->request->get['path']);

            if (!empty($current_filters)) {
                $filter_ids = explode(',', $current_filters);
                foreach ($filter_ids as $filter_id) {
                    $query = $this->db->query("SELECT *, (SELECT name FROM " . DB_PREFIX . "filter_group_description fgd WHERE f.filter_group_id = fgd.filter_group_id AND fgd.language_id = '" . (int)$this->config->get('config_language_id') . "') AS `group` FROM " . DB_PREFIX . "filter f LEFT JOIN " . DB_PREFIX . "filter_description fd ON (f.filter_id = fd.filter_id) WHERE f.filter_id = '" . (int)$filter_id . "' AND fd.language_id = '" . (int)$this->config->get('config_language_id') . "'");
                    
                    if ($query->row) {
                        $remaining_filters = array_diff($filter_ids, array($filter_id));
                        $url = '';
                        if (!empty($remaining_filters)) {
                            $url .= '&filter=' . implode(',', $remaining_filters);
                        }
                        if (isset($this->request->get['sort'])) {
                            $url .= '&sort=' . $this->request->get['sort'];
                        }
                        if (isset($this->request->get['order'])) {
                            $url .= '&order=' . $this->request->get['order'];
                        }
                        if (isset($this->request->get['limit'])) {
                            $url .= '&limit=' . $this->request->get['limit'];
                        }

                        $data['active_filters'][] = array(
                            'name'        => $query->row['name'],
                            'remove_href' => $this->url->link('product/category', 'path=' . $this->request->get['path'] . $url)
                        );
                    }
                }
            }
            
				return $this->load->view('extension/module/filter', $data);
			}
		}
	}
}