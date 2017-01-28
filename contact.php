<!doctype html>
 <html lang="en">
 <head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <meta charset="utf-8" />
 <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
 <meta name="description" content="" />
 <meta name="author" content="" />
 <link rel="shortcut icon" href="images/favicon.ico" />
 <title>NOVA Car Care</title>
 <!-- Bootstrap core CSS -->
 <link href="css/bootstrap.min.css" rel="stylesheet" />

 <link rel="stylesheet" type="text/css" href="../../fonts.googleapis.com/css_7583dcb8.css" media="screen" />
 <!-- Custom styles for this template -->
 <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
 <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
 <link rel="stylesheet" href="css/jquery.bxslider.css" type="text/css" media="screen" />
 <link href="css/jquery.fancybox.css" rel="stylesheet" />
 <link href="css/jquery.selectbox.css" rel="stylesheet" />
 <link href="css/style.css" rel="stylesheet" />
 <link href="css/mobile.css" rel="stylesheet" />
 <link rel="stylesheet" type="text/css" href="css/settings.css" media="screen" />
 <link href="css/animate.min.css" rel="stylesheet" />
 <link href="css/ts.css" type="text/css" rel="stylesheet" />
 <script type="text/javascript" src="js/jquery.min.js"></script>
 <script src="js/bootstrap.min.js"></script>
 <script type="text/javascript" src="js/jquery.themepunch.tools.min.js"></script>
 <script type="text/javascript" src="js/jquery.themepunch.revolution.min.js"></script>
 <script type="text/javascript" src="js/wow.min.js"></script>
 <script type="text/javascript" src="../../maps.googleapis.com/maps/api/js_3773482b.js"></script>

<script language="JavaScript1.2">
var testresults
function checkemail(str1,email){
var str=str1;
var filter=/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i
if (filter.test(str))
testresults=true
else{
alert("Please input a valid email address!")
document.getElementById(email).value='';
email.focus();
testresults=false
}
return (testresults)
}
</script>

<script>
function checkbae(){
if (document.layers||document.getElementById||document.all)
return checkemail()
else
return true
}

<!-- //------------------------------------------------// !-->
</script>	  

 </head>

 <body>
 
 <!--Header Start-->
