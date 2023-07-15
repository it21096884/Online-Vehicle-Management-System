<?php
	require 'config.php';
	session_start();
	$id=$_SESSION['eid'];
	// select Query
	$sql ="SELECT * FROM employee where EmployeeID=$id";
	// resultser int result variable
	$result=$con -> query($sql);
	
	if ( $result -> num_rows>0)
	{
		// read data
		while ($row = $result -> fetch_assoc())
		{
			$Fname=$row["Fname"];
			$Lname=$row["Lname"];
			$Type=$row["Type"];
			$Email=$row["Email"];
			$phone=$row["phone"];
			$Address=$row["Address"];
			$Fullname= $Fname."  ".$Lname;
	
			
			
		}
		echo "</table>";
	}
	
	$con-> close();

?>


<html>
	<head>
		<title> Online vehicle reservation </title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
	
		<link rel="stylesheet" href="styles1/Adminprofile.css">
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
		
	<center>
		<div class="maindiv">
			<div class="leftdiv">
				<center><br><br>
					<img src="images1/admin.jpg" alt="Avatar" class="avatar"><!--refuring to the W3school-------------->
					<br><br>
					<h4><font color="white">
					<?php echo$Type ?><br>
				</center>
				<p style="font-size:20px;color:#BCC6CC">
					<?php echo$Fullname ?></font></h4><br><br><br><br>
					Skills:<br><br><br>
					Technical Skills<br><br>
					Soft Skills<br><br>
					Interpersonal skills<br><br>
					Mentoring<br><br>
				</p>
				
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
								<td><p><?php echo$Fullname?></p> </td>
							</tr>
							<tr>
								<td><h4>Email</h4></td>
								<td><p><?php echo$Email ?></p></td>
							</tr>
							<tr>
								<td><h4>Phone</h4></td>
								<td><p><?php echo$phone ?></p></td>
							</tr>
							<tr>
								<td><h4>Address</h4></td>
								<td><p><?php echo$Address ?></p></td>
							</tr>
						</table>
					</center>
				</div>
				<div class="bottom">
					<div class="leftbottom">
						<img src="images1/vehicles.jpg" width="200px" height="175px"><br>
						<a href="update.php" class="button"><u><b>UpdateVehicles</b></u></a>
						<!--<h4><a href="" ><u>view vehicles</u></a></h4>-->
					</div>
					<div class="middlebottom">
						<img src="images1/confirmoder.jpg" width="200px" height="175px"><br>
						<a href="oderconfirm.php" class="button"><u><b>Confirm Oder</b></u></a>
						<!--<h4><a href="" ><u>Confirm oder</u></h4>-->
					</div>
					<div class="rightbottom">
						<img src="images1/checkout.jpg" width="200px" height="175px"><br>
						<a href="addpaymet.php" class="button"><u><b>Checkout</b></u></a>
						<!--<h4><a href="" ><u></u></a></h4>-->
					</div> 
				</div>
				
			</div>
		</div>
						<!-- add a horizontal line (d)-->
		<hr>
		
	</center>
			<footer>
				
				<!--refuring to the W3school-------------->

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
		
	</body>
</html>