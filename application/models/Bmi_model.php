<?php
class Bmi_model extends CI_Model {
    public $berat;
    public $tinggi;
    public function nilaiBMI() {
        $tinggi_meter = $this->tinggi;
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