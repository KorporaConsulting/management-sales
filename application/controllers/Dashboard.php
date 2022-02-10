<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_pendapatan');
		$this->load->helper(array('form', 'url'));
		is_logged_in();
	}


	public function index()
	{
		$data['title'] = 'Dashboard';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['histori'] = $this->m_pendapatan->get_data_histori()->result_array();
		$data['data'] = $this->m_pendapatan->tampil_data_dashboard()->result_array();
		$this->load->view('header', $data);
		$this->load->view('sidebar', $data);
		$this->load->view('template/topbar', $data);
		$this->load->view('dashboard/dashboard', $data);
		$this->load->view('footer');
	}

	public function panduan()
	{
		$data['title'] 	 = 'Panduan';
		$data['user'] 	 = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('header', $data);
		$this->load->view('sidebar', $data);
		$this->load->view('template/topbar', $data);
		$this->load->view('menu/panduan');
		$this->load->view('footer');
	}

	public function tambahkomisi()
	{
		$id_user = $this->input->post('id_user');
		$data = array(
			'komisi' => $this->input->post('komisi')
		);

		$this->db->where('id', $id_user);
		$this->db->update('user', $data);
		$this->session->set_flashdata('flash', 'Disimpan');
		redirect('dashboard');
	}
}
