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
    

     <li><a href="<?=base_url()?>/index.php/cujian">Home</a></li>
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
     <a href="<?=base_url()?>/index.php/cujian/banksoal/web"><button class="btn btn-default col-md-12" >Web Programming</button></a>
        <a href="<?=base_url()?>/index.php/cujian/banksoal/mobile"><button class="btn btn-default col-md-12" >Mobile Programming</button></a>
        <a href="<?=base_url()?>/index.php/cujian/banksoal/jaringan"><button class="btn btn-default col-md-12" >Computer Network Programming</button></a>
        <a href="<?=base_url()?>/index.php/cujian/banksoal/algoritma"><button class="btn btn-default col-md-12" >Algorithm Programming</button></a>
        <a href="<?=base_url()?>/index.php/cujian/banksoal/basisdata"><button class="btn btn-default col-md-12" >Database Programming</button></a>
        <a href="<?=base_url()?>/index.php/cujian/banksoal/objek"><button class="btn btn-default col-md-12" >Object Oriented Programming</button></a>
          <a href="<?=base_url()?>/index.php/cujian/banksoal/gui"><button class="btn btn-default col-md-12" >Graphical User Interface Programming</button></a>

      </ul>
    </li>
  </ul>
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
          <th>Action</th>
        </tr>
          <?php
          $no=1;
          foreach ($soal as $row) {?>
          <tr>
          <td><?=$no?></td>
          <td><?=$row['soal']?></td>
          <td><?php if($row['jwban']==0){?><span class="label label-success">Key</span> <?php }?><?=$row['pil_a']?></td>
          <td><?php if($row['jwban']==1){?><span class="label label-success">Key</span> <?php }?><?=$row['pil_b']?></td>
          <td><?php if($row['jwban']==2){?><span class="label label-success">Key</span> <?php }?><?=$row['pil_c']?></td>
          <td><?php if($row['jwban']==3){?><span class="label label-success">Key</span> <?php }?><?=$row['pil_d']?></td>
          <td><?php if($row['kategori']==1){echo "Web";}else if($row['kategori']==2){echo "Mobile";}else if($row['kategori']==3){echo"Jaringan";}else if($row['kategori']==4){echo"Algoritma";}else if($row['kategori']==5){echo"Basisdata";}else if($row['kategori']==6){echo"Objek";}else if($row['kategori']==7){echo"Gui";}?></td>
          <td><?=$row['paket']?></td>
          <td>
               <div class="btn-group-vertical" role="group">
                    <?php if($row['kategori']==1){?>
                         <a href="<?=base_url()?>index.php/cujian/editsoal/1/<?=$row['id']?>"><button class="btn btn-danger fa fa-pencil-square-o"></button>
                    <?php }else if($row['kategori']==2){?>
                         <a href="<?=base_url()?>index.php/cujian/editsoal/2/<?=$row['id']?>"><button class="btn btn-danger fa fa-pencil-square-o" data-toggle="modal" data-target="#edits<?=$row['id']?>"></button>
                    <?php }else if($row['kategori']==3){ ?>
                         <a href="<?=base_url()?>index.php/cujian/editsoal/3/<?=$row['id']?>"><button class="btn btn-danger fa fa-pencil-square-o" data-toggle="modal" data-target="#editr<?=$row['id']?>"></button>
                    <?php }else if($row['kategori']==4){ ?>
                         <a href="<?=base_url()?>index.php/cujian/editsoal/4/<?=$row['id']?>"><button class="btn btn-danger fa fa-pencil-square-o" data-toggle="modal" data-target="#editr<?=$row['id']?>"></button>
                    <?php }else if($row['kategori']==5){ ?>
                         <a href="<?=base_url()?>index.php/cujian/editsoal/5/<?=$row['id']?>"><button class="btn btn-danger fa fa-pencil-square-o" data-toggle="modal" data-target="#editr<?=$row['id']?>"></button>
                    <?php }else if($row['kategori']==6){ ?>
                         <a href="<?=base_url()?>index.php/cujian/editsoal/6/<?=$row['id']?>"><button class="btn btn-danger fa fa-pencil-square-o" data-toggle="modal" data-target="#editr<?=$row['id']?>"></button>
                    <?php }else if($row['kategori']==7){ ?>
                         <a href="<?=base_url()?>index.php/cujian/editsoal/7/<?=$row['id']?>"><button class="btn btn-danger fa fa-pencil-square-o" data-toggle="modal" data-target="#editr<?=$row['id']?>"></button>
                             
                    <?php } ?>
                    <a href="<?=base_url()?>index.php/cujian/hapussoal/<?=$row['id']?>"><button class="btn btn-danger fa fa-trash-o"></button></a>
               </div>
          </td>
          </tr>         
          <?php $no++; }
          ?>
     </table>
</div>
