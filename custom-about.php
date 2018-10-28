<?php /* Template Name: About */
function get_custom_field($field_name){
	return get_post_meta(get_the_ID(),$field_name,true);
}
	get_header();
?>


<div class="container-fluid">
	<div class="row row-eq-height" style="overflow-y: hidden;">
		<div class="col-md-7 d-none d-md-block left-slider">
			<div class="slideshow-container" style="margin-left: 15px; width: 100%; ">
        <?php $attachments = new Attachments( 'attachments' );  ?>
			    <?php if( $attachments->exist() ) : ?>
			    <?php while( $attachments->get() ) : ?>
			   	<div class="mySlides">
          			<img src="<?php echo $attachments->url(); ?>" alt="" >
          		</div>
			    <?php endwhile; ?>
		    <?php endif; ?>

          <div class="row row-eq-height justify-content-end d-none d-md-flex bottom-nav-bar" >
                <div class="col">
                  <div class="row">
	                <a href="mailto:tmtstudio@yahoo.com">
	                  <img src="<?php echo get_template_directory_uri() ?>/images/gmail_icon.png" style="height: 30px; width: 35px; padding: 5px;">
                    </a>
                    <a  href="https://www.facebook.com/TMTStudio-501644246569297/?ref=br_rs">
                    <img src="<?php echo get_template_directory_uri() ?>/images/facebook_icon.png" style="height: 30px; width: 35px; padding: 5px;">
                    </a>
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
	      </div>
		</div>

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
		<div class="col-md-5" id="left-side-content" style="overflow: scroll;">
			<!-- Page Content -->
			<div class="container">

			<!-- Introduction Row -->
      <div class="row">
			<?php echo get_post_field('post_content', $post->ID); ?>
      </div>

			<!-- Team Members Row -->
			<div class="row">
			<div class="col-lg-12">
			<h2 class="my-4">Our Team</h2>
			</div>

			<?php 
			    query_posts(array( 
			        'post_type' => 'people',
			        'showposts' => 10 
			    ) );  
			?>
			<?php while (have_posts()) : the_post(); ?>
			<div class="col-lg-6 col-sm-6 text-center mb-4">
			<img class="rounded-circle img-fluid d-block mx-auto" style="height: 100px; width: 100px" src="<?php the_post_thumbnail_url() ?>" alt="" />
			<h1><?php the_title(); ?></h1>
			<?php the_content() ?>
			</div>
			<?php endwhile;?>

			</div>
			</div>
		</div>
	</div>
</div>