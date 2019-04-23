<?php
 // write your name and student id here
class Mahasiswa_model extends CI_model
{





	public function getkeluhan()
	{
		$query = $this->db->get("keluhan");
		return $query->result_array();
	}
	public function getdetailKeluhan($idKeluhan,$idSeries)
	{
		$array =array('idKeluhan' => $idKeluhan, 'idSeries' => $idSeries);
		$this->db->where($array);
		$query = $this->db->get("detaikeluhan");
		return $query->result_array();
	}


	public function placeOrder($idDetail)
	{
		$data = [
			"idOrder" => $this->input->post('idOrder', true),
			"idDetail" => $this->input->post('idDetail', true),
			"date" => $this->input->post('date', true),
			"phone" => $this->input->post('phone', true),
			"catatan"=>$this->input->post('catatan', true),
		];

		//use query builder to insert $data to table "mahasiswa"
		$this->db->insert("mahasiswa",$data);
	}

	

	
	}