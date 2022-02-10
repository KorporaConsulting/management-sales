<!-- Begin Page Content -->
<div class="container-fluid">

	<div class="container">
		<div class="card">
			<div class="card-body">
				<form method="post" action="<?php echo base_url('menu/tambah_target_user'); ?>">
					<div class="form-group">
						<input type="text" name="id" class="form-control" id="namaExample" aria-describedby="emailHelp" value="<?= $kode1['id']; ?>" readonly hidden>
					</div>
					<div class="form-group">
						<label for="namaExample">Nama Sales</label>
						<input type="text" name="name" class="form-control" id="namaExample" aria-describedby="emailHelp" value="<?= $kode1['name']; ?>" readonly>
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Email</label>
						<input type="email" class="form-control" id="exampleInputPassword1" name="email" value="<?= $kode1['email'] ?>" readonly>
					</div>
					<div class="form-group">
						<label for="targetExample">Target</label>
						<input type="number" class="form-control" id="targetExample" name="target_capai" placeholder="Contoh = 500000" value="<?php echo $kode1['target']; ?>">
						<span>Ketikan angka saja</span>
					</div>
					<button type="submit" class="btn btn-primary float-right">Simpan</button>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->