<?php
$id = $_GET['page_id'];
include("header.php");
?> 
 </header>

 <!--Header End-->
  <div class="clearfix"></div>
 <section class="banner-wrap">
     <div class="banner">
         <div class="tp-banner-container">
             <div class="tp-banner">
                 <ul>
                     
                     <li data-transition="fade" data-slotamount="5" data-masterspeed="700"> 
                         <!-- MAIN IMAGE --> 
                         <img src="images/contact_us_banner.jpg" alt="contact_us_banner" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" /> 

                         <!-- LAYER  -->                         
                     </li>
  
                 </ul>
             </div>
         </div>
         <script type="text/javascript">

				var revapi;

				jQuery(document).ready(function() {

					   revapi = jQuery('.tp-banner').revolution(
						{
							delay:8000,
							startwidth:2000,
							startheight:645,
							hideThumbs:10,
							fullWidth:"off",
							fullScreen:"off",
							fullScreenOffsetContainer: "",
							hideTimerBar: "on",
							navigationType:"none",
							stopAtSlide:0

						});

				});	

			</script> 
        
        
        
     </div>
 </section>
 
  <div class="message-shadow"></div>
 <div class="clearfix"></div>
 <section class="content">
     <div class="container">
         <div class="inner-page">
             <div class="col-md-12 padding-none"> 
                 <!--MAP-->
                 <div class="find_map row clearfix">
                     <h2 class="margin-bottom-10 margin-top-none">Find us on the Map</h2>
                     <div class="map margin-vertical-10">
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script><div style="overflow:hidden;height:385px;width:1165px;"><div id="gmap_canvas" style="height:385px;width:1165px;"></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style><a class="google-map-code" href="http://www.trivoo.net/gutscheine/" id="get-map-data">gutschein</a></div><script type="text/javascript"> function init_map(){var myOptions = {zoom:13,center:new google.maps.LatLng(28.384764,77.30372299999999),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(28.384764, 77.30372299999999)});infowindow = new google.maps.InfoWindow({content:"<b>NOVA CAR CARE</b><br/>Address: 5 D / 21, Ground Floor, Back Portion NIT,<br/>Faridabad 121001 Haryana INDIA)" });google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>                     </div>
                 </div>
                 <!--MAP--> 
                 <!--CONTACT INFORMATION-->
                 <div class="row contacts margin-top-25"> 

                     <div class="col-md-6 left-information">
                         <div class="contact_information information_head clearfix">
                             <h3 class="margin-bottom-25 margin-top-none">Contact Information</h3>
                             <div class="address clearfix margin-right-25 padding-bottom-40">
                                 <div class="icon_address">
                                     <p><i class="fa fa-map-marker"></i><strong>Address: </strong></p>
                                 </div>
                                 <div class="contact_address">
                                     <p class="margin-bottom-none">Nova Car Care <br />
                                        5 D / 21, Ground Floor, Back Portion NIT<br />
                                        Faridabad 121001  <br />
                                        Haryana (INDIA)</p>
                                 </div>
                             </div>
                             <div class="address clearfix address_details margin-right-25 padding-bottom-40">
                                 <ul class="margin-bottom-none">
                                     <li><i class="fa fa-phone"></i><strong>&nbsp;Helpline: </strong>  <span>+91-9811006891 </span></li>
                                     <li><i class="fa fa-envelope-o"></i><strong>Email: </strong>  <a href="mailto:sales@company.com">novacarcareprd@gmail.com </a></li>
                                     <li class="padding-bottom-none"><i class="fa fa-laptop"></i><strong>Web: </strong>  <a href="http://www.novacarcare.com">www.novacarcare.com</a></li>
                                 </ul>
                             </div>
                         </div>
                         
                     </div>
                    

                     <div class="col-md-5 col-lg-offset-1 col-md-offset-1 padding-right-none xs-padding-left-none sm-padding-left-none xs-margin-top-30">
                         <div class="contact_wrapper information_head">
                             <h3 class="margin-bottom-25 margin-top-none">Contact Form</h3>
                             <div class="form_contact margin-bottom-20">
                                 <div id="result"></div>
                           
                                 <fieldset id="contact_form">
                                 <form method="post">
                                     <input type="text" name="name" class="form-control margin-bottom-15" placeholder="Name" required />
                                     <input type="email" name="email" class="form-control margin-bottom-15" placeholder="Email" required
                                     onchange="checkemail(this.value,this.id)" id="mail" />
                                     <input type="text" name="subject" class="form-control margin-bottom-15" placeholder="subject" required />
                                     <textarea name="msg" class="form-control margin-bottom-15 contact_textarea"
                                     placeholder="Your message" rows="7" required ></textarea>
                                     <input id="submit_btn" type="submit" value="Send Message" name="submit" />
                                   </form>
                                 </fieldset>
                                <?php
								if(isset($_POST['submit']))
								{
									$name = $_POST['name'];
									$email = $_POST['email'];
									$subject = $_POST['subject'];
									$msg = $_POST['msg'];
									
									
$txt = '<table align=left cellpadding=5px bgcolor=#CCC cellspacing=0px border=.5px width=700px><tr><td>';
$txt.= '<strong>Name</strong></td><td>:</td><td>'.$name.'</td></tr>';
$txt.= '<tr><td><strong>Email Id</strong> 		</td><td>	:</td><td>'.$email.'</td></tr>';
$txt.= '<tr><td><strong>Subject</strong> 		</td><td>	:</td><td>'.$subject.'</td></tr>';
$txt.= '<tr><td><strong>Message</strong>		</td><td>	:</td><td>'.$msg.'</td></tr></table>';

//-------------------------------------------------------------------

$txt = wordwrap($txt,70,"\r\n");
//-------------------------------------------------------------------


$to = "info@carcare.com";
$subject = "Enquiry from Website";
$headers = "From: ".$email;
$headers .= "Enquiry From Website Contact\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html\r\n";
	if(mail($to,$subject,$txt,$headers))
	{
		?>
        <script language="javascript">
		window.alert('your Message sent Successfully');
		</script>
        <?php
	}
}
?>
                             </div>
                         </div>
                     </div>
                    
                 </div>
                
             </div>
             <div class="clearfix"></div>
         </div>
     </div>

 </section>
 <!--content ends-->
 <div class="clearfix"></div>
 <div class="back_to_top">  <img src="images/arrow-up.png" alt="scroll up" />  </div>

 <!--Footer Start-->
<div class="clearfix"></div>
 <section class="copyright-wrap padding-bottom-10">
     <div class="container">
         <div class="row">
             <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                 <div class="logo-footer margin-bottom-20 md-margin-bottom-20 sm-margin-bottom-10 xs-margin-bottom-20"><a href="#">
                 <img src="images/logo.gif"  style="height:88px !important; width:143px !important;">
                 </a>
                 </div>

             </div>
             <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                 <ul class="social margin-bottom-25 md-margin-bottom-25 sm-margin-bottom-20 xs-margin-bottom-20 xs-padding-top-10 clearfix">
                     <li><a class="sc-1" href="#"></a></li>
                     <li><a class="sc-2" href="#"></a></li>
                     <li><a class="sc-3" href="#"></a></li>
                     <li><a class="sc-5" href="#"></a></li>
<!--                 <li><a class="sc-4" href="#"></a></li>
                     <li><a class="sc-6" href="#"></a></li>
                     <li><a class="sc-7" href="#"></a></li>
                     <li><a class="sc-8" href="#"></a></li>
                     <li><a class="sc-9" href="#"></a></li>
                     <li><a class="sc-10" href="#"></a></li>-->                     
                 </ul>
             </div>
         </div>
     </div>
 </section>
 <div class="back_to_top">  <img src="images/arrow-up.png" alt="scroll up" />  </div>
 <script src="js/retina.js"></script> 
 <script src="js/main.js"></script> 
 <script type="text/javascript" src="js/jquery.fancybox.js"></script> 
 <script src="js/modernizr.custom.js"></script> 
 <!-- jQuery --> 

 
 <!-- FlexSlider --> 
 <script defer src="js/jquery.flexslider.js"></script> 
 <script src="js/jquery.bxslider.js" type="text/javascript"></script> 
 <script src="js/jquery.selectbox-0.2.js" type="text/javascript"></script> 
 <script type="text/javascript" src="js/jquery.mousewheel.js"></script> 
 <script type="text/javascript" src="js/jquery.easing.js"></script>
 </body>
 </html>