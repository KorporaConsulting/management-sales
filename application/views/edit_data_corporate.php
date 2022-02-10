<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">Edit Data Korporate</h1>
  <?php echo form_open('corporate/edit_data_corporate') ?>
  <?php echo form_hidden('id_korporate', $this->uri->segment(3)); ?>

  <div class="form-group">
    <label for="nmperusahaan">Nama Perusahaan</label>
    <input type="text" class="form-control" name="nmperusahaan" id="nmperusahaan" aria-describedby="nmperusahaan" required <?php echo form_input('nmperusahaan', $kode1['nama_perusahaan']); ?>>
  </div>

  <div class="form-group">
    <label for="notelp">Telpon</label>
    <input type="number" class="form-control" name="notelp" id="notelp" aria-describedby="notelp" required <?php echo form_input('notelp', $kode1['telpon']); ?> </div>

    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" class="form-control" name="email" id="email" aria-describedby="email" required <?php echo form_input('email', $kode1['email']); ?> </div>

      <div class="form-group">
        <label for="alamat">Alamat</label>
        <input type="text" class="form-control" name="alamat" id="alamat" aria-describedby="alamat" required <?php echo form_input('alamat', $kode1['alamat']); ?> </div>

        <div class="form-group">
          <label for="tglTelpon">Tanggal Telpon</label>
          <input type="text" class="form-control" name="tglTelpon" id="tglTelpon" aria-describedby="tglTelpon" readonly required <?php echo form_input('tglTelpon', $kode1['tanggal_telpon']); ?> </div>

          <div class="form-group">
            <label for="tglFollowUp">Tanggal Follow Up</label>
            <input type="date" class="form-control" name="tglFollowUp" id="tglFollowUp" aria-describedby="tglFollowUp" required <?php echo form_input('tglFollowUp', $kode1['tanggal_followup']); ?> </div>

            <div class="form-group">
              <label for="keterangan">Keterangan</label>
              <textarea class="form-control" name="keterangan" id="keterangan" rows="3" <?php echo form_textarea('keterangan', $kode1['keterangan']); ?></textarea>
        </div>

        <div class="form-group">
        <label for="tglvisit">Tanggal Visit</label>
        <input type="date" class="form-control" name="tglvisit" id="tglvisit" aria-describedby="tglvisit" <?php echo form_input('tglvisit', $kode1['tanggal_visit']); ?>
        </div>

        <div class="form-group">
          <label for="alamatvisit">Alamat Visit</label>
          <textarea class="form-control" name="alamatvisit" id="alamatvisit" placeholder="Tambahankan Alamat Visit Disini" rows="3" <?php echo form_textarea('alamatvisit', $kode1['alamat_visit']); ?></textarea>
            </div>

            <div class="form-group">
              <label for="tglKirimProposal">Tanggal Kirim Proposal</label>
              <input type="date" class="form-control" name="tglKirimProposal" id="tglKirimProposal" aria-describedby="tglKirimProposal" <?php echo form_input('tglKirimProposal', $kode1['tanggal_proposal']); ?> </div>

              <div class="form-group">
                <label for="statusproposal">Status Proposal</label>
                <select class="form-control" name="statusproposal" id="statusproposal" required>
                  <option>-Select-</option>
                  <option value="Follow Up">Follow Up</option>
                  <option value="Visit">Visit</option>
                  <option value="Kirim Proposal">Kirim Proposal</option>
                  <option value="Revisi Proposal">Revisi Proposal</option>
                  <option value="Closing">CLOSING</option>
                  <option value="Tidak Closing">Tidak Closing</option>
                </select>
              </div>


              <button type="input" class="btn btn-primary btn-lg btn-block">Simpan</button>
              <a type="cancel" href="<?php echo base_url('corporate'); ?>" class="btn btn-danger btn-lg btn-block">Kembali</a>
              <?php echo form_close() ?>
            </div>
            <!-- /.container-fluid -->

          </div>
          <!-- End of Main Content -->