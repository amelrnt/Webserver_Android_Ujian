<table>
	

<?php 
foreach ($paket as $data) { ?>

<tr>
	<td><?php echo $data['id'] ?></td>
	<td><?php echo $data['soal'] ?></td>
	<td><?php echo $data['pil_a'] ?></td>
	<td><?php echo $data['pil_b'] ?></td>
	<td><?php echo $data['pil_c'] ?></td>
	<td><?php echo $data['pil_d'] ?></td>
	<td><?php echo $data['jwban'] ?></td>
	<td><?php echo $data['tipe'] ?></td>
	<td><?php echo $data['paket'] ?></td>
</tr>


<?php
}
?>
</table>