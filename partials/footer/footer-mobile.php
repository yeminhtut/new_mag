<div class="social" style="text-align:center;float:none !important;">
	<div class="copyright">© TripZilla 2015</div>
</div>		

<div id="footer-mobile">
	<?php
	// Display footer menu
	if ( has_nav_menu( 'footer-menu' ) ) {
		wp_nav_menu( array ( 'theme_location' => 'footer-menu', 'container' => null, 'menu_class' => 'footer-menu', 'depth' => 0 ) );
	}
	?>
</div>
<style type="text/css">
#footer-menu-section .social{text-align: center;}
#footer-mobile{text-align: center;padding-bottom: 10px;}
#footer-mobile ul li{display: inline-block;list-style-type: none;}
#footer-mobile ul li:first-child:after {
    display: inline-block;
    color: #999;
}
#footer-mobile ul li + li:before {
	content: " | ";
	padding: 0 5px;
}
</style>