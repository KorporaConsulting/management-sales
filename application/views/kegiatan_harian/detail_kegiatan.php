 <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"> <center>View Kegiatan <?php echo $kegiatan['nama_sales']; ?></center></h1>
          <?php echo form_hidden('id_kegiatan',$this->uri->segment(3)); ?>

        <div > 

          <h4>Tanggal Input : <?php echo ($kegiatan['tanggal_kegiatan']);?></h4>
          <h4>Nama Sales    : <?php echo ($kegiatan['nama_sales']);?></h4>
          <hr class="divider">
          <h4>Jam     : <?php echo ($kegiatan['waktu1']);?><br>
            Kegiatan  : <?php echo ($kegiatan['keterangan1']);?><br>
            Keterangan : <p><?php echo nl2br($kegiatan['catatan1']); ?></p>
          </h4>
          <hr class="divider">
          <h4>Jam     : <?php echo ($kegiatan['waktu2']);?><br>
            Kegiatan    : <?php echo ($kegiatan['keterangan2']);?><br>
            Keterangan : <p><?php echo nl2br($kegiatan['catatan2']); ?></p>
          </h4>
          <hr class="divider">
          <h4>Jam     : <?php echo ($kegiatan['waktu3']);?><br>
            Kegiatan    : <?php echo ($kegiatan['keterangan3']);?><br>
            Keterangan : <p><?php echo nl2br($kegiatan['catatan3']); ?></p>
          </h4>
          <hr class="divider">
          <h4>Jam     : <?php echo ($kegiatan['waktu4']);?><br>
            Kegiatan    : <?php echo ($kegiatan['keterangan4']);?><br>
            Keterangan : <p><?php echo nl2br($kegiatan['catatan4']); ?></p>
          </h4>
          <hr class="divider">
          <h4>Jam     : <?php echo ($kegiatan['waktu5']);?><br>
            Kegiatan    : <?php echo ($kegiatan['keterangan5']);?><br>
            Keterangan : <p><?php echo nl2br($kegiatan['catatan5']); ?></p>
          </h4>
          <hr class="divider">
          <h4>Jam     : <?php echo ($kegiatan['waktu6']);?><br>
            Kegiatan    : <?php echo ($kegiatan['keterangan6']);?><br>
            Keterangan : <p><?php echo nl2br($kegiatan['catatan6']); ?></p>
          </h4>
          <hr class="divider">
          <h4>Jam     : <?php echo ($kegiatan['waktu7']);?><br>
            Kegiatan    : <?php echo ($kegiatan['keterangan7']);?><br>
            Keterangan : <p><?php echo nl2br($kegiatan['catatan7']); ?></p>
          </h4>
          <hr class="divider">
          <h4>Jam     : <?php echo ($kegiatan['waktu8']);?><br>
            Kegiatan    : <?php echo ($kegiatan['keterangan8']);?><br>
            Keterangan : <p><?php echo nl2br($kegiatan['catatan8']); ?></p>
          </h4>
          <hr class="divider">
          <h4>Jam     : <?php echo ($kegiatan['waktu9']);?><br>
            Kegiatan    : <?php echo ($kegiatan['keterangan9']);?><br>
            Keterangan : <p><?php echo nl2br($kegiatan['catatan9']); ?></p>
          </h4>
          <hr class="divider">
          <h4>Jam       : <?php echo ($kegiatan['waktu10']);?><br>
            Kegiatan    :  <?php echo ($kegiatan['keterangan10']);?><br>
            Keterangan : <p><?php echo nl2br($kegiatan['catatan10']); ?></p>
          </h4>
          <hr class="divider">
          <h4>Jam       : <?php echo ($kegiatan['waktu11']);?><br>
            Kegiatan    : <?php echo ($kegiatan['keterangan11']);?><br>
            Keterangan : <p><?php echo nl2br($kegiatan['catatan11']); ?></p>
          </h4>
          <hr class="divider">
          <h4>Jam       : <?php echo ($kegiatan['waktu12']);?><br>
            Kegiatan    : <?php echo ($kegiatan['keterangan12']);?><br>
            Keterangan : <p><?php echo nl2br($kegiatan['catatan12']); ?></p>
          </h4>
          <hr class="divider">
          <h4>Jam       : <?php echo ($kegiatan['waktu13']);?><br>
            Kegiatan    : <?php echo ($kegiatan['keterangan13']);?><br>
            Keterangan : <p><?php echo nl2br($kegiatan['catatan13']); ?></p>
          </h4>
          <hr class="divider">
          <h4>Jam       : <?php echo ($kegiatan['waktu14']);?><br>
            Kegiatan    : <?php echo ($kegiatan['keterangan14']);?><br>
            Keterangan : <p><?php echo nl2br($kegiatan['catatan14']); ?></p>
          </h4>
          <hr class="divider">
          <h4>Jam       : <?php echo ($kegiatan['waktu15']);?><br>
            Kegiatan    : <?php echo ($kegiatan['keterangan15']);?><br>
            Keterangan : <p><?php echo nl2br($kegiatan['catatan15']); ?></p>
          </h4>
          <hr class="divider">
          <h4>Jam       : <?php echo ($kegiatan['waktu16']);?><br>
            Kegiatan    : <?php echo ($kegiatan['keterangan16']);?><br>
            Keterangan : <p><?php echo nl2br($kegiatan['catatan16']); ?></p>
          </h4>
          <hr class="divider">
          <h4>Jam       : <?php echo ($kegiatan['waktu17']);?><br>
            Kegiatan    : <?php echo ($kegiatan['keterangan17']);?><br>
            Keterangan : <p><?php echo nl2br($kegiatan['catatan17']); ?></p>
          </h4>
          <hr class="divider">
          <h4>Jam       : <?php echo ($kegiatan['waktu18']);?><br>
            Kegiatan    : <?php echo ($kegiatan['keterangan18']);?><br>
            Keterangan : <p><?php echo nl2br($kegiatan['catatan18']); ?></p>
          </h4>
          <hr class="divider">

        </div>

        <a type="cancel" href="<?php echo base_url('admin/report_kegiatan_harian'); ?>" class="btn btn-dark btn-block">Kembali
        </a>
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
      