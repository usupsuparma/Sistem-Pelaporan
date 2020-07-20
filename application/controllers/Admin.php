<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('username')) {
			redirect('auth');
		}
		$this->load->model('admin_model');
	}

	public function index()
	{
		$data['session'] = $this->session->all_userdata();
		$data['title'] = 'Dashboard';
		$data['content'] = 'admin/dashboard';
		$this->load->view('layout/media', $data);		
	}

	public function aduan()
	{
		$data['session'] = $this->session->all_userdata();
		$data['title'] = 'Laporan Aduan';
		$data['aduan'] = $this->admin_model->get_data_aduan();
		$data['content'] = 'admin/aduan';
		$this->load->view('layout/media', $data);
	}

	public function riwayat()
	{
		$data['session'] = $this->session->all_userdata();
		$data['title'] = 'Riwayat';
		$data['aduan'] = $this->admin_model->get_aduan();
		$data['content'] = 'admin/riwayat';
		$this->load->view('layout/media', $data);
	}

	public function ubah()
	{
		$data['session'] = $this->session->all_userdata();
		if ($this->admin_model->ubah()) {
			$this->session->set_flashdata('berhasil', 'Ditindaklanjuti');
			redirect('admin/aduan');
		}if (!$this->admin_model->ubah()) {
			$this->session->set_flashdata('gagal', 'Ditindaklanjuti');
			redirect('admin/aduan');
		}
	}

	public function hapus($id)
	{
		$this->admin_model->hapus($id);
		$this->session->set_flashdata('berhasil', 'Dihapus');
		redirect('admin/aduan');
	}

	public function set_akun()
	{
		$data['session'] = $this->session->all_userdata();
		$data['title'] = 'Setting Akun';
		$data['user'] = $this->admin_model->get_data_login();
		$data['content'] = 'admin/setting_akun';
		$this->load->view('layout/media', $data);
	}

	public function proses_set_akun()
	{
		if ($this->admin_model->set_akun()) {
			$this->session->set_flashdata('berhasil', 'Diubah');
			redirect('admin/set_akun');
		}

		if(!$this->admin_model->set_akun()){
			$this->session->set_flashdata('gagal', 'Diubah');
			redirect('admin/set_akun');
		}
	}

}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */