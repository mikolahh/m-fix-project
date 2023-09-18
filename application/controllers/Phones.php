<?php 

defined('BASEPATH') OR exit('No direc script access allowed');
class Phones extends MY_Controller {

	public function __construct() {
		parent::__construct();
	}
	public function index() {
		$this->data['title'] = "Ремонт мобильных телефонов|Выбор бренда";
		$this->data['description'] = "Выберите марку мобильного телефона, затем конкретную модель для получения подробной информации о расценках";
		$this->data['st_ind'] = "noindex";
		$this->data['link_can'] = "https://m-fix.mikola.tech/remont-telefonov";
		$this->data['local_business_enable'] = 0;



		$this->load->model('phonesrepair_model');
		$this->data['phones_brands'] = $this->phonesrepair_model->getPhonesrepair();

		
$this->load->view('templates/header', $this->data);
		$this->load->view('phones/index', $this->data);
		$this->load->view('templates/footer');
		
			}
}