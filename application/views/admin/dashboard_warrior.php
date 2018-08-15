<?php
session_start();
include('connection/conn.php');
?>
<?php 
                                  $cc1=mysqli_query($con, "SELECT count(status_aktif) AS jumlahwarrior FROM baru_warrior where input_bulan='08'");

                                  $isi1=mysqli_fetch_array($cc1)['jumlahwarrior'];

                                  $cc2=mysqli_query($con, "SELECT count(status_aktif) AS jumlahwarrior FROM baru_warrior where input_bulan='09'");

                                  $isi2=mysqli_fetch_array($cc2)['jumlahwarrior'];

                                  $cc3=mysqli_query($con, "SELECT count(status_aktif) AS jumlahwarrior FROM baru_warrior where input_bulan='10'");

                                  $isi3=mysqli_fetch_array($cc3)['jumlahwarrior'];

                                 

                                  ?>
                  <?php


                        $dataPoints = array( 
                          array("y" => $isi1, "label" => "Agustus" ),
                          array("y" => $isi2, "label" => "September" ),
                          array("y" => $isi3, "label" => "Oktober" ),
                        );
                         
                        ?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Garuda Indonesia | Dashboard</title>


    <link rel="icon" type="image/png" href="<?php echo base_url()?>assets/gi.ico">
    <link href="<?php echo base_url()?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>css/custom.css" rel="stylesheet">
    <link href="<?php echo base_url()?>font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="<?php echo base_url()?>css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="<?php echo base_url()?>css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url()?>css/style.css" rel="stylesheet">

    <link href="<?php echo base_url()?>css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="<?php echo base_url()?>assets/gi.ico">
    <link href="<?php echo base_url()?>font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Toastr style -->
    <link href="<?php echo base_url()?>css/plugins/toastr/toastr.min.css" rel="stylesheet">

    <!-- Gritter -->
    <link href="<?php echo base_url()?>js/plugins/gritter/jquery.gritter.css" rel="stylesheet">

    <link href="<?php echo base_url()?>css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url()?>css/style.css" rel="stylesheet">

    <script>
window.onload = function() {
 
var chart = new CanvasJS.Chart("chartContainer", {
  animationEnabled: true,
  theme: "light2",
  title:{
    text: "Jumlah Warrior"
  },
  axisY: {
    title: "Orang"
  },
  data: [{
    type: "column",
    yValueFormatString: "#,##0.## tonnes",
    dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
  }]
});
chart.render();
 
}
</script>

</head>

