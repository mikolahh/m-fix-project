<?php 

class TabletsRepair_model extends CI_Model {

	public function __construct() {
		$this->load->database();
	}

	public function getTabletsrepair() {
		 
			$query = $this->db
				
			
				
				->get('tablets_brands');

			return $query->result_array();	
		

		
	}

	
}