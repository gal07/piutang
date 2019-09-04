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
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url();?>assets/images/ava.png">
    <title>Buat Akun | Aplikasi Pencatatan Hutang</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?= base_url();?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Vector CSS -->
    <link href="<?= base_url();?>assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="<?= base_url();?>assets/css/style.css" rel="stylesheet">
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
                    <a class="navbar-brand" href="<?= base_url('beranda') ?> ">
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
            <!-- Bottom points-->
            <!-- End Bottom points-->
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
               <br>
               <div class="row">
                    <div class="col-lg-12">
                    <?php if ($this->session->flashdata('success')): ?>
                    <div class="alert alert-success"><?= $this->session->flashdata('success') ?></div>
                    <?php elseif ($this->session->flashdata('fail')): ?>
                    <div class="alert alert-danger"><?= $this->session->flashdata('fail') ?></div>
                    <?php elseif ($this->session->flashdata('adaakun')): ?>
                    <div class="alert alert-danger"><?= $this->session->flashdata('adaakun') ?></div>
                    <?php endif; ?>
                        <div class="card card-outline-info">
                            <div class="card-header">
                                <h4 class="m-b-0 text-white">Buat Akun</h4>
                            </div>
                            <div class="card-body">
                            <?php echo form_open('pages/SaveNewAccount') ;?>
                                    <div class="form-body">
                                        <h3 class="box-title">Biodata Admin</h3>
                                        <hr class="m-t-0 m-b-40">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Username</label>
                                                    <div class="col-md-9">
                                                        <input required type="text" name="username" class="form-control" placeholder="Username...">
                                                        </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Password</label>
                                                    <div class="col-md-9">
                                                        <input required type="password" name="password" class="form-control" placeholder="Password...">
                                                        </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="control-label text-right col-md-3">Nama</label>
                                                    <div class="col-md-9">
                                                    <input required type="text" name="nama" class="form-control" placeholder="Nama...">
                                                        </div>
                                                </div>
                                            </div>

                                        <!--/row-->
                                    </div>
                                    <hr>
                                    <div class="form-actions">
                                        <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Simpan</button>
                                        <a href="<?= base_url('/beranda') ?>" class="btn btn-inverse">Cancel</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer">
                © <?php echo date('Y')?> ARIF
            </footer>
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
    <script src="<?= base_url();?>assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?= base_url();?>assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="<?= base_url();?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?= base_url();?>assets/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="<?= base_url();?>assets/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="<?= base_url();?>assets/js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="<?= base_url();?>assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="<?= base_url();?>assets/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!--stickey kit -->
    <script src="<?= base_url();?>assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="<?= base_url();?>assets/plugins/sparkline/jquery.sparkline.min.js"></script>
    <script src="<?= base_url();?>assets/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!--Custom JavaScript -->
    <script src="<?= base_url();?>assets/js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!--c3 JavaScript -->
    <script src="<?= base_url();?>assets/plugins/d3/d3.min.js"></script>
    <script src="<?= base_url();?>assets/plugins/c3-master/c3.min.js"></script>
    <!-- Vector map JavaScript -->
    <script src="<?= base_url();?>assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="<?= base_url();?>assets/plugins/vectormap/jquery-jvectormap-us-aea-en.js"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="<?= base_url();?>assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>
