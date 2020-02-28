<body>
	<div class="col-md-3">
	</div>
<form class="col-md-6" action="<?=base_url()?>index.php/cujian/input" method="POST">
<div class="form-group">
    <label for="pertanyaan">Pertanyaan</label>
    <input type="text" class="form-control" id="pertanyaan" name="pertanyaan" placeholder="">
</div>
<div class="form-group">
	<div class="input-group">
      <span class="input-group-addon">
        <input type="radio" name="key" value=0>
      </span>
      <input type="text" class="form-control" name="pil_a" placeholder="Pilihan A">
    </div>
</div>
<div class="form-group">
  <div class="input-group">
      <span class="input-group-addon">
        <input type="radio" name="key" value=1>
      </span>
      <input type="text" class="form-control" name="pil_b" placeholder="Pilihan B">
    </div>
</div>
<div class="form-group">
  <div class="input-group">
      <span class="input-group-addon">
        <input type="radio" name="key" value=2>
      </span>
      <input type="text" class="form-control" name="pil_c" placeholder="Pilihan C">
    </div>
</div>
<div class="form-group">
  <div class="input-group">
      <span class="input-group-addon">
        <input type="radio" name="key" value=3>
      </span>
      <input type="text" class="form-control" name="pil_d" placeholder="Pilihan D">
    </div>
</div>
<div class="form-group">
  <input type="submit" name="submit" class=" btn-lg btn-block btn-warning">
</div>
</form>
<div class="col-md-3">
</div>
</body>