<?php 

class Products_model extends CI_Model {

	public function __construct() {
		$this->load->database();
	}
	
	public function getDevice($type) {
       
        $query = $this->db->get_where('devices', array('slug'=>$type));
       return $query->row_array();
	}        

	public function getPart($type_1, $type_2) {
       
        $query = $this->db->get_where('products', array('slug_device'=>$type_1, 'slug'=>$type_2 ));
       return $query->row_array();
	} 

	public function getProduct($type_1, $type_2) {
       
        $query = $this->db->get_where('products', array('slug_category'=>$type_1, 'slug'=>$type_2 ));
       return $query->row_array();
	} 

	public function getCategoryName($type) {
       
        $query = $this->db->get_where('products_category', array('slug'=>$type));
       return $query->row_array();
	} 

	public function getProductsCategory() {
       
        $query = $this->db->get('products_category');
       return $query->result_array();
	} 

	public function getCategory($type) {
       
        $query = $this->db->get_where('products', array('slug_category'=>$type));
       return $query->result_array();
	} 

	
}