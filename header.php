<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

$menu_lang = array('vi' => 
array(
  'vi/en' => 'En/Vi',
  'about' => 'Chúng tôi', 
  'contact' => 'Liên hệ', 
  'projects' => 'Dự án',
  'arch' => 'Kiến trúc',
  'interior' => 'Nội thất',
  'design' => 'Thiết kế'
),
'en' => 
array(
  'vi/en' => 'Vi/En',
  'about' => 'About',
  'contact' => 'Contact',
  'projects' => 'Projects',
  'arch' => 'Architecture',
  'interior' => 'Interior',
  'design' => 'Design'
) );
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->

	<!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<?php wp_head(); ?>
	
	<!-- Bootstrap core JavaScript -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <script type="text/javascript">

      $(window).on('load resize', function(){
        var w = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
        var h = Math.max(document.documentElement.clientHeight, window.innerHeight || 0);

        if (w > 0 && h > 0) {
          var slides = document.getElementsByClassName("mySlides")
          for(i = 0; i < slides.length; i++) {
            slides[i].style.height = (h - 275 - 30) + "px";
          }

          document.getElementById("left-side-content").style.height = (h - 275)  + "px";
          
        }
    });
    </script>

    <style type="text/css">
      
      ul[class=menu-right-col]:first-child:first-child { 
        float: left;
      };

      ul[class=menu-right-col]:last-child:first-child { 
        float: right;
      }

      @media (min-width: 768px) {
        .right-side-menu:last-child a {
          float: right;
        }
        .right-side-menu:first-child a {
          float: left;
        }

        .right-side-menu-item-last { float: right; padding-right: 15px; }
        .right-side-menu-item-first { float: left; padding-left: 5px; }
        .right-side-menu-item-center { float: center; }
        .right-side-menu-item-item { float: right; padding-right: 20px; }

        .top-padding-only {
          padding-top: 2px;
        }
      }

      .mylogo {
        height: 225px;
      }

      .my-nav-brand {
        float: left;  position: absolute; top: 0px; padding-left: 5px;
      }

      .my-nav {
        background-color: white;
        height: 250px; padding-left: 0px;
      }

      @media only screen and (max-width: 768px) {
          .mylogo {
            height: 150px;
          }

          .my-nav-brand {
            z-index: 1;
            float: left;  position: absolute; padding-left: 5px;
          }

          .my-nav {
            background-color: white;
            height: 200px; padding-left: 0px;
          }
      }

      .side-image img {
        float: right;
      }

      .scroll-bar-wrap {
      }

      .scroll-box {
        overflow-y: scroll;
        overflow-x: hidden;

      }

      .scroll-box::-webkit-scrollbar {
      }

      .scroll-box::-webkit-scrollbar,
      .scroll-box::-webkit-scrollbar-thumb {
        overflow:visible;
        border-radius: 4px;
      }
      .scroll-box::-webkit-scrollbar-thumb {
        background: #555 ; 
      }
      .cover-bar {
        position: absolute;
        background: #fff;;
        height: 100%;  
        top: 0;
        right: 15px;
        width: .4em;
        -webkit-transition: all .5s;
        opacity: 1;
      }
      /* MAGIC HAPPENS HERE */
      .scroll-bar-wrap:hover .cover-bar {
         opacity: 0;
        -webkit-transition: all .5s;
      }

      h1, h2, a, p {
        color: grey;
      }

      p {
        font-size: 10;
      }

      .nav-item a:hover {
          color: #1075B6;
          text-decoration: none;
      }

      .left-arrow {
        height: 15px; 
        transform: rotate(180deg);
      }

      .right-arrow {
        height: 15px; transform: rotate(0deg);
      }

      .left-arrow-mobile {
        height: 15px; transform: rotate(180deg); float: left;
      }

      .right-arrow-mobile {
        
        height: 15px; transform: rotate(0deg); float: right;
      }

      /* Hide the images by default */
      .mySlides {
          display: none;
          height: 500px;
      }

      .mySlides img {
        float: right;
        height: 100%;
        object-fit: cover;
      }




    </style>
