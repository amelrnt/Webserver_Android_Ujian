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
  <div class="col-md-12">
  <form>
    <div class="row mb-3">
      <label class="form-label">Nama Ujian</label>
      <input type="text" class="form-control">
    </div>
    <div class="row mb-3">
      <label class="form-label">Start Time</label>
      <input class="datetimepicker" data-provide="datepicker">
    </div>
    <div class="row mb-3">
      <label class="form-label">End Time</label>
      <input class="datetimepicker" data-provide="datepicker">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
      $(function() {
        $('.datetimepicker').datetimepicker();
      });
    </script>
</div>