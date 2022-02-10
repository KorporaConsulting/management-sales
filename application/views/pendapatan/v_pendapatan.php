<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Content Row -->
	<button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#tambah_pendapatan">Tambah Pendapatan</button>
	<div class="row">
		<?php $id_user = $user['id']; ?>
		<?php $query_komisi = $this->db->query('SELECT id_user, sum(komisi_diterima) AS total FROM histori_pendapatan GROUP BY id_user');
		?>
		<!-- Area Chart -->
		<div class="col">
			<h6 class="m-0 font-weight-bold text-primary" style="text-align: center;">Histori Pendapatan</h6>
			<h4 style="text-align: center; color: black; font-weight: bold;">
				Total Pendapatanku : Rp.<?php echo number_format($user['pendapatan'], 0, ",", "."); ?> |
				Target : Rp.<?php echo number_format($user['target'], 0, ",", "."); ?> |
				<?php if ($user['pendapatan'] < $user['target']) : ?>
					Sisa Target : <strong style="color: red;">Rp.<?php echo number_format($user['target'] - $user['pendapatan'], 0, ",", "."); ?>-</strong></p>
				<?php else : ?>
					Sisa Target : <strong style="color: green;">Rp.<?php echo number_format($user['pendapatan'] - $user['target'], 0, ",", "."); ?>+</strong></h4>
		<?php endif ?>
		<h3 style="text-align: center; color:green; font-weight:700;">KOMISI</h3>
		<h3 style="text-align: center; color:green; font-weight:700;">
			Rp.
			<?php
			foreach ($query_komisi->result() as $riw) : ?>
				<?php if ($id_user === $riw->id_user) : ?>
					<?php echo number_format($riw->total, 0, ",", "."); ?>
				<?php endif; ?>
			<?php endforeach; ?>

		</h3>
		</div>

		<div class="table-responsive">
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<thead>
					<tr style="background-color: #193C7F; color: white;">
						<th style="width: 1%;">Nomor</th>
						<th style="width: 20%;">Nama</th>
						<th style="width: 15%;">Email</th>
						<th style="width: 25%;">Pendapatan</th>
						<th style="width: 25%;">Keterangan</th>
						<th style="width: 25%;">Bukti Transfer</th>
						<th style="width: 20%;">Tanggal dibuat</th>
					</tr>
				</thead>
				<tbody>
					<?php $i = 1;
					foreach ($dana as $io) : ?>
						<tr style="color: black;">
							<td><?php echo $i++; ?></td>
							<td><?php echo $io['nama_sales']; ?></td>
							<td><?php echo $io['email']; ?></td>
							<td style="color: green; font-weight: bold;">Rp. <?php echo number_format($io['pendapatan'], 0, ",", "."); ?></td>
							<td><?php echo $io['keterangan']; ?></td>
							<td><img src="<?php echo base_url(); ?>assets/img/<?php echo $io['bukti_transaksi']; ?>" width="50%"></td>
							<td><?php echo $io['date_created']; ?></td>
						</tr>
					<?php endforeach ?>
				</tbody>
			</table>
		</div>
	</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<!-- Modal -->
<div class="modal fade" id="tambah_pendapatan" tabindex="-1" role="dialog" aria-labelledby="tambah_pendapatanLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form method="post" action="<?php echo base_url('pendapatan/tambah'); ?>" enctype="multipart/form-data">
					<div class="form-group" hidden>
						<label for="exampleInputEmail1">Id User</label>
						<input type="text" class="form-control" name="id_user" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $user['id']; ?>" readonly>
					</div>
					<div class="form-group">
						<label for="nameSalesExample">Nama</label>
						<input type="text" class="form-control" name="nama_sales" id="nameSalesExample" aria-describedby="namaSales" value="<?php echo $user['name']; ?>" readonly>
					</div>
					<div class="form-group" hidden>
						<label for="emailExample">Email</label>
						<input type="email" class="form-control" name="email" id="emailExample" value="<?php echo $user['email']; ?>" readonly>
					</div>
					<input type="text" name="komisi_diterima" value="<?php echo $user['komisi'] / 100; ?>">
					<div class="form-group">
						<label for="pendapatanExample">Pendapatan</label>
						<input type="number" class="form-control" name="pendapatan" id="pendapatanExample" required>
						<p><span>Harap ketikan angka saja, tidak dengan simbol seperti . , - dll.</span></p>
					</div>
					<div class="form-group">
						<label for="keteranganExample">Keterangan</label>
						<textarea type="textarea" class="form-control" name="keterangan" id="keteranganExample"></textarea>
					</div>
					<div class="form-group">
						<label for="buktiTransaksi">Bukti Transaksi</label>
						<input type="file" class="form-control" name="bukti_transaksi" id="buktiTransaksi" required>
					</div>
					<div class="form-group">
						<label for="tanggalExample">Tanggal</label>
						<input type="text" class="form-control" id="tanggalExample" name="tanggal" value="<?php echo date('d-m-Y'); ?>" readonly>
					</div>
					<div class="form-group" hidden>
						<label for="pendapatanKitaExample">Total Pendapatan Saya</label>
						<input type="number" class="form-control" id="pendapatanKitaExample" value="<?php echo $user['pendapatan']; ?>" name="total_pendapatan">
					</div>

			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
				<button type="submit" class="btn btn-primary">Simpan</button>
				</form>
			</div>
		</div>
	</div>
</div>