<?php
/**
 * Template Name: Page - Home Hero
 * Description: Displays page title and content in Hero section above 3 widgets.
 *
 * @package WordPress
 * @subpackage BootstrapWP
 */
get_header(); ?>
    <!--
     -->
<p></p>
    <!-- grosses startseitenbanner -->
    <div id="banner" class="jumbotron jumbotron-branded cloudy-bg ff-logo-bg">
      <div class="container">
        <h1><?php echo esc_attr(get_bloginfo('name', 'display')); ?>
                    </a></h1>
        <p class="lead"><?php bloginfo('description'); ?></p>
        <p>
          <a class="btn btn-primary btn-lg" href="/mitmachen">Jetzt Mitmachen &raquo;</a>
          <a class="btn btn-warning btn-lg" href="/kontakt">Hilfe bekommen &raquo;</a>
        </p>
        
      </div>
</div>

    <!-- grosses startseitenbanner --> 
    
    <!-- hier beginnt die eigentliche seite -->
    <div class="container">
   
   <div class="row">
 <!-- eine reihe content blöcke -->
         
    <div class="row content">
        <div class="col-sm-12">
            <?php while (have_posts()) : the_post(); ?>
                <header class="page-header">
                    <h2><?php the_title();?></h2>
                </header>

                <?php the_content(); ?>
                <hr/>

            <?php // reset the loop
            endwhile;
            wp_reset_query(); ?>

            <?php // Blog post query
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            query_posts(array('post_type' => 'post', 'paged' => $paged, 'showposts' => 0));
            if (have_posts()) : while (have_posts()) : the_post(); ?>

                <div <?php post_class(); ?>>
                    <a href="<?php the_permalink(); ?>" title="<?php the_title();?>">
                        <h3><?php the_title();?></h3>
                    </a>
                    <p class="meta">
                        <?php echo bootstrapwp_posted_on();?>
                    </p>

                    <div class="row">
                        <?php // Post thumbnail conditional display.
                        if ( bootstrapwp_autoset_featured_img() !== false ) : ?>
                            <div class="span2">
                                <a href="<?php the_permalink(); ?>" title="<?php  the_title_attribute( 'echo=0' ); ?>">
                                    <?php echo bootstrapwp_autoset_featured_img(); ?>
                                </a>
                            </div>
                            <div class="span6">
                        <?php else : ?>
                            <div class="span8">
                        <?php endif; ?>
                                <?php the_excerpt(); ?>
                            </div>
                    </div><!-- /.row -->

                    <hr/>
                </div><!-- /.post_class -->

            <?php // end of blog post loop.
            endwhile; endif; ?>

         
        </div> 
		<?php get_footer(); ?>