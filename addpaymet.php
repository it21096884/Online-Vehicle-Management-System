
<!-------------------------------order cancerlation page------------------------------------------------------------>

<!DOCTYPE html>
<html>
	<head>
		<!-- add a title (a)-->
		<title> Payment Page - ApeX</title>
		
		<!--add styleSheet-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		<link rel="stylesheet" href="styles1/payment5.css">
		<!--<script src="js1/script1.js"> </script>-->
		
		
		 <meta charset = "UTF-8">
	
	<meta name ="viewport" content = "width = device-width , intial-scale = 1.0">
	
	
	  <!-----refuring to the youtube video disabple the click option of the table header-------------->
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
		
		
		
		
		<div class="logo">
		
		<p><strong>ApeX</strong></p>
		
		</div>
		
	
		
			<a href="Home.html">Home</a>
			<a href="Service.html" >Service</a>
			<a href="Catalogue.html" >Catalogue</a>
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
		   echo"<th>Booking ID</th><th>Amount Payment</th><th>Date of the Payment</th><th>Method of payment supposse to be done</th>";
		   
		   while($row = $result->fetch_assoc())
		   {
			   echo"<tr>";
			   echo"<td>".$row['BookingID']."</td>";
			 //  echo"<td>".$row['PaymentID']."</td>";
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
		
		
	
	
	<!----------------------------------------------------------------->
 </head>
  <body>
   
    <div class = "myDiv">
   
		<div class = "maindiv">
	       <h1 id = "mainhead">Payment Page</h1><br>
	    </div>
		 <br><br>
		
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
		   
		     <!-----refuring to the youtube video--------------------------------------->
		     
			    <script>
		       var table = document.getElementById('table'),rIndex;
			   
			   for(var i = 0 ; i < table.rows.length; i++)
			   {
			      table.rows[i].onclick =function()
				  {
				     rIndex = this.rowIndex;
					 
					 
					 document.getElementById("Bid1").value = this.cells[0].innerHTML;
					// document.getElementById("Pid1").value = this.cells[1].innerHTML;
					 document.getElementById("amount").value = this.cells[1].innerHTML;
					 document.getElementById("date1").value = this.cells[2].innerHTML;
					 document.getElementById("meth1").value = this.cells[3].innerHTML;
				 };
			   }
			   
			   
		  </script>
		  
		   	   
		   <div class = "myDiv2">
			    <br>
			
			  <label id = "pkm" >Price per Km : Rs. 30.00</label><br><br><br>
			  <label id = "fst"  >Enter the Km : </label>
			  <input type = "text" id = "textkm" require >
			  <button id = "enter" onclick = "calculate();">Enter</button><br><br><br>
			  <form method = "post" action = "">
			  <label >Sub Total is : Rs. </label>
			  <input type = "text" id ="textkm1" name = "textkm1" require readonly >
			  </form>
			  
			
			  
			  
			
			 </div><br><br>
		  
		  
		  	  
		  		
				<form method = "post" active = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">   <!--------------------adding the labels------------------------------------------------>
				   <div class= "tablediv">
					 Booking ID :&nbsp &nbsp &nbsp &nbsp &nbsp <input type = "text" name = "Bid" id = "Bid1" readonly ><br><br></label>
					
					 Payment Date : &nbsp &nbsp &nbsp &nbsp <input type name = "date" id = "date1" readonly ><br><br></label>
					 Payment Method :&nbsp <input type  = "text" name = "meth" id = "meth1" readonly ><br><br>
					 &nbsp &nbsp &nbsp &nbsp &nbsp Enter the Sub Total : &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <input type = "text" name = "amount" id = "amount"  ><br><br></label>
					  
					  <input type = "submit" value = "Pay" name = "add" id = "cancel" onclick = "myfunc1();">
					 </div> <br>
				   <!------------------------------------------------------------------------------------>
				 
					
				</form>
				
				
				
				  <!-----refuring to the youtube video-------------->
				    <script>
						
						    function myfunc1()
							{
								var result = "<?php UpdateData($Bid); ?>";
								
								document.write(result);
							}
						 
	                </script>
				
				<?php
				
						function UpdateData($Bid)
						
						{
							
							 if(isset($_POST["add"]))
							 {
							     $amount1 = $_POST['amount'];
							 }
							
							
									global $con;
									$sql = "update payment set status = 'paid', Payment_Amount ='$amount1' where BookingID ='$Bid'";
									if($con->query($sql))
									{
										echo "<h3>Your Payment is succesfully done <br></h3>";
										  }
										else{
										echo "Error: ".$con->error;
									 }
								    }
									
									
									
									
								
								    if(isset($_POST["add"]))
								{  
							       
		                              
			 
							
							               $Bid=$_POST["Bid"];
										   if($Bid!="")
										   {
											  UpdateData($Bid);
														
										    }
												else
												{
												  echo"<h2>Please select the order from the table !!</h2>";
												}
						}
						
							$con->close();
						?>
				<br><br>
				
				
				
				
				
				
				
	        <script>
	  
				
				function calculate()
				{
					var a = document.getElementById("textkm").value;
					var X = 30.00;
					
					var result = a*X;
					
					
					//  refuring to the youtube video
					textkm1.value = result;
					
					
				}
				
				
				
	        </script>
			
			
		            <button id = "view" ><a id = "Ap" href="PaymentSuccess.php"> View Confirmed Orders</a></button>	<br><br>
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