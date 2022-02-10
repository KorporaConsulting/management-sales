        <!-- Begin Page Content -->
        <div class="container-fluid">


          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h2 class="m-0 font-weight-bold text-dark"><center>Report Kegiatan Harian Sales</center></h2>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                  <thead style="background-color: #193C7F; color: white;">
                    <tr>
                      <th>Tanggal Kegiatan</th>
                      <th>Nama Sales</th>
                      <th>Action</th> 
                   </tr>
                  </thead>

                 <tbody>
                  <?php foreach ($kegiatan as $b) {
                    echo "<tr>
                      <td>$b->tanggal_kegiatan
                      <td>$b->nama_sales
                      <td><center><button class='btn btn-light' style='color:blue;'>".anchor('skegiatan/detail/'.$b->id_kegiatan,'<i class="fas fa-fw fa-eye"></i>View')."</button></center></td>   
                      </tr>";
                    }
                  ?>
                  </tbody>

                  <tfoot style="background-color: #193C7F; color: white;">
                    <tr>
                      <th>Tanggal Kegiatan</th>
                      <th>Nama Sales</th>
                      <th>Action</th> 
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

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
  <script src="<?php echo base_url();?>assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url();?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url();?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url();?>assets/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="<?php echo base_url();?>assets/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="<?php echo base_url();?>assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="<?php echo base_url();?>assets/js/demo/datatables-demo.js"></script>

  <script>
    $('#dataTable').DataTable({
    ordering: false,
      initComplete: function() {
        this.api().columns(['0', '1']).every(function (){
          var column = this;
          var select = $('<select><option value=""></option></select>')
            .appendTo( $(column.header()).empty())
            .on( 'change', function(){
              var val = $.fn.dataTable.util.escapeRegex(
                    $(this).val()
                );
              column
                .search(val ? '^'+val+'$' : '', true, false)
                .draw();
            });
            column.data().unique().sort().each(function (d, j){
              select.append('<option value="'+d+'">'+d+'</option>')
            });
        });
      }
    });
  </script>

</body>

</html>
