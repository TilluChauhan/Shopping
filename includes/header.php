<?php
	$sql ="select * from Product_Category";
	$solution = mysqli_query($conn, $sql);
	
	
?>



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
						<li><a href="helpcenter.php">Help Center</a></li>
						<li><a href="#">Sell On Snapdeal</a></li>
						<li><a href="#"><span class="top-header-icon_a"><i class="fas fa-file-download"></i></span>Download App</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="section-two_a">
	<div class="ps-navs">
		<div class="my-container_a">
			<nav class="navbar navbar-expand-sm  navbar-dark">
				<div class="navbar-brand" href="index.php">
					<a href="index.php"><img src="asset/snapfull.png" alt="Logo" style="width:100%; max-width:168px;"></a>
					<button type="button" class="btn btn-danger " data-toggle="collapse" data-target="#collapsibleNavbar"><i class="fas fa-bars"></i></button>
				</div>
				<div class="form-inline" action="/action_page.php" style="flex:1">
					<div class="header-search_a">
						<input class="form-control mr-sm-2" type="text" placeholder="Search products & brands">
						<button><i class="fas fa-search"></i>Search</button>
					</div>
				</div>
				<div class="header-ul_a">
					<ul class="nav justify-content-end ">
						<li class="nav-item">
							<a class="nav-link cart_a" href="#"><span>Cart</span><i class="fas fa-shopping-cart"></i></a>
						</li>
						<li class="nav-item sign-in_a">
							<a class="nav-link" href="#"><span>Sign In</span><i class="fas fa-user"></i></a>
						</li>
					</ul>
				</div>
			</nav>
		</div>
		<div class="my-container_a">
			<div class="three-left_a">
				<nav class="collapse navbar-collapse" id="collapsibleNavbar">				
						<ul class="list-group">
							<span class="list-group-item borderless">TOP CATEGORIES</span>
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
									<span class="three-icon-li_a">Mobile</span>
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
									<a href="products.php?xt=<?php echo $row['P_CatId']; ?>">
										<span class="three-icon-li_a"><?php echo $row['Name'];?></span>
									</a>
								</li>
										<?php
									}
								?>
							
							
							</ul>
						</div>
						<div class="three-three-ul_a">
							<ul class="list-group">
							<span class="list-group-item borderless">TRENDING SEARCHES</span>						
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
				</nav>
			</div>
		</div>
	</div>
</section>
