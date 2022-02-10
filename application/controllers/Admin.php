<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('m_data_corporate');
		$this->load->model('m_data_public');
		$this->load->model('m_data_kegiatan');
		$this->load->model('m_pendapatan');
		$this->load->helper(array('form', 'url'));
		is_logged_in();
	}

	public function index()
	{
		$data1['title'] = 'Report Data Korporate';
		$data1['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data1['korporate'] = $this->m_data_corporate->tampil_data()->result();
		$this->load->view('template/header_tabel', $data1);
		$this->load->view('sidebar', $data1);
		$this->load->view('template/topbar', $data1);
		$this->load->view('admin/report_data_korpora', $data1);
	}

	public function data_public()
	{
		$data1['title'] = 'Report Data Public';
		$data1['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data1['publik'] = $this->m_data_public->report_publik()->result();
		$this->load->view('template/header_tabel', $data1);
		$this->load->view('sidebar', $data1);
		$this->load->view('template/topbar', $data1);
		$this->load->view('admin/report_data_publik', $data1);
	}

	public function report_kegiatan_harian()
	{
		$data1['title'] = 'Report Kegiatan Sales';
		$data1['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data1['kegiatan'] = $this->m_data_kegiatan->tampil_data()->result();
		$this->load->view('template/header_tabel', $data1);
		$this->load->view('sidebar', $data1);
		$this->load->view('template/topbar', $data1);
		$this->load->view('admin/report_data_kegiatan_harian', $data1);
	}

	public function detail_korporate()
	{
		$data1['title'] = 'Report Data Korporate';
		$data1['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$id_korporate = $this->uri->segment(3);
		$data['korporate'] = $this->m_data_corporate->get_kegiatan1($id_korporate)->row_array();
		$this->load->view('header', $data1);
		$this->load->view('sidebar', $data1);
		$this->load->view('template/topbar', $data1);
		$this->load->view('admin/detail_korporate', $data);
		$this->load->view('footer');
	}

	public function report_transaksi_masuk()
	{
		$data['title'] = 'Report Transaksi Masuk';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['histori'] = $this->m_pendapatan->get_data_histori()->result_array();
		$data['data'] = $this->m_pendapatan->tampil_data_dashboard()->result_array();
		$this->load->view('header', $data);
		$this->load->view('sidebar', $data);
		$this->load->view('template/topbar', $data);
		$this->load->view('admin/report_transaksi_masuk', $data);
		$this->load->view('footer');
	}

	// public function print_transaksi()
	// {
	// 	$this->load->library('Pdf');

	// 	$data['histori'] = $this->m_pendapatan->get_data_histori()->result_array();
	// 	$file = 'Laporan Transaksi per ' . date('d-m-Y') . '.pdf';


	// 	$this->pdf->generate('admin/laporan/cetak', $data, 'laporan', 'A4', 'potrait');
	// 	$this->pdf->setPaper('A4', 'potrait');
	// 	$this->pdf->set_option('isRemoteEnabled', true);
	// 	$this->pdf->filename = $file . '.pdf';
	// 	$this->pdf->load_view('admin/laporan/cetak', $penjualan);
	// }

	public function registration()
	{

		$this->form_validation->set_rules('name', 'Name', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
			'is_unique' => 'Email Ini Sudah Terdaftar!'
		]);
		$this->form_validation->set_rules(
			'password1',
			'Password',
			'required|trim|min_length[4]|matches[password2]',
			['matches' => 'Password Tidak Sama', 'min_length' => 'Password Terlalu Pendek']
		);
		$this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

		if ($this->form_validation->run() == false) {

			$data['title'] = 'Buat Akun';
			$this->load->view('auth/auth_header', $data);
			$this->load->view('auth/registration');
			$this->load->view('auth/auth_footer');
		} else {
			$email = $this->input->post('email', true);
			$data = [
				'name' => htmlspecialchars($this->input->post('name', true)),
				'email' => htmlspecialchars($email),
				'image' => 'default.png',
				'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
				'role_id' =>  2,
				/**$this->input->post('parameter'),**/
				'is_active' => 0,
				'date_created' => time()
			];

			//siapkan token
			$token = base64_encode(bin2hex(32));
			$user_token = [
				'email' => $email,
				'token' => $token,
				'date_created' => time()

			];

			$this->db->insert('user', $data);
			$this->db->insert('user_token', $user_token);

			$this->_sendEmail($token, 'verify');



			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat Akun Anda Telah Terdaftar. Harap Aktifasi Email Anda!!!</div>');
			redirect('auth');
		}
	}
}
