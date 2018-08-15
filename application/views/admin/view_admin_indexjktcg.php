<!DOCTYPE html>
<html lang="en">
  <head>


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
                <h2>John Doe</h2>
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
				<li><a><i class="fa fa-plane"></i> Corporate <span class=""></span></a>
				</li>
				<!-- End Corporate-->

					  <!-- Direktorat-->
                  <li><a><i class="fa fa-home"></i> Direktorat <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="index.html">JKTDC</a></li>
					  <li><a href="index.html">JKTDE</a></li>
					  <li><a href="index.html">JKTDF</a></li>
					  <li><a href="index.html">JKTDG</a></li>
					  <li><a href="index.html">JKTDN</a></li>
					  <li><a href="index.html">JKTDI</a></li>
					  <li><a href="index.html">JKTDO</a></li>
					  <li><a href="index.html">JKTDR</a></li>
                      <li><a href="index.html">JKTDZ</a></li>

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
                  <li><a><i class="fa fa-edit"></i> Edit Forms <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="form.html">Kuisioner</a></li>
                      <li><a href="form_advanced.html">Presentation</a></li>
                      <li><a href="form_validation.html">FGD</a></li>
                      <li><a href="form_wizards.html">Interview</a></li>
                      <li><a href="form_upload.html">Observation</a></li>
                    </ul>
                  </li>
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
                    <img src="<?php echo base_url()?>/assets/images/img.jpg" alt="">John Doe
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
          <!-- /top tiles -->


          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12"> <!-- angka 12 di md san sm itu menentukan panjang cardnya sedangkan 12 di xs lebar cardnya -->
              <div class="dashboard_graph">

                <div class="">
                  <div class="col-md-6">
                    <h3>Unit JKTCG <small></small></h3> <!-- diantara <small> ini bisa di isi teks -->
                  </div>
                </div>


                <div class="clearfix"></div>
              </div>
            </div>

          </div>
          <br />

		<!--start assesment baris pertama -->
    <div class="wrapper wrapper-content  animated fadeInRight">
          <div class="row">
              <div class="col-lg-4">
                  <div class="ibox float-e-margins">
                      <div class="ibox-content" style="padding: 30px;">
                          <div class="row">
                              <h6>Asessment 1</h6>
                              <h3>SINCERITY Acceleration Program</h3>
                              <h5 style="font-weight: normal;">Pilihlah pada angka-angka yang tersedia sesuai pernyataan yang Anda anggap paling cocok</h5>
                              <h4 class="label label-info">Questionaire</h4>
                              <div class="hr-line-dashed"></div>
                              <?=anchor( 'upload/',
                                      'Attempt Now',
                                      ['class'=>'btn btn-primary btn-xs table-hover pull-right'
                                      ])?>
                          </div>
                      </div>
                  </div>
              </div>

              <div class="col-lg-4">
                  <div class="ibox float-e-margins">
                      <div class="ibox-content" style="padding: 30px;">
                          <div class="row">
                              <h6>Asessment 2</h6>
                              <h3>Forum Group Discussion</h3>
                              <h5 style="font-weight: normal;">Pilih jawaban yang tersedia sesuai dengan penilaian yang menurut Anda paling tepat.</h5>
                              <h4 class="label label-info">Questionaire</h4>
                              <div class="hr-line-dashed"></div>
                              <?=anchor( 'cont_fgd/',
                                      'Attempt Now',
                                      ['class'=>'btn btn-primary btn-xs table-hover pull-right'
                                      ])?>
                          </div>
                      </div>
                  </div>
              </div>

              <div class="col-lg-4">
                  <div class="ibox float-e-margins">
                      <div class="ibox-content" style="padding: 30px;">
                          <div class="row">
                              <h6>Asessment 3</h6>
                              <h3>Presentation</h3>
                              <h5 style="font-weight: normal;">Berikan nilai yang menurut anda paling tepat sesuai dengan Indikator yang tersedia.</h5>
                              <h4 class="label label-info">Form</h4>
                              <div class="hr-line-dashed"></div>
                              <?=anchor( 'cont_ppt/',
                                      'Attempt Now',
                                      ['class'=>'btn btn-primary btn-xs table-hover pull-right'
                                      ])?>
                          </div>
                      </div>
                  </div>
              </div>
          </div>

          <div class="row">
              <div class="col-lg-4 col-md-offset-2">
                  <div class="ibox float-e-margins">
                      <div class="ibox-content" style="padding: 30px;">
                          <div class="row">
                              <h6>Asessment 4</h6>
                              <h3>Wawancara Final</h3>
                              <h5 style="font-weight: normal;">Pilih penilaian yang menurut Anda paling sesuai dengan indikator yang telah tersedia.</h5>
                              <h4 class="label label-info">Form</h4>
                              <div class="hr-line-dashed"></div>
                              <?=anchor( 'cont_wwcr/',
                                      'Attempt Now',
                                      ['class'=>'btn btn-primary btn-xs table-hover pull-right'
                                      ])?>
                          </div>
                      </div>
                  </div>
              </div>

              <div class="col-lg-4">
                  <div class="ibox float-e-margins">
                      <div class="ibox-content" style="padding: 30px;">
                          <div class="row">
                              <h6>Asessment 5</h6>
                              <h3>Observation</h3>
                              <h5 style="font-weight: normal;">Berikan jawaban yang sesuai menurut penilaian Anda sesuai dengan indikator yang telah tersedia.</h5>
                              <h4 class="label label-info">Form</h4>
                              <div class="hr-line-dashed"></div>
                              <?=anchor( 'cont_obs/',
                                      'Attempt Now',
                                      ['class'=>'btn btn-primary btn-xs table-hover pull-right'
                                      ])?>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
			  <!--end dari assesment baris pertama -->



              </div>
            </div>
          </div>



        <!-- footer content -->
        <footer>
          <div class="pull-right">

            <img src="images/garudak2.png" />
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

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

  </body>
</html>
