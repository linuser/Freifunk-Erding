<?php defined('ABSPATH') or die();
/**
 * Default Footer
 * @author PlaNet Fox  Alexander Fox
 * @package WordPress
 * @subpackage Freifunk_Erding 
 */
?>
<footer>

<div class="footer-wrapper">
    
      <div class="row">
            <!--  <div class="footer-divider"></div>-->
            <div class="container">
                <?php get_sidebar('footer'); ?>
            </div>
        </div>
    </div>

    <div class="copyright-wrapper">
        <div class="row ">
            <div class="container">

                <div class="row copyright">    
                    <div class="col-md-12">


                        <div class="pull-left copyright-text">
                            <?php
                            $options = get_option('bicbswp_theme_options');
                            if ($options['footertext'] != '') {
                                echo ('<p>');
                                echo stripslashes($options['footertext']);
                                echo ('</p>');
                            } else {
                                ?>
                              
                            <?php } ?>

                        </div>

                        <div class="footer-menu-wrapper">

                            <?php
                            if (has_nav_menu('footer-menu')) {

                                wp_nav_menu(array(
                                    'menu' => '',
                                    'theme_location' => 'footer-menu',
                                    'depth' => 1,
                                    'container' => false,
                                    'menu_class' => 'footer-menu',
                                    'fallback_cb' => 'wp_page_menu',
                                    'walker' => new wp_bootstrap_navwalker())
                                );
                            }
                            ?>

                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</footer>
<?php wp_footer(); ?>
<hr />
<div id="container">
<div align="center">
  <p><a href="http://creativecommons.org/licenses/by-nc-sa/3.0/de/" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/bootstrap/images/cc.png" width="88" height="31" /></a></p>
  <p>Design<a href="http://www.weimarnetz.de/" target="_blank"> Freifunk Weimar </a> | Wordpress Umsetzung <a href="http://www.planetfox.de" target="_blank">PlaNet Fox </a> 
    für <a href="http://www.freifunk-erding.de" title="Freifunk Erding " target="_blank">Freifunk Erding</a></p>
  <p><a href="https://www.freifunk-erding.de/Kontakt/"><img src="<?php bloginfo('template_directory'); ?>/bootstrap/images/flat_web_icon_set/color/Email.png" width="32" height="32" /></a>
  
    <a href="https://www.facebook.com/freifunkerding/"><img src="<?php bloginfo('template_directory'); ?>/bootstrap/images/flat_web_icon_set/color/facebook (1).png" alt="Facebook" width="31" height="32" /></a>  <a href="https://www.freifunk-erding.de/feed/"><img src="<?php bloginfo('template_directory'); ?>/bootstrap/images/flat_web_icon_set/color/rss.png" alt="RSS Feed" width="31" height="32" /></a>    
</div>
   </div>
</body>
</html>
