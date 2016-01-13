<?php defined('ABSPATH') or die();
/**
 * Default Post Template
 * @author PlaNet Fox  Alexander Fox
 * @package WordPress
 * @subpackage Freifunk_Erding 
 */
get_header();
?>
<div class="container main">


    <div class="row">
        <div class="col-md-12">
        </div><!--/.span12 -->
    </div><!--/.row -->



    <div class="row">
        <div class="col-lg-9 col-md-9 col-sm-9 col-12">  
            <div class="content"> 
<h3>Autoren Artikel<h3>            
<?php _e("Geschrieben von:", "Freifunk_Erding"); ?></span> 
						<?php 
							// If google profile field is filled out on author profile, link the author's page to their google+ profile page
							$curauth = (get_query_var('author_name')) ? get_user_by('slug', get_query_var('author_name')) : get_userdata(get_query_var('author'));
							$google_profile = get_the_author_meta( 'google_profile', $curauth->ID );
							if ( $google_profile ) {
								echo '<a href="' . esc_url( $google_profile ) . '" rel="me">' . $curauth->display_name . '</a>'; 
						?>
						<?php 
							} else {
								echo get_the_author_meta('display_name', $curauth->ID);
							}
						?>
					</h1></div>
					
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
						<hr>
							<h3 class="h2"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
							
							<p class="meta"><?php _e("Posted", "Freifunk_Erding"); ?> <time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php the_time(); ?></time> <?php _e("by", "Freifunk_Erding"); ?> <?php the_author_posts_link(); ?> <span class="amp">&</span> <?php _e("unter", "wpbootstrap"); ?> <?php the_category(', '); ?>.</p>
						
						 <!-- end article header -->
					
						<section class="post_content">
						
							<?php the_post_thumbnail( 'wpbs-featured' ); ?>
						
							<?php the_excerpt(); ?>


<?php endwhile; ?>	
					
					<?php if (function_exists('wp_bootstrap_page_navi')) { // if expirimental feature is active ?>
						
						<?php wp_bootstrap_page_navi(); // use the page navi function ?>

					<?php } else { // if it is disabled, display regular wp prev & next links ?>
						<nav class="wp-prev-next">
							<ul class="clearfix">
								<li class="prev-link"><?php next_posts_link(_e('&laquo; Older Entries', "Freifunk_Erding")) ?></li>
								<li class="next-link"><?php previous_posts_link(_e('Newer Entries &raquo;', "Freifunk_Erding")) ?></li>
							</ul>
						</nav>
					<?php } ?>
								
					
					<?php else : ?>
	
					<?php endif; ?>
			

            </div> <!-- /.content -->
        </div> <!-- /.col-lg-9 /.col-md-9 /.col-sm-9 /.col-9 -->
        <div class="col-lg-3 col-md-3 col-sm-9 col-9 sidebar-wrapper">     
            <?php get_sidebar('post'); ?> 
        </div><!-- /.col-lg-3 /.col-md-3 /.col-sm-3 /.col-3  -->
    </div> <!-- /.row -->
</div> <!-- /.container -->
<?php get_footer(); ?>