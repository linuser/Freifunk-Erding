<?php defined('ABSPATH') or die();
/**
 * Template Name: Default Page
 * Description: Page template with a content container and right sidebar. 
 * @author Nina Taberski-Besserdich (nina.taberski@besserdich.com)
 * @package WordPress
 * @subpackage BIC Bootstrap Wordpress Theme
 */
?>
<?php get_header(); ?>



     <div class="container">

         
     <div class="row">
         
        <div class="col-sm-10">
       </div><!--/.col -->
         
    </div><!--/.row -->
    
    
    
    
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    
     <div class="row main-content">
         
                <div class="col-lg-9 col-md-9 col-sm-9 col-9">
                    
                    <div class="content">
                        
             <header>
                      
                  <h2 class="page-header"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
            
            </header>

                        <article class="post" id="post-<?php the_ID(); ?>">

                            <?php echo the_content(); ?>

                        </article>

                    </div> <!-- /.content -->
                    
                </div> <!-- /.col -->
           

            <?php endwhile;

                  endif; ?>
           
        <div class="col-lg-3 col-md-3 col-sm-3 col-3 sidebar-wrapper"> 
            
            <?php get_sidebar('page'); ?>

        </div><!--/.col -->
    
     </div> <!--/.row -->
        
        
        
        
         
        
    </div><!-- container -->
    
    
    
    
<?php get_footer(); ?>
