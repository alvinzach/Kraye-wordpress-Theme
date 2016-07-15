<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kraye
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/font-awesome/css/font-awesome.min.css">
    <style>
    .navbar-default .navbar-nav > .active > a, .navbar-default .navbar-nav > .active > a:hover, .navbar-default .navbar-nav > .active > a:focus,.navbar-default .navbar-nav > li > a:hover,  .navbar-default .navbar-nav > li > a:focus,.postmetabar,.social i:hover {
    color: #000;
    background:#fff;
    }
    .navbar-default .navbar-nav > li > a,.site-title a{
      color: #fff;
    }
     body, .side, .big1,.big2,.social i,.singlebig {
      background:#000;
      color:#fff;
        }
        .overlay{
        background:url('<?php echo get_stylesheet_directory_uri(); ?>/img/overlay.png');
      }
    </style>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<body>
	    <div class="container-fluid">
	<div class="row">
	  <div class="  col-sm-2 side">
	    <div class="sidebar-nav">
	      <div class="navbar navbar-default" role="navigation">
	        <div class="navbar-header">

	          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-navbar-collapse">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
            <a class="navbar-brand" href="<?php echo home_url(); ?>">
          				<?php if ( get_theme_mod( 'kraye_logo' ) ) : ?>
          	<img src='<?php echo esc_url( get_theme_mod( 'kraye_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' />
          <?php else : ?>
          <hgroup style="text-align:center;">
          	<h1 class='site-title'><a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><?php bloginfo( 'name' ); ?></a></h1>
          	<h4 class='site-description'><?php bloginfo( 'description' ); ?></h4>
          </hgroup>
          <?php endif; ?>
          </a>
    </div>
	        <div class="navbar-collapse collapse sidebar-navbar-collapse">
            <?php
            if (has_nav_menu('primary')) {
                ?>

                <?php wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'menu_class' => 'nav navbar-nav',
                    'depth' => 2,
                    'walker' => new wp_bootstrap_navwalker())); ?>
                <?php
            } else {
                ?>
                <ul class="nav navbar-nav">
                    <li><a href="<?php bloginfo('url'); ?>">Home</a></li>

                </ul>
                <?php
            }
            ?>
	        </div>
                <!--/.nav-collapse -->
	      </div>
	      <div class="social">
          <?php if ( get_theme_mod( 'facebook' ) ) { ?>
	        <a href="<?php echo esc_url( get_theme_mod( 'facebook' ) ); ?>"><i class="fa fa-facebook"></i></a>
          <?php } ?>
          <?php if ( get_theme_mod( 'twitter' ) ) { ?>
	        <a href="<?php echo esc_url( get_theme_mod( 'twitter' ) ); ?>"><i class="fa fa-twitter"></i></a>
          <?php } ?>
          <?php if ( get_theme_mod( 'instagram' ) ) { ?>
              <a href="<?php echo esc_url( get_theme_mod( 'instagram' ) ); ?>"><i class="fa fa-instagram"></i></a>
          <?php } ?>
          <?php if ( get_theme_mod( 'pinterest' ) ) { ?>
            <a href="<?php echo esc_url( get_theme_mod( 'pinterest' ) ); ?>"><i class="fa fa-pinterest"></i></a>
          <?php } ?>
          <?php if ( get_theme_mod( 'gplus' ) ) { ?>
          <a href="<?php echo esc_url( get_theme_mod( 'gplus' ) ); ?>"><i class="fa fa-google-plus"></i></a>
          <?php } ?>
          <div class="credits">
            <?php if ( get_theme_mod( 'credit' ) ) { ?>
            <?php echo  get_theme_mod( 'credit' ); ?>
            <?php }else{
              echo '2016 All rights reserved';
            } ?>
          </div>
	      </div>


	    </div><!--/.sidebar-nav -->

	  </div>
    <div class="col-sm-10 col-sm-offset-2 content">
    <?php $i=0;?>
