<?php
	include 'config/config.php';

	session_start();
	if(!isset ($_SESSION['user'])){
		header('Location: login.php');
	}
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
            
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col-xl-12 order-xl-1">
				  <div class="card">
					<div class="card-header">
					  <div class="row align-items-center">
						<div class="col-8">
						  <h3 class="mb-0">ADD Category</h3>
						</div>
						
					  </div>
					</div>
					<div class="card-body">
					  <div>
						<h6 class="heading-small text-muted mb-4">Creat Category</h6>
						<div class="pl-lg-4">
						  
						  <div class="row">														
							<div class="col-lg-6">
							  <div class="form-group">
								<label class="form-control-label" for="input-username">Category Name</label>
								<input type="text" id="catname"  class="form-control" placeholder="Product Name">
							  </div>
							</div>
						  </div>
							<div class="col-lg-12 col-5 ">
									

									<button class="btn btn-sm btn-primary" id="catcreat">Creat</button>									
								

									<button class="btn btn-sm btn-primary" id="update">Update</button>									
							  
							  
							  
							</div>
						</div>	
					  </div>
					</div> 
				</div>
			</div>
		<!-- Footer -->
		<!-- Footer -->
      </div>
			<?php include 'include/footer.php';?>
		
	<!---Script--->
		<?php include 'include/script.php'; ?>
	<!---Script--->
	<script>
		$(document).ready(function(){
			$("#catcreat").click(function(){
				var name = $("#catname").val();
				var money = $("#catprice").val();
	
				
				var store = new FormData();
				store.append('C_name', name);	
				
				$.ajax({
					url: 'service/category.php',
					type: 'POST',
					data: store,
					contentType: false,
					processData: false,	
					success: function(response){
						if(response == 1){
							window.location.reload();	
							}else{
						
							}
					}		
				})
			});
		});
	</script>
	
</body>

</html>