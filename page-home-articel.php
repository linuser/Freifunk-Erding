<?php defined('ABSPATH') or die();
/**
   Template Name: Freifunk mit Artikel
 * Description: Page template with a content container and right sidebar. 
 * @author Nina Taberski-Besserdich (nina.taberski@besserdich.com)
 * @package WordPress
 * @subpackage BIC Bootstrap Wordpress Theme
 */
?>
<?php get_header(); ?>
<p></p>

    <div id="banner" class="jumbotron jumbotron-branded cloudy-bg ff-logo-bg">
      <div class="container">
        <h1><?php echo esc_attr(get_bloginfo('name', 'display')); ?></h1>
        <p class="lead"><?php bloginfo('description'); ?></p>
        <p>
          <a class="btn btn-primary btn-lg" href="/mitmachen">Jetzt Mitmachen &raquo;</a>
          <a class="btn btn-warning btn-lg" href="/kontakt">Hilfe bekommen &raquo;</a>
        </p>
        
      </div>
</div>
     <div class="container main">
 <div class="section-wide sec">
	<div class="row">
	<div class="section-title col-12">
		<h2> Latest Articles</h2>
		<p>Latest posts from the blog </p>
	</div>
	
	<div class="boxitems">
		 <?php 	
		 $port_cat =ft_of_get_option('fabthemes_portfolio');
		 $query = new WP_Query( array( 'cat' => -$port_cat,'posts_per_page' =>4 ) );
		 if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();	?>
		 	
		 <div class="col-sm-3 col-6 postbox">
		 			
		 <?php
			$thumb = get_post_thumbnail_id();
			$img_url = wp_get_attachment_url( $thumb,'full' ); //get full URL to image (use "large" or "medium" if the images too big)
			$image = aq_resize( $img_url, 750, 500, true ); //resize & crop the image
		 ?>
					
		 <?php if($image) : ?>
		 	<div class="hthumb">
		 	
			 	<a href="<?php the_permalink(); ?>"><img class="img-responsive" src="<?php echo $image ?>"/></a>
		 	</div>
			
		 <?php endif; ?>

		 <h3><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h3>
		 <div class="hometa"> <?php web2feel_posted_on(); ?> </div>
		 
		
		  <?php the_excerpt(); ?>
		 </div>
		
		 <?php endwhile; endif; ?>
		 
	</div>
	
	</div>
</div>
     
    </div><!-- container -->
    
    
    
    
<?php get_footer(); ?>