</head>

<body <?php body_class(); ?>>
<div class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentyfifteen' ); ?></a>
	<div class="container-fluid main-container">
    <!-- Navigation -->
    
    <nav class="navbar navbar-expand navbar-light sticky-top" class="my-nav" style="background-color: white; ">
        <a class="navbar-brand" href="/" style="z-index: 1" class="my-nav-brand">
          <img src="<?php echo get_template_directory_uri() ?>/images/logo.png" class="mylogo" alt="TMT Studio icon" >
        </a>
        <div class="collapse navbar-collapse container-fluid" id="navbarText" style="float: center; position: absolute;" >
          <div class="col-2 d-md-none"> </div>
          <div class="col-6 col-md-7 col-lg-7">
            <div class="col">
                <ul class="navbar-nav row" style=" "> <!-- padding-right: 0px; margin-right: 0px; -->
                  <li class="nav-item col-md-3 menu-item text-center">
                    
                  </li>
                  <li class="nav-item col-md-3 menu-item text-center d-flex align-items-center" >
                    <a class=" align-middle" href="
                    <?php 
                      $translations = pll_the_languages(array('raw'=>1));
                      if ( pll_current_language('slug') == 'en' ) {
                        echo $translations['vi']['url'];
                      } else {
                        echo $translations['en']['url'];
                      }
                      $current_lang = pll_current_language('slug')
                    ?>" ><?php echo $menu_lang[$current_lang]['vi/en'] ?></a>
                  </li>
                  <li class="nav-item col-md-3 menu-item text-center d-flex align-items-center">
                    <a href="/about"><?php echo $menu_lang[$current_lang]['about'] ?></a>
                  </li>
                  <li class="nav-item col-md-3 menu-item text-center d-flex align-items-center" style="padding-right: 0px; margin-right: 0px">
                    <a href="/contact"><?php echo $menu_lang[$current_lang]['contact'] ?></a>
                  </li>
                  <li class="nav-item col-md-3 menu-item text-center d-flex align-items-center d-md-none">
                    <a href="mailto:tmtstudio@yahoo.com">
                    <img src="<?php echo get_template_directory_uri() ?>/images/gmail_icon.png" style="height: 30px; width: 35px; padding: 5px;">
                    </a>
                    <a  href="https://www.facebook.com/TMTStudio-501644246569297/?ref=br_rs">
                    <img src="<?php echo get_template_directory_uri() ?>/images/facebook_icon.png" style="height: 30px; width: 35px; padding: 5px;">
                    </a>
                  </li>
                </ul>
            </div>
          </div>
          <div class="col col-md-5 col-lg-5" style=""> <!-- padding-left: 30px; margin-left: 0px -->
            <ul class="navbar-nav row top-padding-only">
              <?php
                  $page_id = get_queried_object();
                  global $classes;
                  $classes = array(
                        'projects' => '',
                        'arch' => '',
                        'interior' => '',
                        'design' => ''
                  );

                  foreach ($classes as $key => $value) {
                    if ($page_id->post_name === $key) {
                      $classes[$key] = 'menu-active';
                    }
                  }
              ?>
              <?php foreach ($classes as $key => $value): ?>
                <?php if ($key !== '' && $menu_lang[$current_lang][$key]): ?>
                <li class="nav-item col-md-3 col-lg menu-item text-md-center" style="padding-left: 0px;">
                   <a href="<?php echo '/'.$key ?>" class="
                    <?php 
                      if ($key === 'projects') {
                        echo $classes[$key].' right-side-menu-item-first';
                      } elseif ($key === 'design') {
                        echo $classes[$key].' right-side-menu-item-last';
                      } elseif ($key === 'interior') {
                        echo $classes[$key].' right-side-menu-item-item';
                      } else {
                        echo $classes[$key].' right-side-menu-item-center';
                      }
                    ?>
                    "><?php echo $menu_lang[$current_lang][$key]?></a>
                </li>
                <?php endif; ?>
              <?php endforeach; ?>     
            </ul>
        </div>
        </div>
      </nav>
  <div id="content">
