<?php defined('ABSPATH') or die();

/**
 * The template for displaying Archive pages.
 * 
 * @author PlaNet Fox  Alexander Fox
 * @package WordPress
 * @subpackage Freifunk_Erding 
 */
?>
<?php get_header(); ?>

<p></p>

     <div class="container main">
         
         
         
         
     <div class="row">
         
        <div class="col-md-12">
            
            <?php
            if (function_exists('bootstrapwp_breadcrumbs')) {
                
                bootstrapwp_breadcrumbs();
                
            }
            ?>
            
        </div><!--/.col -->
         
    </div><!--/.row -->
    
    
    
    
    
    <div class="row main-top">
        
        <div class="col-lg-9 col-md-9 col-sm-9 col-9">

            <header>
                       
                <h1><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
            
            </header>

        </div><!--/.col -->
  
    </div><!--/.row -->
    
    
    
     <div class="row main-content">
         
                <div class="col-lg-9 col-md-9 col-sm-9 col-9">
                    
                    <div class="content main">

                   <header class="page-title">
                                        <h1><?php _e('This is Embarrassing', 'Freifunk_Erding'); ?></h1>
                                    </header>

                                    <p class="lead"><?php _e(
                                        'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching, or one of the links below, can help.',
                                        'Freifunk_Erding'
                                    ); ?></p>

                             <form role="form" action="<?php bloginfo('siteurl'); ?>/" id="searchform" method="get">
    <label for="s" class="sr-only">Search</label>
    <div class="input-group">
        <input type="text" class="form-control" id="s" name="s" placeholder="Search"<?php if ( $search_terms !== '' ) { echo ' value="' . $search_terms . '"'; } ?> />
        <span class="input-group-btn">
            <button type="submit" class="btn btn-primary"><i class="icon-search"></i></button>
        </span>
    </div> <!-- .input-group -->
</form>
                                    
                                    
                                    
                                     <h2><?php _e('All Pages', 'Freifunk_Erding'); ?></h2>
                   <?php wp_page_menu(); ?>
                                     
                                      <?php the_widget('WP_Widget_Recent_Posts'); ?>

                   <h2><?php _e('Categories', 'Freifunk_Erding'); ?></h2>
                   <ul>
                       <?php wp_list_categories(
                       array(
                           'orderby' => 'count',
                           'order' => 'DESC',
                           'show_count' => 1,
                           'title_li' => '',
                           'number' => 100
                       )
                   ); ?>
                   </ul>

                    </div> <!-- /.content -->
                    
                </div> <!-- /.col -->
           

          
           
        <div class="col-lg-3 col-md-3 col-sm-3 col-3 sidebar-wrapper"> 
            
            <?php get_sidebar('page'); ?>

        </div><!--/.col -->
    
     </div> <!--/.row -->
        
        
        
        
         
        
    </div><!-- container -->
    
    
    
    
<?php get_footer(); ?>
