<?php 

class PhonesRepair_model extends CI_Model {

	public function __construct() {
		$this->load->database();
	}

	public function getPhonesrepair() {
		
			$query = $this->db
				
			
				
				->get('phones_brands');

			return $query->result_array();	
		

	}

	
}