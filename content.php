<?php defined('ABSPATH') or die();
/**
 * The default template for displaying content foreach entry in index.php, archiv.php etc. 
 * @author PlaNet Fox  Alexander Fox
 * @package WordPress
 * @subpackage Freifunk_Erding 
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <header class="entry-header">
        <h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf(esc_attr__('Permalink to %s', 'bicbswp'), the_title_attribute('echo=0')); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
        <aside class="entry-details">

            <p class="meta"><?php echo bootstrapwp_posted_on(); ?> <?php edit_post_link(__('Edit', 'bicbswp')); ?>
                
            </p>
            
        </aside><!--end .entry-details -->
    </header><!--end .entry-header -->

    <section class="post-content">

 


</article><!-- /.post-->

<?php get_footer(); ?>