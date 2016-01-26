<?php global $newmagz_option; ?>

<!-- Start : Footer Section -->
<footer id="colofone" class="footer">

<div id="footer-menu-section">
	<div class="container clearfix">
		<?php 
        $check_mobile = detect_mobile();        
        switch ($check_mobile) {
            case 'true':
                get_template_part('partials/footer/footer', 'mobile');  
                break;          
            default:
                get_template_part('partials/footer/footer', 'web'); 
                break;
        }       
        ?>
	</div>
</div>

<?php if ( is_active_sidebar('warrior-footer') ) { ?>
	<div id="footer-bottom">
		<div class="container clearfix">
			<div class="footer-widgets">
				<div class="row">
				<?php 
				// Footer Widgets
				dynamic_sidebar( 'warrior-footer' );
				?>
				</div>
			</div>
		</div>
	</div>
<?php } ?>
<?php
if( esc_attr( $newmagz_option['display_back_to_top'] ) ) {
    echo '<a id="scroll-top" href="#top"><span class="fa fa-angle-up"></span></a>';  // display back to top section
}
?>
</footer>
<!-- End : Footer Section -->
<?php wp_footer(); ?>
<div id="magazine_modal"></div>
<!-- 
<link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri() ?>/style.css">
<link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri() ?>/css/linecons.css">
<link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri() ?>/css/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri() ?>/css/animate.min.css">
<link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri() ?>/css/slicknav.css">
<link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri() ?>/css/flexslider.css">
<link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri() ?>/css/responsive.css"> -->
<link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri() ?>/css/reset.css">
<link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri() ?>/css/custom.css">
<link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri() ?>/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Lato%3A100%2C300%2C400%2C700%2C900%2C100italic%2C300italic%2C400italic%2C700italic%2C900italic%7CRoboto%3A700%7CMerriweather%3A300%2C400%2C700%2C900%2C300italic%2C400italic%2C700italic%2C900italic&ver=1450779305">
<link rel="stylesheet" type="text/css" href="http://magdev.tripzilla.com/web/landing_fonts/stylesheet.css">
<link rel="stylesheet" type="text/css" href="http://magdev.tripzilla.com/web/landing_fonts/bakery_font.css">

<!-- <script type="text/javascript" src="http://magdev.tripzilla.com/wp-includes/js/jquery/jquery.js"></script> 
<script type="text/javascript" src="<?= get_template_directory_uri() ?>/js/wow.min.js"></script>
<script type="text/javascript" src="<?= get_template_directory_uri() ?>/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="<?= get_template_directory_uri() ?>/js/jquery.flexslider-min.js"></script>
<script type="text/javascript" src="<?= get_template_directory_uri() ?>/js/jquery.fitvids.js"></script>
<script type="text/javascript" src="<?= get_template_directory_uri() ?>/js/jquery.slicknav.min.js"></script>
<script type="text/javascript" src="<?= get_template_directory_uri() ?>/js/jquery.justifiedGallery.min.js"></script>
<script type="text/javascript" src="<?= get_template_directory_uri() ?>/js/functions.js"></script>-->

<script type="text/javascript" src="http://magdev.tripzilla.com/wp-includes/js/jquery/jquery.js"></script>
<script type="text/javascript" src="http://magdev.tripzilla.com/web/js/tmp/wow.min.js"></script>
<script type="text/javascript" src="http://magdev.tripzilla.com/web/js/tmp/owl.carousel.min.js"></script>
<script type="text/javascript" src="http://magdev.tripzilla.com/web/js/tmp/jquery.flexslider-min.js"></script>
<script type="text/javascript" src="http://magdev.tripzilla.com/web/js/tmp/jquery.fitvids.js"></script>
<script type="text/javascript" src="http://magdev.tripzilla.com/web/js/tmp/jquery.slicknav.min.js"></script>
<script type="text/javascript" src="http://magdev.tripzilla.com/web/js/tmp/jquery.justifiedGallery.min.js"></script>
<script type="text/javascript" src="http://magdev.tripzilla.com/web/js/tmp/functions.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/map_multiple_marker.js"></script>

<!-- <script src="<?php// bloginfo('template_directory'); ?>/js/map_multiple_marker.js"></script>-->
<script type="text/javascript" src="http://magazine.tripzilla.com/web/js/jquery.backstretch.min.js"></script>
<script type="text/javascript" src="http://magdev.tripzilla.com/web/js/jquery.visible.min.js"></script>
<?php// $country_code = get_geoIP(); if ($country_code == 'SG') { ?>
<!--<script type="text/javascript" src="<?= get_template_directory_uri() ?>/js/single.js"></script>-->
<?php// } ?>

</body>
</html>