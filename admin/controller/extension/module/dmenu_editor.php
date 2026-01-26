<?php
/**
 * Controller Module D.Menu Editor Class
 *
 * @version 1.0
 * 
 * @author D.art <d.art.reply@gmail.com>
 */

class ControllerExtensionModuleDMenuEditor extends Controller {
    private $error = array();
    private $stores = array();
    private $languages = array();

    private $prepared = array();

    private $sprite = array(
        'menu'    => array(),
        'catalog' => array()
    );

    private $settings = array(
        'menu' => array(
            'main' => array(
                'icon' => array('width' => 16, 'height' => 16, 'sprite' => 0)
            ),
            'top' => array(
                'icon' => array('width' => 16, 'height' => 16, 'sprite' => 0)
            ),
            'footer' => array(
                'icon' => array('width' => 16, 'height' => 16, 'sprite' => 0)
            ),
            'social' => array(
                'icon' => array('width' => 16, 'height' => 16, 'sprite' => 0)
            )
        ),
        'catalog' => array(
            'icon' => array('width' => 48, 'height' => 48)
        ),
        'sprite' => array(
            'icon_border' => 1,      // Icon border (padding), px
            'icon_max'    => 64,     // Max Icon dimensions (width x height), px
            'columns'     => array(  // Number of Icons in 1 (one) row
                'menu'     => 10, // Menu Items
                'catalog'  => 20  // Catalog Items
            ),
            'format'      => 'webp', // Sprite image format
            'extension'   => array('gif','jpg','jpeg','png','webp'),
            'mime'        => array('image/gif','image/jpeg','image/png','image/webp')
        ),
        'devices' => array('desktop_ultra', 'desktop_hd', 'tablet', 'mobile'),
        'limit_items'  => 50, // Limit items for view (Menu tab -> Left Sticky Sidebar)
        'limit_search' => 20, // Limit items in 'Search' tab (Menu tab -> Left Sticky Sidebar)
        'HTTP_SERVER'  => HTTP_SERVER,
        'HTTP_CATALOG' => HTTP_CATALOG,
        'PATH_IMAGE'   => ''  // IMAGE_CATALOG directory path. Can be specified manually (for example: 'image/new_dir_image').
    );

    public function index() {
        $this->load->language('extension/module/dmenu_editor');

        $this->document->setTitle($this->language->get('heading_title'));

        $this->load->model('localisation/language');
        $this->load->model('setting/setting');
        $this->load->model('tool/image');
        $this->load->model('extension/module/dmenu_editor');

        // OpenCart data.
        if ($this->request->server['HTTPS']) {
            $this->settings['HTTP_SERVER'] = HTTPS_SERVER;
            $this->settings['HTTP_CATALOG'] = HTTPS_CATALOG;
        } else {
            $this->settings['HTTP_SERVER'] = HTTP_SERVER;
            $this->settings['HTTP_CATALOG'] = HTTP_CATALOG;
        }

        // Stores.
		$this->stores[] = array(
			'store_id' => 0,
			'name'     => $this->language->get('text_store_default'),
            'url'      => ''
		);

        $results = $this->model_extension_module_dmenu_editor->getStores();

        foreach ($results as $result) {
            $this->stores[] = $result;
        }

        // Module Settings.
        if (isset($this->request->post['module_dmenu_editor_settings'])) {
            $data['module_settings'] = $this->request->post['module_dmenu_editor_settings'];
        } else if (!empty($this->config->get('module_dmenu_editor_settings'))) {
            $data['module_settings'] = $this->config->get('module_dmenu_editor_settings');
        } else {
            $data['module_settings'] = array();
        }

        // Setting 'Icon'.
        foreach ($this->settings['menu'] as $menu_type => $menu) {
            $this->icon($data, $menu_type);
        }

        // IMAGE_CATALOG directory path.
        if (!$this->settings['PATH_IMAGE']) {
            $dir_image = explode('/', DIR_IMAGE);
            $http_catalog = explode('/', $this->settings['HTTP_CATALOG']);

            if (!$this->endc($dir_image)) array_pop($dir_image);
            if (!$this->endc($http_catalog)) array_pop($http_catalog);

            foreach (array_keys($dir_image) as $index) {
                $dir = $dir_image[$index];
                unset($dir_image[$index]);
                if ($dir == $this->endc($http_catalog)) break;
            }

            $this->settings['PATH_IMAGE'] = implode('/', array_values($dir_image));
        }

        // Save Module data.
        if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate($this->request->post, array('validate', 'edit'))) {
            // Set PATH_IMAGE to POST.
            $this->request->post['module_dmenu_editor_extra']['PATH_IMAGE'] = $this->settings['PATH_IMAGE'];

            // Set prepared data to POST.
            $this->request->post['module_dmenu_editor_extra']['prepared'] = $this->prepared;

            // Create Sprite.
            $this->makeSprite($this->request->post);

            // Array $data['POST'] for DB Settings.
            $data['POST'] = $this->request->post;

            // Except `key` columns for deleting in DB.
            $del_except_keys = array();

            // Remove empty menus from $data['POST'] array.
            foreach ($this->settings['menu'] as $menu_type => $menu) {
                foreach ($this->stores as $store) {
                    if (!$data['POST']['module_dmenu_editor_items_' . $menu_type . '_' . $store['store_id']]) {
                        unset($data['POST']['module_dmenu_editor_items_' . $menu_type . '_' . $store['store_id']]);
                    }

                    $del_except_keys[] = 'module_dmenu_editor_catalog_' . $store['store_id'];
                }
            }

            // Set POST data to DB.
            $this->model_extension_module_dmenu_editor->editSetting('module_dmenu_editor', $data['POST'], $del_except_keys);

            $this->session->data['success'] = $this->language->get('text_success');

            if (!isset($this->request->get['apply'])) {
                $this->response->redirect($this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true));
            } else {
                $data['success'] = $this->language->get('text_success');
            }

