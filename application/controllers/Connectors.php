<?php 

defined('BASEPATH') OR exit('No direc script access allowed');

class Connectors extends MY_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('connectors_model');
	}

	public function index() {
		$this->data['title'] = "Разъемы зарядки";
		$this->data['description'] = "Разъемы зарядки";

		$this->data['st_ind'] = "noindex";

		$this->data['link_can'] = "https://m-fix.mikola.tech/razemy-zaryadki";

		 $this->data['connectors'] = $this->connectors_model->getConnectors();

		 $this->data['local_business_enable'] = 0;

		
		$this->load->view('templates/header', $this->data);
		$this->load->view('connectors/index', $this->data);
		$this->load->view('templates/footer');
	}

	public function devcon($slug) {
		$this->data['title'] = "Список устройств, использующих разъем зарядки номер".' '.$slug;

		$this->data['description'] = "Здесь показан перечень устройств (мобильных телефонов и планшетов), использующих тип разъема зарядки номер".' '.$slug;

		$this->data['st_ind'] = "noindex";

		$this->data['link_can'] = "https://m-fix.by/razemy-zaryadki/".$slug;

		 $this->data['devcon'] = $this->connectors_model->getDevCon($slug);
		 $this->data['slug'] = $slug;

		 $this->data['devcon_analog'] = $this->connectors_model->getDevCon_analog($slug);
		 $this->data['local_business_enable'] = 0;

		
		$this->load->view('templates/header', $this->data);
		$this->load->view('connectors/devcon', $this->data);
		$this->load->view('templates/footer');
	}

	

	


	

	

}