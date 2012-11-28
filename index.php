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
      <div id="content-pane">
          <h2> Blavatnik School of Goverment Digital Signage System </h2>
          <p> Welcome to the Digital signage system. The following signs are currently available:</p>
          <?php wp_page_menu( $args ); ?>
          <p> If you like to change any of these or any setting please <a href="/wp-login.php">login</a></p>
      </div>
    </div>

  </div>
  <!-- this is required to displaythe admin bar correctly  -->
  <?php wp_footer(); ?>
</body>

