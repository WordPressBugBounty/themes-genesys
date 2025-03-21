
	<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package genesys
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

		 
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'genesys' ); ?></a>

	<?php if (has_nav_menu('menu-2')) :?>
	<div class="top-bar">
		<div class="container">
		<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-2',
					'menu_id'        => 'topbar-menu',
				)
			     );
			   ?>
			</div><!--container-->
		</div><!--top-bar-->
		<?php endif;?>

	<header id="masthead" class="site-header">
		 <div class="site-branding container">
			 <?php
			    the_custom_logo();
			      if ( is_front_page() && is_home() ) :
			    	?>
				    <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				  <?php
			     else :
			      	?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				  <?php
		     	endif;
		    	$genesys_description = get_bloginfo( 'description', 'display' );
			       if ( $genesys_description || is_customize_preview() ) :
				   ?>
				<p class="site-description"><?php echo $genesys_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
			
          <div class="menu-holder">
			   <nav id="site-navigation" class="main-navigation">
			      <button id="hamburger" class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
				  <img id="ham-menu" class="plus" src="<?php echo esc_url( get_template_directory_uri(). '/img/open-menu.png');?>"/>
		       </button>

			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			     );
			   ?>
			   
		      </nav><!-- #site-navigation -->	
		  </div><!--menu-holder-->	
		</div><!-- .site-branding -->
	</header><!-- #masthead -->
