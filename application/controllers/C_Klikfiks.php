<?php
	class C_Klikfiks extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
			//$this->load->view('Header');
		}

		public function index()
		{
			$this->load->view('header');
			$this->load->view('home');

		}
		public function brandload(){
			$this->load->view('header');
			$this->load->view('brand');
		}
	}
?>