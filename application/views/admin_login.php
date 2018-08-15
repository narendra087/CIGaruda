
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Survey Garuda Indonesia</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url();?>/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url();?>/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url();?>/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="<?php echo base_url();?>/vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url();?>/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form class="m-t" role="form" action="<?php echo base_url()."login/unit"?>" method="POST">
                                  <div class="form-group">
                                      <label>LOGIN SEBAGAI ADMIN</label>
                                      <input type="text" class="form-control" placeholder="Masukkan Unit misal : JKTID" name="unit" required="">
                                      <input type="text" class="form-control" placeholder="masukkan MasterPassword admin " name="unit" required="">
                                  </div>
                                  <button type="submit" class="btn btn-info block full-width m-b">Login</button>
                              </form>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form method="post" action="register.php">
              <h1>Register</h1>

              <div>
                <input type="text" class="form-control" placeholder="Username" name="username" required="" value="" />
              </div>
              <div>
                <input type="email" class="form-control" placeholder="Email" name="email" required="" value="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" name="password_1" required="" />
              </div>
               <div>
                <input type="password" class="form-control" placeholder="Confirm Password" name="password_2" required="" />
              </div>
              <div>
                <button type="submit" class="btn" name="reg_user">Register</button>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="#signin" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
