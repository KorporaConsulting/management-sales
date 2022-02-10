<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>     
    <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Update Proposal</h1>
          <?php echo form_open('corporate/insert_proposal') ?>
          <?php echo form_hidden('id_korporate',$this->uri->segment(3)); ?>

          <div class="form-group">
    		<label for="nmperusahaan">Nama Perusahaan</label>
    		<input type="text" class="form-control" name="nmperusahaan" id="nmperusahaan" aria-describedby="nmperusahaan" required <?php echo form_input('nmperusahaan',$kode1['nama_perusahaan']);?>
  		  </div>

  		  <div class="form-group">
        <label for="notelp">Telpon</label>
        <input type="number" class="form-control" name="notelp" id="notelp" aria-describedby="notelp" required <?php echo form_input('notelp',$kode1['telpon']);?>
        </div>

        <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" name="email" id="email" aria-describedby="email" required <?php echo form_input('email',$kode1['email']);?>
        </div>

        <div class="form-group">
        <label for="tglKirimProposal">Tanggal Kirim Proposal</label>
        <input type="date" class="form-control" name="tglKirimProposal" id="tglKirimProposal" aria-describedby="tglKirimProposal"  required <?php echo form_input('tglKirimProposal',$kode1['tanggal_proposal']);?>
        </div>

        <div class="form-group">
        <label for="statusproposal">Status Proposal</label>
          <select class="form-control" name="statusproposal" id="statusproposal" required>
           <option>-Select-</option>
           <option value="Kirim Proposal">Kirim Proposal</option>
           <option value="Revisi Proposal">Revisi Proposal</option>
           <option value="Closing">CLOSING</option>
           <option value="Tidak Closing">Tidak Closing</option>
          </select>
        </div>
  		    <div class="form-group">
    			<label for="keterangan">Keterangan</label>
   				<textarea class="form-control" name="keterangan" id="keterangan" placeholder="Tambahankan Keterangan Disini" rows="3"
           <?php echo form_textarea('keterangan',$kode1['keterangan']);?></textarea>
  			</div>
  			<button type="input" class="btn btn-primary btn-lg btn-block">Simpan</button>
  			<a type="cancel" href="<?php echo base_url('corporate');?>" class="btn btn-danger btn-lg btn-block">Kembali</a>
        <?php echo form_close()?>
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->