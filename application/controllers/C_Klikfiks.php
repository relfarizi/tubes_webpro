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
			$this->load->view('header_sec');
			$this->load->view('brand');
		}
		public function brandTload(){
			$this->load->view('header_sec');
			$this->load->view('brandTablet');
		}
		public function brandLload(){
			$this->load->view('header_sec');
			$this->load->view('brandLaptop');
		}

		public function tentang_kamiload(){
			$this->load->view('header_sec');
			$this->load->view('tentang_kami');
			$this->load->view('footer');
		}

		public function orderload(){
			$this->load->view('header_sec');
			$this->load->view('order');
			$this->load->view('footer');
		}
	}
?>