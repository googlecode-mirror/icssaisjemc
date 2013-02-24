<!DOCTYPE html>
<html>
<head>
<script src="js/jquery.min.js"></script>
<script src="js/jquery.infieldlabel.min.js" type="text/javascript" charset="utf-8"></script>
<script src="js/jquery-1.8.3.js"></script>
<script src="js/jquery-ui.js"></script>  
<script> 
$(document).ready(function(){
	$("#register").hide();
	$("#login").hide(); 
	$("#studentRegister").hide(); 		
	
  $(function() {
    $( "#tabs" ).tabs();
	$("#tabs-1").hide(); 
	$("#tabs-2").hide(); 
	$("#tabs-3").hide(); 
  });
	
  $("#studentTabButton").click(function(){
	$("#tabs-1").show(); 
  });
  
  $("#signUpShow").click(function(){
    $("#register").fadeIn();
	$('#logo').fadeTo('fast',0.1);
	$('#buttonsDiv').fadeTo('fast',0.1);
  });
  
  $("#register").click(function(){
    $("#register").fadeOut();
	$('#logo').fadeTo('fast',1);
	$('#buttonsDiv').fadeTo('fast',1);
  });
  
  $("#studentTab").click(function(){
    $("#studentRegister").fadeIn();
  });
  
  $("#loginShow").click(function(){
    $("#login").slideToggle();
  });
});
</script>

<style type="text/css"> 	
#yes1{
	background-color:#003471;
	height:100%;
	width:100%;
	position:relative;
}

#buttonsDiv{
	-moz-border-radius:10px;  /* for Firefox */
	-webkit-border-radius:10px; /* for Webkit-Browsers */
	border-radius:10px; /* regular */
	padding:5px;
	margin-top:7%;
	width:500px;	
	margin-right:auto;
	margin-left:auto;
}


#signUpDiv{
	-moz-border-radius-bottomright: 10px;
    -webkit-border-bottom-right-radius: 10px;
	-moz-border-radius-bottomleft: 10px;
    -webkit-border-bottom-left-radius: 10px;
	background-color:#ffffff;
	padding:10px;
}

#loginDiv{
	-moz-border-radius-topright: 10px;
    -webkit-border-top-right-radius: 10px;
	-moz-border-radius-topleft: 10px;
    -webkit-border-top-left-radius: 10px;
	background-color:#ffffff;
	padding:10px;
}

#login{
	background-color:#ffffff;
}

img {
	border:1px;
}

#login input{
	-moz-border-radius: 5px;
	border-radius: 5px;
	font-family:Comic Sans, Comic Sans MS, cursive;
	font-size:18px;
}

#logo{
	width:879px;
	margin-left: auto ;
	margin-right: auto ;
	margin-top:7%;
}

#register{
	background-color:#ffffff;		
	margin-top:8%;
	margin-left:10%;
	height:70%;
	width:80%;
	z-index:1;
	position:fixed;
	-webkit-border-radius:7px;
	-moz-border-radius:7px;
}

#tabs ul{
	margin:1;
	padding:1;
	list-style-type:none;
}
	
#tabs ul li{
	display:inline;
}

#register input{
	background-color:#fffff;
	border:1px solid #dbdbdb;
	padding:5px;
	-webkit-border-radius:7px;
	-moz-border-radius:7px;
}

</style>
</head>
<body bgcolor="#003471">

