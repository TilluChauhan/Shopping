<?php 
	include 'config/config.php';
	session_start();
	if(!isset($_SESSION['user'])){
		header("Location:login.php");
	}
	
	$isaddmode = true;
	$id = null;
	$rowpro = null;
	if(isset($_GET['id'])){
		$id = $_GET['id'];
		$isaddmode = false;
		$sqlpro = "select * from proadd where proadd_id = '".$id."'";
		$resultpro = mysqli_query($conn, $sqlpro);
		$rowpro = mysqli_fetch_array($resultpro);
	}
		$sqlpro2 = 'select * from pro_category';
		$querypro2 = mysqli_query($conn, $sqlpro2);
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
                  <h3 class="mb-0">Add Product</h3>
                </div>
                <div class="col-4 text-right">
                  <a href="#!" class="btn btn-sm btn-primary">Edit</a>
				  <a href="pro-add-list.php" class="btn btn-sm btn-primary">List</a>
                </div>
              </div>
            </div>
            <div class="card-body">
              <div>
                <h6 class="heading-small text-muted mb-4">Product information</h6>
				<div id="error"></div>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">Product Name</label>
                        <input type="text" id="name" value="<?php echo  $rowpro ? $rowpro["proadd_name"] : ''; ?>" class="form-control" placeholder="Product Name">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Quantity</label>
                        <input type="text" id="quantity" value="<?php echo  $rowpro ? $rowpro["proadd_quantity"] : ''; ?>" class="form-control" placeholder="Quantity">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-first-name">Size</label>
                        <input type="text" id="size" value="<?php echo  $rowpro ? $rowpro["proadd_size"] : ''; ?>" class="form-control" placeholder="Size">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-last-name">Color</label>
                        <input type="text" id="color" value="<?php echo  $rowpro ? $rowpro["proadd_color"] : ''; ?>" class="form-control" placeholder="Color">
                      </div>
                    </div>
				  </div>
				  <div class="row">
					<div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-last-name">SQA Number</label>
                        <input type="text" id="sqanumber" value="<?php echo  $rowpro ? $rowpro["proadd_squa"] : ''; ?>" class="form-control" placeholder="SQA Number">
                      </div>
                    </div>
					<div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-last-name">Price</label>
                        <input type="text" id="price" value="<?php echo  $rowpro ? $rowpro["proadd_price"] : ''; ?>" class="form-control" placeholder="Price">
                      </div>
					 </div>
					</div>
					<div class="row">
						<div class="col-lg-6">
							<div class="form-group">
								<label class="form-control-label" for="input-last-name">Category</label>
								<select class="form-control" id="category">
									<option>Select Category</option>
									<?php
										while($row = mysqli_fetch_array($querypro2)){
									?>
									<option value="<?php echo $row['pro_cate_id'] ?>"><?php echo $row['pro_cate_name'] ?>     </option>
									<?php
									}
									?>
								</select>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="form-group">
								<label class="form-control-label" for="input-last-name">Product Front Image</label>
								<input type="file" id="image1" class="form-control" />
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6">
							<div class="form-group">
								<label class="form-control-label" for="input-last-name">Product Side Image</label>
								<input type="file" id="image2" class="form-control" />
							</div>
						</div>
						<div class="col-lg-6">
							<div class="form-group">
								<label class="form-control-label" for="input-last-name">Product Back Image</label>
								<input type="file" id="image3" class="form-control" />
							</div>
						</div>
					</div>
					<div class="row">
					  <div class="col-lg-12">
                      <div class="form-group">
						<label class="form-control-label" for="input-last-name">Description</label>
                        <textarea id="description" value="<?php echo  $rowpro ? $rowpro["proadd_desc"] : ''; ?>" class="form-control"><?php echo  $row ? $rowpro["proadd_desc"] : ''; ?></textarea>
                      </div>
                    </div>
                    </div>
						<div class="row">
						<div class="col-6 text-left">
						<?php 
							if($isaddmode){
						?>
							<button class="btn btn-sm btn-primary" id="submit">Submit</button>
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
		$("#submit").click(function(){
			var name = $("#name").val();
			var quantity = $("#quantity").val();
			var size = $("#size").val();
			var color = $("#color").val();
			var squa = $("#sqanumber").val();
			var price = $("#price").val();
			var category = $("#category").val();
			var desc = $("#description").val();
			var image1 = $('#image1')[0].files[0];
			var image2 = $('#image2')[0].files[0];
			var image3 = $('#image3')[0].files[0];
			
			
			
			
			var fData = new FormData();
			fData.append('file1', image1);
			fData.append('file2', image2);
			fData.append('file3', image3);
			fData.append('u_name', name);
			fData.append('u_quantity', quantity);
			fData.append('u_size', size);
			fData.append('u_color', color);
			fData.append('u_squa', squa);
			fData.append('u_price', price);
			fData.append('u_category', category);
			fData.append('u_desc', desc);
			
						
			if(name == ""){
				$("#name").css({"border":"1px solid red", "background-color":"red"});
				return false;
			}			
						
			
			else if(quantity == ""){
				$("#error").html("Please enter Quantity");
				return false;
			}
			else if(size == ""){
				$("#error").html("Please enter Size");
				return false;
			}
			else if(color == ""){
				$("#error").html("Please enter Color");
				return false;
			}
			else if(price == ""){
				$("#error").html("Please enter Price");
				return false;
			}
			else if(category == ""){
				$("#category").html("Please enter Category");
				return false;
			}			
			else{
			}
			$.ajax({
					type: "POST",
					url: 'ajax/productadd.php',
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
	
			
		$("#update").click(function(){
			var id = "<?php echo $id; ?>";
			var name = $("#name").val();
			var quantity = $("#quantity").val();
			var size = $("#size").val();
			var color = $("#color").val();
			var squa = $("#sqanumber").val();
			var price = $("#price").val();
			var price = $("#price").val();
			var desc = $("#description").val();
			
			
			
			var fData = new FormData();
			fData.append('id', id);
			fData.append('u_name', name);
			fData.append('u_quantity', quantity);
			fData.append('u_size', size);
			fData.append('u_color', color);
			fData.append('u_squa', squa);
			fData.append('u_price', price);
			fData.append('u_desc', desc);
			
						
			$.ajax({
					type: "POST",
					url: 'ajax/proadd-edit.php',
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