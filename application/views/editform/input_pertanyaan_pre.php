<?php echo form_open('editform/input_simpan_pre'); ?>
<table>
    <tr><td>Pertanyaan</td><td><?php echo form_input('pertanyaan', '',array('placeholder'=>'tuliskan pertanyaan')); ?></td></tr>
    <tr><td>Dimensi</td><td><?php echo form_input('id_construct', '',array('placeholder'=>'tuliskan dimensi')); ?></td></tr>
    <tr><td colspan="2">
        <?php echo form_submit('SUBMIT','SIMPAN DATA');?>
        <?php echo anchor('admin/edit_presentation','KEMBALI');?></td></tr>
</table>


<?php echo form_close(); ?>