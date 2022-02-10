
  <!-- Begin Page Content -->
        <div class="container-fluid">

          <br>
          <br>
          <div class="card mb-3">
			  <h3 class="card-header">Edit Role</h3>
			<div class="card-body">
          <?php echo form_open('menu/input_edit_role') ?>
          <?php echo form_hidden('id',$this->uri->segment(3)); ?>
			      <center><img src="http://korporaconsulting.com/wp-content/uploads/2018/04/Untitled-1cc.png" style="width: 500px 100%; height: 50px;"></center>
           	<div class="form-group"><br>
           		  <label>Nama Role</label>
                  <input type="text" class="form-control form-control-user" id="roles" name="roles" <?php echo form_input('user_role',$kode1['role']);?>
                </div>
                <button type="submit" class="btn btn-primary float-right">Simpan</button>
                <a href="<?= base_url('menu/role'); ?>" class="btn btn-danger float-right">Kembali</a>
			  </div>
			</div>
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->