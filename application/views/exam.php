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
     <li><a href="<?=base_url()?>cujian/addExam/all">Tambah Ujian</a></li>
  </ul>
<div class="col-md-12">
     <table class="table table-hover table-striped">
          <tr>
               <th>#</th>
               <th>Course</th>
               <th>Start Time</th>
               <th>Finish Time</th>
               <th>Action</th>
          </tr>
          <?php
          $no=1;
          foreach ($exam as $row) {?>
          <tr>
          <td><?=$no?></td>
          <td><?=$row['nama_exam']?></td>
          <td><?=$row['waktu_mulai']?></td>
          <td><?=$row['waktu_selesai']?></td>
          <td>
               <div class="btn-group-vertical" role="group">
               <a href=""><button class="btn btn-danger fa fa-pencil-square-o"></button></a>
               <a href=""><button class="btn btn-danger fa fa-trash-o"></button></a>
               </div>
          </td>
          </tr>         
          <?php $no++; }
          ?>
     </table>
</div>