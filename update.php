<!DOCTYPE html>
<html>
<head>
		<!-- add a title (a)-->
		<title> Online vehicle reservation </title>
		
		
		<!--add styleSheet-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		<link rel="stylesheet" href="styles1/style.css">
		<link rel="stylesheet" href="styles1/style3.css">



<style>
	
	
.Div01{
	border: 2px outset black;
	text-align :center;
	width :50%;
	margin: auto;
	padding: 10px;
	background-color:#FFFAFA;
	position:relative;
	box-shadow: 6px 4px 11px 0 rgba(0,0,0,2);
	
}

.Div02{
	border: 2px outset black;
	background-color:#FFFFFF;

}
	
#upbtn{
	padding : 15px 20px;
	background-color:#c96567;
	color: white;
	font-weight:540;
	font-size:20px;
	box-shadow: 0 4px 8px 0 rgba(2, 2, 2, 2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}

h2{
	color: #314455;
}

h1{
	text-align:center;
	color:#314455 ;
	text-shadow: 3px 3px 3px #C96567;
}

	
</style>

<center>
	
<?php
	require'Config.php';
	function update()
	{
		global $con;
		$sql = "SELECT * FROM vehicle WHERE Status = 'A' ";
		$result = $con->query($sql); //executing the database results//
		
		
		if($result -> num_rows>0)
		{
			//read data
			echo"<table border = 1 id = 'table'>";
			echo"<th>VehicleID</th><th>Type</th><th>Brand_Name</th><th>Cost_per_km</th><th>status</th>";
		
		while($row = $result->fetch_assoc())
		{
			echo"<tr>";
			echo"<td>".$row['VehicleID']."</td>";
			echo"<td>".$row['Type']."</td>";
			echo"<td>".$row['Brand_Name']."</td>";
			echo"<td>".$row['Cost_per_km']."</td>";
			echo"<td>".$row['Status']."</td>";
			echo"</tr>";
		}
			echo"</table>";
		}
			else
		{
			echo"<Script>alert('No any data ')</script>";
	}
	// $con -> close();
}
?>
</center>

</head>
<body>

		<!-- add a horizontal menu  -->
		
		<div class="topnav">
		
		<div class="logo">
			<p><strong>ApeX</strong></p>
		</div>		
		
			<a href="Home.html">Home</a>
			<a href="Service.html">Service</a>
			<a href="catalogue.html">Catalogue</a>
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

		<div class = "Div01">
		<div class = "Div02">

		<h1><center>Update vehicles</center></h1>
		
		</div>
		
		
		<br>
		<hr>
		<h2>Vehicle Details</h2>
		

		<br><br>
		
		<form method = "POST" action ="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<button name ="upbtn" id ="upbtn">Display Available Vehicles </button>
		</form>
		<br>
		<br>
<center>
<?php
	if(isset($_POST["upbtn"]))
	{
		update();
	}

?>

</center>
<br><br><br><br>





<!--refuring to the youtube video--->
<script>
	var table = document.getElementById('table'),rIndex;
	
	for(var i = 0 ; i < table.rows.length; i++)
	{
		table.rows[i].onclick =function()
		{
			rIndex = this.rowIndex;

			document.getElementById("VID_01").value = this.cells[0].innerHTML;
			document.getElementById("STS_01").value = this.cells[1].innerHTML;

		};
	}

</script>




<form method = "post" active = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> <!--------------------adding the labels------------------------------------------------>

<div class= "tablediv">
Vehicle ID :&nbsp &nbsp &nbsp &nbsp &nbsp <input type = "text" name = "VID" id = "VID_01" readonly ><br><br></label>
Status : &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <input type name = "date" id = "STS_01" readonly ><br><br></label>


<input type = "submit" value = "Update" name = "add" id = "upbtn" onclick = "myfunc1();">
</div> <br>

</form>


<!-----refuring to the youtube video-------------->
<script>
function myfunc1()
{
	var result = "<?php UpdateData($VID); ?>";
	document.write(result);
}
</script>

		<h2><center>Rented Vehicles</center></h2>
		<table border="2"  align ="center">
			<tr>
			  <th>VehicleID</th>
			  <th>BookingID</th>
			  <th>Pickup_Date</th>
			  <th>Return_Date</th>

			</tr>

		
<?php
			
			
			//$sql = "SELECT * from has " ;
			
		$sqluser = "SELECT * FROM has ";		
		$result = $con->query($sqluser);
        $rows = $result->num_rows;
	
			
			if($result -> num_rows > 0 )
			{
				while ($rows = $result -> fetch_assoc())
				{
			
					echo "<tr>" ;
					echo "<td>" . $rows["VehicleID"]."</td>" ;
					echo "<td>" . $rows["BookingID"]."</td>" ;
					echo "<td>" . $rows["pickup_Date"]."</td>" ;
					echo "<td>" . $rows["return_Date"]."</td>" ;

					echo "<tr>" ;
					
					
				}
			}
		
			echo "</table>"
		
		
?>




<?php
function UpdateData($VID)
{
	//{
	//if(isset($_POST["add"]))
	//$amount1 = $_POST['amount'];
//}

		global $con;
		$sql = "update vehicle set status ='R' where VehicleID ='$VID'";
		if($con->query($sql))
		{
		     echo "<h3>Updated succesfully done <br></h3>";
		}
		else{
		      echo "Error: ".$con->error;
		}
		}


if(isset($_POST["add"]))
{

	$VID = $_POST["VID"];

	if($VID!="")
	{
		UpdateData($VID);
	}
	
}

$con->close();

?>


<br><br>


</div>

	
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
