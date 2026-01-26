<?php
/**
 * Controller Module D.Menu Editor Class
 *
 * @version 1.1.0
 * 
 * @author D.art <d.art.reply@gmail.com>
 */

class ControllerExtensionModuleDMenuEditorStyle extends Controller {
    public function index($data) {
        $this->load->language('extension/module/dmenu_editor');

        foreach ($data['menus'] as $menu_type => $menu) {
            $data['menu_type'] = $menu_type;
            $data['style_desktop_ultra'] = array();
            $data['style_desktop_hd'] = array();
            $data['style_tablet'] = array();
            $data['style_mobile'] = array();

            foreach ($menu as $store_id => $store) {
                $data['store_id'] = str_replace('store_', '', $store_id);

                // Style 'Desktop Ultra' HTML.
                $data['device_type'] = 'desktop_ultra';
                $data['style_desktop_ultra'][$store_id] = $this->load->view('extension/module/dmenu_editor/style/device', $data);

                // Style 'Desktop HD' HTML.
                $data['device_type'] = 'desktop_hd';
                $data['style_desktop_hd'][$store_id] = $this->load->view('extension/module/dmenu_editor/style/device', $data);

                // Style 'Tablet' HTML.
                $data['device_type'] = 'tablet';
                $data['style_tablet'][$store_id] = $this->load->view('extension/module/dmenu_editor/style/device', $data);

                // Style 'Mobile' HTML.
                $data['device_type'] = 'mobile';
                $data['style_mobile'][$store_id] = $this->load->view('extension/module/dmenu_editor/style/device', $data);
            }

            // Style 'Menu' HTML.
            $data['style_menu_' . $menu_type] = $this->load->view('extension/module/dmenu_editor/style/menu', $data);
        }

        // Clear data.
        unset($data['style_desktop'], $data['style_tablet'], $data['style_mobile'], $data['menu_type'], $data['device_type'], $data['store_id']);

        return $this->load->view('extension/module/dmenu_editor/style/container', $data);
    }
}