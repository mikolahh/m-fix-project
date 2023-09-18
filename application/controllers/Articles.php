<?php 

defined('BASEPATH') OR exit('No direc script access allowed');

class Articles extends MY_Controller {

	public function __constract() {
		parent::__constract();
	}
	

	public function index() {
		$this->data['title'] = "Статьи|Полезная информация";
		
		$this->data['description'] = "Здесь можно получить дополнительную информацию о работе мастерской, а также о диагностике и устранению неисправностей";

		$this->data['st_ind'] = "noindex";

		$this->data['link_can'] = "https://m-fix.mikola.tech/articles";

		$this->data['local_business_enable'] = 0;


		

		


		$this->load->view('templates/header', $this->data);
		$this->load->view('articles/index', $this->data);
		$this->load->view('templates/footer');

	}

}