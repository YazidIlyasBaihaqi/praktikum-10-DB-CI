<?php
require_once (dirname(__FILE__).'/Bmi_model.php');
class Bmipasien_model extends CI_Model {
    public $id;
    public $kode;
    public $tanggal;
    public $nama;
    public $gender;
    public $tinggi;
    public $berat;
    public $bmi;
    public $bmistatus;

    public function nilaiBMI() {
        $tinggi_meter = $this->tinggi / 100;
        $bmi = $this->berat / pow($tinggi_meter,2);
        return $bmi;
    }
    
    public function statusBMI() {
        if ($this->nilaiBMI() < 18.5) {
            return $bmistatus="Kekurangan Berat Badan";
        } else if ($this->nilaiBMI() < 25.0) {
            return $bmistatus="Normal (Ideal)";
        } else if ($this->nilaiBMI() < 30.0) {
            return $bmistatus="Kelebihan Berat Badan";
        } else{
            return $bmistatus="Kegemukan (Obesitas)";
        }
    }
}