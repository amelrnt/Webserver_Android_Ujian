<body background="http://localhost/TA/images/bg.jpg">
  <div class="col-md-4">
  
  </div>
    <div class="container col-md-3">
      <form class="form-signin" action="<?=base_url()?>cujian/login" method="POST">
        <h2 class="form-signin-heading"></h2>
        <center><h3> Welcome Admin</h3></center>
        <label for="inputEmail" class="sr-only">Username</label>
        <input type="text" id="inputEmail" name="username"class="form-control" placeholder="Username" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
        <button class="btn btn-lg btn-danger btn-block" type="submit">Sign in</button>
      </form>

    </div> <!-- /container -->
    <div class="col-md-5">
     </div>


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>