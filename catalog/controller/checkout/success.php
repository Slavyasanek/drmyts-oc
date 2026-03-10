<?php
// *	@source		See SOURCE.txt for source and other copyright.
// *	@license	GNU General Public License version 3; see LICENSE.txt

class ControllerCheckoutSuccess extends Controller {
	public function index() {
		$this->load->language('checkout/success');
        $this->load->model('checkout/order');

		if (isset($this->session->data['order_id'])) {
            $order_info = $this->model_checkout_order->getOrder($this->session->data['order_id']);
    
            if ($order_info) {
                $data['order_id'] = $order_info['order_id'];
                $data['payment_method'] = $order_info['payment_method'];
                $data['shipping_method'] = $order_info['shipping_method'];
                $data['customer_name'] = $order_info['firstname'] . ' ' . $order_info['lastname'];
                $data['shipping_address'] = $order_info['shipping_address_1'] . ', ' . $order_info['shipping_city'];
                
                $data['total'] = $this->currency->format($order_info['total'], $order_info['currency_code'], $order_info['currency_value']);
            }
            
			$this->session->data['last_order_id'] = $this->session->data['order_id'];
			$this->cart->clear();

			unset($this->session->data['shipping_method']);
			unset($this->session->data['shipping_methods']);
			unset($this->session->data['payment_method']);
			unset($this->session->data['payment_methods']);
			unset($this->session->data['guest']);
			unset($this->session->data['comment']);
			unset($this->session->data['order_id']);
			unset($this->session->data['coupon']);
			unset($this->session->data['reward']);
			unset($this->session->data['voucher']);
			unset($this->session->data['vouchers']);
			unset($this->session->data['totals']);
		}

		if (!empty($this->session->data['last_order_id']) ) {
			$this->document->setTitle(sprintf($this->language->get('heading_title_customer'), $this->session->data['last_order_id']));
			$this->document->setRobots('noindex,follow');
		} else {
			$this->document->setTitle($this->language->get('heading_title'));
			$this->document->setRobots('noindex,follow');
		}

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/home')
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_basket'),
			'href' => $this->url->link('checkout/cart')
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_checkout'),
			'href' => $this->url->link('checkout/checkout', '', true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_success'),
			'href' => $this->url->link('checkout/success')
		);

		if (!empty($this->session->data['last_order_id'])) {
			$data['heading_title'] = sprintf($this->language->get('heading_title_customer'), $this->session->data['last_order_id']);
		} else {
			$data['heading_title'] = $this->language->get('heading_title');
		}

		if ($this->customer->isLogged() && !empty($this->session->data['last_order_id'])) {
			$data['text_message'] = sprintf($this->language->get('text_customer'), $this->url->link('account/order/info&order_id=' . $this->session->data['last_order_id'], '', true), $this->url->link('account/account', '', true), $this->url->link('account/order', '', true), $this->url->link('information/contact'), $this->url->link('product/special'), $this->session->data['last_order_id'], $this->url->link('account/download', '', true));
		} else {
			$data['text_message'] = sprintf($this->language->get('text_guest'), $this->url->link('information/contact'));
		}

		$data['continue'] = $this->url->link('common/home');

		$data['column_left'] = $this->load->controller('common/column_left');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');

        if (isset($data['order_id'])) {
		    $this->response->setOutput($this->load->view('common/success_order', $data));
        } else {
		    $this->response->setOutput($this->load->view('common/success', $data));
        }
	}
}
