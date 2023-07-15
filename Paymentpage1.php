
<!-------------------------------order cancerlation page------------------------------------------------------------>

<!DOCTYPE html>
<html>
	<head>
		<!-- add a title (a)-->
		<title>Order Cancerlation - ApeX</title>
		
		<!--add styleSheet-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		<link rel="stylesheet" href="styles1/payment5.css">
		<!--<script src="js1/script1.js"> </script>-->
		
		
		 <meta charset = "UTF-8">
	
	<meta name ="viewport" content = "width = device-width , intial-scale = 1.0">
	
	 <style>
	    
	  table tr:not(:first-child){
	    cursor:pointer;transition: all .25s ease-in-out;
	  }
	  
	  table tr:not(:first-child):hover{background-color :#ddd;}
		 
}
	
	
	</style>
		
	</head>
	
	<body>
		
		
		<!-- add a horizontal menu (e) -->
		
		<div class="topnav">
		
		<!--<img class="logo" src="images1/logo.png" width="200px" height="60px">-->
		
		
		<div class="logo">
		
		<p><strong>ApeX</strong></p>
		
		</div>
		
	
		
			<a href="Home.html">Home</a>
			<a href="Service.html" >Service</a>
			<a href="Catalogue.html" >Catalogue</a>
			<a href="Aboutus.html">About us</a>
			<a href="contactus.html">Contact us</a>
			<a href="FAQ.html">FAQ</a>
			<a href="T&C.html"> T&C </a>
			<a href="Feedback.html">Feedback</a>
			
			<div class="topnav-right">
			<a href="signup.php">SIGN IN</a>
			<a href="login.php">LOGIN</a>
			</div>
		
		
		</div>
	<br>
		
   <!-----------------------------------------------------------body------------------------------------------------------------------->
		<?php
		   require'Configeration.php';
		      
			  function order()
   {
	   global $con;
	   $sql = "SELECT * FROM payment WHERE Status = 'Pending'";
	   $result = $con->query($sql); //executing the database results//
	   
	   if($result -> num_rows>0)
	   {
		   //read data
		   echo"<table border = 1 id = 'table'>";
		   echo"<th>Booking ID</th><th>Payment Amount</th><th>Date of the Payment</th><th>Method of payment supposse to be done</th>";
		   
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
		?>
		
		
		
		
		<html>  
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
	
	<!----------------------------------------------------------------->
 </head>
  <body>
   
    <div class = "myDiv">
   
		<div class = "maindiv">
	       <h1 id = "mainhead">Order Cancerlation</h1><br>
	    </div>
		 <br><br>
		 <h2 id ="din">Select the  Booking to Cancel</h2><br><br>
		 
	   <form method = "POST" action ="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	      <button name ="Confirmedbtn" id = "cbtn">Display Payment Pending Orders</button>
	   </form>
	<br>
  
        
		  <?php 
		  
		   if(isset($_POST["Confirmedbtn"]))
		   {
			 order();
		   }
		  
		   
		   ?>
		   <br><br><br><br>
		   
		   
		       <!-----refuring to the youtube video -------------->
			    <script>
		       var table = document.getElementById('table'),rIndex;
			   
			   for(var i = 0 ; i < table.rows.length; i++)
			   {
			      table.rows[i].onclick =function()
				  {
				     rIndex = this.rowIndex;
					 
					 
					 document.getElementById("Bid1").value = this.cells[0].innerHTML;
					 document.getElementById("date1").value = this.cells[2].innerHTML;
					 document.getElementById("meth1").value = this.cells[3].innerHTML;
				 };
			   }
		  </script>
		  
		  		
				<form method = "post" active = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">   <!--------------------adding the labels------------------------------------------------>
				   <div class= "tablediv">
					 Booking ID :&nbsp &nbsp &nbsp &nbsp &nbsp <input type = "text" name = "Bid" id = "Bid1" readonly ><br><br></label>
					 Payment Date : &nbsp &nbsp &nbsp &nbsp <input type name = "date" id = "date1" readonly ><br><br></label>
					 Payment Methode :&nbsp <input type  = "text" name = "meth" id = "meth1" readonly ><br><br>
					 </div> <br>
				   <!------------------------------------------------------------------------------------>
				   <label >Reason for canceling order :<br></label><br>
				   <textarea class = "area"  ></textarea><br><br><br>
					<input type = "submit" value = "Cancel the order" name = "cancel" id = "cancel">
				</form>
				
				
				<!----DELETING THE DATA FROM THE DATA BASE to cancel the order------>
				<?php
				function deleteData($Bid){
					global $con;
					$sql = "delete from payment where BookingID='$Bid'";
					if($con->query($sql)){
					echo "Order cancelled succesfully <br/><br>";
					  }
					else{
					echo "Error: ".$con->error;
					 }
				}
				
				if(isset($_POST["cancel"]))
				{ $Bid=$_POST["Bid"];
					if($Bid!=""){
								deleteData($Bid);
								order(); 
				            }
				}
				    $con->close();
				?>
				<br><br>
	 <button id = "view" ><a id = "Ap1" href="Home.html">Back</a></button>	<br>
	 </div><br>
	<!----------------------footer-------------------------------------------->
	
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
		
		
	</head>
	</html>