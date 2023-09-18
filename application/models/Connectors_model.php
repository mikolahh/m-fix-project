<?php 

class Connectors_model extends CI_Model {

	public function __construct() {
		$this->load->database();
	}

	public function getConnectors() 
	{
		



		$query = $this->db->query("SELECT DISTINCT numb_char_con, type_char_con FROM `devices` WHERE numb_char_con !=0 order by numb_char_con");

		return $query->result_array();
	}

	public function getDevCon($slug)
	{
       /*if($numb_char_con === FALSE) 
       {
          $query = $this->db->get('devices');
          $query->result_array();
       }*/

       $query = $this->db->get_where('devices', array('numb_char_con'=>$slug));
       return $query->result_array();
	}

	public function getDevCon_analog($slug)
	{
       /*if($numb_char_con === FALSE) 
       {
          $query = $this->db->get('devices');
          $query->result_array();
       }*/

       $query = $this->db->get_where('devices', array('numb_char_con_analog'=>$slug));
       return $query->result_array();
	}
	
	

	
	



}