<title><?= $file ?></title>
<link href="<?= base_url('asset/css/sb-admin-2.min.css') ?>" rel="stylesheet">
<link rel="stylesheet">

<?php $this->load->view('admin/laporan/styleCetak') ?>

<!-- Content Row -->
<div class="card-body">
    <table class="table table-borderless">
        <tr class="text-center">
            <td colspan="4">
                <p class="h3">Laporan Penjualan</p>
                <p class="h5">Tiara Laundry</p>
                <small>
                    Jl. Pondok Baru Timur
                    RT. 12, RW. 11, No. 36, <br>
                    Jakarta Timur, 13770
                </small>
            </td>
        </tr>
    </table>

    <table class="table table-bordered" width="100%" cellspacing="0">>
        <tr>
            <th width='5%'>No</th>
            <th>Nama Sales</th>
            <th>Pendapatan</th>
        </tr>
        <?php
        $no = 1;
        foreach ($histori as $dlist) :
        ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $dlist->nama_sales ?></td>
                <td>
                    <span class="w-50 d-sm-inline-block">
                        Rp .
                    </span>
                    <span class="w-50 text-right d-sm-inline-block">
                        <?= number_format($dlist->pendapatan, 2) ?>
                    </span>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>

<div class="border-footer border-bottom border-primary"></div>
<small class="page"><span class="page-number">Hal : </span></small>
<small class="footer"><i>Diakses pada <?= date('d F Y, H:i:s') ?></i></small>