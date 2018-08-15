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
    <link href="<?php echo base_url();?>/assets/vendors/font-awesome/css/font-awesome.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url();?>/assets/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?php echo base_url();?>/assets/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="<?php echo base_url();?>/assets/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    
    <!-- Ion.RangeSlider -->
    <link href="<?php echo base_url();?>/assets/vendors/normalize-css/normalize.css" rel="stylesheet">
    <link href="<?php echo base_url();?>/assets/vendors/ion.rangeSlider/css/ion.rangeSlider.css" rel="stylesheet">
    <link href="<?php echo base_url();?>/assets/vendors/ion.rangeSlider/css/ion.rangeSlider.skinFlat.css" rel="stylesheet">

    <title>Garuda Indonesia  </title>

    <!-- bootstrap-progressbar -->
    <link href="<?php echo base_url();?>/assets/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">

    <!-- bootstrap-daterangepicker -->
    <link href="<?php echo base_url();?>/assets/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url();?>/assets/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md" >
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

                <!-- Corporate-->
                <li class="nav child_menu">
                  <a href="<?php echo base_url()."admin/corporate"?>"><i class="fa fa-plane"></i> Corporate <span class=""></span></a>
                </li>
                <!-- End Corporate-->

                    <!-- Direktorat-->
                      <!-- Direktorat-->
                  <li><a><i class="fa fa-home"></i> Direktorat <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url()."admin/jktdc"?>">JKTDC</a></li>
                      <li><a href="<?php echo base_url()."admin/jktde"?>">JKTDE</a></li>
                      <li><a href="<?php echo base_url()."admin/jktdf"?>">JKTDF</a></li>
                      <li><a href="<?php echo base_url()."admin/jktdg"?>">JKTDG</a></li>
                      <li><a href="<?php echo base_url()."admin/jktdn"?>">JKTDN</a></li>
                      <li><a href="<?php echo base_url()."admin/jktdi"?>">JKTDI</a></li>
                      <li><a href="<?php echo base_url()."admin/jktdo"?>">JKTDO</a></li>
                      <li><a href="<?php echo base_url()."admin/jktdr"?>">JKTDR</a></li>
                      <li><a href="<?php echo base_url()."admin/jktdz"?>">JKTDZ</a></li>

                    </ul>
                  </li>
                  <!-- End Direktorat-->

                  <!--Asessment-->
                  <!-- <li><a><i class="fa fa-pencil"></i> Asessment <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php //echo base_url()."User_index/indexjktdc"?>">JKTDC</a></li>
                      <li><a href="<?php //echo base_url()."User_index/indexjktde"?>">JKTDE</a></li>
                      <li><a href="morisjs.html">JKTDF</a></li>
                      <li><a href="echarts.html">JKTDG</a></li>
                      <li><a href="other_charts.html">JKTDN</a></li>
                       <li><a href="other_charts.html">JKTDI</a></li>
                       <li><a href="other_charts.html">JKTDO</a></li>
                       <li><a href="other_charts.html">JKTDR</a></li>
                       <li><a href="other_charts.html">JKTDZ</a></li>
                    </ul>
                  </li> -->
                  <!--End Asessment-->

                  <!--Form-->
                  <li><a><i class="fa fa-edit"></i> Edit Form <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url();?>admin/edit_kuesioner">Kuesioner</a></li>
                      <li><a href="<?php echo base_url();?>admin/edit_presentation">Presentation</a></li>
                      <li><a href="<?php echo base_url();?>admin/edit_fgd">FGD</a></li>
                      <li><a href="<?php echo base_url();?>admin/edit_interview">Interview</a></li>
                      <li><a href="<?php echo base_url();?>admin/edit_observation">Observation</a></li>
                    </ul>
                  </li>
                  <!-- End Form-->
				  
				     <!--Form-->
                  <li><a><i class="fa fa-upload"></i>Upload & Download<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url();?>admin/kuesioner">Kuesioner</a></li>
					   <li><a href="<?php echo base_url();?>admin/presentation">Presentation</a></li>
					    <li><a href="<?php echo base_url();?>admin/fgd">FGD</a></li>
						 <li><a href="<?php echo base_url();?>admin/interview">Interview</a></li>
						  <li><a href="<?php echo base_url();?>admin/observation">Observation</a></li>
                    </ul>
                  </li>
                  <!-- End Form-->

                  <li><a href="<?php echo base_url();?>isna/editMetode">
                        <i class="fa fa-wrench"></i> Pengaturan Metode
                      </a></li>

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
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="#">
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
                    <span class=" fa fa-angle-down"></span>
                  </a>

                </li>

                    <li><a href="#" onclick="window.print()"><i class="fa fa-print">  Print</i></a><li>

              </ul>
            </nav>
          </div>
        </div>

        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
          <div class="row tile_count">


          </div>
