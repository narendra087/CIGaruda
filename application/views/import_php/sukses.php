<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

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
    <link href="<?php echo base_url();?>/assets/build/css/custom.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/IAidea.css" rel="stylesheet">
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
                <img src="<?php echo base_url();?>assets/images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Selamat Datang,</span>
                <h2></h2>
              </div>
            </div>
     

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu"> <!-- General Body -->
              <div class="menu_section">
                <h3></h3>
                <ul class="nav side-menu">

				<!-- Corporate-->
				<li><a><i class="fa fa-plane"></i> Corporate <span class=""></span></a>
        <ul class="nav child_menu">
                      <li><a href="<?php echo base_url()."admin/corporate"?>">Garuda Indonesia</a></li>
         </ul>
        </li>
				<!-- End Corporate-->

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
				  <li><a><i class="fa fa-pencil"></i> Asessment <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="chartjs.html">JKTDC</a></li>
                      <li><a href="chartjs2.html">JKTDE</a></li>
                      <li><a href="morisjs.html">JKTDF</a></li>
                      <li><a href="echarts.html">JKTDG</a></li>
                      <li><a href="other_charts.html">JKTDN</a></li>
					   <li><a href="other_charts.html">JKTDI</a></li>
					   <li><a href="other_charts.html">JKTDO</a></li>
					   <li><a href="other_charts.html">JKTDR</a></li>
					   <li><a href="other_charts.html">JKTDZ</a></li>
                    </ul>
                  </li>
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
                                    <li><a><i class="fa fa-edit"></i>Upload & Download<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url();?>admin/kuesioner">Kuesioner</a></li>
					   <li><a href="<?php echo base_url();?>admin/presentation">Presentation</a></li>
					    <li><a href="<?php echo base_url();?>admin/fgd">FGD</a></li>
						 <li><a href="<?php echo base_url();?>admin/interview">Interview</a></li>
						  <li><a href="<?php echo base_url();?>admin/observation">Observation</a></li>

                  <!-- End Form-->

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
                    <img src="<?php echo base_url();?>assets/images/img.jpg" alt=""><?php echo $this->session->userdata('admin_username');?>



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

          <li><a href="#" onclick="window.print()"><h5> Print  <i class="fa fa-print"></i></h5></a><li>

              </ul>
            </nav>
          </div>
        </div>

        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">


<!--  tulis kode disini -->

<br/><br/><br/><br/><br/>
<center><h2>DATA SUBMITTED</h2></center>

<!--  tulis kode disini -->

          </div>
        </div>
        <!-- /page content -->

<footer>
          <div class="pull-right">

            <img src="<?php echo base_url();?>/assets/images/garudak2.png" />
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

  <!-- jQuery -->
    <script src="<?php echo base_url();?>/assets/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url();?>/assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url();?>/assets/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?php echo base_url();?>/assets/vendors/nprogress/nprogress.js"></script>
    <!-- morris.js -->
    <script src="<?php echo base_url();?>/assets/vendors/raphael/raphael.min.js"></script>
    <script src="<?php echo base_url();?>/assets/vendors/morris.js/morris.min.js"></script>

  <!-- Echart.js -->
  <script src="<?php echo base_url();?>/assets/vendors/echarts/dist/echarts.min.js"></script>
    <!-- jQuery -->
    <script src="<?php echo base_url();?>/assets/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url();?>/assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url();?>/assets/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?php echo base_url();?>/assets/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="<?php echo base_url();?>/assets/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="<?php echo base_url();?>/assets/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="<?php echo base_url();?>/assets/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="<?php echo base_url();?>/assets/vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="<?php echo base_url();?>/assets/vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="<?php echo base_url();?>/assets/vendors/Flot/jquery.flot.js"></script>
    <script src="<?php echo base_url();?>/assets/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="<?php echo base_url();?>/assets/vendors/Flot/jquery.flot.time.js"></script>
    <script src="<?php echo base_url();?>/assets/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="<?php echo base_url();?>/assets/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="<?php echo base_url();?>/assets/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="<?php echo base_url();?>/assets/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="<?php echo base_url();?>/assets/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="<?php echo base_url();?>/assets/vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="<?php echo base_url();?>/assets/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="<?php echo base_url();?>/assets/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="<?php echo base_url();?>/assets/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="<?php echo base_url();?>/assets/vendors/moment/min/moment.min.js"></script>
    <script src="<?php echo base_url();?>/assets/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url();?>/assets/build/js/custom.js"></script>
    <!-- chart sripts -->
    <script src="<?php echo base_url();?>chart/samplechart.js" charset="utf-8"></script>
    <script src="<?php echo base_url();?>chart/corporate.js" charset="utf-8"></script>
    <script src="<?php echo base_url();?>chart/jktdc.js" charset="utf-8"></script>
    <script src="<?php echo base_url();?>chart/jktde.js" charset="utf-8"></script>
    <script src="<?php echo base_url();?>chart/jktdf.js" charset="utf-8"></script>
    <script src="<?php echo base_url();?>chart/jktdg.js" charset="utf-8"></script>
    <script src="<?php echo base_url();?>chart/jktdi.js" charset="utf-8"></script>
    <script src="<?php echo base_url();?>chart/jktdn.js" charset="utf-8"></script>
    <script src="<?php echo base_url();?>chart/jktdo.js" charset="utf-8"></script>
    <script src="<?php echo base_url();?>chart/jktdr.js" charset="utf-8"></script>
    <script src="<?php echo base_url();?>chart/jktdz.js" charset="utf-8"></script>

  </body>
</html>