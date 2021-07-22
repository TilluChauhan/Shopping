<?php 
include 'config/config.php';
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

$userordersql = "select PO.*, p.proadd_front_img, p.proadd_name, p.proadd_desc from product_order PO JOIN proadd p ON p.proadd_id = PO.Product_Id where PO.User_Id = '".$userId."'";
$queryprodlis = mysqli_query($conn, $userordersql);
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
					<span class="last-span_nav"></span>
				</ul>
			</nav>
		</div>
	</div>
</section>


<section>
	<div class="container">
		<div class="row">
			<?php
				while($row = mysqli_fetch_array($queryprodlis)){
					//print_r($row);
					?>
						<div class="col-md-12">
							<div class="order-wrap">
								<div class="p_img"><img width="150px" src="admin/asset/profront/<?php echo $row['proadd_front_img']; ?>" /></div>
								<div class="p_des">
									<h3><?php echo $row['proadd_name']; ?></h3>
									<p><?php echo $row['proadd_desc']; ?></p>
									<p>Quantity: <?php echo $row['Quantity']; ?></p>
									<p>Price: <?php echo $row['Price']; ?></p>
									<p>Total Price: <?php echo $row['Total_Amount']; ?></p>
									<p>Order Date: <?php echo $row['CreatedDate']; ?></p>
								</div>
								<div><?php if($row['Status'] == 1){ 
								?>
									<button onclick="buttonchange(<?php echo $row['Order_Id']; ?>, <?php echo $row['Status']; ?> )" type="button" class="btn btn-danger">Order Cancel</button>
								<?php
							} else {
							?>
									 <span>Order Cancel</span>
								<?php
							} ?></div>
							</div>
						</div>
					<?php
				}
			?>
			
			
		</div>
	</div>
</section>


<?php include 'includes/fotter.php'; ?>


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
  

	function buttonchange(id, status){
			var u_status = 0;
			if(status == '0'){
				u_status = 1;
			}
				$.ajax({
					type: "POST",
					url: 'ajax/order-button-change.php',
					data: {u_id: id, u_status: u_status},
					success: function(response)
					{
						console.log(response);
						if(response == 1){
							location.reload();
						}
					}
			   });
		}
</script>
</html>