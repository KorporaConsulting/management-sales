<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Skegiatan extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_data_kegiatan');
		$this->load->helper(array('form', 'url'));
		is_logged_in();
	}

	public function index()
	{
		$data1['title'] = 'Kegiatan Harian Sales';
		$data1['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data1['kegiatan'] = $this->m_data_kegiatan->tampil_data_kegiatan()->result_array();
		$this->load->view('template/header_tabel', $data1);
		$this->load->view('sidebar', $data1);
		$this->load->view('template/topbar', $data1);
		$this->load->view('kegiatan_harian/data_kegiatan', $data1);
	}

	public function input_kegiatan()
	{
		$data1['title'] = 'Kegiatan Harian Sales';
		$data1['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('header', $data1);
		$this->load->view('sidebar', $data1);
		$this->load->view('template/topbar', $data1);
		$this->load->view('kegiatan_harian/input_kegiatan_harian');
	}

	public function view_kegiatan()
	{
		$data1['title'] = 'Kegiatan Harian Sales';
		$data1['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$id_kegiatan = $this->uri->segment(3);
		$data['kegiatan'] = $this->m_data_kegiatan->get_kegiatan($id_kegiatan)->row_array();
		$this->load->view('header', $data1);
		$this->load->view('sidebar', $data1);
		$this->load->view('template/topbar', $data1);
		$this->load->view('kegiatan_harian/view_kegiatan_coba', $data);
		$this->load->view('footer');
	}

	public function detail()
	{
		$data1['title'] = 'Report Kegiatan Sales';
		$data1['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$id_kegiatan = $this->uri->segment(3);
		$data['kegiatan'] = $this->m_data_kegiatan->get_kegiatan1($id_kegiatan)->row_array();
		$this->load->view('header', $data1);
		$this->load->view('sidebar', $data1);
		$this->load->view('template/topbar', $data1);
		$this->load->view('kegiatan_harian/detail_kegiatan', $data);
		$this->load->view('footer');
	}

	public function edit_kegiatan()
	{
		$data1['title'] = 'Kegiatan Harian Sales';
		$data1['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$id_kegiatan = $this->uri->segment(3);
		$data['kegiatan'] = $this->m_data_kegiatan->checkbox($id_kegiatan)->row_array();
		$this->load->view('header', $data1);
		$this->load->view('sidebar', $data1);
		$this->load->view('template/topbar', $data1);
		$this->load->view('kegiatan_harian/edit_kegiatan_harian', $data);
		$this->load->view('footer');
	}

	public function tambah_data()
	{
		$a1 = $this->input->post('keterangan1', TRUE);
		$a2 = $this->input->post('keterangan2', TRUE);
		$a3 = $this->input->post('keterangan3', TRUE);
		$a4 = $this->input->post('keterangan4', TRUE);
		$a5 = $this->input->post('keterangan5', TRUE);
		$a6 = $this->input->post('keterangan6', TRUE);
		$a7 = $this->input->post('keterangan7', TRUE);
		$a8 = $this->input->post('keterangan8', TRUE);
		$a9 = $this->input->post('keterangan9', TRUE);
		$a10 = $this->input->post('keterangan10', TRUE);
		$a11 = $this->input->post('keterangan11', TRUE);
		$a12 = $this->input->post('keterangan12', TRUE);
		$a13 = $this->input->post('keterangan13', TRUE);
		$a14 = $this->input->post('keterangan14', TRUE);
		$a15 = $this->input->post('keterangan15', TRUE);
		$a16 = $this->input->post('keterangan16', TRUE);
		$a17 = $this->input->post('keterangan17', TRUE);
		$a18 = $this->input->post('keterangan18', TRUE);

		$callings = $this->input->post('calling_telp');
		$kegiatan_harian = array(
			'tanggal_kegiatan' => $this->input->post('tgl_kegiatan'),
			'nama_sales'      => $this->input->post('nmsales'),
			'keterangan1'     => implode(', ', (array)$a1),
			'waktu1' 		  => $this->input->post('waktu1'),
			'keterangan2'	  => implode(', ', (array)$a2),
			'waktu2'	 	  => $this->input->post('waktu2'),
			'keterangan3'	  => implode(', ', (array)$a3),
			'waktu3'	   	  => $this->input->post('waktu3'),
			'keterangan4'	  => implode(', ', (array)$a4),
			'waktu4' 		  => $this->input->post('waktu4'),
			'keterangan5' 	  => implode(', ', (array)$a5),
			'waktu5'		  => $this->input->post('waktu5'),
			'keterangan6'	  => implode(', ', (array)$a6),
			'waktu6'		  => $this->input->post('waktu6'),
			'keterangan7'	  => implode(', ', (array)$a7),
			'waktu7'		  => $this->input->post('waktu7'),
			'keterangan8'	  => implode(', ', (array)$a8),
			'waktu8'		  => $this->input->post('waktu8'),
			'keterangan9'	  => implode(', ', (array)$a9),
			'waktu9'		  => $this->input->post('waktu9'),
			'keterangan10'	  => implode(', ', (array)$a10),
			'waktu10'		  => $this->input->post('waktu10'),
			'keterangan11'	  => implode(', ', (array)$a11),
			'waktu11'		  => $this->input->post('waktu11'),
			'keterangan12'	  => implode(', ', (array)$a12),
			'waktu12'		  => $this->input->post('waktu12'),
			'keterangan13'	  => implode(', ', (array)$a13),
			'waktu13'	   	  => $this->input->post('waktu13'),
			'keterangan14'	  => implode(', ', (array)$a14),
			'waktu14'		  => $this->input->post('waktu14'),
			'keterangan15'	  => implode(', ', (array)$a15),
			'waktu15'		  => $this->input->post('waktu15'),
			'keterangan16'	  => implode(', ', (array)$a16),
			'waktu16'		  => $this->input->post('waktu16'),
			'keterangan17'	  => implode(', ', (array)$a17),
			'waktu17'		  => $this->input->post('waktu17'),
			'keterangan18'	  => implode(', ', (array)$a18),
			'waktu18'		  => $this->input->post('waktu18'),
			'catatan1'		  => $this->input->post('catatan1'),
			'catatan2'		  => $this->input->post('catatan2'),
			'catatan3'		  => $this->input->post('catatan3'),
			'catatan4'		  => $this->input->post('catatan4'),
			'catatan5'		  => $this->input->post('catatan5'),
			'catatan6'		  => $this->input->post('catatan6'),
			'catatan7'		  => $this->input->post('catatan7'),
			'catatan8'		  => $this->input->post('catatan8'),
			'catatan9'		  => $this->input->post('catatan9'),
			'catatan10'		  => $this->input->post('catatan10'),
			'catatan11'		  => $this->input->post('catatan11'),
			'catatan12'		  => $this->input->post('catatan12'),
			'catatan13'		  => $this->input->post('catatan13'),
			'catatan14'		  => $this->input->post('catatan14'),
			'catatan15'		  => $this->input->post('catatan15'),
			'catatan16'		  => $this->input->post('catatan16'),
			'catatan17'		  => $this->input->post('catatan17'),
			'catatan18'		  => $this->input->post('catatan18'),
			'calling' => $callings,
		);
		$this->db->insert('kegiatan_sales', $kegiatan_harian);
		$this->session->set_flashdata('flash', 'Disimpan');
		redirect('skegiatan');
	}

	public function edit_data()
	{
		$a1 = $this->input->post('keterangan1', TRUE);
		$a2 = $this->input->post('keterangan2', TRUE);
		$a3 = $this->input->post('keterangan3', TRUE);
		$a4 = $this->input->post('keterangan4', TRUE);
		$a5 = $this->input->post('keterangan5', TRUE);
		$a6 = $this->input->post('keterangan6', TRUE);
		$a7 = $this->input->post('keterangan7', TRUE);
		$a8 = $this->input->post('keterangan8', TRUE);
		$a9 = $this->input->post('keterangan9', TRUE);
		$a10 = $this->input->post('keterangan10', TRUE);
		$a11 = $this->input->post('keterangan11', TRUE);
		$a12 = $this->input->post('keterangan12', TRUE);
		$a13 = $this->input->post('keterangan13', TRUE);
		$a14 = $this->input->post('keterangan14', TRUE);
		$a15 = $this->input->post('keterangan15', TRUE);
		$a16 = $this->input->post('keterangan16', TRUE);
		$a17 = $this->input->post('keterangan17', TRUE);
		$a18 = $this->input->post('keterangan18', TRUE);

		$callings = $this->input->post('calling_telp');
		$id_kegiatan = $this->input->post('id_kegiatan');
		$kegiatan_edit = array(
			'keterangan1'     => implode(', ', (array)$a1),
			'waktu1' 		  => $this->input->post('waktu1'),
			'keterangan2'	  => implode(', ', (array)$a2),
			'waktu2'	 	  => $this->input->post('waktu2'),
			'keterangan3'	  => implode(', ', (array)$a3),
			'waktu3'	   	  => $this->input->post('waktu3'),
			'keterangan4'	  => implode(', ', (array)$a4),
			'waktu4' 		  => $this->input->post('waktu4'),
			'keterangan5' 	  => implode(', ', (array)$a5),
			'waktu5'		  => $this->input->post('waktu5'),
			'keterangan6'	  => implode(', ', (array)$a6),
			'waktu6'		  => $this->input->post('waktu6'),
			'keterangan7'	  => implode(', ', (array)$a7),
			'waktu7'		  => $this->input->post('waktu7'),
			'keterangan8'	  => implode(', ', (array)$a8),
			'waktu8'		  => $this->input->post('waktu8'),
			'keterangan9'	  => implode(', ', (array)$a9),
			'waktu9'		  => $this->input->post('waktu9'),
			'keterangan10'	  => implode(', ', (array)$a10),
			'waktu10'		  => $this->input->post('waktu10'),
			'keterangan11'	  => implode(', ', (array)$a11),
			'waktu11'		  => $this->input->post('waktu11'),
			'keterangan12'	  => implode(', ', (array)$a12),
			'waktu12'		  => $this->input->post('waktu12'),
			'keterangan13'	  => implode(', ', (array)$a13),
			'waktu13'	   	  => $this->input->post('waktu13'),
			'keterangan14'	  => implode(', ', (array)$a14),
			'waktu14'		  => $this->input->post('waktu14'),
			'keterangan15'	  => implode(', ', (array)$a15),
			'waktu15'		  => $this->input->post('waktu15'),
			'keterangan16'	  => implode(', ', (array)$a16),
			'waktu16'		  => $this->input->post('waktu16'),
			'keterangan17'	  => implode(', ', (array)$a17),
			'waktu17'		  => $this->input->post('waktu17'),
			'keterangan18'	  => implode(', ', (array)$a18),
			'waktu18'		  => $this->input->post('waktu18'),
			'catatan1'		  => $this->input->post('catatan1'),
			'catatan2'		  => $this->input->post('catatan2'),
			'catatan3'		  => $this->input->post('catatan3'),
			'catatan4'		  => $this->input->post('catatan4'),
			'catatan5'		  => $this->input->post('catatan5'),
			'catatan6'		  => $this->input->post('catatan6'),
			'catatan7'		  => $this->input->post('catatan7'),
			'catatan8'		  => $this->input->post('catatan8'),
			'catatan9'		  => $this->input->post('catatan9'),
			'catatan10'		  => $this->input->post('catatan10'),
			'catatan11'		  => $this->input->post('catatan11'),
			'catatan12'		  => $this->input->post('catatan12'),
			'catatan13'		  => $this->input->post('catatan13'),
			'catatan14'		  => $this->input->post('catatan14'),
			'catatan15'		  => $this->input->post('catatan15'),
			'catatan16'		  => $this->input->post('catatan16'),
			'catatan17'		  => $this->input->post('catatan17'),
			'catatan18'		  => $this->input->post('catatan18'),
			'calling'		  => $this->input->post('calling_telp')
		);
		$this->db->where('id_kegiatan', $id_kegiatan);
		$this->db->update('kegiatan_sales', $kegiatan_edit);
		$this->session->set_flashdata('flash', 'Disimpan');
		redirect('skegiatan');
	}

	public function hapus($id_kegiatan)
	{
		$this->m_data_kegiatan->hapus_data($id_kegiatan);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('skegiatan');
	}
}
