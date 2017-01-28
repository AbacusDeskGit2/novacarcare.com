
  
  <header class="clearfix">
     <section class="toolbar">
         <div class="container">
             <div class="row">
                 <div class="col-lg-6 left_bar">
                 </div>
                 <div class="col-lg-6" style="width:100% !important;">
                     <ul class="right-none pull-right company_info">
       <li><a href="#"><i class="fa fa-phone"></i>+91-9811006891</a></li>
       <li class="address"><a href="#"><i class="fa fa-map-marker"></i>Address: 5 D / 21, Ground Floor, Back Portion NIT, Faridabad-121001 Haryana INDIA)</a></li>
                     </ul>
                 </div>
             </div>
         </div>         
         <div class="toolbar_shadow"></div>
     </section>
     
     
     
     <div class="bottom-header">
         <div class="container" >
             <nav class="navbar navbar-default" role="navigation">
                 <div class="container-fluid"> 
                     <div class="navbar-header" style="position:relative !important;">
                         <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                         <span class="sr-only">Toggle navigation </span>
                         <span class="icon-bar"></span>
                         <span class="icon-bar"></span>
                         <span class="icon-bar"></span>
                         </button>
                         <a class="navbar-brand" href="index.html">
                         <span class="logo"><img src="images/logo.gif" style="height:88px !important; width:143px !important;"></span>
                         </a>
                     </div>
                    
                     <!-- Collect the nav links, forms, and other content for toggling -->

                    
                     <!-- Collect the nav links, forms, and other content for toggling -->
                     <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                         <ul class="nav navbar-nav pull-right">
                             <li <?php if($id =='home'){ ?>class="active"<?php }  ?> ><a href="index.php?page_id=home">Home</a></li>
                             <li <?php if($id =='about'){ ?>class="active"<?php } ?> ><a href="about.php?page_id=about">About Us</a></li>
                             <li class="dropdown"><a >Products<b class="caret"></b></a>
                             <ul class="dropdown-menu">
                                  <li><a href="car_care_interior_range.php?page_id=product">Car Care Interior Range</a></li>
                                  <li><a href="car_care_exterior_range.php?page_id=product">Car Care Exterior Range</a></li>
<!--                                  <li><a href="#?page_id=product">Industrial Cleaners</a></li>
                                  <li><a href="#?page_id=product">Domestic Cleaners</a></li>
                                  <li><a href="#?page_id=product">Tyre Shine</a></li>
-->                             </ul>
                             </li>
							 <li <?php if($id =='video'){ ?>class="active"<?php } ?> ><a href="video.php?page_id=video">Video</a></li>
                             <li <?php if($id =='faq'){ ?> class="active"<?php } ?> ><a href="faq.php?page_id=faq">Faq</a></li>
                             <li <?php if($id =='contact'){ ?>class="active"<?php } ?> ><a href="contact.php?page_id=contact">Contact us</a></li>
                         </ul>
                     </div>
                     <!-- /.navbar-collapse --> 
                 </div>
                 <!-- /.container-fluid --> 
             </nav>
         </div>
         <div class="header_shadow"></div>
     </div>
 </header>
