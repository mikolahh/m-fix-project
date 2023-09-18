<?php 

defined('BASEPATH') OR exit('No direc script access allowed');

class Repchar extends MY_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('repchar_model');
		
	}

	public function index() {
		
		$this->data['title'] = "Устранение наиболее распространенных проблем при неисправностях питания и зпрядки.";
		$this->data['description'] = "Телефон или планшет не заряжается. Что делать?";
		$this->data['st_ind'] = "noindex";
		$this->data['link_can'] = "https://m-fix.mikola.tech/net-zaryadki";
		$this->data['local_business_enable'] = 0;


		
		
		$this->load->view('templates/header', $this->data);
		$this->load->view('repchar/index', $this->data);
		$this->load->view('templates/footer');
	}

	public function view($slug) {

		$this->data['devices_item'] = $this->repchar_model->getDevForRepchar($slug);
		$this->data['local_business_enable'] = 0;

		

		if(empty($this->data['part_control_item'])) {
			$this->data['control_part'] = 0;
		}
		if(!empty($this->data['part_control_item'])) {
			$this->data['control_part'] = 1;
		}

		


	// Создаем дескрипшены
	if (empty($this->data['devices_item']['oth_names']) && $this->data['devices_item']['brand_name'] !== 'iphone' && $this->data['devices_item']['brand_name'] !== 'ipad'  && $this->data['devices_item']['brand_name'] !== 'honor') {

	 	$this->data['description'] = $this->data['devices_item']['type_device_ip'].' '.$this->data['devices_item']['brand_name'].' '.$this->data['devices_item']['commerc_name'].' '."не заряжается? Произведем бесплатную диагностику системы зарядки, устраним неисправность в кратчайшие сроки. Замена разъема зарядки, аккуумулятора".' '."Минск, Фрунзенский район, м. Пушкинская, ТЦ 'Раковский Кирмаш'";	 }

	 	if (!empty($this->data['devices_item']['oth_names']) && $this->data['devices_item']['brand_name'] !== 'iphone' && $this->data['devices_item']['brand_name'] !== 'ipad'  && $this->data['devices_item']['brand_name'] !== 'honor') { 
	 		$this->data['description'] = $this->data['devices_item']['type_device_ip'].' '.$this->data['devices_item']['brand_name'].' '.$this->data['devices_item']['commerc_name'].' ('.$this->data['devices_item']['oth_names'].') '."не заряжается? Произведем бесплатную диагностику системы зарядки, устраним неисправность в кратчайшие сроки. Замена разъема зарядки, аккуумулятора".' '."Минск, Фрунзенский район, м. Пушкинская, ТЦ 'Раковский Кирмаш'";	}


	 		 if (empty($this->data['devices_item']['oth_names']) && $this->data['devices_item']['brand_name'] == 'iphone' OR $this->data['devices_item']['brand_name'] == 'ipad'  OR $this->data['devices_item']['brand_name'] == 'honor') {

	 	$this->data['description'] = $this->data['devices_item']['type_device_ip'].' '.$this->data['devices_item']['commerc_name'].' '."не заряжается? Произведем бесплатную диагностику системы зарядки, устраним неисправность в кратчайшие сроки. Замена разъема зарядки, аккуумулятора".' '."Минск, Фрунзенский район, м. Пушкинская, ТЦ 'Раковский Кирмаш'" ;	 }

	 	if (!empty($this->data['devices_item']['oth_names']) && $this->data['devices_item']['brand_name'] == 'iphone' OR $this->data['devices_item']['brand_name'] == 'ipad'  OR $this->data['devices_item']['brand_name'] == 'honor') { 
	 		$this->data['description'] = $this->data['devices_item']['type_device_ip'].' '.$this->data['devices_item']['commerc_name'].' ('.$this->data['devices_item']['oth_names'].') '."не заряжается? Произведем бесплатную диагностику системы зарядки, устраним неисправность в кратчайшие сроки. Замена разъема зарядки, аккуумулятора".' '."Минск, Фрунзенский район, м. Пушкинская, ТЦ 'Раковский Кирмаш'" ;	}
         //Закончили создавать дескрипшены


	
	 
         
         //Создаем тайтлы
	 if (empty($this->data['devices_item']['oth_names']) && $this->data['devices_item']['brand_name'] !== 'iphone' && $this->data['devices_item']['brand_name'] !== 'ipad'  && $this->data['devices_item']['brand_name'] !== 'honor') {

	 	$this->data['title'] = "Ремонт системы зарядки". ' '.$this->data['devices_item']['type_device_pp']. ' '.$this->data['devices_item']['brand_name'].' '.$this->data['devices_item']['commerc_name'];	 }

	 	if (!empty($this->data['devices_item']['oth_names']) && $this->data['devices_item']['brand_name'] !== 'iphone' && $this->data['devices_item']['brand_name'] !== 'ipad'  && $this->data['devices_item']['brand_name'] !== 'honor') { 
	 		$this->data['title'] = "Ремонт системы зарядки". ' '.$this->data['devices_item']['type_device_pp']. ' '.$this->data['devices_item']['brand_name'].' '.$this->data['devices_item']['commerc_name'].' ('.$this->data['devices_item']['oth_names'].')';	}


	 		 if (empty($this->data['devices_item']['oth_names']) && $this->data['devices_item']['brand_name'] == 'iphone' OR $this->data['devices_item']['brand_name'] == 'ipad'  OR $this->data['devices_item']['brand_name'] == 'honor') {

	 	$this->data['title'] = "Ремонт системы зарядки". ' '.$this->data['devices_item']['type_device_pp'].' '.$this->data['devices_item']['commerc_name'];	 }

	 	if (!empty($this->data['devices_item']['oth_names']) && $this->data['devices_item']['brand_name'] == 'iphone' OR $this->data['devices_item']['brand_name'] == 'ipad'  OR $this->data['devices_item']['brand_name'] == 'honor') { 
	 		$this->data['title'] = "Ремонт системы зарядки". ' '.$this->data['devices_item']['type_device_pp'].' '.$this->data['devices_item']['commerc_name'].' ('.$this->data['devices_item']['oth_names'].')';	}
	 		//Закончили создавать тайтлы

	 		$this->data['st_ind'] = "all";
		$this->data['link_can'] = "https://m-fix.by/"."remont-".$this->data['devices_item']['type_devices']."/".$this->data['devices_item']['brand_name']."/".$this->data['devices_item']['slug']."/net-zaryadki";
	 
	 
	

	

	$this->data['title_view'] = "Пропала зарядка". ' '."в".' '.$this->data['devices_item']['type_device_pp']. ' '.$this->data['devices_item']['brand_name'].' '.$this->data['devices_item']['commerc_name'].' ?';

	$this->data['title_view_apple'] = "Пропала зарядка". ' '."в".' '.$this->data['devices_item']['type_device_pp'].' '.$this->data['devices_item']['commerc_name'].' ?';




	$this->data['brand_name'] = $this->data['devices_item']['brand_name'];

	$this->data['brand_name_title'] = $this->data['devices_item']['brand_name_title'];

	$this->data['commerc_name'] = $this->data['devices_item']['commerc_name'];

	$this->data['oth_names'] = $this->data['devices_item']['oth_names'];

	$this->data['type_devices'] = $this->data['devices_item']['type_devices'];

	$this->data['type_devices_rus'] = $this->data['devices_item']['type_devices_rus'];

	$this->data['batt_type'] = $this->data['devices_item']['batt_type'];

	$this->data['batt_name'] = $this->data['devices_item']['batt_name'];

	$this->data['type_device_rp'] = $this->data['devices_item']['type_device_rp'];

	$this->data['ttp'] = $this->data['devices_item']['ttp'];

	$this->data['notes'] = $this->data['devices_item']['notes'];







	

	$this->data['image'] = $this->data['devices_item']['image'];

	$this->data['place_char_con'] = $this->data['devices_item']['place_char_con'];

	$this->data['type_char_con'] = $this->data['devices_item']['type_char_con'];

	$this->data['numb_char_con'] = $this->data['devices_item']['numb_char_con'];

	$this->data['numb_char_con_analog'] = $this->data['devices_item']['numb_char_con_analog'];

	$this->data['notes_char'] = $this->data['devices_item']['notes_char'];

	$this->data['pr_char_con'] = $this->data['devices_item']['pr_char_con'];

	$this->data['img_flex_char'] = $this->data['devices_item']['img_flex_char'];

	$this->data['img_board_char'] = $this->data['devices_item']['img_board_char'];

	
	$this->data['slug'] = $this->data['devices_item']['slug'];

	$this->data['down_flex_iph'] = $this->data['devices_item']['down_flex_iph'];

	//$this->data['type_device_rp'] = $this->data['devices_item']['type_device_rp'];

	$this->data['type_device_pp'] = $this->data['devices_item']['type_device_pp'];

	$this->data['type_devices_img'] = $this->data['devices_item']['type_devices_img'];


    
		//Вводим значения переменных для определения наличия рисунков переносим из техинфо

		$this->data['mb_a']="assets/img/devices/".''.$this->data['devices_item']['slug'].''."/mb_a.jpg";

		$this->data['mb_b']="assets/img/devices/".''.$this->data['devices_item']['slug'].''."/mb_b.jpg";

		$this->data['mb_ch']="assets/img/devices/".''.$this->data['devices_item']['slug'].''."/mb_ch.jpg";

		$this->data['hs_a']="assets/img/devices/".''.$this->data['devices_item']['slug'].''."/hs_a.jpg";

		$this->data['sim']="assets/img/devices/".''.$this->data['devices_item']['slug'].''."/sim.jpg";

		$this->data['oth_1']="assets/img/devices/".''.$this->data['devices_item']['slug'].''."/oth_1.jpg";

		$this->data['oth_2']="assets/img/devices/".''.$this->data['devices_item']['slug'].''."/oth_2.jpg";

		$this->data['oth_3']="assets/img/devices/".''.$this->data['devices_item']['slug'].''."/oth_3.jpg";

		$this->data['lcd']="assets/img/devices/".''.$this->data['devices_item']['slug'].''."/lcd.jpg";

		$this->data['batt_foto']="assets/img/akb/".$this->data['devices_item']['batt_name'].".jpg";


		// Добавляем новые

		$this->data['board_ch']="assets/img/devices/".''.$this->data['devices_item']['slug'].''."/board_ch.jpg";

		$this->data['flex_ch']="assets/img/devices/".''.$this->data['devices_item']['slug'].''."/flex_ch.jpg";

		// Для введенных старым способом		

		$this->data['flex_ch_old']="assets/img/flex_charg/".''.$this->data['devices_item']['img_flex_char'];

		$this->data['board_ch_old']="assets/img/board_char/".''.$this->data['devices_item']['img_board_char'];


		//Закончили вводить значения переменных для определения наличия рисунков

		//Создаем тайтлы для изображений
	 if (empty($this->data['devices_item']['oth_names']) && $this->data['devices_item']['brand_name'] !== 'iphone' && $this->data['devices_item']['brand_name'] !== 'ipad'  && $this->data['devices_item']['brand_name'] !== 'honor') 
	 	{$this->data['for_title'] = $this->data['devices_item']['brand_name'].' '.$this->data['devices_item']['commerc_name'];
	}

	 	if (!empty($this->data['devices_item']['oth_names']) && $this->data['devices_item']['brand_name'] !== 'iphone' && $this->data['devices_item']['brand_name'] !== 'ipad'  && $this->data['devices_item']['brand_name'] !== 'honor') 
	 		{$this->data['for_title'] = $this->data['devices_item']['brand_name'].' '.$this->data['devices_item']['commerc_name'].' ('.$this->data['devices_item']['oth_names'].')';
	 }


	 		 if (empty($this->data['devices_item']['oth_names']) && $this->data['devices_item']['brand_name'] == 'iphone' OR $this->data['devices_item']['brand_name'] == 'ipad'  OR $this->data['devices_item']['brand_name'] == 'honor') 
	 		 	{ $this->data['for_title'] = $this->data['devices_item']['commerc_name'];}

	 	if (!empty($this->data['devices_item']['oth_names']) && $this->data['devices_item']['brand_name'] == 'iphone' OR $this->data['devices_item']['brand_name'] == 'ipad'  OR $this->data['devices_item']['brand_name'] == 'honor') 
	 		{ $this->data['for_title'] = $this->data['devices_item']['commerc_name'].' ('.$this->data['devices_item']['oth_names'].')';}
	 		//Закончили создавать тайтлы для изображений





	$this->data['char_connect_repair'] = round(($this->data['devices_item']['pr_char_con'])*2*1.25+10+pow(($this->data['devices_item']['est_price']), 0.48)*0.8) ;

		$this->data['char_connect_repair_disc'] = round(($this->data['devices_item']['pr_char_con'])*2*1.25+10+pow(($this->data['devices_item']['est_price']), 0.48)*0.6) ;

		$this->data['down_flex_iph_repair'] = round(($this->data['devices_item']['down_flex_iph'])*2*1.25+28+pow(($this->data['devices_item']['est_price']), 0.5)*0.8) ;

		$this->data['down_flex_iph_repair_disc'] = round(($this->data['devices_item']['down_flex_iph'])*2*1.25+28+pow(($this->data['devices_item']['est_price']), 0.5)*0.4) ;

		$this->data['batt_repair'] = round(($this->data['devices_item']['batt_price'])*2*1.25+13+pow(($this->data['devices_item']['est_price']), 0.5)*0.8) ;

		$this->data['batt_repair_disc'] = round(($this->data['devices_item']['batt_price'])*2*1.25+13+pow(($this->data['devices_item']['est_price']), 0.5)*0.4) ;







	$this->load->view('templates/header', $this->data);
		
		$this->load->view('repchar/view', $this->data);
		
		$this->load->view('templates/footer', $this->data);
 }



	
	
	







	

	

	


	

	

}