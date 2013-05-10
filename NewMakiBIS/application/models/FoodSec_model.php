<?php
class FoodSec_model extends CI_Model {

	function __construct(){
	parent::__construct();

	}
	/* */
	function query_habitat_search($taxon_id){
		$this->db->from('habitat');
		$this->db->where('species_taxon_id',$taxon_id);
		$query_result = $this->db->get();
		return $query_result;
	}
}
?>