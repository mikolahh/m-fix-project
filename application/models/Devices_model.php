<?php 

class Devices_model extends CI_Model {

	public function __construct() {
		$this->load->database();
	}

	public function getDevices($slug = FALSE,  $type = FALSE) {
		if($slug === FALSE) {
			$query = $this->db
				->where('brand_id', $type)				
				->order_by('commerc_name')
				->get('devices');

			return $query->result_array();	
		}

		$query = $this->db->get_where('devices', array('slug'=>$slug));
		return $query->row_array();
	}

	public function getParts($slug) {
       
        $query = $this->db->get_where('products', array('slug_device'=>$slug));
       return $query->result_array();
	}        

	

	

	

	public function getPhonesXiaomi() 
	{		$query = $this->db->query('SELECT * FROM `devices` WHERE brand_name = "xiaomi" AND type_devices = "telefonov" order by commerc_name');
		return $query->result_array();	}

		public function getPhonesHuawei() 
	{		$query = $this->db->query('SELECT * FROM `devices` WHERE brand_name = "huawei" AND type_devices = "telefonov" order by commerc_name');
		return $query->result_array();	}

		public function getPhonesZte() 
	{		$query = $this->db->query('SELECT * FROM `devices` WHERE brand_name = "zte" AND type_devices = "telefonov" order by commerc_name');
		return $query->result_array();	}

		public function getPhonesNokia() 
	{		$query = $this->db->query('SELECT * FROM `devices` WHERE brand_name = "nokia" AND type_devices = "telefonov" order by commerc_name');
		return $query->result_array();	}

		public function getPhonesSamsung() 
	{		$query = $this->db->query('SELECT * FROM `devices` WHERE brand_name = "samsung" AND type_devices = "telefonov" order by commerc_name');
		return $query->result_array();	}

		public function getPhonesSony() 
	{		$query = $this->db->query('SELECT * FROM `devices` WHERE brand_name = "sony" AND type_devices = "telefonov" order by commerc_name');
		return $query->result_array();	}

		public function getPhonesMeizu() 
	{		$query = $this->db->query('SELECT * FROM `devices` WHERE brand_name = "meizu" AND type_devices = "telefonov" order by commerc_name');
		return $query->result_array();	}

		public function getPhonesLenovo() 
	{		$query = $this->db->query('SELECT * FROM `devices` WHERE brand_name = "lenovo" AND type_devices = "telefonov" order by commerc_name');
		return $query->result_array();	}

		public function getPhonesAsus() 
	{		$query = $this->db->query('SELECT * FROM `devices` WHERE brand_name = "asus" AND type_devices = "telefonov" order by commerc_name');
		return $query->result_array();	}

		public function getPhonesHtc() 
	{		$query = $this->db->query('SELECT * FROM `devices` WHERE brand_name = "htc" AND type_devices = "telefonov" order by commerc_name');
		return $query->result_array();	}

		public function getPhonesPrestigio() 
	{		$query = $this->db->query('SELECT * FROM `devices` WHERE brand_name = "prestigio" AND type_devices = "telefonov" order by commerc_name');
		return $query->result_array();	}

		public function getPhonesLg() 
	{		$query = $this->db->query('SELECT * FROM `devices` WHERE brand_name = "lg" AND type_devices = "telefonov" order by commerc_name');
		return $query->result_array();	}

		public function getPhonesHonor() 
	{		$query = $this->db->query('SELECT * FROM `devices` WHERE brand_name = "honor" AND type_devices = "telefonov" order by commerc_name');
		return $query->result_array();	}

		public function getPhonesFly() 
	{		$query = $this->db->query('SELECT * FROM `devices` WHERE brand_name = "fly" AND type_devices = "telefonov" order by commerc_name');
		return $query->result_array();	}

		public function getPhonesIphone() 
	{		$query = $this->db->query('SELECT * FROM `devices` WHERE brand_name = "iphone" AND type_devices = "telefonov" order by commerc_name');
		return $query->result_array();	}

		public function getPhonesTexet() 
	{		$query = $this->db->query('SELECT * FROM `devices` WHERE brand_name = "texet" AND type_devices = "telefonov" order by commerc_name');
		return $query->result_array();	}

		public function getPhonesFlycat() 
	{		$query = $this->db->query('SELECT * FROM `devices` WHERE brand_name = "flycat" AND type_devices = "telefonov" order by commerc_name');
		return $query->result_array();	}

		public function getPhonesGinzzu() 
	{		$query = $this->db->query('SELECT * FROM `devices` WHERE brand_name = "ginzzu" AND type_devices = "telefonov" order by commerc_name');
		return $query->result_array();	}

		public function getPhonesAlcatel() 
	{		$query = $this->db->query('SELECT * FROM `devices` WHERE brand_name = "alcatel" AND type_devices = "telefonov" order by commerc_name');
		return $query->result_array();	}

		public function getPhonesPhilips() 
	{		$query = $this->db->query('SELECT * FROM `devices` WHERE brand_name = "philips" AND type_devices = "telefonov" order by commerc_name');
		return $query->result_array();	}

		public function getPhonesExplay() 
	{		$query = $this->db->query('SELECT * FROM `devices` WHERE brand_name = "explay" AND type_devices = "telefonov" order by commerc_name');
		return $query->result_array();	}







		public function getTabletsLenovo() 
	{		$query = $this->db->query('SELECT * FROM `devices` WHERE brand_name = "lenovo" AND type_devices = "planshetov" order by commerc_name');
		return $query->result_array();	}

		public function getTabletsSamsung() 
	{		$query = $this->db->query('SELECT * FROM `devices` WHERE brand_name = "samsung" AND type_devices = "planshetov" order by commerc_name');
		return $query->result_array();	}

		public function getTabletsPrestigio() 
	{		$query = $this->db->query('SELECT * FROM `devices` WHERE brand_name = "prestigio" AND type_devices = "planshetov" order by commerc_name');
		return $query->result_array();	}

		public function getTabletsAsus() 
	{		$query = $this->db->query('SELECT * FROM `devices` WHERE brand_name = "asus" AND type_devices = "planshetov" order by commerc_name');
		return $query->result_array();	}

		public function getTabletsSony() 
	{		$query = $this->db->query('SELECT * FROM `devices` WHERE brand_name = "sony" AND type_devices = "planshetov" order by commerc_name');
		return $query->result_array();	}

		public function getTabletsHuawei() 
	{		$query = $this->db->query('SELECT * FROM `devices` WHERE brand_name = "huawei" AND type_devices = "planshetov" order by commerc_name');
		return $query->result_array();	}

		public function getTabletsExplay() 
	{		$query = $this->db->query('SELECT * FROM `devices` WHERE brand_name = "explay" AND type_devices = "planshetov" order by commerc_name');
		return $query->result_array();	}

		public function getTabletsIpad() 
	{		$query = $this->db->query('SELECT * FROM `devices` WHERE brand_name = "ipad" AND type_devices = "planshetov" order by commerc_name');
		return $query->result_array();	}

		public function getTabletsAcer() 
	{		$query = $this->db->query('SELECT * FROM `devices` WHERE brand_name = "acer" AND type_devices = "planshetov" order by commerc_name');
		return $query->result_array();	}


	



}