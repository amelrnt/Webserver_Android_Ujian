<div id="tambah_basisdata" class="col-md-3 collapse">
  <!--div class=""-->
    <div class="modal-content">
    	<div class="modal-header modal-primary">
			<h3 class="panel-title text-center"><strong>Tambah Soal Database</strong></h3>
  		</div>
  		<div class="modal-body">
 		<form action="<?=base_url()?>cujian/input/basisdata" method="POST" enctype="multipart/form-data">
      <div class="form-group">
        <label for="pilihpaket">Pilih Paket</label>
        <select class="form-control" name="paket" id="pilihpaket">
          <?php
          foreach($paket as $row){?>
          <option value="<?=$row['paket']?>"><?=$row['nama_paket']?></option>
          <?php }?>
          </select>
      </div>
			<div class="form-group">
    			<label for="pertanyaan">Pertanyaan</label>
    			<input type="text" class="form-control" id="pertanyaan" name="pertanyaan" placeholder="">
			</div>
     <!--  <div class="form-group">
        <label for="InputFile">File Gambar</label>
        <input type="file" id="InputFile" name="filegambar">
      </div> -->
    </div>
			<div class="form-group">
				<div class="input-group">
      			<span class="input-group-addon">
        			<input type="radio" name="key" value=0 data-tooltip="tooltip" data-placement="top" title="Jawaban Benar">
      			</span>
      			<input type="text" class="form-control" name="pil_a" placeholder="Pilihan A">
    			</div>
			</div>
			<div class="form-group">
  			<div class="input-group">
      			<span class="input-group-addon">
        			<input type="radio" name="key" value=1 data-tooltip="tooltip" data-placement="top" title="Jawaban Benar">
      			</span>
      			<input type="text" class="form-control" name="pil_b" placeholder="Pilihan B">
    			</div>
			</div>
			<div class="form-group">
  			<div class="input-group">
      			<span class="input-group-addon">
        			<input type="radio" name="key" value=2 data-tooltip="tooltip" data-placement="top" title="Jawaban Benar">
      			</span>
      			<input type="text" class="form-control" name="pil_c" placeholder="Pilihan C">
    			</div>
			</div>
			<div class="form-group">
  			<div class="input-group">
      			<span class="input-group-addon">
        			<input type="radio" name="key" value=3 data-tooltip="tooltip" data-placement="top" title="Jawaban Benar">
      			</span>
      			<input type="text" class="form-control" name="pil_d" placeholder="Pilihan D">
    			</div>
			</div>
			<div class="form-group">
  			<input type="submit" name="submit" class=" btn-lg btn-block btn-danger">
			</div>
		</form>
	</div>
</div>
<!--/div-->
</div>