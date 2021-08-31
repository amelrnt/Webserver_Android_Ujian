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
    <li class="dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#"> Options
      <span class="caret"></span></a>
      <ul class="dropdown-menu">
     <a href="<?=base_url()?>cujian/addExam/web"><button class="btn btn-default col-md-12" >Web Programming</button></a>
        <a href="<?=base_url()?>cujian/addExam/mobile"><button class="btn btn-default col-md-12" >Mobile Programming</button></a>
        <a href="<?=base_url()?>cujian/addExam/jaringan"><button class="btn btn-default col-md-12" >Computer Network Programming</button></a>
        <a href="<?=base_url()?>cujian/addExam/algoritma"><button class="btn btn-default col-md-12" >Algorithm Programming</button></a>
        <a href="<?=base_url()?>cujian/addExam/basisdata"><button class="btn btn-default col-md-12" >Database Programming</button></a>
        <a href="<?=base_url()?>cujian/addExam/objek"><button class="btn btn-default col-md-12" >Object Oriented Programming</button></a>
          <a href="<?=base_url()?>cujian/addExam/gui"><button class="btn btn-default col-md-12" >Graphical User Interface Programming</button></a>
      </ul>
    </li>
  </ul>
  <ul class="nav navbar-nav navbar-right">
  <li><button href="<?=base_url()?>cujian/start" type="button" class="btn btn-danger">Add Selected</button></li>
  </ul>
<div class="col-md-12">
     <table class="table table-hover table-striped">
          <tr>
               <th>#</th>
               <th>Question</th>
               <th>Option A</th>
               <th>Option B</th>
               <th>Option C</th>
               <th>Option D</th>
               <th>Category</th>
               <th>Packet</th>
          </tr>
          <?php
          $no=1;
          foreach ($soal as $row) {?>
          <tr>
          <td><input type="checkbox" aria-label="Checkbox for following text input"></td>
          <td><?=$row['soal']?></td>
          <td><?php if($row['jwban']==0){?><span class="label label-success">Key</span> <?php }?><?=$row['pil_a']?></td>
          <td><?php if($row['jwban']==1){?><span class="label label-success">Key</span> <?php }?><?=$row['pil_b']?></td>
          <td><?php if($row['jwban']==2){?><span class="label label-success">Key</span> <?php }?><?=$row['pil_c']?></td>
          <td><?php if($row['jwban']==3){?><span class="label label-success">Key</span> <?php }?><?=$row['pil_d']?></td>
          <td><?php if($row['kategori']==1){echo "Web";}else if($row['kategori']==2){echo "Mobile";}else if($row['kategori']==3){echo"Jaringan";}else if($row['kategori']==4){echo"Algoritma";}else if($row['kategori']==5){echo"Basisdata";}else if($row['kategori']==6){echo"Objek";}else if($row['kategori']==7){echo"Gui";}?></td>
          <td><?=$row['paket']?></td>
          </tr>         
          <?php $no++; }
          ?>
     </table>
</div>