 <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"> <center>View Data Korporate by :<?php echo $korporate['nama_sales']; ?></center></h1>
          <?php echo form_hidden('id_korporate',$this->uri->segment(3)); ?>

        <div > 

          <h4>Nama Sales : <?php echo ($korporate['nama_sales']);?> <br>
            Tanggal Telpon    : <?php echo ($korporate['tanggal_telpon']);?></h4>
          <hr class="divider">
          <h4>Nama Perusahaan    : <?php echo ($korporate['nama_perusahaan']);?><br>
            Telpon    : <?php echo ($korporate['telpon']);?><br>
            Email  : <?php echo ($korporate['email']);?><br>
            Alamat     : <?php echo ($korporate['alamat']);?>
          </h4>
          <hr class="divider">
          <h4>Tanggal Follow Up     : <?php echo ($korporate['tanggal_followup']);?><br>
            Tanggal Proposal     : <?php echo ($korporate['tanggal_proposal']);?><br>
            Tanggal Visit     : <?php echo ($korporate['tanggal_visit']);?><br>
            Alamat Visit    : <?php echo ($korporate['alamat_visit']);?>
            
          </h4>
          <hr class="divider">
          <h4>
            Status    : <?php echo ($korporate['status']);?><br>
            Keterangan    : <?php echo ($korporate['keterangan']);?>
          </h4>
          <hr class="divider">
        </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
      <a type="cancel" href="<?php echo base_url('admin');?>" class="btn btn-dark btn-lg">Kembali</a>