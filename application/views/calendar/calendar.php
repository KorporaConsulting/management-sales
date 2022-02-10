 <!--Full Calendar-->

 <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/css/sb-admin-2.min.css'; ?>">
 <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets1/font-awesome/css/font-awesome.min.css'; ?>">
 <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets1/plugins/fullcalendar/fullcalendar.css'; ?>">
 <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets1/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css'; ?>">
 <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets1/css/style.css'; ?>">



 <style type="text/css">
     .container {
         width: 400px;
         margin: auto;
     }

     th {
         padding: 10px;
         background-color: black;
         color: white;
         font-family: arial;
     }

     td {
         text-align: left;
         padding: 10px 0;
         background-color: white;
     }

     #red {
         color: red;
     }

     h1 {
         text-align: center;
         font-family: calibri
     }
 </style>


 <div class="container" style="
color: black;
  width:100%;
  background-color: #F8F9FC;">
     <div class="page-content-wrapper">
         <div class="page-content">
             <div class="alert notification" style="display: none;">
                 <button class="close" data-close="alert"></button>
                 <p></p>
             </div>
             <div class="row">
                 <div class="col-md-12">
                     <div class="portlet light bordered">
                         <div class="portlet-body">
                             <div class="table-toolbar">
                                 <div class="row">
                                     <div class="col-md-6">
                                         <div class="btn-group">
                                             <button class="btn btn-primary mb-2 add_calendar" data-toggle="modal" data-target="#create_modal" style="border-radius: 10px;"> CREATE NEW EVENT
                                                 <i class="fa fa-fw fa-plus"></i>
                                             </button>
                                             <br>
                                             <br>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <!-- Place -->
                             <div id="calendarIO"></div>
                             <div class="modal fade" id="create_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                 <div class="modal-dialog" role="document">
                                     <div class="modal-content">
                                         <form class="form-horizontal" method="POST" action="POST" id="form_create">
                                             <input type="hidden" name="calendar_id" value="0">
                                             <div class="modal-header">
                                                 <h4 class="modal-title" id="myModalLabel">Create calendar event</h4>
                                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                     <span aria-hidden="true">&times;</span>
                                                 </button>
                                             </div>

                                             <div class="modal-body">
                                                 <div class="form-group">
                                                     <div class="alert alert-danger" style="display: none;"></div>
                                                 </div>

                                                 <!-- Fungsi Create -->
                                                 <div class="form-group">
                                                     <label class="control-label">Nama Sales</label>
                                                     <input type="text" name="nama_sales" class="form-control" readonly value="<?= $user['name']; ?>">
                                                 </div>

                                                 <div class="form-group">
                                                     <label class="control-label">Deskripsi<span class="required"> * </span></label>
                                                     <textarea name="title" class="form-control" placeholder="Harap Isi" rows="3" maxlength="126" required></textarea>
                                                 </div>

                                                 <!--  <div class="form-group">
                                            <label class="control-label col-sm-2">Deskripsi</label>
                                            <div class="col-sm-10">
                                                <textarea name="description" rows="3" class="form-control"  placeholder="Enter description"></textarea>
                                            </div>
                                        </div> -->

                                                 <div class="form-group">
                                                     <label for="color" class="control-label">Warna</label>
                                                     <select name="color" class="form-control">
                                                         <option value="">Pilih</option>
                                                         <option style="color:#ADFF2F;" value="#ADFF2F"> Green Yellow</option>
                                                         <option style="color:#B0C4DE;" value="#B0C4DE"> Light Steel Blue</option>
                                                         <option style="color:#FFD700;" value="#FFD700"> Yellow</option>
                                                         <option style="color:#FF8C00;" value="#FF8C00"> Orange</option>
                                                         <option style="color:#FF0000;" value="#FF0000"> Red</option>
                                                         <option style="color:#00BFFF;" value="#00BFFF"> Deep Sky Blue</option>
                                                     </select>
                                                 </div>

                                                 <div class="form-group">
                                                     <label class="control-label">Start Date</label>
                                                     <input type="date" name="start_date" class="form-control" required>
                                                 </div>

                                                 <div class="form-group">
                                                     <label class="control-label">End Date</label>
                                                     <input type="date" name="end_date" class="form-control" required>
                                                 </div>

                                             </div>
                                             <div class="modal-footer">
                                                 <a href="javascript::void" class="btn btn-dark default" data-dismiss="modal">Cancel</a>
                                                 <button class="btn btn-danger delete_calendar" style="display: none; color:white;">Delete</button>
                                                 <button type="submit" class="btn btn-primary">Submit</button>
                                             </div>
                                         </form>
                                     </div>
                                 </div>
                             </div>
                             <!-- end place -->
                         </div>
                     </div>

                 </div>
             </div>
         </div>
     </div>
 </div>

 <!-- Footer -->
 <footer class="sticky-footer bg-white">
     <div class="container my-auto">
         <div class="copyright text-center my-auto">
             <span>Copyright &copy; Customer Management Korpora Counsultant <?= date('Y'); ?></span>
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
                 <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                 <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">×</span>
                 </button>
             </div>
             <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
             <div class="modal-footer">
                 <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                 <a class="btn btn-primary" href="<?= base_url('auth/logout'); ?>">Logout</a>
             </div>
         </div>
     </div>
 </div>


 <!-- Bootstrap core JavaScript-->
 <script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
 <script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

 <!-- Custom scripts for all pages-->
 <script src="<?php echo base_url(); ?>assets/js/sb-admin-2.min.js"></script>
 <script type="text/javascript" src="<?php echo base_url() . 'assets1/js/moment.min.js'; ?>"></script>
 <script type="text/javascript" src="<?php echo base_url() . 'assets1/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js'; ?>"></script>
 <script type="text/javascript" src="<?php echo base_url() . 'assets1/plugins/fullcalendar/fullcalendar.js'; ?>"></script>
 <script type="text/javascript">
     var get_data = '<?php echo $get_data; ?>';
     var backend_url = '<?php echo base_url(); ?>';


     $(document).ready(function() {
         $('.date-picker').datepicker();
         $('#calendarIO').fullCalendar({
             header: {
                 left: 'today',
                 center: 'prev, title, next',
                 right: 'month,basicWeek,basicDay'
             },
             defaultDate: moment().format('YYYY-MM-DD'),
             editable: true,
             eventLimit: true, // allow "more" link when too many events
             selectable: true,
             selectHelper: true,
             select: function(start, end) {
                 $('#create_modal input[name=start_date]').val(moment(start).format('YYYY-MM-DD'));
                 $('#create_modal input[name=end_date]').val(moment(end).format('YYYY-MM-DD'));
                 $('#create_modal').modal('show');
                 save();
                 $('#calendarIO').fullCalendar('unselect');
             },
             eventDrop: function(event, delta, revertFunc) { // si changement de position
                 editDropResize(event);
             },
             eventResize: function(event, dayDelta, minuteDelta, revertFunc) { // si changement de longueur
                 editDropResize(event);
             },
             eventClick: function(event, element) {
                 deteil(event);
                 editData(event);
                 deleteData(event);
             },
             events: JSON.parse[get_data]
            //   events: JSON.parse(get_data)
         });
     });

     $(document).on('click', '.add_calendar', function() {
         $('#create_modal input[name=calendar_id]').val(0);
         $('#create_modal').modal('show');
     })

     $(document).on('submit', '#form_create', function() {

         var element = $(this);
         var eventData;
         $.ajax({
             url: backend_url + 'calendar/save',
             type: element.attr('method'),
             data: element.serialize(),
             dataType: 'JSON',
             beforeSend: function() {
                 element.find('button[type=submit]').html('<i class="fa fa-spinner fa-spin" aria-hidden="true"></i>');
             },
             success: function(data) {
                 if (data.status) {
                     eventData = {
                         id: data.id,
                         nama_sales: $('#create_modal input[name=nama_sales]').val(),
                         title: $('#create_modal input[name=title]').val(),
                         description: $('#create_modal textarea[name=description]').val(),
                         start: moment($('#create_modal input[name=start_date]').val()).format('YYYY-MM-DD HH:mm:ss'),
                         end: moment($('#create_modal input[name=end_date]').val()).format('YYYY-MM-DD HH:mm:ss'),
                         color: $('#create_modal select[name=color]').val()
                     };
                     $('#calendarIO').fullCalendar('renderEvent', eventData, true); // stick? = true
                     $('#create_modal').modal(window.location = "calendar");
                     element[0].reset();
                     $('.notification').removeClass('alert-danger').addClass('alert-primary').find('p').html(data.notif);
                 } else {
                     element.find('.alert').css('display', 'block');
                     element.find('.alert').html(data.notif);
                 }
                 element.find('button[type=submit]').html('Submit');
             },
             error: function(jqXHR, textStatus, errorThrown) {
                 element.find('button[type=submit]').html('Submit');
                 element.find('.alert').css('display', 'block');
                 element.find('.alert').html('Wrong server, please save again');
             }
         });
         return false;
     })

     function editDropResize(event) {
         start = event.start.format('YYYY-MM-DD HH:mm:ss');
         if (event.end) {
             end = event.end.format('YYYY-MM-DD HH:mm:ss');
         } else {
             end = start;
         }

         $.ajax({
             url: backend_url + 'calendar/save',
             type: 'POST',
             data: 'calendar_id=' + event.id + '&title=' + event.title + '&start_date=' + start + '&end_date=' + end,
             dataType: 'JSON',
             beforeSend: function() {},
             success: function(data) {
                 if (data.status) {
                     $('.notification').removeClass('alert-danger').addClass('alert-primary').find('p').html('Data success update');
                 } else {
                     $('.notification').removeClass('alert-primary').addClass('alert-danger').find('p').html('Data cant update');
                 }

             },
             error: function(jqXHR, textStatus, errorThrown) {
                 $('.notification').removeClass('alert-primary').addClass('alert-danger').find('p').html('Wrong server, please save again');
             }
         });
     }

     function save() {
         $('#form_create').submit(function() {
             var element = $(this);
             var eventData;
             $.ajax({
                 url: backend_url + 'calendar/save',
                 type: element.attr('method'),
                 data: element.serialize(),
                 dataType: 'JSON',
                 beforeSend: function() {
                     element.find('button[type=submit]').html('<i class="fa fa-spinner fa-spin" aria-hidden="true"></i>');
                 },
                 success: function(data) {
                     if (data.status) {
                         eventData = {
                             id: data.id,
                             nama_sales: $('#create_modal input[name=nama_sales]').val(),
                             title: $('#create_modal input[name=title]').val(),
                             description: $('#create_modal textarea[name=description]').val(),
                             start: moment($('#create_modal input[name=start_date]').val()).format('YYYY-MM-DD HH:mm:ss'),
                             end: moment($('#create_modal input[name=end_date]').val()).format('YYYY-MM-DD HH:mm:ss'),
                             color: $('#create_modal select[name=color]').val()
                         };
                         $('#calendarIO').fullCalendar('renderEvent', eventData, true); // stick? = true
                         $('#create_modal').modal(window.location = "calendar");
                         element[0].reset();
                         $('.notification').removeClass('alert-danger').addClass('alert-primary').find('p').html(data.notif);
                     } else {
                         element.find('.alert').css('display', 'block');
                         element.find('.alert').html(data.notif);
                     }
                     element.find('button[type=submit]').html('Submit');
                 },
                 error: function(jqXHR, textStatus, errorThrown) {
                     element.find('button[type=submit]').html('Submit');
                     element.find('.alert').css('display', 'block');
                     element.find('.alert').html('Wrong server, please save again');
                 }
             });
             return false;
         })
     }

     function deteil(event) {
         $('#create_modal input[name=calendar_id]').val(event.id);
         $('#create_modal input[name=start_date]').val(moment(event.start).format('YYYY-MM-DD'));
         $('#create_modal input[name=end_date]').val(moment(event.end).format('YYYY-MM-DD'));
         $('#create_modal input[name=nama_sales]').val(event.nama_sales);
         $('#create_modal textarea[name=title]').val(event.title);
         $('#create_modal textarea[name=description]').val(event.description);
         $('#create_modal select[name=color]').val(event.color);
         $('#create_modal .delete_calendar').show();
         $('#create_modal').modal('show');
     }


     function editData(event) {
         $('#form_create').submit(function() {
             var element = $(this);
             var eventData;
             $.ajax({
                 url: backend_url + 'calendar/save',
                 type: element.attr('method'),
                 data: element.serialize(),
                 dataType: 'JSON',
                 beforeSend: function() {
                     element.find('button[type=submit]').html('<i class="fa fa-spinner fa-spin" aria-hidden="true"></i>');
                 },
                 success: function(data) {
                     if (data.status) {
                         event.title = $('#create_modal textarea[name=title]').val();
                         event.description = $('#create_modal textarea[name=description]').val();
                         event.start = moment($('#create_modal input[name=start_date]').val()).format('YYYY-MM-DD HH:mm:ss');
                         event.end = moment($('#create_modal input[name=end_date]').val()).format('YYYY-MM-DD HH:mm:ss');
                         event.color = $('#create_modal select[name=color]').val();
                         $('#calendarIO').fullCalendar('updateEvent', event);

                         $('#create_modal').modal(window.location = "calendar");
                         element[0].reset();
                         $('#create_modal input[name=calendar_id]').val(0)
                         $('.notification').removeClass('alert-danger').addClass('alert-primary').find('p').html(data.notif);
                     } else {
                         element.find('.alert').css('display', 'block');
                         element.find('.alert').html(data.notif);
                     }
                     element.find('button[type=submit]').html('Submit');
                 },
                 error: function(jqXHR, textStatus, errorThrown) {
                     element.find('button[type=submit]').html('Submit');
                     element.find('.alert').css('display', 'block');
                     element.find('.alert').html('Wrong server, please save again');
                 }
             });
             return false;
         })
     }

     function deleteData(event) {
         $('#create_modal .delete_calendar').on('click', function() {
             $.ajax({
                 url: backend_url + 'calendar/delete',
                 type: 'POST',
                 data: 'id=' + event.id,
                 dataType: 'JSON',
                 beforeSend: function() {},
                 success: function(data) {
                     if (data.status) {
                         $('#calendarIO').fullCalendar('removeEvents', event._id);
                         $('#create_modal').modal(window.location = "calendar");
                         $('#form_create')[0].reset();
                         $('#create_modal input[name=calendar_id]').val(0)
                         $('.notification').removeClass('alert-danger').addClass('alert-primary').find('p').html(data.notif);
                     } else {
                         $('#form_create').find('.alert').css('display', 'block');
                         $('#form_create').find('.alert').html(data.notif);
                     }
                 },
                 error: function(jqXHR, textStatus, errorThrown) {
                     $('#form_create').find('.alert').css('display', 'block');
                     $('#form_create').find('.alert').html('Wrong server, please save again');
                 }
             });
         })
     }
 </script>


 </body>

 </html>