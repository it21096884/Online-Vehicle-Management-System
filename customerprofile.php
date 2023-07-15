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
			$Fname=$row["Fname"];
			$Lname=$row["Lname"];
			$Email=$row["Email"];
			$phone=$row["phone"];
			$Address=$row["Address"];
			$Fullname= $Fname."  ".$Lname;

			
		}
		
	}
	
	$con-> close();

?>


<html>
	<head>
	<title> Online vehicle reservation </title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		<link rel="stylesheet" href="styles1/style.css">
		<link rel="stylesheet" href="styles1/customerprofile.css">
	</head>
	<body>
	<!-- add a horizontal menu (e) -->
		
		<div class="topnav">
			<div class="logo">
				<p><strong>ApeX</strong></p>
			</div>
			<a href="Home.html">Home</a>
			<a href="Service.html">Service</a>
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
		
	<center>
		<div class="maindiv">
			<div class="leftdiv">
				<center><br><br><br>
					<img src="images1/customer.jpg" alt="Avatar" class="avatar"><br><br><!--refuring to the W3school-------------->
					<h4><font color="white"><?php echo$Fullname ?></font></h4><br>
					<a href="Catalogue.html" >view vehicles</a><br>
					<a href="Booking.php" >Make a oder</a><br>
					<a href="Paymentpage1.php" >Cancle a oder</a><br>
					<a href="feedback.html" >Feedback</a><br>
					
				</center>
			</div>
			<div class="rightdiv">
				<div class ="righttop">
					<center>
						<table border="0" width="100%" height="100%">
							<tr>
								<td colspan="2" width="30%"><h3>Brief Introduction</h3></td>
							
							</tr>
							<tr>
								<td><h4>Full Name</h4></td>
								<td><p class="pr"><?php echo$Fullname ?></p> </td>
							</tr>
							<tr>
								<td><h4>Email</h4></td>
								<td><p class="pr"><?php echo$Email ?></p></td>
							</tr>
							<tr>
								<td><h4>Phone</h4></td>
								<td><p class="pr"><?php echo$phone ?></p></td>
							</tr>
							<tr>
								<td><h4>Address</h4></td>
								<td><p class="pr"><?php echo$Address ?></p></td>
							</tr>
						</table>
					</center>
				</div>
				<div class ="rightbottom">
					<center>
						<!-- image animation-->
						<center>
						
							<div class="slideshow-container" >

								<div class="mySlides fade">
										
									<div class="container1">
										<img src="images1/img.jpg" class="image" >
										
									</div>
								</div>

								<div class="mySlides fade">
									<div class="container1">
										<img src="images1/i.jpg"class="image" >
										
									</div>
								</div>

								<div class="mySlides fade">
									<div class="container1">
										<img src="images1/i3.jpg" class="image">
										
									</div>
								</div>
								<div class="mySlides fade">
									<div class="container1">
										<img src="images1/i4.jpg" class="image">
										
									</div>
								</div>
							
							</div>
						</center>
						<br>

						<div style="text-align:center">
							<span class="dot"></span> 
							<span class="dot"></span> 
							<span class="dot"></span> 
							<span class="dot"></span>
						</div>
						<br>
				
										<!--img src="images/img.jpg" alt="image" class="image" ><br><br-->
					</center>
				</div>
			</div>
		</div>

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
		
			<!-- javascript function-->
		<script>
				
			var slideIndex = 0;
			showSlides();

			function showSlides() {
				var i;
				var slides = document.getElementsByClassName("mySlides");
				var dots = document.getElementsByClassName("dot");
				for (i = 0; i < slides.length; i++) {
					slides[i].style.display = "none";  
				}
				slideIndex++;
				if (slideIndex > slides.length) {slideIndex = 1}    
				for (i = 0; i < dots.length; i++) {
					dots[i].className = dots[i].className.replace(" active", "");
				}
				slides[slideIndex-1].style.display = "block";  
				dots[slideIndex-1].className += " active";
				setTimeout(showSlides, 2000); // Change image every 2 seconds
			}
		</script>	
	</body>
</html>