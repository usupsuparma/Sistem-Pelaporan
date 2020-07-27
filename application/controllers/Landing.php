<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Landing extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('landing_model');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['session'] = $this->session->all_userdata();
		$data['title'] = 'Dashboard';
		$data['content'] = 'user/landing';
		$this->load->view('front/media', $data);
	}

	public function aduan()
	{
		$data['session'] = $this->session->all_userdata();
		$data['title'] = 'Form Laporan Aduan';
		$data['content'] = 'user/aduan';
		$this->load->view('front/media', $data);
	}

	public function riwayat()
	{
		$data['session'] = $this->session->all_userdata();
		$data['title'] = 'Form Laporan Aduan';
		$data['tampil_aduan'] = $this->landing_model->get_aduan();
		$data['content'] = 'user/lapor';
		$this->load->view('front/media', $data);
	}

	public function tambah()
	{
		$this->form_validation->set_rules('nik_p', 'NIK Pelapor', 'required');
		$this->form_validation->set_rules('nama_p', 'Nama Pelapor', 'required');
		$this->form_validation->set_rules('alamat_p', 'Alamat Pelapor', 'required');
		$this->form_validation->set_rules('jk_p', 'Jenis Kelamin Pelapor', 'required');
		$this->form_validation->set_rules('nohp_p', 'Nomor HP Pelapor', 'required|numeric');
		$this->form_validation->set_rules('nama_k', 'Nama Korban', 'required');
		$this->form_validation->set_rules('alamat_k', 'Alamat Korban', 'required');
		$this->form_validation->set_rules('jk_k', 'Jenis Kelamin Korban', 'required');
		$this->form_validation->set_rules('nohp_k', 'nohp_k', 'required');
		$this->form_validation->set_rules('kategori', 'Kategori', 'required');
		$this->form_validation->set_rules('tkp', 'Tempat Kejadian Perkara', 'required');
		$this->form_validation->set_rules('desk', 'Deskripsi', 'required');
		$this->form_validation->set_rules('modus', 'Modus', 'required');
		$this->form_validation->set_rules('waktu', 'Waktu', 'required');
		if ($this->form_validation->run() == FALSE) {
			$data['content'] = 'user/aduan';
			$this->load->view('front/media', $data);
		} else {
			$this->landing_model->tambah();
			$this->session->set_flashdata('berhasil', 'Ditambah');
			redirect('landing');
		}
	}

}

/* End of file landing.php */
/* Location: ./application/controllers/landing.php */
