
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Role Access : <?= $role['role']; ?></h1>

          <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash');?>"></div>
          <div class="flash-datas" data-flashdata="<?= $this->session->flashdata('flasha');?>"></div>
    		<?php if($this->session->flashdata('flash')) : ?>
    		<?php endif;  ?>
    		<?php if($this->session->flashdata('flasha')) : ?>
    		<?php endif;  ?>


          <div class="row">
          	<div class="col-lg-6">

          		<?= $this->session->flashdata('message'); ?>


	          	<table class="table table-hover">
					  <thead>
					    <tr>
					      <th scope="col">No</th>
					      <th scope="col">Menu</th>
					      <th scope="col"><center>Access</center></th>
					    </tr>
					  </thead>
					  <tbody>
					  	<?php $i = 1; ?>
					  	<?php foreach ($menu as $r) : ?>
					    <tr>
					      <th scope="row"><?= $i; ?></th>
					      <td><?= $r['menu']; ?></td>
					      <td>
					      	<center>
					      		<div class="form-check">
							  		<input class="form-check-input" type="checkbox" <?= check_access($role['id'], $r['id']); ?> data-role="<?= $role['id']; ?>" data-menu="<?= $r['id']; ?>">
								</div>
							</center>
					      </td>
					    </tr>
					    <?php $i++; ?>
						<?php endforeach; ?>
					  </tbody>
					</table>
					<a href="<?= base_url();?>menu/role" class="btn btn-primary float-right">Kembali</a>
          	</div>

          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->