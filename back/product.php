<?php
	session_start();
	if(!isset ($_SESSION['user'])){
		header('Location: login.php');
	}
	include 'config/config.php'; 
	$pgs = "select * from Product_list";
	$result = mysqli_query($conn, $pgs);
	
	
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Argon Dashboard - Free Dashboard for Bootstrap 4</title>
	<?php include 'include/links.php';?>
</head>

<body>
	<!-- Sidenav -->		
		<?php include 'include/sidenav.php'; ?>
	<!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Header -->
		<?php include 'include/header.php'; ?>
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
              <a href="add.php" class="btn btn-sm btn-neutral">New</a>
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
              <b class="mb-0">Product List</b>
            </div>
            <!-- Light table -->
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col" class="sort" data-sort="product Name">product Name</th>
                    <th scope="col" class="sort" data-sort="Price">Price</th>
                    <th scope="col" class="sort" data-sort="status">SQA Number</th>
                    <th scope="col" class="sort" data-sort="Quantity">Quantity</th>
                    <th scope="col" class="sort" data-sort="Size">Size</th>
                    <th scope="col" class="sort" data-sort="Color">Color</th>
                    <th scope="col" class="sort" data-sort="status">Photo</th>
                    <th scope="col" class="sort" data-sort="Description">Description</th>
                    <th scope="col" class="sort" data-sort="Status">Status</th>
                    <th scope="col" class="sort" data-sort="createddate">CreatedDate</th>
                    <th scope="col" class="sort" data-sort="createddate"></th>
                  </tr>
                </thead>
                <tbody class="list">
                  <?php 
						while($catch = mysqli_fetch_array($result)){
					?>
				<tr>
					<td><?php echo $catch['Name'];?></td>
					<td><?php echo $catch['Price'];?></td>
					<td><?php echo $catch['SQA_Number'];?></td>
					<td><?php echo $catch['Quantity'];?></td>
					<td><?php echo $catch['Size'];?></td>
					<td><?php echo $catch['Color'];?></td>
					<td>
                      <div class="avatar-group">
                        <a href="#" class="avatar avatar-sm rounded-circle">
                          <img alt="" src="<?php echo 'images/upload_a/'.$catch['Front_image'];?>" />
                        </a>
                        <a href="#" class="avatar avatar-sm rounded-circle">
                          <img alt="" src="<?php echo 'images/upload_b/'.$catch['Side_image'];?>">
                        </a>
                        <a href="#" class="avatar avatar-sm rounded-circle">
                          <img alt="" src="<?php echo 'images/upload_c/'.$catch['Back_image'];?>">
                        </a>
                      </div>
                    </td>
					<td><?php echo $catch['Description']; ?></td>
					<td><?php echo $catch['Status'];?></td>
					<td><?php echo $catch['CreatedDate'];?></td>
					<td><a href="add.php?edit=<?php echo $catch['Product_ID']; ?>" class="btn btn-sm btn-primary">Edit</a></td>
				</tr>	  
				<?php
				  }
				  ?>
				  
                </tbody>
              </table>
            </div>
            <!-- Card footer -->
            <div class="card-footer py-4">
              <nav aria-label="...">
                <ul class="pagination justify-content-end mb-0">
                  <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">
                      <i class="fas fa-angle-left"></i>
                      <span class="sr-only">Previous</span>
                    </a>
                  </li>
                  <li class="page-item active">
                    <a class="page-link" href="#">1</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#">
                      <i class="fas fa-angle-right"></i>
                      <span class="sr-only">Next</span>
                    </a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
      <!-- Footer -->
		<?php include 'include/footer.php';?>
		<!-- Footer -->
		
	<!---Script--->
		<?php include 'include/script.php'; ?>
	<!---Script--->
</body>

</html>
