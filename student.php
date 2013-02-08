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
		$("#courses").hide(); 
		$("#advisers").hide(); 
	});

	$("#profileTabButton").click(function(){
		$("#profile").show(); 
	});
  
});
</script>

<style type="text/css">

#logo{
	margin-left: auto;
	margin-right: auto;
	margin-top: 3%;
	width: 500px;
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

.ui-tabs-vertical { height:480px;width: 880px; margin-left:auto; margin-right:auto;}
.ui-tabs-vertical .ui-tabs-nav { padding: .2em .1em .2em .2em; float: left; width: 280px; }
.ui-tabs-vertical .ui-tabs-nav li { clear: left; width: 280px; border-bottom-width: 1px !important; border-right-width: 0 !important; margin: 0 -1px .2em 0; }
.ui-tabs-vertical .ui-tabs-nav li a { display:block; }
.ui-tabs-vertical .ui-tabs-nav li.ui-tabs-active { padding-bottom: 0; padding-right: .1em; border-right-width: 1px; border-right-width: 1px; }
.ui-tabs-vertical .ui-tabs-panel { padding: 1em; float: left; width: 564px;}

#profile{
	background-color:white;
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
				<li><a href="#tabs-2"><img src="images/student/courses.png" id="coursesTabButton"/></a></li>
				<li><a href="#tabs-3"><img src="images/student/advisers.png" id="advisersTabButton"/></a></li>
				<li><a href="#tabs-4"><img src="images/student/cases.png" id="casesTabButton"/></a></li>
				<li><a href="#tabs-5"><img src="images/student/help.png" id="helpTabButton"/></a></li>
				<li><a href="#tabs-6"><img src="images/student/logout.png" id="logoutTabButton"/></a></li>
			</ul>
				<div id="tabs-1">	
					<div id="profile">
					asd
					</div>
				</div>
				
				<div id="tabs-2">
				</div>
				
				<div id="tabs-3">				
				</div>

				<div id="tabs-4">				
				</div>
				
				<div id="tabs-5">				
				</div>
				
				<div id="tabs-6">				
				</div>
				
			</div>
		</div>
	</div>
		
	
</body>

</head>

</html>