<?php 

defined('BASEPATH') OR exit('No direc script access allowed');
class Apples extends MY_Controller {

	public function __construct() {
		parent::__construct();
	}
	public function index() {
		$this->data['title'] = "Ремонт телефонов и планшетов Apple|Выбор типа устройства";
		$this->data['description'] = "Выберите тип изделия Apple, затем конкретную модель для получения подробной информации о расценках";

		$this->data['st_ind'] = "noindex";

		$this->data['link_can'] = "https://m-fix.mikola.tech/remont-apple";
		$this->data['local_business_enable'] = 0;

		$this->load->model('applesrepair_model');
		$this->data['type_apple'] = $this->applesrepair_model->getApplesrepair(FALSE);

		
$this->load->view('templates/header', $this->data);
		$this->load->view('apples/index', $this->data);
		$this->load->view('templates/footer');
		
			}
}