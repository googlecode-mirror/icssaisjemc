<html>
<head>
<script src="js/jquery.min.js"></script>
<script src="js/jquery.infieldlabel.min.js" type="text/javascript" charset="utf-8"></script>
<script src="js/jquery-1.8.3.js"></script>
<script src="js/jquery-ui.js"></script> 
<script src="js/systemone.js"></script>
 <link rel="stylesheet" type="text/css" href="css/student.css">
<script> 
$(document).ready(function(){

$(function() {
    $( "#tabs" ).tabs().addClass( "ui-tabs-vertical ui-helper-clearfix" );
    $( "#tabs li" ).removeClass( "ui-corner-top" ).addClass( "ui-corner-left" );
  });
  
	$(function() {
		$( "#tabs" ).tabs();
		$("#profile").hide(); 
		$("#courses").hide(); 
		$("#advisers").hide(); 
		$("#contact_admin").hide();		
		$("#cases").hide();
		$("#help").hide();
	});

	$("#profileTabButton").click(function(){	
		$("#profile").hide(); 
		$("#courses").hide(); 
		$("#advisers").hide(); 
		$("#cases").hide();
		$("#contact_admin").hide();	
		$("#help").hide();	
		$("#profile").fadeIn(700); 
	});
	
	$("#coursesTabButton").click(function(){	
		$("#profile").hide(); 
		$("#courses").hide(); 
		$("#advisers").hide(); 
		$("#cases").hide();
		$("#contact_admin").hide();	
		$("#help").hide();	
		$("#courses").fadeIn(700); 
	});
	
	$("#advisersTabButton").click(function(){		
		$("#profile").hide(); 
		$("#courses").hide(); 
		$("#advisers").hide(); 
		$("#cases").hide();
		$("#contact_admin").hide();	
		$("#help").hide();
		$("#advisers").fadeIn(700); 
	});
	
	$("#casesTabButton").click(function(){	
		$("#profile").hide(); 
		$("#courses").hide(); 
		$("#advisers").hide(); 
		$("#cases").hide();
		$("#contact_admin").hide();	
		$("#help").hide();	
		$("#cases").fadeIn(700); 
	});
	
	$("#helpTabButton").click(function(){	
		$("#profile").hide(); 
		$("#courses").hide(); 
		$("#advisers").hide(); 
		$("#cases").hide();
		$("#contact_admin").hide();	
		$("#help").hide();	
		$("#help").fadeIn(700); 
	});
	
	$("#contactAdminTabButton").click(function(){	
		$("#profile").hide(); 
		$("#courses").hide(); 
		$("#advisers").hide(); 
		$("#cases").hide();
		$("#contact_admin").hide();	
		$("#help").hide();	
		$("#contact_admin").fadeIn(700); 
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
				<li><a href="#tabs-1"><img src="images/student/profile.png" id="profileTabButton"/></a></li>
				<li><a href="#tabs-2"><img src="images/student/courses.png" id="coursesTabButton"/></a></li>
				<li><a href="#tabs-3"><img src="images/student/advisers.png" id="advisersTabButton"/></a></li>
				<li><a href="#tabs-4"><img src="images/student/cases.png" id="casesTabButton"/></a></li>
				<li><a href="#tabs-5"><img src="images/student/contact_admin.png" id="contactAdminTabButton"/></a></li>
				<li><a href="#tabs-6"><img src="images/student/help.png" id="helpTabButton"/></a></li>
				<li><a href="#tabs-7"><a href="index.php"><img src="images/student/logout.png" id="Message"/></a></a></li>
			</ul>
				<div id="tabs-1">	
				
					<div id="profile" class="nav">
					
						<div id="profile_picture" class="profile">
							<img src="images/doof.jpg" height="160" style="width: 160px" border="1"/>
						</div>
												
						<div id="profile_nameAndUnits" class="profile">						
							<img src="images/hpbar.png" class="profile_nameAndUnits"/>
							<p class="profile_nameAndUnits">2010-19864<br/>Virtucio, Reuel Carlo P.</p>							
						</div>
						
						<div id="profile_basicInfoBox" class="profile">							
							<img src="images/basicInfo_logo.png" id="basicInfo_logo"/>		
							<div id="externalLogos">
								<a href="https://www.facebook.com/carlo.virtucio.3"><img src="images/logos/facebookLogo.png"/></a>
								<a href="https://twitter.com/carlo_virtucio"><img src="images/logos/twitterLogo.png"/></a>
								<a href="http://www.youtube.com/watch?v=sdUUx5FdySs"><img src="images/logos/youtubeLogo.png"/></a>
							</div>
							
							<div id="profile_basicInfoText">
								<table>
									<tr>
										<td>Name:</td>
										<td>Reuel Carlo P. Virtucio</td>
									</tr>
									
									<tr>
									</tr>
									
									<tr>										
										<td>Home Address:</td>
										<td>Lot 1 Blk 6 Mendiola Estates Bgy. San Antonio Los Banos Laguna</td>
									</tr>
									
									<tr>
									</tr>
									
									<tr>										
										<td>College Address:</td>
										<td>Lot 1 Blk 6 Mendiola Estates Bgy. San Antonio Los Banos Laguna</td>
									</tr>
									<tr>
										<td>Mobile:</td>
										<td>09062840412</td>
									</tr>
																		
									<tr>
									</tr>
									
									<tr>
										<td>Curriculum:</td>
										<td>BSCS 2008</td>
									</tr>																		
									
									<tr>
									</tr>
									
									<tr>
										<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
										<td><a href="#"><img src="images/edit.png"/></a></td>
									</tr>
								</table>
								
							</div>
							
						</div>
						
					</div>
					
				</div>
				
				<div id="tabs-2">					
					<div id="courses" class="nav" bgcolor="white">		
						<div id="courses_search">
							<table>
								<tr>
									<td><input type="text"></input></td>
									<td><a href="#">Search Course</a></td>
								</tr>
							</table>
						</div>
					</div>
				</div>
				
				<div id="tabs-3">												
					<div id="advisers" class="nav" bgcolor="white">		
						<div id="advisers_search">
							<table>
								<tr>
									<td><input type="text"></input></td>
									<td><a href="#">Search Adviser</a></td>
								</tr>
							</table>
						</div>					
					</div>
				</div>

				<div id="tabs-4">				
					<div id="cases" class="nav" bgcolor="white">						
						<div id="cases_list">
							List of cases
							<table> 
								<tr>									
									<td><b>Case</b></td>
									<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
									<td><b>Date</b></td>
								</tr>
								<hr>								
								<tr>									
									<td><hr></td>
									<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
									<td><hr></td>
								</tr>									
									<td>Too good-looking</td>
									<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
									<td><b>2010 - present</b></td>
								</tr>								
							</table>
							<hr>
						</div>
					</div>
				</div>
				
				<div id="tabs-5">				
					<div id="contact_admin" class="nav" bgcolor="white">
						<div id="contact_admin_compose">
							<textarea width="560"></textarea>
							<a href="#">Send</a>
						</div>
						
						<div id="contact_admin_inbox">
							<table> 
								<tr>									
									<td><b>Message</b></td>
									<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
									<td><b>Date</b></td>
								</tr>
								<hr>								
								<tr>									
									<td><hr></td>
									<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
									<td><hr></td>
								</tr>									
									<td>How are you?</td>
									<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
									<td><b>Feb 11</b></td>
								</tr>								
							</table>
							<hr>	
						</div>
					</div>
				</div>
				
				<div id="tabs-6">				
					<div id="help" class="nav" bgcolor="white">	
						<div id="help_text">
							<p>For inquiries, you go to my office at C-777</p>
							<p>Carlo Virtucio</p>
						</div>					
					</div>
				</div>
			
			</div>
		</div>
	</div>
</body>

</head>

</html>