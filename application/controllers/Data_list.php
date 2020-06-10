<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_list extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		$this->load->model('M_data');

		if($this->session->userdata('user_level') == FALSE){
			redirect('auth');
		}

	}


	public function index()
	{
		$data['title'] = 'Data List';
		$user_level = $this->session->userdata('user_level');
		$data['dataParkirMasuk'] = $this->M_data->getDataParkirMasuk($user_level);

		$this->load->view('templates/header.php', $data);
		if ($user_level == '2' ) {			
			$this->load->view('pages/table_parkir_masuk', $data);
		}elseif ($user_level == '3') {
			$this->load->view('pages/table_parkir_keluar', $data);
		}else{
			$this->load->view('pages/table_parkir_all', $data);
		}
		$this->load->view('templates/footer.php');
	}

	public function delete($id_parkir)
	{
		$this->M_data->hapusDataParkir($id_parkir);
		$this->session->set_flashdata('flash', 'Di Hapus');
		redirect('data_list');
	}

	public function detail($id_parkir)
	{
		$data['title'] = 'Detail Data Parkir';

		$data['parkir'] = $this->M_data->getDataById($id_parkir);

		$this->load->view('templates/header.php', $data);
		$this->load->view('pages/detail', $data);
		$this->load->view('templates/footer.php');	
	}
}