<div id="yes1">
	<div id="register">
		<div id="tabs">
			<ul>
				<li><a href="#tabs-1"><img src="images/studentButton.png" id="studentTabButton"/></a></li>
				<li><a href="#tabs-2"><img src="images/instructorButton.png" id="instructorTabButton"/></a></li>
				<li><a href="#tabs-3"><img src="images/encoderButton.png" id="encoderTabButton"/></a></li>
			</ul>
			<div id="tabs-1">
				<table>
					<tr>
						<td><input type="text" name="student_id" placeholder="student no." id="student_id"/></td>
						<td><textarea name="home_address" placeholder="home address" id="home_address"></textarea></td>
						<td><input type="text" name="curriculum" placeholder="curriculum" id="curriculum"></td>
					</tr>
					<tr>
						<td><input type="password" name="password" placeholder="password" id="studentNumber"/></td>
						<td><input type="text" name="home_address_contact" placeholder="home address contact" id="home_address_contact"></td>
						<td><input type="text" name="facebook_url" placeholder="facebook url" id="facebook_url"></td>
					</tr>
					<tr>
						<td><input type="password" name="retype" placeholder="re-type password" id="studentNumber"/></td>
						<td><textarea name="college_address" placeholder="college address" id="college_address"></textarea></td>
						<td><input type="text" name="twitter_url" placeholder="twitter url" id="twitter_url"></td>
					</tr>
					<tr>
						<td><input type="text" name="fname" placeholder="first name" id="fname"/></td>
						<td><input type="text" name="college_address_contact" placeholder="college address contact" id="college_address_contact"></td>
						<td><input type="text" name="youtube_url" placeholder="youtube url" id="youtube_url"></td>
					</tr>
						<td><input type="text" name="minit" placeholder="MI" id="minit" size="1"/></td>
						<td><input type="text" name="student_mobile_no" placeholder="contact no." id="student_mobile_no"></td>
					<tr>
						<td><input type="text" name="lname" placeholder="last name" id="lname"/></td>
						<td><input type="text" name="student_mobile_no" placeholder="contact no." id="student_mobile_no"></td>
					</tr>				
				</table>
			</div>
			<div id="tabs-2">
				<table>
					<tr>
						<td><input type="text" name="student_id" placeholder="student no." id="student_id"/></td>
						<td><textarea name="home_address" placeholder="home address" id="home_address"></textarea></td>
						<td><input type="text" name="curriculum" placeholder="curriculum" id="curriculum"></td>
					</tr>
					<tr>
						<td><input type="password" name="password" placeholder="password" id="studentNumber"/></td>
						<td><input type="text" name="home_address_contact" placeholder="home address contact" id="home_address_contact"></td>
						<td><input type="text" name="facebook_url" placeholder="facebook url" id="facebook_url"></td>
					</tr>
					<tr>
						<td><input type="password" name="retype" placeholder="re-type password" id="studentNumber"/></td>
						<td><textarea name="college_address" placeholder="college address" id="college_address"></textarea></td>
						<td><input type="text" name="twitter_url" placeholder="twitter url" id="twitter_url"></td>
					</tr>
					<tr>
						<td><input type="text" name="fname" placeholder="first name" id="fname"/></td>
						<td><input type="text" name="college_address_contact" placeholder="college address contact" id="college_address_contact"></td>
						<td><input type="text" name="youtube_url" placeholder="youtube url" id="youtube_url"></td>
					</tr>
						<td><input type="text" name="minit" placeholder="MI" id="minit" size="1"/></td>
						<td><input type="text" name="student_mobile_no" placeholder="contact no." id="student_mobile_no"></td>
					<tr>
						<td><input type="text" name="lname" placeholder="last name" id="lname"/></td>
						<td><input type="text" name="student_mobile_no" placeholder="contact no." id="student_mobile_no"></td>
					</tr>				
				</table>
			</div>
			<div id="tabs-3">
				<table>
					<tr>
						<td><input type="text" name="student_id" placeholder="student no." id="student_id"/></td>
						<td><textarea name="home_address" placeholder="home address" id="home_address"></textarea></td>
						<td><input type="text" name="curriculum" placeholder="curriculum" id="curriculum"></td>
					</tr>
					<tr>
						<td><input type="password" name="password" placeholder="password" id="studentNumber"/></td>
						<td><input type="text" name="home_address_contact" placeholder="home address contact" id="home_address_contact"></td>
						<td><input type="text" name="facebook_url" placeholder="facebook url" id="facebook_url"></td>
					</tr>
					<tr>
						<td><input type="password" name="retype" placeholder="re-type password" id="studentNumber"/></td>
						<td><textarea name="college_address" placeholder="college address" id="college_address"></textarea></td>
						<td><input type="text" name="twitter_url" placeholder="twitter url" id="twitter_url"></td>
					</tr>
					<tr>
						<td><input type="text" name="fname" placeholder="first name" id="fname"/></td>
						<td><input type="text" name="college_address_contact" placeholder="college address contact" id="college_address_contact"></td>
						<td><input type="text" name="youtube_url" placeholder="youtube url" id="youtube_url"></td>
					</tr>
						<td><input type="text" name="minit" placeholder="MI" id="minit" size="1"/></td>
						<td><input type="text" name="student_mobile_no" placeholder="contact no." id="student_mobile_no"></td>
					<tr>
						<td><input type="text" name="lname" placeholder="last name" id="lname"/></td>
						<td><input type="text" name="student_mobile_no" placeholder="contact no." id="student_mobile_no"></td>
					</tr>				
				</table>
			</div>
		</div>
	</div>
		<!--		
		<div id="studentRegister">
			<table>
				<tr>
					<td><input type="text" name="student_id" placeholder="student no." id="student_id"/></td>
					<td><textarea name="home_address" placeholder="home address" id="home_address"></textarea></td>
					<td><input type="text" name="curriculum" placeholder="curriculum" id="curriculum"></td>
				</tr>
				<tr>
					<td><input type="password" name="password" placeholder="password" id="studentNumber"/></td>
					<td><input type="text" name="home_address_contact" placeholder="home address contact" id="home_address_contact"></td>
					<td><input type="text" name="facebook_url" placeholder="facebook url" id="facebook_url"></td>
				</tr>
				<tr>
					<td><input type="password" name="retype" placeholder="re-type password" id="studentNumber"/></td>
					<td><textarea name="college_address" placeholder="college address" id="college_address"></textarea></td>
					<td><input type="text" name="twitter_url" placeholder="twitter url" id="twitter_url"></td>
				</tr>
				<tr>
					<td><input type="text" name="fname" placeholder="first name" id="fname"/></td>
					<td><input type="text" name="college_address_contact" placeholder="college address contact" id="college_address_contact"></td>
					<td><input type="text" name="youtube_url" placeholder="youtube url" id="youtube_url"></td>
				</tr>
					<td><input type="text" name="minit" placeholder="MI" id="minit" size="1"/></td>
					<td><input type="text" name="student_mobile_no" placeholder="contact no." id="student_mobile_no"></td>
				<tr>
					<td><input type="text" name="lname" placeholder="last name" id="lname"/></td>
					<td><input type="text" name="student_mobile_no" placeholder="contact no." id="student_mobile_no"></td>
				</tr>				
			</table>
		</div>
		-->
	</div>

	<div id="logo">
		<img src="images/Logo.png"/>
	</div>
	
	<div id="buttonsDiv">
		<div id="loginDiv">
			<a href="#"><img src="images/loginLogo.png" id="loginShow"/></a>
		</div>
		<div id="login" align="center">
			<table>
				<tr><td><input type="text" name="username" placeholder="username" id="username"/></td></tr>
				<tr><td><input type="password" name="password" placeholder="password" id="password"/></td></tr>
			</table>
			<a href="student.php"><img src="images/go.png"/></a>			
		</div>
		<div id="signUpDiv">
			<a href="#"><img src="images/signUpLogo.png" id="signUpShow"/></a>
		</div>
	</div>
	
</div>
</body>
</html>
