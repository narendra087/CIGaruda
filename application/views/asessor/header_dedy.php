<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="icon" type="image/png" href="<?php echo base_url()?>assets/gi.ico">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


        <!-- Bootstrap -->
    <link href="<?php echo base_url();?>/assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url();?>/assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url();?>/assets/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?php echo base_url();?>/assets/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="<?php echo base_url();?>/assets/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>


    <title>Garuda Indonesia  </title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url();?>/assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url();?>/assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url();?>/assets/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?php echo base_url();?>/assets/vendors/iCheck/skins/flat/green.css" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="<?php echo base_url();?>/assets/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="<?php echo base_url();?>/assets/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="<?php echo base_url();?>/assets/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url();?>/assets/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
			<h2></h2>
              <a href="index.html" class="site_title"></i> <span>Garuda Indonesia</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="<?php echo base_url();?>/assets/images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Selamat Datang,</span>
                <h2><?php echo $this->session->userdata('admin_username');?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu"> <!-- General Body -->
              <div class="menu_section">
                <h3></h3>
                <ul class="nav side-menu">

				  <!--Asessment   bagian dedy yang kuganti2 disini-->
				
                    <li class="active">
                        <a href="<?php echo base_url()?>Asessment_dedy/index"><i class="fa fa-th-large"></i> <span class="nav-label">Asessment</span></a>

                    </li>
                    <li>
                        <a href="<?php echo base_url()?>kuesioner/index"><i class="fa fa-users"></i> <span class="nav-label">Questionaire</span></a>
                    </li>
                    <li >
                        <a href="<?php echo base_url()?>cont_fgd/index"><i class="fa fa-question-circle"></i> <span class="nav-label">Fofum Group Discussion</span></a>
                    </li>
                    <li>
                        <a href="<?php echo base_url()?>cont_ppt/index"><i class="fa fa-upload"></i> <span class="nav-label">Presentation</span></a>
                    </li>
                    <li>
                        <a href="<?php echo base_url()?>cont_wwcr/index"><i class="fa fa-check"></i> <span class="nav-label">Interview</span></a>
                    </li>
                    <li>
                        <a href="<?php echo base_url()?>cont_ondes/index"><i class="fa fa-user"></i> <span class="nav-label">On Desk</span></a>
                    </li>
                    <li>
                        <a href="<?php echo base_url()?>observation/index"><i class="fa fa-eye"></i> <span class="nav-label">Observation</span></a>
                    </li>
                    <!-- <li>
                        <a href="<?php echo base_url()?>admin/index"><i class="fa fa-cog"></i> <span class="nav-label">Observation</span></a>
                    </li> -->
                </ul> <!-- General Body -->
              </div>


            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">

                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="<?php echo base_url();?>/assets/images/img.jpg" alt=""><?php echo $this->session->userdata('admin_username');?>



                    <span class=" "></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>

                    <li><a href="javascript:;">Help</a></li>
                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

					<li><a href="#" onclick="window.print()"><i class="fa fa-print">  Print</i></a><li>

              </ul>
            </nav>
          </div>
        </div>

        <!-- /top navigation -->
