<?php
	include 'config/config.php';

	session_start();
	if(!isset ($_SESSION['user'])){
		header('Location: login.php');
	}
	
	include 'config/config.php';
	$sql = "select * from sldie";
	$result = mysqli_query($conn, $sql);
	
	$isAddmode= true;
	$userid= null;
	$catch= null;
	if(isset($_GET['id'])){
		$userid=$_GET['id'];
		$isAddmode=false;
		
		$sql="select * from sldie where id='".$userid."'";
		
		$result=mysqli_query($conn, $sql);
		$catch=mysqli_fetch_array($result);
	}

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
              <a href="#" class="btn btn-sm btn-neutral">New</a>
              <a href="#" class="btn btn-sm btn-neutral">Filters</a>
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
						  <h3 class="mb-0">ADD Slider</h3>
						</div>
						
					  </div>
					</div>
					<div class="card-body">
					<div>
						<h6 class="heading-small text-muted mb-4">Slider information</h6>
					<div class="pl-lg-4">
							<div class="row">	
								<div class="col-lg-6">
								  <div class="form-group">
									<label class="form-control-label" >id</label>
									<input type="text" id="id" value="<?php echo $catch['id'];?>" class="form-control" placeholder="id">
								  </div>
								  
								</div>
								<div class="col-lg-6">
								  <div class="form-group">
									<label class="form-control-label" >Title</label>
									<input type="text" id="title" value="<?php echo $catch['title'];?>" class="form-control" placeholder="Title">
								  </div>
								  <div id="entertitle"></div>
								</div>
								<div class="col-lg-6">
								  <div class="form-group">
									<label class="form-control-label">image</label>
									<input type="file" id="image" value="<?php echo $catch['image'];?>" class="form-control" placeholder="">
								  </div>
								  <div id="enterimage"></div>
								</div>
								<div class="col-lg-6">
								  <div class="form-group">
									<label class="form-control-label">description</label>
									<input type="text" id="des" value="<?php echo $catch['description'];?>" class="form-control" placeholder="desciption">
								  </div>
								  <div id="enterdes"></div>
								</div>
								<div class="col-lg-6">
								  <div class="form-group">
									<label class="form-control-label" >status</label>
									<input type="text" id="status" value="<?php echo $catch['status'];?>" class="form-control" placeholder="Status">
								  </div>
								  <div id="enterstatus"></div>
								</div>
								<div class="col-lg-6">
								  <div class="form-group">
									<label class="form-control-label" >page_Url</label>
									<input type="text" id="pageurl" value="<?php echo $catch['url'];?>" class="form-control" placeholder="url">
								  </div>
								  <div id="enterurl"></div>
								</div>
								<div class="col-lg-6">
								  <div class="form-group">
									<label class="form-control-label" >Createdate</label>
									<input type="text" id="date" value="<?php echo $catch['date'];?>" class="form-control" placeholder="date">
									</div>
								</div>
							</div>	
					<?php 
						if($isAddmode){
							
						
						?>
						<button class="btn btn-primary" id="useradd">submit</button>	
						<?php
						}else{
							
							?>
							<button class="btn btn-primary" id="update">update</button>
							<?php
						}
					?>
              
			  
						<a href="#" class="btn btn-sm btn-primary">reset</a>
					</div>
					</div> 
				</div>
			</div>
		<!-- Footer -->
			<?php
		include "includes/afotter.php"
	 ?>
		<!-- Footer -->
      </div>
		
	<!---Script--->
		<?php
		include "includes/ajsfiles.php"
	  ?>
	<!---Script--->
	<script>
		$(document).ready(function(){
			$("#useradd").click(function(){
				var title =  $("#title").val();
				var image = $("#image")[0].files[0];
				var description = $("#des").val();
				var status = $("#status").val();
				var url = $("#pageurl").val();
				var Createdate = $("#date").val();
				
				console.log(title);
				console.log(image);
				console.log(description);
				console.log(status);
				console.log(url);
				console.log(Createdate);
				
				
				
				
			 var data = new FormData;
				data.append('W_title', title);
				data.append('W_image', image);
				data.append('W_description', description);
				data.append('W_status', status); 
				data.append('W_url',url); 
				data.append('W_date', Createdate);		

			$.ajax({
					url: 'ajax/add-slider.php',	
					type: 'POST',
					data: data,
					contentType: false,
					processData: false,
					success: function(response){
						if(response == 1){
							window.location.reload();
						}else{

						}
					}
					
				});
				$("#entertitle").html('');
				$("#enterdes").html('');
				$("#enterstatus").html('');
				$("#enterurl").html('');
				
				
				if(title == ''){
					$("#entertitle").html('enter the your title');
					return false;
				}else if(description ==''){
					$("#enterdes").html('enter desciption');
					return false;
				}else if( status == ''){
					$("#enterstatus").html('enter status');
					return false;
				}else if( page_Url == ''){
					$("#enterurl").html('enter url');
					return false;
				}
				
		});
			
				
		});		
		
		$(document).ready(function(){
			$("#update").click(function(){
				var Id = $("#id").val();;
				var title =  $("#title").val();

				var description = $("#des").val();
				var status = $("#status").val();
				var url = $("#pageurl").val();
				var Createdate = $("#date").val();
				
				console.log(Id);
				console.log(title);
				console.log(image);
				console.log(description);
				console.log(status);
				console.log(url);
				console.log(Createdate);
				
				
			 var data = new FormData;
				data.append('T_id', Id);
				data.append('T_title', title);
				data.append('T_description', description);
				data.append('T_status', status); 
				data.append('T_url',url); 
				data.append('T_date', Createdate);		

			$.ajax({
					url: 'ajax/update-slider.php',	
					type: 'POST',
					data: data,
					contentType: false,
					processData: false,
					success: function(response){
						if(response == 1){
							window.location.reload();
						}else{

						}	
					}
					
				});
			});
		});
	
	</script>
	
</body>

</html>