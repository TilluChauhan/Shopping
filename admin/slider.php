<?php
	session_start();
	if(!isset ($_SESSION['user'])){
		header('Location: login.php');
	}
	include 'config/config.php'; 
	$sql = "select * from sldie";
	$sliderresult = mysqli_query($conn, $sql);
	
	
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
	include "includes/aaside.php";
  ?>
	<!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Header -->
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
              <a href="add-slider.php" class="btn btn-sm btn-neutral">New</a>
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
              <b class="mb-0">Slider List</b>
            </div>
            <!-- Light table -->
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col" class="sort" >title</th>
                    <th scope="col" class="sort" >image</th>
                    <th scope="col" class="sort">Description</th>
                    <th scope="col" class="sort" >Status</th>
					 <th scope="col" class="sort" >page url</th>
                    <th scope="col" class="sort" >CreatedDate</th>
                     <th scope="col" class="sort" >Edit</th>
                  </tr>
                </thead>
                <tbody class="list">
                  <?php 
						while($catch = mysqli_fetch_array($sliderresult)){
					?>
				<tr>
					<td><?php echo $catch['title'];?></td>
					<td><img alt="" style=" height:40px;" src="<?php echo 'images/slider/'.$catch['image'];?>" /></td>
					<td><?php echo $catch['description'];?></td>
					<td><?php echo $catch['status'];?></td>
					<td><?php echo $catch['url'];?></td>
					<td><?php echo $catch['date'];?></td>
					<td><a href="add-slider.php?id=<?php echo $catch['id'];?>">edit</a></td>
					
				</tr>	  
				<?php
				  }
				  ?>
				  
                </tbody>
              </table>
            </div>
            <!-- Card footer -->
            
          </div>
        </div>
      </div>
      <!-- Footer -->
		<?php
		include "includes/afotter.php"
	 ?>
		<!-- Footer -->
		
	<!---Script--->
		 <?php
		include "includes/ajsfiles.php"
	  ?>
	<!---Script--->
</body>

</html>
