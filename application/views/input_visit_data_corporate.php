<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>     
    <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Insert Jadwal Visit</h1>
          <?php echo form_open('corporate/insert_jadwal_visit') ?>
          <?php echo form_hidden('id_korporate',$this->uri->segment(3)); ?>
          <div class="form-group">
    		<label for="nmperusahaan">Nama Perusahaan</label>
    		<input type="text" class="form-control" name="nmperusahaan" id="nmperusahaan" aria-describedby="nmperusahaan" readonly required <?php echo form_input('nmperusahaan',$kode1['nama_perusahaan']);?>

  		  </div>

  		  <div class="form-group">
    		<label for="tglvisit">Tanggal Visit</label>
    		<input type="date" class="form-control" name="tglvisit" id="tglvisit" aria-describedby="tglvisit" required>
  		  </div>

  		  <div class="form-group">
          <label for="alamatvisit">Alamat Visit</label>
          <textarea class="form-control" name="alamatvisit" id="alamatvisit" placeholder="Tambahankan Alamat Visit Disini" rows="3"></textarea>
        </div>

  		  <div class="form-group">
    		<label for="status">Status</label>
    			<select class="form-control" name="status" id="status" required>
     			 <option value="Visit">Visit</option>
   				</select>
  		  </div>

  		    <div class="form-group">
    			<label for="keterangan">Keterangan</label>
   				<textarea class="form-control" name="keterangan" id="keterangan" rows="3" <?php echo form_textarea('keterangan',$kode1['keterangan'],array('placeholder'=>'Tambahkan Keterangan'));?></textarea>
  			</div>
  			<button type="input" class="btn btn-primary btn-lg btn-block">Simpan</button>
  			<a type="cancel" href="<?php echo base_url('corporate');?>" class="btn btn-danger btn-lg btn-block">Kembali</a>
        <?php echo form_close()?>
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->