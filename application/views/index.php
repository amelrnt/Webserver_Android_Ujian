<!DOCTYPE html>
<?php if(isset($msg)){
  switch($alert){
    case "success" : ?><div class="alert alert-success" role="alert"><p><?=$msg?></p></div><?php break;
    case "warning" : ?><div class="alert alert-warning" role="alert"><p><?=$msg?></p></div><?php break;
    case "info" : ?><div class="alert alert-info" role="alert"><p><?=$msg?></p></div><?php break;
    case "danger" : ?><div class="alert alert-danger" role="alert"><p><?=$msg?></p></div><?php break; 
  }  
} ?>
<html>
<body background="<?=base_url()?>images/bg.jpg">
<head>
  <title>Bootstrap Part 12 : Membuat Navigation bar Bootstrap</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<body>
   <nav class="navbar navbar-default">
      <div class="container-fluid">
  <div class="navbar-header">
    <a class="navbar-brand">Online Programming Exam Information System</a>
  </div>
  <ul class="nav navbar-nav">
     <li><a href="<?=base_url()?>index.php/cujian/banksoal/all">Question Bank</a></li> 
    <li class="dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#"> Courses
      <span class="caret"></span></a>
      <ul class="dropdown-menu">
        <button class="btn btn-default col-md-12" data-toggle="collapse" data-target="#tambah_web"  data-placement="top" title="Tambah Soal Web">Web Programming</button>
          <button class="btn btn-default col-md-12" data-toggle="collapse" data-target="#tambah_mobile" data-tooltip="tooltip" data-placement="top" title="Tambah Soal Mobile">Mobile Programming</button></a>
          
          <button class="btn btn-default col-md-12" data-toggle="collapse" data-target="#tambah_jaringan" data-tooltip="tooltip" data-placement="top" title="Tambah Soal Jaringan">Computer Network Programming</button></a>
          <br>
              <br>
          <button class="btn btn-default col-md-12" data-toggle="collapse" data-target="#tambah_algoritma" data-tooltip="tooltip" data-placement="top" title="Tambah Soal Algoritma">Algorithm Programming</button></a>
          <br>
              <br>
          <button class="btn btn-default col-md-12" data-toggle="collapse" data-target="#tambah_basisdata" data-tooltip="tooltip" data-placement="top" title="Tambah Soal Basisdata">Database Programming</button></a>
          <br>
              <br>
          <button class="btn btn-default col-md-12" data-toggle="collapse" data-target="#tambah_objek" data-tooltip="tooltip" data-placement="top" title="Tambah Soal Objek">Object Oriented Programming</button></a>
          <br>
              <br>
          <button class="btn btn-default col-md-12" data-toggle="collapse" data-target="#tambah_gui" data-tooltip="tooltip" data-placement="top" title="Tambah Soal Gui">Graphical User Interface Programming</button></a>
        </div>
      </ul>
    </li>
  </ul>
</ul>

  <ul class="nav navbar-nav navbar-right">
  <li><a href="<?=base_url()?>index.php/cujian/logout"><span class="glyphicon glyphicon-out"></span>Sign Out</a></li>
  </ul>
   </div>
