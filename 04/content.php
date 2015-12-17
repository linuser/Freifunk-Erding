<?php defined('ABSPATH') or die();
/**
 * The default template for displaying content foreach entry in index.php, archiv.php etc. 
 * @author Nina Taberski-Besserdich (nina.taberski@besserdich.com)
 * @package WordPress
 * @subpackage BIC Bootstrap Wordpress Theme
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <header class="entry-header">
        <h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf(esc_attr__('Permalink to %s', 'bicbswp'), the_title_attribute('echo=0')); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
        <aside class="entry-details">

            <p class="meta"><?php echo bootstrapwp_posted_on(); ?> <?php edit_post_link(__('Edit', 'bicbswp')); ?>
                <br/>
                <?php bicbswp_cats_tags(); ?> 
            </p>
        </aside><!--end .entry-details -->
    </header><!--end .entry-header -->

    <section class="post-content">

        <div class="row">
            <div class="col-md-12">

                <?php if (is_search()) : // Only display excerpts without thumbnails for search.  ?>		
                    <div class="entry-summary">

                        <?php the_excerpt(); ?>

                    </div><!-- end .entry-summary -->

                <?php else : ?>

                    <div class="entry-content">

                        <?php 
                        if ( has_post_thumbnail() ) { ?>
                        
                        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute('echo=0'); ?>">
                            
                            <?php $options = get_option('bicbswp_theme_options');
                            
                                switch ($options['featured_img_arch_size']) {
                                    
                                   case 1:
                                       $thumbnail_size="thumbnail";
                                       break; 
                                   case 2: 
                                       $thumbnail_size="medium";
                                       break;
                                   case 3:
                                       $thumbnail_size="large";
                                       break; 
                                   default: 
                                       $thumbnail_size="thumbnail";
                                }
                            ?>
                            <?php the_post_thumbnail($thumbnail_size); ?>
                            
                        </a>
                            
                       <?php  }   
                       
                        $options = get_option('bicbswp_theme_options');

                        if ($options['excerpts']) {

                            echo the_excerpt();
                        } else {

                            echo the_content('<span class="read-more">Weiterlesen</span>', 'bicbswp');
                        }
                        ?>

                    </div><!-- end .entry-content -->


                
            <?php endif; ?>
            
            </div><!-- end .col -->


        </div><!-- end .row -->


    </section>


</article><!-- /.post-->
<nav class="navbar navbar-default p-tb" id="p-tb"  >
				<ul class="nav navbar-nav small">
					<li id="t-whatlinkshere"><a href="/index.php?title=Spezial:Linkliste/Hauptseite" title="Liste aller Seiten, die hierher verlinken [j]" accesskey="j">Links auf diese Seite</a></li>
					<li id="t-recentchangeslinked"><a href="/index.php?title=Spezial:%C3%84nderungen_an_verlinkten_Seiten/Hauptseite" title="Letzte Änderungen an Seiten, die von hier verlinkt sind [k]" accesskey="k">Änderungen an verlinkten Seiten</a></li>
					<li id="t-specialpages"><a href="/index.php?title=Spezial:Spezialseiten" title="Liste aller Spezialseiten [q]" accesskey="q">Spezialseiten</a></li>
					<li id="t-print"><a href="/index.php?title=Hauptseite&amp;printable=yes" rel="alternate" title="Druckansicht dieser Seite [p]" accesskey="p">Druckversion</a></li>
					<li id="t-permalink"><a href="/index.php?title=Hauptseite&amp;oldid=19988" title="Dauerhafter Link zu dieser Seitenversion">Permanenter Link</a></li>
					<li id="t-info"><a href="/index.php?title=Hauptseite&amp;action=info">Seiteninformationen</a></li>
					
				</ul>
			</nav>
<?php get_footer(); ?>