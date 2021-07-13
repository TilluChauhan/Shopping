<?php 
	include 'config/config.php';
	session_start();
	if(!isset($_SESSION['user'])){
		header("Location:login.php");
	}
	
	$isaddmode = true;
	$id = null;
	$rowreg = null;
	if(isset($_GET['id'])){
		$id = $_GET['id'];	
		$isaddmode = false;
		$sqlreg = "select * from user where user_id = '".$id."'";
		$resultreg = mysqli_query($conn, $sqlreg);
		$rowreg = mysqli_fetch_array($resultreg);
		
	}
?>
<!DOCTYPE html>
<html>

<head>
  <?php 
	include "includes/acss.php"
  ?>
</head>

<body>
  <!-- Sidenav -->
  <?php 
	include "includes/aaside.php"
  ?>
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <?php
		include "includes/aheader.php"
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
                  <h3 class="mb-0">Add Product Category</h3>
                </div>
                <div class="col-4 text-right">
                  <a href="pro-category-list.php" class="btn btn-sm btn-primary">List</a>
				  <a href="#!" class="btn btn-sm btn-primary">Add</a>
                </div>
              </div>
            </div>
            <div class="card-body">
              <div>
                <h6 class="heading-small text-muted mb-4">Product Category information</h6>
				<div id="error"></div>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">Product Name</label>
                        <input type="text" id="name" value="<?php echo $rowreg ? $rowreg['user_name'] : '' ?>" class="form-control" placeholder="Product Name">
                      </div>
                    </div>
					<div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">Phone Number</label>
                        <input type="number" id="mobile" value="<?php echo $rowreg ? $rowreg['user_mobile'] : '' ?>" class="form-control" placeholder="Product Name">
                      </div>
                    </div>
                  </div>
				  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">Email</label>
                        <input type="text" id="email" value="<?php echo $rowreg ? $rowreg['user_email'] : '' ?>" class="form-control" placeholder="Product Name">
                      </div>
                    </div>
					<div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">Password</label>
                        <input type="text" id="pass" value="<?php echo $rowreg ? $rowreg['user_password'] : '' ?>" class="form-control" placeholder="Product Name">
                      </div>
                    </div>
                  </div>
				  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">Profile Image</label>
                        <input type="file"  id="profilepic"  class="form-control">
                      </div>
                    </div>
                  </div>
					<div class="col-lg-12 col-5 ">
						<?php
							if($isaddmode){
							?>
								<button class="btn btn-sm btn-primary" id="register">Register</button>																		
							<?php		
								}else{
								?>
								<button class="btn btn-sm btn-primary" id="update">Update</button>									
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
     <!-- Footer -->
	<?php
		include "includes/afotter.php"
	 ?>
    </div>
  </div>
  <!-- Argon Scripts -->
  <?php
		include "includes/ajsfiles.php"
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
							window.location.reload();
						}
					}
			   });
		});
	});
	
		
		$("#update").click(function(){
			var id = "<?php echo $id; ?>";
			var name = $("#name").val();
			var mobile = $("#mobile").val();
			var email = $("#email").val();
			var pass = $("#pass").val();
			
			
			
			var fData = new FormData();
			fData.append('id', id);
			fData.append('u_name', name);
			fData.append('u_mobile', mobile);
			fData.append('u_email', email);
			fData.append('u_pass', pass);
			
						
			$.ajax({
					type: "POST",
					url: 'ajax/register-edit.php',
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


</script>
</body>
</html>