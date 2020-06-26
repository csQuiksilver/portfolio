<!doctype html>
<head>


<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400;500;700;900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/nav.css">
<script type="text/javascript" charset="utf-8" src="websiteexamples_edgePreload.js"></script>
<script type="text/javascript" charset="utf-8" src="js/aos.js"></script>
<link rel="stylesheet" href="css/aos.css">
<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" />




<title>Brent Balloch's Portfolio</title>

<style>
body {boarder: 0px;
	margin: 0px;}
	
	h1 {
		font-size: 10vh;
		font-weight: 500;
		
	
	}
	h2 {
		
		font-size: 7vh;
		font-weight: 400;
		
	
	
	}
	h3 {
		
		font-size: 3vh;
		font-weight: 400;
		
	
	
	}
	h4 {
		
		font-size: 2vw;
		font-weight: 400;
		font-family: 'Noto Sans JP', sans-serif;
		-webkit-text-stroke: 1px black;
		
	
	
	}
	
	h5 {
		font-size: 2vh;
		font-weight: 400;
		font-family: 'Noto Sans JP', sans-serif;
		margin:0px;
		
		}
	h6 {
		
		font-size: 2vh;
		font-weight: 400;
		font-family: 'Noto Sans JP', sans-serif;
		margin:0px;
		}
		
	h7 {
		
		font-size: 4vw;
		font-weight: 400;
		font-family: 'Noto Sans JP', sans-serif;
		-webkit-text-stroke: 1px black;
		
	
	
	}
	h8 {
		
		font-size: 1.5vw;
		font-weight: 400;
		font-family: 'Noto Sans JP', sans-serif;
	
		
	
	
	}
	
	.edgeLoad-EDGE-1794486858 { visibility:hidden; }
#site {
	
	boarder: 0px;
	margin: 0px;
	width: 100%;
	height: auto;
	
	}
	
	#nameheader {
		width: 80%;
		background-color: #77a7ff;
		margin-right:auto;
		margin-left:auto;
		font-family:"Times New Roman", Times, serif;
		font-size: 8vw;
		text-align: center;
		
		
		}
	/* CODING - CODING - CODING */
#introduction {
	min-height: 100vh;
	height: auto;
	background-color: #77a7ff;
	background-image: url(images/backgroundintro.png);
	background-repeat: no-repeat;
	background-position: center center;
	display:grid;
	grid-gap: 20px 50px;
	grid-template-columns: 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr;
	grid-template-areas:
		'navmobile navmobile navmobile navmobile navmobile navmobile navmobile navmobile'
		'. . . . . . . .'
		'. . introductioncontent introductioncontent introductioncontent introductioncontent . .'
		'. . . . . . . .'
		'. . . . . . . .';
	
	font-family: 'Noto Sans JP', sans-serif;
	font-weight: 900;
	color: white;
}

#navmobile {grid-area: navmobile;}
#introduction h2 {
	
	margin-bottom: 2px;
	margin-top: 0px;

}
#introduction h3 {margin-top: 2px;}



#introductioncontent {grid-area: introductioncontent;}

	/* CODING - CODING - CODING*/

#coding {
		min-height: 100vh;
		height: auto;
		background-color: #a2ba2d;
		font-family:"Times New Roman", Times, serif;
		background-image: url(images/backgroundcoding.png);
		background-repeat: no-repeat;
		background-position: center center;
		background-size: 100vw auto;
		display:grid; 
		grid-gap: 20px 50px;
		grid-template-columns: 1fr 3fr 3fr 1fr 1fr 1fr 1fr 1fr;
		
		grid-template-areas:
		'. . . . . . . .'
		'. . . . . . . .'
		'. codingimage codingimage . codingcontent codingcontent codingcontent .'
		'. . . . . . . .'
		'. . . . . . . .';

}

