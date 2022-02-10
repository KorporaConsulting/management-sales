<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>     
    <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Edit Data Publik</h1>
          <?php echo form_open('publik/edit_data_public') ?>
          <?php echo form_hidden('id_public',$this->uri->segment(3)); ?>

        <div class="form-group">
    		<label for="nmcust">Nama Customer</label>
    		<input type="text" class="form-control" name="nmcust" id="nmcust" aria-describedby="nmcust" readonly required <?php echo form_input('nmcust',$kode1['nama_cust']);?>
  		  </div>

  		  <div class="form-group">
    		<label for="notelp">Telpon</label>
    		<input type="number" class="form-control" name="notelp" id="notelp" aria-describedby="notelp" required <?php echo form_input('notelp',$kode1['telpon']);?>
  		  </div>

        <div class="form-group">
        <label for="alamat">Alamat</label>
        <input type="text" class="form-control" name="alamat" id="alamat" aria-describedby="alamat" required <?php echo form_input('alamat',$kode1['alamat']);?>
        </div>

  		  <div class="form-group">
    		<label for="email">Email</label>
    		<input type="email" class="form-control" name="email" id="email" aria-describedby="email" required <?php echo form_input('email',$kode1['email']);?>
  		  </div>

  		  <div class="form-group">
    		<label for="training_diinput">Training Yang Diikuti</label>
    		<input type="text" class="form-control" name="training_diinput" id="training_diinput" aria-describedby="training_diinput" required <?php echo form_input('training_diinput',$kode1['training']);?>
  		  </div>

        <div class="form-group">
        <label for="status_publik">Status</label>
          <select class="form-control" name="status_publik" id="exampleFormControlSelect1" <?php echo form_input('status_publik',$kode1['status_pembayaran']);?>>
           <option>-Select-</option>
           <option value="Follow Up">Follow Up</option>
           <option value="Belum di Follow Up">Belum Di Follow Up</option>
           <option value="DP">DP</option>
           <option value="Sudah Lunas">Sudah Lunas</option>
          </select>
        </div>

        <div class="form-group">
          <label for="tgl_pembayaran">Tanggal Pembayaran</label>
          <input type="date" class="form-control" name="tgl_pembayaran" id="tgl_pembayaran" <?php echo form_input('tgl_pembayaran',$kode1['tgl_pembayaran']);?></input>
        </div>

        <div class="form-group">
        <label for="tglFollowup">Tanggal Followup</label>
        <input type="date" class="form-control" name="tglFollowup" id="tglFollowup" aria-describedby="tglFollowup" <?php echo form_input('tglFollowup',$kode1['tgl_followup']);?>
        </div>

         <div class="form-group">
          <label for="keterangan">Keterangan</label>
          <textarea class="form-control" name="keterangan" id="exampleFormControlTextarea1" rows="3" <?php echo form_textarea('keterangan',$kode1['keterangan']);?></textarea>
        </div>


  			<button type="input" class="btn btn-primary btn-lg btn-block">Simpan</button>
  			<a type="cancel" href="<?php echo base_url('publik');?>" class="btn btn-danger btn-lg btn-block">Kembali</a>
        <?php echo form_close()?>
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->