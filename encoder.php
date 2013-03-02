<html>
<head>
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
		$("#encode").hide(); 
		$("#help").hide(); 
	});

	$("#profileTabButton").click(function(){		
		$("#profile").hide(); 
		$("#encode").hide(); 
		$("#help").hide(); 
		$("#profile").fadeIn(700); 
	});
	
	$("#encodeTabButton").click(function(){		
		$("#profile").hide(); 
		$("#encode").hide(); 
		$("#help").hide(); 
		$("#encode").fadeIn(700); 
	});
	
	$("#helpTabButton").click(function(){		
		$("#profile").hide(); 
		$("#encode").hide(); 
		$("#help").hide(); 
		$("#help").fadeIn(700); 
	});
	
	$(function() {
		$( "#encode_action" ).tabs();
		$("#encode_action_tabs-1").hide(); 
		$("#encode_action_tabs-2").hide(); 
		$("#encode_action_tabs-3").hide(); 
		$("#encode_action_tabs-4").hide(); 
	});
	
	$("#addTabButton").click(function(){				
		$("#encode_action_tabs-2").hide(); 
		$("#encode_action_tabs-3").hide(); 
		$("#encode_action_tabs-4").hide(); 		
		$("#encode_action_tabs-1").fadeIn(700);
	});
	$("#editTabButton").click(function(){				
		$("#encode_action_tabs-1").hide(); 
		$("#encode_action_tabs-3").hide(); 
		$("#encode_action_tabs-4").hide(); 	 
		$("#encode_action_tabs-2").fadeIn(700);
	});
	$("#deleteTabButton").click(function(){				
		$("#encode_action_tabs-2").hide(); 
		$("#encode_action_tabs-1").hide(); 
		$("#encode_action_tabs-4").hide(); 	 
		$("#encode_action_tabs-3").fadeIn(700);
	});
	$("#viewTabButton").click(function(){				
		$("#encode_action_tabs-2").hide(); 
		$("#encode_action_tabs-3").hide(); 
		$("#encode_action_tabs-1").hide(); 	 
		$("#encode_action_tabs-4").fadeIn(700);
	});
	
	
	
	
	$(function() {
		$( "#encode_search" ).tabs();
		$("#encode_result").hide(); 
	});
	$("#search_student").click(function(){		
		$("#encode_result").fadeIn(); 
	});
  
});
</script>

<style type="text/css">

#logo{
	margin-left: auto;
	margin-right: auto;
	margin-top: 3%;
	width: 500px;
	margin-bottom: 3%;
}

#tabs ul{
	margin:1;
	padding:1;
	list-style-type:none;
}

#tabs img{
	background-color:white;
	-webkit-border-radius:7px;
	-moz-border-radius:7px;
}

#tabs{
	align:center;	
}

#main{		
	width:880px;
	margin-left:auto;
	margin-right:auto;
	-webkit-border-radius:7px;
	-moz-border-radius:7px;
}

.ui-tabs-vertical { 
	height:480px;width: 880px; 
	margin-left:auto; 
	margin-right:auto;
}

.ui-tabs-vertical .ui-tabs-nav { 
	padding: .2em .1em .2em .2em; 
	float: left; 
	width: 280px;
}

.ui-tabs-vertical .ui-tabs-nav li { 
	clear: left; 
	width: 280px; 
	border-bottom-width: 1px !important; 
	border-right-width: 0 !important; 
	margin: 0 -1px .2em 0; 
	margin-top:5%;
}

.ui-tabs-vertical .ui-tabs-nav li a { 
	display:block; 
}

.ui-tabs-vertical .ui-tabs-nav li.ui-tabs-active { 
	padding-bottom: 0; 
	padding-right: .1em; 
	border-right-width: 1px; 
	border-right-width: 1px; 	
}

.ui-tabs-vertical .ui-tabs-panel { 
	padding: 1em; 
	float: left; 
	width: 564px;
}

.nav{	
	background-color:white;
	-webkit-border-radius:7px;
	-moz-border-radius:7px;
	width:600px;
	height:1000px;
}
 
.profile{	
}

#profile_picture{
	padding:20px;
	float:left;	
}

#profile_nameAndUnits{
	padding:20px;
}

.profile_nameAndUnits{	
	float:right;	
}

