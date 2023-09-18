<?php 

defined('BASEPATH') OR exit('No direc script access allowed');

class Main extends MY_Controller {
	
	public function __constract() {
		parent::__constract();
	}	

	public function index() {
		$this->data['title'] = "Ремонт телефонов и планшетов|Минск|м.Пушкинская|Раковский Кирмаш";
		$this->data['description'] = "Срочный ремонт мобильных телефонов и планшетов, бесплатная диагностика при обращении. &#x260e; +375 (29) 116-98-01. Гарантия 120 дней, приемлемые цены. В сертифицированной мастерской. Минск, Фрунзенский район, метро Пушкинская.";

		$this->data['st_ind'] = "noindex";

		$this->data['link_can'] = "https://m-fix.mikola.tech";

		$this->data['local_business_enable'] = 1;

		$this->load->model('typerepair_model');
		$this->data['type_repair'] = $this->typerepair_model->getTyperepair();


		$this->load->view('templates/header', $this->data);
		$this->load->view('main/index', $this->data);
		$this->load->view('templates/footer');

	}

	

}