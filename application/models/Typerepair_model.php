<?php 

class TypeRepair_model extends CI_Model {

	public function __construct() {
		$this->load->database();
	}

	public function getTyperepair() {
		 
			$query = $this->db
				
	->get('type_repair');

			return $query->result_array();	
		

		/*$query = $this->db->get_where('type_repair', array('slug'=>$slug));
		return $query->row_array();*/
	}

	
}