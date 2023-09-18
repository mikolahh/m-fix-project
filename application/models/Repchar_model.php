<?php 

class Repchar_model extends CI_Model {

	public function __construct() {
		$this->load->database();
	}

	public function getDevForRepchar($slug) {

       $query = $this->db->get_where('devices', array('slug'=>$slug));
       return $query->row_array();

	}

	/*public function getParts($type) {
       
        $query = $this->db->get_where('razbor', array('slug_device'=>$type));
       return $query->result_array();
	}        */

	

	






























	}






