<?php 

defined('BASEPATH') OR exit('No direc script access allowed');

class Legal extends MY_Controller {

	public function __constract() {
		parent::__constract();
	}
	

	public function index() {
		$this->data['title'] = "Юридическая информация|Документы";
		$this->data['description'] = "Основные документы мастерской M-FIX";
		$this->data['st_ind'] = "noindex";
		$this->data['link_can'] = "https://m-fix.mikola.tech/yuridicheskaya-informaciya";
		$this->data['local_business_enable'] = 0;

		

		


		$this->load->view('templates/header', $this->data);
		$this->load->view('legal/index', $this->data);
		$this->load->view('templates/footer');

	}

}