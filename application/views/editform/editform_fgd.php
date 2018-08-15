<h2><b><?php echo $judul; ?></b></h2>
<br/>
<hr> 
<?php echo anchor('editform/input_fgd','INPUT PERTANYAAN');?>
<hr>
<?php echo anchor('index.php/kuesioner/preview_fgd','PREVIEW'); ?>
<hr>
<br/>
 
<table border="1">
    <tr><th>No</th><th>Pertanyaan</th><th>construct</th><th colspan="2"></th></tr>
    <?php
    foreach ($pertanyaan as $p){
        echo "<tr>
            <td>$p->id_kuesioner</td>
            <td>$p->pertanyaan</td>
            <td>$p->varconstruct</td>
            <td>".anchor('editform/edit_fgd/'.$p->id_kuesioner,'EDIT')."</td>
            <td>".anchor('editform/delete_fgd/'.$p->id_kuesioner,'DELETE')."</td></tr>";
    }
    ?>
</table>