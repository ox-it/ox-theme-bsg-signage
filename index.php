<?php
/*
   Template Name:  Homepage
*/
?>
<?php get_header(); the_post(); ?>

<body id="body">
  <div id="container-page" class="homepage">
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
        <p><a href="/wp-login.php">WordPress login for post management</a>.</p>

        <p>The following signs are currently available:</p>
        <?php wp_page_menu( $args ); ?>

        <?php 
           // link the documentation
           $enduser_url = plugins_url()."/ox-digital-signage/docs/enduser_documentation.pdf";
           $poweruser_url = plugins_url()."/ox-digital-signage/docs/enduser_documentation.pdf";             
           $accepted_status_codes = array( 200, 301, 302 );

	   echo "<p>System documentation:</p>";

           echo "<ul>";

           $response = wp_remote_head( $enduser_url, array( 'timeout' => 5 ) );
           if ( ! is_wp_error( $response ) && 
	          in_array( wp_remote_retrieve_response_code( $response ), $accepted_status_codes ) ) {
             echo "<li><a href=".$enduser_url.">End user documentation</a>";
           }

           $response = wp_remote_head( $poweruser_url, array( 'timeout' => 5 ) );
           if ( ! is_wp_error( $response ) && 
                  in_array( wp_remote_retrieve_response_code( $response ), $accepted_status_codes ) ) {
             echo "<li><a href=".$enduser_url.">Power user and system maintainer documentation</a>";
           }

          echo "</ul>";
        ?>
      </div>
    </div>
  </div>
  <?php get_footer(); ?>