</nav>
<div class="col-md-3">
  <div class="panel panel-danger">
      <div class="panel-heading">
        <h3 class="panel-title"><span class="fa fa-th-large"></span>  Paket Soal</h3>
      </div>
      <div class="panel-body">
        <div class="btn-group-vertical">
      <?php
      foreach($paket as $row){?>
      <button class="btn btn-success"><?=$row['nama_paket']?></button>
      <?php }?>
        </div>
        <div class="btn-group-vertical">
        <button class="btn btn-basic" data-toggle="collapse" data-target="#tambahpaket">New Packet</button>
        <button class="btn btn-basic" data-toggle="collapse" data-target="#hapuspaket">Delete Packet</button>
    </div>
    <div class="btn-group-vertical">
    <button class="btn btn-basic" data-toggle="collapse" data-target="#importpaket">Import</button>
        <button class="btn btn-basic" data-toggle="collapse" data-target="#exportpaket">Export</button>
        </div>
  </div>
  <div class="panel panel-info">
      <div class="panel-heading">
        <h3 class="panel-title"><span class="fa fa-connectdevelop fa-spin"></span>  Update <?=$version['version']?></h3>
      </div>
      <div class="panel-body">
        <div align="center">
        <div class="btn-group-vertical">
        <button class="btn btn-info" data-toggle="collapse" data-target="#setupdate">Set Update</button>
        </div>
      </div>
    </div>
  </div>
  </div><!--div col-3-->
  <div class="col-md-12"><!--Content Page-->
    <div class="collapse" id="setupdate">
      <div class="well form-group form-inline">
        <form action="<?=base_url()?>index.php/cujian/setupdate" method="POST">
        <label for="pilihpaket">Choose Packet</label>
        <select class="form-control" name="paket" id="pilihpaket">
          <?php
          foreach($paket as $row){?>
          <option value="<?=$row['paket']?>"><?=$row['nama_paket']?></option>
          <?php }?>
          </select>
          <input type="text" class="form-control" name="version" placeholder="Versi">
          <input type="submit" name="submit" class="btn btn-primary" value="Submit">
        </form>
      </div>
    </div>
    <div class="collapse" id="tambahpaket">
      <div class="well ">
        <form action="<?=base_url()?>index.php/cujian/tambahpaket" method="POST">
        <div class="form-group form-inline">
          <input type="text" class="form-control" name="namapaket" placeholder="Masukkan Nama Paket">
          <input type="submit" name="submit" class=" btn btn-success">
        </div>
        </form>
      </div>
    </div>
       <div class="collapse col-md-14" id="hapuspaket">
      <div class="well form-group form-inline">
        <form action="<?=base_url()?>index.php/cujian/hapusPaket" method="POST">
        <label for="pilihpaket">Choose Packet</label>
        <select class="form-control" name="paket" id="pilihpaket">
          <?php
          foreach($paket as $row){?>
          <option value="<?=$row['paket']?>"><?=$row['nama_paket']?></option>
          <?php }?>
          </select>
          <input type="button" data-toggle="modal" data-target="#modalhapus" class="btn btn-danger" value="Hapus">
      </div>
    </div>
      <div id="modalhapus"class="modal fade bs-example-modal-sm">
       <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-body">
            <p>Are you sure?</p>
          </div>
          <div class="modal-footer">
             <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
             <input type="submit" name="submit" class="btn btn-danger" value="Delete">
          </div>
        </div>
       </div>
      </div>
    </form>
  </div>
     <div class="collapse col-md-15" id="importpaket">
      <div class="well form-group form-inline">
      <label for="pilihpaket">Choose Packet</label>
       
        <label for="Importfile">Import file Paket</label>
        <form action="<?php echo base_url();?>/index.php/excel/upload/" method="post" enctype="multipart/form-data">
         <select class="form-control" name="paket" id="pilihpaket">
          <?php
          foreach($paket as $row){?>
          <option value="<?= $row['paket']?>"><?= $row['nama_paket']?></option>
          <?php }?>
          </select>
    <input type="file" name="file"/>
    <input type="submit" value="Upload file"/>
    </form>
      </div>
      </div>
      <div class="collapse col-md-15" id="exportpaket">
      <div class="well form-group form-inline">
        <form action="<?=base_url()?>index.php/export/export_paket" method="POST">
        <label for="pilihpaket">Pilih Paket</label>
        <select class="form-control" name="paket" id="pilihpaket">
          <?php
          foreach($paket as $row){?>
          <option value="<?=$row['paket']?>"><?=$row['nama_paket']?></option>
          <?php }?>
          </select>
          <input type="submit"  class="btn btn-default" value="export">
          </form>
      </div>
    </div>
     
   
  </div>
</div>
 
</body>
</html>