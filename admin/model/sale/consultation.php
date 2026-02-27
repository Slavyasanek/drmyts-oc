<?php
class ModelSaleConsultation extends Model {
    public function getConsultations($data = array()) {
        $sql = "SELECT c.*, CONCAT(cust.firstname, ' ', cust.lastname) AS customer_name 
                FROM " . DB_PREFIX . "customer_consultation c 
                LEFT JOIN " . DB_PREFIX . "customer cust ON (c.customer_id = cust.customer_id) 
                ORDER BY c.date_added DESC";

        if (isset($data['start']) || isset($data['limit'])) {
            if ($data['start'] < 0) $data['start'] = 0;
            if ($data['limit'] < 1) $data['limit'] = 20;
            $sql .= " LIMIT " . (int)$data['start'] . "," . (int)$data['limit'];
        }

        $query = $this->db->query($sql);
        return $query->rows;
    }

    public function getTotalConsultations() {
        $query = $this->db->query("SELECT COUNT(*) AS total FROM " . DB_PREFIX . "customer_consultation");
        return $query->row['total'];
    }

    public function getConsultation($consultation_id) {
        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "customer_consultation WHERE consultation_id = '" . (int)$consultation_id . "'");
        return $query->row;
    }

    public function saveResult($consultation_id, $data) {
        $check = $this->db->query("SELECT result_id FROM " . DB_PREFIX . "consultation_result WHERE consultation_id = '" . (int)$consultation_id . "'");

        $morning_care = isset($data['morning_care']) ? json_encode($data['morning_care'], JSON_UNESCAPED_UNICODE) : '[]';
        $evening_care = isset($data['evening_care']) ? json_encode($data['evening_care'], JSON_UNESCAPED_UNICODE) : '[]';
        $products = isset($data['products']) ? json_encode($data['products']) : '[]';

        if ($check->num_rows) {
            $this->db->query("UPDATE " . DB_PREFIX . "consultation_result SET 
                customer_id = '" . (int)$data['customer_id'] . "', 
                morning_care = '" . $this->db->escape($morning_care) . "', 
                evening_care = '" . $this->db->escape($evening_care) . "', 
                products = '" . $this->db->escape($products) . "', 
                comment = '" . $this->db->escape($data['comment']) . "' 
                WHERE consultation_id = '" . (int)$consultation_id . "'");
        } else {
            $hash = md5($consultation_id . time() . mt_rand());
            
            $this->db->query("INSERT INTO " . DB_PREFIX . "consultation_result SET 
                consultation_id = '" . (int)$consultation_id . "', 
                customer_id = '" . (int)$data['customer_id'] . "', 
                morning_care = '" . $this->db->escape($morning_care) . "', 
                evening_care = '" . $this->db->escape($evening_care) . "', 
                products = '" . $this->db->escape($products) . "', 
                comment = '" . $this->db->escape($data['comment']) . "', 
                hash = '" . $this->db->escape($hash) . "', 
                date_added = NOW()");

            $this->db->query("UPDATE " . DB_PREFIX . "customer_consultation SET status = '1' WHERE consultation_id = '" . (int)$consultation_id . "'");
        }
    }

    public function getResultByConsultationId($consultation_id) {
        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "consultation_result WHERE consultation_id = '" . (int)$consultation_id . "'");
        return $query->row;
    }

    public function getConsultationsByCustomerId($customer_id) {
        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "customer_consultation WHERE customer_id = '" . (int)$customer_id . "' ORDER BY date_added DESC");
        return $query->rows;
    }

    public function deleteConsultation($consultation_id) {
        $this->db->query("DELETE FROM " . DB_PREFIX . "customer_consultation WHERE consultation_id = '" . (int)$consultation_id . "'");
        $this->db->query("DELETE FROM " . DB_PREFIX . "consultation_result WHERE consultation_id = '" . (int)$consultation_id . "'");
    }
}