<?php include('../../php/checkLogin.php'); ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="../../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../../plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../../plugins/summernote/summernote-bs4.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <!-- Sweetalert -->
  <link rel="stylesheet" href="../../plugins/sweetalert2/sweetalert2.min.css">
  <link rel="stylesheet" href="../../plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index.php" class="brand-link">
      <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Manage</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../../php/logout.php" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Logout</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Manage </h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <table id="manage_table" class="table table-bordered table-striped responsive">
          <thead>
            <tr>
              <th>title</th>
              <th>year</th>
              <th>type</th>
              <th>poster</th>
              <th>manage</th>
            </tr>
          </thead>
        </table>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.5
    </div>
  </footer>
  <div id="modal_edit" class="modal fade" id="modal-default">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Default Modal</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="POST" action="../../php/manage_omdb.php?action=edit">
            <label>title</label>
            <input type="text" id="title_txt" name="title_txt" class="form-control mb-2">
            <input type="hidden" id="imdbID" name="imdbID" class="form-control mb-2">
            <label>year</label>
            <input type="text" id="year_txt" name="year_txt" class="form-control mb-2">
            <label>poster <label style="color: red;">*url</label></label>
            <input type="text" id="post_url" name="post_url" class="form-control mb-2">
          </div>
          <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" onclick="handleEdit()">Save changes</button>
          </div>
          </form>
         
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<div>

</div>
<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../../plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../../plugins/chart.js/Chart.min.js"></script>
<!-- jQuery Knob Chart -->
<script src="../../plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../../plugins/moment/moment.min.js"></script>
<script src="../../plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../../plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- DataTables -->
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- Sweetalert -->
<script src="../../plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../../dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<script>
    $(document).ready(function() {
        $.get('../../php/manage_omdb.php',{"action": "show"},function(res) {
            var json = JSON.parse(res)
            console.log(json)
            $('#manage_table').DataTable({
              data: json,
              columns: [
                { data: "title",
                  className: "titleClass"
                },
                { data: "year",
                  className: "yearClass"
                },
                { data: "type"},
                { data: 'poster',
                  render: function (data) {
                    return '<img class="imgClass" src="' + data + '" height="50px" width="50px" >';
                  }
                },
                {
                  data: 'imdbID',
                  targets: -1,
                  render:  function (data) {
                    return '<button id="btn_edit" class="btn btn-primary" onclick="toModal(this, \''+data+'\')">Edit</button> \
                            <button class="btn btn-danger" onclick="handleDelete(\''+data+'\')">Delete</button>';
                  }
                }
      
              ],

              "responsive": true,
              "autoWidth": true,
              });
        })
      
       
    })
    function toModal(e, id) {
      console.log(id)
      // console.log($(e).parent().parent().find('td.titleClass').text())
      var target = $(e).parent().parent()
      var title = target.find('td.titleClass').text();
      var year = target.find('td.yearClass').text();

      var img = target.find('img.imgClass').attr('src')

      $('#modal_edit').modal()
      $('#modal_edit').find('#title_txt').val(title)
      $('#modal_edit').find('#imdbID').val(id)
      $('#modal_edit').find('#year_txt').val(year)
      $('#modal_edit').find('#post_url').val(img)
    }
    function handleEdit() {
      var title_txt = $('#modal_edit').find('#title_txt').val()
      var imdbID = $('#modal_edit').find('#imdbID').val()
      var year_txt = $('#modal_edit').find('#year_txt').val()
      var post_url = $('#modal_edit').find('#post_url').val()
      console.log(post_url)
      $.post('../../php/manage_omdb.php?action=edit', {
        title_txt, imdbID, year_txt, post_url
      }, function (res) {
        console.log(res)
        if (res === "successfully") {
          $('#modal_edit').modal('hide');
          Swal.fire({
            icon: 'success',
            title: 'Successfully'
          }).then(res => {
            location.reload();

          }).cath(err => {
            console.log(err)
          })
        }
      })
    }

    function handleDelete(imdbID) {
      Swal.fire({
            icon: 'warning',
            title: 'Are you sure',
            text: 'You want to Delete?',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
          }).then(res => {
            if (res.value === true) {
              $.post('../../php/manage_omdb.php?action=delete', {imdbID}, 
              function (res) {
              console.log(res)
              if (res == "successfully") {
                Swal.fire({
                  icon: 'success',
                  title: 'DeleteSuccess'
                }).then(res => {
                  location.reload();

                }).cath(err => {
                  console.log(err)
                })
              }
            })
            }
          }).cath(err => {
            console.log(err)
          })
    
    }
</script>
</body>
</html>
