<?php
	class C_Klikfiks extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
			//$this->load->view('Header');
			$this->load->model('databaseUse');
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

			$data['data1'] = $this->databaseUse->getAllbrand();
			$data['detail'] = $this->databaseUse->getdetailKeluhan();
			$this->load->view('detailKeluhanT', $data);
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

		public function buatjanji()
		{

			$this->form_validation->set_rules('id_detail', 'id_detail', 'required');
			$this->form_validation->set_rules('jam', 'jam', 'required');
			$this->form_validation->set_rules('tanggal', 'tanggal', 'required');
			$this->form_validation->set_rules('nama', 'nama', 'required');
			$this->form_validation->set_rules('email', 'email', 'required');
			$this->form_validation->set_rules('alamat', 'alamat', 'required');
			$this->form_validation->set_rules('telepon', 'telepon', 'required');
			$this->form_validation->set_rules('pos', 'pos', 'required');
			$this->form_validation->set_rules('catatan', 'catatan', 'required');

			if ($this->form_validation->run() == TRUE) {
				$data['title'] = "LOGIN";
				$this->load->view('header_sec');
				$this->load->view('order', $data);
				$this->load->view('footer');
			}else {
					$this->databaseUse->reg();
					redirect(site_url("C_Klikfiks/orderload"));
		}
		}
	}



?>