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
            <h3>Asessment buatan Dedy <small></small></h3> <!-- diantara <small> ini bisa di isi teks -->
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

                      <h3>Pilih direktorat</h3>
                      <?php echo form_dropdown('direktorat', $dd_direktorat) ?>

                      <div class="hr-line-dashed"></div>
                      <?=anchor( 'Asessment_dedy/unit_jktcc',
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

                      <h3>Pilih Unit</h3>

                      <div class="hr-line-dashed"></div>
                      <?=anchor( 'Asessment_dedy/unit_jktcg',
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

                      <h3>Pilih Metode</h3>


                      <div class="hr-line-dashed"></div>
                      <?=anchor( 'Asessment_dedy/unit_jktci',
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
