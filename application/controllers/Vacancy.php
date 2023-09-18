<?php 

defined('BASEPATH') OR exit('No direc script access allowed');

class Vacancy extends MY_Controller {

	public function __constract() {
		parent::__constract();
	}
	

	

	public function index() {

		$this->data['title'] = " Предлагается работа в мастерской по ремонту мобильных телефонов и планшетов в Минске";
		$this->data['description'] = "для тех, кто пишет запросы типа: 'ищу работу по ремонту мобильных телефонов и планшетов'";

		

		$this->data['st_ind'] = "noindex";

		$this->data['link_can'] = "https://m-fix.mikola.tech/vacancy";

		$this->data['local_business_enable'] = 1;

		;


		$this->load->view('templates/header', $this->data);
		$this->load->view('vacancy/index', $this->data);
		$this->load->view('templates/footer');

	}

	

}