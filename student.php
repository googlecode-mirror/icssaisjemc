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
		$("#profile").show(); 
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
	
	$(function() {
		$( "#courses").tabs();
		$("#courses_tabs-1").hide(); 
		$("#courses_tabs-2").hide(); 		
	});
	
	$("#viewChecklistButton").click(function(){				
		$("#courses_tabs-1").hide(); 
		$("#courses_tabs-2").hide(); 	
		$("#courses_tabs-1").fadeIn(700);
	});
	$("#academicHistoryButton").click(function(){				
		$("#courses_tabs-1").hide(); 
		$("#courses_tabs-2").hide(); 	 
		$("#courses_tabs-2").fadeIn(700);
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
								<a href="https://www.facebook.com/carlo.virtucio.3" target="_blank"><img src="images/logos/facebookLogo.png"/></a>
								<a href="https://twitter.com/carlo_virtucio" target="_blank"><img src="images/logos/twitterLogo.png"/></a>
								<a href="http://www.youtube.com/watch?v=sdUUx5FdySs" target="_blank"><img src="images/logos/youtubeLogo.png"/></a>
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
										<td>236-1 Tsunekuni, Hamamatsu Shi, Toyama Ken, Japan 5689411</td>
									</tr>
									
									<tr>
									</tr>
									
									<tr>										
										<td>College Address:</td>
										<td>Lot 4, 3rd Street Marymount Village, Batong Malake, Los Banos, Laguna, Philippines</td>
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
								<div class="button_style" href="#courses_tabs-1" id="viewChecklistButton">View Checklist</div>
								<div class="button_style" href="#courses_tabs-2" id="academicHistoryButton">Academic History</div>							
							<div id="courses_tabs-1">
								<div id="courses_checklist">
									<b>MINI-CHECKLIST for 2010-19864
									<br/>
									VIRTUCIO REUEL CARLO P - BSCS-2008-SP-PR</b>
									<br/><br/>
									<b>Information regarding courses follow the format:<br/>
									Course Type &nbsp; Course Number &nbsp; Grade &nbsp; Units
									</b>
									<table border="0" width="100%">
									
										<tr><td colspan="5"><br><b>FIRST Year, First Semester</b> (17 units)</td><td>&nbsp;</td><td colspan="5"><br><b>FIRST Year, Second Semester</b> (18 units)</td></tr>
										<tr><td>PE 1                </td><td>                    </td><td>2.25</td><td>0 </td><td>     </td><td>&nbsp;</td><td>PE 2                </td><td>PE 2-SDF            </td><td>1.75</td><td>0 </td><td>     </td></tr>
										<tr><td>MATH 17             </td><td>                    </td><td>1.25</td><td>5 </td><td>     </td><td>&nbsp;</td><td>ENG 2(AH)           </td><td>                    </td><td>1.75</td><td>3 </td><td>     </td></tr>
										<tr><td>ENG 1(AH)           </td><td>                    </td><td>1.50</td><td>3 </td><td>     </td><td>&nbsp;</td><td>CMSC 11             </td><td>                    </td><td>1.00</td><td>3 </td><td>     </td></tr>
										<tr><td>GE(SSP)             </td><td>POSC 1(SSP)         </td><td>1.50</td><td>3 </td><td>     </td><td>&nbsp;</td><td>CMSC 2              </td><td>                    </td><td>1.50</td><td>3 </td><td>     </td></tr>
										<tr><td>GE(MST)             </td><td>IT 1(MST)           </td><td>1.00</td><td>3 </td><td>     </td><td>&nbsp;</td><td>CMSC 56             </td><td>                    </td><td>2.75</td><td>3 </td><td>     </td></tr>
										<tr><td>GE(SSP)             </td><td>PSY 1(SSP)          </td><td>1.75</td><td>3 </td><td>     </td><td>&nbsp;</td><td>MATH 26             </td><td>                    </td><td>1.25</td><td>3 </td><td>     </td></tr>
										<tr><td colspan="6">&nbsp;</td><td>GE(MST)             </td><td>NASC 6(MST)         </td><td>2.50</td><td>3 </td><td>     </td></tr>
										<tr><td colspan="5"><br><b>SECOND Year, First Semester</b> (18 units)</td><td>&nbsp;</td><td colspan="5"><br><b>SECOND Year, Second Semester</b> (18 units)</td></tr>
										<tr><td>NSTP 1              </td><td>NSTP 1              </td><td>PASS</td><td>0 </td><td>     </td><td>&nbsp;</td><td>NSTP 2(LTS)         </td><td>LTS 2               </td><td>PASS</td><td>0 </td><td>     </td></tr>
										<tr><td>PE 2                </td><td>PE 2-PG             </td><td>1.75</td><td>0 </td><td>     </td><td>&nbsp;</td><td>PE 2                </td><td>PE 2-WF             </td><td>REGD</td><td>0 </td><td>     </td></tr>
										<tr><td>CMSC 21             </td><td>                    </td><td>1.25</td><td>3 </td><td>     </td><td>&nbsp;</td><td>CMSC 100            </td><td>                    </td><td>1.25</td><td>3 </td><td>     </td></tr>
										<tr><td>CMSC 22             </td><td>                    </td><td>1.25</td><td>3 </td><td>     </td><td>&nbsp;</td><td>CMSC 123            </td><td>                    </td><td>1.50</td><td>3 </td><td>     </td></tr>
										<tr><td>MATH 27             </td><td>                    </td><td>1.50</td><td>3 </td><td>     </td><td>&nbsp;</td><td>CMSC 130            </td><td>                    </td><td>1.50</td><td>3 </td><td>     </td></tr>
										<tr><td>CMSC 57             </td><td>                    </td><td>2.50</td><td>3 </td><td>     </td><td>&nbsp;</td><td>MATH 28             </td><td>                    </td><td>1.75</td><td>3 </td><td>     </td></tr>
										<tr><td>GE(MST)             </td><td>NASC 7(MST)         </td><td>2.50</td><td>3 </td><td>     </td><td>&nbsp;</td><td>GE(MST)             </td><td>NASC 1(MST)         </td><td>____</td><td>3 </td><td>     </td></tr>
										<tr><td>STAT 1              </td><td>                    </td><td>1.25</td><td>3 </td><td>     </td><td>&nbsp;</td><td>GE(SSP)             </td><td>ENTR 1(SSP)         </td><td>2.25</td><td>3 </td><td>     </td></tr>
										<tr><td colspan="5"><br><b>THIRD Year, First Semester</b> (18 units)</td><td>&nbsp;</td><td colspan="5"><br><b>THIRD Year, Second Semester</b> (18 units)</td></tr>
										<tr><td>CMSC 124            </td><td>                    </td><td>1.50</td><td>3 </td><td>     </td><td>&nbsp;</td><td>CMSC 125            </td><td>                    </td><td>REGD</td><td>3 </td><td>     </td></tr>
										<tr><td>CMSC 127            </td><td>                    </td><td>2.25</td><td>3 </td><td>     </td><td>&nbsp;</td><td>CMSC 128            </td><td>                    </td><td>REGD</td><td>3 </td><td>     </td></tr>
										<tr><td>CMSC 131            </td><td>                    </td><td>1.75</td><td>3 </td><td>     </td><td>&nbsp;</td><td>CMSC 132            </td><td>                    </td><td>REGD</td><td>3 </td><td>     </td></tr>
										<tr><td>CMSC 150            </td><td>                    </td><td>1.50</td><td>3 </td><td>     </td><td>&nbsp;</td><td>CMSC 170            </td><td>                    </td><td>REGD</td><td>3 </td><td>     </td></tr>
										<tr><td>GE(AH)              </td><td>HUM 2(AH)           </td><td>1.00</td><td>3 </td><td>     </td><td>&nbsp;</td><td>GE(AH)              </td><td>HUM 1(AH)           </td><td>____</td><td>3 </td><td>     </td></tr>
										<tr><td>GE(SSP)             </td><td>SOSC 3(SSP)         </td><td>____</td><td>3 </td><td>     </td><td>&nbsp;</td><td>GE(SSP)             </td><td>HUME 10(SSP)        </td><td>____</td><td>3 </td><td>     </td></tr>
										<tr><td colspan="5"><br><b>THIRD Year, Summer</b> (3 units)</td><td colspan="6">&nbsp;</td></tr>
										<tr><td>CMSC 198            </td><td>                    </td><td>____</td><td>3 </td><td>     </td><td colspan="6">&nbsp;</td></tr>
										<tr><td colspan="5"><br><b>FOURTH Year, First Semester</b> (17 units)</td><td>&nbsp;</td><td colspan="5"><br><b>FOURTH Year, Second Semester</b> (17 units)</td></tr>
										<tr><td>CMSC 137            </td><td>                    </td><td>____</td><td>3 </td><td>     </td><td>&nbsp;</td><td>CMSC 142            </td><td>                    </td><td>____</td><td>3 </td><td>     </td></tr>
										<tr><td>CMSC 141            </td><td>                    </td><td>1.25</td><td>3 </td><td>     </td><td>&nbsp;</td><td>CMSC 190-2          </td><td>                    </td><td>____</td><td>2 </td><td>     </td></tr>
										<tr><td>CMSC 199            </td><td>                    </td><td>____</td><td>1 </td><td>     </td><td>&nbsp;</td><td>PI 10(SSP)          </td><td>                    </td><td>1.00</td><td>3 </td><td>     </td></tr>
										<tr><td>CMSC 190-1          </td><td>                    </td><td>____</td><td>1 </td><td>     </td><td>&nbsp;</td><td>GE(MST)             </td><td>NASC 3(MST)         </td><td>____</td><td>3 </td><td>     </td></tr>
										<tr><td>ENG 10              </td><td>                    </td><td>REGD</td><td>3 </td><td>     </td><td>&nbsp;</td><td>ELECTIVE            </td><td>MGT 101             </td><td>____</td><td>3 </td><td>     </td></tr>
										<tr><td>GE(AH)              </td><td>SPCM 1(AH)          </td><td>____</td><td>3 </td><td>     </td><td>&nbsp;</td><td>ELECTIVE            </td><td>SPAN I              </td><td>REGD</td><td>3 </td><td>     </td></tr>
										<tr><td>ELECTIVE            </td><td>DEVC 141            </td><td>____</td><td>3 </td><td>     </td><td colspan="6">&nbsp;</td></tr>
										
									</table>
								</div>
							</div>
							<div id="courses_tabs-2">												
								<div id="courses_academicHistory">
									<b></b>
									<table border="0" width="100%">									
									</table>
								</div>		
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
							<p>For inquiries, you can go to my office at C-777</p>
							<p>Carlo Virtucio</p>
							<img src="images/chicks.gif"/>
						</div>					
					</div>
				</div>
			
			</div>
		</div>
	</div>
</body>

</head>

</html>