#profile_basicInfo{
	float:left;	
	background-color:grey;
	margin:20px;
	width:560px;
	height:560px;
	-webkit-border-radius:5px;
	-moz-border-radius:5px;
}



.button_style {
	-moz-box-shadow:inset 0px 1px 0px 0px #ffffff;
	-webkit-box-shadow:inset 0px 1px 0px 0px #ffffff;
	box-shadow:inset 0px 1px 0px 0px #ffffff;
	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #ededed), color-stop(1, #dfdfdf) );
	background:-moz-linear-gradient( center top, #ededed 5%, #dfdfdf 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ededed', endColorstr='#dfdfdf');
	background-color:#ededed;
	-moz-border-radius:6px;
	-webkit-border-radius:6px;
	border-radius:6px;
	border:1px solid #dcdcdc;
	display:inline-block;
	color:#777777;
	font-family:arial;
	font-size:15px;
	font-weight:bold;
	padding:6px 24px;
	text-decoration:none;
	text-shadow:1px 1px 0px #ffffff;
}.button_style:hover {
	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #dfdfdf), color-stop(1, #ededed) );
	background:-moz-linear-gradient( center top, #dfdfdf 5%, #ededed 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#dfdfdf', endColorstr='#ededed');
	background-color:#dfdfdf;
}.button_style:active {
	position:relative;
	top:1px;
}

</style>

<body bgcolor="#003471">
	<div id="logo">
		<img src="images/logo_small.png"/>
	</div>		
	<div id="main">
		<div id="tabs">
			<ul>
				<li><a href="#tabs-1"><img src="images/student/profile.png" id="profileTabButton"/></a></li>
				<li><a href="#tabs-2"><img src="images/encoder/encode.png" id="encodeTabButton"/></a></li>
				<li><a href="#tabs-3"><img src="images/student/help.png" id="helpTabButton"/></a></li>
				<li><a href="#tabs-4"><a href="index.php"><img src="images/student/logout.png" id="logoutTabButton"/></a></a></li>
			</ul>
				<div id="tabs-1">	
				
					<div id="profile" class="nav">
						<div id="profile_picture" class="profile">
							<img src="images/default_profile.jpg"/>
						</div>
												
						<div id="profile_nameAndUnits" class="profile">					
							<p >Ledesma, Earl Jay F.</p><br/>					
							<p >Role: SA</p>					
						</div>
						
						<!--<div id="profile_basicInfo" class="profile">							
						</div>-->
						
						
					</div>
					
				</div>
				
				<div id="tabs-2">					
					<div id="encode" class="nav" bgcolor="white">											
						<div id="encode_search" bgcolor="white">
							<center><form>
							Search: <input type="text" placeholder="student no." name="search" /><input id="search_student" type="button" value="Go" /><br />	
							</form>
							</center>
							
							<div id="encode_result" bgcolor="white">
							search result here</br>
							2008-27532 Ledesma, Earl Jay F.
							</div>
						</div>
						
						
						<div id="encode_action" bgcolor="white">
							
								<div class="button_style" href="#encode_action_tabs-1" id="addTabButton">add</div>
								<div class="button_style" href="#encode_action_tabs-2" id="editTabButton">edit</div>
								<div class="button_style" href="#encode_action_tabs-3" id="deleteTabButton">delete</div>
								<div class="button_style" href="#encode_action_tabs-4" id="viewTabButton">view</div>
							
							<div id="encode_action_tabs-1">
								Add 
								<select name="info">
								<option value="course" selected="selected">Course</option>
								<option value="adviser">Adviser</option>
								<option value="case" >Case</option>
								</select>
								<input type="text"  name="add_info" /><input type="submit" value="Add" /><br />	
							</div>
							<div id="encode_action_tabs-2">
							2
							<div class="button_style" href="" id="editSaveTabButton">Save</div>
							</div>
							<div id="encode_action_tabs-3">
							3
							<div class="button_style" href="" id="editSaveTabButton">Delete</div>
							</div>
							<div id="encode_action_tabs-4">
							4
							</div>
						</div>
					</div>
				</div>
			
				<div id="tabs-3">				
					<div id="help" class="nav" bgcolor="white">						
						<p>For inquiries, you can go to my office at C-777</p>
						<p>Carlo Virtucio</p>
						<img src="images/chicks.gif"/>
					</div>
				</div>
				
				<div id="tabs-4">
				</div>				
			</div>
		</div>
	</div>
</body>

</head>

</html>