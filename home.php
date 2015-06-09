<html>
<head>
<title>Indian Institute of Logistics</title>
<style type="text/css">
@import url("/iil_style.css");

</style>

<!--SEO-->
<meta name="description" content="Logistics, School, MBA, Courses, Careers in logistics,courses,training, Placement Cell, Industrial support, MBA in chennai, Bharathiar University,Logistics and Shipping, Work in Dubai, Study abroad, Logistics in india">
<!--SEO-->
<style type="text/css">
/*
ple CSS for the two demo scrollers*/

#pscroller1
width: 200px;
height: 100px;
border: 1px solid d8d8d8;
padding: 5px;
background-color: lightyellow;

}

#pscroller2{
width: 600px;
height: 50px;
border-color:#d8d8d8; border-style:solid double; border-width:1px;
padding: 8px; font-size:14px; font-weight:bold; color:blue; background-color:#f8f8f8;
}

#pscroller2 a{
text-decoration: none;
}

.someclass{ //class to apply to your scroller(s) if desired
}
</style>
<style type="text/css">
a:link {
	color: #A90202;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #A90202;
}
a:hover {
	text-decoration: none;
	color: #A90202;
}
a:active {
	text-decoration: none;
	color: #A90202;
}

</style>

   <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js" ></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script src="dist/js/bootstrap-submenu.min.js" ></script>
     <link rel="stylesheet" href="css/bootstrap-submenu.css"/>
<script type="text/javascript">
function pausescroller(content, divId, divClass, delay){
this.content=content //message array content
this.tickerid=divId //ID of ticker div to display information
this.delay=delay //Delay between msg change, in miliseconds.
this.mouseoverBol=0 //Boolean to indicate whether mouse is currently over scroller (and pause it if it is)
this.hiddendivpointer=1 //index of message array for hidden div
document.write('<div id="'+divId+'" class="'+divClass+'" style="position: relative; overflow: hidden"><div class="innerDiv" style="position: absolute; width: 100%" id="'+divId+'1">'+content[0]+'</div><div class="innerDiv" style="position: absolute; width: 100%; visibility: hidden" id="'+divId+'2">'+content[1]+'</div></div>')
var scrollerinstance=this
if (window.addEventListener) //run onload in DOM2 browsers
window.addEventListener("load", function(){scrollerinstance.initialize()}, false)
else if (window.attachEvent) //run onload in IE5.5+
window.attachEvent("onload", function(){scrollerinstance.initialize()})
else if (document.getElementById) //if legacy DOM browsers, just start scroller after 0.5 sec
set

out(function(){scrollerinstance.initialize()}, 500)
}

// -------------------------------------------------------------------
// initialize()- Initialize scroller method.
// -Get div objects, set initial positions, start up down animation
// -------------------------------------------------------------------

pausescroller.prototype.initialize=function(){
this.tickerdiv=document.getElementById(this.tickerid)
this.visiblediv=document.getElementById(this.tickerid+"1")
this.hiddendiv=document.getElementById(this.tickerid+"2")
this.visibledivtop=parseInt(pausescroller.getCSSpadding(this.tickerdiv))
//set width of inner DIVs to outer DIV's width minus padding (padding assumed to be top padding x 2)
this.visiblediv.style.width=this.hiddendiv.style.width=this.tickerdiv.offsetWidth-(this.visibledivtop*2)+"px"
this.getinline(this.visiblediv, this.hiddendiv)
this.hiddendiv.style.visibility="visible"
var scrollerinstance=this
document.getElementById(this.tickerid).onmouseover=function(){scrollerinstance.mouseoverBol=1}
document.getElementById(this.tickerid).onmouseout=function(){scrollerinstance.mouseoverBol=0}
if (window.attachEvent) //Clean up loose references in IE
window.attachEvent("onunload", function(){scrollerinstance.tickerdiv.onmouseover=scrollerinstance.tickerdiv.onmouseout=null})
set
out(function(){scrollerinstance.animateup()}, this.delay)
}


// -------------------------------------------------------------------
// animateup()- Move the two inner divs of the scroller up and in sync
// -------------------------------------------------------------------

pausescroller.prototype.animateup=function(){
var scrollerinstance=this
if (parseInt(this.hiddendiv.style.top)>(this.visibledivtop+5)){
this.visiblediv.style.top=parseInt(this.visiblediv.style.top)-5+"px"
this.hiddendiv.style.top=parseInt(this.hiddendiv.style.top)-5+"px"
setTimeout(function(){scrollerinstance.animateup()}, 50)
}
else{
this.getinline(this.hiddendiv, this.visiblediv)
this.swapdivs()
setTimeout(function(){scrollerinstance.setmessage()}, this.delay)
}
}

// -------------------------------------------------------------------
// swapdivs()- Swap between which is the visible and which is the hidden div
// -------------------------------------------------------------------

pausescroller.prototype.swapdivs=function(){
var tempcontainer=this.visiblediv
this.visiblediv=this.hiddendiv
this.hiddendiv=tempcontainer
}

