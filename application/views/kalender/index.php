<html lang="en">

<head>
  <meta charset="utf-8">
  <title>My Event Calendar</title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>backend/css/style.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>backend/css/colorbox.css" />
  <script type="text/javascript" src="<?php echo base_url(); ?>backend/js/jquery-1.7.2.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>backend/js/jquery.colorbox-min.js"></script>
</head>

<body>
  <div id="evencal">
    <div class="calendar">
      <?php echo $notes ?>
    </div>
    <div class="event_detail">
      <h2 class="s_date">Detail Event <?php echo "$day $month $year"; ?></h2>
      <div class="detail_event">
        <?php
        if (isset($events)) {
          $i = 1;
          foreach ($events as $e) {
            if ($i % 2 == 0) {
              echo '<div class="info1"><h4>' . $e['time'] . '<img src="' . base_url() . 'backend/css/images/delete.png" class="delete" alt="" title="delete this event" day="' . $day . '" val="' . $e['id'] . '" /></h4><p>' . $e['nama_sales'] . ' <br> ' . $e['event'] . '</p></div>';
            } else {
              echo '<div class="info2"><h4>' . $e['time'] . '<img src="' . base_url() . 'backend/css/images/delete.png" class="delete" alt="" title="delete this event" day="' . $day . '" val="' . $e['id'] . '" /></h4><p>' . $e['nama_sales'] . ' <br> ' . $e['event'] . '</p></div>';
            }
            $i++;
          }
        } else {
          echo '<div class="message"><h4>No Event</h4><p>There\'s no event in this date</p></div>';
        }
        ?>
        <input type="button" name="add" value="Add Event" val="<?php echo $day; ?>" class="add_event" />
      </div>
    </div>
  </div>
  </div>
  <script>
    $(".detail").live('click', function() {
      $(".s_date").html("Detail Event for " + $(this).attr('val') + " <?php echo "$month $year"; ?>");
      var day = $(this).attr('val');
      var add = '<input type="button" name="add" value="Add Event" val="' + day + '" class="add_event"/>';
      $.ajax({
        type: 'post',
        dataType: 'json',
        url: "<?php echo site_url("evencal/detail_event"); ?>",
        data: {
          <?php echo "year: $year, mon: $mon"; ?>,
          day: day
        },
        success: function(data) {
          var html = '';
          if (data.status) {
            var i = 1;
            $.each(data.data, function(index, value) {
              if (i % 2 == 0) {
                html = html + '<div class="info1"><h4>' + value.time + '<img src="<?php echo base_url(); ?>backend/css/images/delete.png" class="delete" alt="" title="delete this event" day="' + day + '" val="' + value.id + '" /></h4><p>' + value.nama_sales + ' <br> ' + value.event + '</p></div>';
              } else {
                html = html + '<div class="info2"><h4>' + value.time + '<img src="<?php echo base_url(); ?>backend/css/images/delete.png" class="delete" alt="" title="delete this event" day="' + day + '" val="' + value.id + '" /></h4><p>' + value.nama_sales + ' <br> ' + value.event + '</p></div>';
              }
              i++;
            });
          } else {
            html = '<div class="message"><h4>' + data.title_msg + '</h4><p>' + data.msg + '</p></div>';
          }
          html = html + add;
          $(".detail_event").fadeOut("slow").fadeIn("slow").html(html);
        }
      });
    });
    $(".delete").live("click", function() {
      if (confirm('Are you sure delete this event ?')) {
        var deleted = $(this).parent().parent();
        var day = $(this).attr('day');
        var add = '<input type="button" name="add" value="Add Event" val="' + day + '" class="add_event"/>';
        $.ajax({
          type: 'POST',
          dataType: 'json',
          url: "<?php echo site_url("evencal/delete_event"); ?>",
          data: {
            <?php echo "year: $year, mon: $mon"; ?>,
            day: day,
            del: $(this).attr('val')
          },
          success: function(data) {
            if (data.status) {
              if (data.row > 0) {
                $('.d' + day).html(data.row);
              } else {
                $('.d' + day).html('');
                $(".detail_event").fadeOut("slow").fadeIn("slow").html('<div class="message"><h4>' + data.title_msg + '</h4><p>' + data.msg + '</p></div>' + add);
              }
              deleted.remove();
            } else {
              alert('an error for deleting event');
            }
          }
        });
      }
    });
    $(".add_event").live('click', function() {
      $.colorbox({
        overlayClose: false,
        href: '<?php echo site_url('evencal/add_event'); ?>',
        data: {
          year: <?php echo $year; ?>,
          mon: <?php echo $mon; ?>,
          day: $(this).attr('val')
        }
      });
    });
  </script>

  <footer class="sticky-footer bg-white">
    <div class="container my-auto">
      <div class="copyright text-center my-auto">
        <span>Copyright &copy; Customer Management Korpora Counsulting 2019</span>
      </div>
    </div>
  </footer>


  </div>
  <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->
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
  <script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url(); ?>assets/js/sb-admin-2.min.js"></script>




</body>

</html>