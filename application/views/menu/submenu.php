	<style type="text/css">
		.table-container {
			overflow: auto;
		}
	</style>
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>


          <div class="row">
          	<div class="col-lg table-responsive">
          		<?php if (validation_errors()): ?>
          			<div class="alert alert-danger" role="alert">
          				<?php echo validation_errors(); ?>
          			</div>
          		<?php endif; ?>

          		<?= $this->session->flashdata('message'); ?>
			  <a href="#" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newSubMenuModal">Tambah Submenu Baru</a>          	
	          	<table class="table table-hover">
					  <thead>
					    <tr>
					      <th scope="col">No</th>
					      <th scope="col">Title</th>
					      <th scope="col">Menu</th>
					      <th scope="col">Url</th>
					      <th scope="col">Icon</th>
					      <th scope="col">Active</th>
					      <th scope="col">Action</th>
					    </tr>
					  </thead>
					  <tbody>
					  	<?php $i = 1; ?>
					  	<?php foreach ($subMenu as $sm) : ?>
					    <tr>
					      <th scope="row"><?= $i; ?></th>
					      <td><?= $sm['title']; ?></td>
					      <td><?= $sm['menu']; ?></td>
					      <td><?= $sm['url']; ?></td>
					      <td><?= $sm['icon']; ?></td>
					      <td><center><?= $sm['is_active'];?></center></td>
					      <td>
					      	<a href="#" class="badge badge-primary">Edit</a>
					      	<a href="#" class="badge badge-danger">Delete</a>
					      </td>
					    </tr>
					    <?php $i++; ?>
						<?php endforeach; ?>
					  </tbody>
					</table>
          	</div>

          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Modal -->
		<div class="modal fade" id="newSubMenuModal" tabindex="-1" role="dialog" aria-labelledby="newSubMenuModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="newSubMenuModalLabel">Tambah Sub Menu Baru</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <form action="<?= base_url('menu/submenu'); ?>" method="post">
			      <div class="modal-body">
			        <div class="form-group">
			        	<label>Title</label>
					    <input type="text" class="form-control" id="title" name="title" placeholder="Submenu title">
				  </div>
					<div class="form-group">
						<label>User Akses</label>
						<select name="menu_id" id="menu_id" class="form-control">
							<option value="">Pilih Menu</option>
							<?php foreach ($menu as $m) : ?>
								<option value="<?= $m['id'] ?>"><?= $m['menu'] ?></option>
							<?php endforeach; ?>
						</select>
					</div>	
			        <div class="form-group">
			        	<label>Url</label>
					    <input type="text" class="form-control" id="url" name="url" placeholder="Submenu url">
				    </div>
			        <div class="form-group">
			        	<label>Icon</label>
					    <input type="text" class="form-control" id="icon" name="icon" placeholder="Submenu icon">
				    </div>
				    <div class="custom-control custom-checkbox">
					  <input type="checkbox" class="custom-control-input" name="is_active" id="is_active" value="1">
					  <label class="custom-control-label" for="is_active">Aktif?</label>
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
