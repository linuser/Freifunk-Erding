<?php defined('ABSPATH') or die();
/**
 * The template for displaying content in the single.php.
 * 
 * @author PlaNet Fox  Alexander Fox
 * @package WordPress
 * @subpackage Freifunk_Erding 
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    
    <header class="entry-header">
        <h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf(esc_attr__('Permalink to %s', 'bicbswp'), the_title_attribute('echo=0')); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
        <aside class="entry-details">

            <p class="meta"><?php echo bootstrapwp_posted_on(); ?> <?php edit_post_link(__('Edit', 'bicbswp')); ?>
                <br/>
            </p>
        </aside><!--end .entry-details -->
    </header><!--end .entry-header -->
    
    
    <section class="post-content">
       
            <div class="entry-content">

                        <?php echo the_content();?>
<?php the_tags('Tagged with: <span class="label label-info">','</span> <span class="label label-info">','</span>'); ?>
      

    </section>
    
    
    
    
    
    <?php
    // AUTHOR INFO  
   
		if ( get_the_author_meta( 'description' ) ) :   ?>
    
    <hr/>
    
		<div class="author-info">
                    
		<?php echo get_avatar( get_the_author_meta( 'user_email' ), 100 ); ?>
				<div class="author-details">
                                    
					<h3><?php print( __( 'Posted by ', 'bicbswp' )); 
                                        the_author_link(); ?> 
					
				</div><!-- end .author-details -->
					<p class="author-description"><?php the_author_meta( 'description' ); ?></p>	
			</div><!-- end .author-info -->
			<?php endif; ?>

   

    <hr/>

<?php comments_template(); ?>

</article><!-- /.post-->
<?php get_footer(); ?>