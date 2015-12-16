<?php defined('ABSPATH') or die();
/**
 * Default Footer
 * @author Nina Taberski-Besserdich (nina.taberski@besserdich.com)
 * @package WordPress
 * @subpackage BIC Bootstrap Wordpress Theme
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
<div align="center">Design<a href="http://www.weimarnetz.de/" target="_blank"> Feifunk Weimar </a> | Wordpress Umsetzung <a href="http://www.planetfox.de" target="_blank">PlaNet Fox </a> 
  für <a href="http://www.freifunk-erding.de" title="Freifunk Erding " target="_blank">Freifunk Erding</a><p>
  
   </div>
</body>
</html>
