<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Utama extends CI_Controller {

public function index()
	{
		$data1['title'] = 'Profile';
		$data1['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('header', $data1);
		$this->load->view('dashboard');
		$this->load->view('footer');
	}


}