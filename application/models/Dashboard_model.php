<?php 

class Dashboard_model extends CI_Model {

    public function get_data() {
        $query = $this->db->count_all('patient_record');
        return $query;
    }

    public function get_user() {
        $query = $this->db->count_all('standardusers');
        return $query;
    }

    public function get_doctor() {
        $query = $this->db->count_all('physicians');
        return $query;
    }

    public function get_all_patient() {
        return $this->get_data(); // or your specific query for patients
    }

    public function get_all_user() {
        return $this->get_user(); // or your specific query for users
    }

    public function get_all_doctor() {
        return $this->get_doctor(); // or your specific query for doctors
    }
}

 ?>