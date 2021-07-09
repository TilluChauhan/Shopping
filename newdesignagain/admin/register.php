<?php 
	include 'config/config.php';
	session_start();
	if(!isset($_SESSION['user'])){
		header("Location:login.php");
	}
	
	$isaddmode = true;
	$userId = null;
	$rowreg = null;
	if(isset($_GET['id'])){
		$userId = $_GET['id'];
		$isaddmode = false;
		$sqlreg = "select * from user where user_id = '".$userId."'";
		$resultreg = mysqli_query($conn, $sqlreg);
		$rowreg = mysqli_fetch_array($resultreg);
	}
?>
<!DOCTYPE html>
<html>

<head>
  <?php 
	include "includes/css.php"
  ?>
</head>

<body>
  <!-- Sidenav -->
  <?php 
	include "includes/aside.php"
  ?>
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <?php
		include "includes/header.php"
	?>

    <!-- Header -->

    <!-- Page content -->
    <div class="container-fluid mt-6">
      <div class="row">
        
        <div class="col-xl-12 order-xl-1">
          <div class="card">
            <div class="card-header">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">Add User</h3>
                </div>
                <div class="col-4 text-right">
				  <a href="#!" class="btn btn-sm btn-primary">Edit</a>
                  <a href="register-list.php" class="btn btn-sm btn-primary">List</a>
                </div>
              </div>
            </div>
            <div class="card-body">
              <div>
                <h6 class="heading-small text-muted mb-4">User information</h6>
				<div id="error" style="color:red"></div>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">User Name</label>
                        <input type="text" id="name" value="<?php echo  $row ? $rowreg["user_name"] : ''; ?>" class="form-control" placeholder="User Name">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Phone Number</label>
                        <input type="number" id="mobile" value="<?php echo  $row ? $rowreg["user_mobile"] : ''; ?>" class="form-control" placeholder="Phone Number">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-first-name">Email</label>
                        <input type="text" id="email" value="<?php echo  $row ? $rowreg["user_email"] : ''; ?>" class="form-control" placeholder="Email">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-last-name">Password</label>
                        <input type="text" id="pass" value="<?php echo $row ? $rowreg["user_password"] : '' ; ?>" class="form-control" placeholder="Password">
                      </div>
                    </div>
				  </div>
					<div class="row">
					  <div class="col-lg-6">
                      <div class="form-group">
						<label class="form-control-label" for="input-last-name">Profile Image</label>
						<input type="file" class="form-control" id="profilepic" />
                      </div>
                    </div>
                    </div>
					
					<div class="row">
						<div class="col-6 text-left">
						<?php 
							if($isaddmode){
						?>
							<button class="btn btn-sm btn-primary" id="register">Register</button>
						<?php
							} else {
							?>
							<button class="btn btn-sm btn-primary" id="update">Update</button>
						<?php
							}
						?>
						<a  href="#" class="btn btn-sm btn-primary" id="register">Reset</a>
						</div>
					</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
     <!-- Footer -->
	<?php
		include "includes/fotter.php"
	 ?>
    </div>
  </div>
  <!-- Argon Scripts -->
  <?php
		include "includes/jsfiles.php"
	  ?>
<script>
	$(document).ready(function(){
		$("#name").change(function(){
			$("#error").html('');
		});
		$("#email").change(function(){
			$("#error").html('');
		});
		$("#pass").change(function(){
			$("#error").html('');
		});
		
		$("#register").click(function(){
			var name = $("#name").val();
			var mobile = $("#mobile").val();
			var email = $("#email").val();
			var pass = $("#pass").val();
			var profilepic = $('#profilepic')[0].files[0];
			
			
			
			
			var fData = new FormData();
			fData.append('file', profilepic);
			fData.append('u_name', name);
			fData.append('u_mobile', mobile);
			fData.append('u_email', email);
			fData.append('u_pass', pass);
			
						
			if(name == ""){
				$("#error").html("Please Enter Your Name");
				return false;
			}
			else if(email == ""){
				$("#error").html("Please Enter Your Email");
				return false;
			}
			else if(pass == ""){
				$("#error").html("Please Enter Your Passowrd");
				return false;
			}
			
			else{
			}
			$.ajax({
					type: "POST",
					url: 'ajax/register.php',
					data: fData,
					processData: false,
					contentType: false,
					success: function(response)
					{
						console.log(response);
						if(response == 1){
							location.reload();
						}
					}
			   });
		});
	});
	
	
		$(document).ready(function(){
		$("#name").change(function(){
			$("#error").html('');
		});
		$("#email").change(function(){
			$("#error").html('');
		});
		$("#pass").change(function(){
			$("#error").html('');
		});
		
		$("#update").click(function(){
			var name = $("#name").val();
			var mobile = $("#mobile").val();
			var email = $("#email").val();
			var pass = $("#pass").val();
			
			
			
			
			$.ajax({
					type: "POST",
					url: 'ajax/register-edit.php',
					data: {u_name:name, u_mobile:mobile, u_email:email, u_pass:pass},
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