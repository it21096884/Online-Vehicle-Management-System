<?php
	require 'config.php';
	
	// Taking all 5 values from the form data(input)
	$Fname = $_POST["fname"];
	$Lname = $_POST["lname"];
	$DOB = $_POST["dob"];
	$Address=$_POST["add"];
	$Gender = $_POST["gender"];
	$phone = $_POST["mob"];
	$Email= $_POST["email"];
	$Password= $_POST["pass"];
	$role=$_POST["selectrole"];
	
	$Type=$_POST["selecttype"];
	
	echo $role;
	echo $Type;
	echo $Fname;
	
	if($role=='Customer')
	{
		
		$sql = "INSERT INTO customer(CustomerID,Fname,Lname,DOB,Address,Gender,phone,Email,Password)
		VALUES ('','$Fname','$Lname','$DOB','$Address','$Gender','$phone','$Email','$Password')";
		
		if ($con->query($sql) == TRUE) 
		{
			echo '<script>alert("Connected successfuly")</script>';
			header("Location: login.php");
		} 
		else 
		{
			echo "Error: " . $sql . "<br>" . $con->error;
		}
	}
	else
	{
		$sql = "INSERT INTO employee(EmployeeID,Type,Fname,Lname,DOB,Address,Gender,phone,Email,Password)
		VALUES ('','$Type', '$Fname','$Lname','$DOB','$Address','$Gender','$phone','$Email','$Password')";
		
		if ($con->query($sql) == TRUE) 
		{
			echo '<script>alert("Connected successfuly")</script>';
			header("Location: login.php");
		} 
		else 
		{
			echo "Error: " . $sql . "<br>" . $con->error;
		}
	}
		$con->close();
	
	/*$sql = "INSERT INTO employee(Type,Fname,Lname,DOB,Address,Gender,phone,Email,Password)
	VALUES ('$Type', '$Fname','$Lname','$DOB','$Address','$Gender','$phone','$Email','$Password')";

	if ($con->query($sql) == TRUE) 
	{
		echo '<script>alert("Connected successfuly")</script>';
	} 
	else 
	{
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	$Type=$row["Type"];
	$Fname=$row["Fname"];
	$Lname=$row["Lname"];
	$DOB=$row["DOB"];
	$Address=$row["Address"];
	$Gender=$row["Gender"];
	$phone=$row["phone"];
	$Email=$row["Email"];
	
	
	// Taking all 5 values from the form data(input)
		$Fname = $_POST["fname"];
		$Lname = $_POST["lname"];
		$DOB = $_POST["dob"];
		$Address=$_POST["add"];
		$Gender = $_POST["gender"];
		$phone = $_POST["mob"];
		$Email= $_POST["email"];
		$Password= $_POST["pass"];
		
		// Performing insert query execution
	
	$sql = "INSERT INTO customer(CustomerID,Fname,Lname,DOB,Address,Gender,phone,Email,Password)
	VALUES ('','$Fname','$Lname','$DOB','$Address','$Gender','$phone','$Email','$Password')";

	if ($con->query($sql) == TRUE) {
		echo "<b>New record created successfully</b>";
	} else {
	echo "Error: " . $sql . "<br>" . $conn->error;Customer
	}
	/*$Fname=$row["Fname"];
	$Lname=$row["Lname"];
	$DOB=$row["DOB"];
	$Address=$row["Address"];
	$Gender=$row["gender"];
	$phone=$row["phone"];
	$Email=$row["Email"];
    session_start();
    if(!isset($_SESSION["username"])) {
        header("Location: login.php");
        exit();
    }*/
?>
