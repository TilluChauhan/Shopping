<?php
	include 'config/config.php';

	session_start();
	if(!isset ($_SESSION['user'])){
		header('Location: login.php');
	}
	
	$AddMode = true;
	$editId = null;
	$catch = null;
	if(isset($_GET['edit'])){
		$editId = $_GET['edit'];	
		$AddMode = false;
		$pgs = "select * from Product_list where Product_ID = '".$editId."'";
		$result = mysqli_query($conn, $pgs);
		$catch = mysqli_fetch_array($result);
		
	}
	
	
	$sql = "select * from product_category";
	$resultval = mysqli_query($conn, $sql);
	

?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Argon Dashboard - Free Dashboard for Bootstrap 4</title>
	<?php include 'include/links.php';?>
</head>

<body>
	<!-- Sidenav -->		
		<?php include 'include/sidenav.php'; ?>
	<!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Header -->
		<?php include 'include/header.php'; ?>
    <!-- Header -->
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Tables</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">Tables</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Tables</li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">
              <a href="#" class="btn btn-sm btn-neutral">New</a>
              <a href="#" class="btn btn-sm btn-neutral">Filters</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col-xl-12 order-xl-1">
				  <div class="card">
					<div class="card-header">
					  <div class="row align-items-center">
						<div class="col-8">
						  <h3 class="mb-0">ADD Product</h3>
						</div>
						<div class="col-4 text-right">
						  <a href="category.php" class="btn btn-sm btn-primary">Add category</a>
						</div>
					  </div>
					</div>
					<div class="card-body">
					  <div>
						<h6 class="heading-small text-muted mb-4">User information</h6>
						<div class="pl-lg-4">
						  <div class="row">			
							<div class="col-lg-6">
								<label class="form-control-label" for="input-username">Select Category</label>								
							  <div class="form-group">
								<select id="slct_ctery">
									<?Php
										while($row = mysqli_fetch_array($resultval)){
										?>
											<option value="<?php echo $row ['P_CatId']; ?>"><?php echo $row['Name']?></option>	
										<?php	
										}
									?>								
								</select>							  
							  </div>
							</div>
						  </div>
						  <div class="row">														
							<div class="col-lg-6">
							  <div class="form-group">
								<label class="form-control-label" for="input-username">Product Name</label>
								<input type="text" id="productname" value="<?php echo $catch ? $catch['Name'] : '' ?>" class="form-control" placeholder="Product Name">
							  </div>
							</div>
							<div class="col-lg-6">
							  <div class="form-group">
								<label class="form-control-label" for="input-email">Price</label>
								<input type="email" id="price" value="<?php echo $catch ? $catch['Price'] : ''?>"class="form-control" placeholder="Enter Price">
							  </div>
							</div>
						  </div>
						  <div class="row">
							<div class="col-lg-6">
							  <div class="form-group">
								<label class="form-control-label" for="input-first-name">SQA Number</label>
								<input type="text" id="sqanumber" value="<?php echo $catch ? $catch['SQA_Number'] : ''?>"class="form-control" placeholder="SQA Number">
							  </div>
							</div>
							<div class="col-lg-6">
							  <div class="form-group">
								<label class="form-control-label" for="input-last-name">Quantity</label>
								<input type="text" id="quantity" value="<?php echo $catch ? $catch['Quantity'] : ''?>" class="form-control" placeholder="quantity">
							  </div>
							</div>
						  </div>
						<div class="row">
							<div class="col-lg-6">
							  <div class="form-group">
								<label class="form-control-label" for="input-first-name">Size</label>
								<input type="text" id="size" value="<?php echo $catch ? $catch['Size'] : ''?>"class="form-control" placeholder="Size">
							  </div>
							</div>
							<div class="col-lg-6">
							  <div class="form-group">
								<label class="form-control-label" for="input-last-name">Color</label>
								<input type="text" id="color" value="<?php echo $catch ? $catch['Color'] : ''?>" class="form-control" placeholder="color">
							  </div>
							</div>
						 </div>
						<div class="row">
							<div class="col-lg-6">
							  <div class="form-group">
								<label class="form-control-label" for="input-first-name">Product Image 1</label>
								<input type="file" id="x_image" class="form-control">
							  </div>
							</div>
							<div class="col-lg-6">
							  <div class="form-group">
								<label class="form-control-label" for="input-last-name">Product Image 2</label>
								<input type="file" id="y_image"  class="form-control">
							  </div>
							</div>
							<div class="col-lg-6">
							  <div class="form-group">
								<label class="form-control-label" for="input-last-name">Product Image 3</label>
								<input type="file" id="z_image"  class="form-control">
							  </div>
							</div>
						 </div>
						</div>
						<!-- Description -->						
						<div class="pl-lg-4">
						  <div class="form-group">
							<label class="form-control-label">Description</label>
							<textarea rows="4" id="description" value="<?php echo $catch ? $catch['Description'] : '' ?>" class="form-control" placeholder="A few words about you ..."></textarea>
						  </div>
						</div>
							<div class="col-lg-6 col-5 ">
							  <?php 
								if($AddMode){
									?>
									  <button class="btn btn-sm btn-primary" id="submit">submit</button>									
									<?php									
								}else{
									?>
										<button class="btn btn-sm btn-primary" id="update">Update</button>									
									<?php									
								}
							  ?>
							  
							  
							  
							  <a href="#" class="btn btn-sm btn-primary">reset</a>
							</div>
						</div>	
					  </div>
					</div> 
				</div>
			</div>
		<!-- Footer -->
			<?php include 'include/footer.php';?>
		<!-- Footer -->
      </div>
		
	<!---Script--->
		<?php include 'include/script.php'; ?>
	<!---Script--->
	<script>
		$(document).ready(function(){
			$("#submit").click(function(){
				var select = $("#slct_ctery").val();	
				var name = $("#productname").val();	
				var price = $("#price").val();	
				var sqa = $("#sqanumber").val();	
				var quantity = $("#quantity").val();	
				var size = $("#size").val();	
				var color = $("#color").val();	
				var a_image = $("#x_image")[0].files[0];	
				var b_image = $("#y_image")[0].files[0];	
				var c_image = $("#z_image")[0].files[0];
				var description = $("#description").val();
				var slct_ctery = $("#slct_ctery").val();
				
			
				var store = new FormData();
				store.append('P_name', name);	
				store.append('P_category', select);	
				store.append('P_price', price);	
				store.append('P_sqa', sqa);	
				store.append('P_quantity', quantity);	
				store.append('p_size', size);	
				store.append('P_color', color);	
				store.append('e_image', a_image);	
				store.append('f_image', b_image);	
				store.append('g_image', c_image);	
				store.append('p_description', description);
				store.append('p_ctery', slct_ctery); 
				
				$.ajax({
					url: 'service/product_add.php',
					type: 'POST',
					data: store,
					contentType: false,
					processData: false,
					success: function(response){
						console.log(response);
						if(response == 1){
							window.location.reload();
						}else{
							
						}
					}
				})
			});
		});
		
		$(document).ready(function(){
			$("#update").click(function(){
				var Id = '<?php echo $editId ?> ';
				var name = $("#productname").val();
				var price = $("#price").val();
				var sqa = $("#sqanumber").val();
				var quant = $("#quantity").val();
				var size = $("#size").val();
				var color = $("#color").val();
				var dscpton = $("#description").val();
								
				var data = new FormData();
				data.append('UP_Id', Id);
				data.append('UP_name', name);
				data.append('UP_price', price);
				data.append('UP_sqa', sqa);
				data.append('UP_quant', quant);
				data.append('UP_size', size);
				data.append('UP_color', color);
				data.append('UP_des', dscpton);
			
				$.ajax({
					url: 'service/product-update.php',	
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

</html