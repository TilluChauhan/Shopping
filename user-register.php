<!DOCTYPE html>
<html lang="en">
<head>
<title>camera</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Sofia&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/all.min.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<!---section-one--->
<div class="login-black_l">
	<section class="section-one_l">
		<div class="container_l">
			<div class="row">
				<div class="col-md-6">
					<div class="login-common_l login-left_l">
						<div class="row">
								<div class="col-md-3">
									<div class="login-icon_l">
										<img src="asset/login-one.png" />
									</div>
								</div>
								<div class="col-md-9">
									<div class="login-left-text_l">
										<h4>MANAGE YOUR ORDERS</h4>
										<p>Track orders,manage cancellation &returns. </p>
									</div>
								</div>
								<div class="col-md-3">
									<div class="login-icon_l">
										<img src="asset/login-two.png" />
									</div>
								</div>
								<div class="col-md-9">
									<div class="login-left-text_l">
										<h4>MANAGE YOUR ORDERS</h4>
										<p>Track orders,manage cancellation &returns. </p>
									</div>
								</div>
								<div class="col-md-3">
									<div class="login-icon_l">
										<img src="asset/login-three.png" />
									</div>
								</div>
								<div class="col-md-9">
									<div class="login-left-text_l">
										<h4>MANAGE YOUR ORDERS</h4>
										<p>Track orders,manage cancellation &returns. </p>
									</div>
								</div>
							</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="login-right-div_l register-right-div">
						<div class="login-right-div-text_l">
							<h2>Login/Sign Up On Snapdeal<i class="fas fa-times"></i></h2>
							<p>Please provide your Mobile Number or Email to Register/ Sign Up on Snapdeal</p>
							<div id="error"></div>
							<input type="text" placeholder="Name" id="name" />
							<input type="text" placeholder="Mobile Number" id="mobile" />
							<input type="text" placeholder="Email"  id="email"/>
							<input type="password" placeholder="Password" id="pass" />
							<select id="type">
								<option>Type</option>
								<option>user</option>
								<option>admin</option>
							</select>
							<input type="file"  id="profilepic"/>
							<button id="register">CONTINUE</button>
						</div>
					</div>
				</div>
			</div>
			<div class="login-bg-images_l">
				<div class="bg-image-one_l">
					<img src="asset/login-ba-one.png" />
				</div>
				<div class="bg-image-two_l">
					<img src="asset/login-ba-two.png" />
				</div>
				<div class="bg-image-three_l">
					<img src="asset/login-ba-three.png" />
				</div>
			</div>
		</div>
	</section>
</div>
<script src="js/jquery.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script> 
<script>
	$(document).ready(function(){
		$("#name").change(function(){
			$("#error").html('');
		});
		$("#email").change(function(){
			$("#error").html('');
		});
		$("#pass").change(function(){
			$("#error").html('');
		});
		
		$("#register").click(function(){
			var name = $("#name").val();
			var mobile = $("#mobile").val();
			var email = $("#email").val();
			var pass = $("#pass").val();
			var type = $("#type").val();
			var profilepic = $('#profilepic')[0].files[0];
			
			
			
			
			var fData = new FormData();
			fData.append('file', profilepic);
			fData.append('u_name', name);
			fData.append('u_mobile', mobile);
			fData.append('u_email', email);
			fData.append('u_pass', pass);
			fData.append('u_type', type);
			
						
			if(name == ""){
				$("#error").html("Please Enter Your Name");
				return false;
			}
			else if(email == ""){
				$("#error").html("Please Enter Your Email");
				return false;
			}
			else if(pass == ""){
				$("#error").html("Please Enter Your Passowrd");
				return false;
			}
			else{
			}
			$.ajax({
					type: "POST",
					url: 'ajax/register.php',
					data: fData,
					processData: false,
					contentType: false,
					success: function(response)
					{
						console.log(response);
						if(response == 1){
							location.reload();
						}
					}
			   });
		});
	});
</script>
</body>
</html>