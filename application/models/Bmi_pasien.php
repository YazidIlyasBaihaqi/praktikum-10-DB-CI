<?php
require_once (dirname(__FILE__).'/Bmi_model.php');
class Bmi_pasien extends CI_Model {
    public $id;
    public $tanggal;
    public $nama;
    public $tinggi;
    public $berat;
    public $value_bmi;
    public $bmistatus;

    public function nilaiBMI() {
        $tinggi_meter = $tinggi / 100;
        $bmi = $berat / pow($tinggi_meter,2);
        return $value_bmi;
    }
    public function statusBMI() {
        if ($this->nilaiBMI() < 18.5) {
            return $bmistatus="Kekurangan Berat Badan";
        } else if ($this->nilaiBMI() < 25.0) {
            return $bmistatus="Normal (Ideal)";
        } else if ($this->nilaiBMI() < 30.0) {
            return $bmistatus="Kelebihan Berat Badan";
        } else  {
            return $bmistatus="Kegemukan (Obesitas)";
        }
    }
    public function getAll() {
        $query = $this->db->get('bmi_pasien');
        return $query;
    }
    public function findByID($id) {
        $query = $this->db->get_where('bmi_pasien',['id'=>$id]);
        return $query->row();
    }
}