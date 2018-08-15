<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Pak syaiful</title>
  </head>
  <body>
    <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Chart Js <small>Some examples to get you started</small></h3>
              </div>

              <div class="title_right">
                </div>
              </div>
            </div>


            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Bar graph <small>Sessions</small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <canvas id="graphbar"></canvas>
                  </div>
                </div>
              </div>

              <div class="clearfix"></div>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Radar <small>Sessions</small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  <canvas id="graphradar"></canvas>
                  <script type="text/javascript" src="<?php echo base_url();?>/assets/vendors/jquery/dist/jquery.min.js"></script>
                  <script type="text/javascript" src="<?php echo base_url();?>/assets/vendors/Chart.js/dist/Chart.min.js"></script>
                  <script src="<?php echo base_url();?>/assets/js/Dirjktdc.js" charset="utf-8"></script>

                  </div>
                </div>
              </div>
            </div>
  </body>
</html>
