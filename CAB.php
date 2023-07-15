<!DOCTYPE html>
<html>
<head>
		<!-- add a title (a)-->
		<title> Online vehicle reservation </title>
		
		<!--add styleSheet-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		<link rel="stylesheet" href="styles1/style.css">
		<link rel="stylesheet" href="styles1/style04.css">
	<style>
h4{
		color: white; 
		text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;
		
}

h5{
		color:yellow; 
		text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px #c96567 ;
		
}

</style>
	
		
				
		<!-- add a horizontal menu -->
		
		<div class="topnav">
		<div class="logo">
			<p><strong>ApeX</strong></p>
		</div>			
		

			<a href="Home.html">Home</a>
			<a href="Service.html">Service</a>
			<a class="active" href="catalogue.html">Catalogue</a>
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

		
		
	
		
</head>
<body>

		<h1> CAB / JEEP </h1>
		
		<hr>
<center>
		
<div class="clearfix">
  <div class="img-container">
		<div class="container">
		  <img src="images1/CJ_1.jpg" class="image">
		  <div class="overlay">
<?php
	require 'config.php';
	//$id = "AB-1234";
	
	$sqluser = "SELECT Brand_Name , Cost_per_km FROM vehicle where VehicleID= 'PQ-1221' ";
        $result = $con->query($sqluser);
        $rows = $result->num_rows;
	
	// select Query
	//$sql ="SELECT Brand_Name , Cost_per_km FROM vehicle where VehicleID=$id";
	// resultser int result variable
	//$result=$con -> query($sql);

	if ( $result -> num_rows>0 )
	{
			// read data
			while ($rows = $result -> fetch_assoc())
			{
				$name=$rows["Brand_Name"];
				$cost=$rows["Cost_per_km"];
				
				echo "<h4>" .$name ."</h4>";
				echo "<h5><b>Cost Per km :" ;
				echo "RS.".$cost ;
				echo "<br>" ;
			}
	
	}

	$con-> close();

?>			  
		  </div></div>
				<div class="divBtn">
				   <a href="login.php" class="B_btn">Book</a> 
		</div></div>

  <div class="img-container">		
		<div class="container">
		  <img src="images1/CJ_2.jpg" class="image">
		  <div class="overlay">
<?php
	require 'config.php';
	//$id = "AB-1234";
	
	$sqluser = "SELECT Brand_Name , Cost_per_km FROM vehicle where VehicleID= 'ABC-8990' ";
        $result = $con->query($sqluser);
        $rows = $result->num_rows;
	
	// select Query
	//$sql ="SELECT Brand_Name , Cost_per_km FROM vehicle where VehicleID=$id";
	// resultser int result variable
	//$result=$con -> query($sql);

	if ( $result -> num_rows>0 )
	{
		
					// read data
			while ($rows = $result -> fetch_assoc())
			{
				$name=$rows["Brand_Name"];
				$cost=$rows["Cost_per_km"];
				
				echo "<h4>" .$name ."</h4>";
				echo "<h5><b>Cost Per km :" ;
				echo "RS.".$cost ;
				echo "<br>" ;
			}

	}

	$con-> close();

?>	
		  </div></div>
				<div class="divBtn">
				   <a href="login.php" class="B_btn">Book</a> 
		</div></div>
	

  <div class="img-container">
		<div class="container">
		  <img src="images1/CJ_3.jpg" class="image">
		  <div class="overlay">
<?php
	require 'config.php';
	//$id = "AB-1234";
	
	$sqluser = "SELECT Brand_Name , Cost_per_km FROM vehicle where VehicleID= 'KT-6999' ";
        $result = $con->query($sqluser);
        $rows = $result->num_rows;
	
	// select Query
	//$sql ="SELECT Brand_Name , Cost_per_km FROM vehicle where VehicleID=$id";
	// resultser int result variable
	//$result=$con -> query($sql);

	if ( $result -> num_rows>0 )
	{

				// read data
			while ($rows = $result -> fetch_assoc())
			{
				$name=$rows["Brand_Name"];
				$cost=$rows["Cost_per_km"];
				
				echo "<h4>" .$name ."</h4>";
				echo "<h5><b>Cost Per km :" ;
				echo "RS.".$cost ;
				echo "<br>" ;
			}


	}

	$con-> close();

?>			  
		  </div></div>
				<div class="divBtn">
				   <a href="login.php" class="B_btn">Book</a> 
		</div></div><div>
		
  <div class="img-container">
		<div class="container">
		  <img src="images1/CJ_4.jpeg" class="image">
		  <div class="overlay">
<?php
	require 'config.php';
	
	
	$sqluser = "SELECT Brand_Name , Cost_per_km FROM vehicle where VehicleID= 'HQ-1001' ";
        $result = $con->query($sqluser);
        $rows = $result->num_rows;
	
	// select Query
	//$sql ="SELECT Brand_Name , Cost_per_km FROM vehicle where VehicleID=$id";
	// resultser int result variable
	//$result=$con -> query($sql);

	if ( $result -> num_rows>0 )
	{
			// read data
			while ($rows = $result -> fetch_assoc())
			{
				$name=$rows["Brand_Name"];
				$cost=$rows["Cost_per_km"];
				
				echo "<h4>" .$name ."</h4>";
				echo "<h5><b>Cost Per km :" ;
				echo "RS.".$cost ;
				echo "<br>" ;
			}
		
	

	}

	$con-> close();

?>			  
		  </div></div>
				<div class="divBtn">
				   <a href="login.php" class="B_btn">Book</a> 
		</div></div><div>  
		
<div class="img-container">
		<div class="container">
		  <img src="images1/CJ_5.jpg" class="image">
		  <div class="overlay">
