    <!-- Begin Page Content -->
        <div class="container-fluid">
		  <h1 style="text-align: center; font-family: arial; color: black;">PANDUAN</h1>	
          	<ul class="nav nav-tabs nav-pills nav-justified" id="myTab" role="tablist">
			  <li class="nav-item">
			    <a class="nav-link active" id="korporate-tab" data-toggle="tab" href="#korporate" role="tab" aria-controls="korporate" aria-selected="true" style="text-align: center;">Panduan Menu Korporate</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" id="public-tab" data-toggle="tab" href="#public" role="tab" aria-controls="public" aria-selected="false" style="text-align: center;">Panduan Menu Public</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" id="kalender-tab" data-toggle="tab" href="#kalender" role="tab" aria-controls="kalender" aria-selected="false" style="text-align: center;">Panduan Menu Pendapatan</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" id="harian-tab" data-toggle="tab" href="#harian" role="tab" aria-controls="harian" aria-selected="false" style="text-align: center;">Panduan Menu Harian Sales</a>
			  </li>
			</ul>
			<div class="tab-content" id="myTabContent">
			 <!-- Panduan Data Korporate  -->
			  <div class="tab-pane fade show active" id="korporate" role="tabpanel" aria-labelledby="korporate-tab">
			  	<h5 style="color: black;"><b>Data Korporate</b> merupakan database calon klien atau klien yang pernah anda hubungi kami. Anda dapat menginputkan data - data perusahaan yang valid dan pernah dihubungi oleh anda. Harap di data selalu diperbarui setiap ada perubahan</h5>
			  	<p style="text-align: center;">
				  <a class="btn btn-outline-primary mb-2" data-toggle="collapse" href="#tambah" role="button" aria-expanded="false" aria-controls="tambah">
				    Tambah Data
				  </a>
				  <a class="btn btn-outline-primary mb-2" data-toggle="collapse" href="#visit" role="button" aria-expanded="false" aria-controls="visit">
				    Visit
				  </a>
				  <a class="btn btn-outline-primary mb-2" data-toggle="collapse" href="#proposal" role="button" aria-expanded="false" aria-controls="proposal">
				    Proposal
				  </a>
				  <a class="btn btn-outline-primary mb-2" data-toggle="collapse" href="#edit" role="button" aria-expanded="false" aria-controls="edit">
				    Edit Data
				  </a>
				</p>
				<div class="collapse" id="tambah">
				  <div class="card card-body">
				  	<div class="row">
				  		<div class="col">
				  			<img src="<?= base_url();?>assets/img/panduan/tambah_korporate.PNG" width="100%">	
				  		</div>
				  		<div class="col">
				  			<h5>Keterangan Tambah Data Korporate</h5>
				  			<h6 style="font-size: 90%; color: black;">
				  				<ol>
				  					<li>
				  						Silahkan anda inputkan <b>Nama Merusahaan, Telpon, Email, Alamat</b> sesuai data perusahaan tersebut.
				  					</li>
				  					<li>
				  						<b>Tanggal Telpon</b> : Merupakan tanggal diinputnya data, sudah otomatis sesuai tanggal sistem.
				  					</li>
				  					<li>
				  						<b>Tanggal Followup</b> : Isikan tanggal berapa followup korporate tersebut.
				  					</li>
				  					<li>
				  						<b>Status</b> : Isikan sesuai statusnya.
				  					</li>
				  					<li>
				  						<b>Keterangan</b> : Tambahkan keterangan bila ada.
				  					</li>
				  				</ol>
				  			</h6>
				  		</div>	
				  	</div>				    
				  </div>
				</div>
				<div class="collapse" id="visit">
				  <div class="card card-body">
				    	<div class="row">
				  		<div class="col">
				  			<img src="<?= base_url();?>assets/img/panduan/visit_korporate.png" width="100%">	
				  		</div>
				  		<div class="col">
				  			<h5>Keterangan Visit</h5>
				  			<h6 style="font-size: 90%; color: black;">
				  				Fungsi visit merupakan pembaruan data dari followup ke visit, di isi bila anda sudah pernah melakukan visit ke perusahaan tersebut.
				  				<ol>
				  					<li>
				  						<b>Nama Perusahaan</b> : Sesuai data yang anda inputkan saat menambahkan data baru, tidak bisa di rubah kembali.
				  					</li>
				  					<li>
				  						<b>Tanggal Visit</b> : Isikan sesuai tanggal anda visit ke perusahaan tersebut.
				  					</li>
				  					<li>
				  						<b>Alamat Visit</b> : Isikan dimana anda tujuan anda saat.
				  					</li>
				  					<li>
				  						<b>Status</b> : Status tidak bisa diganti.
				  					</li>
				  					<li>
				  						<b>Keterangan</b> : Tambahkan keterangan bila ada.
				  					</li>
				  				</ol>
				  			</h6>
				  		</div>	
				  	</div>
				  </div>
				</div>
				<div class="collapse" id="proposal">
				  <div class="card card-body">
				    <div class="row">
				  		<div class="col">
				  			<img src="<?= base_url();?>assets/img/panduan/proposal_korporate.png" width="100%">	
				  		</div>
				  		<div class="col">
				  			<h5>Keterangan Proposal</h5>
				  			<h6 style="font-size: 90%; color: black;">
				  				Fungsi <b>Proposal</b> merupakan pembaruan apakah kita telah mengirimkan proposal pada perusahaan tersebut, di isi bila anda sudah mengirim sebuah proposal ke perusahaan tersebut.
				  				<ol>
				  					<li>
				  						<b>Nama Perusahaan</b> : Sesuai data yang anda inputkan saat menambahkan data baru, dapat anda rubah bila terdapat kesalahan.
				  					</li>
				  					<li>
				  						<b>Telpon</b> : Isikan nomor telpon perusahaan yang anda hubungi/dapat dihubungi.
				  					</li>
				  					<li>
				  						<b>Email</b> : Isikan tujuan email kepada perusahaan mana.
				  					</li>
				  					<li>
				  						<b>Tanggal Kirim Proposal</b> : Isikan tanggal tepat anda mengirimkan sebuah proposal.
				  					</li>
				  					<li>
				  						<b>Status Proposal</b> : Status proposal kita.
				  					</li>
				  					<li>
				  						<b>Keterangan</b> : Tambahkan keterangan bila ada.
				  					</li>
				  				</ol>
				  			</h6>
				  		</div>	
				  	</div>
				  </div>
				</div>
				<div class="collapse" id="edit">
				  <div class="card card-body">
				    <div class="row">
				  		<div class="col">
				  			<img src="<?= base_url();?>assets/img/panduan/edit_korporate.png" width="100%">	
				  		</div>
				  		<div class="col">
				  			<h5>Keterangan Edit</h5>
				  			<h6 style="font-size: 90%; color: black;">
				  				Fungsi <b>Edit</b> Untuk melakukan perubahan total pada setiap data visit, proposal. <b>Setiap fungsinya seperti yang telah di terangkan pada panduan visit dan proposal.</b>
				  			</h6>
				  		</div>	
				  	</div>
				  </div>
				</div>
			  </div>

			  <!-- Panduan Data Public -->
			  <div class="tab-pane fade" id="public" role="tabpanel" aria-labelledby="public-tab">
			  	<h5 style="color: black;"><b>Data Public</b> merupakan database perorangan saat seseorang mengikuti sebuah event, atau acara kami. Anda dapat menginputkan data - data orang yang telah melakukan registrasi. Harap di data selalu diperbarui setiap ada perubahan</h5>
			  	<p style="text-align: center;">
				  <a class="btn btn-outline-primary mb-2" data-toggle="collapse" href="#tambah" role="button" aria-expanded="false" aria-controls="tambah">
				    Tambah Data
				  </a>
				  <a class="btn btn-outline-primary mb-2" data-toggle="collapse" href="#proposal" role="button" aria-expanded="false" aria-controls="proposal">
				    Pembayaran
				  </a>
				  <a class="btn btn-outline-primary mb-2" data-toggle="collapse" href="#edit" role="button" aria-expanded="false" aria-controls="edit">
				    Edit Data
				  </a>
				</p>
				<div class="collapse" id="tambah">
				  <div class="card card-body">
				  	<div class="row">
				  		<div class="col">
				  			<img src="<?= base_url();?>assets/img/panduan/public/tambah_public.png" width="100%">	
				  		</div>
				  		<div class="col">
				  			<h5>Keterangan Tambah Data Public</h5>
				  			<h6 style="font-size: 90%; color: black;">
				  				<ol>
				  					<li>
				  						Silahkan anda inputkan <b>Nama Customer, Telpon, Alamat, Email, Training yang Diikuti</b> sesuai data customer tersebut.
				  					</li>
				  					<li>
				  						<b>Tanggal Followup</b> : Isikan tanggal berapa followup kepada customer tersebut.
				  					</li>
				  					<li>
				  						<b>Status</b> : Isikan sesuai statusnya.
				  					</li>
				  					<li>
				  						<b>Keterangan</b> : Tambahkan keterangan bila ada.
				  					</li>
				  				</ol>
				  			</h6>
				  		</div>	
				  	</div>				    
				  </div>
				</div>
				<div class="collapse" id="proposal">
				  <div class="card card-body">
				    <div class="row">
				  		<div class="col">
				  			<img src="<?= base_url();?>assets/img/panduan/public/proposal_public.png" width="100%">	
				  		</div>
				  		<div class="col">
				  			<h5>Keterangan Pembayaran Public</h5>
				  			<h6 style="font-size: 90%; color: black;">
				  				Fungsi <b>Pembayaran</b> merupakan pembaruan apakah customer telah melakukan pembayaran, apabila sudah melakukan pembayaran dapat melakukan update pada menu ini.
				  				<ol>
				  					<li>
				  						Silahkan anda inputkan <b>Nama Customer, Alamat</b> sesuai data customer tersebut.
				  					</li>
				  					<li>
				  						<b>Tanggal Bayar</b> : Isikan kapan Customer tersebut telah melakukan pembayaran.
				  					</li>
				  					<li>
				  						<b>Status</b> : Isikan status customer tersebut untuk melakukan update.
				  					</li>
				  					<li>
				  						<b>Keterangan</b> : Tambahkan keterangan bila ada.
				  					</li>
				  				</ol>
				  			</h6>
				  		</div>	
				  	</div>
				  </div>
				</div>
				<div class="collapse" id="edit">
				  <div class="card card-body">
				    <div class="row">
				  		<div class="col">
				  			<img src="<?= base_url();?>assets/img/panduan/public/edit_public.png" width="100%">	
				  		</div>
				  		<div class="col">
				  			<h5>Keterangan Edit Public</h5>
				  			<h6 style="font-size: 90%; color: black;">
				  				Fungsi <b>Edit</b> Untuk melakukan perubahan total pada data customer. <b>Setiap fungsinya seperti yang telah di terangkan pada panduan tambah data dan proposal.</b>
				  			</h6>
				  		</div>	
				  	</div>
				  </div>
				</div>
			  </div>

			  <!-- Panduan Data Kalender -->
			  <div class="tab-pane fade" id="kalender" role="tabpanel" aria-labelledby="kalender-tab">
			  	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			  	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			  	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			  	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			  	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			  	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			  </div>

			  <!-- Panduan Data Harian -->
			  <div class="tab-pane fade" id="harian" role="tabpanel" aria-labelledby="harian-tab">
			  	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			  	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			  	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			  	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			  	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			  	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			  </div>
			</div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->