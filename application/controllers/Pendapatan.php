<?php

class Pendapatan extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->model('m_pendapatan');
		$this->load->helper(array('form', 'url'));
		is_logged_in();
	}


	public function index()
	{

		$data['title'] = 'Pendapatan';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['dana'] = $this->m_pendapatan->tampil_data()->result_array();
		$this->load->view('header', $data);
		$this->load->view('sidebar', $data);
		$this->load->view('template/topbar', $data);
		$this->load->view('pendapatan/v_pendapatan', $data);
		$this->load->view('footer');
	}

	public function tambah()
	{

		$config['upload_path']          = './assets/img';
		$config['allowed_types']        = 'jpeg|jpg|png';
		$config['max_size']             = 5000;
		$config['remove_spaces']		= TRUE;
		$config['overwrite']            = TRUE;

		$this->load->library('upload', $config);


		if (!$this->upload->do_upload('bukti_transaksi')) {
			echo "ERROR";
		} else {

			$komisi = $this->input->post('komisi_diterima');
			$total_persen = $this->input->post('pendapatan');
			$grand_total = $komisi * $total_persen;

			$upload_data = $this->upload->data();
			$histori_pendapatan = array(
				'id_user' 	  => $this->input->post('id_user'),
				'nama_sales'  => $this->input->post('nama_sales'),
				'email'		  => $this->input->post('email'),
				'pendapatan'  => $this->input->post('pendapatan'),
				'keterangan'  => $this->input->post('keterangan'),
				'komisi_diterima'  => $grand_total,
				'bukti_transaksi' => $upload_data['file_name'],
				'date_created' => $this->input->post('tanggal')
			);
			$id = $this->input->post('id_user');
			$user 				= array(
				'pendapatan' => $this->input->post('total_pendapatan') + $this->input->post('pendapatan')
			);

			$this->db->insert('histori_pendapatan', $histori_pendapatan);
			$this->db->where('id', $id);
			$this->db->update('user', $user);
			$this->session->set_flashdata('flash', 'Disimpan');
			redirect('pendapatan');
		}
	}
}
