<?php 

 defined('BASEPATH') OR exit('No direc script access allowed');

class Catalog extends MY_Controller {

  public function __construct() {
		parent::__construct();
		$this->load->model('devices_model');}

  public function index() {

  	$this->data['title'] = "Быстрый поиск моделей мобильных телефонов и планшетов";

		$this->data['description'] = "Пользуйтесь каталогом моделей мобильных телефонов и планшетов для получения информации о расценках и технических данных.";
		
		$this->data['local_business_enable'] = 0;

		$this->load->model('phonesrepair_model');
		$this->data['phones_brands'] = $this->phonesrepair_model->getPhonesrepair();

		$this->load->model('tabletsrepair_model');
		$this->data['tablets_brands'] = $this->tabletsrepair_model->getTabletsrepair();







		$this->data['st_ind'] = "noindex";

		$this->data['link_can'] = "https://m-fix.mikola.tech/catalog";

		




		
		 $this->data['phones_huawei'] = $this->devices_model->getPhonesHuawei();
		 $this->data['phones_zte'] = $this->devices_model->getPhonesZte();
		 $this->data['phones_nokia'] = $this->devices_model->getPhonesNokia();
		 $this->data['phones_samsung'] = $this->devices_model->getPhonesSamsung();
		 $this->data['phones_sony'] = $this->devices_model->getPhonesSony();
		 $this->data['phones_meizu'] = $this->devices_model->getPhonesMeizu();
		 $this->data['phones_lenovo'] = $this->devices_model->getPhonesLenovo();
		 $this->data['phones_asus'] = $this->devices_model->getPhonesAsus();
		 $this->data['phones_htc'] = $this->devices_model->getPhonesHtc();
		 $this->data['phones_prestigio'] = $this->devices_model->getPhonesPrestigio();
		 $this->data['phones_lg'] = $this->devices_model->getPhonesLg();
		 $this->data['phones_honor'] = $this->devices_model->getPhonesHonor();
		 $this->data['phones_fly'] = $this->devices_model->getPhonesFly();
		 $this->data['phones_iphone'] = $this->devices_model->getPhonesIphone();
		 $this->data['phones_texet'] = $this->devices_model->getPhonesTexet();
		 $this->data['phones_flycat'] = $this->devices_model->getPhonesFlycat();
		 $this->data['phones_ginzzu'] = $this->devices_model->getPhonesGinzzu();
		 $this->data['phones_alcatel'] = $this->devices_model->getPhonesAlcatel();
		 $this->data['phones_philips'] = $this->devices_model->getPhonesPhilips();
		 $this->data['phones_explay'] = $this->devices_model->getPhonesExplay();




		 $this->data['tablets_lenovo'] = $this->devices_model->getTabletsLenovo();
		 $this->data['tablets_samsung'] = $this->devices_model->getTabletsSamsung();
		 $this->data['tablets_prestigio'] = $this->devices_model->getTabletsPrestigio();
		 $this->data['tablets_asus'] = $this->devices_model->getTabletsAsus();
		 $this->data['tablets_sony'] = $this->devices_model->getTabletsSony();
		 $this->data['tablets_huawei'] = $this->devices_model->getTabletsHuawei();
		 $this->data['tablets_explay'] = $this->devices_model->getTabletsExplay();
		 $this->data['tablets_ipad'] = $this->devices_model->getTabletsIpad();
		 $this->data['tablets_acer'] = $this->devices_model->getTabletsAcer();
		
		$this->load->view('templates/header', $this->data);
		$this->load->view('catalog/index', $this->data);
		$this->load->view('templates/footer');

  }


  






 }
