<?php 
	include 'config/config.php';
	session_start();
	if(!isset($_SESSION['user'])){
		header("Location:login.php");
	}
	
	$AddMode = true;
	$editId = null;
	$catch = null;
	if(isset($_GET['edit'])){
		$editId = $_GET['edit'];	
		$AddMode = false;
		$pgs = "select * from pro_category where pro_cate_id = '".$editId."'";
		$result = mysqli_query($conn, $pgs);
		$catch = mysqli_fetch_array($result);
		
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
                        <input type="text" id="name" value="<?php echo $catch ? $catch['pro_cate_name'] : '' ?>" class="form-control" placeholder="Product Name">
                      </div>
                    </div>
                  
                  </div>
					<div class="col-lg-12 col-5 ">
						<?php
							if($AddMode){
							?>
								<button class="btn btn-sm btn-primary" id="create">Create</button>																		
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
		
		$("#create").click(function(){
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
	$(document).ready(function(){
			$("#update").click(function(){
				var name = $("#name").val(); 
				var id = '<?php echo $editId?>';

				var data = new FormData();
				data.append('UP_name', name);
				data.append('UP_ID', id);	

				
				$.ajax({
					url: 'ajax/update-category.php',
					type: 'POST',
					data: data,
					contentType: false,
					processData: false,	
					success: function(response){
						if(response == 1){
							window.location.reload();	
							}else{
						
							}
					}		
				})	
			});
		});
	</script>
</body>
</html>