pausescroller.prototype.getinline=function(div1, div2){
div1.style.top=this.visibledivtop+"px"
div2.style.top=Math.max(div1.parentNode.offsetHeight, div1.offsetHeight)+"px"
}

// -------------------------------------------------------------------
// setmessage()- Populate the hidden div with the next message before it's visible
// -------------------------------------------------------------------

pausescroller.prototype.setmessage=function(){
var scrollerinstance=this
if (this.mouseoverBol==1) //if mouse is currently over scoller, do nothing (pause it)
setTimeout(function(){scrollerinstance.setmessage()}, 100)
else{
var i=this.hiddendivpointer
var ceiling=this.content.length
this.hiddendivpointer=(i+1>ceiling-1)? 0 : i+1
this.hiddendiv.innerHTML=this.content[this.hiddendivpointer]
this.animateup()
}
}

pausescroller.getCSSpadding=function(tickerobj){ //get CSS padding value, if any
if (tickerobj.currentStyle)
return tickerobj.currentStyle["paddingTop"]
else if (window.getComputedStyle) //if DOM2
return window.getComputedStyle(tickerobj, "").getPropertyValue("padding-top")
else
return 0
}

</script>

        <script src="/admins/js/jquery-1.2.6.pack.js" type="text/javascript"></script>
		<script src="/admins/js/jquery.color.js" type="text/javascript"></script>
		<script src="/admins/js/thickbox.js" type="text/javascript"></script>		
		<link href="/admins/css/thickbox.css" rel="stylesheet" type="text/css" media="screen" />
		

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script>
$(function(){
	$('.fadein img:gt(0)').hide();
	setInterval(function(){$('.fadein :first-child').fadeOut().next('img').fadeIn().end().appendTo('.fadein');}, 4000);
});
</script>

		
<!--Google Analytics-->		
		
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
 ga('create', 'UA-41331608-1', 'iilschennai.com');
  ga('send', 'pageview');
</script>
			
<!--Google Analytics-->	


<style>
body {font-family:Arial, Helvetica, sans-serif; font-size:12px;}
 
.fadein { 
position:relative;  margin:0 auto;
background: url("slideshow-bg.png") repeat-x scroll left top transparent;
padding: 10px;
 }
.fadein img { position:absolute; left:10px; top:10px; }
</style>
		
		
</head>

<body>
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="mainpage">
            	<div class="header">
                	<?php 
						include("header.php"); 
					?>
                </div>
            </div>
		</div>
	</div>

    	<div class="row">
        
        	<div class="col-lg-3 col-md-3 hidden-sm hidden-xs">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="images/capt.png" alt="">
      </div>

      <div class="item">
        <img src="images/capt2.png" alt="">
      </div>
    </div>

    <!-- Left and right controls -->
   
  </div>
</div>  
            <div class="col-lg-5 col-md-5 hidden-sm hidden-xs">
                <div class="content">
                    <label>Indian Institute of Logistics</label><br>
                    <div class="para">
                    <p>Indian Institute of Logistics is a Centre of Excellence in 
                Logistics & Shipping in the country and overseas in future.</p>
                    <p>Indian Institute of Logistics has been established as a 
                specialized Institute of Logistics - to be built as a Centre of Excellence in Logistics and Shipping 
                in the country and abroad in due course of time.</p>
                </div>
                </div>  
            </div>
            
            <div class="col-lg-4 col-md-4 hidden-sm hidden-xs">
            	<div class="award">
                    <img src="images/ASSOCHAM Award.JPG" width="385"  height="255" >
				</div>   
            </div>
            
        </div>
