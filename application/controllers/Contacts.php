<?php 

defined('BASEPATH') OR exit('No direc script access allowed');

class Contacts extends MY_Controller {

	public function __constract() {
		parent::__constract();
	}
	

	public function index() {
		$this->data['title'] = "Контакты|Как нас найти";

		$this->data['description'] = "Подробная информация о расположении мастерской";

		$this->data['st_ind'] = "noindex";

		$this->data['link_can'] = "https://m-fix.mikola.tech/kontakty";
		$this->data['local_business_enable'] = 1;

		

		


		$this->load->view('templates/header', $this->data);
		$this->load->view('contacts/index', $this->data);
		$this->load->view('templates/footer');

	}

}