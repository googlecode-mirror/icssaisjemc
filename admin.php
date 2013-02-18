<html>
<head>
<link rel="stylesheet" type="text/css" href="css/admin.css"></head>
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
		$("#manage").hide(); 
		$("#logs").hide(); 
		$("#mailbox").hide(); 
	});

	$("#ManageUserAccounts").click(function(){
		$("#manage").hide(); 
		$("#logs").hide(); 
		$("#mailbox").hide(); 
		$("#manage").fadeIn(700); 
	});
  
	$("#MonitorLogActivities").click(function(){
		$("#manage").hide(); 
		$("#logs").hide(); 
		$("#mailbox").hide(); 
		$("#logs").fadeIn(700); 
	});

	$("#Message").click(function(){
		$("#manage").hide(); 
		$("#logs").hide(); 
		$("#mailbox").hide(); 
		$("#mailbox").fadeIn(700); 
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
				<li><a href="#tabs-1"><img src="images/admin/manage.png" id="ManageUserAccounts"/></a></li>
				<li><a href="#tabs-2"><img src="images/admin/logs.png" id="MonitorLogActivities"/></a></li>
				<li><a href="#tabs-3"><img src="images/admin/mailbox.png" id="Message"/></a></li>
				<li><a href="#tabs-4"><a href="index.php"><img src="images/student/logout.png" id="Message"/></a></a></li>
				
				
			</ul>
				<div id="tabs-1">	
					<div class="All_tabs" id="manage">
					<div class="header_texts">Pick a Role:<br></div>
					<form name="input" action="student.php" method="post">
					<div class="texts">
					<input type="radio" name="user" value="student">Student<br>
					<input type="radio" name="user" value="instructor">Instructor<br>
					<input type="radio" name="user" value="encoder">Encoder<br>
					</div>
					<div class="button_style">
					Next
					</div>
					</form>								
					</div>
				</div>
				
				<div id="tabs-2">
					<div class="All_tabs" id="logs">
					<div class="header_texts"> Log Activities<br></div>
					<div class="button_style">Show by Date</div>
					<div class="button_style">Show by Time</div>
					<div class="button_style">Show by User Account</div>
					</div> 
				</div>
				
				<div id="tabs-3">				
					<div class="All_tabs" id="mailbox">
					<div class="texts">
					<div class="button_style" href="#inbox">
					Inbox(3)
					</div>
					<div class="button_style">
					Compose Message
					</div> 
					<div class="button_style">
					Sent Mail
					</div>

					
					<div id="inbox">
					
						<table> 
						<tr>
						<td><b>Sender</b></td>
						<td><b>Message</b></td>
						<td><b>Date</b></td>
						</tr>
						<hr>
						<tr>
						<tr>
						<td><hr></td>
						<td><hr></td>
						<td><hr></td>
						</tr>
						<td><b>Carlo Virtucio</b></td>
						<td>How are you?</td>
						<td>			</td>
						<td><b>Feb 11</b></td>
						</tr>
						<tr>
						<td><b>Meeren Aguilar</b></td>
						<td>Hi</td>
						<td>			</td>
						<td><b>Feb 9</b></td>
						</tr>
						<td><b>Ejay Ledesma</b></td>
						<td>Hello</td>
						<td>			</td>
						<td><b>Feb 6</b></td>
						</tr>
						</table>
						<hr>
						
					
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
