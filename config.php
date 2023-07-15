<?php
	
	$con = new mysqli("localhost","root","","Apex");
	
	if($con -> connect_error)
	{
		die("connection failed " .$con-> connect_error) ;
		
	}
	else
	{
		//echo"<script> alert('connected successfully')</script>" ;
	}


?>