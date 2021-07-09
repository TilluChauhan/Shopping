<?php 
	include 'config/config.php';
	session_start();
	if(!isset($_SESSION['user'])){
		header("Location:login.php");
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
                  <h3 class="mb-0">Add Product Category</h3>
                </div>
                <div class="col-4 text-right">
                  <a href="pro-category-list.php" class="btn btn-sm btn-primary">List</a>
				  <a href="#!" class="btn btn-sm btn-primary">Add</a>
                </div>
              </div>
            </div>
            <div class="card-body">
              <form>
                <h6 class="heading-small text-muted mb-4">Product Category information</h6>
				<div id="error"></div>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">Product Name</label>
                        <input type="text" id="name" class="form-control" placeholder="Product Name">
                      </div>
                    </div>
                  
                  </div>
        
					<div class="row">
						<div class="col-6 text-left">
							<button class="btn btn-sm btn-primary" id="add">Add</button>
							<button class="btn btn-sm btn-primary">Reset</button>
						</div>
					</div>
                  </div>
                </form>
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
		
		$("#add").click(function(){
			var name = $("#name").val();
			

			
						
			if(name == ""){
				$("#error").html("Please Enter Your Name");
				return false;
			}
			
			else{
			}
			$.ajax({
					type: "POST",
					url: 'ajax/pro-cate.php',
					data: {u_name:name},
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
	</script>
</body>
</html>