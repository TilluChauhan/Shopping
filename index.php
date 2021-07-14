<?php 
	session_start();
	include 'config/config.php';
	$sqlproadd = 'select * from  proadd' ;
	$queryproadd = mysqli_query($conn,$sqlproadd);
	
	
	$sql ="select * from pro_category";	
	$solution = mysqli_query($conn, $sql);
	
?>
<!DOCTYPE html>
<html lang="en">

<?php include 'includes/css.php' ?>
<body>
<!---section-one--->
<section class="section-one_a">
	<div class="my-container_a">
		<div class="row">
			<div class="col-md-6">
				<div class="top-header_a">India's Fastest Online Shopping Destination</div>
			</div>
			<div class="col-md-6">
				<div class="top-header_a">
					<ul>
						<li><a href="#">Gift Cards</a></li>
						<li><a href="#">Help Center</a></li>
						<li><a href="#">Sell On Snapdeal</a></li>
						<li><a href="#"><span class="top-header-icon_a"><i class="fas fa-file-download"></i></span>Download App</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>

<!---section-two--->
<section class="section-two_a">
	<div class="my-container_a">
		<nav class="navbar navbar-expand-sm  navbar-dark">
		<div class="navbar-brand" href="index.php">
			<a href="index.php"><img src="asset/snapfull.png" alt="Logo" style="width:100%; max-width:168px;"></a>
		</div>
		<form class="form-inline" action="/action_page.php" style="flex:1">
			<div class="header-search_a">
				<input class="form-control mr-sm-2" type="text" placeholder="Search products & brands">
				<button><i class="fas fa-search"></i>Search</button>
			</div>
		</form>
		<div class="header-ul_a">
			<ul class="nav justify-content-end ">
				<li class="nav-item">
					<a class="nav-link cart_a" href="#"><span>Cart</span><i class="fas fa-shopping-cart"></i></a>
				</li>
					<?php 
							if(isset($_SESSION["user_id"])){
								$username = $_SESSION["name"];
								?>	
						<li class="nav-item sign-in_a" id="dropdown">
					<a class="nav-link" href="#" id="clickcolor"><span><?php echo $username; ?></span></a>
					  <div id="dropdown-menu" class="adc">
							<a href="#!" class="dropdown-item">
							  <i class="far fa-user"></i>
							  <span>Your Account</span>
							</a>
							<a href="#!" class="dropdown-item">
							  <i class="far fa-envelope"></i>
							  <span>Your Orders</span>
							</a>
							<a href="#!" class="dropdown-item">
							  <i class="far fa-heart"></i>
							  <span>Shortlist</span>
							</a>
							<a href="#!" class="dropdown-item">
							  <i class="far fa-hand-peace"></i>
							  <span>SD Cash</span>
							</a>
							<div class="dropdown-divider"></div>
							<a href="logout.php" class="dropdown-item">
							  <i class="ni ni-user-run"></i>
							  <span href="logout.php">Logout</span>
							</a>
					</div>
				</li>
								
								<?php
							}else{
								?>
								<li class="nav-item sign-in_a" id="dropdown">
					<a class="nav-link" href="#" id="clickcolor"><span>Sign In</span><i class="fas fa-user signup"></i></a>
					  <div id="dropdown-menu" class="adc">
							<a href="#!" class="dropdown-item">
							  <i class="far fa-user"></i>
							  <span>Your Account</span>
							</a>
							<a href="#!" class="dropdown-item">
							  <i class="far fa-envelope"></i>
							  <span>Your Orders</span>
							</a>
							<a href="#!" class="dropdown-item">
							  <i class="far fa-heart"></i>
							  <span>Shortlist</span>
							</a>
							<a href="#!" class="dropdown-item">
							  <i class="far fa-hand-peace"></i>
							  <span>SD Cash</span>
							</a>
							<div class="dropdown-divider"></div>
							<a href="login.php" class="dropdown-item">
							  <i class="ni ni-user-run"></i>
							  <span>Register</span>
							  <span>Login</span>
							</a>
					</div>
				</li>
								<?php
							}
						?>
			</ul>
		</div>
		</nav>
	</div>
