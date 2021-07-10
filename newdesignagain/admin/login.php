<?php 
session_start();
?>
<!DOCTYPE html>
<html>

<head>
  <?php 
	include "includes/css.php"
  ?>
</head>

<body class="bg-default">
  <!-- Navbar -->
 
  <!-- Main content -->
  <div class="main-content">
    <!-- Header -->
    <div class="header bg-gradient-primary " style="padding:90px 0">
      <div class="container">
        <div class="header-body text-center mb-7">
          <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6 col-md-8 px-5">
              <h1 class="text-white">Welcome!</h1>
              <p class="text-lead text-white">Use these awesome forms to login or create new account in your project for free.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </div>
    <!-- Page content -->
    <div class="container mt--8 pb-5">
      <div class="row justify-content-center">
        <div class="col-lg-5 col-md-7">
          <div class="card bg-secondary border-0 mb-0">
            <div class="card-header bg-transparent ">
              <div class="text-muted text-center mt-2 mb-3"><small>Sign in with</small></div>
              
            </div>
            <div class="card-body px-lg-5 py-lg-5">
              <div>
                <div class="form-group mb-3">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input class="form-control" placeholder="Email" type="email" id="email">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input class="form-control" placeholder="Password" type="password" id="pass">
                  </div>
                </div>
                <div class="custom-control custom-control-alternative custom-checkbox">
                  <input class="custom-control-input" id=" customCheckLogin" type="checkbox">
                  <label class="custom-control-label" for=" customCheckLogin">
                    <span class="text-muted">Remember me</span>
                  </label>
                </div>
                <div class="text-center">
                  <button type="button" class="btn btn-primary my-4" id="login">Sign in</button>
                </div>
              </div>
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-6">
              <a href="#" class="text-light"><small>Forgot password?</small></a>
            </div>
            <div class="col-6 text-right">
              <a href="#" class="text-light"><small>Create new account</small></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
   <!-- Argon Scripts -->
  <?php
		include "includes/jsfiles.php"
	  ?>

<script>
	$(document).ready(function(){
		$("#login").click(function(){
			var email = $("#email").val();
			var pass = $("#pass").val();
			
			$.ajax({
				url: 'ajax/login.php',
				type: 'POST',
				data: {f_email: email, f_pass: pass},
				success: function(resp){
					console.log(resp);
					if(resp == 1){
							window.location.href = "index.php";
						} else{
						window.location.href = 'login.php';
						
					}
				}
			})
		});
	})
</script>
</body>
</html>