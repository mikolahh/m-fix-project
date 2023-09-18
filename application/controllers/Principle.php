<?php 

defined('BASEPATH') OR exit('No direc script access allowed');

class Principle extends MY_Controller {

	public function __constract() {
		parent::__constract();
	}
	

	public function index() {
		$this->data['title'] = "Принципы обслуживания| Главная цель-результат!";

		$this->data['description'] = "Коротко об основных принципах обслуживания в мастерской M-FIX";
		$this->data['st_ind'] = "noindex";
		$this->data['link_can'] = "https://m-fix.mikola.tech/principy-obsluzhivaniya";
		$this->data['local_business_enable'] = 0;


		

		


		$this->load->view('templates/header', $this->data);
		$this->load->view('principle/index', $this->data);
		$this->load->view('templates/footer');

	}

}