<?php
ob_start();
 include('includes/inbody.php'); ?>
<?php include('includes/header.php'); ?>
<section class="slider_area">
   <div class="inner_center" style="position:relative;">
    <div class="flexslider">
       <ul id="flexiselDemo1" class="slides">
        <li> 
           <!--======Start Slide1======-->
           <div class="slide_box"> <img src="images/slider/img01.jpg" alt="" />
            <div class="slide_contant_new">
               <div class="slide_text">Solids Yarn Dyed, Dobby and Jacquards</div>
             </div>
          </div>
           <!--======End Slide1======--> 
           
         </li>
        <li> 
           <!--======Start Slide2======-->
           <div class="slide_box"> <img src="images/slider/img02.jpg" alt="" />
            <div class="slide_contant_new">
               <div class="slide_text">Luxurious, High Quality Terry Towels</div>
             </div>
          </div>
           <!--======End Slide2======--> 
           
         </li>
        <li> 
           <!--======Start Slide3======-->
           <div class="slide_box"> <img src="images/slider/img03.jpg" alt="" />
            <div class="slide_contant_new">
               <div class="slide_text">Multitude of Colors, Patterns, Prints & Textures</div>
             </div>
          </div>
           <!--======End Slide3======--> 
         </li>
        <li> 
           <!--======Start Slide4======-->
           <div class="slide_box"> <img src="images/slider/img04.jpg" alt="" />
            <div class="slide_contant_new">
               <div class="slide_text">Pre-washed, Lint Free, Highly Absorbent, Long Lasting</div>
             </div>
          </div>
           <!--======End Slide4======--> 
         </li>
      </ul>
     </div>
  </div>
 </section>
 <div class="clear"></div>
<section class="inner_center">
   <section class="home_cont_area">
    <div class="home_cont_left">
       <div class="home_cont_box">
        <h2 class="page-sub-heading"><a href="product-range.php">Products</a></h2>
        <div class="home_cont_img"><a href="product-range.php"><img src="images/products.jpg" alt="" /></a></div>
        <div class="home_cont">Entire range of bath essentials, bath category product range.</div>
      </div><div class="home_cont_box">
        <h2 class="page-sub-heading"><a href="infrastructure.php">Technology</a></h2>
        <div class="home_cont_img"><a href="infrastructure.php"><img src="images/technology.jpg" alt="" /></a></div>
        <div class="home_cont">World's latest 24 looms with modern soft flow dyeing.</div>
      </div>
       <div class="home_cont_box omaga">
        <h2 class="page-sub-heading"><a href="clients.php">Clients</a></h2>
        <div class="home_cont_img"><a href="clients.php"><img src="images/clients.jpg" alt="" /></a></div>
        <div class="home_cont">Some of the biggest brands in Retail industry & Lifestyle products.</div>
      </div>
       
       <div class="home_euro_coll">
        <?php include('includes/euro-collections.php'); ?>
      </div>
     </div>
    <section class="home_cont_right">
      <?php include('includes/trade-inquiry.php'); ?>
     </section>
  </section>
 </section>
<?php include('includes/footer.php'); ?>
<script type="text/javascript" language="javascript">
$('#menu1').addClass('selmenu');
</script>
