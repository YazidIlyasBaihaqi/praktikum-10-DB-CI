<?php
class Pasien_model extends CI_Model {
    public $id;
    public $nama;
    public $kode;
    public $gender;
    public $tmp_lahir;
    public $tgl_lahir;
    public $email;
    public function getAll() {
        $query = $this->db->get('pasien');
        return $query;
    }
    public function findByID($id) {
        $query = $this->db->get_where('pasien',['id'=>$id]);
        return $query->row();
    }
}