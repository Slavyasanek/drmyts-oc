<?php
class ModelExtensionModuleConsultation extends Model {
    public function addConsultation($data, $photos = array()) {
        $skin_problems = isset($data['skin_problem']) ? $data['skin_problem'] : array();

        $this->db->query("INSERT INTO " . DB_PREFIX . "customer_consultation SET 
            customer_id    = '" . (int)$this->customer->getId() . "',
            telegram_id    = '" . $this->db->escape($this->session->data['tg_id']) . "',
            user_age       = '" . (int)$data['user_age'] . "',
            user_gender    = '" . $this->db->escape($data['user_gender']) . "',
            user_city      = '" . $this->db->escape($data['user_city']) . "',
            is_pregnant    = '" . $this->db->escape($data['is_pregnant']) . "',
            skin_type      = '" . $this->db->escape($data['skin']) . "',
            skin_tightness = '" . $this->db->escape($data['tightness'] ?? '') . "',
            skin_tzone     = '" . $this->db->escape($data['t-zone'] ?? '') . "',
            skin_problems  = '" . $this->db->escape(json_encode($skin_problems, JSON_UNESCAPED_UNICODE)) . "',
            allergy        = '" . $this->db->escape($data['allergy'] ?? '') . "',
            diagnosis      = '" . $this->db->escape($data['diagnosis'] ?? '') . "',
            photos         = '" . $this->db->escape(json_encode($photos)) . "',
            spf            = '" . $this->db->escape($data['spf'] ?? '') . "',
            cosmetology    = '" . $this->db->escape($data['cosmetology'] ?? '') . "',
            hormonal_drugs = '" . $this->db->escape($data['hormonal_drugs'] ?? '') . "',
            care_format    = '" . $this->db->escape($data['care'] ?? '') . "',
            date_added     = NOW()");

        return $this->db->getLastId();
    }

    public function getResultByHash($hash) {
        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "consultation_result WHERE hash = '" . $this->db->escape($hash) . "'");
        return $query->row;
    }

    public function activateCustomer($customer_id, $discount_amount) {
        $customer_query = $this->db->query("SELECT consult_coupon, consult_unlocked FROM " . DB_PREFIX . "customer WHERE customer_id = '" . (int)$customer_id . "'");
        
        if ($customer_query->num_rows) {
            $saved_coupon = $customer_query->row['consult_coupon'];
            

            if (!empty($saved_coupon)) {

                if (!$customer_query->row['consult_unlocked']) {
                    $this->db->query("UPDATE " . DB_PREFIX . "customer SET consult_unlocked = '1' WHERE customer_id = '" . (int)$customer_id . "'");
                }
                return $saved_coupon;
            }
        }


        $coupon_code = 'GIFT-' . $customer_id . '-' . strtoupper(substr(md5(time() . $customer_id), 0, 4));


        $this->db->query("INSERT INTO " . DB_PREFIX . "coupon SET 
            name = 'Знижка за консультацію (ID: " . (int)$customer_id . ")', 
            code = '" . $this->db->escape($coupon_code) . "', 
            discount = '" . (float)$discount_amount . "', 
            type = 'F', 
            total = '0', 
            logged = '1', 
            shipping = '0', 
            date_start = NOW(), 
            date_end = 9999-12-31, 
            uses_total = '1', 
            uses_customer = '1', 
            status = '1', 
            date_added = NOW()");

        $this->db->query("UPDATE " . DB_PREFIX . "customer SET 
            consult_unlocked = '1', 
            consult_coupon = '" . $this->db->escape($coupon_code) . "' 
            WHERE customer_id = '" . (int)$customer_id . "'");

        return $coupon_code;
    }

    public function clearCustomerCoupon($customer_id) {
        $this->db->query("UPDATE " . DB_PREFIX . "customer SET consult_coupon = '' WHERE customer_id = '" . (int)$customer_id . "'");
    }
}