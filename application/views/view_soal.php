<table class="table table-hover">
	<tr>
    <td width="52" height="40"><div align="center"><strong>No</strong></div></td>
    <td height="40"><div align="center"><strong>Soal</strong></div></td>
    <td height="40"><div align="center"><strong>Pilihan A</strong></div></td>
    <td height="40"><div align="center"><strong>Pilihan B</strong></div></td>
    <td height="40"><div align="center"><strong>Pilihan C</strong></div></td>
    <td height="40"><div align="center"><strong>Pilihan D</strong></div></td>
    <!--td height="40"><div align="center"><strong>PDAM</strong></div></td-->
    <td height="40" colspan="2"><div align="center"><strong>Aksi</strong></div></td>
  </tr>
<?php 
  	$no=1;
	foreach($isi as $row){
	?>
	<tr>
    <td><div align="center">
      <?=$no++?>
    </div></td>
    <td><pre><?=$row['soal']?></pre></td>
    <td><pre><?=$row['pil_a']?></pre></td>
    <td><pre><?=$row['pil_b']?></pre></td>
    <td><pre><?=$row['pil_c']?></pre></td>
	   <td><?=$row['pil_d']?></td>
   	<td width="45" height="40"><div align="center"><span class="style3"><a href="<?=base_url()?>"><img src="<?=base_url()?>images/icon/edit.png" height="20" width="20" title="Update Data"></a></span></div></td>
    <td width="48" height="40"><div align="center"><span class="style3"><a href="<?=base_url()?>"><img src="<?=base_url()?>images/icon/delete.png" height="20" width="20" title="Hapus Data"></a></span></div></td>
  </tr>
  <?php
  	}
  ?>
</table>
