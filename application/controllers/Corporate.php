<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Corporate extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		// $this->load->model('excel_import_model');
		// $this->load->library('excel');
		$this->load->model('m_data_corporate');
		$this->load->helper(array('form', 'url'));
		is_logged_in();
	}

	public function index()
	{
		$data['title'] = 'Korporate';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['korporate'] = $this->m_data_corporate->tampil_data_sales()->result_array();
		$this->load->view('template/header_tabel', $data);
		$this->load->view('sidebar', $data);
		$this->load->view('template/topbar', $data);
		$this->load->view('data_corporate', $data);
	}

	public function input_corporate()
	{
		$data['title'] = 'Korporate';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('header', $data);
		$this->load->view('sidebar', $data);
		$this->load->view('template/topbar', $data);
		$this->load->view('input_data_korporate', $data);
		$this->load->view('footer');
	}

	public function visit_corporate()
	{
		$data['title'] = 'Korporate';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$id_korporate = $this->uri->segment(3);
		$data['kode1'] = $this->m_data_corporate->visit($id_korporate)->row_array();
		$this->load->view('header', $data);
		$this->load->view('sidebar', $data);
		$this->load->view('template/topbar', $data);
		$this->load->view('input_visit_data_corporate', $data);
		$this->load->view('footer');
	}

	public function proposal_corporate()
	{
		$data['title'] = 'Korporate';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$id_korporate = $this->uri->segment(3);
		$data['kode1'] = $this->m_data_corporate->visit($id_korporate)->row_array();
		$this->load->view('header', $data);
		$this->load->view('sidebar', $data);
		$this->load->view('template/topbar', $data);
		$this->load->view('input_proposal_data_corporate', $data);
		$this->load->view('footer');
	}

	public function edit_corporate()
	{
		$data1['title'] = 'Profile';
		$data1['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$id_korporate = $this->uri->segment(3);
		$data['kode1'] = $this->m_data_corporate->visit($id_korporate)->row_array();
		$this->load->view('header', $data1);
		$this->load->view('sidebar', $data1);
		$this->load->view('template/topbar', $data1);
		$this->load->view('edit_data_corporate', $data);
		$this->load->view('footer');
	}


	// Edit Excel 
	public function edit_excel($id)
	{
		$data['title'] = 'Korporate';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$id_korporate = $this->uri->segment(3);
		$data['data'] = $this->m_data_corporate->edit_excel_modal($id_korporate)->row_array();
		$this->load->view('header', $data);
		$this->load->view('sidebar', $data);
		$this->load->view('template/topbar', $data);
		$this->load->view('crud_excel/edit_excel', $data);
		$this->load->view('footer');
	}

	public function simpan_edit_excel()
	{
		$id = $this->input->post('id_data');
		$data = array(
			'nama_perusahaan' => $this->input->post('nama_perusahaan'),
			'no_telp' => $this->input->post('telp_pic'),
			'pic' => $this->input->post('pic'),
			'email_pic' => $this->input->post('email_pic'),
			'industri' => $this->input->post('industri')
		);
		$this->db->where('id', $id);
		$this->db->update('excel_import_corporate', $data);
		$this->session->set_flashdata('flash', 'Disimpan');
		redirect('corporate');
	}
	// END Edit Excel


	public function tambah_data() //tambah data ke database korporate
	{
		$data_korporate1 = array(
			'nama_sales' => $this->input->post('nmsales'),
			'nama_perusahaan' => $this->input->post('nmperusahaan'),
			'telpon' => $this->input->post('notelp'),
			'email' => $this->input->post('email'),
			'alamat' => $this->input->post('alamat'),
			'tanggal_telpon' => $this->input->post('tglTelpon'),
			'tanggal_followup' => $this->input->post('tglFollowUp'),
			'status' => $this->input->post('status'),
			'keterangan' => $this->input->post('keterangan')
		);
		$this->db->insert('korporate', $data_korporate1);
		$this->session->set_flashdata('flash', 'Disimpan');
		redirect('corporate');
	}

	public function tambah_data1() //tambah data ke database korporate
	{
		$data_korporate1 = array(
			'nama_sales' => $this->input->post('nmsales'),
			'nama_perusahaan' => $this->input->post('nmperusahaan'),
			'telpon' => $this->input->post('notelp'),
			'email' => $this->input->post('email'),
			'alamat' => $this->input->post('alamat'),
			'tanggal_telpon' => $this->input->post('tglTelpon'),
			'tanggal_followup' => $this->input->post('tglFollowUp'),
			'status' => $this->input->post('status'),
			'keterangan' => $this->input->post('keterangan')
		);
		$this->db->insert('korporate', $data_korporate1);
		$this->session->set_flashdata('flash', 'Disimpan');
		redirect('skegiatan/input_kegiatan');
	}

	public function insert_jadwal_visit()
	{
		$id_korporate = $this->input->post('id_korporate');
		$data_visit = array(
			'nama_perusahaan' => $this->input->post('nmperusahaan'),
			'tanggal_visit' => $this->input->post('tglvisit'),
			'alamat_visit' => $this->input->post('alamatvisit'),
			'status' => $this->input->post('status'),
			'keterangan' => $this->input->post('keterangan')
		);
		$this->db->where('id_korporate', $id_korporate);
		$this->db->update('korporate', $data_visit);
		$this->session->set_flashdata('flash', 'Disimpan');
		redirect('corporate');
	}

	public function insert_proposal()
	{
		$id_korporate = $this->input->post('id_korporate');
		$data_visit = array(
			'nama_perusahaan' => $this->input->post('nmperusahaan'),
			'telpon' => $this->input->post('notelp'),
			'email' => $this->input->post('email'),
			'tanggal_proposal' => $this->input->post('tglKirimProposal'),
			'status' => $this->input->post('statusproposal'),
			'keterangan' => $this->input->post('keterangan')
		);
		$this->db->where('id_korporate', $id_korporate);
		$this->db->update('korporate', $data_visit);
		$this->session->set_flashdata('flash', 'Disimpan');
		redirect('corporate');
	}

	public function edit_data_corporate()
	{
		$id_korporate = $this->input->post('id_korporate');
		$data_visit = array(
			'nama_perusahaan' => $this->input->post('nmperusahaan'),
			'telpon' => $this->input->post('notelp'),
			'email' => $this->input->post('email'),
			'alamat' => $this->input->post('alamat'),
			'tanggal_telpon' => $this->input->post('tglTelpon'),
			'tanggal_followup' => $this->input->post('tglFollowUp'),
			'keterangan' => $this->input->post('keterangan'),
			'tanggal_visit' => $this->input->post('tglvisit'),
			'alamat_visit' => $this->input->post('alamatvisit'),
			'tanggal_proposal' => $this->input->post('tglKirimProposal'),
			'status' => $this->input->post('statusproposal')
		);
		$this->db->where('id_korporate', $id_korporate);
		$this->db->update('korporate', $data_visit);
		$this->session->set_flashdata('flash', 'Disimpan');
		redirect('corporate');
	}

	public function import()
	{
		if (isset($_FILES["file"]["name"])) {
			$path = $_FILES["file"]["tmp_name"];
			$object = PHPExcel_IOFactory::load($path);
			foreach ($object->getWorksheetIterator() as $worksheet) {
				$highestRow = $worksheet->getHighestRow();
				$highestColumn = $worksheet->getHighestColumn();
				for ($row = 2; $row <= $highestRow; $row++) {
					$nama_perusahaan = $worksheet->getCellByColumnAndRow(0, $row)->getValue();
					$no_telp = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
					$pic = $worksheet->getCellByColumnAndRow(2, $row)->getValue();
					$email_pic = $worksheet->getCellByColumnAndRow(3, $row)->getValue();
					$industri = $worksheet->getCellByColumnAndRow(4, $row)->getValue();
					$data[] = array(
						'nama_perusahaan'	=>	$nama_perusahaan,
						'no_telp'			=>	$no_telp,
						'pic'				=>	$pic,
						'email_pic'			=>	$email_pic,
						'industri'			=>	$industri
					);
				}
			}
			$this->excel_import_model->insert($data);
			echo 'Data Imported successfully';
		}
	}


	public function hapus($id_korporate)
	{
		$this->m_data_corporate->hapus($id_korporate);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('corporate');
	}

	public function hapus_excel($id)
	{
		$this->excel_import_model->hapus($id);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('corporate');
	}
}
