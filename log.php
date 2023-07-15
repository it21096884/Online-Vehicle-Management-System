<?php
	require 'config.php';
	session_start();
	$un=$_POST["userid"];
	$pw=$_POST["psw"];
	
	// select Query
	$sql ="SELECT * FROM customer where Fname='$un' AND Password='$pw'";
	$result=$con -> query($sql);
	
	if ( $result -> num_rows>0)
	{
		// read data
		while ($row = $result -> fetch_assoc())
		{
			$Fname=$row["Fname"];
			$_SESSION['cid'] =$row["CustomerID"];
			echo $row["CustomerID"];
			header("Location: customerprofile.php");
		}
		
	}
	else
	{
		
		$sql ="SELECT * FROM employee where Fname='$un' AND Password='$pw'";
		$result=$con -> query($sql);
		if ( $result -> num_rows>0)
		{
			// read data
			while ($row = $result -> fetch_assoc())
			{
				$Fname=$row["Fname"];
				$_SESSION['eid'] =$row["EmployeeID"];
				echo $row["EmployeeID"];
				header("Location: Adminprofile.php");
			}
		}
		else
		{
			echo "no maching records";
		}
	}

	$con-> close();

?>
