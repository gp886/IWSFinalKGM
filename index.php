<?php
echo
'<html>
<head>
	<title>login</title>
	<link rel="stylesheet" href="css/login.css">
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css">
		<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    	<script type="text/javascript" src="js/bootstrap.min.js"></script>
       	<link href="https://fonts.googleapis.com/css?family=Atomic+Age" rel="stylesheet">
</head>

<body>
	<div class="container">
		<nav id="heading" class="navbar navbar-default">
			<div class="container-fluid" style="display:flex;">		
				<h1 id="website_name"><a  href="#" >Articlulate</a></h1>
			</div>
		</nav>

		<section id="main_section" class="main">
			<section id="topic_grid" class="grid_display">
			<div id="topic_1" class="topic"> <img class="imgBox" src="images/International.jpg"></img></div>
			<div id="topic_2" class="topic"> <img class="imgBox" src="images/India.jpg"></img></div>
			<div id="topic_3" class="topic"> <img class="imgBox" src="images/Business.jpg"></img></div>
			<div id="topic_4" class="topic"> <img class="imgBox" src="images/entertainment.jpg"></img></div>
			<div id="topic_5" class="topic"> <img class="imgBox" src="images/sports.jpg"></img></div>
			<div id="topic_6" class="topic"> <img class="imgBox" src="images/tech.jpg"></img></div>
			</section>	
			
			<div>
				<button id="login_button" data-toggle="modal" data-target="#login_signup">Login / Signup</button>

				<div id="login_signup" class="modal fade" role="dialog">
				  <div id="dialog_box" class="modal-dialog">
				    <div id="box" style="background-color:#EEE" class="modal-content">
				        <div id="box_body"  class="modal-body">
					       	<div id="login">
								<h3>Login</h3>
								<form id="login_form" action="/action_page.php">
								  
									<label id="userID_label_login">User ID</label>
									<input id="userID_input_login" type="text" placeholder="Enter Username" name="uname" required>
									<br>
									<label id="password_label_login" >Password</label>
									<input  id="password_input_login" type="password" placeholder="Enter Password" name="psw" required>
									<br><br>
									<button id="login_btn"  type="submit" name="login_btn" >Login</button>
									
								  
								</form>  
							</div> 
							<div id="signup" style="border-right-style: dotted;">
								<h3>Signup</h3>
								<form id="signup_form" action="/action_page.php">
								
									<label id="name_label_signup" >Name</label>
									<input id="name_input_signup" type="text" placeholder="Enter Name" name="name_signup">
									<br>
									<label id="userID_label_signup"  >User ID</label>
									<input type="text" placeholder="Enter UserID" name="user_signup">
									<br>
									<label id="pass_label_signup" >Password</label>
									<input id="pass_input_signup" type="password" placeholder="Enter Password" name="psw_sign">
									<br>
									<label id="passcon_label_signup" >Confirm Password</label>
									<input id="passcon_input_signup" type="password" placeholder="Confirm Password" name="psw-repeat_sign">
									<br>
									<label id="email_label_signup" >Email ID</label>
									<input id="email_input_signup" type="email" placeholder="Enter Email" name="email_sign">
									<br>
									<label id="interest_label_signup" >Interests</label>
									<select id="interest_input_signup" name="Interests" >
										<option></option>
										<option>Business</option>
										<option>Entertainment</option>
										<option>India</option>
										<option>International</option>
										<option>Science</option>
										<option>Technology</option>
										<option>Travel</option>
									</select>
									<br>

									<div class="clearfix">
									  <button type="button" class="cancelbtn">Cancel</button>
									  <button type="submit" class="signupbtn">Sign Up</button>
									</div>
								
								</form>  
							</div> 
				      	</div>
				      	<div class="modal-footer">
				      	   
				      	</div>
    				</div>
    			</div>
    		</div>

			</div>
		</section>
	</div>


</body>
</html>'
?>