<html lang="en" class="perfect-scrollbar-off">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Login</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no" name="viewport">
    <!--     Fonts and icons     -->
    <link href="assets/css/material-icons.css" rel="stylesheet" >
    <!-- CSS Files -->
    <link href="assets/css/material-dashboard.min.css" rel="stylesheet">
    <link href="assets/css/custom.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <script src="assets/js/core/jquery.min.js" type="text/javascript"></script>
      <script src="assets/js/custom.js" type="text/javascript" ></script>
    <script src="assets/js/plugins/bootstrap-notify.js"></script>
  </head>
  <body class="off-canvas-sidebar" cz-shortcut-listen="true">        
    <div class="wrapper wrapper-full-page">
      <div class="page-header login-page header-filter" filter-color="black" style="background-image: url('fleetlogin.png'); background-size: cover; background-position: top center;">
    <!--   you can change the color of the filter page using: data-color="blue | purple | green | orange | red | rose " -->
          <div class="container">
            <div class="col-lg-4 col-md-6 col-sm-6 ml-auto mr-auto">
              <form class="form" method="POST" action="dashboard.php">
                <div class="card card-login">
                  <div class="card-header card-header-rose text-center">
                    <h3 class="card-title"> Login </h3>
                    <div class="social-line">
                        <i class="material-icons md-36" style="margin-left: 38px;">Login</i>
                    </div>
                  </div>
                  <div class="card-body ">
                    <p class="card-description text-center"></p>
                    <span class="bmd-form-group">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text">
                            <i class="material-icons">username</i>
                          </span>
                        </div>
                        <input type="text" name="name" class="form-control" autofocus="" required="" placeholder="Name">
                      </div>
                    </span>
                    <span class="bmd-form-group">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text">
                            <i class="material-icons">password</i>
                          </span>
                        </div>
                        <input type="password" name="pass" class="form-control" required="" placeholder="Password">
                      </div>
                    </span>
                  </div>
                  <div class="card-footer justify-content-center">
                    <input type="submit" value="Lets Go" name="submit" class="btn btn-rose btn-link btn-lg">
                  </div>
                </div>
              </form>
            </div>
          </div>
          
      </div>
    </div>
    <!--   Core JS Files   -->
    <script src="assets/js/core/popper.min.js" type="text/javascript"></script>
    <script src="assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
    <script src="assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    
  </body>
</html>