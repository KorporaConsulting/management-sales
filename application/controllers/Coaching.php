<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Coaching extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('#');
		$this->load->model('#');
        $this->load->helper('url');
		is_logged_in();
	}

	public function index(){
		$data1['title'] = 'Report Data';
		$data1['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data1['korporate'] = $this->m_data_corporate->tampil_data()->result();
		$this->load->view('coaching/index', $data1);
	}

	public function data_public(){
		$data1['title'] = 'Report Data';
		$data1['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data1['publik'] = $this->m_data_public->report_publik()->result();
		$this->load->view('admin/report_data_publik', $data1);
	}
}