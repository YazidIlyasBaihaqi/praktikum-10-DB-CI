<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bmi extends CI_Controller {

    public function index()
	{
		$this->load->model('bmi_model','bmi1');
		$this->bmi1->berat='60';
		$this->bmi1->tinggi='168';
		$this->bmi1->nilaiBMI();
		$this->bmi1->statusBMI();

		$this->load->model('bmi_model','bmi2');
		$this->bmi2->berat='55';
		$this->bmi2->tinggi='184';
		$this->bmi2->nilaiBMI();
		$this->bmi2->statusBMI();

		$this->load->model('bmi_model','bmi3');
		$this->bmi3->berat='80';
		$this->bmi3->tinggi='150';
		$this->bmi3->nilaiBMI();
		$this->bmi3->statusBMI();	

		$list_bmi = [$this->bmi1, $this->bmi2];
		$dataBmi['list_bmi']=$list_bmi;
		
 		$this->load->view('header');
		$this->load->view('bmi/index',$dataBmi);
 		$this->load->view('footer');
	}
}