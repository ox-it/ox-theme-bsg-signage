<?php
/*
   Template Name:  mypage
*/
?>
<?php get_header(); the_post(); ?>

<body id="body">
  <div id="container-page">
    <div id="sidebar">
      <div id="sidebar-header">
	<span id="datetime">
	  <?php 
	      date_default_timezone_set(get_option('timezone_string'));
	      echo date('j F, H:i'); 
	  ?>
	</span>
      </div>
      <div id="infobox-container">
	<ul id="widgets">
	<?php if ( !function_exists('dynamic_sidebar') ||
	      !dynamic_sidebar('right-sidebar') ) : ?>
	<?php endif; ?>
	</ul>
      </div>
    </div>
    <div id="main">      
      <div id="main-header">
	<div id="ox-logo">
	  <a href="http://www.ox.ac.uk/" title="University of Oxford" id="logo">
	    <img src="<?php bloginfo('template_directory'); ?>/images/oxford-logo.gif" alt="Home" id="logo">
	  </a>
	</div>
	<div id="bsg-logo">
	  <a href="/" title="Blavatnik School of Goverment" id="bsg-logo-href">
            <img id="bsg-logo-img" src="<?php bloginfo('template_directory'); ?>/images/bsg-logo.png" alt="Blavatnik School of Governance">
	  </a>
	</div>
      </div>
      <div <?php post_class('post') ?> id="content-pane">
	<!-- <h1 class="entry-title noinfo"><?php the_title(); ?></h1> -->
	
	<div class="content">
	  <?php the_content() ?>

	  <div class="clear"></div>
	</div>
	
	<?php if(is_singular()) //comments_template(); ?>
      </div>
    </div>
    <!-- <div id="footer-container"> -->
       <?php
         // get the location of the page (display)
         global $wp_query;
         $pageObject = $wp_query->get_queried_object();
         $optionsArray = unserialize(get_post_meta($pageObject->ID, 'optionsArray', true));
         $myLocation = $optionsArray['location'];
         
         // check if it is in the currentlyOccupied array
         global $currentlyOccupied;
         //$sTMP = 'Currently occupied: ';
         $isOccupied = 1;
         foreach($currentlyOccupied as $loc) {
             $isOccupied *= ( strcmp($myLocation, $loc) * !empty($loc) );
         }
         //error_log($sTMP);
         
         if($isOccupied == 0) {
             echo '	<div id="footer-container-occupied">';
             echo '		<div id="footer-occupied">';
             echo '<p> Ongoing event at the '.$myLocation.'. Please do not disturb! Thank you. </p>';
             echo '		</div>';
         } else {
             echo '	<div id="footer-container">';
             echo '		<div id="footer">';
             echo '			<ul id="widgets">';
             if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('bottom-sidebar') ) : endif;
             echo '			</ul>';
             echo '			}';
         }
       ?>
          
       </div>	
    </div>	  

  
  </div>
  <!-- this is required to display the admin bar correctly  -->
  <?php wp_footer(); ?>
</body>

