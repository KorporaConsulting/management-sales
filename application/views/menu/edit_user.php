
  <!-- Begin Page Content -->
        <div class="container-fluid">

          <br>
          <br>
          <div class="card mb-3">
			  <h3 class="card-header">Edit User</h3>
			<div class="card-body">
          <?php echo form_open('menu/edit_user') ?>
          <?php echo form_hidden('id',$this->uri->segment(3)); ?>
			      <center><img src="http://korporaconsulting.com/wp-content/uploads/2018/04/Untitled-1cc.png" style="width: 500px 100%; height: 50px;"></center>
           	<div class="form-group"><br>
           		  <label>Nama Lengkap</label>
                  <input type="text" class="form-control form-control-user" id="name" name="name" readonly <?php echo form_input('name',$kode1['name']);?>
                  <?= form_error('name', '<small class="text-danger pl-3" >', '</small>'); ?>
                </div>
                <div class="form-group">
                  <label>Email</label>
                  <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Email Address" readonly <?php echo form_input('email',$kode1['email']);?>
                  <?= form_error('email', '<small class="text-danger pl-3" >', '</small>'); ?>
                </div>
                <div class="form-group">
                  <label>Jabatan</label>
                  <select name="id_role" id="id_role" class="form-control">
                  <option value="2">Pilih Jabatan</option>
                  <?php foreach ($menus as $m) : ?>
                    <option value="<?= $m['id'] ?>"><?= $m['role'] ?></option>
                  <?php endforeach; ?>
                  </select>
                </div>
                <button type="input" class="btn btn-primary float-right">Simpan</button>
                <a href="<?= base_url('menu/view_user'); ?>" class="btn btn-danger float-right">Kembali</a>
			  </div>
			</div>
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->