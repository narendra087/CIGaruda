<!DOCTYPE html>
<html lang="en">
  <head>


    <link rel="icon" type="image/png" href="<?php echo base_url()?>assets/gi.ico">
<!--     <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    Ion.RangeSlider
    <link href="vendors/normalize-css/normalize.css" rel="stylesheet">
    <link href="vendors/ion.rangeSlider/css/ion.rangeSlider.css" rel="stylesheet">
    <link href="vendors/ion.rangeSlider/css/ion.rangeSlider.skinFlat.css" rel="stylesheet">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> -->
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

  
          <!-- top tiles -->


          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12"> <!-- angka 12 di md san sm itu menentukan panjang cardnya sedangkan 12 di xs lebar cardnya -->
              <div class="dashboard_graph">

                <div class="">
                  <div class="col-md-6">
                    <h3>Direktorat JKTDE <small></small></h3> <!-- diantara <small> ini bisa di isi teks -->
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
                             
                              <h3>Unit JKTMQ</h3>
                            
                              <div class="hr-line-dashed"></div>
                              <?=anchor( 'User_index/indexjktmq',
                                      'GO',
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
                      
                              <h3>Unit JKTML</h3>
                             
                              <div class="hr-line-dashed"></div>
                              <?=anchor( 'User_index/indexjktml',
                                      'GO',
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

	