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
            <h3>Unit  <?php echo $this->session->userdata('admin_username');?> <small></small></h3> <!-- diantara <small> ini bisa di isi teks -->
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
                      <h3>Questionaire</h3>
                      <h5 style="font-weight: normal;">Pilihlah pada angka-angka yang tersedia sesuai pernyataan yang Anda anggap paling cocok</h5>
                      <h4 class="label label-info">Questionaire</h4>
                      <div class="hr-line-dashed"></div>
                      <?=anchor( 'user/',
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
                      <?=anchor( 'Asessment_dedy/fgd',
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
                      <?=anchor( 'Asessment_dedy/presentation',
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
                      <h3>Interview</h3>
                      <h5 style="font-weight: normal;">Pilih penilaian yang menurut Anda paling sesuai dengan indikator yang telah tersedia.</h5>
                      <h4 class="label label-info">Form</h4>
                      <div class="hr-line-dashed"></div>
                      <?=anchor( 'Asessment_dedy/interview',
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
                      <?=anchor( 'Asessment_dedy/observation',
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
