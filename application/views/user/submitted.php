<!DOCTYPE html>
<html lang="en">
  <head>

    <link href="<?php echo base_url()?>/assets/css/radiobtn2.css" rel="stylesheet">
    <meta charset="utf-8">

    <link rel="icon" type="image/png" href="<?php echo base_url()?>assets/gi.ico">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Ion.RangeSlider -->
    <link href="vendors/normalize-css/normalize.css" rel="stylesheet">
    <link href="vendors/ion.rangeSlider/css/ion.rangeSlider.css" rel="stylesheet">
    <link href="vendors/ion.rangeSlider/css/ion.rangeSlider.skinFlat.css" rel="stylesheet">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Garuda Indonesia  </title>

       <link href="<?php echo base_url()?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>/assets/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="<?php echo base_url()?>/assets/css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url()?>/assets/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url();?>/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Ion.RangeSlider -->
    <link href="<?php echo base_url();?>/assets/vendors/normalize-css/normalize.css" rel="stylesheet">
    <link href="<?php echo base_url();?>/assets/vendors/ion.rangeSlider/css/ion.rangeSlider.css" rel="stylesheet">
    <link href="<?php echo base_url();?>/assets/vendors/ion.rangeSlider/css/ion.rangeSlider.skinFlat.css" rel="stylesheet">

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

    <!-- custom Icon -->
    <link href="<?php echo base_url();?>/assets/vendors/animatedicon/css/demo.css"  rel="stylesheet"/>
    <link href="<?php echo base_url();?>/assets/vendors/animatedicon/css/icons.css" rel="stylesheet"/>
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
                <img src="<?php echo base_url()?>/assets/images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Selamat Datang,</span>
                <h2><?php echo $this->session->userdata('admin_username');?>;</h2>
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
                <!--<li><a><i class="fa fa-edit active"></i> Isi Kuesioner <span class=""></span></a> -->
                </li>
                <!-- End Corporate-->
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
                    <img src="<?php echo base_url()?>/assets/images/img.jpg" alt=""><?php echo $this->session->userdata('admin_username');?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                </li>
                    <li><a href="#" onclick="window.print()"><i class="fa fa-print">  Print</i></a></li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->
        <!-- page content -->

  <body class="nav-md">
     <div class="container body">
      <div class="main_container">
        <div class="right_col" role="main" style="min-height: 720px">
              <div class="">
                <div class="page-title">
                  <div class="title_left">
                    <h3><strong> Kuesioner </strong>Culture Assessment<!-- <small> Formulir asessment  <strong> karyawan </strong></small> --></h3>
                  </div>
                </div>
              </div>

              <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">

                  <div class="x_content">
                      <center> click thumbs up to finish action </center>
                      <div class="grid">
                      <br />
                      <div class="grid__item">
                        <center><button class="icobutton icobutton--thumbs-up"><span class="fa fa-thumbs-up fa-3x" ><h2>submitted</h2></span></button><center>
                      </div>
                      <br />
                    </div>

                     <center>
                      <button type="button" class="btn btn-round btn-danger btn-sm" href="#">Log Out <span class="fa fa-sign-out"></span></button>
                      <button type="button" class="btn btn-round btn-primary btn-sm" href="#">Log In as Admin <span class="fa fa-user"></span></button>
                    </center>
                    <!-- <?php 
                    
                      // "<td ><center>".anchor('user/'.$p->id_kuesioner,'<span class="fa fa-sign-out"></span> Edit')."</center></td>"
                      ?> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

   </div>
 <!-- END page content -->
 

<!-- footer content -->
        <footer style="margin-left: 0 !important;">
          <div class="pull-right">

            <img src="<?php echo base_url();?>/assets/images/garudak2.png" />
          </div>
          <div class="clearfix"></div>
        </footer>


<!-- jQuery -->
<script src="../vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="../vendors/nprogress/nprogress.js"></script>
<!-- morris.js -->
<script src="../vendors/raphael/raphael.min.js"></script>
<script src="../vendors/morris.js/morris.min.js"></script>

<!-- Echart.js -->
<script src="../vendors/echarts/dist/echarts.min.js"></script>
<!-- jQuery -->
<script src="../vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="../vendors/nprogress/nprogress.js"></script>
<!-- Chart.js -->
<script src="../vendors/Chart.js/dist/Chart.min.js"></script>
<!-- gauge.js -->
<script src="../vendors/gauge.js/dist/gauge.min.js"></script>
<!-- bootstrap-progressbar -->
<script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
<!-- iCheck -->
<script src="../vendors/iCheck/icheck.min.js"></script>
<!-- Skycons -->
<script src="../vendors/skycons/skycons.js"></script>
<!-- Flot -->
<script src="../vendors/Flot/jquery.flot.js"></script>
<script src="../vendors/Flot/jquery.flot.pie.js"></script>
<script src="../vendors/Flot/jquery.flot.time.js"></script>
<script src="../vendors/Flot/jquery.flot.stack.js"></script>
<script src="../vendors/Flot/jquery.flot.resize.js"></script>
<!-- Flot plugins -->
<script src="../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
<script src="../vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
<script src="../vendors/flot.curvedlines/curvedLines.js"></script>
<!-- DateJS -->
<script src="../vendors/DateJS/build/date.js"></script>
<!-- JQVMap -->
<script src="../vendors/jqvmap/dist/jquery.vmap.js"></script>
<script src="../vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
<script src="../vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
<!-- bootstrap-daterangepicker -->
<script src="../vendors/moment/min/moment.min.js"></script>
<script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="js_new/jquery-2.1.1.js"></script>
<script src="js_new/bootstrap.min.js"></script>
<script src="js_new/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="js_new/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<!-- Custom and plugin javascript -->
<script src="js_new/inspinia.js"></script>
<script src="js_new/plugins/pace/pace.min.js"></script>
<script src="js_new/plugins/dataTables/datatables.min.js"></script>
<!-- NProgress -->
<script src="vendors_new/nprogress/nprogress.js"></script>
<!-- Ion.RangeSlider -->
<script src="vendors_new/ion.rangeSlider/js/ion.rangeSlider.min.js"></script>

<!-- Custom Theme Scripts -->
<script src="../build/js/custom.min.js"></script>


<!-- custom icon -->
<script src="<?php echo base_url();?>/assets/vendors/animatedicon/js/mo.min.js"></script>
<script src="<?php echo base_url();?>/assets/vendors/animatedicon/js/demo.js"></script>

</body>
</html>
