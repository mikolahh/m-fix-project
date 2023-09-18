<?php 

class Sitemap_model extends CI_Model {

	public function __construct() {
		$this->load->database();
	}

	public function getDevicesLinks() {
       
        $query = $this->db->get('devices');
       return $query->result_array();
   }

       public function getPartsLinks() {
       
       $query = $this->db->query("SELECT * FROM `products` WHERE slug_category = 'parts'");
       return $query->result_array();
	} 

	public function getProductsLinks() {
       
        $query = $this->db->query("SELECT * FROM `products` WHERE slug_category != 'parts'");
       return $query->result_array();
	} 
	 
}