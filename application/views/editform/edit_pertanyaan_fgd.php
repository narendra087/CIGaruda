<?php echo form_open('editform/edit_simpan_fgd'); ?>
<?php echo form_hidden('id',$this->uri->segment(3)); ?>
<table>
    <tr><td>PERTANYAAN</td><td><?php echo form_input('pertanyaan', $product['pertanyaan'],array('placeholder'=>'input pertanyaan')); ?></td></tr>
    <tr><td>DIMENSI</td><td><?php echo form_input('id_construct', $product['id_construct'],array('placeholder'=>'input dimensi')); ?></td></tr>
    <tr><td colspan="2">
        <?php echo form_submit('SUBMIT','SIMPAN DATA');?>
        <?php echo anchor('admin/edit_fgd','KEMBALI');?></td></tr>
</table>

<?php echo form_close();?>