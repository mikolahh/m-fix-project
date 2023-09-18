<?php 

defined('BASEPATH') OR exit('No direc script access allowed');

class Devices extends MY_Controller {

	public function __constract() {
		parent::__constract();
	}

	public function repair($slug = NULL) {
		
		

		if($slug == "xiaomi") {
			$this->data['alldevices'] = $this->devices_model->getDevices(false, 1);
			
			$this->data['title'] = "Ремонт мобильных телефонов Xiaomi в Минске|Центр M-FIX.";
			$this->data['description'] = "Срочный ремонт телефонов Xiaomi, приемлемые цены, бесплатная диагностика на приемке. &#x260e; +375 (29) 116-98-01. Гарантия 120 дней, В сертифицированной мастерской. Минск, Фрунзенский район, метро Пушкинская.";
			$this->data['st_ind'] = "noindex";
			$this->data['link_can'] = "https://m-fix.mikola.tech/remont-telefonov/xiaomi";
			$this->data['title_repair'] = "Ремонт телефонов Xiaomi в Минске";
			$this->data['for_breadcrumb_3'] = "Ремонт телефонов Xiaomi";
			$this->data['for_breadcrumb_2'] = "Ремонт телефонов";
			$this->data['for_breadcrumb_2_slug'] = "remont-telefonov";
			$this->data['local_business_enable'] = 0;
			


			
		}

		if($slug == "meizu") {
			$this->data['alldevices'] = $this->devices_model->getDevices(false, 2);
			
			$this->data['title'] = "Ремонт мобильных телефонов Meizu в Минске|Центр M-FIX.";
			$this->data['description'] = "Срочный ремонт телефонов Meizu, приемлемые цены, бесплатная диагностика на приемке. &#x260e; +375 (29) 116-98-01. Гарантия 120 дней, В сертифицированной мастерской. Минск, Фрунзенский район, метро Пушкинская.";
			$this->data['st_ind'] = "all";
			$this->data['link_can'] = "https://m-fix.by/remont-telefonov/meizu";
			$this->data['title_repair'] = "Ремонт телефонов Meizu в Минске";
			$this->data['for_breadcrumb_3'] = "Ремонт телефонов Meizu ";
			$this->data['for_breadcrumb_2'] = "Ремонт телефонов";
			$this->data['for_breadcrumb_2_slug'] = "remont-telefonov";
			$this->data['local_business_enable'] = 0;
			
		}

		if($slug == "huawei") {
			$this->data['alldevices'] = $this->devices_model->getDevices(false, 3);
			
			$this->data['title'] = "Ремонт мобильных телефонов Huawei в Минске|Центр M-FIX.";
			$this->data['description'] = "Срочный ремонт телефонов Huawei, приемлемые цены, бесплатная диагностика на приемке. &#x260e; +375 (29) 116-98-01. Гарантия 120 дней, В сертифицированной мастерской. Минск, Фрунзенский район, метро Пушкинская.";
			$this->data['st_ind'] = "all";
			$this->data['link_can'] = "https://m-fix.by/remont-telefonov/huawei";
			$this->data['title_repair'] = "Ремонт телефонов Huawei в Минске";
			$this->data['for_breadcrumb_3'] = "Ремонт телефонов Huawei";
			$this->data['for_breadcrumb_2'] = "Ремонт телефонов";
			$this->data['for_breadcrumb_2_slug'] = "remont-telefonov";
			$this->data['local_business_enable'] = 0;
			
		}

		if($slug == "zte") {
			$this->data['alldevices'] = $this->devices_model->getDevices(false, 4);
			
			$this->data['title'] = "Ремонт мобильных телефонов ZTE в Минске|Центр M-FIX.";
			$this->data['description'] = "Срочный ремонт телефонов ZTE, приемлемые цены, бесплатная диагностика на приемке. &#x260e; +375 (29) 116-98-01. Гарантия 120 дней, В сертифицированной мастерской. Минск, Фрунзенский район, метро Пушкинская.";
			$this->data['st_ind'] = "all";
			$this->data['link_can'] = "https://m-fix.by/remont-telefonov/zte";
			$this->data['title_repair'] = "Ремонт телефонов ZTE в Минске";
			$this->data['for_breadcrumb_3'] = "Ремонт телефонов ZTE";
			$this->data['for_breadcrumb_2'] = "Ремонт телефонов";
			$this->data['for_breadcrumb_2_slug'] = "remont-telefonov";
			$this->data['local_business_enable'] = 0;
			
		}

		if($slug == "samsung") {
			$this->data['alldevices'] = $this->devices_model->getDevices(false, 5);
		
			$this->data['title'] = "Ремонт мобильных телефонов Samsung в Минске|Центр M-FIX.";
			$this->data['description'] = "Срочный ремонт телефонов Samsung, приемлемые цены, бесплатная диагностика на приемке. &#x260e; +375 (29) 116-98-01. Гарантия 120 дней, В сертифицированной мастерской. Минск, Фрунзенский район, метро Пушкинская.";
			$this->data['st_ind'] = "all";
			$this->data['link_can'] = "https://m-fix.by/remont-telefonov/samsung";
			$this->data['title_repair'] = "Ремонт телефонов Samsung в Минске";
			$this->data['for_breadcrumb_3'] = "Ремонт телефонов Samsung";
			$this->data['for_breadcrumb_2'] = "Ремонт телефонов";
			$this->data['for_breadcrumb_2_slug'] = "remont-telefonov";
			$this->data['local_business_enable'] = 0;
			
		}

		if($slug == "nokia") {
			$this->data['alldevices'] = $this->devices_model->getDevices(false, 6);
			
			$this->data['title'] = "Ремонт мобильных телефонов Nokia в Минске|Центр M-FIX.";
			$this->data['description'] = "Срочный ремонт телефонов Nokia, приемлемые цены, бесплатная диагностика на приемке. &#x260e; +375 (29) 116-98-01. Гарантия 120 дней, В сертифицированной мастерской. Минск, Фрунзенский район, метро Пушкинская.";
			$this->data['st_ind'] = "all";
			$this->data['link_can'] = "https://m-fix.by/remont-telefonov/nokia";
			$this->data['title_repair'] = "Ремонт телефонов Nokia в Минске";
			$this->data['for_breadcrumb'] = "Ремонт телефонов ";
			$this->data['for_breadcrumb_3'] = "Ремонт телефонов Nokia";
			$this->data['for_breadcrumb_2'] = "Ремонт телефонов";
			$this->data['for_breadcrumb_2_slug'] = "remont-telefonov";
			$this->data['local_business_enable'] = 0;
			
		}

		if($slug == "sony") {
			$this->data['alldevices'] = $this->devices_model->getDevices(false, 7);
			
			$this->data['title'] = "Ремонт мобильных телефонов Sony в Минске|Центр M-FIX.";
			$this->data['description'] = "Срочный ремонт телефонов Sony, приемлемые цены, бесплатная диагностика на приемке. &#x260e; +375 (29) 116-98-01. Гарантия 120 дней, В сертифицированной мастерской. Минск, Фрунзенский район, метро Пушкинская.";
			$this->data['st_ind'] = "all";
			$this->data['link_can'] = "https://m-fix.by/remont-telefonov/sony";
			$this->data['title_repair'] = "Ремонт телефонов Sony в Минске";
			$this->data['for_breadcrumb_3'] = "Ремонт телефонов Sony";
			$this->data['for_breadcrumb_2'] = "Ремонт телефонов";
			$this->data['for_breadcrumb_2_slug'] = "remont-telefonov";
			$this->data['local_business_enable'] = 0;
			
		}

		if($slug == "lenovo") {
			$this->data['alldevices'] = $this->devices_model->getDevices(false, 8);
			
			$this->data['title'] = "Ремонт мобильных телефонов Lenovo в Минске|Центр M-FIX.";
			$this->data['description'] = "Срочный ремонт телефонов Lenovo, приемлемые цены, бесплатная диагностика на приемке. &#x260e; +375 (29) 116-98-01. Гарантия 120 дней, В сертифицированной мастерской. Минск, Фрунзенский район, метро Пушкинская.";
			$this->data['st_ind'] = "all";
			$this->data['link_can'] = "https://m-fix.by/remont-telefonov/lenovo";
			$this->data['title_repair'] = "Ремонт телефонов Lenovo в Минске";
			$this->data['for_breadcrumb_3'] = "Ремонт телефонов Lenovo";
			$this->data['for_breadcrumb_2'] = "Ремонт телефонов";
			$this->data['for_breadcrumb_2_slug'] = "remont-telefonov";
			$this->data['local_business_enable'] = 0;
			
		}

		if($slug == "lg") {
			$this->data['alldevices'] = $this->devices_model->getDevices(false, 9);
			
			$this->data['title'] = "Ремонт мобильных телефонов LG в Минске|Центр M-FIX.";
			$this->data['description'] = "Срочный ремонт телефонов LG, приемлемые цены, бесплатная диагностика на приемке. &#x260e; +375 (29) 116-98-01. Гарантия 120 дней, В сертифицированной мастерской. Минск, Фрунзенский район, метро Пушкинская.";
			$this->data['st_ind'] = "all";
			$this->data['link_can'] = "https://m-fix.by/remont-telefonov/lg";
			$this->data['title_repair'] = "Ремонт телефонов LG в Минске";
			$this->data['for_breadcrumb_3'] = "Ремонт телефонов LG";
			$this->data['for_breadcrumb_2'] = "Ремонт телефонов";
			$this->data['for_breadcrumb_2_slug'] = "remont-telefonov";
			$this->data['local_business_enable'] = 0;
			
		}

		if($slug == "htc") {
		$this->data['alldevices'] = $this->devices_model->getDevices(false, 10);	
			
			$this->data['title'] = "Ремонт мобильных телефонов HTC в Минске|Центр M-FIX.";
			$this->data['description'] = "Срочный ремонт телефонов HTC, приемлемые цены, бесплатная диагностика на приемке. &#x260e; +375 (29) 116-98-01. Гарантия 120 дней, В сертифицированной мастерской. Минск, Фрунзенский район, метро Пушкинская.";
			$this->data['st_ind'] = "all";
			$this->data['link_can'] = "https://m-fix.by/remont-telefonov/htc";
			$this->data['title_repair'] = "Ремонт телефонов HTC в Минске";
			$this->data['for_breadcrumb_3'] = "Ремонт телефонов HTC";
			$this->data['for_breadcrumb_2'] = "Ремонт телефонов";
			$this->data['for_breadcrumb_2_slug'] = "remont-telefonov";
			$this->data['local_business_enable'] = 0;
			
		}

		if($slug == "prestigio") {
			$this->data['alldevices'] = $this->devices_model->getDevices(false, 11);
			
			$this->data['title'] = "Ремонт мобильных телефонов Prestigio в Минске|Центр M-FIX.";
			$this->data['description'] = "Срочный ремонт телефонов Prestigio, приемлемые цены, бесплатная диагностика на приемке. &#x260e; +375 (29) 116-98-01. Гарантия 120 дней, В сертифицированной мастерской. Минск, Фрунзенский район, метро Пушкинская.";
			$this->data['st_ind'] = "all";
			$this->data['link_can'] = "https://m-fix.by/remont-telefonov/prestigio";
			$this->data['title_repair'] = "Ремонт телефонов Prestigio в Минске";
			$this->data['for_breadcrumb_3'] = "Ремонт телефонов Prestigio";
			$this->data['for_breadcrumb_2'] = "Ремонт телефонов";
			$this->data['for_breadcrumb_2_slug'] = "remont-telefonov";
			$this->data['local_business_enable'] = 0;
			
		}

		if($slug == "asus") {
			$this->data['alldevices'] = $this->devices_model->getDevices(false, 12);
			
			$this->data['title'] = "Ремонт мобильных телефонов Asus в Минске|Центр M-FIX.";
			$this->data['description'] = "Срочный ремонт телефонов Asus, приемлемые цены, бесплатная диагностика на приемке. &#x260e; +375 (29) 116-98-01. Гарантия 120 дней, В сертифицированной мастерской. Минск, Фрунзенский район, метро Пушкинская.";
			$this->data['st_ind'] = "all";
			$this->data['link_can'] = "https://m-fix.by/remont-telefonov/asus";
			$this->data['title_repair'] = "Ремонт телефонов Asus в Минске";
			$this->data['for_breadcrumb_3'] = "Ремонт телефонов Asus";
			$this->data['for_breadcrumb_2'] = "Ремонт телефонов";
			$this->data['for_breadcrumb_2_slug'] = "remont-telefonov";
			$this->data['local_business_enable'] = 0;
			
		}

		if($slug == "iphone") {
			$this->data['alldevices'] = $this->devices_model->getDevices(false, 13);
			
			$this->data['title'] = "Ремонт мобильных телефонов Iphone в Минске|Центр M-FIX.";
			$this->data['description'] = "Срочный ремонт телефонов Iphone, приемлемые цены, бесплатная диагностика на приемке. &#x260e; +375 (29) 116-98-01. Гарантия 120 дней, В сертифицированной мастерской. Минск, Фрунзенский район, метро Пушкинская.";
			$this->data['st_ind'] = "all";
			$this->data['link_can'] = "https://m-fix.by/remont-telefonov/iphone";
			$this->data['title_repair'] = "Ремонт телефонов Iphone в Минске";
			$this->data['for_breadcrumb_3'] = "Ремонт телефонов Iphone";
			$this->data['for_breadcrumb_2'] = "Ремонт телефонов";
			$this->data['for_breadcrumb_2_slug'] = "remont-telefonov";
			$this->data['local_business_enable'] = 0;
			
		}

		if($slug == "honor") {
			$this->data['alldevices'] = $this->devices_model->getDevices(false, 14);
			
			$this->data['title'] = "Ремонт мобильных телефонов Honor в Минске|Центр M-FIX.";
			$this->data['description'] = "Срочный ремонт телефонов Honor, приемлемые цены, бесплатная диагностика на приемке. &#x260e; +375 (29) 116-98-01. Гарантия 120 дней, В сертифицированной мастерской. Минск, Фрунзенский район, метро Пушкинская.";
			$this->data['st_ind'] = "all";
			$this->data['link_can'] = "https://m-fix.by/remont-telefonov/honor";
			$this->data['title_repair'] = "Ремонт телефонов Honor в Минске";
			$this->data['for_breadcrumb_3'] = "Ремонт телефонов Honor";
			$this->data['for_breadcrumb_2'] = "Ремонт телефонов";
			$this->data['for_breadcrumb_2_slug'] = "remont-telefonov";
			$this->data['local_business_enable'] = 0;
			
		}

		if($slug == "fly") {
			$this->data['alldevices'] = $this->devices_model->getDevices(false, 15);
			
			$this->data['title'] = "Ремонт мобильных телефонов Fly в Минске|Центр M-FIX.";
			$this->data['description'] = "Срочный ремонт телефонов Fly, приемлемые цены, бесплатная диагностика на приемке. &#x260e; +375 (29) 116-98-01. Гарантия 120 дней, В сертифицированной мастерской. Минск, Фрунзенский район, метро Пушкинская.";
			$this->data['st_ind'] = "all";
			$this->data['link_can'] = "https://m-fix.by/remont-telefonov/fly";
			$this->data['title_repair'] = "Ремонт телефонов Fly в Минске";
			$this->data['for_breadcrumb_3'] = "Ремонт телефонов Fly";
			$this->data['for_breadcrumb_2'] = "Ремонт телефонов";
			$this->data['for_breadcrumb_2_slug'] = "remont-telefonov";
			$this->data['local_business_enable'] = 0;
			
		}

		if($slug == "texet") {
			$this->data['alldevices'] = $this->devices_model->getDevices(false, 16);
			
			$this->data['title'] = "Ремонт мобильных телефонов Texet в Минске|Центр M-FIX.";
			$this->data['description'] = "Срочный ремонт телефонов Texet, приемлемые цены, бесплатная диагностика на приемке. &#x260e; +375 (29) 116-98-01. Гарантия 120 дней, В сертифицированной мастерской. Минск, Фрунзенский район, метро Пушкинская.";
			$this->data['st_ind'] = "all";
			$this->data['link_can'] = "https://m-fix.by/remont-telefonov/texet";
			$this->data['title_repair'] = "Ремонт телефонов Texet в Минске";
			$this->data['for_breadcrumb_3'] = "Ремонт телефонов Texet";
			$this->data['for_breadcrumb_2'] = "Ремонт телефонов";
			$this->data['for_breadcrumb_2_slug'] = "remont-telefonov";
			$this->data['local_business_enable'] = 0;
			
		}

		if($slug == "flycat") {
			$this->data['alldevices'] = $this->devices_model->getDevices(false, 17);
			
			$this->data['title'] = "Ремонт мобильных телефонов Texet в Минске|Центр M-FIX.";
			$this->data['description'] = "Срочный ремонт телефонов Flycat, приемлемые цены, бесплатная диагностика на приемке. &#x260e; +375 (29) 116-98-01. Гарантия 120 дней, В сертифицированной мастерской. Минск, Фрунзенский район, метро Пушкинская.";
			$this->data['st_ind'] = "all";
			$this->data['link_can'] = "https://m-fix.by/remont-telefonov/flycat";
			$this->data['title_repair'] = "Ремонт телефонов Flycat в Минске";
			$this->data['for_breadcrumb_3'] = "Ремонт телефонов Flycat";
			$this->data['for_breadcrumb_2'] = "Ремонт телефонов";
			$this->data['for_breadcrumb_2_slug'] = "remont-telefonov";
			$this->data['local_business_enable'] = 0;
			
		}

		if($slug == "ginzzu") {
			$this->data['alldevices'] = $this->devices_model->getDevices(false, 18);
			
			$this->data['title'] = "Ремонт мобильных телефонов Ginzzu в Минске|Центр M-FIX.";
			$this->data['description'] = "Срочный ремонт телефонов Ginzzu, приемлемые цены, бесплатная диагностика на приемке. &#x260e; +375 (29) 116-98-01. Гарантия 120 дней, В сертифицированной мастерской. Минск, Фрунзенский район, метро Пушкинская.";
			$this->data['st_ind'] = "all";
			$this->data['link_can'] = "https://m-fix.by/remont-telefonov/ginzzu";
			$this->data['title_repair'] = "Ремонт телефонов Ginzzu в Минске";
			$this->data['for_breadcrumb_3'] = "Ремонт телефонов Ginzzu";
			$this->data['for_breadcrumb_2'] = "Ремонт телефонов";
			$this->data['for_breadcrumb_2_slug'] = "remont-telefonov";
			$this->data['local_business_enable'] = 0;
			
		}

		if($slug == "alcatel") {
			$this->data['alldevices'] = $this->devices_model->getDevices(false, 19);
			
			$this->data['title'] = "Ремонт мобильных телефонов Alcatel в Минске|Центр M-FIX.";
			$this->data['description'] = "Срочный ремонт телефонов Alcatel, приемлемые цены, бесплатная диагностика на приемке. &#x260e; +375 (29) 116-98-01. Гарантия 120 дней, В сертифицированной мастерской. Минск, Фрунзенский район, метро Пушкинская.";
			$this->data['st_ind'] = "all";
			$this->data['link_can'] = "https://m-fix.by/remont-telefonov/alcatel";
			$this->data['title_repair'] = "Ремонт телефонов Alcatel в Минске";
			$this->data['for_breadcrumb_3'] = "Ремонт телефонов Alcatel";
			$this->data['for_breadcrumb_2'] = "Ремонт телефонов";
			$this->data['for_breadcrumb_2_slug'] = "remont-telefonov";
			$this->data['local_business_enable'] = 0;
			
		}

		if($slug == "philips") {
			$this->data['alldevices'] = $this->devices_model->getDevices(false, 20);
			
			$this->data['title'] = "Ремонт мобильных телефонов Philips в Минске|Центр M-FIX.";
			$this->data['description'] = "Срочный ремонт телефонов Philips, приемлемые цены, бесплатная диагностика на приемке. &#x260e; +375 (29) 116-98-01. Гарантия 120 дней, В сертифицированной мастерской. Минск, Фрунзенский район, метро Пушкинская.";
			$this->data['st_ind'] = "all";
			$this->data['link_can'] = "https://m-fix.by/remont-telefonov/philips";
			$this->data['title_repair'] = "Ремонт телефонов Philips в Минске";
			$this->data['for_breadcrumb_3'] = "Ремонт телефонов Philips";
			$this->data['for_breadcrumb_2'] = "Ремонт телефонов";
			$this->data['for_breadcrumb_2_slug'] = "remont-telefonov";
			$this->data['local_business_enable'] = 0;
			
		}

		if($slug == "explay") {
			$this->data['alldevices'] = $this->devices_model->getDevices(false, 41);
			
			$this->data['title'] = "Ремонт мобильных телефонов Explay в Минске|Центр M-FIX.";
			$this->data['description'] = "Срочный ремонт телефонов Explay, приемлемые цены, бесплатная диагностика на приемке. &#x260e; +375 (29) 116-98-01. Гарантия 120 дней, В сертифицированной мастерской. Минск, Фрунзенский район, метро Пушкинская.";
			$this->data['st_ind'] = "all";
			$this->data['link_can'] = "https://m-fix.by/remont-telefonov/explay";
			$this->data['title_repair'] = "Ремонт телефонов Explay в Минске";
			$this->data['for_breadcrumb_3'] = "Ремонт телефонов Explay";
			$this->data['for_breadcrumb_2'] = "Ремонт телефонов";
			$this->data['for_breadcrumb_2_slug'] = "remont-telefonov";
			$this->data['local_business_enable'] = 0;
			
		}

		if($slug == "oneplus") {
			$this->data['alldevices'] = $this->devices_model->getDevices(false, 42);
			
			$this->data['title'] = "Ремонт мобильных телефонов OnePlus в Минске|Центр M-FIX.";
			$this->data['description'] = "Срочный ремонт телефонов OnePlus, приемлемые цены, бесплатная диагностика на приемке. &#x260e; +375 (29) 116-98-01. Гарантия 120 дней, В сертифицированной мастерской. Минск, Фрунзенский район, метро Пушкинская.";
			$this->data['st_ind'] = "all";
			$this->data['link_can'] = "https://m-fix.by/remont-telefonov/oneplus";
			$this->data['title_repair'] = "Ремонт телефонов OnePlus в Минске";
			$this->data['for_breadcrumb_3'] = "Ремонт телефонов OnePlus";
			$this->data['for_breadcrumb_2'] = "Ремонт телефонов";
			$this->data['for_breadcrumb_2_slug'] = "remont-telefonov";
			$this->data['local_business_enable'] = 0;
			
		}






		if($slug == "planshetov-lenovo") {
			$this->data['alldevices'] = $this->devices_model->getDevices(false, 21);
			
			$this->data['title'] = "Ремонт планшетов Lenovo в Минске|Центр M-FIX.";
			$this->data['description'] = "Срочный ремонт планшетов Lenovo, приемлемые цены, бесплатная диагностика на приемке. &#x260e; +375 (29) 116-98-01. Гарантия 120 дней, В сертифицированной мастерской. Минск, Фрунзенский район, метро Пушкинская.";
			$this->data['st_ind'] = "all";
			$this->data['link_can'] = "https://m-fix.by/remont-planshetov/lenovo";
			$this->data['title_repair'] = "Ремонт планшетов Lenovo в Минске";
			$this->data['for_breadcrumb_3'] = "Ремонт планшетов Lenovo";
			$this->data['for_breadcrumb_2'] = "Ремонт планшетов";
			$this->data['for_breadcrumb_2_slug'] = "remont-planshetov";
			$this->data['local_business_enable'] = 0;
			
		}

		if($slug == "planshetov-samsung") {
			$this->data['alldevices'] = $this->devices_model->getDevices(false, 22);
			
			$this->data['title'] = "Ремонт планшетов Samsung в Минске|Центр M-FIX.";
			$this->data['description'] = "Срочный ремонт планшетов Samsung, приемлемые цены, бесплатная диагностика на приемке. &#x260e; +375 (29) 116-98-01. Гарантия 120 дней, В сертифицированной мастерской. Минск, Фрунзенский район, метро Пушкинская.";
			$this->data['st_ind'] = "all";
			$this->data['link_can'] = "https://m-fix.by/remont-planshetov/samsung";
			$this->data['title_repair'] = "Ремонт планшетов Samsung в Минске";
			$this->data['for_breadcrumb_3'] = "Ремонт планшетов Samsung";
			$this->data['for_breadcrumb_2'] = "Ремонт планшетов";
			$this->data['for_breadcrumb_2_slug'] = "remont-planshetov";
			$this->data['local_business_enable'] = 0;
			
		}

		if($slug == "planshetov-prestigio") {
			$this->data['alldevices'] = $this->devices_model->getDevices(false, 23);
			
			$this->data['title'] = "Ремонт планшетов Prestigio в Минске|Центр M-FIX.";
			$this->data['description'] = "Срочный ремонт планшетов Prestigio, приемлемые цены, бесплатная диагностика на приемке. &#x260e; +375 (29) 116-98-01. Гарантия 120 дней, В сертифицированной мастерской. Минск, Фрунзенский район, метро Пушкинская.";
			$this->data['st_ind'] = "all";
			$this->data['link_can'] = "https://m-fix.by/remont-planshetov/prestigio";
			$this->data['title_repair'] = "Ремонт планшетов Prestigio в Минске";
			$this->data['for_breadcrumb_3'] = "Ремонт планшетов Prestigio";
			$this->data['for_breadcrumb_2'] = "Ремонт планшетов";
			$this->data['for_breadcrumb_2_slug'] = "remont-planshetov";
			$this->data['local_business_enable'] = 0;
			
		}

		if($slug == "planshetov-asus") {
			$this->data['alldevices'] = $this->devices_model->getDevices(false, 24);
			
			$this->data['title'] = "Ремонт планшетов Asus в Минске|Центр M-FIX.";
			$this->data['description'] = "Срочный ремонт планшетов Asus, приемлемые цены, бесплатная диагностика на приемке. &#x260e; +375 (29) 116-98-01. Гарантия 120 дней, В сертифицированной мастерской. Минск, Фрунзенский район, метро Пушкинская.";
			$this->data['st_ind'] = "all";
			$this->data['link_can'] = "https://m-fix.by/remont-planshetov/asus";
			$this->data['title_repair'] = "Ремонт планшетов Asus в Минске";
			$this->data['for_breadcrumb_3'] = "Ремонт планшетов Asus";
			$this->data['for_breadcrumb_2'] = "Ремонт планшетов";
			$this->data['for_breadcrumb_2_slug'] = "remont-planshetov";
			$this->data['local_business_enable'] = 0;
			
		}

		if($slug == "planshetov-sony") {
			$this->data['alldevices'] = $this->devices_model->getDevices(false, 25);
			
			$this->data['title'] = "Ремонт планшетов Sony в Минске|Центр M-FIX.";
			$this->data['description'] = "Срочный ремонт планшетов Sony, приемлемые цены, бесплатная диагностика на приемке. &#x260e; +375 (29) 116-98-01. Гарантия 120 дней, В сертифицированной мастерской. Минск, Фрунзенский район, метро Пушкинская.";
			$this->data['st_ind'] = "all";
			$this->data['link_can'] = "https://m-fix.by/remont-planshetov/sony";
			$this->data['title_repair'] = "Ремонт планшетов Sony в Минске";
			$this->data['for_breadcrumb_3'] = "Ремонт планшетов Sony";
			$this->data['for_breadcrumb_2'] = "Ремонт планшетов";
			$this->data['for_breadcrumb_2_slug'] = "remont-planshetov";
			$this->data['local_business_enable'] = 0;
			
		}

		if($slug == "planshetov-huawei") {
			$this->data['alldevices'] = $this->devices_model->getDevices(false, 26);
			
			$this->data['title'] = "Ремонт планшетов Huawei в Минске|Центр M-FIX.";
			$this->data['description'] = "Срочный ремонт планшетов Huawei, приемлемые цены, бесплатная диагностика на приемке. &#x260e; +375 (29) 116-98-01. Гарантия 120 дней, В сертифицированной мастерской. Минск, Фрунзенский район, метро Пушкинская.";
			$this->data['st_ind'] = "all";
			$this->data['link_can'] = "https://m-fix.by/remont-planshetov/huawei";
			$this->data['title_repair'] = "Ремонт планшетов Huawei в Минске";
			$this->data['for_breadcrumb_3'] = "Ремонт планшетов Huawei";
			$this->data['for_breadcrumb_2'] = "Ремонт планшетов";
			$this->data['for_breadcrumb_2_slug'] = "remont-planshetov";
			$this->data['local_business_enable'] = 0;
			
		}

		if($slug == "planshetov-explay") {
			$this->data['alldevices'] = $this->devices_model->getDevices(false, 27);
			
			$this->data['title'] = "Ремонт планшетов Explay в Минске|Центр M-FIX.";
			$this->data['description'] = "Срочный ремонт планшетов Explay, приемлемые цены, бесплатная диагностика на приемке. &#x260e; +375 (29) 116-98-01. Гарантия 120 дней, В сертифицированной мастерской. Минск, Фрунзенский район, метро Пушкинская.";
			$this->data['st_ind'] = "all";
			$this->data['link_can'] = "https://m-fix.by/remont-planshetov/explay";
			$this->data['title_repair'] = "Ремонт планшетов Explay в Минске";
			$this->data['for_breadcrumb_3'] = "Ремонт планшетов Explay";
			$this->data['for_breadcrumb_2'] = "Ремонт планшетов";
			$this->data['for_breadcrumb_2_slug'] = "remont-planshetov";
			$this->data['local_business_enable'] = 0;
			
		}
		if($slug == "planshetov-ipad") {
			$this->data['alldevices'] = $this->devices_model->getDevices(false, 28);
			
			$this->data['title'] = "Ремонт планшетов Ipad в Минске|Центр M-FIX.";
			$this->data['description'] = "Срочный ремонт планшетов Ipad, приемлемые цены, бесплатная диагностика на приемке. &#x260e; +375 (29) 116-98-01. Гарантия 120 дней, В сертифицированной мастерской. Минск, Фрунзенский район, метро Пушкинская.";
			$this->data['st_ind'] = "all";
			$this->data['link_can'] = "https://m-fix.by/remont-planshetov/ipad";
			$this->data['title_repair'] = "Ремонт планшетов Ipad в Минске";
			$this->data['for_breadcrumb_3'] = "Ремонт планшетов Ipad";
			$this->data['for_breadcrumb_2'] = "Ремонт планшетов";
			$this->data['for_breadcrumb_2_slug'] = "remont-planshetov";
			$this->data['local_business_enable'] = 0;
			
		}

		if($slug == "planshetov-acer") {
			$this->data['alldevices'] = $this->devices_model->getDevices(false, 29);
			
			$this->data['title'] = "Ремонт планшетов Acer в Минске|Центр M-FIX.";
			$this->data['description'] = "Срочный ремонт планшетов Acer, приемлемые цены, бесплатная диагностика на приемке. &#x260e; +375 (29) 116-98-01. Гарантия 120 дней, В сертифицированной мастерской. Минск, Фрунзенский район, метро Пушкинская.";
			$this->data['st_ind'] = "all";
			$this->data['link_can'] = "https://m-fix.by/remont-planshetov/acer";
			$this->data['title_repair'] = "Ремонт планшетов Acer в Минске";
			$this->data['for_breadcrumb_3'] = "Ремонт планшетов Acer";
			$this->data['for_breadcrumb_2'] = "Ремонт планшетов";
			$this->data['for_breadcrumb_2_slug'] = "remont-planshetov";
			$this->data['local_business_enable'] = 0;
			
		}

        if($slug == "planshetov-xiaomi") {
			$this->data['alldevices'] = $this->devices_model->getDevices(false, 30);
			
			$this->data['title'] = "Ремонт планшетов Xiaomi в Минске|Центр M-FIX.";
			$this->data['description'] = "Срочный ремонт планшетов Xiaomi, приемлемые цены, бесплатная диагностика на приемке. &#x260e; +375 (29) 116-98-01. Гарантия 120 дней, В сертифицированной мастерской. Минск, Фрунзенский район, метро Пушкинская.";
			$this->data['st_ind'] = "all";
			$this->data['link_can'] = "https://m-fix.by/remont-planshetov/xiaomi";
			$this->data['title_repair'] = "Ремонт планшетов Xiaomi в Минске";
			$this->data['for_breadcrumb_3'] = "Ремонт планшетов Xiaomi";
			$this->data['for_breadcrumb_2'] = "Ремонт планшетов";
			$this->data['for_breadcrumb_2_slug'] = "remont-planshetov";
			$this->data['local_business_enable'] = 0;
			
		}
		


		
		
		

		$this->load->view('templates/header', $this->data);
		$this->load->view('devices/repair', $this->data);
		$this->load->view('templates/footer');

	}

