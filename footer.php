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
<link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri() ?>/css/reset.css">
<link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri() ?>/style.css">
<link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri() ?>/css/linecons.css">
<link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri() ?>/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri() ?>/css/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri() ?>/css/animate.min.css">
<link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri() ?>/css/slicknav.css">
<link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri() ?>/css/flexslider.css">
<link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri() ?>/css/flexslider.css">
<link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri() ?>/css/responsive.css">
<link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri() ?>/css/custom.css">

<link rel="stylesheet" type="text/css" href="http://magdev.tripzilla.com/web/landing_fonts/stylesheet.css">
<link rel="stylesheet" type="text/css" href="http://magdev.tripzilla.com/web/landing_fonts/bakery_font.css">
<style type="text/css">
.airport_tooltip,article.hentry.slider-post .entry-content{position:relative}body{color:#343434}article.hentry.slider-post .thumbnail{min-height:200px}ul.tab-nav li{width:33.3333%;text-align:center}ul.tab-nav{margin-bottom:20px;border-bottom:1px solid #DEDADA!important}ul.tab-nav li a{border-right:1px solid #EAE6E6!important}#about-author .detail p{margin-bottom:18px}#about-author .detail p a{color:#c51818}#mainslider{margin-bottom:60px}#logo{max-width:320px;padding-bottom:40px;padding-top:40px}#map-canvas{width:100%;min-height:385px;background-color:#ddd;cursor:pointer}#section3 img{height:160px!important}#block-line{width:100%;height:1px;background:red;margin:20px 0}#single-post article .entry-content a{color:#f60;text-decoration:underline}.post-list-style ul li{padding-right:20px}.entry-content .alignnone img{width:100%}.copyright{font-family:Lato;font-weight:400;letter-spacing:1px;text-transform:uppercase;font-size:12px}.social{padding-top:10px!important}.category-interest a{margin-bottom:20px!important}.entry-content img{display:block}.owl-carousel .owl-item img{height:240px}.homepage-widget .section-title h4{text-transform:capitalize}.airport_tooltip{display:inline}.airport_tooltip:hover:after{color:#c7254e;background-color:#f9f2f4;border-color:#d6e9c6;border-radius:0;bottom:22px;content:attr(title);left:20%;padding:2px 4px;position:absolute;z-index:98;text-align:center;width:180px}.airport_tooltip:hover:before{border:solid;border-color:#f9f2f4 transparent;border-width:6px 6px 0;bottom:16px;content:"";left:22%;position:absolute;z-index:99}.fz_roundtrip .template-inline{text-decoration:none;color:#c7254e;background-color:#f9f2f4;padding:4px 6px;font-size:12px;font-weight:600}.fz_roundtrip .template-inline:hover{background:#FFF;color:#1683b1}.fz_roundtrip img{display:inline-block}.entry-content img{width:100%}.airline_logo{margin-left:4px;height:18px!important;margin-bottom:-4px;width:auto!important}.related-post img{height:150px}.related-post a{color:#000!important;text-decoration:none!important}.pagination-holder .prev{float:left}.owl-dot{opacity:.2}#maincontent{padding-top:20px}#scroll-top{bottom:50px}#archive-page article.hentry.full-width-post.left-thumbnail h3.post-title{-webkit-line-clamp:4}@media only screen and (min-width:960px) and (max-width:1080px){nav#main-menu.site-navigation{max-width:624px}#logo{max-width:220px}nav#main-menu.site-navigation ul li a{padding:8px;font-size:12px}}@media screen and (max-width:780px){article.hentry.full-width-post.left-thumbnail{margin-bottom:20px}#footer-widgets .column,.footer-widgets .column{margin-bottom:0}.author-box{margin-bottom:20px}.homepage-widget{margin-bottom:10px}.related-post img{height:auto}.article-widget{margin-bottom:20px}.pagination{margin:30px 0}#mainslider,#primary,#secondary-content{margin-bottom:20px}#recent-mini-row .column{height:80px}#footer-widgets .inner img{max-height:200px}#maincontent{padding-top:20px}article.hentry.slider-post .entry-content h3{margin-bottom:0}}@media only screen and (max-width:1200px) and (min-width:600px){#main-menu>ul.main-menu{display:block}.site-navigation ul li{display:inline-block}.site-navigation ul li.menu-item-has-children ul.sub-menu{position:absolute;top:100%;background-color:#313131;z-index:11}nav#main-menu.site-navigation ul li.menu-item-has-children ul.sub-menu li a{padding:10px}}@media only screen and (max-width:1080px) and (min-width:960px){nav#main-menu.site-navigation{max-width:100%}}nav#main-menu.site-navigation{float:none!important}
</style>
<script type="text/javascript" src="<?= get_template_directory_uri() ?>/js/wow.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/map_multiple_marker.js"></script>
<?php 
    $country_code = get_geoIP();   
    if ($country_code == 'SG') { ?>
        <script type="text/javascript">
        jQuery(document).ready(function($) {
        var fz = $(".fz_roundtrip");
        if (fz) {
            $(".fz_roundtrip").each(function(){
                var air_port_id = $(this).attr('id');
                var template = $(this).data("template");
                var airport = $('#'+air_port_id).html().toUpperCase();
                var surl = "http://flyzilla.com/widget/asidejson/SIN/"+airport; 
                $.ajax({
                    type: 'GET',
                    url:surl,
                    crossDomain: true,
                    contentType: "text/json; charset=utf-8",
                    dataType: "jsonp",
                    success:function(data){
                        if (data && data.response.status == 'OK') {     
                            var dest_name = data.response.destinations[0].name;
                            var dest_name_lower = dest_name.toLowerCase();
                            var dest_slug = dest_name_lower.replace(" ", "-");
                            var dest_code = data.response.destinations[0].code;
                            var dest_currency = data.response.destinations[0].currency;
                            if (dest_currency == 'SGD') {dest_currency='S$'};
                            var airlineName = data.response.destinations[0].outbound_airline;
                            var airlineLogo = data.response.destinations[0].outbound_airline_logo;
                            var fare = data.response.destinations[0].fare.replace(".00", "");                           
                            var html = '<a title="Singapore to '+dest_name+' round trip airfare by '+airlineName+' from '+dest_currency+''+fare+'" class="airport_tooltip template-inline" href="https://flyzilla.com/flight/fromto/SIN/'+airport+'/cheap-flights-from-singapore-to-'+dest_slug+'" target="_blank">\
                                        <span>SIN <img src="/web/images/airportDirections.png" width="12px" class="airline_logo"> '+dest_code+': '+dest_currency+''+fare+'\
                                        <img class="airline_logo" src="'+airlineLogo+'"></span></a>'; 
                            if (template == 'block') {
                                var html = '<a href="https://flyzilla.com/flight/fromto/SIN/'+airport+'/cheap-flights-from-singapore-to-'+dest_slug+'" target="_blank"><div class="widget-frame"><div class="title">All-in roundtrip</div>\
                                            <div class="content"><div class="left"><span>Singapore to</span><label>'+dest_name+'</label></div>\
                                                <div class="right"><span class="from">From</span><span class="currency">'+dest_currency+'</span><label class="price">'+fare+'</label>\
                                                </div><div class="checkdates">CHECK FLIGHTS</div></div></div></a>'; 
                            };                          
                            $('#'+air_port_id).html(html);
                            $('#'+air_port_id).show();
                        };
                    },
                    error: function(xhr, status, error) {},
                });
            });
        };
    });
    </script>
<?php } ?>
<script type="text/javascript" src="http://magazine.tripzilla.com/web/js/jquery.backstretch.min.js"></script>
<?php 
    //if (is_single('1773')) {
 ?>
<script type="text/javascript" src="http://magdev.tripzilla.com/web/js/jquery.visible.min.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function($) {  
        console.log('hello');      
        var sticky = $('#ads-banner');
        if (sticky.length) {
            var stickySidebar = $('#sticky_div').offset().top; 
        };
        console.log(stickySidebar)
        var sidebarHeight = $('.sidebar').height() + 400;
        var articleHeight = $('#primary').height();
        var sidebarWidth  = $('#secondary-content').width();
        var windowWidth   = $(window).width();
        if (windowWidth > 1000) {
            sticky_sidebar(stickySidebar,sidebarHeight,articleHeight,sidebarWidth,windowWidth);
        }        
        $(window).bind('resizeEnd', function() {
            console.log('default one is' + stickySidebar);
            var sidebarHeight = $('.sidebar').height() + 400;
            var articleHeight = $('#primary').height();
            var sidebarWidth  = $('#secondary-content').width();
            var newWindowWidth   = $(window).width();
            //console.log('window size changed and stop now. Window size now is' + newWindowWidth);
            if (newWindowWidth>1000) {
                var newstickySidebar = stickySidebar;          
                var sidebarWidth  = $('#secondary-content').width(); 
                $('#sidebar-wrapper').css({width:sidebarWidth});                  
                sticky_sidebar(newstickySidebar,sidebarHeight,articleHeight,sidebarWidth,newWindowWidth);
            }            
            if (newWindowWidth < 1000) {
                $('#sidebar-wrapper').removeClass("sticky-sidebar" );
                var sidebarWidth  = $('#secondary-content').width();
                $('#sidebar-wrapper').css({
                        width:sidebarWidth
                    });
                };
                //reposition popup
                if($('.pop-up-form-wrap').is(':visible')){
                    console.log('it is visible and' + newWindowWidth);
                    var lyr_cont_height = $('.pop-up-form-wrap').height();
                    var windowHeight = $(window).height();
                    var div_top = (windowHeight/2) - (lyr_cont_height/2);
                    if ($(window).height() > 627) {             
                        $('.pop-up-form-wrap').css("top",  div_top);
                    }
                    else{
                        $('.pop-up-form-wrap').css("width",'100%');
                    }
                    var half_of_div = 785/2;
                    $('.pop-up-form-wrap').css({
                        left: ((newWindowWidth / 2) - half_of_div)
                    });
                }
        });

        $(window).resize(function() {
            if(this.resizeTO) clearTimeout(this.resizeTO);
            this.resizeTO = setTimeout(function() {
                $(this).trigger('resizeEnd');
            }, 300);
        });

        function sticky_sidebar(stickySidebar,sidebarHeight,articleHeight,sidebarWidth,windowWidth){ 
            var stickySidebar = stickySidebar;
            var sidebarHeight = sidebarHeight;
            var articleHeight = articleHeight;
            var sidebarWidth = sidebarWidth;
            var windowWidth  = windowWidth;
            if (windowWidth > 1000) { 
                $(window).on('scroll',function(){
                    var div_show = false; 
                        if (($('#advertisement .pop-up-form-wrap').css('display') == 'block')) {
                            var div_show = true;                        
                        }
                    var windowWidth = $(window).width(); 
                    if ($(document).scrollTop() > stickySidebar && articleHeight > sidebarHeight && div_show==false && windowWidth > 1000) {
                        $('#sidebar-wrapper').addClass('sticky-sidebar');
                        $('#non_sticky_wrapper').css('display','none');
                        $('#sidebar-wrapper').css({
                            width:sidebarWidth
                        });
                    } 
                    else {                    
                        $('#sidebar-wrapper').removeClass('sticky-sidebar');
                        $('#non_sticky_wrapper').css('display','block');
                    }
                });
            }; 
        }  
    });
</script>
<style type="text/css">
.sticky-sidebar{position: fixed;background:#FFF;top:50px;}
.non-sticky-sidebar{position: static;}
</style>
<?php //} ?>
</body>
</html>