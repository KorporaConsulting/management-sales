        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

          <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash');?>"></div>
          <div class="flash-datas" data-flashdata="<?= $this->session->flashdata('flasha');?>"></div>
    		<?php if($this->session->flashdata('flash')) : ?>
    			<?php else: ?><?php $this->session->flashdata('flasha')?>
    				
    		<?php endif;  ?>


          <div class="row">
          	<div class="col-lg-8">
          		<?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>

          		<?= $this->session->flashdata('message'); ?>
			  <a href="#" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newMenuModal">Tambah Menu Baru</a>          	
	          	<table class="table table-hover">
					  <thead>
					    <tr>
					      <th scope="col">No</th>
					      <th scope="col">Menu</th>
					      <th scope="col">Action</th>
					    </tr>
					  </thead>
					  <tbody>
					  	<?php $i = 1; ?>
					  	<?php foreach ($menu as $m) : ?>
					    <tr>
					      <th scope="row"><?= $i; ?></th>
					      <td><?= $m['menu']; ?></td>
					      <td>
					      	<a href="<?= base_url();?>menu/edit_menu_management/<?= $m['id']?>" class="badge badge-primary">Edit</a>
					      	<a href="<?= base_url();?>menu/hapus1/<?= $m['id']?>" class="badge badge-danger hapus-data">Delete</a>
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
		<div class="modal fade" id="newMenuModal" tabindex="-1" role="dialog" aria-labelledby="newMenuModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header" style="background-color: blue;">
		        <h5 class="modal-title" id="newMenuModalLabel" style="color: white;">Tambah Menu Baru</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <form action="<?= base_url('menu'); ?>" method="post">
			      <div class="modal-body">
			        <div class="form-group">
			        	<label>Nama Menu</label>
					    <input type="text" class="form-control" id="menu" name="menu" placeholder="Isi Nama Menu">
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