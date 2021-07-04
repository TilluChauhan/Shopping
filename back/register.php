<?php 
	include 'config/config.php';
	session_start();
	if(!isset($_SESSION['user'])){
		header('Location: login.php');
		
	}
	
	
	$editMode = true;
	$editID = null;
	$catch = null;
		
	if(isset($_GET['edit'])){
	$editID = $_GET['edit'];
	$editMode = false;	
	$sql = "select * from user where UserId = '".$editID."' ";
	$result = mysqli_query($conn, $sql);	
	$catch = mysqli_fetch_array($result);
		
	}
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Argon Dashboard - Free Dashboard for Bootstrap 4</title>
	<?php include 'include/links.php'; ?>	
</head>

<body class="bg-default">
			<?php include 'include/sidenav.php'; ?>
		<!-- Navbar -->
	<div class="main-content" id="panel">
	
		
  		<?php include 'include/header.php'; ?>
	
  <!-- Main content -->
  <div class="main-content">
    <!-- Header -->
    <div class="header bg-gradient-primary py-7 py-lg-8 pt-lg-9">
      <div class="container">
        <div class="header-body text-center mb-7">
          <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6 col-md-8 px-5">
              <h1 class="text-white">Create an account</h1>
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
      <!-- Table -->
      <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8">
         <div class="card bg-secondary border-0">
            <div class="card-body px-lg-5 py-lg-5">              
                <h1 class="text-center text-muted mb-4">REGISTER</h1>
              <div role="form">
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                    </div>
                    <input class="form-control" id="name" value="<?php echo $catch ? $catch['Name'] : '' ?>" placeholder="Name" type="text">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input class="form-control" id="email" placeholder="Email" value="<?php echo $catch ? $catch['Email'] : '' ?>" type="email">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input class="form-control" id="pswrd" placeholder="Password" value="<?php echo $catch ? $catch['Password'] : '' ?>" type="password">
                  </div>
                </div>
				<div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-mobile-button"></i></span>
                    </div>
                    <input class="form-control" id="mobile" placeholder="Mobile" value="<?php echo $catch ? $catch['Mobile'] : '' ?>" type="number">
                  </div>
                </div>
				<div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-album-2"></i></span>
                    </div>
                    <input class="form-control" id="photo" type="file">
                  </div>
                </div>
                <div class="text-muted font-italic"><small>password strength: <span class="text-success font-weight-700">strong</span></small></div>
                <div class="row my-4">
                  <div class="col-12">
                    <div class="custom-control custom-control-alternative custom-checkbox">
                      <input class="custom-control-input" id="customCheckRegister" type="checkbox">
                      <label class="custom-control-label" for="customCheckRegister">
                        <span class="text-muted">I agree with the <a href="#!">Privacy Policy</a></span>
                      </label>
                    </div>
                  </div>
                </div>
                <div class="text-center">
                <?php
					if($editMode){
						?>
						<button type="button" id="sign" class="btn btn-primary mt-4">Create account</button>
						
						<?php
					}else{
						?>
							<button type="button" id="update" class="btn btn-primary mt-4">Update</button>
						<?php
					}
				?>
				  
                
				</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
 <?php include 'include/script.php';?>
	<script>
		$(document).ready(function(){
			$("#sign").click(function(){
				var name = $("#name").val();
				var email = $("#email").val();
				var password = $("#pswrd").val();
				var mobile = $("#mobile").val();
				var photo = $("#photo")[0].files[0];
					
					
				var store = new FormData();
				store.append('l_name', name);
				store.append('l_email', email);
				store.append('l_pass', password);
				store.append('l_mobile', mobile);
				store.append('l_pic',  photo);		
					
				$.ajax({
					url: 'service/register.php',
					type: 'POST',
					data: store,
					contentType: false,
					processData: false,	
					success: function(response){
						if(response == 1){
							window.location.reload();
						}else{
							
						}
					}
				});
				

			});	
		});
		
		
		
		$(document).ready(function(){
			$("#update").click(function(){
				var name = $("#name").val();
				var email = $("#email").val();
				var pass = $("#pswrd").val();
				var mobile = $("#mobile").val();
				var userId = '<?php echo $editID ?>';
				//var photo = $("#photo")[0].files[0];
				
				console.log(userId);
				var push = new FormData();
				push.append('U_name', name);
				push.append('U_email', email);
				push.append('U_pass', pass);
				push.append('U_mobile', mobile);
				push.append('U_userId', userId);
				//push.append('U_pic',  photo);	
					
				$.ajax({
					url: 'service/update-register.php',
					type: 'POST',
					data: push,
					contentType: false,
					processData: false,	
					success: function(response){
						if(response == 1){
							window.location.reload();
						}else{
							
						}
					}
				});
			});	
		});
		
	</script>
			
		 
</body>

</html>