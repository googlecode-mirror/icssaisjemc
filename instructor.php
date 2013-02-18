<html>
<head>
<link rel="stylesheet" type="text/css" href="css/instructor.css"></head>
<script src="js/jquery.min.js"></script>
<script src="js/jquery.infieldlabel.min.js" type="text/javascript" charset="utf-8"></script>
<script src="js/jquery-1.8.3.js"></script>
<script src="js/jquery-ui.js"></script>  
<script> 
$(document).ready(function(){

$(function() {
    $( "#tabs" ).tabs().addClass( "ui-tabs-vertical ui-helper-clearfix" );
    $( "#tabs li" ).removeClass( "ui-corner-top" ).addClass( "ui-corner-left" );
  });
  
	$(function() {
		$( "#tabs" ).tabs();
		$("#profile").hide(); 
		$("#advisees").hide(); 
	});

	$("#ManageInformation").click(function(){
		$("#profile").hide(); 
		$("#advisees").hide(); 
		$("#profile").fadeIn(700); 
	});

	$("#ViewStudents").click(function(){
		$("#profile").hide(); 
		$("#advisees").hide(); 
		$("#advisees").fadeIn(700); 
	});	
});
</script>



<body bgcolor="#003471">
	<div id="logo">
		<img src="images/logo_small.png"/>
	</div>		
	<div id="main">
		<div id="tabs">
			<ul>
				<li><a href="#tabs-1"><img src="images/student/profile.png" id="ManageInformation"/></a></li>
				<li><a href="#tabs-2"><img src="images/instructor/advisees.png" id="ViewStudents"/></a></li>
				<li><a href="#tabs-3"><a href="index.php"><img src="images/student/logout.png" id="Message"/></a></a></li>
			
				
				
			</ul>
				<div id="tabs-1">	
					<div class="All_tabs" id="profile">
					<div class="header_texts">Manage Basic Information:<br></div>
								<div class="button_style" href="#Add">
					Add
					</div>
					
					<div class="button_style">
					Edit
					</div>
					
					<div class="button_style">
					Delete
					</div>
					
					<div class="button_style">
					Change Password
					</div>
				 <br>
				 <br>
				 <div  id="Add">
				 <div class="texts2">
				 
				 First Name: <input type="text" name="firstname">
				 Last Name: <input type="text" name="lastname"><br>
				 
				 Employee No.: <input type="text" name="empno">
				 
				 <form action="post">
				 College: 
				 <select name="college">
				 <option value="CAS">CAS</option>
				 <option value="CEAT">CEAT</option>
				 <option value="CA">CA</option>
				 <option value="CEM">CEM</option>
				 <option value="CDC">CDC</option>
				 <option value="CHE">CHE</option>
				 <option value="CFNR">CFNR</option>
				 <option value="CVM">CVM</option>
				 </select>
				 </form>
				 
				</div>								
				</div>
					</div>
				</div>
				
				<div id="tabs-2">
					<div class="All_tabs" id="advisees">
					<div class="button_style">Student List</div></a>
					<div class="button_style">Previous Students</div>
					<div class="button_style">Current Advisees</div>
					<div class="button_style">Graduated Advisees</div>
					<div class="button_style">Previous Advisees</div>
						<div id= "#prevstud">
						<br>
						<div class="name_text"><img src="images/default_profile.jpg">Fortuna, Jeric M.<br></div>
						<div class="name_text"><img src="images/default_profile.jpg">Gervacio, Dzi M.<br></div>
						<div class="name_text"><img src="images/default_profile.jpg">Helye, Hello H.<br></div>
					</div>
					</div>
				</div>
				
				
					
					
					
					
			
				</div>

				
				
				
				
			</div>
		</div>
	</div>
	
	
	
</body>

</head>

</html>
