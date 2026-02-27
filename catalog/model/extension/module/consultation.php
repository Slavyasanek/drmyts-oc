<?php
class ModelExtensionModuleConsultation extends Model {
    public function addConsultation($data, $photos = array()) {
        // Готуємо масив проблем (якщо це масив, перетворюємо в JSON)
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
}