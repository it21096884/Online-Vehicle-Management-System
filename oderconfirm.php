<?php

	require 'config.php';
	
?>

<html>
	<head>
		<title> Online vehicle reservation </title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		<link rel="stylesheet" href="styles1/oderconfirm.css">
		<link rel="stylesheet" href="styles1/style.css">


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
		<!--pg coding-->
		<div class="maindiv" >
			<div class="leftdiv">
				<h2><b>BOOKING DETAILS</b></h2>
				<!-- show booking detail as a table--><!--refuring to the youtube video-------------->
				<center>
					<form method = "POST" action ="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
						<button name ="Confirmedbtn" id = "cbtn" class="button1">Display Pending Orders</button>
					</form>
					<?php 
			  
					   if(isset($_POST["Confirmedbtn"]))
					   {
						 selectData();
					   }
					?>
		
					<?php
						function selectData()
						{
							global $con;
						
								// select Query
								$sql ="SELECT bookingID ,drop_location,pickup_Date,return_Date,Status FROM booking";
								// resultser int result variable
								$result=$con -> query($sql);
								
								
								
								if ( $result -> num_rows>0)
								{
									echo "<table id ='table' border='1'>";
									echo "<th> bookingID</th> <th>drop_location</th> <th>pickup_Date</th> <th>return_Date</th> <th>Status</th>";//culom creation
									
									// read data
									while ($row = $result -> fetch_assoc())
									{
										if($row ["Status"]=='p')
										{
											$s=$row["Status"]="Pending";
											echo"<tr>";
											//echo "ID: ".$row ["id"]. "- Name :" $row["name"]."<br>";
											echo"<td>".$row ["bookingID"]. "</td>";
											echo"<td>".$row ["drop_location"]. "</td>";
											echo"<td>".$row ["pickup_Date"]. "</td>";
											echo"<td>".$row ["return_Date"]. "</td>";
											echo"<td>".$s. "</td>";
											echo"</tr>";
										}
										
									}
									echo "</table>";
								}
								else
								{
									echo" alert('No Recodes!!')<script>";
									
								}
						}
					?>
				
		
					<?php
						$sql ="Select * from booking Where Status ='p' limit 1";
						$result=$con -> query($sql);
						if ( $result -> num_rows>0)
						{
							while ($row = $result -> fetch_assoc())
							{
								$Bi=$row ['bookingID'];
							}
						}
						else{
							$Bi=1;
							echo"<h1 style='color:#C96567;'> NO RECORDS <br> TO CONFIRM </h1>";
						}
						
					?>
					 
					<br><br>
					<!--assing Booking customer table data into varriables-->
					<?php
					
						// select Query
						$sql ="SELECT * FROM booking where bookingID=$Bi";
						// resultser int result variable
						$result=$con -> query($sql);
						
						if ( $result -> num_rows>0)
						{
							// read data
							while ($row = $result -> fetch_assoc())
							{
								$bookingID=$row["bookingID"];
								$drop_location=$row["drop_location"];
								$pickup_Date=$row["pickup_Date"];
								$return_Date=$row["return_Date"];
								$CustomerID=$row["CustomerID"];
								$VehicleID=$row["VehicleID"];
							}
							
						}"<br>";
						
						// select Query
						$sql ="SELECT * FROM customer where CustomerID=$CustomerID";
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
				
					?>
				</center>
			</div>
			<div class="leftbottom">
				<center>
						<!-- image animation-->
						<center>
						
							<div class="slideshow-container" >

								<div class="mySlides fade">
										
									<div class="container1">
										<img src="images1/od2.jpg" class="image" >
										
									</div>
								</div>

								<div class="mySlides fade">
									<div class="container1">
										<img src="images1/od4.jpg"class="image" >
										
									</div>
								</div>

								<div class="mySlides fade">
									<div class="container1">
										<img src="images1/od.jpg" class="image">
										
									</div>
								</div>
								<div class="mySlides fade">
									<div class="container1">
										<img src="images1/od3.jpg" class="image">
										
									</div>
								</div>
							
							</div>
						</center>
						<br>

						<div style="text-align:center"><!--refuring to the W3school-------------->
							<span class="dot"></span> 
							<span class="dot"></span> 
							<span class="dot"></span> 
							<span class="dot"></span>
						</div>
						<br>
					</center>
			</div>
			<!--Display Bookib Details-->
			<div class="rightdiv">
				<h2><b>CONFIRM ORDER</b></h2>
				<div class="middle">
					<center>
						<table border="0" width="100%" height="" >
							<tr>
								<td><h4>BookingID</h4></td>
								<td><p style="text-align:left;color:#52595D;"><?php echo$bookingID ?></p> </td>
							</tr>
							<tr>
								<td><h4>CustomerID</h4></td>
								<td><p style="text-align:left;color:#52595D;"><?php echo$CustomerID ?></p></td>
							</tr>
							<tr>
								<td><h4>Full Name</h4></td>
								<td><p style="text-align:left;color:#52595D;"><?php echo$Fullname ?></p></td>
							</tr>
							<tr>
								<td><h4>Email</h4></td>
								<td><p style="text-align:left;color:#52595D;"><?php echo$Email ?></p></td>
							</tr>
							<tr>
								<td><h4>Address</h4></td>
								<td><p style="text-align:left;color:#52595D;"><?php echo$Address ?></p></td>
							</tr>
							<tr>
								<td><h4>Pickup Date</h4></td>
								<td><p style="text-align:left;color:#52595D;"><?php echo$pickup_Date ?></p></td>
							</tr>
							<tr>
								<td><h4>Return Date</h4></td>
								<td><p style="text-align:left;color:#52595D;"><?php echo$return_Date ?></p></td>
							</tr>
							<tr>
								<td><h4>Location</h4></td>
								<td><p style="text-align:left;color:#52595D;"><?php echo$drop_location?></p></td>
							</tr>
							<tr>
								<td><h4>Vehicle</h4></td>
								<td><p style="text-align:left;color:#52595D;"><?php echo $VehicleID?></p></td>
							</tr>
						</table><br>
						<!--check availability-->
						<a class="button1" href="#popup2">Check availability</a>
						<div id="popup2" class="overlay1">
							<div class="popup1">
								<?php
									$sql ="SELECT * FROM has where bookingID=$bookingID";
									// resultser int result variable
									$result=$con -> query($sql);
											
									if ( $result -> num_rows>0)
									{
										
										echo"<h2> Not available</h2>";
									}
									else
									{
										echo"<h2> Available</h2>";
												
									}
								?>
								<a class="close1" href="#">&times;</a>
							</div>
						</div>
						<br><br><br>
						<!--update bookig table as confirm if vehicle availble-->
						<center>
							<a class="button1" href="#popup1" >Order confirm</a>
							<div id="popup1" class="overlay">
								<div class="popup">
									<?php
										$sql= "UPDATE booking set Status='c' WHERE bookingID='$bookingID'";
										if ($con->query($sql)== TRUE) {
											echo "Record updated successfully";
											echo "<br>";
										} else {
											echo "Error updating record: " . $con->error;
										}
										$sql = "INSERT INTO has(VehicleID, bookingID, pickup_Date,return_Date)
										VALUES ('$VehicleID', '$bookingID', '$pickup_Date','$return_Date')";

										if ($con->query($sql) == TRUE) {
											echo "<b>New record created successfully</b>";
										} else {
											echo "Error: " . $sql . "<br>" . $conn->error;
										}
									?>
									<h2>Confirmed Order </h2>
									<a class="close" href="#">&times;</a>
									<div class="content">
										Sent a confirm massage to customer.
									</div>
								</div>
							</div>
						</center>
						
					</center>
				</div><br><br>
			</div>
		</div>
		<?php
			$con->close();
		?>
			<!-- javascript function--><!--refuring to the w3school-------------->
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
			</div> <!-- socialmedia-->
			
			
			<div class="credit">
				<ul>
					<li><a href="#"><i class="fa fa-credit-card"  aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-credit-card"  aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-credit-card"  aria-hidden="true"></i></a></li>
				</ul>
			</div> 
		
			
			
			<p class="para4"><b>C<b> 2021-ApeX rent car Pvt.Ltd.All Rights Reserved </p>
		
		</footer>
	</body>
</html>