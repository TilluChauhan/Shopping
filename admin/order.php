<?php 
	include 'config/config.php';
	session_start();
	if(!isset($_SESSION['user'])){
		header("Location:login.php");
	}
	$sqlorder = 'select PO.*, PA.proadd_front_img, PA.proadd_name, u.user_name, u.user_email, u.user_mobile from product_order PO JOIN proadd PA ON PA.proadd_id = PO.Product_Id JOIN user u ON u.user_id = PO.User_Id';
	$orderlist = mysqli_query($conn,$sqlorder);
?>
<!DOCTYPE html>
<html>

<head>
  <?php 
	include "includes/acss.php"
  ?>
</head>

<body>
  <!-- Sidenav -->
  <?php 
	include "includes/aaside.php"
  ?>
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <?php
		include "includes/aheader.php"
	?>
    <!-- Header -->
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Tables</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">Tables</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Tables</li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">
              <a href="register.php" class="btn btn-sm btn-neutral">New</a>
              <a href="#" class="btn btn-sm btn-neutral">Filters</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col">
          <div class="card">
            <!-- Card header -->
            <div class="card-header border-0">
              <h3 class="mb-0">User table</h3>
            </div>
            <!-- Light table -->
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
					<th scope="col">S.No</th>
					<th scope="col" style="width:150px;">Product</th>
					<th scope="col">Shipping Address</th>
                    <th scope="col">Customer Name</th>
					<th scope="col">Customer Email</th>
					<th scope="col">Customer Mobile</th>
					<th scope="col">Quantity</th>
					<th scope="col">Amount</th>
					<th scope="col">Total Amount</th>
					<th scope="col">Status</th>
					<th scope="col">Created Date</th>
                  </tr>
                </thead>
                <tbody class="list">
				
					<?php
						$count = 1;
						while($row = mysqli_fetch_array($orderlist)){
					?>
						<tr>
							<td><?php echo $count; ?></td>
							<td style="width:150px;"><img src="asset/profront/<?php echo $row['proadd_front_img'] ?>" width="100px" /> <?php echo $row['proadd_name'] ?></td>
							<td><?php echo $row['Address'] ?></td>
							<td><?php echo $row['user_name'] ?></td>
							<td><?php echo $row['user_email'] ?></td>
							<td><?php echo $row['user_mobile'] ?></td>
							<td><?php echo $row['Quantity'] ?></td>
							<td><?php echo $row['Price'] ?></td>
							<td><?php echo $row['Total_Amount'] ?></td>
							<td>
								<?php 
									if($row['Status'] == 1){
										?>
											<span class="badge badge-success">Success</span>
										<?php
									} else {
										?>
											<span class="badge badge-danger">Cancel</span>
										<?php
									}
								?>
							</td>
							<td><?php echo $row['CreatedDate'] ?></td>
						</tr>
				  	<?php
					$count++;
				}
			?>
                </tbody>
              </table>
            </div>
           
          </div>
        </div>
      </div>
    </div>
      <!-- Footer -->
      <?php
		include "includes/afotter.php"
	  ?>
    </div>
  <!-- Argon Scripts -->
  <?php
		include "includes/ajsfiles.php"
	  ?>
</body>

</html>
