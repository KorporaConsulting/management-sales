<?php 


class Email extends CI_Controller {

//     function __construct(){
// 		parent::__construct();		
// 		$this->load->model('auto_email');
//         $this->load->helper(array('form','url'));
// 	}

public function sendEmail1(){
		$data5 ['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
// 		$data0 ['in_model'] = $this->auto_email->email_sales()->result();
		$config = [
			'protocol' => 'ssmtp',
			'smtp_host' => 'ssl://ssmtp.googlemail.com',
			'smtp_user' => 'korporaconsulting.email@gmail.com',
			'smtp_pass' => 'korpora2020',
			'smtp_port' => 465,
			'mailtype' => 'html',
			'charset' => 'utf-8',
			'newline' => "\r\n"
		];

// 		memanggil library email codeigniter
		$this->load->library('email', $config);
		$this->email->initialize($config);

        foreach ($data5 as $io) {
        $this->email->from('korporaconsulting.email@gmail.com', 'Korpora Consulting | Kegiatan Sales');
		$this->email->to('deakorporaconsulting@gmail.com, henks.tim@gmail.com, michael.korporaconsulting@gmail.com, tasyacorporat@gmail.com');

		$this->email->subject('Pemberitahuan Kegiatan Harian!!!');
			$this->email->message('<center> <img src="http://korporaconsulting.com/wp-content/uploads/2018/04/Untitled-1cc.png"> <h2> Bila Anda belum mengisi kegiatan harian pada hari ini tanggal '.date("d-m-Y").' harap diisi sebagai laporan pekerjaan Anda hari ini. <br> Abaikan pesan ini bila Anda sudah melakukannya...</h2></center>');
		if ($this->email->send()){
			return true;
		}else{
			echo $this->email->print_debugger();
			die;
		}
        }
	}
	

public function sendEmail2(){
		$data5 ['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
// 		$data0 ['in_model'] = $this->auto_email->email_sales()->result();
		$config = [
			'protocol' => 'ssmtp',
			'smtp_host' => 'ssl://ssmtp.googlemail.com',
			'smtp_user' => 'korporaconsulting.email@gmail.com',
			'smtp_pass' => 'korpora2020',
			'smtp_port' => 465,
			'mailtype' => 'html',
			'charset' => 'utf-8',
			'newline' => "\r\n"
		];

		//memanggil library email codeigniter
		$this->load->library('email', $config);
		$this->email->initialize($config);

        foreach ($data5 as $io) {
        $this->email->from('korporaconsulting.email@gmail.com', 'Korpora Consulting | Kegiatan Sales');
		$this->email->to('deakorporaconsulting@gmail.com, henks.tim@gmail.com,  michael.korporaconsulting@gmail.com, tasyacorporat@gmail.com');

		$this->email->subject('Peringatan Kegiatan Harian!!!');
			$this->email->message('<center> <img src="http://korporaconsulting.com/wp-content/uploads/2018/04/Untitled-1cc.png"> <h2> Bila Anda belum mengisi kegiatan harian pada hari ini tanggal '.date("d-m-Y").' harap diisi sebagai laporan pekerjaan Anda, batas waktu sampai jam 23.59 WIB. <br> Abaikan pesan ini bila Anda sudah melakukannya...</h2></center>');
		if ($this->email->send()){
			return true;
		}else{
			echo $this->email->print_debugger();
			die;
		}
        }
	}
	
	
	public function emailcheckCall(){
		// $data5 = $this->auto_email->email_report()->result_array();
		
		$data123= $this->db->get('kegiatan_sales')->result_array();
		$config = [
			'protocol' => 'ssmtp',
			'smtp_host' => 'ssl://ssmtp.googlemail.com',
			'smtp_user' => 'korporaconsulting.email@gmail.com',
			'smtp_pass' => 'korpora2020',
			'smtp_port' => 465,
			'mailtype' => 'html',
			'charset' => 'utf-8',
			'newline' => "\r\n"
		];
		
		//memanggil library email codeigniter
		$this->load->library('email', $config);
		$this->email->initialize($config);
		$i = 1;
		$msg = "
				<center> <img src='http://korporaconsulting.com/wp-content/uploads/2018/04/Untitled-1cc.png'> <h2> Daftar sales yang telah melakukan telpon<br>pada hari ini tanggal ".date('d-m-Y')." <br><br> Bila <b style='color:red;'>Merah</b> tidak Mencapai Target <br> Bila <b style='color:green;'>Hijau</b> telah mencapai target</h2></center>

				<form>
  				  <div class='row'>
  				   <div class='col'>
					<table class='table table-striped' style='width:100%;'>
					  <thead>
					    <tr style='background-color: yellow; color: black;'>
					      <th style='border-bottom: 1px solid #ddd;'>No</th>
					      <th style='border-bottom: 1px solid #ddd;'>Nama</th>
					      <th style='border-bottom: 1px solid #ddd;'>Telpon Sebanyak</th>
					    </tr>
					  </thead>
					  
					  <tbody>";
					  foreach($data123 as $io) { 
					  	if ($io['tanggal_kegiatan'] == tanggal('helpers/tanggal_helper')) {
					  		if ($io['calling'] < 15) {
					  		$oop1  = $i++;
						  	$oop2 = $io['nama_sales'];
						  	$oop3 = $io['calling'];
						  	$msg .="<tr style='text-align:center;'>
						      	<td style='background-color:red; border-top-right-radius: 80px; border-bottom-right-radius: 80px; color:white; border-bottom: 1px solid #ddd;'>". $oop1 ."</td>
						        <td style='border-bottom: 1px solid #ddd; color:red;'>". $oop2 ."</td>
						        <td style='color:red; font-size:22px; border-bottom: 1px solid #ddd;'>". $oop3 ."</td>
						      </tr>
						      </tbody>";
					  		}
					  	}
					  	
					  }"
					</table> 
					</div>

					 <div class='col'>
					<table class='table table-striped' style='width:100%;'>
					  <thead>
					    <tr>
					      <th>No</th>
					      <th>Nama</th>
					      <th>Telpon Sebanyak</th>
					    </tr>
					  </thead>
					  
					  <tbody>";
					  foreach($data123 as $io) { 
					  	if ($io['tanggal_kegiatan'] == tanggal('helpers/tanggal_helper')) {
					  		if ($io['calling'] > 14) {
					  		$oop1  = $i++;
						  	$oop2 = $io['nama_sales'];
						  	$oop3 = $io['calling'];
						  	$msg .="<tr style='text-align:center;'>
						      	<td  style='background-color:green; border-top-right-radius: 80px; border-bottom-right-radius: 80px; color:white;'>". $oop1 ."</td>
						        <td style='color:green; border-bottom: 1px solid #ddd;'>". $oop2 ."</td>
						        <td style='color:green; font-size:22px; border-bottom: 1px solid #ddd;'>". $oop3 ."</td>
						      </tr>
						      </tbody>";
					  		}
					  	}
					 
					  }

					 $msg .="
					</table> 
					</div>

					</div>
				   </form>";

		foreach ($data123 as $io) {
		if ($io['tanggal_kegiatan'] == tanggal('helpers/tanggal_helper')) {
	        	$this->email->from('korporaconsulting.email@gmail.com', 'Korpora Consulting | Kegiatan Sales');
				$this->email->to('arif.antonius@gmail.com, annakorporaconsulting@gmail.com, alexjhosan19@gmail.com');
				$this->email->subject('Target Telpon Sales Tanggal '.date('d-m-Y'));
				$this->email->message($msg);
			   }
			}		
		if ($this->email->send()) {
			return true;
		}
		 else{
		 	echo $this->email->print_debugger();
			die;
        }		
	}
	
	public function data_summaryex(){
		$data122 ['data']= $this->db->get('kegiatan_sales')->result_array();
		$data123 = $this->db->get('kegiatan_sales')->result_array();

		$config = [
			'protocol' => 'ssmtp',
			'smtp_host' => 'ssl://ssmtp.googlemail.com',
			'smtp_user' => 'alexjhosan11@gmail.com',
			'smtp_pass' => 'kucinggila',
			'smtp_port' => 465,
			'mailtype' => 'html',
			'charset' => 'utf-8',
			'newline' => "\r\n"
		];
		
		//memanggil library email codeigniter
		$this->load->library('email', $config);
		$this->email->initialize($config);
		$i = 1;
		// $msgi = $this->load->view('send_email/data_summary', $data122, true);	
		// var_dump($msgi);
		// die;
		$msg = "
				<center> <img src='http://korporaconsulting.com/wp-content/uploads/2018/04/Untitled-1cc.png'><h2>Data summary kegiatan harian sales pada tanggal ".date('d-m-Y')."</h2> <div class='chart-pie pt-4'><canvas id='myPieChart'></canvas></div></center>

					<table class='table' border width='100%'>
					  <thead>
					    <tr style='background-color: yellow; color: black;'>
					      <th>No</th>
					      <th>Nama</th>
					      <th style='width:50%;'>Pagi</th>
					      <th style='width:50%;'>Siang</th>
					    </tr>
					  </thead>
					  
					  <tbody>";
					  foreach($data123 as $io) { 
					  	if ($io['tanggal_kegiatan'] == tanggal('helpers/tanggal_helper')) {
					  		$oop1  = $i++;
						  	$oop2 = $io['nama_sales'];
						  	$oop3 ="
						  			Jam :".$io['waktu1']."<br> Keterangan :".$io['keterangan1']."<br> Catatan :".$io['catatan1']
						  			."<hr class='divider' style='border-top-color: black;'>Jam :".$io['waktu2']."<br> Keterangan :".$io['keterangan2']."<br> Catatan :".$io['catatan2']
						  			."<hr class='divider' style='border-top-color: black;'>Jam :".$io['waktu3']."<br> Keterangan :".$io['keterangan3']."<br> Catatan :".$io['catatan3']
						  			."<hr class='divider' style='border-top-color: black;'>Jam :".$io['waktu4']."<br> Keterangan :".$io['keterangan4']."<br> Catatan :".$io['catatan4']
						  			."<hr class='divider' style='border-top-color: black;'>Jam :".$io['waktu5']."<br> Keterangan :".$io['keterangan5']."<br> Catatan :".$io['catatan5']
						  			."<hr class='divider' style='border-top-color: black;'>Jam :".$io['waktu6']."<br> Keterangan :".$io['keterangan6']."<br> Catatan :".$io['catatan6']
						  			."<hr class='divider' style='border-top-color: black;'>Jam :".$io['waktu7']."<br> Keterangan :".$io['keterangan7']."<br> Catatan :".$io['catatan7']
						  			."<hr class='divider' style='border-top-color: black;'>Jam :".$io['waktu8']."<br> Keterangan :".$io['keterangan8']."<br> Catatan :".$io['catatan8']
						  			."<hr class='divider' style='border-top-color: black;'>Jam :".$io['waktu9']."<br> Keterangan :".$io['keterangan9']."<br> Catatan :".$io['catatan9']; 
						  	$oop4 = "Jam :".$io['waktu10']."<br> Keterangan :".$io['keterangan10']."<br> Catatan :".$io['catatan10']
						  			."<hr class='divider' style='border-top-color: black;'>Jam :".$io['waktu11']."<br> Keterangan :".$io['keterangan11']."<br> Catatan :".$io['catatan11']
						  			."<hr class='divider' style='border-top-color: black;'>Jam :".$io['waktu12']."<br> Keterangan :".$io['keterangan12']."<br> Catatan :".$io['catatan12']
						  			."<hr class='divider' style='border-top-color: black;'>Jam :".$io['waktu13']."<br> Keterangan :".$io['keterangan13']."<br> Catatan :".$io['catatan13']
						  			."<hr class='divider' style='border-top-color: black;'>Jam :".$io['waktu14']."<br> Keterangan :".$io['keterangan14']."<br> Catatan :".$io['catatan14']
						  			."<hr class='divider' style='border-top-color: black;'>Jam :".$io['waktu15']."<br> Keterangan :".$io['keterangan15']."<br> Catatan :".$io['catatan15']
						  			."<hr class='divider' style='border-top-color: black;'>Jam :".$io['waktu16']."<br> Keterangan :".$io['keterangan16']."<br> Catatan :".$io['catatan16']
						  			."<hr class='divider' style='border-top-color: black;'>Jam :".$io['waktu17']."<br> Keterangan :".$io['keterangan17']."<br> Catatan :".$io['catatan17']
						  			."<hr class='divider' style='border-top-color: black;'>Jam :".$io['waktu18']."<br> Keterangan :".$io['keterangan18']."<br> Catatan :".$io['catatan18']; 
						  	$msg .="<tr>
						      	<td style='text-align:center;'>". $oop1 ."</td>
						        <td style='text-align:center;'>". $oop2 ."</td>
						        <td style='text-align:left;'>". $oop3 ."</td>
						        <td style='text-align:left;'>". $oop4 ."</td>
						      </tr>
						      </tbody>

						      ";
					  	}
					  }

					 $msg .="
					</table>";
		$msg1 = "
				<center> <img src='http://korporaconsulting.com/wp-content/uploads/2018/04/Untitled-1cc.png'> <h2>Data KOSONG pada tanggal ".date('d-m-Y')." tidak ada sales yang mengisi kegiatan harian</h2></center>";

		foreach ($data123 as $io) {
		if ($io['tanggal_kegiatan'] == tanggal('helpers/tanggal_helper')) {
			if ($io['tanggal_kegiatan'] == tanggal('helpers/tanggal_helper')) {
	        	$this->email->from('alexjhosan11@gmail.com', 'Korpora Consulting | Data Summary Sales');
				$this->email->to('arif.antonius@gmail.com, annakorporaconsulting@gmail.com, alexjhosan19@gmail.com');
				$this->email->subject('Data Summary Sales');
				$this->email->message($msg);
			   }
			}else{
			   	$this->email->from('alexjhosan11@gmail.com', 'Korpora Consulting | Data Summary Sales');
				$this->email->to('arif.antonius@gmail.com, annakorporaconsulting@gmail.com, alexjhosan19@gmail.com');
				$this->email->subject('Data Summary Sales');
				$this->email->message($msg1);
			   }		
		}
		if ($this->email->send()) {
			return true;
		}
		 else{
		 	echo $this->email->print_debugger();
			die;
        }		
	}
	

}