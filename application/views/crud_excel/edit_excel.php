<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>                     
          <?php echo form_open('corporate/simpan_edit_excel') ?>
            <div class="container-fluid">
                <form action="">
                  <div class="form-group">
                    <input type="text" name="id_data" class="form-control" value="<?php echo $data['id'] ?>" hidden>
                  </div>
                  <div class="form-group">
                    <label for="PerusahaanExcel">Nama Perusahaan</label>
                    <input type="text" name="nama_perusahaan" class="form-control" id="PerusahaanExcel" aria-describedby="emailHelp" <?php echo form_input('nama_perusahaan',$data['nama_perusahaan']);?>
                  </div>
                  <div class="form-group">
                    <label for="TelponExcel">Nomor Telpon</label>
                    <input type="text" name="telp_pic" class="form-control" id="TelponExcel"<?php echo form_input('telp_pic',$data['no_telp']);?>
                  </div>
                  <div class="form-group">
                    <label for="PICExcel">PIC</label>
                    <input type="text" name="pic" class="form-control" id="PICExcel" <?php echo form_input('pic',$data['pic']);?>
                  </div>
                  <div class="form-group">
                    <label for="emailPICExcel">Email PIC</label>
                    <input type="text" name="email_pic" class="form-control" id="emailPICExcel" <?php echo form_input('email_pic',$data['email_pic']);?>
                  </div>
                  <div class="form-group">
                    <label for="IndsuExcel">Industri</label>
                    <input type="text" name="industri" class="form-control" id="IndsuExcel" <?php echo form_input('industri',$data['industri']);?>
                  </div>
                  <button type="submit" class="btn btn-primary float-right">Simpan</button>
                  <a href="<?php echo base_url('corporate');?>" class="btn btn-danger float-right">Kembali</a>
                </form>
            </div>
            <?php echo form_close()?>
          </div>