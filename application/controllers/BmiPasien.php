<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BmiPasien extends CI_Controller {

	public function index(){
		$this->load->model('bmi_pasien');
		$data['bmi_pasien']=$this->bmi_pasien->getAll();
	
		$this->load->view('header');
		$this->load->view('bmipasien/list',$data);
		$this->load->view('footer');
	}
	
	public function view($id){
		$this->load->model('bmi_pasien');
		$data['bmi_pasien']=$this->bmi_pasien->findById($id);
		$this->load->view('header');

		$this->load->view('bmipasien/view',$data);
		$this->load->view('footer');
	}
}