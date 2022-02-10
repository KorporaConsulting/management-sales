<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Publik extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('m_data_public');
        $this->load->helper(array('form','url'));
		is_logged_in();
	}

	public function index()
	{
		$data1['title'] = 'Public';
		$data1['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data1['publik'] = $this->m_data_public->tampil_data_publik()->result_array();
		$this->load->view('template/header_tabel', $data1);
		$this->load->view('sidebar', $data1);
		$this->load->view('template/topbar', $data1);
		$this->load->view('data_public', $data1);
	}

	public function input_public()
	{
		$data1['title'] = 'Public';
		$data1['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('header', $data1);
		$this->load->view('sidebar', $data1);
		$this->load->view('template/topbar', $data1);
		$this->load->view('input_data_public');
		$this->load->view('footer');
	}

	public function view_publik()
	{
		$data1['title'] = 'Public';
		$this->load->view('header');
		$this->load->view('sidebar', $data1);
		$this->load->view('template/topbar', $data1);
		$this->load->view('view_publik');
		$this->load->view('footer');
	}

	public function proposal_pembayaran()
	{
		$data1['title'] = 'Public';
		$data1['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$id_public = $this->uri->segment(3);
		$data['kode1']= $this->m_data_public->visit($id_public)->row_array();
		$this->load->view('header', $data1);
		$this->load->view('sidebar', $data1);
		$this->load->view('template/topbar', $data1);
		$this->load->view('input_proposal_public', $data);
		$this->load->view('footer');
	}

	public function detail_bayar()
	{
		$data1['title'] = 'Public';
		$data1['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data1['publik5'] = $this->m_data_public->detail_bayar1()->result_array();
		$this->load->view('template/header_tabel', $data1);
		$this->load->view('sidebar', $data1);
		$this->load->view('template/topbar', $data1);
		$this->load->view('data_public_detail_bayar', $data1);
	}

	public function edit_publik()
	{
		$data1['title'] = 'Public';
		$data1['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$id_public = $this->uri->segment(3);
		$data['kode1']= $this->m_data_public->visit($id_public)->row_array();
		$this->load->view('header', $data1);
		$this->load->view('sidebar', $data1);
		$this->load->view('template/topbar', $data1);
		$this->load->view('edit_data_public', $data);
		$this->load->view('footer');
	}

	public function tambah_data() //tambah data ke database public
	{
		$data_publik= array('nama_sales' => $this->input->post('nmsales'),
							'nama_cust' => $this->input->post('nmcust'),
							'telpon' => $this->input->post('notelp'),
							'alamat' =>$this->input->post('alamat'),
							'email' => $this->input->post('email'),
							'training' => $this->input->post('training_diinput'),
							'tgl_followup' =>$this->input->post('tglFollowup'),
							'status_pembayaran' =>$this->input->post('status_publik'),
							'keterangan' =>$this->input->post('keterangan')
							);
		$this->db->insert('public',$data_publik);
		$this->session->set_flashdata('flash', 'Disimpan');
		redirect('publik');
	}
	
	public function tambah_data1() //tambah data ke database public
	{
		$data_publik= array('nama_sales' => $this->input->post('nmsales'),
							'nama_cust' => $this->input->post('nmcust'),
							'telpon' => $this->input->post('notelp'),
							'alamat' =>$this->input->post('alamat'),
							'email' => $this->input->post('email'),
							'training' => $this->input->post('training_diinput'),
							'tgl_followup' =>$this->input->post('tglFollowup'),
							'status_pembayaran' =>$this->input->post('status_publik'),
							'keterangan' =>$this->input->post('keterangan')
							);
		$this->db->insert('public',$data_publik);
		$this->session->set_flashdata('flash', 'Disimpan');
		redirect('skegiatan/input_kegiatan');
	}

	public function edit_data_public()
	{
		$id_public =$this->input->post('id_public');
		$data_visit= array(	 'nama_cust' => $this->input->post('nmcust'),
							 'telpon' => $this->input->post('notelp'),
							 'alamat' =>$this->input->post('alamat'),
							 'email' => $this->input->post('email'),
							 'training' => $this->input->post('training_diinput'),
							 'status_pembayaran' => $this->input->post('status_publik'),
							 'tgl_pembayaran' => $this->input->post('tgl_pembayaran'),
							 'tgl_followup' => $this->input->post('tglFollowup'),
							 'keterangan' => $this->input->post('keterangan')
							);
		$this->db->where('id_public', $id_public);
		$this->db->update('public',$data_visit);
		$this->session->set_flashdata('flash', 'Disimpan');
		redirect('publik');
	}

	public function proposal_data_public()
	{
		$id_public =$this->input->post('id_public');
		$data_visit= array(	 'nama_cust' => $this->input->post('nmcust'),
							 'email' => $this->input->post('email'),
							 'tgl_pembayaran' => $this->input->post('tgl_pembayaran'),
							 'status_pembayaran' => $this->input->post('status_publik'),
							 'keterangan' => $this->input->post('keterangan')
							);
		$this->db->where('id_public', $id_public);
		$this->db->update('public',$data_visit);
		$this->session->set_flashdata('flash', 'Disimpan');
		redirect('publik');
	}

	public function hapus($id_public){
		$this->m_data_public->hapus($id_public);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('publik');

	}
}