            // Delete $data['POST'] array.
            unset($data['POST']);
        }

        $this->document->addStyle($this->settings['HTTP_SERVER'] . 'view/javascript/module-dmenu_editor/dmenu_editor.css');
        $this->document->addScript($this->settings['HTTP_SERVER'] . 'view/javascript/module-dmenu_editor/sortable/sortable.min.js');
        $this->document->addScript($this->settings['HTTP_SERVER'] . 'view/javascript/module-dmenu_editor/jquery-serialize-object/jquery.serialize-object.dmenu.js');
        $this->document->addScript($this->settings['HTTP_SERVER'] . 'view/javascript/module-dmenu_editor/dmenu_editor.js');

        // Module Warnings.
        if (isset($this->error['error_items'])) {
            $data['error_items'] = $this->error['error_items'];
        } else {
            $data['error_items'] = array();
        }

        // Breadcrumbs.
        $data['breadcrumbs'] = array();

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
        );

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_extension'),
            'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true)
        );

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('heading_title'),
            'href' => $this->url->link('extension/module/dmenu_editor', 'user_token=' . $this->session->data['user_token'], true)
        );

        // Module buttons.
        $data['save'] = $this->url->link('extension/module/dmenu_editor/save', 'user_token=' . $this->session->data['user_token'], true);
        $data['apply'] = $this->url->link('extension/module/dmenu_editor', 'user_token=' . $this->session->data['user_token'] . '&apply=1', true);
        $data['action'] = $this->url->link('extension/module/dmenu_editor', 'user_token=' . $this->session->data['user_token'], true);
        $data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true);

        // Set extended data.
        $this->setExtendedData($data);

        // Stores to $data array.
		$data['stores'] = $this->stores;

        // AJAX-actions.
        $data['action_ajax_item'] = $this->url->link('extension/module/dmenu_editor/item', 'user_token=' . $this->session->data['user_token'], true);
        $data['action_ajax_category'] = $this->url->link('extension/module/dmenu_editor/category', 'user_token=' . $this->session->data['user_token'], true);
        $data['action_ajax_catalog_change'] = $this->url->link('extension/module/dmenu_editor/changeCatalog', 'user_token=' . $this->session->data['user_token'], true);
        $data['action_ajax_search'] = $this->url->link('extension/module/dmenu_editor/search', 'user_token=' . $this->session->data['user_token'], true);

        // Module Style.
        if (isset($this->request->post['module_dmenu_editor_style'])) {
            $data['module_style'] = $this->request->post['module_dmenu_editor_style'];
        } else if (!empty($this->config->get('module_dmenu_editor_style'))) {
            $data['module_style'] = $this->config->get('module_dmenu_editor_style');
        } else {
            $data['module_style'] = array();
        }

        // Setting 'Status'.
        if (isset($this->request->post['module_dmenu_editor_status'])) {
            $data['module_dmenu_editor_status'] = $this->request->post['module_dmenu_editor_status'];
        } else if (!empty($this->config->get('module_dmenu_editor_status'))) {
            $data['module_dmenu_editor_status'] = $this->config->get('module_dmenu_editor_status');
        } else {
            $data['module_dmenu_editor_status'] = 0;
        }

        // Setting 'ocStore Blog Support'.
        if (empty($data['module_settings']['general']['ocstore_blog'])) {
            $data['module_settings']['general']['ocstore_blog'] = 0;
        }

        // Help for Setting 'Icon Sprite'.
        $data['help_icon_sprite'] = sprintf($this->language->get('help_icon_sprite'), $this->settings['sprite']['icon_max'], $this->settings['sprite']['icon_max']);

        // Search limit (Menu).
        $data['search_limit'] = $this->settings['limit_search'];
        $data['search_limit_num'] = sprintf($this->language->get('help_search_limit'), $data['search_limit']);
        $data['search_limit_text'] = sprintf($this->language->get('help_sticky_search'), $data['search_limit_num']);

        // Search limit (Catalog).
        $data['catalog_search_limit_text'] = sprintf($this->language->get('help_catalog_search'), $this->language->get('entry_category_name'), $data['search_limit_num']);

        // Information.
        $data['information_limit'] = $this->settings['limit_items'];
        $data['information'] = $this->model_extension_module_dmenu_editor->getInformation($data['information_limit']);

        // Categories.
        $data['categories_limit'] = $this->settings['limit_items'];
        $data['categories'] = $this->model_extension_module_dmenu_editor->getCategories($data['categories_limit']);

        // Products.
        $data['products_limit'] = $this->settings['limit_items'];
        $data['products'] = $this->model_extension_module_dmenu_editor->getProducts($data['products_limit']);

        // Manufacturers.
        $data['manufacturers_limit'] = $this->settings['limit_items'];
        $data['manufacturers'] = $this->model_extension_module_dmenu_editor->getManufacturers($data['manufacturers_limit']);

        // ocStore Blog.
        $this->getBlogSupport($data);

        // Module pages.
        $data['opencart_pages'] = array();
        $data['other_pages'] = array();

        // OC Page 'Home'.
        $data['opencart_pages']['home'] = array(
            'id'     => 0,
            'layout' => 'home',
            'names'  => $this->names('text_item_desc_home'),
            'url'    => $this->model_extension_module_dmenu_editor->getUrl('home'),
            'title'  => $this->language->get('text_item_desc_home')
        );

        // OC Page 'Contact Us'.
        $data['opencart_pages']['contact'] = array(
            'id'     => 0,
            'layout' => 'contact',
            'names'  => $this->names('text_item_desc_contact'),
            'url'    => $this->model_extension_module_dmenu_editor->getUrl('contact'),
            'title'  => $this->language->get('entry_add_contactus')
        );

        // OC Page 'Sitemap'.
        $data['opencart_pages']['sitemap'] = array(
            'id'     => 0,
            'layout' => 'sitemap',
            'names'  => $this->names('text_item_desc_sitemap'),
            'url'    => $this->model_extension_module_dmenu_editor->getUrl('sitemap'),
            'title'  => $this->language->get('entry_add_sitemap')
        );

        // OC Page 'Cart'.
        $data['opencart_pages']['cart'] = array(
            'id'     => 0,
            'layout' => 'cart',
            'names'  => $this->names('text_item_desc_cart'),
            'url'    => $this->model_extension_module_dmenu_editor->getUrl('cart'),
            'title'  => $this->language->get('entry_add_cart')
        );

        // OC Page 'Checkout'.
        $data['opencart_pages']['checkout'] = array(
            'id'     => 0,
            'layout' => 'checkout',
            'names'  => $this->names('text_item_desc_checkout'),
            'url'    => $this->model_extension_module_dmenu_editor->getUrl('checkout'),
            'title'  => $this->language->get('entry_add_checkout')
        );

        // OC Page 'Compare'.
        $data['opencart_pages']['compare'] = array(
            'id'     => 0,
            'layout' => 'compare',
            'names'  => $this->names('text_item_desc_compare'),
            'url'    => $this->model_extension_module_dmenu_editor->getUrl('compare'),
            'title'  => $this->language->get('entry_add_compare')
        );

        // OC Page 'Wishlist'.
        $data['opencart_pages']['wishlist'] = array(
            'id'     => 0,
            'layout' => 'wishlist',
            'names'  => $this->names('text_item_desc_wishlist'),
            'url'    => $this->model_extension_module_dmenu_editor->getUrl('wishlist'),
            'title'  => $this->language->get('entry_add_wishlist')
        );

        // OC Page 'Manufacturers'.
        $data['opencart_pages']['manufacturers'] = array(
            'id'     => 0,
            'layout' => 'manufacturers',
            'names'  => $this->names('text_item_desc_manufacturers'),
            'url'    => $this->model_extension_module_dmenu_editor->getUrl('manufacturers'),
            'title'  => $this->language->get('entry_add_manufacturers')
        );

        // OC Page 'Special'.
        $data['opencart_pages']['special'] = array(
            'id'     => 0,
            'layout' => 'special',
            'names'  => $this->names('text_item_desc_special'),
            'url'    => $this->model_extension_module_dmenu_editor->getUrl('special'),
            'title'  => $this->language->get('entry_add_special')
        );

        // OC Page 'Search'.
        $data['opencart_pages']['search'] = array(
            'id'     => 0,
            'layout' => 'search',
            'names'  => $this->names('text_item_desc_search'),
            'url'    => $this->model_extension_module_dmenu_editor->getUrl('search'),
            'title'  => $this->language->get('entry_add_search')
        );

        // OC Page 'Account Register'.
        $data['opencart_pages']['register'] = array(
            'id'     => 0,
            'layout' => 'register',
            'names'  => $this->names('text_item_desc_register'),
            'url'    => $this->model_extension_module_dmenu_editor->getUrl('register'),
            'title'  => $this->language->get('entry_add_register')
        );

        // OC Page 'Account'.
        $data['opencart_pages']['account'] = array(
            'id'     => 0,
            'layout' => 'account',
            'names'  => $this->names('text_item_desc_account'),
            'url'    => $this->model_extension_module_dmenu_editor->getUrl('account'),
            'title'  => $this->language->get('entry_add_account')
        );

        // OC Page 'Account Login'.
        $data['opencart_pages']['login'] = array(
            'id'     => 0,
            'layout' => 'login',
            'names'  => $this->names('text_item_desc_login'),
            'url'    => $this->model_extension_module_dmenu_editor->getUrl('login'),
            'title'  => $this->language->get('entry_add_login')
        );

        // OC Page 'Account Logout'.
        $data['opencart_pages']['logout'] = array(
            'id'     => 0,
            'layout' => 'logout',
            'names'  => $this->names('text_item_desc_logout'),
            'url'    => $this->model_extension_module_dmenu_editor->getUrl('logout'),
            'title'  => $this->language->get('entry_add_logout')
        );

        // Other Page 'Catalog'.
        $data['other_pages']['catalog'] = array(
            'id'     => 0,
            'layout' => 'catalog',
            'names'  => $this->names('text_dropdown_catalog'),
            'url'    => '',
            'title'  => ''
        );

        // Other Page 'Custom link'.
        $data['other_pages']['custom'] = array(
            'id'     => 0,
            'layout' => 'custom',
            'names'  => $this->names('entry_add_custom_link'),
            'url'    => '',
            'title'  => ''
        );

        // Menu Sticky (HTML).
        $data['sticky_blog'] = $this->load->view('extension/module/dmenu_editor/sticky/blog', $data);
        $data['sticky_items'] = $this->load->view('extension/module/dmenu_editor/sticky/items', $data);
        $data['menu_sticky'] = $this->load->view('extension/module/dmenu_editor/sticky/container', $data);

        // Menu Items.
        foreach ($this->settings['menu'] as $menu_type => $menu) {
            $data['menus'][$menu_type] = array();
            $data['menu_styles'][$menu_type] = array();
            $data['menu_style'][$menu_type] = array();

            foreach ($this->stores as $store) {
                // Menu Items (Array).
                if (isset($this->request->post['module_dmenu_editor_items_' . $menu_type . '_' . $store['store_id']])) {
                    $data['menus'][$menu_type]['store_' . $store['store_id']] = $this->request->post['module_dmenu_editor_items_' . $menu_type . '_' . $store['store_id']];
                } else if (is_array($this->config->get('module_dmenu_editor_items_' . $menu_type . '_' . $store['store_id']))) {
                    $data['menus'][$menu_type]['store_' . $store['store_id']] = $this->config->get('module_dmenu_editor_items_' . $menu_type . '_' . $store['store_id']);
                } else {
                    $data['menus'][$menu_type]['store_' . $store['store_id']] = array();
                }

                // Menu Styles (Array).
                if (isset($this->request->post['module_dmenu_editor_styles_' . $menu_type . '_' . $store['store_id']])) {
                    $data['menu_styles'][$menu_type]['store_' . $store['store_id']] = $this->request->post['module_dmenu_editor_styles_' . $menu_type . '_' . $store['store_id']];
                } else if (is_array($this->config->get('module_dmenu_editor_styles_' . $menu_type . '_' . $store['store_id']))) {
                    $data['menu_styles'][$menu_type]['store_' . $store['store_id']] = $this->config->get('module_dmenu_editor_styles_' . $menu_type . '_' . $store['store_id']);
                } else {
                    $data['menu_styles'][$menu_type]['store_' . $store['store_id']] = array();
                }

                // Change Styles.
                $this->changeStyles($data['menu_styles'][$menu_type]['store_' . $store['store_id']], $menu_type);

                // Custom Styles (Array).
                if (isset($this->request->post['module_dmenu_editor_style_' . $menu_type . '_' . $store['store_id']])) {
                    $data['menu_style'][$menu_type]['store_' . $store['store_id']] = $this->request->post['module_dmenu_editor_style_' . $menu_type . '_' . $store['store_id']];
                } else if (is_array($this->config->get('module_dmenu_editor_style_' . $menu_type . '_' . $store['store_id']))) {
                    $data['menu_style'][$menu_type]['store_' . $store['store_id']] = $this->config->get('module_dmenu_editor_style_' . $menu_type . '_' . $store['store_id']);
                } else {
                    $data['menu_style'][$menu_type]['store_' . $store['store_id']] = array();
                }
            }

            // Menu Items (HTML).
            $data['menu_type'] = $menu_type;
            $this->getItemsMenu($data);
        }

        // Clear data.
        unset($data['menu_type']);

        // Catalog Items (Array).
        $data['catalog'] = array();

        foreach ($this->stores as $store) {
            $data['catalog']['store_' . $store['store_id']] = $this->getCategoriesByStore($store['store_id']);
        }

        // Catalog Items (HTML).
        $this->getItemsMenu($data, 'catalog');

        // Style (HTML).
        $data['style'] = $this->load->controller('extension/module/dmenu_editor/style', $data);

        // Settings (HTML).
        $data['settings'] = $this->load->controller('extension/module/dmenu_editor/settings', $data);

        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view('extension/module/dmenu_editor', $data));
    }

    /**
     * Save Module Data.
     * AJAX.
     * 
     * @return void
     */
	public function save() {
        $this->load->language('extension/module/dmenu_editor');

		$json = array();

		if (!$this->user->hasPermission('modify', 'extension/module/dmenu_editor')) {
			$json['error']['warning'] = $this->language->get('error_permission');
		}

		if (!$json) {
            $this->load->model('localisation/language');
            $this->load->model('setting/setting');
            $this->load->model('tool/image');
            $this->load->model('extension/module/dmenu_editor');

            // OpenCart data.
            if ($this->request->server['HTTPS']) {
                $this->settings['HTTP_SERVER'] = HTTPS_SERVER;
                $this->settings['HTTP_CATALOG'] = HTTPS_CATALOG;
            } else {
                $this->settings['HTTP_SERVER'] = HTTP_SERVER;
                $this->settings['HTTP_CATALOG'] = HTTP_CATALOG;
            }

            // Stores.
            $this->stores[] = array(
                'store_id' => 0,
                'name'     => $this->language->get('text_store_default'),
                'url'      => ''
            );

            $results = $this->model_extension_module_dmenu_editor->getStores();

            foreach ($results as $result) {
                $this->stores[] = $result;
            }

            // POST request data.
            $post = json_decode($_POST['request'], true);

            // Module Settings.
            if (isset($post['module_dmenu_editor_settings'])) {
                $data['module_settings'] = $post['module_dmenu_editor_settings'];
            } else {
                $data['module_settings'] = array();
            }

            // Setting 'Icon'.
            foreach ($this->settings['menu'] as $menu_type => $menu) {
                $this->icon($data, $menu_type);
            }

            // IMAGE_CATALOG directory path.
            if (!$this->settings['PATH_IMAGE']) {
                $dir_image = explode('/', DIR_IMAGE);
                $http_catalog = explode('/', $this->settings['HTTP_CATALOG']);

                if (!$this->endc($dir_image)) array_pop($dir_image);
                if (!$this->endc($http_catalog)) array_pop($http_catalog);

                foreach (array_keys($dir_image) as $index) {
                    $dir = $dir_image[$index];
                    unset($dir_image[$index]);
                    if ($dir == $this->endc($http_catalog)) break;
                }

                $this->settings['PATH_IMAGE'] = implode('/', array_values($dir_image));
            }

            // Save Module data.
            if ($this->validate($post, array('validate', 'edit'))) {
                // Set PATH_IMAGE to POST.
                $post['module_dmenu_editor_extra']['PATH_IMAGE'] = $this->settings['PATH_IMAGE'];

                // Set prepared data to POST.
                $post['module_dmenu_editor_extra']['prepared'] = $this->prepared;

                // Create Sprite.
                $this->makeSprite($post);

                // Except `key` columns for deleting in DB.
                $del_except_keys = array();

                // Cleaning POST data.
                foreach ($this->settings['menu'] as $menu_type => $menu) {
                    foreach ($this->stores as $store) {
                        // Remove empty Menu.
                        if (!$post['module_dmenu_editor_items_' . $menu_type . '_' . $store['store_id']]) {
                            unset($post['module_dmenu_editor_items_' . $menu_type . '_' . $store['store_id']]);
                        }

                        // Keys NOT for deleting.
                        $del_except_keys[] = 'module_dmenu_editor_catalog_' . $store['store_id'];
                    }
                }

                // Set POST data to DB.
                $this->model_extension_module_dmenu_editor->editSetting('module_dmenu_editor', $post, $del_except_keys);

                // Set extended data.
                $this->setExtendedData($data);

                // Setting 'ocStore Blog Support'.
                if (empty($data['module_settings']['general']['ocstore_blog'])) {
                    $data['module_settings']['general']['ocstore_blog'] = 0;
                }

                // Search limit (Menu).
                $data['search_limit'] = $this->settings['limit_search'];
                $data['search_limit_num'] = sprintf($this->language->get('help_search_limit'), $data['search_limit']);
                $data['search_limit_text'] = sprintf($this->language->get('help_sticky_search'), $data['search_limit_num']);

                // ocStore Blog (HTML).
                if ($data['module_settings']['general']['ocstore_blog']) {
                    $this->getBlogSupport($data);
                    $json['sticky_blog'] = $this->load->view('extension/module/dmenu_editor/sticky/blog', $data);
                } else {
                    $json['sticky_blog'] = '';
                }

                $json['success'] = $this->language->get('text_success');
            } else {
                // Module Warnings.
                if (isset($this->error['error_items'])) {
                    $json['error']['error_items'] = $this->error['error_items'];
                } else {
                    $json['error']['error_items'] = array();
                }

                // Module Warning.
                $json['error']['warning'] = $this->language->get('error_warning');

                // Cleaning POST data.
                foreach ($this->settings['menu'] as $menu_type => $menu) {
                    foreach ($this->stores as $store) {
                        // Remove empty Menu.
                        if (!$post['module_dmenu_editor_items_' . $menu_type . '_' . $store['store_id']]) {
                            unset($post['module_dmenu_editor_items_' . $menu_type . '_' . $store['store_id']]);
                        }

                        // Remove Style (default).
                        if (isset($post['module_dmenu_editor_styles_' . $menu_type . '_' . $store['store_id']])) {
                            unset($post['module_dmenu_editor_styles_' . $menu_type . '_' . $store['store_id']]);
                        }

                        // Remove Style (custom).
                        if (isset($post['module_dmenu_editor_style_' . $menu_type . '_' . $store['store_id']])) {
                            unset($post['module_dmenu_editor_style_' . $menu_type . '_' . $store['store_id']]);
                        }
                    }
                }

                // Cleaning POST data.
                unset($post['module_dmenu_editor_status'], $post['module_dmenu_editor_settings']);

                // Set POST data to response.
                $json['error']['POST'] = $post;
            }
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

    /**
     * Set extended data.
     * 
     * @param array $data
     * 
     * @return void
     */
    private function setExtendedData(&$data) {
        // Translated Text.
        $data['translated_text'] = array(
            'text_item_desc_none'       => $this->language->get('text_item_desc_none'),
            'text_item_desc_catalog'    => $this->language->get('text_item_desc_catalog'),
            'text_result_categories'    => $this->language->get('text_result_categories'),
            'text_select_none'          => $this->language->get('text_select_none'),
            'text_target_self'          => $this->language->get('text_target_self'),
            'text_target_blank'         => $this->language->get('text_target_blank'),
            'text_target_parent'        => $this->language->get('text_target_parent'),
            'text_target_top'           => $this->language->get('text_target_top'),
            'text_enabled'              => $this->language->get('text_enabled'),
            'text_disabled'             => $this->language->get('text_disabled'),
            'text_yes'                  => $this->language->get('text_yes'),
            'text_no'                   => $this->language->get('text_no'),

            'entry_status'              => $this->language->get('entry_status'),
            'entry_name'                => $this->language->get('entry_name'),
            'entry_name_category'       => $this->language->get('entry_name_category'),
            'entry_name_hide'           => $this->language->get('entry_name_hide'),
            'entry_name_hide_category'  => $this->language->get('entry_name_hide_category'),
            'entry_url'                 => $this->language->get('entry_url'),
            'entry_target'              => $this->language->get('entry_target'),
            'entry_xfn'                 => $this->language->get('entry_xfn'),
            'entry_class'               => $this->language->get('entry_class'),
            'entry_icon'                => $this->language->get('entry_icon'),
            'entry_dropdown'            => $this->language->get('entry_dropdown'),
            'entry_dropdown_title'      => $this->language->get('entry_dropdown_title'),

            'button_look_tip'           => $this->language->get('button_look_tip'),
            'button_remove_item_tip'    => $this->language->get('button_remove_item_tip'),
            'button_download_item_tip'  => $this->language->get('button_download_item_tip'),
            'button_edit_item_tip'      => $this->language->get('button_edit_item_tip'),
            'button_lock_tip'           => $this->language->get('button_lock_tip'),
            'button_unlock_tip'         => $this->language->get('button_unlock_tip'),
            'button_save_item_catalog'  => $this->language->get('button_save_item_catalog'),
            'button_clear_item_catalog' => $this->language->get('button_clear_item_catalog'),

            'note_title_empty'          => $this->language->get('note_title_empty')
        );

        // Menu Item layouts.
        $data['module_layouts'] = array(
            'home'          => $this->language->get('text_item_desc_home'),          // Home
            'account'       => $this->language->get('text_item_desc_account'),       // Account
            'login'         => $this->language->get('text_item_desc_login'),         // Account Login
            'logout'        => $this->language->get('text_item_desc_logout'),        // Account Logout
            'register'      => $this->language->get('text_item_desc_register'),      // Account Register
            'contact'       => $this->language->get('text_item_desc_contact'),       // Contact Us
            'sitemap'       => $this->language->get('text_item_desc_sitemap'),       // Sitemap
            'compare'       => $this->language->get('text_item_desc_compare'),       // Compare
            'wishlist'      => $this->language->get('text_item_desc_wishlist'),      // Wishlist
            'cart'          => $this->language->get('text_item_desc_cart'),          // Cart
            'checkout'      => $this->language->get('text_item_desc_checkout'),      // Checkout
            'special'       => $this->language->get('text_item_desc_special'),       // Special
            'search'        => $this->language->get('text_item_desc_search'),        // Search
            'information'   => $this->language->get('text_item_desc_information'),   // Information
            'catalog'       => $this->language->get('text_item_desc_catalog'),       // Catalog
            'category'      => $this->language->get('text_item_desc_category'),      // Category
            'product'       => $this->language->get('text_item_desc_product'),       // Product
            'manufacturers' => $this->language->get('text_item_desc_manufacturers'), // Manufacturers
            'manufacturer'  => $this->language->get('text_item_desc_manufacturer'),  // Manufacturer
            'blog_category' => $this->language->get('text_item_desc_blog_category'), // ocStore Blog Category
            'blog_article'  => $this->language->get('text_item_desc_blog_article'),  // ocStore Blog Article
            'custom'        => $this->language->get('text_item_desc_custom'),        // Custom
            'html'          => $this->language->get('text_item_desc_html'),          // HTML
            'none'          => $this->language->get('text_item_desc_none')           // None
        );

        // Current language ID.
        $data['config_language_id'] = (int)$this->config->get('config_language_id');

        // All languages.
        $this->languages = $this->model_localisation_language->getLanguages();
        $data['languages'] = $this->languages;

        // Menu Item placeholder.
        $data['item_placeholder'] = $this->model_tool_image->resize('no_image.png', 100, 100);
    }

    /**
     * Get ocStore Blog.
     * 
     * @param array $data
     * 
     * @return void
     */
    private function getBlogSupport(&$data) {
        if ($data['module_settings']['general']['ocstore_blog']) {
            // ocStore Blog Categories.
            $data['blog_categories_limit'] = $this->settings['limit_items'];
            $data['blog_categories'] = $this->model_extension_module_dmenu_editor->getBlogCategories($data['blog_categories_limit']);

            // ocStore Blog Articles.
            $data['blog_articles_limit'] = $this->settings['limit_items'];
            $data['blog_articles'] = $this->model_extension_module_dmenu_editor->getBlogArticles($data['blog_articles_limit']);
        } else {
            // ocStore Blog Categories.
            $data['blog_categories_limit'] = 0;
            $data['blog_categories'] = array();

            // ocStore Blog Articles.
            $data['blog_articles_limit'] = 0;
            $data['blog_articles'] = array();
        }
    }

    /**
     * Change Menu Items. Recursion.
     * Expecting $meaning params: validate, edit.
     * 
     * @param array $items
     * @param string $menu_type
     * @param int $store_id
     * @param array $meaning
     * 
     * @return void
     */
    private function changeMenuItems(&$items, $menu_type, $store_id, $meaning = array()) {
        $items_count = count($items);

        for ($i = 0; $i < $items_count; $i++) {
            $layout = $items[$i]['data']['layout'];

            switch ($layout) {
                // Layout 'Catalog'.
                case 'catalog':
                    // Validate Menu Item.
                    if (in_array('validate', $meaning)) {
                        if ($items[$i]['data']['dropdown']) {
                            foreach ($items[$i]['data']['names'] as $key_name => $name) {
                                if (empty($name)) {
                                    if (!array_key_exists('error', $items[$i])) {
                                        $items[$i]['error'] = array();
                                    }

                                    $items[$i]['error']['names'][$key_name] = $this->language->get('error_empty_field');
                                    $this->error['error_items'][$menu_type]['store_' . $store_id]['empty_fields'] = $this->language->get('error_empty_fields');
                                }
                            }
                        }
                    }

                    // Edit Menu Item.
                    if (in_array('edit', $meaning)) {
                        // Get Menu Catalog data.
                        $catalog = $this->model_extension_module_dmenu_editor->getSettingByKey('module_dmenu_editor', 'module_dmenu_editor_catalog_' . $store_id);

                        // Menu Catalog data manipulations.
                        foreach ($catalog as $key_category => &$category) {
                            $temp = array();
                            $count = count($category);
                            $index_last = $count - 1;

                            for ($index = 0; $index < $count; $index++) {
                                if (($category[$index]['field'] == 'icon_image') && is_file(DIR_IMAGE . $category[$index]['value'])) {
                                    // Catalog Item thumbnail.
                                    $thumb = $this->model_tool_image->resize($category[$index]['value'], $this->settings['menu'][$menu_type]['icon']['width'], $this->settings['menu'][$menu_type]['icon']['height']);

                                    // Set item thumb to sprite array.
                                    if ($this->settings['menu'][$menu_type]['icon']['sprite']) {
                                        $temp = array(
                                            'slug'  => str_replace('category_', '', $key_category),
                                            'thumb' => $thumb
                                        );
                                    }
                                }

                                // Clear old sprite data.
                                if (($category[$index]['field'] == 'sprite')) unset($category[$index]);

                                // Set Menu Catalog data to sprite array.
                                if (($index == $index_last) && $temp) {
                                    // Reindex $category array.
                                    $category = array_values($category);

                                    $temp['category'] = $category;
                                    $this->sprite['catalog'][$menu_type]['store_' . $store_id][] = $temp;
                                }
                            }
                        }
                    }

                    // Set Sprite data to Catalog DB.
                    if (in_array('sprite', $meaning)) {
                        $catalog = array();

                        // Set sprite data.
                        if (isset($this->sprite['catalog'][$menu_type]['store_' . $store_id])) {
                            foreach ($this->sprite['catalog'][$menu_type]['store_' . $store_id] as $sprite_item) {
                                $catalog['category_' . $sprite_item['slug']] = $sprite_item['category'];

                                $catalog['category_' . $sprite_item['slug']][] = array(
                                    'field' => 'sprite',
                                    'value' => array(
                                        'src'    => $sprite_item['src'],
                                        'coords' => $sprite_item['coords']
                                    )
                                );
                            }
                        }

                        // UPDATE sprite data in DB.
                        $this->model_extension_module_dmenu_editor->updateSettingByKey('module_dmenu_editor', 'module_dmenu_editor_catalog_' . $store_id, $catalog);
                    }

                    break;

                // Layout Other.
                default:
                    // Validate Menu Item.
                    if (in_array('validate', $meaning)) {
                        foreach ($items[$i]['data']['names'] as $key_name => $name) {
                            if (empty($name)) {
                                if (!array_key_exists('error', $items[$i])) {
                                    $items[$i]['error'] = array();
                                }

                                $items[$i]['error']['names'][$key_name] = $this->language->get('error_empty_field');
                                $this->error['error_items'][$menu_type]['store_' . $store_id]['empty_fields'] = $this->language->get('error_empty_fields');
                            }
                        }

                        if (array_key_exists('seo', $items[$i]['data']['url'])) {
                            foreach ($items[$i]['data']['url']['seo'] as $key_seo => $seo) {
                                if (empty(trim($seo))) {
                                    if (!array_key_exists('error', $items[$i])) {
                                        $items[$i]['error'] = array();
                                    }

                                    $items[$i]['error']['seo'][$key_seo] = $this->language->get('error_empty_field');
                                    $this->error['error_items'][$menu_type]['store_' . $store_id]['empty_fields'] = $this->language->get('error_empty_fields');
                                }
                            }
                        }
                    }

                    // Edit Menu Item.
                    //if (in_array('edit', $meaning)) {}

                    // Recursion.
                    if (array_key_exists('rows', $items[$i]) && count($items[$i]['rows']) > 0) {
                        $this->changeMenuItems($items[$i]['rows'], $menu_type, $store_id, $meaning);
                    }

                    break;
            }

            // Edit Menu Item.
            if (in_array('edit', $meaning)) {
                // Set ID to Menu Item.
                $items[$i]['data']['slug'] = $this->generateRandomString() . '-' . $items[$i]['data']['id'] . $i;

                // Menu Item Icon.
                if (isset($items[$i]['data']['icon']['image']) && is_file(DIR_IMAGE . $items[$i]['data']['icon']['image'])) {
                    // Menu Item thumbnail.
                    $items[$i]['data']['icon']['thumb'] = $this->model_tool_image->resize($items[$i]['data']['icon']['image'], $this->settings['menu'][$menu_type]['icon']['width'], $this->settings['menu'][$menu_type]['icon']['height']);

                    // Set item thumb to sprite array.
                    if ($this->settings['menu'][$menu_type]['icon']['sprite']) {
                        $this->sprite['menu'][$menu_type]['store_' . $store_id][] = array(
                            'slug'  => $items[$i]['data']['slug'],
                            'thumb' => $items[$i]['data']['icon']['thumb']
                        );
                    }
                }

                // Set prepared item ID.
                if (isset($this->prepared['menu'][$menu_type]['store_' . $store_id]['IDs'][$layout])) {
                    if (!in_array($items[$i]['data']['id'], $this->prepared['menu'][$menu_type]['store_' . $store_id]['IDs'][$layout])) {
                        $this->prepared['menu'][$menu_type]['store_' . $store_id]['IDs'][$layout][] = $items[$i]['data']['id'];
                    }
                } else {
                    $this->prepared['menu'][$menu_type]['store_' . $store_id]['IDs'][$layout][] = $items[$i]['data']['id'];
                }
            }

            // Set Sprite data to Menu Item.
            if (in_array('sprite', $meaning)) {
                // Set sprite data.
                if (isset($this->sprite['menu'][$menu_type]['store_' . $store_id])) {
                    foreach ($this->sprite['menu'][$menu_type]['store_' . $store_id] as $sprite_item) {
                        if ($sprite_item['slug'] == $items[$i]['data']['slug'] && isset($sprite_item['coords'])) {
                            $items[$i]['extra']['sprite'] = array(
                                'src'    => $sprite_item['src'],
                                'coords' => $sprite_item['coords']
                            );

                            break;
                        }
                    }
                }
            }
        }
    }

    /**
     * Change Styles.
     * 
     * @param array $styles
     * @param string $menu_type
     * 
     * @return void
     */
    private function changeStyles(&$styles, $menu_type) {
        foreach ($this->settings['devices'] as $device) {
            // Main BG Image.
            if (isset($styles[$device]['bg']['image']['main']) && is_file(DIR_IMAGE . $styles[$device]['bg']['image']['main'])) {
                // Thumbnail.
                $styles[$device]['bg']['thumb']['main'] = $this->model_tool_image->resize($styles[$device]['bg']['image']['main'], 180, 180);
            }

            // Submenu BG Image.
            if (isset($styles[$device]['bg']['image']['sub']) && is_file(DIR_IMAGE . $styles[$device]['bg']['image']['sub'])) {
                // Thumbnail.
                $styles[$device]['bg']['thumb']['sub'] = $this->model_tool_image->resize($styles[$device]['bg']['image']['sub'], 180, 180);
            }
        }
    }

    /**
     * Get Menu Items (HTML).
     * Expecting $meaning params: menu, catalog.
     * Expecting $template params: container, item.
     * 
     * @param array $data
     * @param string $meaning
     * @param string $template
     * @param string $item_id
     * @param string $item_name
     * 
     * @return void
     */
    private function getItemsMenu(&$data, $meaning = 'menu', $template = 'container', $item_id = '', $item_name = '') {
        $data['item_id'] = $item_id;
        $data['item_name'] = $item_name;
        $data['items_menu'] = array();
        $data['items_catalog'] = array();

        switch ($meaning) {
            case 'menu':
                // Menu Items by Store (HTML).
                foreach ($data['menus'][$data['menu_type']] as $store => $menu) {
                    $data['store_id'] = str_replace('store_', '', $store);
                    $data['items_store'] = $menu;
                    $data['items_menu'][$store] = $this->load->view('extension/module/dmenu_editor/menu/items', $data);
                }

                break;
            case 'catalog':
                foreach ($data['catalog'] as $store => $menu) {
                    $data['store_id'] = str_replace('store_', '', $store);

                    // Change Catalog Items data in $menu array (from DB array).
                    if ($this->config->get('module_dmenu_editor_catalog_' . $data['store_id'])) {
                        $catalog_db = $this->config->get('module_dmenu_editor_catalog_' . $data['store_id']);

                        foreach ($menu as &$item) {
                            if (isset($catalog_db['category_' . $item['data']['id']])) {
                                foreach ($catalog_db['category_' . $item['data']['id']] as $field) {
                                    if ($field['field'] == 'names') {
                                        $item['data']['names']['language_' . $field['language']] = $field['value'];
                                    } else if ($field['field'] == 'icon_image') {
                                        if ($field['value']) {
                                            $item['data']['icon']['image'] = $field['value'];
                                            $item['data']['icon']['thumb'] = $this->model_tool_image->resize($field['value'], $this->settings['catalog']['icon']['width'], $this->settings['catalog']['icon']['height']);
                                        }
                                    } else {
                                        $item['data'][$field['field']] = $field['value'];
                                    }
                                }

                                $item['extra']['saved']['status'] = true;
                            }
                        }
                    }

                    // Catalog Items by Store (HTML).
                    $data['items_store'] = $menu;
                    $data['items_catalog'][$store] = $this->load->view('extension/module/dmenu_editor/catalog/items', $data);
                }

                break;
            default:
                break;
        }

        // Cleaning the array $data.
        unset($data['store_id'], $data['items_store']);

        // Menu HTML.
        switch ($template) {
            case 'container':
                if ($meaning == 'menu') {
                    $data['menu_' . $data['menu_type']] = $this->load->view('extension/module/dmenu_editor/menu/container', $data);

                    // Cleaning the array $data.
                    unset($data['items_menu']);
                } else if ($meaning == 'catalog') {
                    $data['menu_catalog'] = $this->load->view('extension/module/dmenu_editor/catalog/container', $data);

                    // Cleaning the array $data.
                    unset($data['items_catalog']);
                } else {}

                break;
            case 'item':
                break;
            default:
                break;
        }
    }

    /**
     * Get Categories data.
     * 
     * @param int $store_id
     * @param int $limit
     * @param int $parent_id
     * @param array $filter_data
     * 
     * @return array $categories
     */
    private function getCategoriesByStore($store_id, $limit = 0, $parent_id = 0, $filter_data = array()) {
        $categories = array();

        // Categories data from DB.
        $categories_db = $this->model_extension_module_dmenu_editor->getCategoriesByStore($store_id, $limit, $parent_id, $filter_data);

        // Categories data.
        foreach ($categories_db as $category) {
            $url = array();

            if ($category['status']) {
                $url = $category['url'];
                $url['link'] = $this->settings['HTTP_CATALOG'] . $url['link'];
            } else {
                $url['link'] = $this->settings['HTTP_SERVER'] . 'index.php?route=catalog/category/edit&user_token=' . $this->session->data['user_token'] . '&category_id=' . $category['id'];
            }

            $categories[] = array(
                'data' => array(
                    'id'         => $category['id'],
                    'title'      => $category['title'],
                    'names'      => $category['names'],
                    'names_hide' => 0,
                    'target'     => '',
                    'xfn'        => '',
                    'class'      => '',
                    'icon_image' => '',
                    'status'     => $category['status'],
                    'layout'     => $category['layout'],
                    'url'        => $url
                ),
                'extra' => array(
                    'total'      => $category['total'],
                    'saved'      => array(
                        'fields' => array(
                            'names'  => $category['names'],
                            'status' => $category['status']
                        )
                    )
                )
            );
        }

        return $categories;
    }

    /**
     * Make sprite.
     * Expecting $target_type params: all, menu, catalog.
     * 
     * @param array $data
     * @param string $target_type
     * 
     * @return void
     */
    private function makeSprite(&$data, $target_type = 'all') {
        if (!extension_loaded('gd')) return;

        // Path of sprites.
        $dirPath = DIR_IMAGE . 'module-dmenu_editor/sprite/';

        // Delete sprites.
        if ($target_type == 'catalog') {
            $this->deleteDir($dirPath, 'file', $target_type, 'start');
        } else {
            $this->deleteDir($dirPath, 'file');
        }

        // Settings.
        $settings = $this->settings['sprite'];

        foreach ($settings['columns'] as $columns_type => $columns) {
            if ($target_type == 'all' || $target_type == $columns_type) {
                $sprite = array(
                    'valid' => array(),
                    'image' => array(),
                    'count' => array()
                );

                // Fill $sprite array.
                foreach ($this->settings['menu'] as $menu_type => $menu) {
                    foreach ($this->stores as $store) {
                        $sprite['valid'][$menu_type]['store_' . $store['store_id']] = array();
                        $sprite['image'][$menu_type]['store_' . $store['store_id']] = array();
                        $sprite['count'][$menu_type]['store_' . $store['store_id']] = 0;
                    }
                }

                // Get some Sprite menu data.
                foreach ($this->sprite[$columns_type] as $menu_type => $menu) {
                    foreach ($menu as $store_id => $store) {
                        foreach ($store as $item) {
                            $filepath = str_replace($this->settings['HTTP_CATALOG'] . $this->settings['PATH_IMAGE'] . '/', '', $item['thumb']);
                            $realpath = DIR_IMAGE . $filepath;

                            if (is_file($realpath)) {
                                $extension = strtolower(pathinfo($filepath, PATHINFO_EXTENSION));

                                if (in_array($extension, $settings['extension'])) {
                                    $info = getimagesize($realpath);

                                    if (isset($info['mime']) && in_array($info['mime'], $settings['mime'])) {
                                        $width = $info[0];
                                        $height = $info[1];

                                        if (!$width || ($width > $settings['icon_max']) || 
                                            !$height || ($height > $settings['icon_max'])) {
                                            continue;
                                        }

                                        // Add valid icon to $sprite array.
                                        $sprite['valid'][$menu_type][$store_id][] = $item;

                                        // Update Number of icons (increment).
                                        ++$sprite['count'][$menu_type][$store_id];
                                    }
                                }
                            }
                        }
                    }
                }

                // Make sprite.
                foreach ($sprite['valid'] as $menu_type => $menu) {
                    foreach ($menu as $store_id => $store) {
                        $number = $sprite['count'][$menu_type][$store_id];

                        if ($number) {
                            $sprite_path = 'module-dmenu_editor/sprite/' . $columns_type . '_' . $menu_type . '-' . $store_id . '-' . $this->generateRandomString() . $this->generateRandomString(8) . '.' . $settings['format'];

                            // Icon Border size.
                            $border = $settings['icon_border'];

                            /* Create Sprite image for Store */

                            // Sprite Rows.
                            if ($number <= $columns) $rows = 1;
                            else $rows = ceil($number / $columns);

                            // Sprite image sizes.
                            $width = ($this->settings['menu'][$menu_type]['icon']['width'] + ($border * 2)) * $columns;
                            $height = ($this->settings['menu'][$menu_type]['icon']['height'] + ($border * 2)) * $rows;

                            // Create Sprite image.
                            $GdSprite = imagecreatetruecolor($width, $height);

                            imagealphablending($GdSprite, false);
                            imagesavealpha($GdSprite, true);

                            $background = imagecolorallocatealpha($GdSprite, 255, 255, 255, 127);

                            imagecolortransparent($GdSprite, $background);
                            imagefilledrectangle($GdSprite, 0, 0, $width, $height, $background);

                            /* Icons to Sprite */

                            $column = 0;
                            $row = 0;

                            foreach ($store as $item) {
                                $filepath = str_replace($this->settings['HTTP_CATALOG'] . $this->settings['PATH_IMAGE'] . '/', '', $item['thumb']);
                                $realpath = DIR_IMAGE . $filepath;

                                $image = null;
                                $info = getimagesize($realpath);

                                $width = $info[0];
                                $height = $info[1];
                                $mime = $info['mime'] ?? '';

                                // Create image.
                                switch ($mime) {
                                    case 'image/gif':
                                        $image = imagecreatefromgif($realpath);
                                        break;
                                    case 'image/jpeg':
                                        $image = imagecreatefromjpeg($realpath);
                                        break;
                                    case 'image/png':
                                        $image = imagecreatefrompng($realpath);
                                        imageinterlace($image, false);
                                        break;
                                    case 'image/webp':
                                        $image = imagecreatefromwebp($realpath);
                                        break;
                                    default:
                                        break;
                                }

                                // Add icon to Sprite image.
                                if ($image) {
                                    $xpos = ($column * ($width + ($border * 2))) + $border;
                                    $ypos = ($row * ($height + ($border * 2))) + $border;

                                    imagecopy($GdSprite, $image, $xpos, $ypos, 0, 0, $width, $height);

                                    imagedestroy($image);

                                    // Add icon data to $sprite array.
                                    $sprite['image'][$menu_type][$store_id][] = array(
                                        'slug'     => $item['slug'],
                                        'src'      => $sprite_path,
                                        'coords'   => array('x' => $xpos, 'y' => $ypos),
                                        'category' => isset($item['category']) ? $item['category'] : array()
                                    );

                                    // Correction Column and Row.
                                    if ($column >= $columns) {
                                        $column = 0;
                                        ++$row;
                                    } else {
                                        ++$column;
                                    }
                                }
                            }

                            // Create Sprite image.
                            switch ($settings['format']) {
                                case 'gif':
                                    imagegif($GdSprite, DIR_IMAGE . $sprite_path);
                                    break;
                                case 'jpg':
                                case 'jpeg':
                                    imagejpeg($GdSprite, DIR_IMAGE . $sprite_path);
                                    break;
                                case 'png':
                                    imagepng($GdSprite, DIR_IMAGE . $sprite_path);
                                    break;
                                case 'webp':
                                    imagewebp($GdSprite, DIR_IMAGE . $sprite_path);
                                    break;
                                default:
                                    break;
                            }

                            // Destroy Sprite GdImage.
                            imagedestroy($GdSprite);
                        }
                    }
                }

                // Change data in $this->sprite array.
                $this->sprite[$columns_type] = $sprite['image'];
            }
        }

        // Set sprite data to Menu Items.
        foreach ($this->settings['menu'] as $menu_type => $menu) {
            foreach ($this->stores as $store) {
                if (!empty($data['module_dmenu_editor_items_' . $menu_type . '_' . $store['store_id']])) {
                    $this->changeMenuItems($data['module_dmenu_editor_items_' . $menu_type . '_' . $store['store_id']], $menu_type, $store['store_id'], array('sprite'));
                }
            }
        }
    }

    /**
     * Change Icon Data.
     * 
     * @param array $data
     * @param string $menu_type
     * 
     * @return void
     */
    private function icon(&$data, $menu_type) {
        if (!empty($data['module_settings']['menu'][$menu_type]['icon'])) {
            // Icon Width.
            if ((int)$data['module_settings']['menu'][$menu_type]['icon']['width'] > 0) {
                $this->settings['menu'][$menu_type]['icon']['width'] = (int)$data['module_settings']['menu'][$menu_type]['icon']['width'];
            }

            // Icon Height.
            if ((int)$data['module_settings']['menu'][$menu_type]['icon']['height'] > 0) {
                $this->settings['menu'][$menu_type]['icon']['height'] = (int)$data['module_settings']['menu'][$menu_type]['icon']['height'];
            }

            // Status Icon Sprite.
            $this->settings['menu'][$menu_type]['icon']['sprite'] = (int)$data['module_settings']['menu'][$menu_type]['icon']['sprite'];
        }

        // Setting 'Icon' to $data.
        $data['module_settings']['menu'][$menu_type]['icon']['width'] = $this->settings['menu'][$menu_type]['icon']['width'];
        $data['module_settings']['menu'][$menu_type]['icon']['height'] = $this->settings['menu'][$menu_type]['icon']['height'];
        $data['module_settings']['menu'][$menu_type]['icon']['sprite'] = $this->settings['menu'][$menu_type]['icon']['sprite'];
    }

    /**
     * Set names.
     * 
     * @param string $text
     * 
     * @return array $names
     */
    private function names($text) {
        $names = array();

        foreach($this->languages as $language) {
            $lang = new Language($language['code']);
            $lang->load('extension/module/dmenu_editor');

            $names['language_' . $language['language_id']] = $lang->get($text);
        }

        return $names;
    }

    /**
     * Search data in Titles.
     * AJAX.
     * 
     * @return void
     */
    public function search() {
        $this->load->model('extension/module/dmenu_editor');

        $json = array();

		if (!$this->user->hasPermission('modify', 'extension/module/dmenu_editor')) {
			$json['error'] = $this->language->get('error_permission');
		}

		if (!$json) {
            if (isset($this->request->post['layout']) && !empty($this->request->post['layout'])) {
                $layout = $this->request->post['layout'];
            } else {
                $layout = '';
            }

            if (isset($this->request->post['limit']) && !empty($this->request->post['limit'])) {
                $limit = (int)$this->request->post['limit'];
            } else {
                $limit = $this->settings['limit_search'];
            }

            if (isset($this->request->post['search']) && !empty($this->request->post['search'])) {
                $search_query = strip_tags($this->request->post['search']);

                $json = $this->model_extension_module_dmenu_editor->search($layout, $search_query, $limit);
            }
        }

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }

    /**
     * Get Store Menu/Catalog Item.
     * AJAX.
     *
     * @return void
     */
    public function item() {
        $data = array();
        $json = array();

        if ($this->request->server['REQUEST_METHOD'] == 'POST') {
            if (!$this->user->hasPermission('modify', 'extension/module/dmenu_editor')) {
                $json['error'] = $this->language->get('error_permission');
            }

            if (!isset($this->request->post['menu_type'])) {
                $json['error'] = 'DATA ERROR';
            }

            if (!$json) {
                $this->load->language('extension/module/dmenu_editor');

                $this->load->model('localisation/language');
                $this->load->model('tool/image');

                // Menu type.
                if (isset($this->request->post['menu_type'])) {
                    $data['menu_type'] = $this->request->post['menu_type'];
                } else {
                    $data['menu_type'] = 'none';
                }

                // Store ID.
                if (isset($this->request->post['store_id'])) {
                    $data['store_id'] = (int)$this->request->post['store_id'];
                } else {
                    $data['store_id'] = 0;
                }

                $store_id = $data['store_id'];

                // Row.
                if (isset($this->request->post['row'])) {
                    $row = (int)$this->request->post['row'];
                } else {
                    $row = 0;
                }

                // Item ID.
                if (isset($this->request->post['item_id'])) {
                    $item_id = $this->request->post['item_id'];
                } else {
                    $item_id = '';
                }

                // Item NAME.
                if (isset($this->request->post['item_name'])) {
                    $item_name = $this->request->post['item_name'];
                } else {
                    $item_name = '';
                }

                // Filter.
                if (isset($this->request->post['filter'])) {
                    $filter_data = $this->request->post['filter'];
                } else {
                    $filter_data = array();
                }

                // Set extended data.
                $this->setExtendedData($data);

                switch ($data['menu_type']) {
                    case 'main' :
                    case 'top' :
                    case 'footer' :
                    case 'social' :
                        // Menu Item formatting.
                        $data['menus'][$data['menu_type']]['store_' . $store_id][$row] = array(
                            'data' => $this->request->post
                        );

                        // HTML Menu Item from 'items.twig'.
                        $this->getItemsMenu($data, 'menu', 'items', $item_id, $item_name);

                        // Set Menu Item to JSON array.
                        $json['html'] = trim($data['items_menu']['store_' . $store_id]);

                        break;
                    case 'catalog' :
                        $this->load->model('extension/module/dmenu_editor');

                        // Stores.
                        $this->stores[] = array(
                            'store_id' => 0,
                            'name'     => $this->language->get('text_store_default'),
                            'url'      => ''
                        );

                        $results = $this->model_extension_module_dmenu_editor->getStores();

                        foreach ($results as $result) {
                            $this->stores[] = $result;
                        }

                        // Parent ID.
                        if (isset($this->request->post['id'])) {
                            $parent_id = (int)$this->request->post['id'];
                        } else {
                            $parent_id = 0;
                        }

                        // Limit categories.
                        if (isset($filter_data['limit'])) {
                            $limit = (int)$filter_data['limit'];
                        } else {
                            $limit = 0;
                        }

                        // Get filtered categories.
                        if ($filter_data) {
                            foreach ($this->stores as $store) {
                                // Store ID.
                                $data['store_id'] = (int)$store['store_id'];
                                $store_id = $data['store_id'];

                                $data['catalog']['store_' . $store_id] = $this->getCategoriesByStore($store_id, $limit, $parent_id, $filter_data);

                                // HTML Menu Item from 'items.twig'.
                                $this->getItemsMenu($data, 'catalog', 'items', $item_id);

                                // Set Menu Item to JSON array.
                                $json['html']['store_' . $store_id] = trim($data['items_catalog']['store_' . $store_id]);
                            }

                        // Get subcategories.
                        } else {
                            $data['catalog']['store_' . $store_id] = $this->getCategoriesByStore($store_id, $limit, $parent_id, $filter_data);

                            // HTML Menu Item from 'items.twig'.
                            $this->getItemsMenu($data, 'catalog', 'items', $item_id);

                            // Set Menu Item to JSON array.
                            $json['html']['store_' . $store_id] = trim($data['items_catalog']['store_' . $store_id]);
                        }

                        break;
                    default:
                        break;
                }

                $json['success'] = true;
            }
        } else {
            $json['error'] = 'REQUEST_METHOD ERROR';
        }

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }

    /**
     * Save/Remove Catalog Item.
     * AJAX.
     *
     * @return void
     */
    public function category() {
        $data = array();
        $json = array();

        if ($this->request->server['REQUEST_METHOD'] == 'POST') {
            if (!$this->user->hasPermission('modify', 'extension/module/dmenu_editor')) {
                $json['error'] = $this->language->get('error_permission');
            }

            if (!isset($this->request->post['id'])) {
                $json['error'] = 'DATA ERROR';
            }

            if (!$json) {
                $this->load->language('extension/module/dmenu_editor');

                $this->load->model('tool/image');
                $this->load->model('extension/module/dmenu_editor');

                // Category ID.
                if (isset($this->request->post['id'])) {
                    $data['category_id'] = (int)$this->request->post['id'];
                } else {
                    $data['category_id'] = 0;
                }

                // Store ID.
                if (isset($this->request->post['store_id'])) {
                    $data['store_id'] = (int)$this->request->post['store_id'];
                } else {
                    $data['store_id'] = 0;
                }

                // Meaning.
                // Expecting data: save, remove.
                if (isset($this->request->post['meaning'])) {
                    $data['meaning'] = $this->request->post['meaning'];
                } else {
                    $data['meaning'] = 'remove';
                }

                // Fields.
                if (isset($this->request->post['fields'])) {
                    $data['fields'] = $this->request->post['fields'];

                    // Validate Category.
                    if ($data['meaning'] == 'save') {
                        foreach ($data['fields'] as $key => $field) {
                            if (trim($field['value']) == '') {
                                if ($field['field'] == 'names') {
                                    $json['warning']['names']['language_' . $field['language']] = $this->language->get('error_empty_field');
                                } else {
                                    unset($data['fields'][$key]);
                                }
                            }
                        }
                    }

                    $data['fields'] = array_values($data['fields']);
                } else {
                    $data['fields'] = array();
                }

                if (!isset($json['warning'])) {
                    // DB Setting columns.
                    $data['code'] = 'module_dmenu_editor';
                    $data['key'] = 'module_dmenu_editor_catalog_' . $data['store_id'];

                    // Save/Remove catalog item.
                    $success = $this->model_extension_module_dmenu_editor->changeCatalogItem($data);

                    // Module data manipulations.
                    switch ($data['meaning']) {
                        case 'save':
                            // Stores.
                            $this->stores[] = array(
                                'store_id' => 0,
                                'name'     => $this->language->get('text_store_default'),
                                'url'      => ''
                            );

                            $results = $this->model_extension_module_dmenu_editor->getStores();

                            foreach ($results as $result) {
                                $this->stores[] = $result;
                            }

                            // Module Settings.
                            if ($this->config->get('module_dmenu_editor_settings')) {
                                $data['module_settings'] = $this->config->get('module_dmenu_editor_settings');
                            } else {
                                $data['module_settings'] = array();
                            }

                            // Setting 'Icon'.
                            foreach ($this->settings['menu'] as $menu_type => $menu) {
                                $this->icon($data, $menu_type);
                            }

                            // IMAGE_CATALOG directory path.
                            if ($this->config->get('module_dmenu_editor_extra') && !$this->settings['PATH_IMAGE']) {
                                $module_extra = $this->config->get('module_dmenu_editor_extra');
                                $this->settings['PATH_IMAGE'] = $module_extra['PATH_IMAGE'];
                            }

                            // Module Items.
                            $items = array();

                            // Change Menu Items.
                            foreach ($this->settings['menu'] as $menu_type => $menu) {
                                foreach ($this->stores as $store) {
                                    if ($this->config->get('module_dmenu_editor_items_' . $menu_type . '_' . $store['store_id'])) {
                                        $items['module_dmenu_editor_items_' . $menu_type . '_' . $store['store_id']] = $this->config->get('module_dmenu_editor_items_' . $menu_type . '_' . $store['store_id']);
                                        $this->changeMenuItems($items['module_dmenu_editor_items_' . $menu_type . '_' . $store['store_id']], $menu_type, $store['store_id'], array('edit'));
                                    }
                                }
                            }

                            // Create Sprite.
                            $this->makeSprite($items, 'catalog');

                            // Message.
                            $json['class'] = 'success';
                            $json['message'] = $this->language->get('text_message_category_saved');
                            break;
                        default:
                            if ($success) {
                                $json['class'] = 'success';
                                $json['message'] = $this->language->get('text_message_category_remove');
                            } else {
                                $json['class'] = 'error';
                                $json['message'] = $this->language->get('error_message_category');
                            }

                            break;
                    }

                    $json['success'] = true;
                } else {
                    $json['error'] = $this->language->get('error_empty_fields');
                }
            }
        } else {
            $json['error'] = 'REQUEST_METHOD ERROR';
        }

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }

    /**
     * Refresh/Remove Catalog.
     * AJAX.
     *
     * @return void
     */
    public function changeCatalog(): void {
        $data = array();
        $json = array();

        if ($this->request->server['REQUEST_METHOD'] == 'POST') {
            if (!$this->user->hasPermission('modify', 'extension/module/dmenu_editor')) {
                $json['error'] = $this->language->get('error_permission');
            }

            if (!isset($this->request->post['meaning'])) {
                $json['error'] = 'DATA ERROR';
            }

            if (!$json) {
                $this->load->language('extension/module/dmenu_editor');

                $this->load->model('extension/module/dmenu_editor');

                // Meaning.
                // Expecting data: refresh, clear.
                if (isset($this->request->post['meaning'])) {
                    $data['meaning'] = $this->request->post['meaning'];
                } else {
                    $data['meaning'] = 'clear';
                }

                // Stores.
                $this->stores[] = array(
                    'store_id' => 0,
                    'name'     => $this->language->get('text_store_default'),
                    'url'      => ''
                );

                $results = $this->model_extension_module_dmenu_editor->getStores();

                foreach ($results as $result) {
                    $this->stores[] = $result;
                }

                foreach ($this->stores as $store) {
                    $data['store_id'] = $store['store_id'];

                    // DB Setting columns.
                    $data['code'] = 'module_dmenu_editor';
                    $data['key'] = 'module_dmenu_editor_catalog_' . $data['store_id'];

                    // Save/Remove catalog item.
                    $this->model_extension_module_dmenu_editor->changeCatalog($data);

                    // Message.
                    switch ($data['meaning']) {
                        case 'refresh':
                            $json['class'] = 'success';
                            $json['message'] = $this->language->get('text_message_catalog_refresh');
                            break;
                        default:
                            $json['class'] = 'success';
                            $json['message'] = $this->language->get('text_message_catalog_clear');
                            break;
                    }
                }

                $json['success'] = true;
            }
        } else {
            $json['error'] = 'REQUEST_METHOD ERROR';
        }

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }

    /**
     * Validate Menu Items.
     * 
     * @param array $data
     * @param array $meaning
     * 
     * @return bool $this->error
     */
    protected function validate(&$data, $meaning = array()) {
        if (!$this->user->hasPermission('modify', 'extension/module/dmenu_editor')) {
            $this->error['warning'] = $this->language->get('error_permission');
        }

        // Change Menu Items.
        foreach ($this->settings['menu'] as $menu_type => $menu) {
            foreach ($this->stores as $store) {
                if (!empty($data['module_dmenu_editor_items_' . $menu_type . '_' . $store['store_id']])) {
                    $this->changeMenuItems($data['module_dmenu_editor_items_' . $menu_type . '_' . $store['store_id']], $menu_type, $store['store_id'], $meaning);
                } else {
                    $data['module_dmenu_editor_items_' . $menu_type . '_' . $store['store_id']] = array();
                }
            }
        }

        return !$this->error;
    }

    /**
    * Generate random string.
    *
    * @param int $length
    *
    * @return string $string
    */
    private function generateRandomString($length = 24) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $characters_length = strlen($characters);
        $string = '';

        for ($i = 0; $i < $length; $i++) {
            $string .= $characters[random_int(0, $characters_length - 1)];
        }

        return $string;
    }

    /**
     * Return the last item of the array without affecting the internal array pointer.
     * 
     * @param array $array
     * 
     * @return string
     */
    private function endc($array) {
        return end($array);
    }


    /**
    * Install method.
    *
    * @return void
    */
    public function install(): void {
        // Registering events.
        $this->registerEvents();

        // Path to the module for files.
        $dirPath = array(
            'sprite' => DIR_IMAGE . 'module-dmenu_editor/sprite/'
        );

        // Create directories.
        $this->makeDir($dirPath);
    }

    /**
    * Uninstall method.
    *
    * @return void
    */
    public function uninstall(): void {
        $this->load->model('setting/event');

        // Delete Events.
        $this->model_setting_event->deleteEventByCode('dmenu_editor_1');
        $this->model_setting_event->deleteEventByCode('dmenu_editor_2');
        $this->model_setting_event->deleteEventByCode('dmenu_editor_3');
        $this->model_setting_event->deleteEventByCode('dmenu_editor_4');
        $this->model_setting_event->deleteEventByCode('dmenu_editor_5');

        // Delete directories.
        $dirPath = DIR_IMAGE . 'module-dmenu_editor/';
        $this->deleteDir($dirPath);
    }

    /**
    * Registering events.
    *
    * @return void
    */
    protected function registerEvents(): void {
        $this->load->model('setting/event');

        // Events array.
        $events = array();

        $events[] = array(
            'code'        => 'dmenu_editor_1',
            'description' => 'Event for «D.Menu Editor» module. Modification «common/currency» template.',
            'trigger'     => 'catalog/view/common/currency/before',
            'action'      => 'extension/module/dmenu_editor/events/catalogViewCurrencyBefore',
            'status'      => 1,
            'sort_order'  => 2
        );

        $events[] = array(
            'code'        => 'dmenu_editor_2',
            'description' => 'Event for «D.Menu Editor» module. Modification «common/language» template.',
            'trigger'     => 'catalog/view/common/language/before',
            'action'      => 'extension/module/dmenu_editor/events/catalogViewLanguageBefore',
            'status'      => 1,
            'sort_order'  => 2
        );

        $events[] = array(
            'code'        => 'dmenu_editor_3',
            'description' => 'Event for «D.Menu Editor» module. Modification «common/menu» template.',
            'trigger'     => 'catalog/controller/common/menu/before',
            'action'      => 'extension/module/dmenu_editor/events/catalogControllerMenuBefore',
            'status'      => 1,
            'sort_order'  => 2
        );

        $events[] = array(
            'code'        => 'dmenu_editor_4',
            'description' => 'Event for «D.Menu Editor» module. Modification «common/header» template.',
            'trigger'     => 'catalog/view/common/header/after',
            'action'      => 'extension/module/dmenu_editor/events/catalogViewHeaderAfter',
            'status'      => 1,
            'sort_order'  => 2
        );

        $events[] = array(
            'code'        => 'dmenu_editor_5',
            'description' => 'Event for «D.Menu Editor» module. Modification «common/footer» template.',
            'trigger'     => 'catalog/view/common/footer/after',
            'action'      => 'extension/module/dmenu_editor/events/catalogViewFooterAfter',
            'status'      => 1,
            'sort_order'  => 2
        );

        // Registering events in DB.
        foreach($events as $event){
            $this->model_setting_event->addEvent($event['code'], $event['trigger'], $event['action'], $event['status'], $event['sort_order']);
        }
    }

    /**
    * Create directory.
    *
    * @param array $dirPath
    *
    * @return void
    */
    private function makeDir($dirPath) {
        foreach ($dirPath as $path) {
            if (!is_dir($path)) {
                mkdir($path, 0755, true);
            }
        }
    }

    /**
    * Delete directory or/and files (with searching).
    * Expecting $meaning params: all, file, dir.
    * Expecting $include_pos params: start, end, [default].
    *
    * @param string $dirPath
    * @param string $meaning
    * @param string $include_str
    * @param string $include_pos
    *
    * @return void
    */
    private function deleteDir($dirPath, $meaning = 'all', $include_str = '', $include_pos = '') {
        if (is_dir($dirPath)) {
            $files = scandir($dirPath);

            foreach ($files as $file) {
                if ($file !== '.' && $file !== '..') {
                    $filePath = $dirPath . '/' . $file;

                    if (is_dir($filePath)) {
                        if ($meaning != 'file') $this->deleteDir($filePath, $meaning, $include_str, $include_pos);
                    } else {
                        if ($meaning != 'dir') {
                            if ($include_str) {
                                switch ($include_pos) {
                                    case 'start':
                                        if (mb_strpos($file, $include_str) === 0) unlink($filePath);
                                        break;
                                    case 'end':
                                        $file_strlen = mb_strlen($file);
                                        $include_strlen = mb_strlen($include_str . '.' . pathinfo($filePath, PATHINFO_EXTENSION));
                                        if (mb_strpos($file, $include_str, -$include_strlen) === ($file_strlen - $include_strlen)) unlink($filePath);
                                        break;
                                    default:
                                        if (mb_strpos($file, $include_str) !== false) unlink($filePath);
                                        break;
                                }
                            } else {
                                unlink($filePath);
                            }
                        }
                    }
                }
            }

            if ($meaning != 'file') rmdir($dirPath);
        }
    }
}