@media (max-width: 1050px) 
			{
				
						#coding {
						grid-template-areas:
							'. . . . . . . .'
							'. codingcontent codingcontent codingcontent codingcontent codingcontent codingcontent .'
							'. codingimage codingimage codingimage codingimage codingimage codingimage .'
							'. . . . . . . .';
						
						}
				}

#coding h2 {text-align:center;color:white;}
#coding h3 {text-align:center;color:white;}
#codingimage {grid-area: codingimage;align-self: center;height: auto;min-height: 600px;}
@media (max-width: 599px) 
			{
				
				#codingimage {
					height: auto;min-height: 0px;
				}
				}
#codingcontent {grid-area: codingcontent;}



	/* GRAPHIC DESIGN - GRAPHIC DESIGN - GRAPHIC DESIGN   */

#graphicdesign {
	
		min-height: 100vh;
		height: auto;
		display:grid; 
		font-family:"Times New Roman", Times, serif;
		background-color: #0065b5;
		background-image: url(images/backgrounddesign.png);
		background-repeat: no-repeat;
		background-position: center center;
		background-size: 100vw 100hw;
		grid-gap: 20px 50px;
		grid-template-columns: 1fr 3fr 3fr 1fr 1fr 1fr 1fr 1fr;
		
		grid-template-areas:
		'. . . . . . . .'
		'. . . . . . . .'
		'. graphicdesignimage graphicdesignimage . graphicdesigncontent graphicdesigncontent graphicdesigncontent .'
		'. . . . . . . .'
		'. . . . . . . .';
}

#graphicdesignimage iframe {
 
    position: absolute;
  top:0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index:998;
  background-color: #000;
  border-top: 20px solid #000;
  border-bottom: 20px solid #000;
  border-right: 35px solid #000;
  border-left: 35px solid #000;
 
  
}

@media (max-width: 1050px)
	
	{
	
		#graphicdesign {
			grid-template-areas:
			'. . . . . . . .'
			'. graphicdesigncontent graphicdesigncontent graphicdesigncontent graphicdesigncontent graphicdesigncontent graphicdesigncontent .'
			' . graphicdesignimage graphicdesignimage graphicdesignimage graphicdesignimage graphicdesignimage graphicdesignimage . '
			'. . . . . . . .';
		}
		
		#graphicdesignimage iframe 
			{
    
				border-top: 0px;
				border-bottom: 0px;
				border-right: 0px;
				border-left: 0px;
			}
	
	}

#graphicdesign h2 {color:white;text-align:center;}
#graphicdesign h3 {color:white;text-align:center;}
#graphicdesignimage {
	
	grid-area: graphicdesignimage;
	
	text-align: center;
	position: relative;
  width: 100%;
  padding-bottom: 56.25%; 
  height: auto;
  text-align: center;
	
	
	
	}

#graphicdesigncontent {grid-area: graphicdesigncontent;}



	/* DATABASE - DATABASE - DATABASE   */

#database {
	min-height: 100vh;
	height: auto;
	background-color:#b54c2c;
	font-family:"Times New Roman", Times, serif;
	display:grid; 
		grid-gap: 20px 50px;
		grid-template-columns: 1fr 2fr 4fr 1fr 1fr 1fr 1fr 1fr;
		
		grid-template-areas:
		'. . . . . . . .'
		'. experience experience . . . . .'
		'. loginimage logintext . databasecontent databasecontent databasecontent .'
		'. cmsimage cmstext . databasecontent databasecontent databasecontent .'
		'. buildimage buildtext . databasecontent databasecontent databasecontent .'
		'. . . . . . . .'
		'. . . . . . . .';

}
@media (max-width: 1200px) {
	
	#database h4 {
		
			font-size: calc(16px + 1.5vw);
			-webkit-text-stroke: 0px black;
		
		}
	
	
	
	
	}
