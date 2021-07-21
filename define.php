<?php 
include 'config/config.php';
if(!isset($_GET['prolisid']) || $_GET['prolisid'] == null){
	$sqlprodlis = 'select * from proadd';
}
else{
	$proaddlisid = $_GET['prolisid'];
	$sqlprodlis = 'select * from proadd where proadd_id="'.$proaddlisid.'"';
}
$queryprodlis = mysqli_query($conn, $sqlprodlis);
$rowprodlis = mysqli_fetch_array($queryprodlis);



?>
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
					<span class="last-span_nav"><?php echo $rowprodlis['proadd_name'] ?></span>
				</ul>
			</nav>
		</div>
	</div>
</section>

<!---section-four--->
<section class="sectioin-four_d">
	<div class="my-container_a">
		<div class="row">
			<div class="col-md-5 bg-white" >
				<div class="image-zoom_d">
				<div id="jquery-script-menu">
				<div class="jquery-script-center">
				<div class="jquery-script-clear"></div>
				</div>
				</div>
				  <div class="container">
				  <div class="show" href="admin/asset/profront/<?php echo $rowprodlis['proadd_front_img'] ?>"">
					<img src="admin/asset/profront/<?php echo $rowprodlis['proadd_front_img'] ?>" id="show-img">
				  </div>
				  <div class="small-img">
					<img src="asset/online_icon_right@2x.png" class="icon-left" alt="" id="prev-img">
					<div class="small-container">
					  <div id="small-img-roll">
						<img src="admin/asset/profront/<?php echo $rowprodlis['proadd_front_img'] ?>" class="show-small-img" alt="">
						<img src="admin/asset/proside/<?php echo $rowprodlis['proadd_side_img'] ?>" class="show-small-img" alt="">
						<img src="admin/asset/proback/<?php echo $rowprodlis['proadd_back_img'] ?>" class="show-small-img" alt="">
					  </div>
					</div>
					<img src="asset/online_icon_right@2x.png" class="icon-right" alt="" id="next-img">
				  </div>
				</div>
				  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha384-tsQFqpEReu7ZLhBV2VZlAu7zcOV+rXbYlF2cqB8txI/8aZajjp4Bqd+V6D5IgvKT" crossorigin="anonymous"></script>
				  <script src="js/zoom-image.js"></script>
				  <script src="js/main.js"></script>
				  </div>
			</div>
			<div class="col-md-7 bg-white" style="padding:28px">
				<div class="image-info-main-div">
					<h1><?php echo $rowprodlis['proadd_name'] ?></h1>
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
						<div class="price">Rs. <?php echo $rowprodlis['proadd_price'] ?><span class="discount_d">92%OFF</span></div>
					</div>
					<div class="csinfo">
						<div class="color_d">Color<span><?php echo $rowprodlis['proadd_color'] ?></span></div>
						<div class="size_d">Size<span><?php echo $rowprodlis['proadd_size'] ?></span></div>
					</div>
					<select id="quantity" class="form-control" style="width:100px;">
						<option value="">QTY</option>
						<?php
							$x = 1;
								while($x <= $rowprodlis['proadd_quantity']){
								?>
									<option value="<?php echo $x; ?>"><?php echo $x; ?></option>
								<?php
								$x++;
							}
						?>
					</select>
					<p id="msg"></p>
					<div class="desc_d"><span>Description  -</span><?php echo $rowprodlis['proadd_desc'] ?></div>
					<div class="button_d">
						<button class="cart_d">ADD TO CART</button>
						<button class="buy_d" id="buynow">BUY NOW</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>




<?php include 'includes/fotter.php'; ?>



<!-- The Modal -->
  <div class="modal fade" id="success_model">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Modal Heading</h4>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
         <p>SUCCESS</p> 
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <a  href="index.php" class="btn btn-danger">Shopping Again</a>
          <a href="user-order.php" class="btn btn-primary" >order</a>
        </div>
        
      </div>
    </div>
  </div>

<?php include 'includes/js.php'; ?>
</body>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
  
	$(document).ready(function(){
		$("#buynow").click(function(){
			var prodId = '<?php echo $proaddlisid; ?>';
			var userId = '<?php echo $userId; ?>';
			var quantity = $("#quantity").val();
			var price = "<?php echo $rowprodlis['proadd_price'] ?>";
			//price = parseInt(price);
			//quantity = parseInt(quantity);
			//var totalamount = price * quantity;
			if(userId == ''){
				window.location.href = 'login.php';
				return false;
			}
			if(quantity == ''){
				$("#msg").html('please select quantity');
				return false;
			}
			
			$.ajax({
				url: 'ajax/order.php',
				type: 'POST',
				data: {prodId, userId, quantity, price},
				success: function(resp){
					console.log(resp);	
					if(resp == 1){
						$("#success_model").modal();
					} else {
						
					}
				}
			})
			
			
		})
	});
  
  
  
</script>
</html>