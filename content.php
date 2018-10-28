<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

function get_custom_field($field_name){
  return get_post_meta(get_the_ID(),$field_name,true);
}

?>

<div class="container-fluid">
<!-- Portfolio Item Row -->
  <div class="row">
    <div class="col-sm-7 col-md-7">
        <div class="slideshow-container">
          <?php $attachments = new Attachments( 'attachments' );  ?>
			    <?php if( $attachments->exist() ) : ?>
			    <?php while( $attachments->get() ) : ?>
			   	<div class="mySlides">
          			<img style="width: 100%; height: 500px" src="<?php echo $attachments->url(); ?>" alt="" >
          </div>
			    <?php endwhile; ?>
		      <?php endif; ?>

          <div class="mySlides">
            <!-- <div class="numbertext">3 / 3</div> -->
            <img class="img-fluid" src="http://placehold.it/750x500" alt="">
           <!--  <div class="text">Caption Three</div> -->
          </div>
          <div class="row row-eq-height justify-content-end d-none d-md-flex bottom-nav-bar" >
                <div class="col">
                  <div class="row">
	                  <a href="mailto:tmtstudio@yahoo.com">
                    <img src="<?php echo get_template_directory_uri() ?>/images/gmail_icon.png" style="height: 30px; width: 35px; padding: 5px;">
                    </a>
                    <a  href="https://www.facebook.com/TMTStudio-501644246569297/?ref=br_rs">
                    <img src="<?php echo get_template_directory_uri() ?>/images/facebook_icon.png" style="height: 30px; width: 35px; padding: 5px;">
                    </a>

	                  <div style="padding-left: 10px; font-family: arial">
	                	   <p> 20 | 20000 </p>
	                  </div>
              	  </div>
                </div>

                
                <div class="col-auto" style="height: 20px">
                  <img onclick="plusSlides(-1)" src="<?php echo get_template_directory_uri() ?>/images/arrow.png" class="left-arrow">
                  <img onclick="plusSlides(1)" src="<?php echo get_template_directory_uri() ?>/images/arrow.png" class="right-arrow">
                </div>
          </div>

          <div class="row row-eq-height justify-content-end d-md-none" style="height:50px; padding-left: 0px; padding-right: 0px; padding-top: 10px;" >
                <div class="col-12" style="height: 20px">
                  <img onclick="plusSlides(-1)" src="<?php echo get_template_directory_uri() ?>/images/arrow.png" class="left-arrow-mobile">
                  <img onclick="plusSlides(1)" src="<?php echo get_template_directory_uri() ?>/images/arrow.png" class="right-arrow-mobile">
                </div>
          </div>
      </div>
        <!-- <br>
        <div style="text-align:center">
          <span class="dot" onclick="currentSlide(1)"></span> 
          <span class="dot" onclick="currentSlide(2)"></span> 
          <span class="dot" onclick="currentSlide(3)"></span> 
        </div> -->

        <script>
            var slideIndex = 1;
            showSlides(slideIndex);

            function plusSlides(n) {
              console.log("A " + n)
              showSlides(slideIndex += n);
            }

            function currentSlide(n) {
              showSlides(slideIndex = n);
            }

            function showSlides(n) {
              var i;
              var slides = document.getElementsByClassName("mySlides");
              var dots = document.getElementsByClassName("dot");
              if (n > slides.length) {slideIndex = 1}    
              if (n < 1) {slideIndex = slides.length}
              for (i = 0; i < slides.length; i++) {
                  slides[i].style.display = "none";  
              }
              for (i = 0; i < dots.length; i++) {
                  dots[i].className = dots[i].className.replace(" active", "");
              }
              slides[slideIndex-1].style.display = "block";  
              dots[slideIndex-1].className += " active";
            }
         </script>
    </div>

    <!-- List Item -->
    <div class="col-sm-5 col-md-5 style-1" id="left-side-content" style="overflow-y: auto;">
      <div class="side-image d-none d-md-flex" style="float: right; max-height: 200px; object-fit: scale-down;" >
        <img src="<?php echo the_post_thumbnail_url(); ?>" style="max-width: 300px; float:right;">
    </div>
      <a href="<?php the_permalink(); ?>">
	      <h4><?php the_title(); ?></h4>
	      </a>
	      <div>
	      	<p style="margin: 2px"><?php echo get_custom_field('address') ?></p>
	      	<p style="margin: 2px"><?php echo get_custom_field('year') ?></p>
	  	  </div>
	  <div> <!-- the content -->
	  	<br/>
      	<?php the_content() ?>
      </div> <!-- .the-content -->
      </div>
    </div>
  <!-- /.row -->
  </div>
</div>
<!-- /.container -->
</div>