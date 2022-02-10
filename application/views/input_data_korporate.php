<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>     
    <!-- Begin Page Content -->
    
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Input Data Korporate</h1>

        <?php echo form_open_multipart('corporate/tambah_data') ?>
        <div class="form-group">
    		<label for="nmsales">Nama Sales</label>
    		<input type="text" class="form-control" name="nmsales" id="nmsales" aria-describedby="nmsales" value="<?= $user['name']?>" readonly required>
  		  </div>

          <div class="form-group">
    		<label for="nmperusahaan">Nama Perusahaan</label>
    		<input type="text" class="form-control" name="nmperusahaan" id="nmperusahaan" aria-describedby="nmperusahaan" placeholder="Silahkan Masukan Nama Perusahaan">
  		  </div>

  		  <div class="form-group">
    		<label for="notelp">Telpon</label>
    		<input type="number" class="form-control" name="notelp" id="notelp" aria-describedby="notelp" placeholder="Silahkan Masukan No. Telpon" required>
  		  </div>

  		  <div class="form-group">
    		<label for="email">Email</label>
    		<input type="email" class="form-control" name="email" id="email" aria-describedby="email" placeholder="Silahkan Masukan Email">
  		  </div>

  		  <div class="form-group">
    		<label for="alamat">Alamat</label>
    		<input type="text" class="form-control" name="alamat" id="alamat" aria-describedby="alamat" placeholder="Silahkan Masukan Alamat" required>
  		  </div>

  		  <div class="form-group">
    		<label for="tglTelpon">Tanggal Telpon</label>
    		<input type="text" class="form-control" name="tglTelpon" id="tglTelpon" aria-describedby="tglTelpon" value="<?php echo tanggal('helpers/tanggal_helper'); ?>" readonly>
  		  </div>

  		  <div class="form-group">
    		<label for="tglFollowUp">Tanggal Follow Up</label>
    		<input type="date" class="form-control" name="tglFollowUp" id="tglFollowUp" aria-describedby="tglFollowUp" required>
  		  </div>

  		  <div class="form-group">
    		<label for="status">Status</label>
    			<select class="form-control" name="status" id="status" required>
           <option>-Select-</option>
     			 <option value="Follow Up">Follow Up</option>
     			 <option value="Reject">Reject</option>
     			 <option value="Kirim Proposal">Kirim Proposal</option>
     			 <option value="Visit">Visit</option>
   				</select>
  		  </div>

  		    <div class="form-group">
    			<label for="keterangan">Keterangan</label>
   				<textarea class="form-control" name="keterangan" id="keterangan" placeholder="Isi Keterangan" rows="3"></textarea>
  			</div>
  			<button type="submit" class="btn btn-primary btn-lg btn-block">Simpan</button>
  			<a type="cancel" href="<?php echo base_url('corporate');?>" class="btn btn-danger btn-lg btn-block">Kembali</a>
        <?php echo form_close()?>
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->