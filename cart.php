<!DOCTYPE html>
<html lang="en">

<?php include 'includes/css.php' ?>
<body>

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

</html>