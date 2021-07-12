<?php 
	include 'back/config/config.php';

	if(isset($_GET['id'])){
		$add = 	$_GET['id'];
		$sql ="select * from Product_list where Product_ID = '".$add."' ";
		$result = mysqli_query($conn, $sql);
		$catch = mysqli_fetch_array($result);
	}



?>
<!DOCTYPE html>
<html lang="en">

<?php include 'includes/links.php' ?>
<body>

<?php include 'includes/header.php' ?>

<!---section-three--->
<section class="section-three_d">
	<div class="my-container_a">
		<div class="main-div-three_d">
			<nav class="navbar navbar-expand-sm bg-light">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link" href="#">Home</a>
					</li>
					<span>/</span>
					<li class="nav-item">
						<a class="nav-link" href="#">Kitchenware</a>
					</li>
					<span>/</span>
					<li class="nav-item">
						<a class="nav-link" href="#">Kitchen Tools</a>
					</li>
					<span>/</span>
					<li class="nav-item">
						<a class="nav-link" href="#">Graters</a>
					</li>
					<span>/</span>
					<span class="last-span_nav"><?php $catch['Name']; ?></span>
				</ul>
			</nav>
		</div>
	</div>
</section>

<!---section-four--->
<section class="sectioin-four_d">
	<div class="my-container_a">
		<div class="row">
			<div class="col-md-5" >
			</div>
			<div class="col-md-7 bg-white" style="padding:28px">
				<div class="image-info-main-div">
					<h1><?php echo $catch['Name']; ?></h1>
					<div class="info-nav">
						<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
						<nav class="navbar navbar-expand-sm">
							<ul class="navbar-nav">
								<li class="nav-item">
									<a class="nav-link" href="#">4235 Ratings</a>
								</li>
								
								<li class="nav-item">
									<a class="nav-link" href="#">80 Reviews</a>
								</li>
								
								<li class="nav-item">
									<a class="nav-link" href="#">7 Selfies</a>
								</li>
								
								<li class="nav-item">
									<a class="nav-link" href="#">Have a question?</a>
								</li>
							</ul>
						</nav>
					</div>
					<div class="amount_d">
						<div class="mrp">MRP  <span class="rs_d">Rs.1,999 </span>  (inclusive of all taxes)</div>
						<div class="price">Rs : <?php echo $catch['Price']; ?>
							<span class="discount_d">92%OFF</span></div>
					</div>
					<div class="csinfo">
						<div class="color_d">Color : <span><?php echo $catch['Color']; ?></span></div>
						<div class="size_d">Size : <span><?php echo $catch['Size']; ?></span></div>
					</div>
					<div class="desc_d"><span>Description : </span><?php echo $catch['Description']; ?></div>
					<div class="button_d">
						<button class="btn btn-danger">ADD TO CART</button>
						<button class=" def btn btn-danger">BUY NOW</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php include 'includes/fotter.php'; ?>

<?php include 'includes/script.php'; ?>
</body>
</html>