<?php
 // write your name and student id here
class databaseUse extends CI_model
{

	public function getAllbrand()
	{
		$query = $this->db->get("brand");
		return $query->result_array();
	}

	public function getAllSeriesbrand($idBrand,$idTipe)
	{
		$array =array('idBrand' => $idBrand, 'idTipe' => $idTipe);
		$this->db->where($array);
		$query = $this->db->get("brand");
		return $query->result_array();
	}

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
		];

		//use query builder to insert $data to table "mahasiswa"
		$this->db->insert("mahasiswa",$data);
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

	public function reg()
	{
     
      $data = array(
      	'idOrder' =>'',
      	'idDetail'=> '1',
      	'jam' => "12:00",
      	'date' => "12 Sept 2019",
        'nama' => $this->input->post('nama'),
        'email' => $this->input->post('email'),
        'telepon' => $this->input->post('telepon'),
        'alamat' => $this->input->post('alamat'),
        'pos' => $this->input->post('pos'),
        'catatan' => $this->input->post('catatan')
     	 );
      return $this->db->insert('orders', $data);
 	 }
}