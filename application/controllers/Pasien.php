<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasien extends CI_Controller {

    public function index(){
		$this->load->model('pasien_model');
		$data['pasien']=$this->pasien_model->getAll();

		$this->load->view('header');
		$this->load->view('pasien/list',$data);
		$this->load->view('footer');
	}

	public function view($id){
		$this->load->model('pasien_model');
		$data['pasien']=$this->pasien_model->findById($id);
		$this->load->view('header');

		$this->load->view('pasien/view',$data);
		$this->load->view('footer');
	}
}