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
	<span id="datetime"><?php echo date('j F, H:i'); ?></span>
      </div>
      <div id="infobox-container">
	<ul id="widgets">
	<?php if ( !function_exists('dynamic_sidebar') ||
	      !dynamic_sidebar('left-sidebar') ) : ?>
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
    <div id="footer-container">
       <div id="footer">
         <!-- <p>This is a sample Tweet! This is a sample Tweet! This is a sample Tweet! This is a sample Tweet! This is a sample Tweet! wwwww wwwww WWWWW.
         <span class="meta">@l0calh0rst</span></p> -->
         <ul id="widgets">
           <?php if ( !function_exists('dynamic_sidebar') ||
               !dynamic_sidebar('bottom-sidebar') ) : ?>
           <?php endif; ?>
         </ul> 
       </div>	
    </div>	  

  </div>
  <!-- this is required to displaythe admin bar correctly  -->
  <?php wp_footer(); ?>
</body>

