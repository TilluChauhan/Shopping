
<?php   
	include 'back/config/config.php';
		
	$pgs = "select * from product_list";
	$result = mysqli_query($conn, $pgs);
	




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
<section class="section-three_a">
	<div class="my-container_a">
		<div class="row">
			<div class="col-md-12">
				<div class="three-right-section_a">
					<div class="three-big-slider_a">
						<div class="owl-carousel owl-theme" id="slider1">
							<div class="item"><img src="asset/slid-one.jpg" /></div>
							<div class="item"><img src="asset/slid-two.jpg" /></div>
							<div class="item"><img src="asset/slid-three.jpg" /></div>
							<div class="item"><img src="asset/slid-four.jpg" /></div>
							<div class="item"><img src="asset/slid-five.jpg" /></div>
						</div>
					</div>
					<div class="three-product_a">
						<h2>RECENTLY VIEWED PRODUCTS</h2>
						<div class="main-div-three-products_a">
							<div class="owl-carousel owl-theme" id="slider2">
								<?php
									while($row = mysqli_fetch_array($result)){
										?>
											<div class="item">
												<div class="three-slidproducts_a">
													<a href="#">
														<div class="three-pro-one-image_a">
															<img src="back/images/upload_a/<?php echo $row['Front_image'] ?>" />
															<i class="far fa-heart heart_a"></i>
														</div>
														<div class="three-pro-one-text_a">
															<p><?php echo $row['Name'] ?></p>
															<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
															<div><span class="rate_a">RS <?php echo $row['Price'] ?></span></div>
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
					
				</div>
			</div>
				
		</div>
		<div style="padding:20px 0; background-color:#fff;">
			<div class="container">
				<div class="row">		
				<div class=" col-md-12">	
					<div class="scan-main_a">
						<div class="scan_a scan-img_a">
							<img src="asset/code.png" />
						</div>
						<div class="scan_a scan-text_a">
							<h2>Enjoy Convenient Order Tracking</h2>
							<h3>Scan to download app</h3>
						</div>
					</div>
				</div>
			</div>
			</div>
		</div>		
	</div>
</section>

<section>
</section>

<!---section-four--->
<section class="section-four_a">
	<div class="my-container_a">
		<h2 class="product-two-h2_a">TRENDING PRODUCTS</h2>
		<div class="main-div-four_a">
				<div class="owl-carousel owl-theme" id="slider3">
					<div class="item">
						<div class="products-two_a">
							<a href="#">
								<div class="three-pro-one-image_a">
									<img src="asset/one.jpeg" />
									<i class="far fa-heart heart heart_a"></i>
								</div>
								<div class="three-pro-one-text_a">
									<p>Bhawna Collection Loard Shiv Trishul Damru</p>
									<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
									<div><span class="cut-rate_a">RS 1,499</span><span class="rate_a">RS 113</span></div>
									<span class="discount_a">92%OFF</span>
								</div>
							</a>
						</div>
					</div>
					<div class="item">
						<div class="products-two_a">
							<a href="#">
								<div class="three-pro-one-image_a">
									<img src="asset/two.jpeg" />
									<i class="far fa-heart heart heart_a"></i>
								</div>
								<div class="three-pro-one-text_a">
									<p>Bhawna Collection Loard Shiv Trishul Damru</p>
									<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
									<div><span class="cut-rate_a">RS 1,499</span><span class="rate_a">RS 113</span></div>
									<span class="discount_a">92%OFF</span>
								</div>
							</a>
						</div>
					</div>
					<div class="item">
						<div class="products-two_a">
							<a href="#">
								<div class="three-pro-one-image_a">
									<img src="asset/three.jpg" />
									<i class="far fa-heart heart heart_a"></i>
								</div>
								<div class="three-pro-one-text_a">
									<p>Bhawna Collection Loard Shiv Trishul Damru</p>
									<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
									<div><span class="cut-rate_a">RS 1,499</span><span class="rate_a">RS 113</span></div>
									<span class="discount_a">92%OFF</span>
								</div>
							</a>
						</div>
					</div>
					<div class="item">
						<div class="products-two_a">
							<a href="#">
								<div class="three-pro-one-image_a">
									<img src="asset/four.jpeg" />
									<i class="far fa-heart heart heart_a"></i>
								</div>
								<div class="three-pro-one-text_a">
									<p>Bhawna Collection Loard Shiv Trishul Damru</p>
									<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
									<div><span class="cut-rate_a">RS 1,499</span><span class="rate_a">RS 113</span></div>
									<span class="discount_a">92%OFF</span>
								</div>
							</a>
						</div>
					</div>
					<div class="item">
						<div class="products-two_a">
							<a href="#">
								<div class="three-pro-one-image_a">
									<img src="asset/five.jpg" />
									<i class="far fa-heart heart heart_a"></i>
								</div>
								<div class="three-pro-one-text_a">
									<p>Bhawna Collection Loard Shiv Trishul Damru</p>
									<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
									<div><span class="cut-rate_a">RS 1,499</span><span class="rate_a">RS 113</span></div>
									<span class="discount_a">92%OFF</span>
								</div>
							</a>
						</div>
					</div>
					<div class="item">
						<div class="products-two_a">
							<a href="#">
								<div class="three-pro-one-image_a">
									<img src="asset/six.jpg" />
									<i class="far fa-heart heart heart_a"></i>
								</div>
								<div class="three-pro-one-text_a">
									<p>Bhawna Collection Loard Shiv Trishul Damru</p>
									<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
									<div><span class="cut-rate_a">RS 1,499</span><span class="rate_a">RS 113</span></div>
									<span class="discount_a">92%OFF</span>
								</div>
							</a>
						</div>
					</div>
					<div class="item">
						<div class="products-two_a">
							<a href="#">
								<div class="pro-one-image_a">
									<img src="asset/seven.jpg" />
									<i class="far fa-heart heart heart_a"></i>
								</div>
								<div class="three-pro-one-text_a">
									<p>Bhawna Collection Loard Shiv Trishul Damru</p>
									<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
									<div><span class="cut-rate_a">RS 1,499</span><span class="rate_a">RS 113</span></div>
									<span class="discount_a">92%OFF</span>
								</div>
							</a>
						</div>
					</div>
					<div class="item">
						<div class="products-two">
							<a href="#">
								<div class="three-pro-one-image_a">
									<img src="asset/eight.jpg" />
									<i class="far fa-heart heart"></i>
								</div>
								<div class="three-pro-one-text_a">
									<p>Bhawna Collection Loard Shiv Trishul Damru</p>
									<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
									<div><span class="cut-rate_a">RS 1,499</span><span class="rate_a">RS 113</span></div>
									<span class="discount_a">92%OFF</span>
								</div>
							</a>
						</div>
					</div>
					<div class="item">
						<div class="products-two_a">
							<a href="#">
								<div class="three-pro-one-image_a">
									<img src="asset/nine.jpeg" />
									<i class="far fa-heart heart heart_a"></i>
								</div>
								<div class="three-pro-one-text_a">
									<p>Bhawna Collection Loard Shiv Trishul Damru</p>
									<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
									<div><span class="cut-rate_a">RS 1,499</span><span class="rate_a">RS 113</span></div>
									<span class="discount_a">92%OFF</span>
								</div>
							</a>
						</div>
					</div>
					<div class="item">
						<div class="products-two_a">
							<a href="#">
								<div class="three-pro-one-image_a">
									<img src="asset/ten.jpeg" />
									<i class="far fa-heart heart heart_a"></i>
								</div>
								<div class="three-pro-one-text_a">
									<p>Bhawna Collection Loard Shiv Trishul Damru</p>
									<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
									<div><span class="cut-rate_a">RS 1,499</span><span class="rate_a">RS 113</span></div>
									<span class="discount_a">92%OFF</span>
								</div>
							</a>
						</div>
					</div>
			</div>
		</div>
	</div>
</section>

<!---section-five--->
<section class="section-five">
<div class="leaf">
	<img src="asset/leaf.png" />
</div>
	<div class="my-container_a">
		<div class="row">
			<div class="col-md-6">
				<div class="mobile-div">
					<img src="asset/mobile.png" />
				</div>
			</div>
			<div class="col-md-6">
				<div class="mobile-right">
					<h1>Download Snapdeal<br> App Now</h1>
					<p>Fast, Simple & Delightful.</p><p class="mobile-p"> All it takes is 30 seconds to Download </p>
					<div class="store-main">
						<div class="store apple-store">
							<img src="asset/apple1.png" />
						</div>
						<div class="store google-store">
							<img src="asset/google.png" />
						</div>
						<div class="clear"></div>
					</div>
				</div>
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