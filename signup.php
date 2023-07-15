
<!--new2-->
<!DOCTYPE html>
<html>
	<head>
	<!-- add a title (a)-->
	<title> Online vehicle reservation </title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		<link rel="stylesheet" href="styles1/style.css">
		<link rel="stylesheet" href="styles1/signup.css">
	</head>
	
	<body>
		<!-- add a horizontal menu (e) -->
			<body>
	<!-- add a horizontal menu (e) -->
		
		<div class="topnav">
			<div class="logo">
				<p><strong>ApeX</strong></p>
			</div>
			<a href="Home.html">Home</a>
			<a href="Service.html">Service</a>
			<a href="Catalogue.html" >Catalogue</a>
			<a href="Aboutus.html">About us</a>
			<a href="contactus.html">Contact us</a>
			<a href="FAQ.html">FAQ</a>
			<a href="T&C.html">T&C</a>
			<a href="Feedback.html">Feedback</a>
			
			<div class="topnav-right">
				<a class="active" href="signup.php">SIGN IN</a>
				<a href="login.php">LOGIN</a>
			</div>
		
		
		</div>
		
		
	<!-- add form --  id="formnijustify" -->
	<fieldset style= 'font-family: Arial'>
	<div id="imghalf">

		<div id="div1">
			
				<div class="sign_formsi"  >
				<h2 style= "color:#C96567;">  SIGN IN </h2>
				</div>
				
	
				
				<div class="fromsign">
				<form id="formnijustify"  action="si.php" method="post" >
				
				<div class="namesign">
				<br>
				
				<b><label for ="selectrole"> Select your role </label>
				<select name="selectrole" id="selectrole">
					<option value="Employee">Employee</option>
					<option value="Customer">Customer</option>
				</select></b>
				<br><br>
				
				<fieldset>
				<b> Additional For Emplyoees</b><br>
				<b><label for ="selecttype"> Select your Type</label>
				<select name="selecttype" id="selecttype">
					<option value="Admin"> Admin</option>
					<option value="Driver">Driver</option>
					<option value="Manager">Manager</option>
				</select></b>	
				</fieldset>
				
				<br><br>
				
				<!--lable for ="userid"> <b>User ID</b> </label>
				<input type = "text" id = "userid" align="left" > <br><br-->
				&nbsp&nbsp&nbsp&nbsp
				<lable for ="firstname"> <b> First Name </b></label>
				&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
				&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
				&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
				
				<input type = "text" name="fname" id = "firstname" align="left" required> <br><br>
				&nbsp&nbsp&nbsp&nbsp
				<lable for ="lastname">  <b>Last Name </b></label>
				&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
				&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
				&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
				<input type = "text" name="lname" id = "lastname" align="left" required> <br><br><br>
				&nbsp&nbsp&nbsp&nbsp
				<label for ="gender">  <b>Gender </b></lable>
				&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
				&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
				&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
				&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
				&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
				&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
				<input type = "radio" name="gender"  required> Male 
				<input type = "radio" name="gender"  required> Female <br><br><br>
				&nbsp&nbsp&nbsp&nbsp
				<lable for ="mobile">  <b>Mobile Number </b></label>
				&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
				&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
				
				<input type = "text" name="mob" id = "mobile" pattern="[0-9]{10}" placeholder="071xxxxxxx"required> <br><br><br>
				&nbsp&nbsp&nbsp&nbsp
				<lable for ="email"><b> Email </b></label>
				&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
				&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
				&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
				&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
				<input type = "text" name="email" id = "email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}" placeholder="abc@gmail.com"required> <br><br><br>
				&nbsp&nbsp&nbsp&nbsp
				<label for ="address"><b> Address </b></label> 
				&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
				&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
				&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
				&nbsp&nbsp
				<textarea id="address" name="add" rows="4" cols="75" required> </textarea><br><br><br>
				&nbsp&nbsp&nbsp&nbsp
				<label for ="dob" ><b> Date of Birth  </b></label>
				&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
				&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
				&nbsp&nbsp&nbsp&nbsp&nbsp
				<input type ="date" name="dob" id="dob" required><br><br><br>
				&nbsp&nbsp&nbsp&nbsp
				<label for="password"><b>Password  </b></label>
				&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
				&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
				&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
				&nbsp
				<input type="password" name="pass" id="pwd"  pattern="(?=.*[A-Z])(?=.*[a-z])(?=.*\d).{5,10}" required> <br><br><br>
				&nbsp&nbsp&nbsp&nbsp
				<label for="confirmpassword"><b>Confirm Password </b></label>
				&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
				&nbsp&nbsp&nbsp&nbsp&nbsp
				
				<input type="password" name="cpass" id="c_pwd" required><br><br>
				&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
				&nbsp&nbsp&nbsp&nbsp&nbsp
				
				<input type="checkbox" id="chk_accept" onclick="enableButton();" required>
				&nbsp&nbsp&nbsp&nbsp
				<label for ="policy"> Accept privacy policy and terms</label><br><br>
				
				<center><input type= "submit" value="Submit" class="button"><br></center>
				
				<!--input type="submit" class="button" id="btn_submit" value ="Submit" disabled pattern="(?=.*[A-Z])(?=.*[a-z])(?=.*\d).{5,10}"><br><br-->
			</div>
			
			</form>
			</div>
			

		</div>

	</div>
	</fieldset>
	
	
		
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
		
		
	</div>
	</body>
</html>