@media (max-width: 1050px) 

	{
	
		#database 
			{
				grid-template-areas:
		'. . . . . . . .'
		'. databasecontent databasecontent databasecontent databasecontent databasecontent databasecontent .'
		'. loginimage loginimage loginimage logintext logintext logintext .'
		'. cmsimage cmsimage cmsimage cmstext cmstext cmstext .'
		'. buildimage buildimage buildimage buildtext buildtext buildtext .'
		'. . . . . . . .';
				
			
			}
			
			
	
	
	}
#database img {width:100%;height:auto;}
#database h2 {color: white;text-align:center;}
#database h3 {color: white;text-align:center;}
#database h4 {color: white;text-align:left;}


#databasecontent {grid-area: databasecontent;align-self: center;}
.loginimage {grid-area: loginimage;align-self: center;justify-self: center;}
.logintext {grid-area: logintext;align-self: center;}
.cmsimage {grid-area: cmsimage;justify-self: center;}
.cmstext {grid-area: cmstext;align-self: center;}
.buildimage {grid-area: buildimage;align-self: center;justify-self: center;}
.buildtext {grid-area: buildtext;align-self: center;}



/* CONTACT - CONTACT - CONTACT   */

.contact {
		min-height: 100vh;
		height:auto;
		background-color: #5980b5;
		font-family:"Times New Roman", Times, serif;
		background-image: url(images/contactbackground3.png);
		background-repeat: no-repeat;
		background-position: center center;
		background-size: cover;
		display:grid; 
		padding-bottom: 4vh;
		grid-gap: 20px 50px;
		grid-template-columns: 1fr 3fr 3fr 1fr 1fr 1fr 1fr 1fr;
		
		grid-template-areas:
		
		'. workgrid workgrid workgrid contactbrent contactbrent contactbrent .';

}

@media (max-width: 1200px) {
	
	#contact h7 {
		
			font-size: calc(16px + 1.5vw);
			-webkit-text-stroke: 0px black;
			
		
		}
}
@media (max-width: 1050px) {
	
		.contact {
			
				grid-template-areas:
				
		'. contactbrent contactbrent contactbrent contactbrent contactbrent contactbrent .'
		'. workgrid workgrid workgrid workgrid workgrid workgrid .';
			
			}
			
			#contact h7 {
		
			padding-top: 3vh;
			
		
		}
	
	}
.contact h1 {text-align:center;color:white;}
.contact h2 {text-align:center;color:white;font-size: 4vw;}
.contact h3 {text-align:center;color:white;}
.contact h4 {text-align:center;color:white;margin-top:0px;margin-bottom:0px;}
.contact h5 {text-align:center;color:white;}
.contact h6 {text-align:center;color:black;line-height: 0.5;}
.contact h7 {text-align:center;color:white;margin-top:0px;margin-bottom:0px;font-size:calc(16px + 2vw);}
.contact h8 {color:white;text-shadow: -3px 6px 3px rgba(0,0,0,0.82);line-height:2.2;}
.contact h8 a {color:white;text-shadow: -3px 6px 3px rgba(0,0,0,0.82);line-height:2.2;text-decoration:none;font-size:calc(12px + 1.5vw);}
.contactbrent {grid-area: contactbrent;text-align:center;}

.workgrid {
		
		grid-area: workgrid;
		display:grid; 
		grid-gap: 2px 40px;
		grid-template-columns: 1fr 1fr 1fr 1fr;
		
		grid-template-areas:
		'worktitle worktitle worktitle worktitle'
		'work1 work1 work2 work2'
		'. work3 work3 .'
		'work4 work4 work5 work5'
		'. work6 work6 .'
		'. . . .';
		
	
	
	}
	
	
	
	@media (max-width: 1050px) 
	
		{ 
			.workgrid {
					padding-top: 5vh;
					grid-gap: 20px 40px;
					grid-template-areas:
						'worktitle worktitle worktitle worktitle'
						'work1 work1 work1 work1'
						'work2 work2 work2 work2'
						'work3 work3 work3 work3'
						'work4 work4 work4 work4'
						'work5 work5 work5 work5'
						'work6 work6 work6 work6';
				
				}
	
		}
	
	
