
<!DOCTYPE html>
<html>
	<head>
		<!-- add a title (a)-->
		<title> Online vehicle reservation </title>
		
		<!--add styleSheet-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		<link rel="stylesheet" href="styles1/home.css">
		<!--<script src="js1/script1.js"> </script>-->
		
	<style>
			body{
		
		background-color:#f2f1ed;
		
		}
		
		.container-time {
		background-color:  #39a098;
		padding: 50px;
		/*outline: 3px dashed #fafafa;*/
		border: 1px solid yellow;
		outline-offset: -30px;
		text-align: center;
		}
	
			.heading {
		font-size: 40px;
		text-transform: uppercase;
		text-shadow: 2px 2px 5px #C96567;
		}

		.heading-days {
		color:#171717;
		font-size: 35px;

		}

		.heading-time{
			
			color:#171717;
			font-size:30px;
			
		}

		.heading-phone {
		font-size: 30px;
		color:#171717;
		}
		
				.topnav {
			background-color: #314455;
			overflow: hidden;
			
		}



			.topnav a:hover {
		  background-color: #C96567;
		  color: black;
		}


	</style>
	
	</head>
	
	<body>
		
		
		<?php


			require 'config.php';


			session_start();
			$id=$_SESSION['cid'];
			// select Query
			$sql ="SELECT * FROM customer where CustomerID=$id";
			// resultser int result variable
			$result=$con -> query($sql);

			if ( $result -> num_rows>0)
			{
			
				
					// read data
					while ($row = $result -> fetch_assoc())
					{
						$CustomerID=$id;
						$Fname=$row["Fname"];
						$Email=$row["Email"];
					}
					
			}	
			
			
			

			$con->close();
			
			


		?>
					
		<!-- add a horizontal menu (e) -->
		
		<div class="topnav">
		
		<div class="logo">
		
		<p><strong>ApeX</strong></p>
		
		</div>
		
	
		<a href="Home.html">Home</a>
		<a href="Service.html" >Service</a>
		<a href="Catalogue.html" >Catalogue</a>
		<a href="Aboutus.html">About us</a>
		<a href="contactus.html">Contact us</a>
		<a href="FAQ.html">FAQ</a>
		<a href="T&C.html">T&C</a>
		<a href="Feedback.html">Feedback</a>

		<div class="topnav-right">
		<a href="signup.php">SIGN IN</a>
		<a href="login.php">LOGIN</a>
		</div>
			
		</div>
		
		

		 <!-----refuring to the w3 school-------------->
		<div class="container1">
		<div class="container-time">
		<h2 class="heading"></h2><br><br>
		<h3 class="heading-days">Monday-Friday</h3>
		<h4 class="heading-time">9am - 7pm</h4>

		<h3 class="heading-days">Saturday and sunday</h3>
		<h4 class="heading-time">9am - 5pm</h4>
		
		<br><br><br><br><br><br>

		<hr>

		<h4 class="heading-phone">Call Us: (081) 45-45-456</h4>
		
		</div>

		<div class="container-form">
		<form action="submit.php" method="post">
		
		<h2 class="heading heading-yellow">Place Booking</h2>
		
		
		
		
		<div class="form-field">
		<p>CustomerID</p> &nbsp &nbsp &nbsp &nbsp
		<input type="text" name="customerID" placeholder="<?php echo$CustomerID ?>" readonly> 
		</div>
		
		
		<div class="form-field">
		<p>VehicleID</p>  &nbsp &nbsp &nbsp &nbsp
		<input type="text" name="VehicleID" placeholder="vehicleID"> 
		</div>
		
		<div class="form-field">
		<p>Full Name</p>
		<input type="text" name="fname" placeholder="<?php echo$Fname ?>" readonly>
		</div>
		
		<div class="form-field">
		<p>Email</p>
		<input type="email" name="email" placeholder="<?php echo$Email ?>" readonly >
		</div>
		
			
		<div class="form-field" >
		<p>Pickup Date</p> 
		<input type="date" name="pickup_Date" required>
		</div>
		
		<div class="form-field" >
		<p>Return Date</p>
		<input type="date" name="return_Date" required>
		</div>
		
		<div class="form-field">
		<p>Location</p>
		<input type="text" name="drop_location" placeholder="location" required>
		</div>
		

		<div class="form-field">
		<p>Payment Method</p>
		<select name="select" name="Payment_Methode" id="#">
		<option value="1">Cash</option>
		<option value="2">Cheque</option>
		</select>
		</div>

		<button class="btn" onclick="loadDataBtn()" >Booking</button><br>
		</form>
		</div>
		</div>
	
		<script>
		
		function loadDataBtn()
		{
			
			alert("Submitted Successfully!!");
			
			
		}
		
		</script>
		

		<!-- add a horizontal line (d)-->
		<hr>
		
		<footer>
				
				

			<div class="socialmedia">
				<ul>
					<li><a href="#"><i class="fa fa-linkedin fa-fw" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter fa-fw" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-pinterest fa-fw" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-google-plus fa-fw" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-rss fa-fw" aria-hidden="true"></i></a></li>
					
				</ul>
			</div> <!-- socialmedia -->
			
			
			<div class="credit">
				<ul>
					<li><a href="#"><i class="fa fa-credit-card"  aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-credit-card"  aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-credit-card"  aria-hidden="true"></i></a></li>
				</ul>
			</div> 
		
			
			
			<p class="para4"><b>C<b> 2021-ApeX rent car Pvt.Ltd.All Rights Reserved </p>
		
		</footer>
		
		
	</div>
	</body>
</html>