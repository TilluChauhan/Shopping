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
                  <h3 class="mb-0">Add Product</h3>
                </div>
                <div class="col-4 text-right">
                  <a href="#!" class="btn btn-sm btn-primary">Edit</a>
				  <a href="pro-add-list.php" class="btn btn-sm btn-primary">List</a>
                </div>
              </div>
            </div>
            <div class="card-body">
              <form>
                <h6 class="heading-small text-muted mb-4">Product information</h6>
				<div id="error"></div>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">Product Name</label>
                        <input type="text" id="name" class="form-control" placeholder="Product Name">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Quantity</label>
                        <input type="text" id="quantity" class="form-control" placeholder="Quantity">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-first-name">Size</label>
                        <input type="text" id="size" class="form-control" placeholder="Size">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-last-name">Color</label>
                        <input type="text" id="color" class="form-control" placeholder="Color">
                      </div>
                    </div>
				  </div>
				  <div class="row">
					<div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-last-name">SQA Number</label>
                        <input type="text" id="sqanumber" class="form-control" placeholder="SQA Number">
                      </div>
                    </div>
					<div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-last-name">Price</label>
                        <input type="text" id="price" class="form-control" placeholder="Price">
                      </div>
					 </div>
					</div>
					<div class="row">
					  <div class="col-lg-12">
                      <div class="form-group">
						<label class="form-control-label" for="input-last-name">Description</label>
                        <textarea id="description" class="form-control"></textarea>
                      </div>
                    </div>
                    </div>
					<div class="row">
						<div class="col-lg-6">
							<div class="form-group">
								<label class="form-control-label" for="input-last-name">Product Front Image</label>
								<input type="file" id="image1" class="form-control" />
							</div>
						</div>
						<div class="col-lg-6">
							<div class="form-group">
								<label class="form-control-label" for="input-last-name">Product Side Image</label>
								<input type="file" id="image2" class="form-control" />
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6">
							<div class="form-group">
								<label class="form-control-label" for="input-last-name">Product Back Image</label>
								<input type="file" id="image3" class="form-control" />
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-6 text-left">
							<a href="#!" class="btn btn-sm btn-primary" id="submit">Submit</a>
							<a href="#!" class="btn btn-sm btn-primary">Reset</a>
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
		$("#submit").click(function(){
			var name = $("#name").val();
			var quantity = $("#quantity").val();
			var size = $("#size").val();
			var color = $("#color").val();
			var squa = $("#sqanumber").val();
			var price = $("#price").val();
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
</script>	  
</body>
</html>