.workgrid img {width:100%;height:auto;}
.workgrid img a {text-decoration: none;}
.workgrid h5 a {text-decoration: none;color:white;}
.workgrid h6 a {text-decoration: none;color:black;}

.work1 {
	grid-area: work1;
	background-color:#426793;
	align-self: center;
	padding: 2vh;
	-webkit-box-shadow: -6px 9px 5px -1px rgba(0,0,0,0.67);
	-moz-box-shadow: -6px 9px 5px -1px rgba(0,0,0,0.67);
	box-shadow: -6px 9px 5px -1px rgba(0,0,0,0.67);
	
	
	display:grid; 
	grid-gap: 4px 8px;
	grid-template-columns: 2fr 3fr;	
	grid-template-areas:
	'workimage1 worktext1';
	
	}
.work1:hover {
	
	 -moz-box-shadow:    inset 0 0 10px #000000;
   -webkit-box-shadow: inset 0 0 10px #000000;
   box-shadow:         inset 0 0 10px #000000;
   cursor: pointer;
	
	
	}
	
	#workimage1 {grid-area: workimage1;align-self: center;}
	#worktext1 {grid-area: worktext1;align-self: top;}
	
.work2 {
	grid-area: work2;
	background-color:#426793;
	align-self: center;
	padding: 2vh;
	-webkit-box-shadow: -6px 9px 5px -1px rgba(0,0,0,0.67);
	-moz-box-shadow: -6px 9px 5px -1px rgba(0,0,0,0.67);
	box-shadow: -6px 9px 5px -1px rgba(0,0,0,0.67);
	
	display:grid; 
	grid-gap: 4px 8px;
	grid-template-columns: 2fr 3fr;	
	grid-template-areas:
	'workimage2 worktext2';
	
	}
	
	
.work2:hover {
	
	 -moz-box-shadow:    inset 0 0 10px #000000;
   -webkit-box-shadow: inset 0 0 10px #000000;
   box-shadow:         inset 0 0 10px #000000;
   cursor: pointer;
	
	
	}
	
	#workimage2 {grid-area: workimage2;align-self: center;}
	#worktext2 {grid-area: worktext2;align-self: top;}
	
.work3 {
	grid-area: work3;
	background-color:#426793;
	align-self: center;padding: 2vh;
	-webkit-box-shadow: -6px 9px 5px -1px rgba(0,0,0,0.67);
	-moz-box-shadow: -6px 9px 5px -1px rgba(0,0,0,0.67);
	box-shadow: -6px 9px 5px -1px rgba(0,0,0,0.67);
	
	display:grid; 
	grid-gap: 4px 8px;
	grid-template-columns: 2fr 3fr;	
	grid-template-areas:
	'workimage3 worktext3';
	
	}

.work3:hover {
	
	 -moz-box-shadow:    inset 0 0 10px #000000;
   -webkit-box-shadow: inset 0 0 10px #000000;
   box-shadow:         inset 0 0 10px #000000;
   cursor: pointer;
	
	
	}
	
	#workimage3 {grid-area: workimage3;align-self: center;}
	#worktext3 {grid-area: worktext3;align-self: top;}
	
.work4 {
	
	grid-area: work4;
	background-color:#426793;
	align-self: center;padding: 2vh;
	-webkit-box-shadow: -6px 9px 5px -1px rgba(0,0,0,0.67);
	-moz-box-shadow: -6px 9px 5px -1px rgba(0,0,0,0.67);
	box-shadow: -6px 9px 5px -1px rgba(0,0,0,0.67);
	
	display:grid; 
	grid-gap: 4px 8px;
	grid-template-columns: 2fr 3fr;	
	grid-template-areas:
	'workimage4 worktext4';
	
	
	}
	
