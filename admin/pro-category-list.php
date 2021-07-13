<?php 
	include 'config/config.php';
	session_start();
	if(!isset($_SESSION['user'])){
		header("Location:login.php");
	}
	$sqlcatelist = 'select * from pro_category' ;
	$querycatelist = mysqli_query($conn,$sqlcatelist);
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
					<th scope="col">Category Id</th>
					<th scope="col">Name</th>
                    <th scope="col">Status</th>
					<th scope="col">Created date</th>
					<th scope="col">Buttons</th>
                  </tr>
                </thead>
                <tbody class="list">
				
					<?php
						while($row = mysqli_fetch_array($querycatelist)){
					?>
				<tr>
					<td class="budget">
						<?php echo $row['pro_cate_id'] ?>
                    </td>
                    <td class="budget">
						<?php echo $row['pro_cate_name'] ?>
                    </td>
                    <td>
						<?php echo $row['status'] ?>
                    </td>
                    <td class="text-right">
						<?php echo $row['created_date'] ?>
                    </td>
					<td class="text-right">
						<a href="pro-category.php?edit=<?php echo $row['pro_cate_id']; ?>" class="btn btn-sm btn-primary">Edit</a>
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
