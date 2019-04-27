<?php
 // write your name and student id here
class databaseUse extends CI_model
{

	public function getAllbrand()
	{
		
		
		$query = $this->db->query("SELECT * FROM keluhan where idKeluhan = 4");
		return $query->row();
	}

	
	

	public function getdetailKeluhan()
	{	
		$query = $this->db->query("SELECT * FROM detailkeluhan where namaSeries= 'iPad Air 2'");
		return $query->row();
	}


	public function placeOrder()
	{
		$data = [
			"idOrder" => $this->input->post('idOrder', true),
			"idDetail" => $this->input->post('idDetail', true),
			"date" => $this->input->post('date', true),
			"phone" => $this->input->post('phone', true),
		];

		//use query builder to insert $data
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

	public function reg(){
		$data = [
			"iddetail"=>1,
			"jam"=>$this->input->post('jam', true),
			"date"=>$this->input->post('tanggal', true),
			"nama" => $this->input->post('nama', true),
			"email" => $this->input->post('email', true),
			"telepon"=>$this->input->post('telepon', true),
			"alamat"=>$this->input->post('alamat', true),
			"pos" => $this->input->post('pos', true),
			"catatan" => $this->input->post('catatan', true)
		];
		return $this->db->insert('orders', $data);
	
	}


}