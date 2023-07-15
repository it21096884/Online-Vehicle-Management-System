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

		<h1> VAN / BUS </h1>

		<hr>
<center>
		
<div class="clearfix">
  <div class="img-container">
		<div class="container">
		  <img src="images1/van1.png" class="image">
		  <div class="overlay">
<?php
	require 'config.php';
	//$id = "AB-1234";
	
	$sqluser = "SELECT Brand_Name , Cost_per_km FROM vehicle where VehicleID= 'KQ-7474' ";
        $result = $con->query($sqluser);
        $rows = $result->num_rows;
	
	// select Query
	//$sql ="SELECT Brand_Name , Cost_per_km FROM vehicle where VehicleID=$id";
	// resultser int result variable
	//$result=$con -> query($sql);

	if ( $result -> num_rows>0 )
	{		// read data
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
		  <img src="images1/van2.jpg" class="image">
		  <div class="overlay">
<?php
	require 'config.php';
	//$id = "AB-1234";
	
	$sqluser = "SELECT Brand_Name , Cost_per_km FROM vehicle where VehicleID= 'CCB-8333' ";
        $result = $con->query($sqluser);
        $rows = $result->num_rows;
	
	// select Query
	//$sql ="SELECT Brand_Name , Cost_per_km FROM vehicle where VehicleID=$id";
	// resultser int result variable
	//$result=$con -> query($sql);

	if ( $result -> num_rows>0 )
	{		// read data
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
		  <img src="images1/van3.jpg" class="image">
		  <div class="overlay">
<?php
	require 'config.php';
	//$id = "AB-1234";
	
	$sqluser = "SELECT Brand_Name , Cost_per_km FROM vehicle where VehicleID= 'NAC-6060' ";
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
		  <img src="images1/van4.jpg" class="image">
		  <div class="overlay">
<?php
	require 'config.php';
	//$id = "AB-1234";
	
	$sqluser = "SELECT Brand_Name , Cost_per_km FROM vehicle where VehicleID= 'KT-0005' ";
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
		  <img src="images1/van5.jpg" class="image">
		  <div class="overlay">
<?php
	require 'config.php';
	//$id = "AB-1234";
	
	$sqluser = "SELECT Brand_Name , Cost_per_km FROM vehicle where VehicleID= 'HZ-5500' ";
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
		  <img src="images1/van6.jpg" class="image">
		  <div class="overlay">
<?php
	require 'config.php';
	//$id = "AB-1234";
	
	$sqluser = "SELECT Brand_Name , Cost_per_km FROM vehicle where VehicleID= 'GE-9006' ";
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
		  <img src="images1/van7.jpg" class="image">
		  <div class="overlay">
<?php
	require 'config.php';
	//$id = "AB-1234";
	
	$sqluser = "SELECT Brand_Name , Cost_per_km FROM vehicle where VehicleID= 'KS-8430' ";
        $result = $con->query($sqluser);
        $rows = $result->num_rows;
	
	// select Query
	//$sql ="SELECT Brand_Name , Cost_per_km FROM vehicle where VehicleID=$id";
	// resultser int result variable
	//$result=$con -> query($sql);

	if ( $result -> num_rows>0 )
	{		// read data
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
		  <img src="images1/van3.jpg" class="image">
		  <div class="overlay"> 
<?php
	require 'config.php';
	//$id = "AB-1234";
	
	$sqluser = "SELECT Brand_Name , Cost_per_km FROM vehicle where VehicleID= 'NCE-6550' ";
        $result = $con->query($sqluser);
        $rows = $result->num_rows;
	
	// select Query
	//$sql ="SELECT Brand_Name , Cost_per_km FROM vehicle where VehicleID=$id";
	// resultser int result variable
	//$result=$con -> query($sql);

	if ( $result -> num_rows>0 )
	{		// read data
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
		  <img src="images1/bus2.jpg" class="image">
		  <div class="overlay">
<?php
	require 'config.php';
	//$id = "AB-1234";
	
	$sqluser = "SELECT Brand_Name , Cost_per_km FROM vehicle where VehicleID= 'HN-6335' ";
        $result = $con->query($sqluser);
        $rows = $result->num_rows;
	
	// select Query
	//$sql ="SELECT Brand_Name , Cost_per_km FROM vehicle where VehicleID=$id";
	// resultser int result variable
	//$result=$con -> query($sql);

	if ( $result -> num_rows>0 )
	{		// read data
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
		  <img src="images1/bus3.png" class="image">
		  <div class="overlay"> 
<?php
	require 'config.php';
	//$id = "AB-1234";
	
	$sqluser = "SELECT Brand_Name , Cost_per_km FROM vehicle where VehicleID= 'NT-1166' ";
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
		  <img src="images1/bus4.jpg" class="image">
		  <div class="overlay">
<?php
	require 'config.php';
	//$id = "AB-1234";
	
	$sqluser = "SELECT Brand_Name , Cost_per_km FROM vehicle where VehicleID= 'ND-8900' ";
        $result = $con->query($sqluser);
        $rows = $result->num_rows;
	
	// select Query
	//$sql ="SELECT Brand_Name , Cost_per_km FROM vehicle where VehicleID=$id";
	// resultser int result variable
	//$result=$con -> query($sql);

	if ( $result -> num_rows>0 )
	{		// read data
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
		  <img src="images1/bus1.png" class="image">
		  <div class="overlay">
<?php
	require 'config.php';
	//$id = "AB-1234";
	
	$sqluser = "SELECT Brand_Name , Cost_per_km FROM vehicle where VehicleID= 'KM-1700' ";
        $result = $con->query($sqluser);
        $rows = $result->num_rows;
	
	// select Query
	//$sql ="SELECT Brand_Name , Cost_per_km FROM vehicle where VehicleID=$id";
	// resultser int result variable
	//$result=$con -> query($sql);

	if ( $result -> num_rows>0 )
	{		// read data
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
		
</center>

	

<br>
<br>
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

	