<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin_model extends CI_Model {

	function get_data_aduan()
	{
		$this->db->order_by('id_aduan', 'DESC');
		return $this->db->get('aduan')->result();
	}

	function ubah()
	{
		$data = [
			"tgl_desk" => $this->input->post('tgl_desk'),
			"desk_progres" => $this->input->post('desk_progres'),
			"status" => $this->input->post('status')
		];

		$this->db->where('id_aduan', $this->input->post('id_aduan'));
		$query = $this->db->update('aduan', $data);
		if ($query) {
			return true;
		} else {
			return false;
		}
	}

	function hapus($id)
	{
		$this->db->delete('aduan', ['id_aduan' => $id]);
	}

	function get_data_login()
	{
		return $this->db->get('login')->row();
	}

	function set_akun()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$nama = $this->input->post('nama');
		$id = $this->session->userdata('id_login');

		if(empty($password)){
			$data = array('username' => $username, 'nama' => $nama );
			$this->db->where('id_login',$id);
			$query = $this->db->update('login',$data);
			if($query){
				return true;
			}
		}else{
			$data = array('username' => $username, 'password' => md5($password), 'nama' => $nama );
			$this->db->where('id_login',$id);
			$query = $this->db->update('login',$data);
			if($query){
				return true;
			}
		}
	}

	function get_aduan()
	{
		$this->db->order_by('id_aduan', 'DESC');
		return $this->db->get('aduan')->result();
	}

}

/* End of file admin_model.php */
/* Location: ./application/models/admin_model.php */