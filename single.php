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
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <?php get_template_part('content-single'); ?>
    <?php endwhile;
    endif; ?>


 <?php the_tags('Tagged with: <span class="label label-info">','</span> <span class="label label-info">','</span>'); ?>



            </div> <!-- /.content -->
        </div> <!-- /.col-lg-9 /.col-md-9 /.col-sm-9 /.col-9 -->
        <div class="col-lg-3 col-md-3 col-sm-9 col-9 sidebar-wrapper">     
            <?php get_sidebar('post'); ?> 
        </div><!-- /.col-lg-3 /.col-md-3 /.col-sm-3 /.col-3  -->
    </div> <!-- /.row -->
</div> <!-- /.container -->
<?php get_footer(); ?>