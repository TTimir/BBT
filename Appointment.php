<?php
if(isset($_POST['fname']))
{
    $server = "localhost:3308";
    $username = "root";
    $password = "";
  
    $con = mysqli_connect($server,$username,$password);

    if(!$con){
        die("Connection to this database failed due to".mysqli_connect_error());
    }
	else{
	    echo "success";
	}
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
				<style>
				body { 
				font-family: Arial, Helvetica, sans-serif; 
				} 
				* {
				box-sizing: border-box; 
				} 
				.container { 
				position: relative; 
				border-radius: 5px; 
				background-color: #f2f2f2; 
				padding: 20px 0 30px 0; 
				} 
				input, .btn { 
				width: 100%; 
				padding: 12px; 
				border: none; 
				border-radius: 4px; 
				margin: 5px 0; 
				opacity: 0.85; 
				display: inline-block; 
				font-size: 17px; 
				line-height: 20px; 
				text-decoration: none; 
				} 
				input:hover, .btn:hover { 
				opacity: 1; 
				} 
				.fb { 
				background-color: #3B5998; 
				color: white; 
				} 
				.twitter { 
				background-color: #55ACEE; 
				color: white; 
				} 
				.google { 
				background-color: #dd4b39; 
				color: white; 
				} 
				input[type=submit] {
				background-color: #04AA6D; 
				color: white;
				cursor: pointer; 
				}
				input[type=submit]:hover { 
				background-color: #45a049;
				} 
				.col { 
				float: left;
				width: 50%;
				margin: auto;
				padding: 0 50px; 
				margin-top: 6px; 
				} 
				.row:after { 
				content: ""; 
				display: table; 
				clear: both; 
				} 
				.vl {
				position: absolute; 
				left: 50%; 
				transform: translate(-50%); 
				border: 2px solid #ddd; 
				height: 175px; 
				} 
				.vl-innertext { 
				position: absolute; 
				top: 50%; 
				transform: translate(-50%, -50%); 
				background-color: #f1f1f1; 
				border: 1px solid #ccc; 
				border-radius: 50%; 
				padding: 8px 10px; 
				} 
				.hide-md-lg { 
				display: none; 
				} 
				.bottom-container {
				text-align: center;
				background-color: #666;
				border-radius: 0px 0px 4px 4px; 
				} 
				@media screen and (max-width: 650px) { 
				.col { 
				width: 100%; 
				margin-top: 0; 
				} 
				.vl { 
				display: none; 
				} 
				.hide-md-lg { 
				display: block; 
				text-align: center; 
				} 
				}
				</style>
			</head>
			<body>
				<marquee>
					<h2>
						<mark>
							<i>Big Boy Toyz
							</h2>
						</marquee>
						<div class="container">
							<form method="post">
								<div class="row">
									<h2 style="text-align:center">Appointment Form</h2>
									<input type="text" name="username" placeholder="Username" required>
									<input type="text" name="contact" placeholder="Contact" required>
									<input type="text" name="username" placeholder="E-mail" required>
									<input type="date" name="username" placeholder="Select Date" required>
									<input type="time" name="username" placeholder="Select Time" required>
									<input type="password" name="password" id="password" placeholder="Password" required>
									<input type="button" value="Book An Appointment" title="No Any Appointment Take At This Time (Due To Corona)" class="close"></div>
											</div>
										</form>
									</div>
									<div class="bottom-container">
										<div class="row">
											<div class="col">
												<a href="login.html" style="color:white" class="btn">Register</a>
											</div>
											<div class="col">
												<a href="login.html" style="color:white" class="btn">Forgot password?</a>
											</div>
										</div>
									</div>
								</body>
							</html>
