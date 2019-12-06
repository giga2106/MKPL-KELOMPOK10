<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>POPO (penjualan online peralatan olahraga)</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>assets/bower_components/font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>assets/bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>assets/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>assets/dist/css/skins/skin-red-light.min.css">
  <link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <script type="text/javascript" src="<?php echo base_url()."assets/"; ?>https://code.jquery.com/jquery-3.3.1.js"></script>
</head>

<body class="hold-transition skin-blue-light sidebar-mini">
<div class="wrapper">
  <header class="main-header">

    <!-- Logo -->
    <a href="<?php echo base_url()."assets/"; ?>index.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"> </span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">Admin <b>POPO</b></span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="<?php echo base_url()."assets/"; ?>#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <!-- Menu toggle button -->
            <!-- <a href="<?php echo base_url()."assets/"; ?>#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">4</span>
            </a> -->
            <ul class="dropdown-menu">
              <li class="header">You have 4 messages</li>
              <li>
                inner menu: contains the messages
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="<?php echo base_url()."assets/"; ?>#">
                      <div class="pull-left">
                        <!-- User Image -->
                        <img src="<?php echo base_url()."assets/"; ?>assets/dist/img/avatar5.png" class="img-circle" alt="User Image">
                      </div>
                      <!-- Message title and timestamp -->
                      <h4>
                        Support Team
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <!-- The message -->
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <!-- end message -->
                </ul>
                <!-- /.menu -->
              </li>
              <li class="footer"><a href="<?php echo base_url()."assets/"; ?>#">See All Messages</a></li>
            </ul>
          </li>
          <!-- /.messages-menu -->

          <!-- Notifications Menu -->
          <li class="dropdown notifications-menu">
            <!-- Menu toggle button -->
            <!-- <a href="<?php echo base_url()."assets/"; ?>#" class="dropdown-toggle" data-toggle="dropdown"> -->
              <!-- <i class="fa fa-bell-o"></i> -->
              <!-- <span class="label label-warning">10</span> -->
            <!-- </a> -->
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- Inner Menu: contains the notifications -->
                <ul class="menu">
                  <!-- <li> -->
                    <!-- start notification -->
                    <!-- <a href="<?php echo base_url()."assets/"; ?>#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a> -->
                  <!-- </li> -->
                  <!-- end notification -->
                </ul>
              </li>
              <li class="footer"><a href="<?php echo base_url()."assets/"; ?>#">View all</a></li>
            </ul>
          </li>
          <!-- Tasks Menu -->
          <li class="dropdown tasks-menu">
            <!-- Menu Toggle Button -->
            <!-- <a href="<?php echo base_url()."assets/"; ?>#" class="dropdown-toggle" data-toggle="dropdown"> -->
              <!-- <i class="fa fa-flag-o"></i> -->
              <!-- <span class="label label-danger">9</span> -->
            <!-- </a> -->
            <ul class="dropdown-menu">
              <li class="header">You have 9 tasks</li>
              <li>
                <!-- Inner menu: contains the tasks -->
                <ul class="menu">
                  <li><!-- Task item -->
                    <a href="<?php echo base_url()."assets/"; ?>#">
                      <!-- Task title and progress text -->
                      <h3>
                        Design some buttons
                        <small class="pull-right">20%</small>
                      </h3>
                      <!-- The progress bar -->
                      <div class="progress xs">
                        <!-- Change the css width attribute to simulate progress -->
                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer">
                <a href="<?php echo base_url()."assets/"; ?>#">View all tasks</a>
              </li>
            </ul>
          </li>
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="<?php echo base_url()."assets/"; ?>#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img src="<?php echo base_url()."assets/"; ?>assets/dist/img/avatar5.png" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs"><?php echo $nama_profil ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="<?php echo base_url()."assets/"; ?>assets/dist/img/avatar5.png" class="img-circle" alt="User Image">

                <p>
                  Nama Admin - Web Developer
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="<?php echo base_url()."assets/"; ?>#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="<?php echo base_url()."assets/"; ?>#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="<?php echo base_url()."assets/"; ?>#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="<?php echo base_url()."assets/"; ?>#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="<?php echo base_url()."assets/"; ?>#" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <!-- <li>
            <a href="<?php echo base_url()."assets/"; ?>#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li> -->
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url()."assets/"; ?>assets/dist/img/avatar5.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $nama_profil ?></p>
          <!-- Status -->
          <a href="<?php echo base_url()."assets/"; ?>#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Menu Navigation</li>
        <!-- Optionally, you can add icons to the links -->
        <li><a href="<?php echo base_url()."Admin"; ?>"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
        <li><a href="<?php echo base_url()."Admin/Peralatan"; ?>"><i class="fa fa-barcode"></i> <span>Peralatan</span></a></li>
        <li><a href="<?php echo base_url()."Admin/Transaksi"; ?>"><i class="fa fa-shopping-cart"></i> <span>Transaksi</span></a></li>
        <li><a href="<?php echo base_url()."Admin/Pelanggan"; ?>"><i class="fa fa-users"></i> <span>Pelanggan</span></a></li>
        <li><a href="<?php echo base_url()."Admin/Profil"; ?>"><i class="fa fa-gear"></i> <span>Pengaturan Profil</span></a></li>
        <li><a href="<?php echo base_url()."Login/logout"; ?>"><i class="fa fa-sign-out"></i> <span>Logout</span></a></li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>



	<div class="content-wrapper">
		<!-- Main content -->
		<section class="conten container-fluid">
      <?php $this->load->view($content_view); ?>
		</section>
	</div>



    <!-- Main Footer -->
      <footer class="main-footer text-center">
        <!-- To the right -->
        <div class="pull-right hidden-xs">

        </div>
        <!-- Default to the left -->
        <strong>Copyright &copy; 2018 <a href="<?php echo base_url()."assets/"; ?>#">POPO</a>.</strong> All rights reserved.
      </footer>
        </div>
      </div>
    </aside>
    <div class="control-sidebar-bg"></div>
  </div>
  <script src="<?php echo base_url()."assets/"; ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
  <script src="<?php echo base_url()."assets/"; ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url()."assets/"; ?>assets/dist/js/adminlte.min.js"></script>
  </body>
  </html>