	public function view($slug = NULL) {
				$this->load->model('devices_model');
		$this->data['devices_item'] = $this->devices_model->getDevices($slug, false, false);

		$this->data['parts_item'] = $this->devices_model->getParts($slug);

		if(empty($this->data['parts_item'])) {
			$this->data['control_part'] = 0;
		}
		if(!empty($this->data['parts_item'])) {
			$this->data['control_part'] = 1;
		}

		
		

		



		$this->data['brand'] = $this->data['devices_item']['brand_name'];
		$this->data['brand_id'] = $this->data['devices_item']['brand_id'];
		$this->data['brand_name_title'] = $this->data['devices_item']['brand_name_title'];
		$this->data['slug'] = $this->data['devices_item']['slug'];
		$this->data['type_devices_img'] = $this->data['devices_item']['type_devices_img'];
		$this->data['image'] = $this->data['devices_item']['image'];
		$this->data['type_device_rp'] = $this->data['devices_item']['type_device_rp'];
		$this->data['local_business_enable'] = 0;





		// Создаем дескрипшены
	if (empty($this->data['devices_item']['oth_names']) && $this->data['devices_item']['brand_name'] !== 'iphone' && $this->data['devices_item']['brand_name'] !== 'ipad'  && $this->data['devices_item']['brand_name'] !== 'honor') {
                     $this->data['description'] = "Срочный ремонт".' '.$this->data['devices_item']['type_device_rp'].' '.$this->data['devices_item']['brand_name'].' '.$this->data['devices_item']['commerc_name'].' '."по приемлемой цене, бесплатная диагностика на приемке. &#x260e; +375 (29) 116-98-01. Гарантия 120 дней. Минск, Фрунзенский район, метро Пушкинская.";
	 		 }

	 	if (!empty($this->data['devices_item']['oth_names']) && $this->data['devices_item']['brand_name'] !== 'iphone' && $this->data['devices_item']['brand_name'] !== 'ipad'  && $this->data['devices_item']['brand_name'] !== 'honor') {
	 	    $this->data['description'] = "Срочный ремонт".' '.$this->data['devices_item']['type_device_rp'].' '.$this->data['devices_item']['brand_name'].' '.$this->data['devices_item']['commerc_name'].' ('.$this->data['devices_item']['oth_names'].') '."по приемлемой цене, бесплатная диагностика на приемке. &#x260e; +375 (29) 116-98-01. Гарантия 120 дней. Минск, Фрунзенский район, метро Пушкинская."; 
	 			}


	 		 if (empty($this->data['devices_item']['oth_names']) && $this->data['devices_item']['brand_name'] == 'iphone' OR $this->data['devices_item']['brand_name'] == 'ipad'  OR $this->data['devices_item']['brand_name'] == 'honor') {
               $this->data['description'] = "Срочный ремонт".' '.$this->data['devices_item']['type_device_rp'].' '.$this->data['devices_item']['commerc_name'].' '."по приемлемой цене, бесплатная диагностика на приемке. &#x260e; +375 (29) 116-98-01. Гарантия 120 дней. Минск, Фрунзенский район, метро Пушкинская.";
	 		 }

	 	if (!empty($this->data['devices_item']['oth_names']) && $this->data['devices_item']['brand_name'] == 'iphone' OR $this->data['devices_item']['brand_name'] == 'ipad'  OR $this->data['devices_item']['brand_name'] == 'honor') {
	 	     $this->data['description'] = "Срочный ремонт".' '.$this->data['devices_item']['type_device_rp'].' '.$this->data['devices_item']['commerc_name'].' ('.$this->data['devices_item']['oth_names'].') '."по приемлемой цене, бесплатная диагностика на приемке. &#x260e; +375 (29) 116-98-01. Гарантия 120 дней. Минск, Фрунзенский район, метро Пушкинская."; 
	 			}
         //Закончили создавать дескрипшены

	 			//Создаем тайтлы
	 if (empty($this->data['devices_item']['oth_names']) && $this->data['devices_item']['brand_name'] !== 'iphone' && $this->data['devices_item']['brand_name'] !== 'ipad'  && $this->data['devices_item']['brand_name'] !== 'honor') {
              $this->data['title'] ="Ремонт".' '. $this->data['devices_item']['type_device_rp']. ' '.$this->data['devices_item']['brand_name']. ' '.$this->data['devices_item']['commerc_name'].' '."|Центр M-FIX|Расценки.";
	 		 }

	 	if (!empty($this->data['devices_item']['oth_names']) && $this->data['devices_item']['brand_name'] !== 'iphone' && $this->data['devices_item']['brand_name'] !== 'ipad'  && $this->data['devices_item']['brand_name'] !== 'honor') {
	 	   $this->data['title'] = "Ремонт".' '.$this->data['devices_item']['type_device_rp']. ' '.$this->data['devices_item']['brand_name']. ' '.$this->data['devices_item']['commerc_name'].' ('.$this->data['devices_item']['oth_names'].')|'."Центр M-FIX|Расценки."; 
	 			}


	 		 if (empty($this->data['devices_item']['oth_names']) && $this->data['devices_item']['brand_name'] == 'iphone' OR $this->data['devices_item']['brand_name'] == 'ipad'  OR $this->data['devices_item']['brand_name'] == 'honor') {
                 $this->data['title'] = "Ремонт".' '.$this->data['devices_item']['type_device_rp'].' '.$this->data['devices_item']['commerc_name'].'|'."Центр M-FIX|Расценки.";
	 		 }

	 	if (!empty($this->data['devices_item']['oth_names']) && $this->data['devices_item']['brand_name'] == 'iphone' OR $this->data['devices_item']['brand_name'] == 'ipad'  OR $this->data['devices_item']['brand_name'] == 'honor') { 
	 		$this->data['title'] = "Ремонт".' '.$this->data['devices_item']['type_device_rp'].' '.$this->data['devices_item']['commerc_name'].' ('.$this->data['devices_item']['oth_names'].')|'."Центр M-FIX|Расценки.";
	 			}
	 		//Закончили создавать тайтлы
	 			$this->data['st_ind'] = "all";

	 			$this->data['link_can'] = "https://m-fix.by"."/remont-".$this->data['devices_item']['type_devices']."/".$this->data['devices_item']['brand_name']."/".$this->data['devices_item']['slug'];

	 			//Создаем надписи для breadcrumb

	 			if ($this->data['devices_item']['brand_name'] == 'iphone' OR $this->data['devices_item']['brand_name'] == 'ipad'  OR $this->data['devices_item']['brand_name'] == 'honor') {
	 				$this->data['title_breadcrumb'] = 'Ремонт'.' '.$this->data['devices_item']['commerc_name'];
	 			}
	 			else {$this->data['title_breadcrumb'] = 'Ремонт'.' '.$this->data['devices_item']['brand_name_title'].' '.$this->data['devices_item']['commerc_name'];}


		

		

		$this->data['title_view'] = "Цены на ремонт". ' '.$this->data['devices_item']['type_device_rp']. ' '.$this->data['devices_item']['brand_name_title'].' '.$this->data['devices_item']['commerc_name'];

		$this->data['title_view_apple'] = "Цены на ремонт". ' '.$this->data['devices_item']['type_device_rp']. ' '.$this->data['devices_item']['commerc_name'];

		if (!empty($this->data['devices_item']['oth_names'])) {
			$this->data['title_oth_names'] = '('.$this->data['devices_item']['oth_names'].')';
		}
		else {$this->data['title_oth_names'] = '';}

		

        $this->data['commerc_name'] = $this->data['devices_item']['commerc_name'];
		

		$this->data['oth_names'] = $this->data['devices_item']['oth_names'];
		$this->data['content'] = $this->data['devices_item']['est_price'];
		$this->data['item_image'] = $this->data['devices_item']['image'];

		$this->data['lcd_price'] = $this->data['devices_item']['pr_lcd_mod'];
		$this->data['type_lcd'] = $this->data['devices_item']['type_lcd'];
		$this->data['lcd_sing_price'] = $this->data['devices_item']['lcd_price'];
		$this->data['touch_price'] = $this->data['devices_item']['touch_price'];
		$this->data['type_devices'] = $this->data['devices_item']['type_devices'];

		$this->data['down_flex_iph'] = $this->data['devices_item']['down_flex_iph'];
		$this->data['upp_flex_iph'] = $this->data['devices_item']['upp_flex_iph'];
		$this->data['home_flex_iph'] = $this->data['devices_item']['home_flex_iph'];
		$this->data['key_flex_iph'] = $this->data['devices_item']['key_flex_iph'];
		$this->data['batt_price'] = $this->data['devices_item']['batt_price'];
		$this->data['buz_price'] = $this->data['devices_item']['buz_price'];
		$this->data['ear_price_iph'] = $this->data['devices_item']['ear_price_iph'];
		$this->data['type_devices_rus'] = $this->data['devices_item']['type_devices_rus'];






		$this->data['lcd_repair'] = round((($this->data['devices_item']['pr_lcd_mod'])*2*1.25+20+pow(($this->data['devices_item']['est_price']), 0.57))*0.2 )*5 ;

		$this->data['lcd_repair_disc'] = round((($this->data['devices_item']['pr_lcd_mod'])*2*1.25+15+pow(($this->data['devices_item']['est_price']), 0.5))*0.2 )*5 ;


		$this->data['lcd_sing_repair'] = round((($this->data['devices_item']['lcd_price'])*2*1.25+20+pow(($this->data['devices_item']['est_price']), 0.57))*0.2 )*5 ;

		$this->data['lcd_sing_repair_disc'] = round((($this->data['devices_item']['lcd_price'])*2*1.25+15+pow(($this->data['devices_item']['est_price']), 0.5))*0.2 )*5 ;


		$this->data['touch_repair'] = round((($this->data['devices_item']['touch_price'])*2*1.25+20+pow(($this->data['devices_item']['est_price']), 0.50))*0.2 )*5 ;

		$this->data['touch_repair_disc'] = round((($this->data['devices_item']['touch_price'])*2*1.25+15+pow(($this->data['devices_item']['est_price']), 0.5))*0.2 )*5 ;







		$this->data['diag_sur'] = round(pow(($this->data['devices_item']['est_price']), 0.5)*0.7) ;

		$this->data['diag_sur_disc'] = round(pow(($this->data['devices_item']['est_price']), 0.5)*0.5) ;

     $this->data['char_connect_repair'] = round(($this->data['devices_item']['pr_char_con'])*2*1.25+10+pow(($this->data['devices_item']['est_price']), 0.48)*0.8) ;

		$this->data['char_connect_repair_disc'] = round(($this->data['devices_item']['pr_char_con'])*2*1.25+10+pow(($this->data['devices_item']['est_price']), 0.48)*0.6) ;

		

		$this->data['lcd_repair_ext'] = round((pow(($this->data['devices_item']['est_price']), 0.5)+10)*1.2) ;

		$this->data['lcd_repair_ext_disc'] = round((pow(($this->data['devices_item']['est_price']), 0.5)+10)*1.0) ;


		$this->data['water_repair'] = round((pow(($this->data['devices_item']['est_price']), 0.5)+10)*0.7) ;

		$this->data['water_repair_disc'] = round((pow(($this->data['devices_item']['est_price']), 0.5)+10)*0.5) ;


		$this->data['speaker_repair'] = round((pow(($this->data['devices_item']['est_price']), 0.5)+10)*1.0) ;

		$this->data['speaker_repair_disc'] = round((pow(($this->data['devices_item']['est_price']), 0.5)+10)*0.85) ;



		$this->data['buz_repair'] = round(($this->data['devices_item']['buz_price'])*2*1.25+13+pow(($this->data['devices_item']['est_price']), 0.53)*0.8) ;

		$this->data['buz_repair_disc'] = round(($this->data['devices_item']['buz_price'])*2*1.25+13+pow(($this->data['devices_item']['est_price']), 0.53)*0.6) ;


		$this->data['mic_repair'] = round(($this->data['devices_item']['mic_price'])*2*1.25+13+pow(($this->data['devices_item']['est_price']), 0.53)*0.8) ;

		$this->data['mic_repair_disc'] = round(($this->data['devices_item']['mic_price'])*2*1.25+13+pow(($this->data['devices_item']['est_price']), 0.53)*0.6) ;


		$this->data['key_repair'] = round((pow(($this->data['devices_item']['est_price']), 0.5)+12)*1.0) ;

		$this->data['key_repair_disc'] = round((pow(($this->data['devices_item']['est_price']), 0.5)+12)*0.85) ;


		$this->data['sim_con__repair'] = round(($this->data['devices_item']['sim_con_price'])*2*1.25+13+pow(($this->data['devices_item']['est_price']), 0.53)*0.8) ;

		$this->data['sim_con__repair_disc'] = round(($this->data['devices_item']['sim_con_price'])*2*1.25+13+pow(($this->data['devices_item']['est_price']), 0.53)*0.6) ;


		$this->data['small_repair'] = round((pow(($this->data['devices_item']['est_price']), 0.5)+8)*1.0) ;

		$this->data['small_repair_disc'] = round((pow(($this->data['devices_item']['est_price']), 0.5)+8)*0.85) ;


		$this->data['small_soft_repair'] = round((pow(($this->data['devices_item']['est_price']), 0.5)+3)*0.8) ;

		$this->data['small_soft_repair_disc'] = round((pow(($this->data['devices_item']['est_price']), 0.5)+3)*0.65) ;


		$this->data['big_soft_repair'] = round((pow(($this->data['devices_item']['est_price']), 0.5)+3)*1.6) ;

		$this->data['big_soft_repair_disc'] = round((pow(($this->data['devices_item']['est_price']), 0.5)+3)*1.3) ;



		                 /*Для Iphone*/

	$this->data['diag_sur_iphone'] = round(pow(($this->data['devices_item']['est_price']), 0.5)*0.7+10) ;

	$this->data['diag_sur_iphone_disc'] = round(pow(($this->data['devices_item']['est_price']), 0.5)*0.5+10) ;


	$this->data['lcd_repair_iphone'] = round((($this->data['devices_item']['pr_lcd_mod'])*2*1.25+40+pow(($this->data['devices_item']['est_price']), 0.57))*0.2 )*5 ;

	$this->data['lcd_repair_iphone_disc'] = round((($this->data['devices_item']['pr_lcd_mod'])*2*1.25+35+pow(($this->data['devices_item']['est_price']), 0.5))*0.2 )*5 ;

	$this->data['down_flex_iph_repair'] = round(($this->data['devices_item']['down_flex_iph'])*2*1.25+28+pow(($this->data['devices_item']['est_price']), 0.5)*0.8) ;

		$this->data['down_flex_iph_repair_disc'] = round(($this->data['devices_item']['down_flex_iph'])*2*1.25+28+pow(($this->data['devices_item']['est_price']), 0.5)*0.4) ;



	

		$this->data['upp_flex_iph_repair'] = round(($this->data['devices_item']['upp_flex_iph'])*2*1.25+28+pow(($this->data['devices_item']['est_price']), 0.53)*0.8) ;

		$this->data['upp_flex_iph_repair_disc'] = round(($this->data['devices_item']['upp_flex_iph'])*2*1.25+28+pow(($this->data['devices_item']['est_price']), 0.53)*0.6) ;


		$this->data['home_flex_iph_repair'] = round(($this->data['devices_item']['home_flex_iph'])*2*1.25+28+pow(($this->data['devices_item']['est_price']), 0.53)*0.8) ;

		$this->data['home_flex_iph_repair_disc'] = round(($this->data['devices_item']['home_flex_iph'])*2*1.25+28+pow(($this->data['devices_item']['est_price']), 0.53)*0.6) ;


		$this->data['key_flex_iph_repair'] = round(($this->data['devices_item']['key_flex_iph'])*2*1.25+28+pow(($this->data['devices_item']['est_price']), 0.53)*0.8) ;

		$this->data['key_flex_iph_repair_disc'] = round(($this->data['devices_item']['key_flex_iph'])*2*1.25+28+pow(($this->data['devices_item']['est_price']), 0.53)*0.6) ;


		$this->data['batt_iph_repair'] = round(($this->data['devices_item']['batt_price'])*2*1.25+28+pow(($this->data['devices_item']['est_price']), 0.53)*0.8) ;

		$this->data['batt_iph_repair_disc'] = round(($this->data['devices_item']['batt_price'])*2*1.25+28+pow(($this->data['devices_item']['est_price']), 0.53)*0.6) ;


		$this->data['buz_iph_repair'] = round(($this->data['devices_item']['buz_price'])*2*1.25+28+pow(($this->data['devices_item']['est_price']), 0.53)*0.8) ;

		$this->data['buz_iph_repair_disc'] = round(($this->data['devices_item']['buz_price'])*2*1.25+28+pow(($this->data['devices_item']['est_price']), 0.53)*0.6) ;


		$this->data['ear_iph_repair'] = round(($this->data['devices_item']['ear_price_iph'])*2*1.25+28+pow(($this->data['devices_item']['est_price']), 0.53)*0.8) ;

		$this->data['ear_iph_repair_disc'] = round(($this->data['devices_item']['ear_price_iph'])*2*1.25+28+pow(($this->data['devices_item']['est_price']), 0.53)*0.6) ;

		/*for ipad*/

		$this->data['lcd_repair_ipad'] = round((($this->data['devices_item']['pr_lcd_mod'])*2*1.25+50+pow(($this->data['devices_item']['est_price']), 0.57))*0.2 )*5 ;

	$this->data['lcd_repair_ipad_disc'] = round((($this->data['devices_item']['pr_lcd_mod'])*2*1.25+45+pow(($this->data['devices_item']['est_price']), 0.5))*0.2 )*5 ;


	$this->data['down_flex_ipad_repair'] = round(($this->data['devices_item']['down_flex_iph'])*2*1.25+40+pow(($this->data['devices_item']['est_price']), 0.53)*0.8) ;

		$this->data['down_flex_ipad_repair_disc'] = round(($this->data['devices_item']['down_flex_iph'])*2*1.25+40+pow(($this->data['devices_item']['est_price']), 0.53)*0.6) ;


		$this->data['key_flex_ipad_repair'] = round(($this->data['devices_item']['key_flex_iph'])*2*1.25+40+pow(($this->data['devices_item']['est_price']), 0.53)*0.8) ;

		$this->data['key_flex_ipad_repair_disc'] = round(($this->data['devices_item']['key_flex_iph'])*2*1.25+40+pow(($this->data['devices_item']['est_price']), 0.53)*0.6) ;


		$this->data['batt_ipad_repair'] = round(($this->data['devices_item']['batt_price'])*2*1.25+40+pow(($this->data['devices_item']['est_price']), 0.53)*0.8) ;

		$this->data['batt_ipad_repair_disc'] = round(($this->data['devices_item']['batt_price'])*2*1.25+40+pow(($this->data['devices_item']['est_price']), 0.53)*0.6) ;


		$this->data['buz_ipad_repair'] = round(($this->data['devices_item']['buz_price'])*2*1.25+40+pow(($this->data['devices_item']['est_price']), 0.53)*0.8) ;

		$this->data['buz_ipad_repair_disc'] = round(($this->data['devices_item']['buz_price'])*2*1.25+40+pow(($this->data['devices_item']['est_price']), 0.53)*0.6) ;


		$this->data['lcd_sing_repair_ipad'] = round((($this->data['devices_item']['lcd_price'])*2*1.25+45+pow(($this->data['devices_item']['est_price']), 0.57))*0.2 )*5 ;

		$this->data['lcd_sing_repair_ipad_disc'] = round((($this->data['devices_item']['lcd_price'])*2*1.25+40+pow(($this->data['devices_item']['est_price']), 0.5))*0.2 )*5 ;


		$this->data['touch_repair_ipad'] = round((($this->data['devices_item']['touch_price'])*2*1.25+45+pow(($this->data['devices_item']['est_price']), 0.50))*0.2 )*5 ;

		$this->data['touch_repair_ipad_disc'] = round((($this->data['devices_item']['touch_price'])*2*1.25+40+pow(($this->data['devices_item']['est_price']), 0.5))*0.2 )*5 ;







		$this->load->view('templates/header', $this->data);
		
		$this->load->view('devices/view', $this->data);
		$this->load->view('templates/footer', $this->data);
	}


	


	

}