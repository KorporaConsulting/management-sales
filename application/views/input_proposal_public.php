<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>     
    <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Update Pembayaran Public</h1>
          <?php echo form_open('publik/proposal_data_public') ?>
          <?php echo form_hidden('id_public',$this->uri->segment(3)); ?>

          <div class="form-group">
    		<label for="nmcust">Nama Customer</label>
    		<input type="text" class="form-control" name="nmcust" id="nmcust" aria-describedby="nmcust" required <?php echo form_input('nmcust',$kode1['nama_cust']);?>
  		  </div>

  		  <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" name="email" id="email" aria-describedby="email" required <?php echo form_input('email',$kode1['email']);?>
        </div>

        <div class="form-group">
          <label for="tgl_pembayaran">Tanggal Pembayaran</label>
          <input type="date" class="form-control" name="tgl_pembayaran" id="tgl_pembayaran" <?php echo form_input('tgl_pembayaran',$kode1['tgl_pembayaran']);?></input>
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
          <label for="keterangan">Keterangan</label>
          <textarea class="form-control" name="keterangan" id="keterangan" placeholder="Tambahankan Keterangan Disini" rows="3"
           <?php echo form_textarea('keterangan',$kode1['keterangan']);?></textarea>
        </div>

        <button type="input" class="btn btn-primary btn-lg btn-block">Simpan</button>
        <a type="cancel" href="<?php echo base_url('publik');?>" class="btn btn-danger btn-lg btn-block">Kembali</a>
        <?php echo form_close()?>
        </div>


        </div>
        <!-- /.container-fluid -->