.work4:hover {
	
	 -moz-box-shadow:    inset 0 0 10px #000000;
   -webkit-box-shadow: inset 0 0 10px #000000;
   box-shadow:         inset 0 0 10px #000000;
   cursor: pointer;
	
	
	}
	
	#workimage4 {grid-area: workimage4;align-self: center;}
	#worktext4 {grid-area: worktext4;align-self: top;}
	
.work5 {
	grid-area: work5;background-color:#426793;
	align-self: center;padding: 2vh;
	-webkit-box-shadow: -6px 9px 5px -1px rgba(0,0,0,0.67);
	-moz-box-shadow: -6px 9px 5px -1px rgba(0,0,0,0.67);
	box-shadow: -6px 9px 5px -1px rgba(0,0,0,0.67);
	
	display:grid; 
	grid-gap: 4px 8px;
	grid-template-columns: 2fr 3fr;	
	grid-template-areas:
	'workimage5 worktext5';
	
	
	}
	
.work5:hover {
	
	 -moz-box-shadow:    inset 0 0 10px #000000;
   -webkit-box-shadow: inset 0 0 10px #000000;
   box-shadow:         inset 0 0 10px #000000;
   cursor: pointer;
	
	
	}
	
	#workimage5 {grid-area: workimage5;align-self: center;}
	#worktext5 {grid-area: worktext5;align-self: top;}
	
.work6 {
	grid-area: work6;background-color:#426793;
	align-self: center;padding: 2vh;
	-webkit-box-shadow: -6px 9px 5px -1px rgba(0,0,0,0.67);
	-moz-box-shadow: -6px 9px 5px -1px rgba(0,0,0,0.67);
	box-shadow: -6px 9px 5px -1px rgba(0,0,0,0.67);
	
	display:grid; 
	grid-gap: 4px 8px;
	grid-template-columns: 2fr 3fr;	
	grid-template-areas:
	'workimage6 worktext6';
	
	}
	
.work6:hover {
	
	 -moz-box-shadow:    inset 0 0 10px #000000;
   -webkit-box-shadow: inset 0 0 10px #000000;
   box-shadow:         inset 0 0 10px #000000;
   cursor: pointer;
	
	
	}
	
	#workimage6 {grid-area: workimage6;align-self: center;}
	#worktext6 {grid-area: worktext6;align-self: top;}
	
.worktitle {grid-area: worktitle;align-self: center;justify-self: center;}

/* .worklogo {width:35%;height:auto;float:left;}
.worktext {width:65%;float:right;} */

.blackfooter

	{
		
		min-height: 2vh;
		height:auto;
		background-color:#333; 
		color: white;
		text-align: center;
		
		}


</style>


</head>

<body>




