<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('auth_model');
	}

	public function index()
	{
		if (!$this->session->userdata('username')) {
			$this->load->view('login');
		} else {
			redirect('admin');
		}

		if (!empty($this->input->post('username')) && !empty($this->input->post('password'))) {
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$check_user = $this->auth_model->check_data_user($username);

			if (!empty($check_user)) {
				$check = $this->auth_model->check_data($username, $password);
				if (!empty($check)) {
				#create session
					$userdata = $this->auth_model->get_data_user($username);
					$this->session->set_userdata($userdata);
					$nama = $this->session->userdata('nama');
					$this->session->set_flashdata('berhasil', 'Selamat Datang '.$nama.', Anda berhasil Login');
					redirect('admin');
				} else {
				#jika salah password
					$this->session->set_flashdata('gagal', 'Login Gagal. Password yang Anda masukkan tidak tepat');
					redirect('auth');
				}
			} else {
			#jika tidak berhasil login
				$this->session->set_flashdata('gagal', 'Login Gagal. Username dan Password tidak tepat');
				redirect('auth');
			}
		}
	}

	public function logout()
	{
		#hapus session
		$this->session->sess_destroy();
		redirect('auth');
	}

}

/* End of file auth.php */
/* Location: ./application/controllers/auth.php */