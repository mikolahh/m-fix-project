<?php 

defined('BASEPATH') OR exit('No direc script access allowed');

class Water extends MY_Controller {

	public function __constract() {
		parent::__constract();
	}
	

	public function index() {
		$this->data['title'] = "Вода попала в телефон|Что делать?";
		$this->data['description'] = "Рекомендуемый порядок действий при попадании жидкости в телефон или планшет";
		$this->data['st_ind'] = "noindex";
		$this->data['link_can'] = "https://m-fix.mikola.tech/popadanie-vody-v-telefon";
		$this->data['local_business_enable'] = 0;

		

		


		$this->load->view('templates/header', $this->data);
		$this->load->view('water/index', $this->data);
		$this->load->view('templates/footer');

	}

}