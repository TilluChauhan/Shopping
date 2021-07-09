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
		<div class="main-div-three-products_a">
			<div class="owl-carousel owl-theme" id="slider2">
				<?php
					while($catch = mysqli_fetch_array($pass)){
						?>
							<div class="item">
								<div class="three-slidproducts_a">
									<a href="#">
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
	</div>
</section>
<?php include 'includes/fotter.php'; ?>
<?php include 'includes/script.php';?>
<script>
	$(document).ready(function(){
		$('#slider1').owlCarousel({
			loop:true,
			dots:false,
			autoplay:true,
			autoplayTimeout:3000,
			autoplaySpeed:800,
			navText: ["<i class='fas fa-chevron-left'></i>","<i class='fas fa-chevron-right'></i>"],
			margin:10,
			nav:true,
			responsive:{
				0:{
					items:1
				},
				600:{
					items:1
				},
				1000:{
					items:1
				}
			}
		});
		$('#slider2').owlCarousel({
			loop:true,
			dots:false,
			autoplay:false,
			autoplayTimeout:5000,
			autoplayHoverPause:false,
			navText: ["<i class='fas fa-chevron-left'></i>","<i class='fas fa-chevron-right'></i>"],
			margin:10,
			nav:true,
			responsive:{
				0:{
					items:4
				},
				600:{
					items:4
				},
				1000:{
					items:4
				}
			}
		});
		$('#slider3').owlCarousel({
			loop:true,
			dots:false,
			autoplay:false,
			autoplayTimeout:5000,
			autoplayHoverPause:false,
			navText: ["<i class='fas fa-chevron-left'></i>","<i class='fas fa-chevron-right'></i>"],
			margin:10,
			nav:true,
			responsive:{
				0:{
					items:5
				},
				600:{
					items:5
				},
				1000:{
					items:5
				}
			}
		});
	});
</script>
</body>
</html>