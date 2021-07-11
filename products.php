<?php
	include 'back/config/config.php';
			
	if(isset($_GET['xt'])){
	$editID = $_GET['xt'];
	$pgs = "select * from Product_list where Ctery_id = '".$editID."' ";
	$pass = mysqli_query($conn, $pgs);			

	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>camera</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php include 'includes/links.php'; ?>
</head>
<body>
<!---section-one-two--->
	<?php include 'includes/header.php';?>
<!---section-one-two--->

<!---section-three--->

<section>
</section>

<!---section-four--->
<section class="section-four_a">
	<div class="my-container_a">
		<h2 class="product-two-h2_a">TRENDING PRODUCTS</h2>
		<div class="row">
						<?php
							while($catch = mysqli_fetch_array($pass)){
						?>
							<div class="col-md-3">
								<div class="three-slidproducts_a bg-white">
									<a href="define.php?id=<?php echo $row['Product_ID']?>">
										<div class="three-pro-one-image_a">
											<img src="back/images/upload_a/<?php echo $catch['Front_image'] ?>" />
											<i class="far fa-heart heart_a"></i>
										</div>
										<div class="three-pro-one-text_a">
											<p><?php echo $catch['Name'] ?></p>
											<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
											<div><span class="rate_a">RS <?php echo $catch['Price'] ?></span></div>
											<button>Buy</button>
											<span class="discount_a">92%OFF</span>
										</div>
									</a>
								</div>
							</div>
						<?php
					}
				?>		
			
		</div>
	</div>
</section>
<?php include 'includes/fotter.php'; ?>
<?php include 'includes/script.php';?>
<script>
	
</script>
</body>
</html>