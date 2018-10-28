<?php /* Template Name: Homepage */
get_header();
function get_custom_field($field_name){
	return get_post_meta(get_the_ID(),$field_name,true);
}
global $post;
?>

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
			        	$page_id = get_queried_object();
				        global $post;
				        global $category_name;
				        if (pll_current_language('slug') === 'vi') {
				        	$category_name = ($page_id->post_name).'-vi';
				        } else {
				        	$category_name = ($page_id->post_name);
				        }

				        $args = array( 'numberposts' => 5, 'offset'=> 1, 'category_name' =>  $category_name);
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

        <div class="row row-eq-height justify-content-end bottom-nav-bar">
                <div class="col">
                  <div class="row">
	                  <a href="mailto:tmtstudio@yahoo.com">
                    <img src="<?php echo get_template_directory_uri() ?>/images/gmail_icon.png" style="height: 30px; width: 35px; padding: 5px;">
                    </a>
                    <a  href="https://www.facebook.com/TMTStudio-501644246569297/?ref=br_rs">
                    <img src="<?php echo get_template_directory_uri() ?>/images/facebook_icon.png" style="height: 30px; width: 35px; padding: 5px;">
                    </a>

	                  <div style="padding-left: 10px; font-family: arial; font-size: 16pt">
	                	   20 | 20000
	                  </div>
              	  </div>
                </div>

                
                <div class="col-auto" style="height: 20px">
                  <img onclick="plusSlides(-1)" src="<?php echo get_template_directory_uri() ?>/images/arrow.png" class="left-arrow">
                  <img onclick="plusSlides(1)" src="<?php echo get_template_directory_uri() ?>/images/arrow.png" class="right-arrow">
                </div>
          </div>

          <div class="row row-eq-height justify-content-end d-md-none" style="height:50px; padding-left: 15px; padding-right: 15px; padding-top: 10px;" >
                <div class="col-12" style="height: 20px">
                  <img onclick="plusSlides(-1)" src="<?php echo get_template_directory_uri() ?>/images/arrow.png" class="left-arrow-mobile">
                  <img onclick="plusSlides(1)" src="<?php echo get_template_directory_uri() ?>/images/arrow.png" class="right-arrow-mobile">
                </div>
          </div>
    
  
    </div> <!-- leftside -->
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
            // dots[slideIndex-1].className += " active";
          }

          var myVar = setInterval(myTimer, 4000);

              function myTimer() {
                  console.log("Next");
                  plusSlides(1);
          }
    </script>

    <div class="col-md-5 d-none d-md-block style-1" id="left-side-content"  style="overflow-y: auto; margin-left: 0;" >
    	<?php
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
              	<?php the_post_thumbnail('medium', array('class' => '')); ?>
              </a>
            </div>
	        
	    </div>
	    <hr>
	  <?php endforeach; wp_reset_postdata(); ?>
    </div>
 </div>
  <!-- card !-->

  <div class="container py-5 bg-faded d-block d-md-none" style="padding: 0px">
  <div class="card-columns">
    <?php
        global $post;
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