<?php 

defined('BASEPATH') OR exit('No direc script access allowed');

class Search extends MY_Controller {

	public function __constract() {
		parent::__constract();
	}

	public function index() {
		$this->data['title'] = "Поиск модели телефона или планшета";
		$this->data['description'] = "Поиск моделей телефонов или планшетов для получения информации о расценках";
		$this->data['st_ind'] = "noindex";
		$this->data['link_can'] = "https://m-fix.mikola.tech";
		$this->data['local_business_enable'] = 0;



		$this->load->model('search_model');
		$this->data['search_result'] = array();

		if($this->input->get('q_search')) {
			$this->data['search_result'] = $this->search_model->search($this->input->get('q_search'));
		}

		


		$this->load->view('templates/header', $this->data);
		$this->load->view('search', $this->data);
		
		$this->load->view('templates/footer');

	}

}