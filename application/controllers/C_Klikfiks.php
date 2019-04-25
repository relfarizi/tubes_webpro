<?php
	class C_Klikfiks extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
			//$this->load->view('Header');
			$this->load->model("databaseUse");
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
			$this->load->view('footer');
		}
		public function brandLload(){
			$this->load->view('header_sec');
			$this->load->view('brandLaptop');
			$this->load->view('footer');
		}
		public function kerusakanPload(){
			$this->load->view('header_sec');
			$this->load->view('kerusakanphone');
			$this->load->view('footer');
		}
		public function kerusakanLload(){
			$this->load->view('header_sec');
			$this->load->view('kerusakanLaptop');
			$this->load->view('footer');
		}
		public function Tappleload(){
			$this->load->view('header_sec');
			$this->load->view('seriesTapple');
			$this->load->view('footer');
		}
		public function Tsamsungload(){
			$this->load->view('header_sec');
			$this->load->view('seriesTsamsung');
			$this->load->view('footer');
		}
		public function detailTload(){
			$this->load->view('header_sec');

			#$data['kerusakan']= $this->databaseUse->getAllbrand();
			$this->load->view('detailKeluhanT');
			$this->load->view('footer');
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

		public function buatjanji(){

			//$this->databaseUse->reg();
			redirect(site_url("C_Klikfiks"));
	}

	}
?>