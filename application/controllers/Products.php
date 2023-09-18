<?php 

defined('BASEPATH') OR exit('No direc script access allowed');

class Products extends MY_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('products_model');
		$this->data['usd'] = "2.1";

	}

	public function index () {

		$this->data['st_ind'] = "noindex";
		$this->data['local_business_enable'] = 0;
		$this->data['link_can'] = "https://m-fix.mikola.tech/products";

		$this->data['title'] = 'Аксессуары, зарядки, кабели и прочее для мобильных телефонов и планшетов купить недорого в Минске, Фрунзенский р-н.';
		$this->data['description'] = 'Дополнительные аксессуары, зарядые устройства, наушники, ганитуры, дата-кабели для сотовых телефонов и планшетов.';

		$this->data['products_category'] = $this->products_model->getProductsCategory();

		$this->load->view('templates/header', $this->data);
		$this->load->view('products/index', $this->data);
		$this->load->view('templates/footer');
	}	

	public function category ($param) {

		
		$this->data['st_ind'] = "noindex";
		$this->data['local_business_enable'] = 0;
		$this->data['link_can'] = "https://m-fix.mikola.tech/products/".$param;

		$this->data['category_parts'] = $this->products_model->getCategory($param);

		$this->data['category_item'] = $this->products_model->getCategoryName($param);


		$this->data['title'] = $this->data['category_item']['name'].' '.'купить недорого в Минске, Фрунзенский район.';
		$this->data['description'] = $this->data['category_item']['name'].' мобильных телефонов  '.'приобрести со скидкой';

		$this->data['category_name'] = $this->data['category_item']['name'];

        

        
		

			

		
		$this->load->view('templates/header', $this->data);
		$this->load->view('products/category', $this->data);
		$this->load->view('templates/footer');
	}

	public function product ($param1, $param2) {

		$this->data['st_ind'] = "all";
		$this->data['local_business_enable'] = 0;
		$this->data['link_can'] = "https://m-fix.by/products/$param1/$param2";		

		$this->data['product_item'] = $this->products_model->getProduct($param1, $param2);
		$this->data['category_item'] = $this->products_model->getCategoryName($param1);

		$this->data['title'] = $this->data['product_item']['name_title'].' '.'купить недорого в Минске, Фрунзенский район';
		$this->data['description'] = $this->data['product_item']['name_description'].' '.'приобрести со скидкой';

		$this->data['title_breadcrumb'] = $this->data['category_item']['name'];

		$this->data['name_h1'] = $this->data['product_item']['name_h1'];
		 $this->data['name_title'] = $this->data['product_item']['name_title'];
		 $this->data['name_description'] = $this->data['product_item']['name_description'];
		 $this->data['note'] = $this->data['product_item']['note'];
		 
		 $this->data['seller'] = $this->data['product_item']['seller'];
		 $this->data['date'] = $this->data['product_item']['date'];
		 $this->data['slug_product'] = $this->data['product_item']['slug'];
		 $this->data['slug_category'] = $this->data['product_item']['slug_category'];
		 $this->data['info'] = $this->data['product_item']['info'];
		 $this->data['link_review'] = $this->data['product_item']['link_review'];

		 $this->data['price'] = $this->data['product_item']['price'];
		 $this->data['price_discount'] = $this->data['product_item']['price_discount'];

		 $this->data['price_ex'] = 'Цена: '.$this->data['product_item']['price'].' руб. (BYN)';
		 $this->data['price_discount_ex'] = 'Цена со скидкой: '.$this->data['product_item']['price_discount'].' руб. (BYN)';

		 //Вводим значения переменных для определения наличия рисунков		

		$this->data['img_2']="assets/img/products/".$this->data['product_item']['slug_category'].'/'.$this->data['product_item']['slug'].'/'.$this->data['product_item']['slug'].'_2.jpg';
		$this->data['img_3']="assets/img/products/".$this->data['product_item']['slug_category'].'/'.$this->data['product_item']['slug'].'/'.$this->data['product_item']['slug'].'_3.jpg';
		$this->data['img_4']="assets/img/products/".$this->data['product_item']['slug_category'].'/'.$this->data['product_item']['slug'].'/'.$this->data['product_item']['slug'].'_4.jpg';
		
		 

		

		$this->load->view('templates/header', $this->data);
		$this->load->view('products/view_products', $this->data);
		$this->load->view('templates/footer');






	}

	public function parts () {

		$this->data['st_ind'] = "noindex";
		$this->data['local_business_enable'] = 0;
		$this->data['link_can'] = "https://m-fix.by/products/parts";

		$this->data['title'] = 'Комплектующие к мобильным телефонам и планшетам, детали с разборки купить недорого в Минске, Фрунзенский р-н.';
		$this->data['description'] = 'Детали и комплектующие для конкретных моделей мобильных телефонов и планшетов';

		

		$this->load->view('templates/header', $this->data);
		$this->load->view('products/parts', $this->data);
		$this->load->view('templates/footer');
	}		

	

	public function part($param_1, $param_2) {
		

		$this->data['st_ind'] = "all";
		$this->data['local_business_enable'] = 0;
		$this->data['link_can'] = "https://m-fix.by/parts/".$param_1.'/'.$param_2;

		 $this->data['part_item'] = $this->products_model->getPart($param_1, $param_2);
		 $this->data['devices_item'] = $this->products_model->getDevice($param_1);

		 $this->data['name_h1'] = $this->data['part_item']['name_h1'];
		 $this->data['name_title'] = $this->data['part_item']['name_title'];
		 $this->data['name_description'] = $this->data['part_item']['name_description'];
		 $this->data['note'] = $this->data['part_item']['note'];
		 $this->data['price'] = $this->data['part_item']['price'];
		 $this->data['seller'] = $this->data['part_item']['seller'];
		 $this->data['date'] = $this->data['part_item']['date'];
		 $this->data['slug_part'] = $this->data['part_item']['slug'];
		 $this->data['info'] = $this->data['part_item']['info'];



		 $this->data['slug_device'] = $this->data['devices_item']['slug'];
		 $this->data['type_devices'] = $this->data['devices_item']['type_devices'];
		 $this->data['brand_name'] = $this->data['devices_item']['brand_name'];

		 	// Создаем дескрипшены
	if (empty($this->data['devices_item']['oth_names']) && $this->data['devices_item']['brand_name'] !== 'iphone' && $this->data['devices_item']['brand_name'] !== 'ipad'  && $this->data['devices_item']['brand_name'] !== 'honor') {

	 	$this->data['description'] = 'Комплектующие к '.$this->data['devices_item']['type_device_dp'].' '.$this->data['devices_item']['brand_name'].' '.$this->data['devices_item']['commerc_name'].'. '.$this->data['part_item']['name_description'].'.';	 }

	 	if (!empty($this->data['devices_item']['oth_names']) && $this->data['devices_item']['brand_name'] !== 'iphone' && $this->data['devices_item']['brand_name'] !== 'ipad'  && $this->data['devices_item']['brand_name'] !== 'honor') { 
	 		$this->data['description'] = 'Комплектующие к '.$this->data['devices_item']['type_device_dp'].' '.$this->data['devices_item']['brand_name'].' '.$this->data['devices_item']['commerc_name'].' ('.$this->data['devices_item']['oth_names'].'). '.$this->data['part_item']['name_description'].'.';	}


	 		 if (empty($this->data['devices_item']['oth_names']) && $this->data['devices_item']['brand_name'] == 'iphone' OR $this->data['devices_item']['brand_name'] == 'ipad'  OR $this->data['devices_item']['brand_name'] == 'honor') {

	 	$this->data['description'] = 'Комплектующие к '.$this->data['devices_item']['type_device_dp'].' '.$this->data['devices_item']['commerc_name'].'. '.$this->data['part_item']['name_description'].'.';	 }

	 	if (!empty($this->data['devices_item']['oth_names']) && $this->data['devices_item']['brand_name'] == 'iphone' OR $this->data['devices_item']['brand_name'] == 'ipad'  OR $this->data['devices_item']['brand_name'] == 'honor') { 
	 		$this->data['description'] = 'Комплектующие к'.$this->data['devices_item']['type_device_dp'].' '.$this->data['devices_item']['commerc_name'].' ('.$this->data['devices_item']['oth_names'].'). '.$this->data['part_item']['name_description'].'.';	}
         //Закончили создавать дескрипшены
	 
         
         //Создаем тайтлы
	 if (empty($this->data['devices_item']['oth_names']) && $this->data['devices_item']['brand_name'] !== 'iphone' && $this->data['devices_item']['brand_name'] !== 'ipad'  && $this->data['devices_item']['brand_name'] !== 'honor') {

	 	$this->data['title'] = $this->data['part_item']['name_title']. ' к '.$this->data['devices_item']['type_device_dp']. ' '.$this->data['devices_item']['brand_name'].' '.$this->data['devices_item']['commerc_name'].' купить в Минске.';	 }

	 	if (!empty($this->data['devices_item']['oth_names']) && $this->data['devices_item']['brand_name'] !== 'iphone' && $this->data['devices_item']['brand_name'] !== 'ipad'  && $this->data['devices_item']['brand_name'] !== 'honor') {

	 		$this->data['title'] = $this->data['part_item']['name_title'].' к '.$this->data['devices_item']['type_device_dp']. ' '.$this->data['devices_item']['brand_name'].' '.$this->data['devices_item']['commerc_name'].' ('.$this->data['devices_item']['oth_names'].')'.' купить в Минске.';	}


	 		 if (empty($this->data['devices_item']['oth_names']) && $this->data['devices_item']['brand_name'] == 'iphone' OR $this->data['devices_item']['brand_name'] == 'ipad'  OR $this->data['devices_item']['brand_name'] == 'honor') {

	 	$this->data['title'] = $this->data['part_item']['name_title'].' к '.$this->data['devices_item']['type_device_dp'].' '.$this->data['devices_item']['commerc_name'].' купить в Минске.';	 }

	 	if (!empty($this->data['devices_item']['oth_names']) && $this->data['devices_item']['brand_name'] == 'iphone' OR $this->data['devices_item']['brand_name'] == 'ipad'  OR $this->data['devices_item']['brand_name'] == 'honor') {

	 		$this->data['title'] = $this->data['part_item']['name_title'].' к '.$this->data['devices_item']['type_device_dp'].' '.$this->data['devices_item']['commerc_name'].' ('.$this->data['devices_item']['oth_names'].')'.' купить в Минске.';	}
	 		//Закончили создавать тайтлы

	 		//Создаем заголовки h1

	 		if (empty($this->data['devices_item']['oth_names']) && $this->data['devices_item']['brand_name'] !== 'iphone' && $this->data['devices_item']['brand_name'] !== 'ipad'  && $this->data['devices_item']['brand_name'] !== 'honor') {

	 	$this->data['h1'] = $this->data['part_item']['name_h1'].' '.'для '.$this->data['devices_item']['type_device_rp']. ' '.$this->data['devices_item']['brand_name_title'].' '.$this->data['devices_item']['commerc_name'];	 }

	 	if (!empty($this->data['devices_item']['oth_names']) && $this->data['devices_item']['brand_name'] !== 'iphone' && $this->data['devices_item']['brand_name'] !== 'ipad'  && $this->data['devices_item']['brand_name'] !== 'honor') {

	 		$this->data['h1'] = $this->data['part_item']['name_h1'].' '.'для '.$this->data['devices_item']['type_device_rp']. ' '.$this->data['devices_item']['brand_name_title'].' '.$this->data['devices_item']['commerc_name'].' ('.$this->data['devices_item']['oth_names'].')';	}


	 		 if (empty($this->data['devices_item']['oth_names']) && $this->data['devices_item']['brand_name'] == 'iphone' OR $this->data['devices_item']['brand_name'] == 'ipad'  OR $this->data['devices_item']['brand_name'] == 'honor') {

	 	$this->data['h1'] = $this->data['part_item']['name_h1'].' '.'для '.$this->data['devices_item']['type_device_rp'].' '.$this->data['devices_item']['commerc_name'];	 }

	 	if (!empty($this->data['devices_item']['oth_names']) && $this->data['devices_item']['brand_name'] == 'iphone' OR $this->data['devices_item']['brand_name'] == 'ipad'  OR $this->data['devices_item']['brand_name'] == 'honor') {

	 		$this->data['h1'] = $this->data['devices_item']['name_h1'].' '.'для '.$this->data['devices_item']['type_device_rp'].' '.$this->data['devices_item']['commerc_name'].' ('.$this->data['devices_item']['oth_names'].')';	}

	 		//Закончили создавать заголовки h1

	 		//Создаем надписи для breadcrumb

	 			if ($this->data['devices_item']['brand_name'] == 'iphone' OR $this->data['devices_item']['brand_name'] == 'ipad'  OR $this->data['devices_item']['brand_name'] == 'honor') {
	 				$this->data['title_breadcrumb'] = 'Ремонт'.' '.$this->data['devices_item']['commerc_name'];
	 			}
	 			else {$this->data['title_breadcrumb'] = 'Ремонт'.' '.$this->data['devices_item']['brand_name_title'].' '.$this->data['devices_item']['commerc_name'];}

	 			//Вводим значения переменных для определения наличия рисунков		

		$this->data['img_2']="assets/img/devices/".$this->data['devices_item']['slug'].'/'.$this->data['part_item']['slug'].'_2.jpg';
		$this->data['img_3']="assets/img/devices/".$this->data['devices_item']['slug'].'/'.$this->data['part_item']['slug'].'_3.jpg';
		$this->data['img_4']="assets/img/devices/".$this->data['devices_item']['slug'].'/'.$this->data['part_item']['slug'].'_4.jpg';
		 

		
		$this->load->view('templates/header', $this->data);
		$this->load->view('products/view_parts', $this->data);
		$this->load->view('templates/footer');
	}

	

	


	

	

}