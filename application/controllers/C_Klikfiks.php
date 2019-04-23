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
			$this->load->view('footer');

		}
		public function brandload(){
			$this->load->view('header');
			$this->load->view('brand');
		}

		public function tentang_kamiload(){
			$this->load->view('header');
			$this->load->view('tentang_kami');
			$this->load->view('footer');
		}
	}
?>