<body>
    <div id="wrapper">
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="<?php echo base_url()?>img/profile_small.jpg" />
                             </span>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold"><?php echo $this->session->userdata('username')?></strong>
                             </span> <span class="text-muted text-xs block">Admin <b class="caret"></b></span> </span> </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li><a href="<?php echo base_url()?>admin/logout">Logout</a></li>
                            </ul>
                        </div>
                        <div class="logo-element">
                            GI
                        </div>
                    </li>
                    <li>
                        <a href="<?php echo base_url()?>admin/index"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboard Progress</span></a>

                    </li>
                    <li>
                        <a href="<?php echo base_url()?>admin_radar/index"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboard Performance</span></a>

                    </li>
                    <li class="">
                        <a href="<?php echo base_url()?>admin/dashboard_bobot"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboard Bobot</span></a>

                    </li>
                    <li class="active">
                        <a href="<?php echo base_url()?>admin/dashboard_warrior"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboard Warrior</span></a>

                    </li>
                    <li>
                        <a href="<?php echo base_url()?>admin/dashboard_implementasi_budaya"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboard TIB</span></a>

                    </li>
                    <li >
                        <a href=""><i class="fa fa-edit"></i> <span class="nav-label">Culture Programs</span><span class="fa fa-caret-down pull-right"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="<?php echo base_url()?>admin/program"><i class="fa fa-pencil"></i> List Program</a></li>
                            <li><a href="<?php echo base_url()?>admin/tambah_program"><i class="fa fa-bar-chart-o"></i> Tambah Program</a></li>
                            <!-- <li><a href="<?php echo base_url()?>admin/progress_program"><i class="fa fa-bar-chart-o"></i> Progress Program</a></li> -->
                        </ul>
                    </li>
                    <li >
                        <a href="<?php echo base_url()?>admin/daftar_user"><i class="fa fa-users"></i> <span class="nav-label">Daftar User</span></a>

                    </li>
                    <li >
                        <a href="<?php echo base_url()?>admin/daftar_warrior"><i class="fa fa-users"></i> <span class="nav-label">Daftar Warrior</span></a>

                    </li>
                    <li >
                        <a href="<?php echo base_url()?>admin/daftar_tib"><i class="fa fa-users"></i> <span class="nav-label">Daftar TIB</span></a>

                    </li>
                    <li>
                        <!-- <a href="<?php echo base_url()?>admin/setting"><i class="fa fa-cog"></i> <span class="nav-label">Setting</span>< -->
                    </li>
                </ul>

            </div>
        </nav>

        <div id="page-wrapper" class="gray-bg dashbard-1">
        <div class="row border-bottom">
          <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
          <div class="navbar-header">
              <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
              
          </div>
              <ul class="nav navbar-top-links navbar-right">
                  <li>
                      <span class="m-r-sm text-muted welcome-message">Welcome to Garuda Culture Program.</span>
                  </li>
                  <li>
                      <a href="<?php echo base_url()?>admin/logout">
                          <i class="fa fa-sign-out"></i> Log out
                      </a>
                  </li>
              </ul>
          </nav>
        </div>
        <div class="col-md-9">
                  <div id="chartContainer" style="height: 370px; width: 100%;"></div>
                  <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

                </div>
          <div class="row  border-bottom white-bg dashboard-header">
                <div class="row">
          <div class="col-md-4 col-sm-4 col-xs-12 widget_tally_box">
            <div class="x_panel">
              <div class="x_title">
                <h2>Jakarta Raya and <br>International Region</h2>
                <ul class="nav navbar-right panel_toolbox">
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="#">Settings 1</a>
                      </li>
                      <li><a href="#">Settings 2</a>
                      </li>
                    </ul>
                  </li>
                  </li>
                </ul>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">

                <table class="table table-hover table-bordered" style="font-size:14px">
                  <thead>
                    <tr>
                      <th style="width:80%">Unit</th>
                      <th style="text-align:center">Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                    $n=1;
                    $queries=mysqli_query($con,"SELECT a.*,b.nama_unit,b.kode_dir FROM (SELECT DISTINCT(unit_name),nopeg,kode FROM ca_performance_upload LEFT JOIN baru_warrior on ca_performance_upload.unit_name=baru_warrior.unit where ca_performance_upload.kode='5')a JOIN unit b on a.unit_name=b.kode_unit");
                    while ($row=mysqli_fetch_array($queries)) {

                      ?>
                      <?php 
                      if ($row['nopeg']==null&&empty($row['nopeg'])) {
                        ?>
                        <tr style=" background:#f7f7f7">
                          <td><b><?php echo $row['unit_name'];?></b> (<?php echo $row['nama_unit'];?>)</td>
                          <td style="text-align:center" >
                            <i class="fa fa-circle" style="color:red"></i>
                          </td>
                        </tr>
                        <?php                        
                      } else {
                        ?>
                        <tr>
                          <td><a href="<?php echo base_url()?>admin/progress_warrior/<?php echo $row['unit_name']?>"><b><?php echo $row['unit_name'];?></b> (<?php echo $row['nama_unit'];?>)</a></td>
                          <td style="text-align:center" >
                            <i class="fa fa-check-circle" style="color:green"></i>
                          </td>
                        </tr>
                        <?php 

                      }
                      ?>
                      <?php 
                    }

                    ?>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="x_panel">
              <div class="x_title">
                <h2>Kalimantan, Sulawesi, & <br>Papua Region</h2>
                <ul class="nav navbar-right panel_toolbox">
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="#">Settings 1</a>
                      </li>
                      <li><a href="#">Settings 2</a>
                      </li>
                    </ul>
                  </li>
                  </li>
                </ul>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">

                <table class="table table-hover table-bordered" style="font-size:14px">
                  <thead>
                    <tr>
                      <th style="width:80%">Unit</th>
                      <th style="text-align:center">Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                    $n=1;
                    $queries=mysqli_query($con,"SELECT a.*,b.nama_unit,b.kode_dir FROM (SELECT DISTINCT(unit_name),nopeg,kode FROM ca_performance_upload LEFT JOIN baru_warrior on ca_performance_upload.unit_name=baru_warrior.unit where ca_performance_upload.kode='4')a JOIN unit b on a.unit_name=b.kode_unit");
                    while ($row=mysqli_fetch_array($queries)) {

                      ?>
                      <?php 
                      if ($row['nopeg']==null&&empty($row['nopeg'])) {
                        ?>
                        <tr style=" background:#f7f7f7">
                          <td><b><?php echo $row['unit_name'];?></b> (<?php echo $row['nama_unit'];?>)</td>
                          <td style="text-align:center" >
                            <i class="fa fa-circle" style="color:red"></i>
                          </td>
                        </tr>
                        <?php                        
                      } else {
                        ?>
                        <tr>
                          <td><a href="<?php echo base_url()?>admin/progress_warrior/<?php echo $row['unit_name']?>"><b><?php echo $row['unit_name'];?></b> (<?php echo $row['nama_unit'];?>)</a>)</td>
                          <td style="text-align:center" >
                            <i class="fa fa-check-circle" style="color:green"></i>
                          </td>
                        </tr>
                        <?php 

                      }
                      ?>
                      <?php 
                    }

                    ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
            <div class="col-md-4 col-sm-4    col-xs-12">
              </div>

              <div class="col-md-8 col-sm-8    col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Head Office</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <table class="table table-hover table-bordered" style="font-size:14px">
                      <thead>
                        <tr>
                          <th style="width:80%">Unit</th>
                          <th style="text-align:center">Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                        $n=1;
                        $queries=mysqli_query($con,"SELECT a.*,b.nama_unit,b.kode_dir FROM (SELECT DISTINCT(unit_name),nopeg,kode FROM ca_performance_upload LEFT JOIN baru_warrior on ca_performance_upload.unit_name=baru_warrior.unit where ca_performance_upload.kode='1')a JOIN unit b on a.unit_name=b.kode_unit");
                        while ($row=mysqli_fetch_array($queries)) {

                          ?>
                          <?php 
                          if ($row['nopeg']==null&&empty($row['nopeg'])) {
                            ?>
                            <tr style=" background:#f7f7f7">
                              <td><b><?php echo $row['unit_name'];?></b> (<?php echo $row['nama_unit'];?>)</td>
                              <td style="text-align:center" >
                                <i class="fa fa-circle" style="color:red"></i>
                              </td>
                            </tr>
                            <?php                        
                          } else {
                            ?>
                            <tr>
                              <td><a href="<?php echo base_url()?>admin/progress_warrior/<?php echo $row['unit_name']?>"><b><?php echo $row['unit_name'];?></b> (<?php echo $row['nama_unit'];?>)</a></td>
                              <td style="text-align:center" >
                                <i class="fa fa-check-circle" style="color:green"></i>
                              </td>
                            </tr>
                            <?php 

                          }
                          ?>
                          <?php 
                        }

                        ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>


              <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Sumatera Region</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      </li>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <table class="table table-hover table-bordered" style="font-size:14px">
                      <thead>
                        <tr>
                          <th style="width:80%">Unit</th>
                          <th style="text-align:center">Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                        $n=1;
                        $queries=mysqli_query($con,"SELECT a.*,b.nama_unit,b.kode_dir FROM (SELECT DISTINCT(unit_name),nopeg,kode FROM ca_performance_upload LEFT JOIN baru_warrior on ca_performance_upload.unit_name=baru_warrior.unit where ca_performance_upload.kode='2')a JOIN unit b on a.unit_name=b.kode_unit");
                        while ($row=mysqli_fetch_array($queries)) {

                          ?>
                          <?php 
                          if ($row['nopeg']==null&&empty($row['nopeg'])) {
                            ?>
                            <tr style=" background:#f7f7f7">
                              <td><b><?php echo $row['unit_name'];?></b> (<?php echo $row['nama_unit'];?>)</td>
                              <td style="text-align:center" >
                                <i class="fa fa-circle" style="color:red"></i>
                              </td>
                            </tr>
                            <?php                        
                          } else {
                            ?>
                            <tr>
                              <td><a href="<?php echo base_url()?>admin/progress_warrior/<?php echo $row['unit_name']?>"><b><?php echo $row['unit_name'];?></b> (<?php echo $row['nama_unit'];?>)</a></td>
                              <td style="text-align:center" >
                                <i class="fa fa-check-circle" style="color:green"></i>
                              </td>
                            </tr>
                            <?php 

                          }
                          ?>
                          <?php 
                        }

                        ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Jawa, Bali,<br>Nusa Tenggara Region </h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <table class="table table-hover table-bordered" style="font-size:14px">
                      <thead>
                        <tr>
                          <th style="width:80%">Unit</th>
                          <th style="text-align:center">Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                        $n=1;
                        $queries=mysqli_query($con,"SELECT a.*,b.nama_unit,b.kode_dir FROM (SELECT DISTINCT(unit_name),nopeg,kode FROM ca_performance_upload LEFT JOIN baru_warrior on ca_performance_upload.unit_name=baru_warrior.unit where ca_performance_upload.kode='3')a JOIN unit b on a.unit_name=b.kode_unit");
                        while ($row=mysqli_fetch_array($queries)) {

                          ?>


                          <?php 
                          if ($row['nopeg']==null&&empty($row['nopeg'])) {
                            ?>
                            <tr style=" background:#f7f7f7">
                              <td><b><?php echo $row['unit_name'];?></b> (<?php echo $row['nama_unit'];?>)</td>
                              <td style="text-align:center" >
                                <i class="fa fa-circle" style="color:red"></i>
                              </td>
                            </tr>
                            <?php                        
                          } else {
                            ?>
                            <tr>
                              <td><a href="<?php echo base_url()?>admin/progress_warrior/<?php echo $row['unit_name']?>"><b><?php echo $row['unit_name'];?></b> (<?php echo $row['nama_unit'];?>)</a></td>
                              <td style="text-align:center" >
                                <i class="fa fa-check-circle" style="color:green"></i>
                              </td>
                            </tr>
                            <?php 

                          }
                          ?>


                          <?php 
                        }

                        ?>
                      </tbody>
                    </table>
                  </div>
                </div>

              </div>
            </div>
                <div class="footer">
                    <div>
                        <strong>Copyright</strong> &copy; 2017 Garuda Indonesia. All rights reserved.
                    </div>
                </div>
          </div>
        </div>
        </div>
          
        </div>

  

    <!-- Mainly scripts -->
    <script src="<?php echo base_url()?>js/jquery-2.1.1.js"></script>
    <script src="<?php echo base_url()?>js/bootstrap.min.js"></script>
    <script src="<?php echo base_url()?>js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="<?php echo base_url()?>js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Flot -->
    <script src="<?php echo base_url()?>js/plugins/flot/jquery.flot.js"></script>
    <script src="<?php echo base_url()?>js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="<?php echo base_url()?>js/plugins/flot/jquery.flot.spline.js"></script>
    <script src="<?php echo base_url()?>js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="<?php echo base_url()?>js/plugins/flot/jquery.flot.pie.js"></script>

    <!-- Peity -->
    <script src="<?php echo base_url()?>js/plugins/peity/jquery.peity.min.js"></script>
    <script src="<?php echo base_url()?>js/demo/peity-demo.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="<?php echo base_url()?>js/inspinia.js"></script>
    <script src="<?php echo base_url()?>js/plugins/pace/pace.min.js"></script>

    <!-- jQuery UI -->
    <script src="<?php echo base_url()?>js/plugins/jquery-ui/jquery-ui.min.js"></script>

    <!-- GITTER -->
    <script src="<?php echo base_url()?>js/plugins/gritter/jquery.gritter.min.js"></script>

    <!-- Sparkline -->
    <script src="<?php echo base_url()?>js/plugins/sparkline/jquery.sparkline.min.js"></script>

    <!-- Sparkline demo data  -->
    <script src="<?php echo base_url()?>js/demo/sparkline-demo.js"></script>

    <!-- ChartJS-->
    <script src="<?php echo base_url()?>js/plugins/chartJs/Chart.min.js"></script>

    <!-- Toastr -->
    <script src="<?php echo base_url()?>js/plugins/toastr/toastr.min.js"></script>
    <!-- ECharts -->
    <script src="<?php echo base_url()?>vendors/echarts/dist/echarts.min.js"></script>
    <script src="<?php echo base_url()?>vendors/echarts/map/js/world.js"></script>
     <!-- Knob -->
    <script src="<?php echo base_url()?>js/plugins/jsKnob/jquery.knob.js"></script>

    <script type="text/javascript">
        //KNOB CHART//
        $(".knob").knob(
        {
            draw: function () 
                {
                    // "tron" case
                    if (this.$.data('skin') == 'tron') 
                        {
                            var a = this.angle(this.cv)  // Angle
                            , sa = this.startAngle          // Previous start angle
                            , sat = this.startAngle         // Start angle
                            , ea                            // Previous end angle
                            , eat = sat + a                 // End angle
                            , r = true;

                            this.g.lineWidth = this.lineWidth;

                            this.o.cursor
                            && (sat = eat - 0.3)
                            && (eat = eat + 0.3);

                            if (this.o.displayPrevious) 
                                {
                                    ea = this.startAngle + this.angle(this.value);
                                    this.o.cursor
                                    && (sa = ea - 0.3)
                                    && (ea = ea + 0.3);
                                    this.g.beginPath();
                                    this.g.strokeStyle = this.previousColor;
                                    this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sa, ea, false);
                                    this.g.stroke();
                                }

                            this.g.beginPath();
                            this.g.strokeStyle = r ? this.o.fgColor : this.fgColor;
                            this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sat, eat, false);
                            this.g.stroke();

                            this.g.lineWidth = 2;
                            this.g.beginPath();
                            this.g.strokeStyle = this.o.fgColor;
                            this.g.arc(this.xy, this.xy, this.radius - this.lineWidth + 1 + this.lineWidth * 2 / 3, 0, 2 * Math.PI, false);
                            this.g.stroke();

                            return false;
                        }
                }
        });
    </script>
    <script>
    var theme = {
      color: [
      '#26B99A', '#34495E', '#BDC3C7', '#3498DB',
      '#9B59B6', '#8abb6f', '#759c6a', '#bfd3b7'
      ],

      gauge: {
        startAngle: 225,
        endAngle: -45,
        axisLine: {
          show: true,
          lineStyle: {
            color: [[0.2, '#86b379'], [0.8, '#68a54a'], [1, '#408829']],
            width: 8
          }
        },
        axisTick: {
          splitNumber: 10,
          length: 12,
          lineStyle: {
            color: 'auto'
          }
        },
        axisLabel: {
          textStyle: {
            color: 'auto'
          }
        },
        splitLine: {
          length: 18,
          lineStyle: {
            color: 'auto'
          }
        },
        pointer: {
          length: '90%',
          color: 'auto'
        },
        title: {
          textStyle: {
            color: '#333'
          }
        },
        detail: {
          textStyle: {
            color: 'auto'
          }
        }
      },
      textStyle: {
        fontFamily: 'Arial, Verdana, sans-serif'
      }
    };

    var echartGauge = echarts.init(document.getElementById('echart_guage'), theme);

    echartGauge.setOption({
      tooltip: {
        formatter: "{a} <br/>{b} : {c}%"
      },
      toolbox: {
        show: true,
        feature: {
          restore: {
            show: true,
            title: "Restore"
          },
          saveAsImage: {
            show: true,
            title: "Save Image"
          }
        }
      },
      series: [{
        name: 'Employee Innovation Index',
        type: 'gauge',
        center: ['50%', '50%'],
        startAngle: 220,
        endAngle: -40,
        min: 0,
        max: 100,
        precision: 0,
        splitNumber: 10,
        axisLine: {
          show: true,
          lineStyle: {
            color: [
            [0.49, '#F44336'],
            [0.74, '#FFEB3B '],
            [1, '#00e676']
            ],
            width: 30
          }
        },
        axisTick: {
          show: true,
          splitNumber: 5,
          length: 8,
          lineStyle: {
            color: '#eee',
            width: 1,
            type: 'solid'
          }
        },

        splitLine: {
          show: true,
          length: 30,
          lineStyle: {
            color: '#eee',
            width: 2,
            type: 'solid'
          }
        },
        pointer: {
          length: '80%',
          width: 8,
          color: 'auto'
        },
        title: {
          show: true,
          offsetCenter: ['0%', 100],
          textStyle: {
            color: '#333',
            fontSize: 15
          }
        },
        detail: {
          show: true,
          backgroundColor: 'rgba(0,0,0,0)',
          borderWidth: 0,
          borderColor: '#ccc',
          width: 100,
          height: 40,
          formatter: '{value}%',
          textStyle: {
            color: 'auto',
            fontSize: 30
          }
        },
        data: [{
          value: <?php echo number_format($progrescorporate[0]->progress,0,".","."); ?> ,
          name: 'Corporate Progress'
        }]
      }]
    });
