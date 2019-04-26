<?php
 // write your name and student id here
class databaseUse extends CI_model
{

	public function getAllbrand()
	{
		
		$this->db->where(4);
		$query = $this->db->query("SELECT * FROM keluhan");
		return $query->row();
	}

	
	

	public function getdetailKeluhan($idKeluhan,$idSeries)
	{
		$array =array('idKeluhan' => $idKeluhan, 'idSeries' => $idSeries);
		$this->db->where($array);
		$query = $this->db->get("detaikeluhan");
		return $query->result_array();
	}


	public function placeOrder()
	{
		$data = [
			"idOrder" => $this->input->post('idOrder', true),
			"idDetail" => $this->input->post('idDetail', true),
			"date" => $this->input->post('date', true),
			"phone" => $this->input->post('phone', true),
		];

		//use query builder to insert $data to table "mahasiswa"
		$this->db->insert("orders",$data);
	}

	public function tambahseries()
	{
		$data = [
			"idSeries" => $this->input->post('idSeries', true),
			"namaSeries" => $this->input->post('namaSeries', true),
			"idBrand" => $this->input->post('idBrand', true),
			"idTipe" => $this->input->post('idTipe', true),
		];

		//use query builder to insert $data to table "mahasiswa"
		$this->db->insert("mahasiswa",$data);
	}

	public function hapusDataseries($id)
	{
		//use query builder to delete data based on id
		$this->db->where('idSeries', $id);
		$this->db->delete('mahasiswa');
	}


}