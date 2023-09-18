<?php 

defined('BASEPATH') OR exit('No direc script access allowed');

class Partiphone extends MY_Controller {

	public function __constract() {
		parent::__constract();
	}
	

	public function index() {
		$this->data['title'] = "Проблемы, возникающие при ремонте Iphone";

		$this->data['description'] = "О специфике ремонта телефонов Apple и связанных с ним проблемах";
		$this->data['st_ind'] = "noindex";
		$this->data['link_can'] = "https://m-fix.mikola.tech/articles/osobennosti-remonta-iphone";
		$this->data['local_business_enable'] = 0;

		

		


		$this->load->view('templates/header', $this->data);
		$this->load->view('partiphone/index', $this->data);
		$this->load->view('templates/footer');

	}

}