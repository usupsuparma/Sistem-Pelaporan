<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class landing_model extends CI_Model {

	function get_aduan()
	{
		$this->db->order_by('id_aduan', 'DESC');
		return $this->db->get('aduan')->result();
	}

	function tambah()
	{
		$data = [
			"nik_p" => $this->input->post('nik_p'),
			"nama_p" => $this->input->post('nama_p'),
			"alamat_p" => $this->input->post('alamat_p'),
			"jk_p" => $this->input->post('jk_p'),
			"nohp_p" => $this->input->post('nohp_p'),
			"nama_k" => $this->input->post('nama_k'),
			"alamat_k" => $this->input->post('alamat_k'),
			"jk_k" => $this->input->post('jk_k'),
			"nohp_k" => $this->input->post('nohp_k'),
			"kategori" => $this->input->post('kategori'),
			"tkp" => $this->input->post('tkp'),
			"desk" => $this->input->post('desk'),
			"modus" => $this->input->post('modus'),
			"waktu" => $this->input->post('waktu')
		];

		$query = $this->db->insert('aduan', $data);
		if ($query) {
			return true;
		} else {
			return false;
		}
	}

}

/* End of file landing_model.php */
/* Location: ./application/models/landing_model.php */