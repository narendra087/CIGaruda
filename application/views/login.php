<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="icon" type="image/png" href="<?php echo base_url()?>assets/gi.ico">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    
<style>
      /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
      @import url(https://fonts.googleapis.com/css?family=Open+Sans);
*, *:before, *:after {
  box-sizing: border-box;
}
</style>


    <!-- Custom LOGIN-->
      <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.css'>
      <link rel='stylesheet' href='<?php echo base_url();?>/assets/vendors/font-awesome/css/font-awesome.min.css'>

      <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/login-style.css">
    <!-- END -->
    <!-- Bootstrap -->
    <link href="<?php echo base_url();?>/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url();?>/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url();?>/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="<?php echo base_url();?>/vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
<!--    <link href="../build/css/custom.css" rel="stylesheet"> -->
      <title>Garuda Indonesia</title>

  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
              <div class="signupSection">
              <div class="info">
                <h2>Survei Asessment</h2>
                <br>
                <img src="<?php echo base_url();?>/assets/images/logo garuda putih.png">
                <br>
                <h5>Masuk sebagai ADMIN <a class="effect-1" href="#signup"> KLIK DISINI </a> </h5>
              </div>
              <form action="<?php echo base_url()."Welcome/pegawai"?>" method="POST" class="signupForm" name="signupform">
                <h2>Login</h2>
                <p> Login dengan nomor karyawan untuk mengisi survei </p>
                <ul class="noBullet">
                  <li>
                    <label for="password"></label>
                    <input type="text" class="inputFields" name="nopeg" placeholder="No ID karyawan" value=""  />
                    <!-- oninput="return passwordValidation(this.value)" required/> -->
                  </li>
                  <br>
                  <li>
                    <button type="submit" class="join-btn">Login</button>


                  </li>
                </ul>
            </form>
          </div>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
             <div class="signupSection">
                  <div class="info">
                    <h2>Survei Assessment</h2>
                    <br>
                    <img src="<?php echo base_url();?>/assets/images/logo garuda putih.png" height="30%">
                    <br>
                  <h5>Isi Kuisioner <a class="effect-1" href="#signin"> KLIK DISINI </a> </h5>
                  </div>
                  <form action="<?php echo base_url()."Welcome/admin"?>" method="POST" class="signupForm paddingadmin" name="admin">
                    <h2>Login ADMIN</h2>
                    <ul class="noBullet">
                      <li>
                        <label for="password"></label>
                        <input type="text" class="inputFields" name="admin_username" placeholder="Username Assessor" value=""/>
                        <!--oninput="return passwordValidation(this.value)" required/>-->
                      </li>

                      <li>
                        <label for="password"></label>
                        <input type="password" class="inputFields" name="password" placeholder="Password" value=""/>
                        <!--oninput="return passwordValidation(this.value)" required/>-->
                      </li>
                      <br>
                       <li>
                        <button type="submit" class="join-btn">Login</button>
                      </li>
                    </ul>


                  </form>
                </div>
          </section>
        </div>
      </div>
    </div>

    <script src="<?php echo base_url();?>/assets/js/login.js" type="text/javascript"></script>
  </body>
</html>
