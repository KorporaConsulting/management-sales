
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

          <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash');?>"></div>
          <div class="flash-datas" data-flashdata="<?= $this->session->flashdata('flasha');?>"></div>
    		<?php if($this->session->flashdata('flash')) : ?>
    		<?php endif;  ?>
    		<?php if($this->session->flashdata('flasha')) : ?>
    		<?php endif;  ?>


          <div class="row">
          	<div class="col-lg-6">
			  <a href="#" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newRole">Tambah Role Baru</a>          	
	          	<table class="table table-hover">
					  <thead>
					    <tr>
					      <th scope="col">No</th>
					      <th scope="col">Role</th>
					      <th scope="col"><center>Action</center></th>
					    </tr>
					  </thead>
					  <tbody>
					  	<?php $i = 1; ?>
					  	<?php foreach ($role as $r) : ?>
					    <tr>
					      <th scope="row"><?= $i; ?></th>
					      <td><?= $r['role']; ?></td>
					      <td>
					      	<center>
					        	<a href="<?php echo base_url('menu/roleAccess/').$r['id'];?>" class="badge badge-warning">Access</a>
					      		<a href="<?php echo base_url();?>menu/edit_role/<?= $r['id']?>" class="badge badge-success">Edit</a>
					      		<a href="<?= base_url();?>menu/hapus_role/<?= $r['id']?>" class="badge badge-danger hapus-data">Delete</a>
					      	</center>
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
		<div class="modal fade" id="newRole" tabindex="-1" role="dialog" aria-labelledby="newRoleLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header" style="background-color: blue;">
		        <h5 class="modal-title" id="newRoleLabel" style="color: white;">Tambah Menu Baru</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <form action="<?= base_url('menu/input_role'); ?>" method="post">
			      <div class="modal-body">
			        <div class="form-group">
			        	<label>Nama Role</label>
					    <input type="text" class="form-control" id="role" name="role" placeholder="Masukan Nama Role">
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
