<?php
	include 'config/config.php';
		

	if(!isset($_GET['listid']) || $_GET['listid'] == null){		
		$sql = "select * from proadd";
	}
	else{
		$proadd = $_GET['listid'];
		$sql = "select * from proadd where pro_cate_id = '".$proadd."' ";
	}
	$pass = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<?php include 'includes/css.php' ?>
<body>
<!---section-one-two--->
	<?php include 'includes/full-header.php';?>
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
										<a href="define.php?prolisid=<?php echo $catch['proadd_id'] ?> ">
											<div class="three-pro-one-image_a">
												<img  src="<?php echo 'admin/asset/profront/'.$catch['proadd_front_img']; ?>" style="width:100%; height:100%;">
												<i class="far fa-heart heart_a"></i>
											</div>
											<div class="three-pro-one-text_a">
												<p><?php echo $catch['proadd_name'] ?></p>
												<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
												<div><span class="cut-rate_a">RS 1,499</span><span class="rate_a"><?php echo $catch['proadd_price'] ?></span></div>
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


<?php include 'includes/js.php'; ?>
<script>
	
</script>
</body>
</html>