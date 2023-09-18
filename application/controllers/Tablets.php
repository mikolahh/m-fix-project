<?php 

defined('BASEPATH') OR exit('No direc script access allowed');
class Tablets extends MY_Controller {

	public function __construct() {
		parent::__construct();
	}
	public function index() {
	$this->data['title'] = "Ремонт планшетов|Выбор бренда";

		$this->data['description'] = "Выберите марку планшета, затем конкретную модель для получения подробной информации о расценках";

		$this->data['st_ind'] = "noindex";
		$this->data['link_can'] = "https://m-fix.mikola.tech/remont-planshetov";
		$this->data['local_business_enable'] = 0;

		$this->load->model('tabletsrepair_model');
		$this->data['tablets_brands'] = $this->tabletsrepair_model->getTabletsrepair();

		
$this->load->view('templates/header', $this->data);
		$this->load->view('tablets/index', $this->data);
		$this->load->view('templates/footer');
		
			}
}