<style type="text/css">
.main-hero{position:relative; margin:0; padding:0; width:100%; background: #000;}
.main-hero:after{position:relative; content:""; display:block; width:100%;}
.main-hero>.hero-search{position:absolute; margin-top: -67px; top: 50%; width: 100%; z-index:2;}
.main-hero>.hero-search>.hsearch-text{margin:0 auto; width: auto; font-size: 20px;line-height: 54px; text-shadow: 2px 2px 4px rgba(0,0,0,.75); letter-spacing: 5px; text-align: center; color: #fff;font-family: 'robotoblack';}
.main-hero>.hero-carousel-mask{position:absolute; top:0; left:0; right:0; bottom:0; background: -webkit-linear-gradient(top, transparent 0, rgba(0, 0, 0, 0.65) 100%); background: -o-linear-gradient(top, transparent 0, rgba(0, 0, 0, 0.65) 100%); background: -ms-linear-gradient(top, transparent 0, rgba(0, 0, 0, 0.65) 100%); background: linear-gradient(to bottom, transparent 0, rgba(0, 0, 0, 0.65) 100%); filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#00000000',endColorstr='#a6000000',GradientType=0); z-index:1;}
.main-hero>.hero-carousel{position:relative; margin:0; padding:0; height:400px; list-style:none; font-size:0;}
</style>
<main class="main-hero">
	<div class="hero-search">
		<h1 class="hsearch-text" id="landing-title">JAPAN</h1>
		<h2 class="hsearch-text">The perfect blend of old and new</h2>
	</div>	
	<div class="hero-carousel-mask"></div>
	<div id="hero-carousel" class="hero-carousel"></div>
</main>
<!--end of lading banner -->
<div id="landing-writeup" class="container clearfix	">	
	<div id="secondary-content">
		<img width="294" height="196" src="/wp-content/uploads/2016/01/japan-map.jpg">
	</div>
	<div id="primary" style="padding-top:10px;">
		<p>Japan is worth a visit for sheer gastronomic pleasure, stretching beyond the world of irrisistible fresh sashimi and sushi.</p> 

		<p>Interesting sights will greet you in Japan, from speedy bullet trains and top-notch toilet seats to vending machines that sell everything. At the heart of this innovative modernity, old-age tradition still lingers. In the streets of Kyoto, you can catch sight of a strolling geisha and experience a traditional tea ceremony. In Tokyo, you will see temples and shrines dotting the cityscape.</p> 

		<p>Japan will draw you back again and again, to enjoy its cosmopolitan cities and picturesque country, and to explore its quirks and intricacies. Let your discovery begin.</p>
		
	</div>	
</div>
<?php get_template_part('partials/landing/destination/japan/full', 'postList'); ?>
<div id="maincontent">
	<div class="container clearfix" style="position:relative;">
		<div id="primary" class="content-area site-main" role="main">
			<?php get_template_part('partials/landing/destination/japan/post', 'listTab'); ?>
	    	<?php get_template_part('partials/landing/destination/japan/post', 'listOne'); ?>
		</div>		
		<?php get_template_part('partials/landing/destination/japan/japan', 'sidebar'); ?>
	</div>
</div>

<?php get_template_part('partials/landing/destination/japan/japan', 'footer'); ?>


<style type="text/css">
#sidebar-featured-article .author a{color:#c51818!important}.fetaured-caption{position:absolute;right:30px;top:0;background:#000;color:#fff;font-size:14px;padding:6px 30px}.landing-section-title{margin:30px 0 20px;text-align:center;font-size:24px}#landing-inspiration{background-color:#EBEBEB; margin: 0 10px 50px;}#landing-inspiration article.hentry.slider-post .entry-content{background:0 0}#landing-writeup{margin:40px auto}#landingslider{overflow:hidden;position:relative}#landingslider .warrior-carousel.owl-carousel .owl-stage-outer{overflow:visible}#landingslider .warrior-carousel .entry-content h3.post-title{margin-bottom:0}#landing-title{font-family:edo_szregular;font-size:110px;letter-spacing:12px;margin-bottom:30px}#landing-tab{margin-bottom:20px}#sidebar-featured-article{background:#ebebeb;padding:60px 30px 0}#expert-title h4{border-bottom:solid 2px #FB8F8F;font-family:Lato;text-transform:uppercase;letter-spacing:3px;font-weight:400;font-style:normal;color:#212121;font-size:12px}#expert-title{position:relative;text-align:center}#expert-title:after,.section-header:after{content:'';display:block;position:absolute;height:2px;bottom:0}#expert-title:after{background:#c51818;left:22%;right:22%}.post-list-style-landing .thumbnail{float:left;width:80px;margin-right:20px}.post-list-style-landing ul li{min-height:100px;list-style:none}.post-list-style-landing .post-title{margin-bottom:0;font-size:16px;padding-top:20px}.section-header:after{background:#000;left:0;right:50%}#sidebar-featured-article .author{color:#c51818!important}@media only screen and (min-width:300px) and (max-width:480px){.main-hero>.hero-search{margin-top:-42px}#landing-title{font-size:60px;letter-spacing:6px;margin-bottom:0}.main-hero>.hero-search>.hsearch-text{font-size:12px;line-height:44px;letter-spacing:2px}#landing-writeup #primary{margin-bottom:0;border-bottom:none}}@media only screen and (min-width:480px) and (max-width:768px){#landing-inspiration .row .column-4{width:50%}}
</style>
<script type="text/javascript" src="http://tripzilla.com/js/jquery.backstretch.min.js"></script>
<script type="text/javascript">
jQuery(document).ready(function($) {	
	$('#hero-carousel').css('height', $(window).height()*0.30); //set height 30% of the window
	$('.main-hero').css('height', $(window).height()*0.30); //set height 30% of the window		
	$("#hero-carousel").backstretch([
			'/wp-content/uploads/2016/01/japan-banner.jpg'
	]);		
});
</script>