<div id="site">
	
    
   
    
	<div id="introduction">
    
    <nav id="navmobile" class="navigation" data-aos="fade-left" data-aos-delay="750">
			<div class="nav-logo"></div>
			<ul class="nav-menu">
				<li><a href="#coding">Coding</a></li>
				<li><a href="#graphicdesign">Design</a></li>
				<li><a href="#database">Database</a></li>
				<li><a href="#contact">Contact</a></li>
			</ul>
			<div class="nav-toggle">
				<span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
			</div>
		</nav>
		<div  class="nav-overlay"></div>
    
   
    	
        <div id="introductioncontent" data-aos="fade-in" ><h1>Hi, I'm Brent</h1><h2>Web Designer</h2><h3>Front-End, Back-End and everything in between</h3></div>
  </div>
    
    <div id="coding">
        <div id="codingimage">
        
        	<div id="Stage" class="EDGE-1794486858">
	
                    <div id="Stage_flexwebsitetext" class="edgeLoad-EDGE-1794486858"></div>
                    <div id="Stage_flexname" class="edgeLoad-EDGE-1794486858"></div>
                    <div id="Stage_flexcomputers" class="edgeLoad-EDGE-1794486858"></div>
                    <div id="Stage_flexcomputers2" class="edgeLoad-EDGE-1794486858"></div>
                    <div id="Stage_flexcomputers3" class="edgeLoad-EDGE-1794486858"></div>
                    <div id="Stage_flexcomputers4" class="edgeLoad-EDGE-1794486858"></div>
                    <div id="Stage_parratext" class="edgeLoad-EDGE-1794486858"></div>
                    <div id="Stage_parraname" class="edgeLoad-EDGE-1794486858"></div>
                    <div id="Stage_parracomputers" class="edgeLoad-EDGE-1794486858"></div>
                    <div id="Stage_gridname" class="edgeLoad-EDGE-1794486858"></div>
                    <div id="Stage_gridcomputers" class="edgeLoad-EDGE-1794486858"></div>
                    <div id="Stage_gridtext" class="edgeLoad-EDGE-1794486858"></div>
                    <div id="Stage_skrollrcomputers" class="edgeLoad-EDGE-1794486858"></div>
                    <div id="Stage_skrollrname" class="edgeLoad-EDGE-1794486858"></div>
                    <div id="Stage_skrollrtext" class="edgeLoad-EDGE-1794486858"></div>
                    
    		</div>
        
        
        
        </div>
        <div id="codingcontent" data-aos="fade-in" ><h2>Coding Skills:</h2><h3>HTML<br><br>CSS<br><br>JavaScript<br><br>PHP</h3></div>
    </div>
    <div id="graphicdesign">
    	<div id="graphicdesignimage">
        
        	<iframe src="https://player.vimeo.com/video/418715398?autoplay=1&loop=1&muted=1&autopause=0"  width="640" height="360" frameborder="0" allow="autoplay;" ></iframe>
        
        </div>
        <div id="graphicdesigncontent" data-aos="fade-in" ><h2>Design Skills:</h2><h3>Photoshop<br><br>Illustrator<br><br>Premiere<br><br>Animate</h3></div>
    </div>
    <div id="database">
    	
        		
        		<div class="loginimage" data-aos="fade-left" ><img src="images/login.png"  alt="Login &amp; Password Accounts"></div>
                <div class="logintext" data-aos="fade-left"><h4>Login & Password<br> Accounts</h4></div>
                <div class="cmsimage" data-aos="fade-left" ><img src="images/cms.png"  alt="Content Management Systems"></div>
                <div class="cmstext" data-aos="fade-left"><h4>Content Management<br> Systems</h4></div>
                <div class="buildimage" data-aos="fade-left" ><img src="images/buildityourself.png"  alt="Login &amp; Password systems"></div>
                <div class="buildtext" data-aos="fade-left" ><h4>Build-It-Yourself<br> Website Platforms</h4></div>
		
        
       
        <div id="databasecontent" data-aos="fade-in" ><h2>Database Skills:</h2><h3>PHP<br><br>MySQLi<br><br>phpMyAdmin<br><br><br><br></h3></div>    
    </div>

	<div id="contact" class="contact">
    
    	<div class="workgrid">
        
        		<div class="worktitle"><h7>Recent Work</h7></div>
         	
                <div  class="work1" data-aos="fade-left" onClick="window.open('https://veteranslegacyoregon.org')" >
                	
                    <div id="workimage1" ><a href="https://veteranslegacyoregon.org" target="_blank"><img src="images/vlologo.png" ></a></div>
                    <div id="worktext1" >
                    	
                        <h5><a href="https://veteranslegacyoregon.org" target="_blank">Veterans Legacy Oregon</a></h5><br>
                        <h6><a href="https://veteranslegacyoregon.org" target="_blank">Non-Profit</a></h6>
					
                    
                    </div>
                
                </div>
                
         
                
                <div class="work2" data-aos="fade-right" onClick="window.open('http://electamandathorpe.com/')">
                
                    <div id="workimage2" ><a href="http://electamandathorpe.com/" target="_blank"><img src="images/amandalogo.jpg" ></a></div>
                    <div id="worktext2" class="worktext">
                    	
                        <h5><a href="http://electamandathorpe.com/" target="_blank">Elect Amanda Thorpe</a></h5><br>
                        <h6><a href="http://electamandathorpe.com/" target="_blank">Campaign</a></h6>
					
                    
                    </div>
                
                </div>
                <div class="work3" data-aos="fade-up" onClick="window.open('http://definingmomentstudios.com/')">
                
                    <div id="workimage3"><a href="http://definingmomentstudios.com/" target="_blank" ><img src="images/dmslogo.jpg" ></a></div>
                    <div id="worktext3" class="worktext">
                    	
                        <h5><a href="http://definingmomentstudios.com/" target="_blank">Defining Moment Studios</a></h5><br>
                        <h6><a href="http://definingmomentstudios.com/" target="_blank">Design</a></h6>
					
                    
                    </div>
                
                </div>
                <div class="work4" data-aos="fade-left" onClick="window.open('http://www.eugenenannyservices.com/')">
                
                    <div id="workimage4"><a href="http://www.eugenenannyservices.com/" target="_blank"><img src="images/nannylogo.jpg" ></a></div>
                    <div id="worktext4" class="worktext">
                    	
                        <h5><a href="http://www.eugenenannyservices.com/" target="_blank">Eugene Nanny Services</a></h5><br>
                        <h6><a href="http://www.eugenenannyservices.com/" target="_blank">Nanny Service</a></h6>
					
                    
                    </div>
                
                </div>
                <div class="work5" data-aos="fade-right" onClick="window.open('http://meadowlarkconstructionllc.com/')">
                
                    <div id="workimage5" ><a href="http://meadowlarkconstructionllc.com/" target="_blank"><img src="images/meadowlogo.jpg" ></a></div>
                    <div id="worktext5" class="worktext">
                    	
                       <h5><a href="http://meadowlarkconstructionllc.com/" target="_blank">Meadowlark Construction</a></h5><br>
                        <h6><a href="http://meadowlarkconstructionllc.com/" target="_blank">Construction</a></h6>
					
                    
                    </div>
                
                </div>
                <div  class="work6" data-aos="fade-up" onClick="window.open('http://homes4ducks.com/')">
                
                    <div id="workimage6"><a href="http://homes4ducks.com/"target="_blank" ><img src="images/homes4duckslogo.jpg" ></a></div>
                    <div id="worktext6" class="worktext">
                    	
                        <h5><a href="http://homes4ducks.com/" target="_blank">Homes 4 Ducks</a></h5><br>
                        <h6><a href="http://homes4ducks.com/" target="_blank">Real Estate</a></h6>
					
                    
                    </div>
                
               
        	</div>
        
        </div>
        <div class="contactbrent" data-aos="fade-in" >
        
       	  <h1>Contact</h1><br><br>
          <img src="images/brentballoch.png" width="222" height="221" alt="Jonathan Brent Balloch">
          <br>
          <br>
          <h8><a href="mailto:dpbuckwald@veteranslegacyoregon.org" >Jbballoch@gmail.com</a><br>
          <a href="https://www.linkedin.com/in/brentballoch/" >LinkedIn</a></h8>
		</div>
    
    </div>
    
    <div class="blackfooter" >
    
    	
    
    </div>





</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>

	$('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
      && 
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000, function() {
          // Callback after animation
          // Must change focus!
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            $target.focus(); // Set focus again
          };
        });
      }
    }
  });

</script>


<script>

(function($){
    $('.nav-toggle').click(function(e){
        e.preventDefault();
        $('.nav-toggle').toggleClass('active');
        $('.nav-menu').toggleClass('active');
        $('.nav-overlay').toggleClass('active');
    })
    $('.nav-overlay').click(function(e){
        e.preventDefault();
        $('.nav-toggle').toggleClass('active');
        $('.nav-menu').toggleClass('active');
        $('.nav-overlay').toggleClass('active');
    })
})(jQuery);

</script>


<script>

AOS.init({
  duration: 1200,
})

</script>
</body>
</html>
