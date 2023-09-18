<?php 

class MY_Controller extends CI_Controller {

	public function __construct() {
		parent::__construct();

		$this->data['title'] = "Ремонт телефонов и планшетов";

	
		$this->load->model('devices_model');
		/*$this->data['xiaomi'] = $this->xiaomi_model->getXiaomi();*/

		




		/*$this->load->model('films_model');
		$this->data['films'] = $this->films_model->getFilmsByRating(10);*/

	}

}