</section>

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
						while($row = mysqli_fetch_array($queryproadd)){
						?>
								<div class="item">
									<div class="three-slidproducts_a">
										<a href="define.php?prolisid=<?php echo $row['proadd_id'] ?> ">
											<div class="three-pro-one-image_a">
												<img  src="<?php echo 'admin/asset/profront/'.$row['proadd_front_img']; ?>" style="width:100%; height:100%;">
												<i class="far fa-heart heart_a"></i>
											</div>
											<div class="three-pro-one-text_a">
												<p><?php echo $row['proadd_name'] ?></p>
												<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
												<div><span class="cut-rate_a">RS 1,499</span><span class="rate_a"><?php echo $row['proadd_price'] ?></span></div>
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
			
			<div class="three-left_a">
					<h2>TOP CATEGORIES</h2>
					<ul class="list-group">
						<li class="list-group-item borderless">
							<a href="#">
								<span class="three-icon_a">
									<img src="asset/three-one.png" />
								</span>
								<span class="three-icon-li_a">All Offers</span>
							</a>
						</li>
						<li class="list-group-item">
							<a href="#">
								<span class="three-icon_a">
									<img src="asset/three-two.png" />
								</span>
								<span class="three-icon-li_a">Mobile & Tablets</span>
							</a>
						</li>
						<li class="list-group-item">
							<a href="#">
								<span class="three-icon_a">
									<img src="asset/three-three.png" />
								</span>
								<span class="three-icon-li_a">Electronics</span>
							</a>
						</li>						
						<li class="list-group-item">
							<a href="#">
								<span class="three-icon_a">
									<img src="asset/three-four.png" />
								</span>
								<span class="three-icon-li_a">Computers & Gaming</span>
							</a>
						</li>
						<li class="list-group-item">
							<a href="#">
								<span class="three-icon_a">
									<img src="asset/three-five.jpg" />
								</span>
								<span class="three-icon-li_a">Home & Kitchen</span>
							</a>
						</li>
						
					</ul>
						<div class="three-two-ul_a">
								<ul class="list-group">
								<span class="list-group-item borderless">MORE CATEGORIES</span>
								
								<?php
									while($row = mysqli_fetch_array($solution)){
										?>								
								<li class="list-group-item borderless">
									<a href="filter-product.php?listid=<?php echo $row['pro_cate_id']; ?>">
										<span class="three-icon-li_a"><?php echo $row['pro_cate_name'];?></span>
									</a>
								</li>
										<?php
									}
								?>
							
							
							</ul>
						</div>
					<div class="three-three-ul_a">
						<ul class="list-group">
						<h2>TRENDING SEARCHES</h2>
							<li class="list-group-item borderless">
								<a href="#">
									<span class="three-icon-li search-li_a"><i class="fas fa-search"></i></span>
									<span class="three-icon-li_a">Jewellery Set</span>
								</a>
							</li>
							<li class="list-group-item">
								<a href="#">
									<span class="three-icon-li search-li_a"><i class="fas fa-search"></i></span>
									<span class="three-icon-li_a">Sunglasses</span>
								</a>
							</li>
							<li class="list-group-item">
								<a href="#">
									<span class="three-icon-li search-li_a"><i class="fas fa-search"></i></span>
									<span class="three-icon-li_a">Sandal Men</span>
								</a>
							</li>
							<li class="list-group-item">
								<a href="#">
									<span class="three-icon-li search-li_a"><i class="fas fa-search"></i></span>
									<span class="three-icon-li_a">Kitchen Product</span>
								</a>
							</li>
							<li class="list-group-item">
								<a href="#">
									<span class="three-icon-li search-li_a"><i class="fas fa-search"></i></span>
									<span class="three-icon-li_a">Phone Mobile</span>
								</a>
							</li>
						</ul>
					</div>
				</div>
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


<?php include 'includes/js.php'; ?>
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