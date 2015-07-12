<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lots_model extends CI_Model {
	function get_lots(){
		$query = $this->db->get('item');
		return $query->result_array();
	}

}