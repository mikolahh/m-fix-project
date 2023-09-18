<?php 

defined('BASEPATH') OR exit('No direc script access allowed');

class Guaranty extends MY_Controller {

	public function __constract() {
		parent::__constract();
	}
	

	public function index() {
		$this->data['title'] = "Гарантия на ремонт - 4 месяца";

		$this->data['description'] = "Подробно о гарантийной политике в мастерской M-FIX";

		$this->data['st_ind'] = "noindex";
		$this->data['link_can'] = "https://m-fix.mikola.tech/garantiya";
		$this->data['local_business_enable'] = 0;

		

		


		$this->load->view('templates/header', $this->data);
		$this->load->view('guaranty/index', $this->data);
		$this->load->view('templates/footer');

	}

}