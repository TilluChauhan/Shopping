<?php 
	include 'config/config.php';
	session_start();
	if(!isset($_SESSION['user'])){
		header("Location:login.php");
	}
	$sqlproaddlist = 'select * from proadd' ;
	$queryproaddlist = mysqli_query($conn,$sqlproaddlist);
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
                    <th scope="col">Product Id</th>
					<th scope="col">Product Name</th>
					<th scope="col">Category Id</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Image</th>
                    <th scope="col">Size</th>
					<th scope="col">Color</th>
                    <th scope="col">Squa No.</th>
					<th scope="col">Price</th>
					<th scope="col">Description</th>
					<th scope="col">Status</th>
					<th scope="col">Created Date</th>
					<th scope="col">Buttons</th>
				  </tr>
                </thead>
                <tbody class="list">
				
					<?php
						while($row = mysqli_fetch_array($queryproaddlist)){
					?>
				<tr>
					
                    <td class="budget">
						<?php echo $row['proadd_id'] ?>
                    </td>
                    <td class="budget">
						<?php echo $row['proadd_name'] ?>
                    </td>
					<td class="budget">
						<?php echo $row['pro_cate_id'] ?>
                    </td>
                    <td>
						<?php echo $row['proadd_quantity'] ?>
                    </td>
                    <td>   
                         <img  src="<?php echo 'asset/profront/'.$row['proadd_front_img']; ?>" style="width:50px; height:50px; border-radius:50px">
						 <img  src="<?php echo 'asset/proside/'.$row['proadd_side_img']; ?>" style="width:50px; height:50px; border-radius:50px">
						 <img  src="<?php echo 'asset/proback/'.$row['proadd_back_img']; ?>" style="width:50px; height:50px; border-radius:50px">
					</td>
                    <td>
						<?php echo $row['proadd_size'] ?>
                    </td>
                    <td class="text-right">
						<?php echo $row['proadd_color'] ?>
                    </td>
					<td class="text-right">
						<?php echo $row['proadd_squa'] ?>
                    </td>
					<td class="text-right">
						<?php echo $row['proadd_price'] ?>
                    </td>
					<td class="text-right">
						<?php echo $row['proadd_desc'] ?>
                    </td>
					<td class="text-right">
						<?php echo $row['status'] ?>
                    </td>
					<td class="text-right">
						<?php echo $row['created_date'] ?>
                    </td>
					<td class="text-right">
						<a href="productadd.php?id=<?php echo $row['proadd_id']; ?>" class="btn btn-sm btn-primary">Edit</a>
						<a href="#!" class="btn btn-sm btn-primary">Delete</a>
					</td>
                  </tr>
				  	<?php
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
