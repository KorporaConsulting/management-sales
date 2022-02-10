<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
  </div>
  <?php $id_user = $user['id']; ?>
  <?php $query_komisi = $this->db->query('SELECT id_user, sum(komisi_diterima) AS total FROM histori_pendapatan GROUP BY id_user');
  ?>

  <?php
  $query_korporate = $this->db->query('SELECT * FROM korporate');
  $query_public = $this->db->query('SELECT * FROM public');

  $query_pendapatan = $this->db->query('SELECT id, sum(pendapatan) AS total_pendapatan FROM user');
  $query_target = $this->db->query('SELECT id, sum(target) AS total FROM user');

  // $lala = $query_target->row_array();
  // print_r($query_target->result_array());
  ?>
  <div class="row">
    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Pendapatan Seluruh Sales</div>
              <?php if ($query_pendapatan->result() > $query_target->result()) : ?>
                <div class="h5 mb-0 font-weight-bold" style="color: green;">
                  Rp.
                  <?php
                  foreach ($query_pendapatan->result() as $riw) {
                    echo  number_format($riw->total_pendapatan, 0, ",", ".");
                  }
                  ?>
                </div>
              <?php else : ?>
                <div class="h5 mb-0 font-weight-bold" style="color: red;">
                  Rp.
                  <?php
                  foreach ($query_pendapatan->result() as $riw) {
                    echo  number_format($riw->total_pendapatan, 0, ",", ".");
                  }
                  ?>
                </div>

              <?php endif; ?>
            </div>
            <div class="col-auto">
              <i class="fas fa-calendar fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Target</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">Rp.
                <?php
                foreach ($query_target->result() as $row) {
                  echo  number_format($row->total, 0, ",", ".");
                }
                ?>
              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>



    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Database Korporate</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $query_korporate->num_rows(); ?></div>
            </div>
            <div class="col-auto">
              <i class="fas fa-building fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Database Public</div>
              <div class="row no-gutters align-items-center">
                <div class="col-auto">
                  <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $query_public->num_rows(); ?></div>
                </div>
              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">

      <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
      <div class="flash-datas" data-flashdata="<?= $this->session->flashdata('flasha'); ?>"></div>
      <?php if ($this->session->flashdata('flash')) : ?>
      <?php endif;  ?>
      <?php if ($this->session->flashdata('flasha')) : ?>
      <?php endif;  ?>

      <!-- Area Chart -->
      <div class="col">
        <div class="card shadow mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary" style="text-align: center;">Pencapaian</h6>
              <button class="btn btn-outline-primary float-right" data-toggle="modal" data-target="#data_History">Lihat History</button>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr style="background-color: #193C7F; color: white;">
                      <th>Nomor</th>
                      <th>Nama</th>
                      <th>Email</th>
                      <th>Target</th>
                      <th>Pendapatan</th>
                      <th>Sisa Target</th>
                      <th>Komisi Yang Harus Dibayarkan</th>
                      <th>Komisi Yang Diterima</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr style="background-color: #193C7F; color: white;">
                      <th>Nomor</th>
                      <th>Nama</th>
                      <th>Email</th>
                      <th>Target</th>
                      <th>Pendapatan</th>
                      <th>Sisa Target</th>
                      <th>Komisi Yang Harus Dibayarkan</th>
                      <th>Komisi Yang Diterima</th>
                      <th>Action</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php $i = 1;

                    foreach ($data as $io) : ?>
                      <tr style="color: black;">
                        <td><?php echo $i++ ?></td>
                        <td><?php echo $io['name']; ?></td>
                        <td><?php echo $io['email']; ?></td>
                        <td><?php echo number_format($io['target'], 0, ",", "."); ?></td>
                        <td><?php echo number_format($io['pendapatan'], 0, ",", "."); ?></td>
                        <?php if ($io['pendapatan'] < $io['target']) : ?>
                          <td style="color: red; font-weight: bold;">Rp. <?php echo number_format($io['target'] - $io['pendapatan'], 0, ",", "."); ?>-</td>
                        <?php else : ?>
                          <td style="color: green; font-weight: bold;">Rp. <?php echo number_format($io['pendapatan'] - $io['target'], 0, ",", "."); ?>+</td>
                        <?php endif ?>
                        <td>
                          Rp.
                          <?php
                          foreach ($query_komisi->result() as $riw) : ?>
                            <?php if ($io['id'] === $riw->id_user) : ?>
                              <?php echo number_format($riw->total, 0, ",", "."); ?>
                            <?php endif; ?>
                          <?php endforeach; ?>
                        </td>
                        <td>Komisi : <?php echo $io['komisi']; ?>% </td>
                        <td>
                          <div class="btn-group">
                            <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="fas fa-tasks"></i>
                            </button>
                            <div class="dropdown-menu">
                              <button class="dropdown-item" data-toggle="modal" data-target="#Komisimodal<?= $io['id'] ?>">Tambah/Update Komisi</button>
                            </div>
                          </div>
                        </td>
                      </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
      </div>


    </div>
  </div>
  <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<?php foreach ($data as $io) : ?>
  <!-- Modal Komisi -->
  <div class="modal fade" id="Komisimodal<?= $io['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah/Edit Komisi</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="<?= base_url('dashboard/tambahkomisi'); ?>" method="POST">
          <div class="modal-body">
            <input type="text" hidden name="id_user" value="<?= $io['id'] ?>" style="display:none;">
            <div class="form-group">
              <label for="exampleInputEmail1">Komisi Sales</label>
              <input type="number" class="form-control" name="komisi" value="<?= $io['komisi']; ?>" id="exampleInputEmail1" aria-describedby="komisiHelp" placeholder="25">
              <small id="komisiHelp" class="form-text text-muted">Masukan angka saja</small>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>
<?php endforeach; ?>


<!-- Modal History-->
<div class="modal fade" id="data_History" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">History</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table class="table table-striped table-hover">
          <thead>
            <tr>
              <td>Nomor</td>
              <td>Nama Sales</td>
              <td>Pendapatan</td>
              <td>Keterangan</td>
              <td>Tanggal Dibuat</td>
            </tr>
          </thead>
          <?php $i = 1;
          foreach ($histori as $his) : ?>
            <tbody>
              <tr>
                <td><?= $i++; ?></td>
                <td><?= $his['nama_sales']; ?></td>
                <td><?php echo number_format($his['pendapatan'], 0, ",", "."); ?></td>
                <td><?= $his['keterangan']; ?></td>
                <td><?= $his['date_created']; ?></td>
              </tr>
            </tbody>
          <?php endforeach ?>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>