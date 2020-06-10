<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		$this->load->model('M_data');

		if($this->session->userdata('user_level') != 1){
			redirect('auth');
		}elseif($this->session->userdata('user_level') == FALSE){
			redirect('auth');
		}

	}

	public function index()
	{
		$data['title'] = 'Dashboard';
		$this->load->view('templates/header.php', $data);
		$this->load->view('pages/input_data', $data);
		$this->load->view('templates/footer.php');
	}

	public function print($no_kendaraan)
	{
		$data['title'] = 'Detail Data Parkir';

		$data['print'] = $this->M_data->getDataPrint($no_kendaraan);

		$this->load->view('templates/header.php', $data);
		$this->load->view('pages/print', $data);
		$this->load->view('templates/footer.php');
	}

	public function inputData()
	{
		$this->M_data->inputDataParkir();
		$this->session->set_flashdata('flash', 'Di Input');
		redirect('dashboard/print/'.$this->input->post('no_kendaraan').'');
	}

	public function hapusData()
	{
		$this->M_data->hapusDataParkir();
		$this->session->set_flashdata('flash', 'Di Hapus');
	}
}