</script>
<?php for ($i=1; $i <=9 ; $i++) { ?>
<script type="text/javascript">
        //GAUGE CHART//
        var dom<?php echo $i?> = document.getElementById("echart_guage<?php echo $i?>");
        var myChart<?php echo $i?> = echarts.init(dom<?php echo $i?>);
        var app = {};
        option = null;
        option = 
            {

                color: {
                    type: 'linear',
                    x: 0,
                    y: 0,
                    x2: 0,
                    y2: 1,
                    colorStops: [{
                        offset: 0, color: 'red' // color at 0% position
                    }, {
                        offset: 1, color: 'blue' // color at 100% position
                    }],
                    globalCoord: false // false by default
                },
                resize  : true,
                tooltip : 
                    {
                        formatter: "{a} <br/>{b} : <?php echo $progres[$i-1]->progress; ?> %"
                    },


                series: [
                    {
                        name: '业务指标',
                        type: 'gauge',
                        detail: {formatter: '<?php echo number_format($progres[$i-1]->progress,1,".","."); ?> %'},
                        data: <?php echo number_format($progres[$i-1]->progress,0,".","."); ?>, 
                        name:'Prosentase Ketercapaian <?php echo $progres[$i-1]->kode_dir; ?>',
                        axisLine: {
                            show: true,
                            lineStyle: {
                              color: [
                              [0.49, '#F44336'],
                              [0.74, '#FFEB3B '],
                              [1, '#00e676']
                              ],
                              width: 30
                            }
                          }
                    }
                        ]
            };


            if (option && typeof option === "object") 
                {
                    myChart<?php echo $i?>.setOption(option, true);
                }
    </script>
    <?php } ?>
</body>
</html>
    