<div class="row">
        
        	<div class="col-sm-12 col-xs-12 hidden-lg hidden-md">
            	 <div id="myCarousel1" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="images/capt.png" alt="" >
      </div>

      <div class="item">
        <img src="images/capt2.png" alt="">
      </div>
    </div>

    <!-- Left and right controls -->
   
  </div>
            </div>
            
            <div class="col-sm-12 col-xs-12 hidden-lg hidden-md">
                <div class="content1">
                	<label>Indian Institute of Logistics</label>
                   <div class="para">
                    <p>Indian Institute of Logistics is a Centre of Excellence in 
                Logistics & Shipping in the country and overseas in future.</p>
                    <p>Indian Institute of Logistics has been established as a 
                specialized Institute of Logistics - to be built as a Centre of Excellence in Logistics and Shipping 
                in the country and abroad in due course of time.</p>
                </div>
                </div>  
            </div>
            
            <div class="col-sm-12 col-xs-12 hidden-lg hidden-md">
            	<div class="award">
                    <img src="images/ASSOCHAM Award.JPG" width="385"  height="255" class="img-responsive">
				</div>   
            </div>
            
        </div>
            <br>

        	<div class="row">
            	<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                	<div class="newscroller">
                    	<div class="newsheader">
                        	<label>News Room</label>
                        </div>
                        <marquee  behavior="scroll" direction="up" scrollamount="3"  onMouseOver="this.stop();" onMouseOut="this.start();" style="height=403px";> 
                        <div class="newcontent">
                        	<strong><span class="txt_link"><img src="images/image001.gif" border="0"><font color="black">Indian Institute of Logistics Introduces New UG Courses B.Com (Logistics and Shipping) & B.Sc (IT and Logistics)</font></span></strong><hr>
                            
                            <strong><span class="txt_link"><img src="images/image001.gif" border="0"><font color="black">Bharathiar University Approval for New UG Courses B.Com (Logistics and Shipping) & B.Sc (IT and Logistics)</font></span></strong><hr>
                            
                            <a  href="/news/GULF.png" target="_blank"><strong><span class="txt_link"><img src="images/image001.gif" border="0"><font color="black">Students Sent to Dubai / UAE Region for UNPAID Internships</font></span></a></strong><hr>
                            
                            <a  href="/news/Internship 1.png" target="_blank"><strong><span class="txt_link"><font color="black">Internship Location Wise - 2014 </font></span></strong></a> <hr>
                            
                            <a  href="/news/GraduationCeremonyFeb2015_E-Invite.pdf" target="_blank"><strong><span class="txt_link"><font color="black">6th Graduation Ceremony - 3rd February 2015</font></span></strong></a><hr>
                            
                            <strong><span class="txt_link"><font color="black">Celebrating 1000+ MoU's Signed across PAN India </font></span></strong></a><hr>
                            
                            <a  href="/news/Standard Operating Procedure - Courese Conversion.docx" target="_blank"><span class="txt_link"><strong><font color="black">Course Conversion Process</font></strong></span></a>  <hr>
                            
                            <a  href="/news/Standard Operating Procedure for receiving the Bonafide Certificate from IIL.docx" target="_blank"><strong><span class="txt_link"><font color="black">Process for receiving the Bonafide Certificate</font></strong></span></a> <hr>
                          
                        </div>
                        </marquee>
                    </div>
                </div> 
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                	<div class="video">
                    	
                			<div class="heading">
                            <label>Brochures</label>
                            </div>
                            
                            	<div class="brochure">
                				<span class="glyphicon glyphicon-download-alt"></span> <a href="#" target="_blank" class="txt_link">MBA (Logistics & Shipping)</a><br>
                            	</div>
               				 	<div class="brochure">
                             		<span class="glyphicon glyphicon-download-alt"></span> <a href="#" target="_blank" class="txt_link">BBA (Logistics & Shipping)</a><br> 
                              	</div>          			
                			 	<div class="brochure">
                             		<span class="glyphicon glyphicon-download-alt"></span> <a href="#" target="_blank" class="txt_link">B.Com (Logistics & Shipping)</a><br>
                             	</div>
                           	 	<div class="brochure"> 
                           			<span class="glyphicon glyphicon-download-alt"></span> <a href="#" target="_blank" class="txt_link">B.Sc (IT & Logistics)  </a>
                				</div>
                        <br>
                        <div class="heading">
                         <label>Videos</label>
                        </div>
						<div class="embed-responsive embed-responsive-16by9" style="margin-top:7px">
                  			<iframe width="560" height="315" src="https://www.youtube.com/embed/D1aQsk9TFjQ" frameborder="0" allowfullscreen>											</iframe>
             			</div> 
                        <div class="head-bottom">
                         <label><a href="#">View More</a></label>
                        </div>
               </div>
                </div>
                 	<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                 		 <div class="heading">
                         <label>Application</label>
                        </div>
                         
                        <div class="brochure"> 
                           			<span class="glyphicon glyphicon-download-alt"></span> <a href="arrearform.pdf" class="sub_head">Arrear Application Form </a>
                				</div>
                       <br><br>
                        <div class="heading">
                         <label>Application</label>
                        </div>
                        <div class="awardscr">
                        	 <marquee behavior="scroll" direction="up" scrollamount="5" onmouseover="this.stop();" onmouseout="this.start()" ;="" style="height: 366px;margin-left: -25px;"> 
                        	<img src="images/1.png"><br>
                            <img src="images/2.png" width="490" ><br>
                            <img src="images/3.png" width="490" ><br>
                            <img src="images/4.png" width="490" ><br>
                            <img src="images/5.png" width="490" >
                            </marquee>
                        </div>
            		</div>
                    
                    
            </div>
            <br>
       <!--Park-->
  <div class="row">
	<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">            
		<div class="park">
    		<img src="images/calicut.jpg"  width="800" height="355" class="img-responsive">
    	</div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" >
    	<div class="parkcontent">
    	<p>IIL has acquired 10,000 sft of land at  Kacheripadi. This planned acquisition is done for developing India's First Logistics Knowledge Park and future proposed University for Logistics, probably first University in the world for Logistics Education & Training</p>
        </div>
    </div>
     <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"></div>
     
	</div>             

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    	<?php 
		include('footer.php');
		 ?>
    </div>
</div>
                
             
</body>
</html>