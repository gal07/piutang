<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url() ?>assets/images/ava.png">
    <title>History | Aplikasi Pencatatan Hutang</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?= base_url() ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?= base_url() ?>assets/css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="<?= base_url();?>assets/css/colors/default-dark.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<style>
.user-profile .profile-text a{
    color:#26c6da !important;
}
</style>
</head>

<body class="fix-header card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                  <a class="navbar-brand" href="<?= base_url('beranda') ?>">
                      <!-- Logo icon -->
                      <b>
                        <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                        <!-- Dark Logo icon -->
                        <img src="<?= base_url() ?>assets/images/ava.png" width="50px"; height="50px"; alt="homepage" class="dark-logo" />
                        <!-- Light Logo icon -->
                        <img src="<?= base_url() ?>assets/images/logo-light-icon.png" alt="homepage" class="light-logo" />
                    </b>
                    <!--End Logo icon -->
                    <!-- Logo text -->
                    <span>
                     <!-- dark Logo text -->
                     <img src="<?= base_url() ?>assets/images/textjne.png" width="150px"; height="40px"; alt="homepage" class="dark-logo" />
                     <!-- Light Logo text -->
                     <img src="<?= base_url() ?>assets/images/logo-light-text.png" class="light-logo" alt="homepage" /></span> </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto mt-md-0">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                        <li class="nav-item"> <a class="nav-link sidebartoggler hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- User profile -->
                <div class="user-profile" style="background: url(<?= base_url();?>assets/jne_min.jpeg) no-repeat;">
                    <!-- User profile image -->
                    <div class="profile-img"> <img src="<?= base_url();?>assets/avatar_jne.jpeg" alt="user" /> </div>
                    <!-- User profile text-->
                    <div class="profile-text"> <a href="#" class=" u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"><?= $this->session->userdata("nama").' - '.$this->session->userdata("username")?></a>
                        
                    </div>
                </div>
                <!-- End User profile text-->
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                <ul id="sidebarnav">
                    <li class="nav-small-cap">PERSONAL</li>
                        <li><a class=" waves-effect waves-dark" href="<?= base_url('beranda') ?>"><i class="mdi mdi-gauge"></i>Beranda</a></li>
                        <li><a class=" waves-effect waves-dark" href="<?= base_url('datacustomer') ?>"><i class="mdi mdi-account-card-details"></i>Data Customer</a></li>
                        <li><a class=" waves-effect waves-dark" href="<?= base_url('dataadmin') ?>"><i class="mdi mdi-account-card-details"></i>Data Admin</a></li>
                        <li><a class=" waves-effect waves-dark" href="<?= base_url('money') ?>"><i class="mdi mdi-cash-multiple"></i>Transaksi</a></li>
                        <li><a class=" waves-effect waves-dark" href="<?= base_url('createcustomer') ?>"><i class="mdi mdi-account-multiple-plus"></i>Buat Data Customer</a></li>
                        <?php if($this->session->userdata('role') == '1'): ?>
                        <li><a class=" waves-effect waves-dark" href="<?= base_url('createaccount') ?>"><i class="mdi mdi-account-plus"></i>Buat Akun</a></li>
                        <?php endif; ?>
                        <li><a class=" waves-effect waves-dark" href="<?= base_url('logout') ?>"><i class="mdi mdi-human-greeting"></i>Log Out</a></li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 col-8 align-self-center">
                      <h3 class="text-themecolor m-b-0 m-t-0">Data History</h3>
                      <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="<?= base_url('beranda') ?>">Home</a></li>
                          <li class="breadcrumb-item active">Dashboard</li>
                      </ol>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Data History</h4>
                                <br>
                                <h6>Nama : <?= $customer_info[0]['nama'] ?></h6>
                                <h6>Alamat : <?= $customer_info[0]['alamat'] ?></h6>
                                <h6>No Hp : <?= $customer_info[0]['no_telp'] ?></h6>

                                <?php if ($this->session->flashdata('deleteSukses')): ?>
                                <div class="alert alert-success"><?= $this->session->flashdata('deleteSukses') ?></div>
                                <?php elseif ($this->session->flashdata('deleteGagal')): ?>
                                <div class="alert alert-danger"><?= $this->session->flashdata('deleteGagal') ?></div>
                                <?php elseif ($this->session->flashdata('update')): ?>
                                <div class="alert alert-success"><?= $this->session->flashdata('update') ?></div>
                                <?php elseif ($this->session->flashdata('noupdate')): ?>
                                <div class="alert alert-danger"><?= $this->session->flashdata('noupdate') ?></div>
                                <?php endif; ?>

                                <div class="table-responsive m-t-40">
                                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>No </th>
                                                <th>Tanggal</th>
                                                <th>Jenis Transaksi</th>
                                                <th>Nominal</th>
                                                <th>Diskon</th>
                                                <th>Total Hutang</th>
                                                <th>Total Piutang</th>
                                                <th>Input By</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                             foreach($customer as $value): ?>
                                            <tr>
                                                <td> <a class="delete" href="<?= base_url('/deletehistory?id='.$customer_info[0]['no_telp'].'&target='.$value['id_history'].'') ?>" style="color:red" data-toggle="tooltip" data-placement="top" title="delete history ini"> <i class="mdi mdi-close-outline"></i></a> </td>
                                                <td><?= $no ?></td>
                                                <td><?= date("d-m-Y h:i", strtotime($value['tanggal'])) ?></td>
                                                <td><?= (!empty($value['peminjaman']) ? 'Hutang' : 'Pembayaran') ?></td>
                                                <td>
                                                  <?php if (!empty($value['peminjaman'])): ?>
                                                    <?= 'Rp. '.number_format($value['peminjaman'],0,",",".") ?>
                                                  <?php else: ?>
                                                    <?= 'Rp. '.number_format($value['pembayaran'],0,",",".") ?>
                                                  <?php endif; ?>
                                                </td>
                                                <td><?php if (!empty($value['peminjaman'])): ?>
                                                  <?= $value['diskon'].'%' ?>
                                                <?php else: ?>
                                                  <?= '0%' ?>
                                                <?php endif; ?></td>
                                                <td><?= 'Rp. '.number_format($value['utang'],0,",",".") ?></td>
                                                <td><?= 'Rp. '.number_format($value['piutang'],0,",",".") ?></td>
                                                <td><?= $value['input_by'] ?></td>
                                            </tr>
                                            <?php
                                            $no++;
                                           endforeach; ?>
                                        </tbody>
                                    </table>
                                    <a href="<?= base_url('/datacustomer') ?>" class="btn btn-info">Back</a>
                                    <a href="<?= base_url('/deletehistory?id='.$customer_info[0]['no_telp'].'&target=') ?>" class="btn btn-danger">Delete All History</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer"> © <?php echo date('Y')?> ARIF </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="<?= base_url() ?>assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?= base_url() ?>assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="<?= base_url() ?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?= base_url() ?>assets/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="<?= base_url() ?>assets/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="<?= base_url() ?>assets/js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="<?= base_url() ?>assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="<?= base_url() ?>assets/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!--Custom JavaScript -->
    <script src="<?= base_url() ?>assets/js/custom.min.js"></script>
    <!-- This is data table -->
    <script src="<?= base_url() ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <!-- start - This is for export functionality only -->
    <script src="<?= base_url() ?>assets/js/dataTables.buttons.min.js"></script>
    <script src="<?= base_url() ?>assets/js/buttons.flash.min.js"></script>
    <script src="<?= base_url() ?>assets/js/jszip.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="<?= base_url() ?>assets/js/buttons.html5.min.js"></script>
    <script src="<?= base_url() ?>assets/js/buttons.print.min.js"></script>
    <!-- end - This is for export functionality only -->
    <script>
    $(document).ready(function() {

        $(".delete").click(function(){
            var r = confirm("Are You Sure delete this row ?");
            if (r == true) {
            return true;
            } else {
            return false;
            }
        });


        $('#myTable').DataTable();
        $(document).ready(function() {
            var table = $('#example').DataTable({
                "columnDefs": [{

                    "visible": false,
                    "targets": 2
                }],
                "order": [
                    [2, 'asc']
                ],
                "displayLength": 25,
                "drawCallback": function(settings) {
                    var api = this.api();
                    var rows = api.rows({
                        page: 'current'
                    }).nodes();
                    var last = null;
                    api.column(2, {
                        page: 'current'
                    }).data().each(function(group, i) {
                        if (last !== group) {
                            $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                            last = group;
                        }
                    });
                }
            });
            // Order by the grouping
            $('#example tbody').on('click', 'tr.group', function() {
                var currentOrder = table.order()[0];
                if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                    table.order([2, 'desc']).draw();
                } else {
                    table.order([2, 'asc']).draw();
                }
            });
        });
    });
    $('#example23').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'csv', 'excel', 'pdf', 'print'
        ]
    });
    </script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="<?= base_url() ?>assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>
