

<h3><b><?php echo $judul; ?></b></h3>
<br/>
 <div class ="row">
        <div class="col-md-10 col-sm-12 col-xs-offset-1">
            <table border="1" class="table table-striped jambo_table bulk_action" >
                <thead>
                <tr><th style="width: 5%">
                        <h5><center>No</center></h5></th>
                    <th style="width: 70%">
                        <h5><center>Pertanyaan</center></h5></th>
                    <th>
                        <h5><center>Construct</center></h5></th>
                    <th colspan="2"></th>
                </tr>
                </thead>

                <tbody>
                    <?php
                    foreach ($pertanyaan as $p){
                        echo "<tr>
                            <td><h5>$p->id_kuesioner</h5></td>
                            <td><h5>$p->pertanyaan</h5></td>
                            <td><h5>$p->varconstruct</h5></td>
                            <td ><center>".anchor('editform/edit_obs/'.$p->id_kuesioner,'<span class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit</span>')."</center></td>
                            <td ><center>".anchor('editform/delete_obs/'.$p->id_kuesioner,'<span class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </span>')."</center></td>
                            </tr>";
                    }
                    ?>
           
                    <tr>
                    <td colspan="5"  >

                     <button class="btn btn-success btn-sm pull-right aphp " type="button"  data-toggle="modal" data-target=".bs-example-modal-lg" title="Tambah pertanyaan">
                       Add <i class="fa fa-plus-circle fa-2x"> </i>
                    </button>

                  <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel">Tambah Pertanyaan</h4>
                          <?php echo form_open('editform/input_simpan_obs'); ?>
                        </div>
                        <div class="modal-body">
                            <table>
                               <tr><td>Pertanyaan</td><td style="width=50%"><?php echo form_input('pertanyaan', '',array('placeholder'=>'tuliskan pertanyaan')); ?></td></tr>
  
                               <tr><td>Dimensi</td><td><?php echo form_dropdown('id_construct', $dd_construct); ?></td></tr>
                            </table>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo anchor('admin/edit_obs','KEMBALI');?></button>
                          <input type="submit" class="btn btn-success" value="Simpan Data">
                            <?php echo form_close(); ?>
                        </div>

                      </div>
                    </div>
                  </div>
                    <!-- <button class="btn btn-info btn-sm pull-right aphp " type="button"  data-toggle="tooltip" data-placement="bottom" title="Lihat form">
                         <?php echo anchor('index.php/kuesioner/preview_obs','Preview <i class="fa fa-eye fa-2x"> </i> '); ?>
                    </button> -->
                    </td> </tr>
                </tbody>
            </table>
        </div>
    </div>




