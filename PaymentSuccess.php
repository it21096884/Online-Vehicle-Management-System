<!------------------------------------payment confirmed order details -------------------------------------------->
<!DOCTYPE html>
<html>
	<head>
		<!-- add a title (a)-->
		<title>Payment Confirmed Orders - ApeX</title>
		
		<!--add styleSheet-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		<link rel="stylesheet" href="styles1/payment5.css">
		<!--<script src="js1/script1.js"> </script>-->
		
	</head>
	
	<body>
		
		
		<!-- add a horizontal menu (e) -->
		
		<div class="topnav">
		
		<!--<img class="logo" src="images1/logo.png" width="200px" height="60px">-->
		
		
		<div class="logo">
		
		<p><strong>ApeX</strong></p>
		
		</div>
		
	
		
			<a href="Home.html">Home</a>
			<a href="Service.html">Service</a>
			<a href="Catalogue.html" >Catalogue</a>
			<a href="Aboutus.html">About us</a>
			<a href="contactus.html">Contact us</a>
			<a href="FAQ.html">FAQ </a>
			<a href="T&C.html">T&C </a>
			<a href="Feedback.html">Feedback</a>
			
			<div class="topnav-right">
			<a href="signup.php">SIGN IN</a>
			<a href="login.php">LOGIN</a>
			</div>
		
		
		</div>
	<br><br><br><br><br><br><br><br>



			<?php
			 require'Configeration.php'; ?>

 
  <head>
     <link rel = "stylesheet" href = "styles1/payment5.css">
	 <script src = "js1/myscript3.js"></script>
	 
	 <!------table onclick---------------->
	 <meta charset = "UTF-8">
	
	<meta name ="viewport" content = "width = device-width , intial-scale = 1.0">
	
	 <style>
	    <!-----refuring to the youtube video disabple the click option of the table header-------------->
	  table tr:not(:first-child){
	    cursor:pointer;transition: all .25s ease-in-out;
	  }
	  
	  table tr:not(:first-child):hover{background-color :#ddd;}
		 
}
	
	
	</style>
	
	<!---------------------------------------------------------------------------------------------------------------------------------------->
 </head>
 <!-----------------------------------------------------body------------------------------------------------------>
  <body>
   
    <div class = "myDiv1">
   
		<div class = "maindiv1">
	       <h3 id ="mainhead1">PAYMENT CONFIRMED ORDER DETAILS</h3><br>
	    </div>
		 <br><br>
		 
	 
			
		   <?php 
			   function dispaly1()
			   {
				   global $con;
				   $sql = "SELECT * FROM payment WHERE Status = 'Paid' ";
				   $result = $con->query($sql); //executing the database results//
					   
					   if($result -> num_rows>0)
					   {
							   //read data
							   echo"<table border = 1 id = 'table1'>";
							   echo"<th>Booking ID</th><th>Amount Payment</th><th>Date of the Payment</th><th>Method of payment suppose to be done</th>";
							   
							   while($row = $result->fetch_assoc())
							   {
								   echo"<tr>";
								   echo"<td>".$row['BookingID']."</td>";
								   
								   echo"<td>".$row['Payment_Amount']."</td>";
								   echo"<td>".$row['Payment_Date']."</td>";
								   echo"<td>".$row['Payment_Methode']."</td>";
								   echo"</tr>";
						        }
						   
						   echo"</table>";
					   }
					   else
					   {
						      echo"<Script>alert('No any data !')</script>";
					   }
					       // $con -> close();
				   
			   }
			   
				dispaly1();
			   ?>
			
		   <br><br>
		   
			   
			   <!-------------------------adding the read data table--------refurring to the u tube video ----------------------------------------->
			   
			   
			   
			    <script>
		       var table = document.getElementById('table1'),rIndex;
			   
			   for(var i = 0 ; i < table.rows.length; i++)
			   {
			      table.rows[i].onclick =function()
				 {
				     rIndex = this.rowIndex;
					 
					  document.getElementById("Bid").value = this.cells[0].innerHTML;
					  document.getElementById("amount").value = this.cells[1].innerHTML;
					  document.getElementById("date").value = this.cells[2].innerHTML;
					  document.getElementById("meth").value = this.cells[3].innerHTML;
				  };
			   }
		  </script>
		  
		 
		  <button id = "view2" ><a id = "Ap2" href="Home.html">Exit</a></button><br>
		  </div>
		  <BR><BR>
		
  </body>
   
 </html>	
 
 
 
 
 
 <br><br><br><br><br><br><br><br><br><br>
 
  
  <!--footer--->
  
  	
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