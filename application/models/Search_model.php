<?php 

class Search_Model extends CI_Model {
	public function __construct() {
		$this->load->database();}

	public function search($q) {
		$array_search = array(
			'commerc_name' => $q,
			'brand_name' => $q,
			'batt_name' => $q,
			'oth_names' => $q,
			'slug' => $q,
			'for_search' => $q,
			'notes' => $q,
			'notes_char' => $q
		);

		$query = $this->db
			->or_like($array_search)
			->limit(500)
			->get('devices');

		//echo $this->db->last_query();	

		return $query->result_array();	
	}
}