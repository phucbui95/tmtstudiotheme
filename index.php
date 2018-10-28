<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

function get_custom_field($field_name){
	return get_post_meta(get_the_ID(),$field_name,true);
}

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" role="main">
			 <!-- Page Content -->
      <!-- Portfolio Item Heading -->
      <!-- Portfolio Item Row -->
      <div class="row row-eq-height" style="overflow-y: hidden;">
        <div class="col-12 col-md-7 d-none d-md-block image_left left-slider">
        	<div class="row">
	            <div class="slideshow-container" style="margin-left: 15px; width: 100%; ">
	            	<?php
			        	
				        global $post;
				        $args = array( 'numberposts' => 5, 'offset'=> 1, 'category_name' => '' );
				        $myposts = get_posts( $args );
				        foreach( $myposts as $post ) :  setup_postdata($post); 
			        ?>
	                <a href="<?php the_permalink(); ?>">
	                <div class="mySlides">
 	                  <img class="img-fluid" src="<?php the_post_thumbnail_url() ?>" alt="">
	                <!-- <div class="text">Caption Text</div> -->
	                </div>
                  </a>
	            	<?php endforeach; wp_reset_postdata();?>
	              </div>
	        </div>

            <div class="row row-eq-height justify-content-end bottom-nav-bar" >
                <div class="col">
                  <div class="row">
                    <a href="mailto:tmtstudio@yahoo.com">
	                  <img src="<?php echo get_template_directory_uri() ?>/images/gmail_icon.png" style="height: 30px; width: 35px; padding: 5px;">
                    </a>
                    <a  href="https://www.facebook.com/TMTStudio-501644246569297/?ref=br_rs">
                    <img src="<?php echo get_template_directory_uri() ?>/images/facebook_icon.png" style="height: 30px; width: 35px; padding: 5px;">
                    </a>

	                  <div style="padding-left: 10px; font-size: 16pt">
	                	   <p>20|20000</p>
	                  </div>
              	  </div>
                </div>

                
                <div class="col-auto" style="height: 20px">
                  <img onclick="plusSlides(-1)" src="<?php echo get_template_directory_uri() ?>/images/arrow.png" class="left-arrow">
                  <img onclick="plusSlides(1)" src="<?php echo get_template_directory_uri() ?>/images/arrow.png" class="right-arrow">
                </div>
            </div>
        
      
        </div> <!-- leftside -->
  		<script>
              var slideIndex = 1;
              showSlides(slideIndex);

              function plusSlides(n) {
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
                //dots[slideIndex-1].className += " active";
              }

              var myVar = setInterval(myTimer, 4000);

              function myTimer() {
                  console.log("Next");
                  plusSlides(1);
              }


        </script>

        <div class="col-md-5 d-none d-md-block scroll-bar-wrap " style="margin-left: 0; " >
          <div class="scroll-box style-1" id="left-side-content">
          	<?php
  	        $args = array( 'numberposts' => 5, 'offset'=> 1, 'category_name' => '' );
  	        $myposts = get_posts( $args );
  	        foreach( $myposts as $post ) :  setup_postdata($post); 
  	        ?>
  	        <div class="row">
  		        <div class="col-md-4">
  		          <a href="<?php the_permalink(); ?>">
  	              <h5><?php the_title(); ?></h5>
  	              </a>
  	              <div>
  	              	<p style="margin: 2px"><?php echo get_custom_field('address') ?></p>
  	              	<p style="margin: 2px"><?php echo get_custom_field('year') ?></p>
  	          	  </div>
  	            </div>
  	            <div class="col-md-8">
  	              <a href="<?php the_permalink(); ?>" style="float: right">
  	              	<?php the_post_thumbnail('medium'); ?>
  	              </a>
  	            </div>
  		      </div>
		      
		      <hr>
		      <?php endforeach; wp_reset_postdata(); ?>
          <!-- /.row -->
          </div>
          <div class="cover-bar " style="height: 100%"></div>
      </div>
     </div>
      <!-- card !-->

      <div class="py-5 bg-faded d-block d-md-none">
      <div class="card-columns">
        <?php
        global $post;
	    $args = array( 'numberposts' => 5, 'offset'=> 1, 'category_name' => '' );
        $myposts = get_posts( $args );
        foreach( $myposts as $post ) :  setup_postdata($post); ?>
			   <a href="<?php the_permalink(); ?>">

            <div class="card h-100" style="display: inline-block;">
              <?php the_post_thumbnail(array(300,500)); ?>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#"><?php the_title(); ?></a>
                </h4>
                <div>
	              	<p style="margin: 2px"><?php echo get_custom_field('address') ?></p>
	              	<p style="margin: 2px"><?php echo get_custom_field('year') ?></p>
	          	 </div>
              </div>
            </div>

          </a>
        <?php endforeach; wp_reset_postdata(); ?>
      </div>
      </div>
      </div>
      <!-- /.row -->

		</main><!-- .site-main -->
	</div><!-- .content-area -->
  </div>

