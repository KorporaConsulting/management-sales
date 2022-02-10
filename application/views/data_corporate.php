     <!-- Begin Page Content -->
     <div class="container-fluid">
       <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
       <div class="flash-datas" data-flashdata="<?= $this->session->flashdata('flasha'); ?>"></div>
       <?php if ($this->session->flashdata('flash')) : ?>
       <?php endif;  ?>
       <?php if ($this->session->flashdata('flasha')) : ?>
       <?php endif;  ?>



       <button class="btn btn-primary btn-lg mb-3" data-toggle="modal" data-target="#inputKorporate">Tambah Data <i class="fas fa-fw fa-plus"></i></button>

       <!-- DataTales Example -->
       <!-- <?php /**echo $this->flashdata->**/ ?>-->
       <div class="card shadow mb-4">
         <div class="card-header py-3">
           <h2 class="m-0 font-weight-bold text-dark">
             <center>Data Korporate</center>
           </h2>
         </div>
         <div class="card-body">
           <div class="table-responsive">
             <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
               <thead>
                 <tr style="background-color: #193C7F; color: white;">
                   <th>Tgl Telpon</th>
                   <th>Nama Sales</th>
                   <th>Informasi</th>
                   <th>Tanggal Follow Up</th>
                   <th>Action</th>
                 </tr>
               </thead>

               <tbody>
                 <?php foreach ($korporate as $b) : ?>
                   <tr>
                     <td><?php echo $b['tanggal_telpon']; ?></td>
                     <td><?php echo $b['nama_sales']; ?></td>
                     <td>Nama Perusahaan : <?php echo $b['nama_perusahaan']; ?> <br>Nomor Telpon : <?php echo $b['telpon']; ?><br>Email : <?php echo $b['email']; ?> <br> Alamat : <?php echo $b['alamat']; ?> <br>Keterangan : <?php echo $b['keterangan']; ?> <br>Status : <?php echo $b['status']; ?> </td>
                     <td><?php echo $b['tanggal_followup']; ?></td>
                     <td>
                       <center>
                         <a class="btn btn-success col-12" href="tel:+<?= $b['telpon']; ?>"><i class="fa fas fa-phone-square-alt"></i> Telpon</a>
                         <a href="<?= base_url(); ?>corporate/visit_corporate/<?= $b['id_korporate']; ?>" class="badge badge-primary col-12">Visit</a><br>
                         <a href="<?= base_url(); ?>corporate/proposal_corporate/<?= $b['id_korporate']; ?>" class="badge badge-primary col-12">Proposal</a><br>
                         <a href="<?= base_url(); ?>corporate/edit_corporate/<?= $b['id_korporate']; ?>" class="badge badge-primary col-12">Edit</a><br>
                         <a href="<?= base_url(); ?>corporate/hapus/<?= $b['id_korporate']; ?>" class="badge badge-danger col-12 hapus-data">Hapus</a>
                       </center>
                     </td>

                   </tr>
                 <?php endforeach; ?>

               </tbody>

               <tfoot>
                 <tr style="background-color: #193C7F; color: white;">
                   <th>Tgl Telpon</th>
                   <th>Nama Sales</th>
                   <th>Informasi</th>
                   <th>Tanggal Follow Up</th>
                   <th>Action</th>
                 </tr>
               </tfoot>
             </table>
           </div>
         </div>
       </div>



     </div>
     <!-- /.container-fluid -->

     <!-- Modal Input Korporate -->
     <div class="modal fade bd-example-modal-lg" id="inputKorporate" tabindex="-1" role="dialog" aria-labelledby="inputKorporateLabel" aria-hidden="true">
       <div class="modal-dialog modal-lg " role="document">
         <div class="modal-content">
           <div class="modal-header">
             <h5 class="modal-title" id="inputKorporateLabel">Input Data Korporate</h5>
             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
             </button>
           </div>
           <form method="post" action="<?php echo base_url('corporate/tambah_data'); ?>">
             <div class="modal-body">

               <div class="form-group">
                 <label for="nmsales">Nama Sales</label>
                 <input type="text" class="form-control" name="nmsales" id="nmsales" aria-describedby="nmsales" value="<?= $user['name'] ?>" readonly required>
               </div>

               <div class="form-group">
                 <label for="nmperusahaan">Nama Perusahaan</label>
                 <input type="text" class="form-control" name="nmperusahaan" id="nmperusahaan" aria-describedby="nmperusahaan" placeholder="Silahkan Masukan Nama Perusahaan" required>
               </div>

               <div class="form-group">
                 <label for="notelp">Telpon</label>
                 <input type="number" class="form-control" name="notelp" id="notelp" aria-describedby="notelp" placeholder="Silahkan Masukan No. Telpon" required>
               </div>

               <div class="form-group">
                 <label for="email">Email</label>
                 <input type="email" class="form-control" name="email" id="email" aria-describedby="email" placeholder="Silahkan Masukan Email" required>
               </div>

               <div class="form-group">
                 <label for="alamat">Alamat</label>
                 <input type="text" class="form-control" name="alamat" id="alamat" aria-describedby="alamat" placeholder="Silahkan Masukan Alamat" required>
               </div>

               <div class="form-group">
                 <label for="tglTelpon">Tanggal Telpon</label>
                 <input type="text" class="form-control" name="tglTelpon" id="tglTelpon" aria-describedby="tglTelpon" value="<?php echo tanggal('helpers/tanggal_helper'); ?>" readonly>
               </div>

               <div class="form-group">
                 <label for="tglFollowUp">Tanggal Follow Up</label>
                 <input type="date" class="form-control" name="tglFollowUp" id="tglFollowUp" aria-describedby="tglFollowUp" required>
               </div>

               <div class="form-group">
                 <label for="status">Status</label>
                 <select class="form-control" name="status" id="status" required>
                   <option>-Select-</option>
                   <option value="Follow Up">Follow Up</option>
                   <option value="Reject">Reject</option>
                   <option value="Kirim Proposal">Kirim Proposal</option>
                   <option value="Visit">Visit</option>
                 </select>
               </div>

               <div class="form-group">
                 <label for="keterangan">Keterangan</label>
                 <textarea class="form-control" name="keterangan" id="keterangan" placeholder="Tambahankan Keterangan Disini" rows="3"></textarea>
               </div>

             </div>
             <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
               <button type="submit" class="btn btn-primary">Save changes</button>
             </div>
           </form>
         </div>
       </div>
     </div>


     </div>

     <!-- Footer -->
     <footer class="sticky-footer bg-white">
       <div class="container my-auto">
         <div class="copyright text-center my-auto">
           <span>Copyright &copy; Customer Management Korpora Consulting <?php echo date('Y'); ?></span>
         </div>
       </div>
     </footer>
     <!-- End of Footer -->


     </div>
     <!-- End of Main Content -->


     </div>
     <!-- End of Content Wrapper -->

     </div>
     <!-- End of Page Wrapper -->

     <!-- Scroll to Top Button-->
     <a class="scroll-to-top rounded" href="#page-top">
       <i class="fas fa-angle-up"></i>
     </a>

     <!-- Logout Modal-->
     <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
       <div class="modal-dialog" role="document">
         <div class="modal-content">
           <div class="modal-header">
             <h5 class="modal-title" id="exampleModalLabel">Yakin Ingin Keluar?</h5>
             <button class="close" type="button" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">×</span>
             </button>
           </div>
           <div class="modal-body">Pilih "Keluar" di bawah ini jika Anda siap untuk mengakhiri sesi Anda saat ini.</div>
           <div class="modal-footer">
             <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
             <a class="btn btn-primary" href="<?= base_url('auth/logout'); ?>">Keluar</a>
           </div>
         </div>
       </div>
     </div>

     <!-- Bootstrap core JavaScript-->
     <script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
     <script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

     <!-- Core plugin JavaScript-->
     <script src="<?php echo base_url(); ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

     <!-- Custom scripts for all pages-->
     <script src="<?php echo base_url(); ?>assets/js/sb-admin-2.min.js"></script>

     <!-- Page level plugins -->
     <script src="<?php echo base_url(); ?>assets/vendor/datatables/jquery.dataTables.min.js"></script>
     <script src="<?php echo base_url(); ?>assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

     <!-- Page level custom scripts -->
     <script src="<?php echo base_url(); ?>assets/js/demo/datatables-demo.js"></script>

     <!-- Baru Ditambahkan Tanggal 06 November 2019 Sweet Alert Percobaan -->
     <script src="<?php echo base_url(); ?>assets/css/sweetalert2.all.min.js"></script>

     <!--Sweetalert2 -->
     <script src="<?= base_url(); ?>assets/sweetalert2/sweetalert2.all.min.js"></script>
     <script src="<?= base_url(); ?>assets/sweetalert2/alexscript.js "></script>

     <script>
       const swalWithBootstrapButtons = Swal.mixin({
         customClass: {
           confirmButton: 'btn btn-success',
           cancelButton: 'btn btn-danger'
         },
         buttonsStyling: false
       })

       swalWithBootstrapButtons.fire({
         title: 'Yakin Ingin Menghapus Data?',
         text: "Merupakan data dari <?php echo $korporate['nama_sales']; ?> pada tanggal <?php echo ($korporate['tanggal_telpon']); ?>",
         icon: 'warning',
         showCancelButton: true,
         confirmButtonText: 'Ya, Hapus Data Ini!',
         cancelButtonText: 'Ticak, Kembali!',
         reverseButtons: true
       }).then((result) => {
         if (result.value) {
           swalWithBootstrapButtons.fire(
             'Terhapus!',
             'File yang Kamu Pilih Telah Terhapus.',
             'success'
           )
         } else if (
           /* Read more about handling dismissals below */
           result.dismiss === Swal.DismissReason.cancel
         ) {
           swalWithBootstrapButtons.fire(
             'Cancelled',
             'File Kamu Tidak Jadi di Hapus, dan Tetap Tersimpan :)',
             'error'
           )
         }
       })
     </script>

     <script>
       $('#dataTable').DataTable({
         ordering: false,
         initComplete: function() {
           this.api().columns(['0', '1', '3']).every(function() {
             var column = this;
             var select = $('<select><option value=""></option></select>')
               .appendTo($(column.header()).empty())
               .on('change', function() {
                 var val = $.fn.dataTable.util.escapeRegex(
                   $(this).val()
                 );
                 column
                   .search(val ? '^' + val + '$' : '', true, false)
                   .draw();
               });
             column.data().unique().sort().each(function(d, j) {
               select.append('<option value="' + d + '">' + d + '</option>')
             });
           });
         }
       });
     </script>

     </body>

     </html>