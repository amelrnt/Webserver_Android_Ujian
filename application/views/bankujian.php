<html>
<body background="<?=base_url()?>images/bg.jpg">
<head>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
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
    

     <li><a href="<?=base_url()?>cujian">Home</a></li>
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
          <th>Ujian</th>
          <th>Start time</th>
          <th>End Time</th>
          <th>Category</th>
          <th>Packet</th>
          <th>Action</th>
        </tr>
          <tr>
          <td>1</td>
          <td>Ujian Akhir Semester</td>
          <td>01/01/2021 07.00</td>
          <td>01/01/2021 09.00</td>
          <td>Web</td>
          <td>5</td>
          <td>
               <div class="btn-group-vertical" role="group">
                    <a href="<?=base_url()?>cujian/editsoal/1/"><button class="btn btn-danger fa fa-pencil-square-o"></button>
                    <a href="<?=base_url()?>cujian/hapussoal/"><button class="btn btn-danger fa fa-trash-o"></button></a>
               </div>
          </td>
          </tr>
     </table>
</div>


<!-- <div class="accordion" id="accordion">
     <div id="ujian1" class="collapse" aria-labelledby="headingOne" data-parent="#accordion" data-target="#firstPanel">
          <h4>First header</h4>
     </div>
     <div id="firstPanel" class="panel-collapse collapse">
            <div>Content.</div>
        </div>
     <div id="ujian2" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
          <h4>Second header</h4>
     </div>
     <div id="ujian3" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
          <h4>Third header</h4>
     </div>
     <div id="ujian4" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
          <h4>Fourth header</h4>
     </div>
</div>

<script>
    $("#accordion").accordion();
</script> -->

<div class="panel-group" id="panels">
    <div class="panel panel-default">
        <div class="collapsed" data-toggle="collapse" data-parent="#panels" data-target="#firstPanel">
             <h4>Ujian 1</h4>

        </div>
        <div id="firstPanel" class="panel-collapse collapse">
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
                    <!-- <tr>
                    <td>1</td>
                    <td>Ujian Akhir Semester</td>
                    <td>01/01/2021 07.00</td>
                    <td>01/01/2021 09.00</td>
                    <td>Web</td>
                    <td>5</td>
                    <td>
                         <div class="btn-group-vertical" role="group">
                              <a href="<?=base_url()?>cujian/editsoal/1/"><button class="btn btn-danger fa fa-pencil-square-o"></button>
                              <a href="<?=base_url()?>cujian/hapussoal/"><button class="btn btn-danger fa fa-trash-o"></button></a>
                         </div>
                    </td>
                    </tr> -->
               </table>
          </div>
     </div>
    </div>
    <div class="panel panel-default">
        <div class="collapsed" data-toggle="collapse" data-parent="#panels" data-target="#secondPanel">
             <h4>Ujian 2</h4>

        </div>
        <div id="secondPanel" class="panel-collapse collapse">
            <div>Other content.</div>
        </div>
    </div>
</div>

<script>
$(document).ready(function(){	
     $('.collapsed').on('show.bs.collapse', function () {
    $otherPanels = $(this).parents('.panel-group').siblings('.panel-group');
    $('.collapsed',$otherPanels).removeClass('in');
});
});
</script>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>

</html>