<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TDB_model extends CI_Model {

	public function get_keluhan(){

		$query = $this->db->query("SELECT * FROM keluhan where idKeluhan=4");
		return $query->result();
	}
	

}
