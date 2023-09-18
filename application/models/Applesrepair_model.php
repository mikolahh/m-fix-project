<?php 

class ApplesRepair_model extends CI_Model {

	public function __construct() {
		$this->load->database();
	}

	public function getApplesrepair($slug) {
		if($slug === FALSE) {
			$query = $this->db
				
				//->order_by('add_date')
				/*->limit($limit)*/
				->get('type_apple');

			return $query->result_array();	
		}

		$query = $this->db->get_where('type_apple', array('slug'=>$slug));
		return $query->row_array();
	}

	
}