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
     <li><a href="<?=base_url()?>cujian/home">Home</a></li>
  </ul>
</ul>
<div class="col-md-12">
     <table class="table table-hover table-striped">
          <tr>
               <th>#</th>
               <th>Exam Name</th>
               <th>Question</th>
               <th>Answer</th>
               <th>Category</th>
               <th>Packet</th>
               <th>Action</th>
          </tr>
          <?php
          $no=1;
          foreach ($exam as $row) {?>
          <tr>
          <td><?=$no?></td>
          <td><?=$row['nama_exam']?></td>
          <td><?=$row['soal']?></td>
          <td>
          <?php 
               if($row['jwban']==0)echo$row['pil_a'];
               else if($row['jwban']==1) echo$row['pil_b'];
               else if($row['jwban']==2) echo$row['pil_c'];
               else if($row['jwban']==3) echo$row['pil_d'];
          ?>
          <td><?php if($row['kategori']==1){echo "Web";}else if($row['kategori']==2){echo "Mobile";}else if($row['kategori']==3){echo"Jaringan";}else if($row['kategori']==4){echo"Algoritma";}else if($row['kategori']==5){echo"Basisdata";}else if($row['kategori']==6){echo"Objek";}else if($row['kategori']==7){echo"Gui";}?></td>
          <td><?=$row['paket']?></td>
          <td>
               <a href="<?=base_url()?>cujian/hapussoal/<?=$row['id']?>"><button class="btn btn-danger fa fa-trash-o"></button></a>
          </td>
          </tr>         
          <?php $no++; }
          ?>
     </table>
</div>