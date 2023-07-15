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

		<h1 > CAR </h1>
		
		<hr>
	<center>

		<div class="clearfix">

				
		  <div class="img-container">
				<div class="container">
				  <img src="images1/car2.jpeg" class="image">
				  <div class="overlay"> 
 <?php
	require 'config.php';
	
	
	$sqluser = "SELECT Brand_Name , Cost_per_km FROM vehicle where VehicleID= 'AB-1234' ";
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
				  <img src="images1/car3.jpg" class="image">
				  <div class="overlay">
<?php
	require 'config.php';
	
	$sqluser = "SELECT Brand_Name , Cost_per_km FROM vehicle where VehicleID= 'KA-6789' ";
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
				  <img src="images1/car5.jpg" class="image">
				  <div class="overlay">
 <?php
	require 'config.php';
	//$id = "AB-1234";
	
	$sqluser = "SELECT Brand_Name , Cost_per_km FROM vehicle where VehicleID= 'CCA-3572' ";
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
				  <img src="images1/car6.jpg" class="image">
				  <div class="overlay">
<?php
	require 'config.php';
	//$id = "AB-1234";
	
	$sqluser = "SELECT Brand_Name , Cost_per_km FROM vehicle where VehicleID= 'CE-1011' ";
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
				  <img src="images1/car8.jpg" class="image">
				  <div class="overlay">
<?php
	require 'config.php';
	//$id = "AB-1234";
	
	$sqluser = "SELECT Brand_Name , Cost_per_km FROM vehicle where VehicleID= 'KL-1189' ";
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
				  <img src="images1/car9.jpg" class="image">
				  <div class="overlay">
<?php
	require 'config.php';
	//$id = "AB-1234";
	
	$sqluser = "SELECT Brand_Name , Cost_per_km FROM vehicle where VehicleID= 'GC-3500' ";
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
				  <img src="images1/car10.png" class="image">
				  <div class="overlay">
<?php
	require 'config.php';
	//$id = "AB-1234";
	
	$sqluser = "SELECT Brand_Name , Cost_per_km FROM vehicle where VehicleID= 'CAA-5671' ";
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
				  <img src="images1/car11.jpeg" class="image">
				  <div class="overlay">
<?php
	require 'config.php';
	//$id = "AB-1234";
	
	$sqluser = "SELECT Brand_Name , Cost_per_km FROM vehicle where VehicleID= 'PA-1111' ";
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
				  <img src="images1/car12.jpg" class="image">
				  <div class="overlay">
<?php
	require 'config.php';
	//$id = "AB-1234";
	
	$sqluser = "SELECT Brand_Name , Cost_per_km FROM vehicle where VehicleID= 'ABB-8080' ";
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
				  <img src="images1/car13.jpg" class="image">
				  <div class="overlay">
<?php
	require 'config.php';
	//$id = "AB-1234";
	
	$sqluser = "SELECT Brand_Name , Cost_per_km FROM vehicle where VehicleID= 'NC-6009' ";
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
				  <img src="images1/car14.jpg" class="image">
				  <div class="overlay">
<?php
	require 'config.php';
	//$id = "AB-1234";
	
	$sqluser = "SELECT Brand_Name , Cost_per_km FROM vehicle where VehicleID= 'HA-1031' ";
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
				  <img src="images1/car15.jpg" class="image">
				  <div class="overlay">
<?php
	require 'config.php';
	//$id = "AB-1234";
	
	$sqluser = "SELECT Brand_Name , Cost_per_km FROM vehicle where VehicleID= 'AAA-3000' ";
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
				  <img src="images1/car16.jpg" class="image">
				  <div class="overlay">
<?php
	require 'config.php';
	//$id = "AB-1234";
	
	$sqluser = "SELECT Brand_Name , Cost_per_km FROM vehicle where VehicleID= 'KT-8366' ";
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
				  <img src="images1/car17.png" class="image">
				  <div class="overlay">
<?php
	require 'config.php';
	//$id = "AB-1234";
	
	$sqluser = "SELECT Brand_Name , Cost_per_km FROM vehicle where VehicleID= 'GI-8930' ";
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
				  <img src="images1/car18.png" class="image">
				  <div class="overlay">
<?php
	require 'config.php';
	//$id = "AB-1234";
	
	$sqluser = "SELECT Brand_Name , Cost_per_km FROM vehicle where VehicleID= 'KM-1756' ";
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
				  <img src="images1/car19.jpg" class="image">
				  <div class="overlay">
<?php
	require 'config.php';
	//$id = "AB-1234";
	
	$sqluser = "SELECT Brand_Name , Cost_per_km FROM vehicle where VehicleID= 'HN-6565' ";
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
				  <img src="images1/car20.jpg" class="image">
				  <div class="overlay">
<?php
	require 'config.php';
	//$id = "AB-1234";
	
	$sqluser = "SELECT Brand_Name , Cost_per_km FROM vehicle where VehicleID= 'CAF-0077' ";
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

		</div>
				  <div class="img-container">
				<div class="container">
				  <img src="images1/car1.png" class="image">
				  <div class="overlay">
<?php
	require 'config.php';
	//$id = "AB-1234";
	
	$sqluser = "SELECT Brand_Name , Cost_per_km FROM vehicle where VehicleID= 'CAC-2021' ";
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

		</div>


		
		</div>


		</div>
		
		</center>
		
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