<?php
	require 'config.php';
	//$id = "AB-1234";
	
	$sqluser = "SELECT Brand_Name , Cost_per_km FROM vehicle where VehicleID= 'ACE-3003' ";
        $result = $con->query($sqluser);
        $rows = $result->num_rows;
	
	// select Query
	//$sql ="SELECT Brand_Name , Cost_per_km FROM vehicle where VehicleID=$id";
	// resultser int result variable
	//$result=$con -> query($sql);

	if ( $result -> num_rows>0 )
	{
				// read data
			while ($rows = $result -> fetch_assoc())
			{
				$name=$rows["Brand_Name"];
				$cost=$rows["Cost_per_km"];
				
				echo "<h4>" .$name ."</h4>";
				echo "<h5><b>Cost Per km :" ;	
				echo "RS.".$cost ;
				echo "<br>" ;
			}

	}

	$con-> close();

?>			  
		  </div></div>
				<div class="divBtn">
				   <a href="login.php" class="B_btn">Book</a> 
		</div></div><div>
		
 
<div class="img-container">
		<div class="container">
		  <img src="images1/CJ_6.jpg" class="image">
		  <div class="overlay">
<?php
	require 'config.php';
	//$id = "AB-1234";
	
	$sqluser = "SELECT Brand_Name , Cost_per_km FROM vehicle where VehicleID= 'KQA-8446' ";
        $result = $con->query($sqluser);
        $rows = $result->num_rows;
	
	// select Query
	//$sql ="SELECT Brand_Name , Cost_per_km FROM vehicle where VehicleID=$id";
	// resultser int result variable
	//$result=$con -> query($sql);

	if ( $result -> num_rows>0 )
	{
			// read data
			while ($rows = $result -> fetch_assoc())
			{
				$name=$rows["Brand_Name"];
				$cost=$rows["Cost_per_km"];
				
				echo "<h4>" .$name ."</h4>";
				echo "<h5><b>Cost Per km :" ;
				echo "RS.".$cost ;
				echo "<br>" ;
			}
		
	}

	$con-> close();

?>			  
		  </div></div>
				<div class="divBtn">
				   <a href="login.php" class="B_btn">Book</a> 
		</div></div><div>

<div class="img-container">
		<div class="container">
		  <img src="images1/CJ_7.jpg" class="image">
		  <div class="overlay">
<?php
	require 'config.php';
	//$id = "AB-1234";
	
	$sqluser = "SELECT Brand_Name , Cost_per_km FROM vehicle where VehicleID= 'GA-3251' ";
        $result = $con->query($sqluser);
        $rows = $result->num_rows;
	
	// select Query
	//$sql ="SELECT Brand_Name , Cost_per_km FROM vehicle where VehicleID=$id";
	// resultser int result variable
	//$result=$con -> query($sql);

	if ( $result -> num_rows>0 )
	{
				// read data
			while ($rows = $result -> fetch_assoc())
			{
				$name=$rows["Brand_Name"];
				$cost=$rows["Cost_per_km"];
				
				echo "<h4>" .$name ."</h4>";
				echo "<h5><b>Cost Per km :" ;
				echo "RS.".$cost ;
				echo "<br>" ;
			}
	}

	$con-> close();

?>			  
		  </div></div>
				<div class="divBtn">
				   <a href="login.php" class="B_btn">Book</a> 
		</div></div><div>

<div class="img-container">
		<div class="container">
		  <img src="images1/CJ_8.jpg" class="image">
		  <div class="overlay">
<?php
	require 'config.php';
	//$id = "AB-1234";
	
	$sqluser = "SELECT Brand_Name , Cost_per_km FROM vehicle where VehicleID= 'KM-1000' ";
        $result = $con->query($sqluser);
        $rows = $result->num_rows;
	
	// select Query
	//$sql ="SELECT Brand_Name , Cost_per_km FROM vehicle where VehicleID=$id";
	// resultser int result variable
	//$result=$con -> query($sql);

	if ( $result -> num_rows>0 )
	{
			// read data
			while ($rows = $result -> fetch_assoc())
			{
				$name=$rows["Brand_Name"];
				$cost=$rows["Cost_per_km"];
				
				echo "<h4>" .$name ."</h4>";
				echo "<h5><b>Cost Per km :" ;	
				echo "RS.".$cost ;
				echo "<br>" ;
			}
	

	}

	$con-> close();

?>			  
		  </div></div>
				<div class="divBtn">
				   <a href="login.php" class="B_btn">Book</a> 
		</div></div><div>		
		
<div class="img-container">
		<div class="container">
		  <img src="images1/CJ_9.jpg" class="image">
		  <div class="overlay">
<?php
	require 'config.php';
	//$id = "AB-1234";
	
	$sqluser = "SELECT Brand_Name , Cost_per_km FROM vehicle where VehicleID= 'HM-7896' ";
        $result = $con->query($sqluser);
        $rows = $result->num_rows;
	
	// select Query
	//$sql ="SELECT Brand_Name , Cost_per_km FROM vehicle where VehicleID=$id";
	// resultser int result variable
	//$result=$con -> query($sql);

	if ( $result -> num_rows>0 )
	{
		// read data
			while ($rows = $result -> fetch_assoc())
			{
				$name=$rows["Brand_Name"];
				$cost=$rows["Cost_per_km"];
				
				echo "<h4>" .$name ."</h4>";
				echo "<h5><b>Cost Per km :" ;
				echo "RS.".$cost ;
				echo "<br>" ;
			}

	}

	$con-> close();

?>			  
		  </div></div>
				<div class="divBtn">
				   <a href="login.php" class="B_btn">Book</a> 
		</div></div><div>

	
</center>

</div>

		<br>
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
				
		
		
</body>
</html>

	