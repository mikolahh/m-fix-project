<?php 

defined('BASEPATH') OR exit('No direc script access allowed');

class Rule extends MY_Controller {

	public function __constract() {
		parent::__constract();
	}
	

	public function index() {
		$this->data['title'] = "Порядок обслуживания в мастерской M-FIX - 1";
		$this->data['description'] = "Очень подробный документ, регламентирующий работу мастерской, разработан для разрешения спорных вопросов - страница 1 ";
		$this->data['st_ind'] = "noindex";
		$this->data['link_can'] = "https://m-fix.mikola.tech/poryadok-obsluzhivaniya-1";
		$this->data['local_business_enable'] = 0;



		


		$this->load->view('templates/header', $this->data);
		$this->load->view('rule/index', $this->data);
		$this->load->view('templates/footer');

	}
	public function b() {
		$this->data['title'] = "Порядок обслуживания в мастерской M-FIX - 2";
		$this->data['description'] = "Очень подробный документ, регламентирующий работу мастерской, разработан для разрешения спорных вопросов - страница 2 ";
		$this->data['st_ind'] = "noindex";
		$this->data['link_can'] = "https://m-fix.by/poryadok-obsluzhivaniya-1";
		$this->data['local_business_enable'] = 0;




		


		$this->load->view('templates/header', $this->data);
		$this->load->view('rule/b', $this->data);
		$this->load->view('templates/footer');

	}
	public function c() {
		$this->data['title'] = "Порядок обслуживания в мастерской M-FIX - 3";
		$this->data['description'] = "Очень подробный документ, регламентирующий работу мастерской, разработан для разрешения спорных вопросов - страница 3 ";
		$this->data['st_ind'] = "noindex";
		$this->data['link_can'] = "https://m-fix.by/poryadok-obsluzhivaniya-1";
		$this->data['local_business_enable'] = 0;




		


		$this->load->view('templates/header', $this->data);
		$this->load->view('rule/c', $this->data);
		$this->load->view('templates/footer');

	}
	public function d() {
		$this->data['title'] = "Порядок обслуживания в мастерской M-FIX - 4";
		$this->data['description'] = "Очень подробный документ, регламентирующий работу мастерской, разработан для разрешения спорных вопросов страница 4 ";
		$this->data['st_ind'] = "noindex";
		$this->data['link_can'] = "https://m-fix.by/poryadok-obsluzhivaniya-1";
		$this->data['local_business_enable'] = 0;




		


		$this->load->view('templates/header', $this->data);
		$this->load->view('rule/d', $this->data);
		$this->load->view('templates/footer');

	}
	public function e() {
		$this->data['title'] = "Порядок обслуживания в мастерской M-FIX - 5";
		$this->data['description'] = "Очень подробный документ, регламентирующий работу мастерской, разработан для разрешения спорных вопросов страница 5 ";
		$this->data['st_ind'] = "noindex";
		$this->data['link_can'] = "https://m-fix.by/poryadok-obsluzhivaniya-1";
		$this->data['local_business_enable'] = 0;




		


		$this->load->view('templates/header', $this->data);
		$this->load->view('rule/e', $this->data);
		$this->load->view('templates/footer');

	}
	public function f() {
		$this->data['title'] = "Порядок обслуживания в мастерской M-FIX - 6";
		$this->data['description'] = "Очень подробный документ, регламентирующий работу мастерской, разработан для разрешения спорных вопросов - страница 6 ";
		$this->data['st_ind'] = "noindex";
		$this->data['link_can'] = "https://m-fix.by/poryadok-obsluzhivaniya-1";
		$this->data['local_business_enable'] = 0;




		


		$this->load->view('templates/header', $this->data);
		$this->load->view('rule/f', $this->data);
		$this->load->view('templates/footer');

	}
	public function g() {
		$this->data['title'] = "Порядок обслуживания в мастерской M-FIX - 7";
		$this->data['description'] = "Очень подробный документ, регламентирующий работу мастерской, разработан для разрешения спорных вопросов - страница 7 ";
		$this->data['st_ind'] = "noindex";
		$this->data['link_can'] = "https://m-fix.by/poryadok-obsluzhivaniya-1";
		$this->data['local_business_enable'] = 0;




		


		$this->load->view('templates/header', $this->data);
		$this->load->view('rule/g', $this->data);
		$this->load->view('templates/footer');

	}
	public function h() {
		$this->data['title'] = "Порядок обслуживания в мастерской M-FIX - 8";
		$this->data['description'] = "Очень подробный документ, регламентирующий работу мастерской, разработан для разрешения спорных вопросов - страница 8 ";
		$this->data['st_ind'] = "noindex";
		$this->data['link_can'] = "https://m-fix.by/poryadok-obsluzhivaniya-1";
		$this->data['local_business_enable'] = 0;




		


		$this->load->view('templates/header', $this->data);
		$this->load->view('rule/h', $this->data);
		$this->load->view('templates/footer');

	}
	public function i() {
		$this->data['title'] = "Порядок обслуживания в мастерской M-FIX - 9";
		$this->data['description'] = "Очень подробный документ, регламентирующий работу мастерской, разработан для разрешения спорных вопросов - страница 9 ";
		$this->data['st_ind'] = "noindex";
		$this->data['link_can'] = "https://m-fix.by/poryadok-obsluzhivaniya-1";
		$this->data['local_business_enable'] = 0;




		


		$this->load->view('templates/header', $this->data);
		$this->load->view('rule/i', $this->data);
		$this->load->view('templates/footer');

	}


}