
<!-- Select2 -->
    <link href="<?php echo base_url();?>assets/vendors/select2/dist/css/select2.min.css" rel="stylesheet">
    <!-- Switchery -->
    <link href="<?php echo base_url();?>assets/vendors/switchery/dist/switchery.min.css" rel="stylesheet">
<div class="page-title">
              <div class="title_left">
                <h3>Pengaturan Metode <small></small></h3>
              </div>

            </div>

            <div class="clearfix"></div>

            <div class="row">
            <br>
              <div class="col-md-8 col-sm-8 col-xs-12 col-md-offset-2">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Atur bobot nilai, jenis jawaban, available dari pertanyaan</h2>

                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                <form class="m-t" role="form" action="<?php echo base_url()."isna/submitBobot"?>" method="POST">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th><center>ID Metode</center></th>
                          <th><center>Metode</center></th>
                          <th><center>Bobot</center></th>
                          <th><center>Tipe Jawaban</center></th>
                          <th><center>Available</center></th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                            $s=0;
                           foreach ($metode as $p){

                                echo "<tr>
                                    <td style='vertical-align:baseline'>$p->id_metode</td>
                                    <td style='vertical-align:baseline'>$p->var_metode</td>
                                    <td style='vertical-align:baseline'>".form_input($p->id_metode, $p->bobot, array('placeholder'=>'input bobot'))."</td>
                                    <td><input type='number' class='form-control' id='radbtn' min='4' max='6' value='4'> </td>
                                    <td style='vertical-align:baseline'><center><label>
                                    <input type='checkbox' class='js-switch' checked /> 
                                    </label></center>
                                    </td>
                                    </tr>";
                                $s++;
                            }
                            ?>
                            <tr>
                            <td colspan="6">
                                <input type="submit" class="btn-success btn-sm pull-right" value="Apply Changes">
                            </td>
                            </tr>     
                        <!-- <tr class="form-group" >
                          <th style="vertical-align:baseline" scope="row">1</th>
                          <td style="vertical-align:baseline">Kuesioner</td>
                          <td style="vertical-align:baseline"><input type="text" class="form-control" id="bobot" placeholder="Masukkan nilai antara 0,0 - 1,0">  </td>
                          <td style="vertical-align:baseline"><input type="number" class="form-control" id="radbtn" min="4" max="6" value="4"> </td>
                          <td style="vertical-align:baseline"><center><label>
                              <input type="checkbox" class="js-switch" checked /> 
                            </label></center>
                          </td>
                          <td style="vertical-align:baseline"> <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a></td>
                        </tr>
                        <tr>
                          <th style="vertical-align:baseline" scope="row">2</th>
                          <td style="vertical-align:baseline">Presentation</td>
                          <td style="vertical-align:baseline"><input type="text" class="form-control" id="bobot" placeholder="Masukkan nilai antara 0,0 - 1,0">  </td>
                          <td style="vertical-align:baseline"><input type="number" class="form-control" id="radbtn" min="4" max="6" value="4"> </td>
                          <td style="vertical-align:baseline"><center><label>
                              <input type="checkbox" class="js-switch" checked /> 
                            </label></center>
                          </td>
                          <td style="vertical-align:baseline"> <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a></td>
                        </tr>
                        <tr>
                          <th style="vertical-align:baseline" scope="row">3</th>
                          <td style="vertical-align:baseline">FGD</td>
                          <td style="vertical-align:baseline"><input type="text" class="form-control" id="bobot" placeholder="Masukkan nilai antara 0,0 - 1,0">  </td>
                          <td style="vertical-align:baseline"><input type="number" class="form-control" id="radbtn" min="4" max="6" value="4"> </td>
                          <td style="vertical-align:baseline"><center><label>
                              <input type="checkbox" class="js-switch" checked /> 
                            </label></center>
                          </td>
                          <td style="vertical-align:baseline"> <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a></td>
                        </tr>
                        <tr>
                          <th style="vertical-align:baseline" scope="row">4</th>
                          <td style="vertical-align:baseline">Interview</td>
                          <td style="vertical-align:baseline"><input type="text" class="form-control" id="bobot" placeholder="Masukkan nilai antara 0,0 - 1,0">  </td>
                          <td style="vertical-align:baseline"><input type="number" class="form-control" id="radbtn" min="4" max="6" value="4"> </td>
                          <td style="vertical-align:baseline"><center><label>
                              <input type="checkbox" class="js-switch" checked /> 
                            </label></center>
                          </td>
                          <td style="vertical-align:baseline"> <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a></td>
                        </tr>   
                        <tr>
                          <th style="vertical-align:baseline" scope="row">5</th>
                          <td style="vertical-align:baseline">Observation</td>
                          <td style="vertical-align:baseline"><input type="text" class="form-control" id="bobot" placeholder="Masukkan nilai antara 0,0 - 1,0">  </td>
                          <td style="vertical-align:baseline"><input type="number" class="form-control" id="radbtn" min="4" max="6" value="4"> </td>
                          <td style="vertical-align:baseline"><center><label>
                              <input type="checkbox" class="js-switch" checked /> 
                            </label></center>
                          </td>
                          <td style="vertical-align:baseline"> <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a></td>
                          <tr>
                            <td colspan="6">
                                <input type="submit" class="btn-success btn-sm pull-right" value="Apply Changes">
                            </td>
                        </tr>                         -->
                      </tbody>
                    </table>
                </form>
                  
                  </div>
                </div>
              </div>

              <div class="clearfix"></div>

              <div class="clearfix"></div>


            </div>

            <!-- Switchery -->
    <script src="<?php echo base_url();?>assets/vendors/switchery/dist/switchery.min.js"></script>