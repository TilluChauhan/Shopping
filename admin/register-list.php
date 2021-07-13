<?php 
	include 'config/config.php';
	session_start();
	if(!isset($_SESSION['user'])){
		header("Location:login.php");
	}
	$sqlregilist = 'select * from user' ;
	$queryregilist = mysqli_query($conn,$sqlregilist);
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
					<th scope="col">User Id</th>
                    <th scope="col">Profile Image</th>
					<th scope="col">Name</th>
					<th scope="col">Type</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">Status</th>
					<th scope="col">Created date</th>
                  </tr>
                </thead>
                <tbody class="list">
				
					<?php
						while($row = mysqli_fetch_array($queryregilist)){
					?>
				<tr>
					<td class="budget">
						<?php echo $row['user_id'] ?>
                    </td>
					<td>   
                         <img  src="<?php echo 'asset/profilepic/'.$row['user_pic']; ?>" style="width:70px; height:70px; border-radius:70px">
					</td>
                    <td class="budget">
						<?php echo $row['user_name'] ?>
                    </td>
					<td class="budget">
						<?php echo $row['type'] ?>
                    </td>
                    <td class="budget">
						<?php echo $row['user_mobile'] ?>
                    </td>
                    <td>
						<?php echo $row['user_email'] ?>
                    </td>
                    <td>
						<?php echo $row['user_password'] ?>
                    </td>
                    <td>
						<?php echo $row['status'] ?>
                    </td>
                    <td class="text-right">
						<?php echo $row['created_date'] ?>
                    </td>
					<td class="text-right">
						<a href="register.php?id=<?php echo $row['user_id']; ?>" class="btn btn-sm btn-primary">Edit</a>
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
