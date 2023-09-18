<?php 

defined('BASEPATH') OR exit('No direc script access allowed');

class Tekhinfo extends MY_Controller {

	public function __constract() {
		parent::__constract();
	}
	

	public function index() {

		$this->load->model('devices_model');
		$this->data['title'] = "Информация для ремонтников";

		$this->data['description'] = "В данном разделе содержится полезная Информация для любителей и профессионалов, занимающихся ремонтом мобильных телефонов и планшетов.";	

		$this->data['st_ind'] = "noindex";
		$this->data['link_can'] = "https://m-fix.mikola.tech/tekhnicheskaya-informaciya";
		$this->data['local_business_enable'] = 0;

		 
		$this->load->view('templates/header', $this->data);
		$this->load->view('techinfo/index', $this->data);
		$this->load->view('templates/footer');

	}

	

}