<!DOCTYPE html>
<html lang="en">

<?php include 'includes/css.php' ?>
<body>

<<<<<<< HEAD
<section>
	<div class= "container">
		<div class="row bg-white">
			<div class="col-md-6">				
				<div class="C_padding">							
					<p>Shopping Cart <span style=" color:#ccc">(2 Item)</span></p>				
				</div>
			</div>
			<div class="col-md-6 ">				
				<div class="C_padding text-end">				
					<a href="#" class="C_fill">
						<i class="fas fa-times"></i>
					</a>
				</div>
			</div>	
		</div>		
	</div>
</section>


<section class="heding">
	<div class="container">
		<div class="row">
			<div class="col-md-4 bg-light">
				<span class="text-secondary">Item Details</span>
			</div>
			<div class="col-md-1">
				<span class="text-secondary">Price</span>
			</div>
			<div class="col-md-2">
				<span class="text-secondary">Quantity</span>
			</div>
			<div class="col-md-4">
				<span class="text-secondary">Delivery With Charges</span>
			</div>
			<div class="col-md-1">
				<span class="text-secondary">sub total</span>
			</div>
		</div>
	</div>
</section>



<section class="C_main">
	<div class="container">
		<div class="row bg-white">
			<div class="col-md-4">
				<div class="C_flex">
					<div>
						<a href="#"><img class="C_img" alt="" src="asset/cycle1.jpg"/></a>
					</div>
					<div class="C_hed">
						<a href="#">Veirdo 100 Percent Cotton Green Color Block T-Shirt</a>
						<p>Color:Brown <span>|</span> Size:L</p>
					</div>					
				</div>
				<div>
					
				</div>
			</div>
			<div class="col-md-1">
				<p class="C_rs">Rs. 189</p>
			</div>
			<div class="col-md-2">
				<select class="C_slct">
					<option class="C_slct" value="">1</option>
					<option class="C_slct" value="">2</option>
				</select>
			</div>
			<div class="col-md-4"></div>
			<div class="col-md-1">
				<p class="C_rs">Rs. 189</p>
			</div>
		</div>
	</div>
</section>
</body>
<script type="text/javascript">
  
</script>
=======
<?php include 'includes/full-header.php' ?>

<?php 
$userId = null;
if(isset($_SESSION['user_id'])){
	$userId = $_SESSION['user_id'];
}
?>

<section class="container">
	<div class="row">
		<div class="col-md-5">
			<div class="row">
				<div class="col-md-3">
					<div class="item-detail_cart">
						<span>Item Details</span>
					</div>
				</div>
				<div class="col-md-2">
					<div class="price_cart">
						<span>Price</span>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-2">
			<div class="quantity_cart">
				<span>Quantity</span>
			</div>
		</div>
		<div class="col-md-5">
			<div class="row">
				<div class="col-md-3">
					<div class="showing_cart">
						<span>Showing Availability at</span>
					</div>
				</div>
				<div class="col-md-2">
					<div class="subtotal_cart">
						<span>Subtotal</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<?php include 'includes/fotter.php'; ?>
<?php include 'includes/js.php'; ?>
</body>

>>>>>>> 578e21657d78d346997bbfa1812a11b2f903f5e8
</html>