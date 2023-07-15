<!DOCTYPE html>
<html>
	<head>
	<!-- add a title (a)-->
	<title> Online vehicle reservation </title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		<link rel="stylesheet" href="styles1/style.css">
		<link rel="stylesheet" href="styles1/login.css">
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
				<a href="signup.php">SIGN IN</a>
				<a class="active" href="login.php">LOGIN</a>
			</div>
		
		</div>
		<center><br>
		<div class="maindiv">
			<form action="log.php" method="post">
		
				<lable for ="userid" ><b> User Name </b></label><br>
				<input type = "text"  id = "userid" placeholder="Enter User Name" name="userid"required><br><br>
				
				
				<label for="psw"> <b> Password </b></label><br>
				<input type="password" id="pwd" placeholder="Enter Password" name="psw" required><br><br>
				
				
				<a href = "Forgetpwd.html" > Forget password </a><br><br><br>	
		
				<input type= "submit" value="Login" class="button"><br>
				<!--input type="submit"  class="button" style="background-color: #C96567" id = "btn_submit" value ="Login" disabled ><br><br-->
			</form>
			
			<p class="link">Don't have an account? <a href="signup.php">Registration Now</a></p>
		
	
			<p style="text-align:center"> <h3> Sign in with you social network </h3></p>
			
			<div id="btncolor">
			<button style="background-color: #000080" class = "bot" > <a href = "https://www.facebook.com/"> lOGIN IN WITH FACEBOOK </a></button><br><br>
			<button style="background-color: #008CBA" class = "bot" > <a href = "https://twitter.com/login">LOGIN IN WITH TWITTER </a></button><br><br>
			<button style="background-color: #f44336" class = "bot" > <a href = "https://accounts.google.com"> LOGIN IN WITH GOOGLE </a></button><br><br>
			</div>
			
			</div>
		</center>
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
			</div> <!-- socialmedia-->
			
			
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
		