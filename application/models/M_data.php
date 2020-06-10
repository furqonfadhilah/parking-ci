<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_data extends CI_Model {

	public function inputDataParkir()
	{
		if($data['jenis_kendaraan'] == 'Motor'){$biaya = '2000';}else{$biaya='5000';};
		$data = [
			"no_kendaraan" => strtoupper($this->input->post('no_kendaraan', true)),
			"jenis_kendaraan" => $this->input->post('jenis_kendaraan', true),
			"tanggal" => $this->input->post('tanggal', true),
			"waktu_masuk" => $this->input->post('waktu_masuk', true),
			"waktu_keluar" => $this->input->post('waktu_keluar', true),
			"biaya" => $biaya,
			"status" => $this->input->post('status', true)
		];

		$this->db->insert('parkir', $data);
	}


	public function hapusDataParkir($id_parkir)
	{
		$this->db->where('id_parkir', $id_parkir);
		$this->db->delete('parkir');
	}


	public function cariDataParkir()
	{
		$keyword = $this->input->post('keyword', true);
		$this->db->where('no_kendaraan', $keyword);
		$this->db->where('status', 'Masuk');
		return $this->db->get('parkir')->result_array();
	}


	public function prosesDataParkir()
	{		
		$data = [
			"no_kendaraan" => $this->input->post('no_kendaraan', true),
			"jenis_kendaraan" => $this->input->post('jenis_kendaraan', true),
			"tanggal" => $this->input->post('tanggal', true),
			"waktu_masuk" => $this->input->post('waktu_masuk', true),
			"waktu_keluar" => $this->input->post('waktu_keluar', true),
			"biaya" => $this->input->post('biaya', true),
			"status" => $this->input->post('status', true)
		];

		$this->db->where('id_parkir', $this->input->post('id_parkir'));
		$this->db->update('parkir', $data);
	}



	public function getDataParkirMasuk($user_level)
	{
		if ($user_level == '2') {
			$this->db->select('*');
			$this->db->where('status','Masuk');
			$query = $this->db->get('parkir');
		}elseif($user_level == '3'){
			$this->db->select('*');
			$this->db->where('status','Keluar');
			$query = $this->db->get('parkir');
		}else{
			$this->db->select('*');
			$query = $this->db->get('parkir');
		}
		
		return $query->result_array();
	}

	public function getDataById($id_parkir)
	{
		return $this->db->get_where('parkir', ['id_parkir' => $id_parkir])->row_array();
	}


	public function getDataPrint($no_kendaraan)
	{
		return $this->db->get_where('parkir', ['no_kendaraan' => $no_kendaraan])->row_array();
	}
}
