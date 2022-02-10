<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>     
    <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Input Data Public</h1>

          <?php echo form_open_multipart('publik/tambah_data') ?>
        <div class="form-group">
    		<label for="nmsales">Nama Sales</label>
    		<input type="text" class="form-control" name="nmsales" id="nmsales" aria-describedby="nmsales" value="<?= $user['name']?>" readonly required>
  		  </div>

          <div class="form-group">
    		<label for="nmcust">Nama Customer</label>
    		<input type="text" class="form-control" name="nmcust" id="nmcust" aria-describedby="nmcust" placeholder="Silahkan Masukan Nama Customer" required>
  		  </div>

  		  <div class="form-group">
    		<label for="notelp">No. Telpon</label>
    		<input type="number" class="form-control" name="notelp" id="notelp" aria-describedby="notelp" placeholder="Silahkan Masukan No. Telpon" required>
  		  </div>

        <div class="form-group">
        <label for="alamat">Alamat</label>
        <input type="text" class="form-control" name="alamat" id="alamat" aria-describedby="alamat" placeholder="Silahkan Masukan Alamat">
        </div>

  		  <div class="form-group">
    		<label for="email">Email</label>
    		<input type="email" class="form-control" name="email" id="email" aria-describedby="email" placeholder="Silahkan Masukan Email">
  		  </div>

  		  <div class="form-group">
    		<label for="training_diinput">Training Yang Diikuti</label>
    		<input type="text" class="form-control" name="training_diinput" id="training_diinput" aria-describedby="training_diinput" placeholder="Silahkan Masukan Data Training" required>
  		  </div>

  		  <div class="form-group">
    		<label for="tglFollowup">Tanggal Follow Up</label>
    		<input type="date" class="form-control" name="tglFollowup" id="tglFollowup" aria-describedby="tglFollowup" required>
  		  </div>

  		  <div class="form-group">
    		<label for="status_publik">Status</label>
    			<select class="form-control" name="status_publik" id="exampleFormControlSelect1">
     			 <option>-Select-</option>
     			 <option>Follow Up</option>
     			 <option>Belum Di Follow Up</option>
           <option>DP</option>
           <option>Sudah Lunas</option>
   				</select>
  		  </div>

  		    <div class="form-group">
    			<label for="keterangan">Keterangan</label>
   				<textarea class="form-control" name="keterangan" id="exampleFormControlTextarea1" rows="3"></textarea>
  			</div>
  			<button type="input" class="btn btn-primary btn-lg btn-block">Simpan</button>
  			<a type="cancel" href="<?= base_url('publik');?>" class="btn btn-danger btn-lg btn-block">Kembali</a>
        <?php echo form_close()?>
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->