<?php
/**
 * Default Page Header
 *
 * @package WP-Bootstrap
 * @subpackage WP-Bootstrap
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style type="text/css">
  [class^="col-"] > ul {
    padding-left: 1em;
  }
  footer {
    margin-top: 3em;
  }
  nobr {
    white-space: normal;
  }
</style>

    <title><?php wp_title('|', true, 'right'); ?></title>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri();?>/ico/favicon.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144"
          href="<?php echo get_stylesheet_directory_uri();?>/assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114"
          href="<?php echo get_stylesheet_directory_uri();?>/assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72"
          href="<?php echo get_stylesheet_directory_uri();?>/assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed"
          href="<?php echo get_stylesheet_directory_uri();?>/assets/ico/apple-touch-icon-57-precomposed.png">
           <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet"> 
    <?php wp_head(); ?>
</head>
<body id="home" class="fixed-nav">

    
    <noscript><div class="container">
    <div class="alert alert-error">
    <strong>Achtung!</strong> Bitte aktiviere Javascript in Deinem Browser, um diese Website vollständig nutzen zu können.
    </div>
    </div></noscript>

<body <?php body_class(); ?>  data-spy="scroll" data-target=".bs-docs-sidebar" data-offset="10">
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="navbar-header">
            <div class="container">
			
			<a class="navbar-brand active" href="/" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home">
                    <?php bloginfo('name'); ?></a>

            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
                              
                    <?php if (has_nav_menu('main-menu')) { ?>
              <!-- Menu -->

                                    <div class="collapse navbar-collapse navbar-ex1-collapse">
                                   
                                        <?php
                                        wp_nav_menu(array(
                                            'menu' => '',
                                            'theme_location' => 'main-menu',
                                            'depth' => 3,
                                            'container' => false,
                                            'menu_class' => 'nav navbar-nav',
                                            'fallback_cb' => 'wp_page_menu',
                                            'walker' => new wp_bootstrap_navwalker())
                                        );
                                        ?>
                         

    <ul class="nav navbar-nav navbar-right">
      <li class="dropdown">
        <a href="/impressum" class="dropdown-toggle"  data-toggle="dropdown">Impressum <b class="caret"></b>
        </a>
        <ul class="dropdown-menu">
          <li  ><a href="/impressum">Impressum</a></li>
          <li  ><a href="/datenschutz/">Datenschutz</a></li>
          <li  ><a href="/Kontakt/">Kontakt</a></li>
        </ul>
      </li>
    </ul>
                         </div>

						<?php

 
 

?>

  </div>
  <?php } ?>
                                
                </div><!-- /.container -->
            </div><!-- /.top-main-menu -->
     <!-- End Header. Begin Template Content -->