<?php   
	include 'admin/config/config.php';

	if(isset($_GET['id'])){
	$id = $_GET['id'];	
	$pgs = "select * from proadd where proadd_id= '".$id."' ";		
	$result = mysqli_query($conn, $pgs);
	$catch = mysqli_fetch_array($result);
	}	
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>camera</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php include 'includes/css.php'; ?>
</head>
<body>
<!---section-one-two--->
<?php include 'includes/full-header.php';?>
	<?php 
		if(isset($_SESSION['user_id'])){
		$userId = $_SESSION['user_id'];
		$sql = "select * from user where user_id = '".$userId."' ";
		$resultval = mysqli_query($conn, $sql);
		$catchval = mysqli_fetch_array($resultval);
		
		}
	?>

			<div class="container">
				<div class="row">
					<div class="col-md-8 ">
						<div class="card-body">
						  <div>
							<h6 class="heading-small text-muted mb-4 ">ORDER</h6>
							<div class="pl-lg-4">
							  <div class="row">														
								<div class="col-md-12">
								  <div class="form-group">
									<label class="form-control-label" for="input-username">Product Name</label>
									<input type="text" id="product" value="<?php echo $catch ? $catch['proadd_name'] : '';?>"class="form-control" placeholder="Product Name" readonly>
								  </div>
								</div>
								<div class="col-md-12">
								  <div class="form-group">
									<label class="form-control-label" for="input-email">User Name</label>
									<input type="email" id="user" value="<?php echo $catchval ? $catchval['user_name'] : '';?>" class="form-control" placeholder="User Name">
								  </div>
								</div>
							  </div>
							  <div class="row">
								<div class="col-md-12">
								  <div class="form-group">
									<label class="form-control-label" for="input-first-name">Quantiy</label>
									<input type="number" id="quantity" class="form-control" placeholder="Quantity">
								  </div>
								</div>
								<div class="col-md-12">
								  <div class="form-group">
									<label class="form-control-label" for="input-last-name">Price</label>
									<input type="none" id="price" value="<?php echo $catch ? $catch['proadd_price'] : '';?>"class="form-control" placeholder="Price" readonly>
								  </div>
								</div>
							  </div>
							  <div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label class="form-control-label" for="input-first-name">Phone no</label>
										<input type="number" id="phone" value="<?php echo $catchval ? $catchval['user_mobile'] : '';?>" class="form-control" placeholder="Quantity">
									</div>
								</div>
							  </div>
							<div class="row">
								<div class="col-md-12">
								  <div class="form-group">
									<label class="form-control-label" for="input-first-name">Address</label>
									<input type="text" id="address"class="form-control" placeholder="Address">
								  </div>
								</div>
								<div class="col-md-12">
								  <div class="form-group">
									<label class="form-control-label" for="input-last-name">Total Amount</label>
									<input type="text" id="amount" value="<?php echo $catch ? $catch['proadd_price'] : '';?>" class="form-control" placeholder="Total Amount">
								  </div>
								</div>
							 </div>
								<div class="col-lg-6 col-5 ">
									<button class="btn btn-danger" id="submit">BUY</button>									
								</div>
							</div>	
						  </div>			
						</div>
					</div>
					<div class="col-md-4">
					
					</div>	
				</div>		
			</div>		
					
<?php include 'includes/js.php';?>
<script>
	$(document).ready(function(){
			$("#submit").click(function(){
				var productid = $("#product").val();
				var user = $("#user").val();
				var quantity = $("#quantity").val();
				var price = $("#price").val();
				var phone = $("#phone").val();
				var address = $("#address").val();
				var amount = $("#amount").val();

				var store = new FormData();
				store.append('O_Pid', productid);
				store.append('O_Uid', user);
				store.append('O_quantity', quantity);
				store.append('O_price', price);
				store.append('O_phone', phone);
				store.append('O_address', address);
				store.append('O_amount', amount);
				
				$.ajax({
					url:'ajax/buy-now.php',
					type:'POST',
					data: store,
					contentType: false,	
					processData: false,
					success:function(response){
						if(response == 1){
							window.location.href = 'index.php';
						}else{
							
						}	
					}
				})	
			});
		});
</script>
</body>
</html>