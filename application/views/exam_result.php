<html>
<body background="<?=base_url()?>images/bg.jpg">
<head>
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
    <!-- <li class="active"><a href="http://www.malasngoding.com">Home</a></li>
    <li><a href="#">Profil</a></li>
    <li><a href="#">Tentang Kami</a></li> 
    <li><a href="#">Kontak</a></li>  -->
    

     <li><a href="<?=base_url()?>cujian/home">Home</a></li>
     <li class="dropdown">
     <!-- <a class="dropdown-toggle" data-toggle="dropdown" href="#">file excel
      <span class="caret"></span></a> -->
     <!-- <div class="form-group"> -->
     <!-- <ul class="dropdown-menu">
        <label for="InputFile">File excel</label>
        <input type="file" id="InputFile" name="filegambar">
        </ul>
        </li> -->
    <!--   </div> -->
    <li class="dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#"> Options
      <span class="caret"></span></a>
      <ul class="dropdown-menu">
     <a href="<?=base_url()?>cujian/banksoal/web"><button class="btn btn-default col-md-12" >Web Programming</button></a>
        <a href="<?=base_url()?>cujian/banksoal/mobile"><button class="btn btn-default col-md-12" >Mobile Programming</button></a>
        <a href="<?=base_url()?>cujian/banksoal/jaringan"><button class="btn btn-default col-md-12" >Computer Network Programming</button></a>
        <a href="<?=base_url()?>cujian/banksoal/algoritma"><button class="btn btn-default col-md-12" >Algorithm Programming</button></a>
        <a href="<?=base_url()?>cujian/banksoal/basisdata"><button class="btn btn-default col-md-12" >Database Programming</button></a>
        <a href="<?=base_url()?>cujian/banksoal/objek"><button class="btn btn-default col-md-12" >Object Oriented Programming</button></a>
          <a href="<?=base_url()?>cujian/banksoal/gui"><button class="btn btn-default col-md-12" >Graphical User Interface Programming</button></a>

      </ul>
    </li>
  </ul>
</ul>
<div class="col-md-12">
     <table class="table table-hover table-striped">
          <tr>
               <th>#</th>
               <th>Name</th>
               <th>Course</th>
               <th>Score</th>
               <th>Start Time</th>
               <th>Finish Time</th>
          </tr>
          <?php
          $no=1;
          foreach ($res as $row) {?>
          <tr>
          <td><?=$no?></td>
          <td><?=$row['nama']?></td>
          <td><?=$row['nama_exam']?></td>
          <td><?=$row['nilai']?></td>
          <td><?=$row['waktu_mulai']?></td>
          <td><?=$row['waktu_mulai']?></td>
          </tr>         
          <?php $no++; }
          ?>
     </table>
</div>