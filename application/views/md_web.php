<div class="col-md-20">
</div>
<div class="col-md-20">
  <div class="modal-content">
      <div class="modal-header modal-primary">
      <h3 class="panel-title text-center"><strong>Edit Soal Pemrograman Web</strong></h3>
      </div>
  	<div class="modal-body">
    <form action="<?=base_url()?>index.php/cujian/editsoal/1/<?=$id?>" method="POST" enctype="multipart/form-data">
      <div class="form-group">
        <label for="pilihpaket">Pilih Paket</label>
        <select class="form-control" name="paket" id="pilihpaket">
          <?php
          foreach($paket as $row){?>
          <option value="<?=$row['paket']?>"><?=$row['nama_paket']?></option>
          <?php }?>
          </select>
      </div>
      <?php foreach($edit as $row){?>
			<div class="form-group">
    			<label for="pertanyaan">Pertanyaan</label>
    			<input type="text" class="form-control" id="pertanyaan" name="pertanyaan" value="<?php echo $row['soal']?>">
			</div>
			<div class="form-group">
				<div class="input-group">
      			<span class="input-group-addon">
        			<input type="radio" name="key" value=0 data-tooltip="tooltip" data-placement="top" title="Jawaban Benar" <?php echo ($row['jwban']==0)?'checked':''; ?>>
      			</span>
      			<input type="text" class="form-control" name="pil_a" value="<?=$row['pil_a']?>">
    			</div>
			</div>
			<div class="form-group">
  			<div class="input-group">
      			<span class="input-group-addon">
        			<input type="radio" name="key" value=1 data-tooltip="tooltip" data-placement="top" title="Jawaban Benar" <?php echo ($row['jwban']==1)?'checked':''; ?>>
      			</span>
      			<input type="text" class="form-control" name="pil_b" value="<?=$row['pil_b']?>">
    			</div>
			</div>
			<div class="form-group">
  			<div class="input-group">
      			<span class="input-group-addon">
        			<input type="radio" name="key" value=2 data-tooltip="tooltip" data-placement="top" title="Jawaban Benar" <?php echo ($row['jwban']==2)?'checked':''; ?>>
      			</span>
      			<input type="text" class="form-control" name="pil_c" value="<?=$row['pil_c']?>">
    			</div>
			</div>
			<div class="form-group">
  			<div class="input-group">
      			<span class="input-group-addon">
        			<input type="radio" name="key" value=3 data-tooltip="tooltip" data-placement="top" title="Jawaban Benar" <?php echo ($row['jwban']==3)?'checked':''; ?>>
      			</span>
      			<input type="text" class="form-control" name="pil_d" value="<?=$row['pil_d']?>">
    			</div>
			</div>
			<div class="form-group">
  			<input type="submit" name="submit" class=" btn-lg btn-block btn-warning">
			</div>
      <?php } ?>
		</form>
	</div>
</div>
<!--/div-->
</div>