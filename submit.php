
<?php


require 'config.php';

			session_start();
			$id=$_SESSION['cid'];
			
		

	
$pickup_Date=$_POST["pickup_Date"];
$return_Date=$_POST["return_Date"];
$drop_location=$_POST["drop_location"];
$VehicleID=$_POST["VehicleID"];
//$Payment_Methode=$_POST["Payment_Methode"];




$CustomerID="$id";
$sql="INSERT INTO booking(BookingID , pickup_Date,return_Date,drop_location,CustomerID , VehicleID)
VALUES('', '$pickup_Date', '$return_Date', '$drop_location' ,'$CustomerID' ,'$VehicleID')";

if ($con->query($sql) == TRUE)
{
echo '<script>alert("Connected successfuly")</script>';
header("Location: Booking.php");
}
else
{
echo "Error: " . $sql . "<br>" . $con->error;
}


$con->close();

?>


