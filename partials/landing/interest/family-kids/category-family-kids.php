<style type="text/css">
.main-hero{position:relative; margin:0; padding:0; width:100%; background: #000;}
.main-hero:after{position:relative; content:""; display:block; width:100%;}
.main-hero>.hero-search{position:absolute; margin-top: -67px; top: 50%; width: 100%; z-index:2;}

.main-hero>.hero-carousel-mask{position:absolute; top:0; left:0; right:0; bottom:0; background: -webkit-linear-gradient(top, transparent 0, rgba(0, 0, 0, 0.65) 100%); background: -o-linear-gradient(top, transparent 0, rgba(0, 0, 0, 0.65) 100%); background: -ms-linear-gradient(top, transparent 0, rgba(0, 0, 0, 0.65) 100%); background: linear-gradient(to bottom, transparent 0, rgba(0, 0, 0, 0.65) 100%); filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#00000000',endColorstr='#a6000000',GradientType=0); z-index:1;}
.main-hero>.hero-carousel{position:relative; margin:0; padding:0; height:400px; list-style:none; font-size:0;}
</style>
<main class="main-hero">
	<div class="hero-search">
		<h1 class="hsearch-text" id="interest-title">FAMILY &amp; KIDS</h1>
		<div id="interest-writeup" class="container clearfix">
			<p>	
				Constantly scratching your head while planning a family-friendly vacation? We feel you – it ain't easy to find something that pleases both the adults and kids alike. There's nothing better than enjoying a family vacation away from the stresses of daily life, so enjoy your holiday on us – we'll do the research for you! Read on to find ideas that are bound to put smiles on anyone, no matter the age! 
			</p>
		</div>
	</div>	
	<div id="hero-carousel" class="hero-carousel"></div>
</main>
<!--end of lading banner -->
<div id="interest-inspire" class="container clearfix">	
	<?php get_template_part('partials/landing/interest/family-kids/full', 'postList'); ?>
</div>

<div id="interest-maincontent">
	<div class="container" style="position:relative;">
		<div id="primary" class="content-area site-main" role="main">
			<?php get_template_part('partials/landing/interest/family-kids/post', 'listOne'); ?>
	    	<?php get_template_part('partials/landing/interest/family-kids/post', 'listTwo'); ?>
		</div>		
		<?php get_template_part('partials/landing/interest/family-kids/family-kids', 'sidebar'); ?>
		<div class="clear"></div>
		<?php// get_template_part('partials/landing/interest/shopping/post', 'listThree'); ?>
	</div>
</div>

<?php get_template_part('partials/landing/landing', 'footer'); ?>

<style type="text/css">
	#interest-writeup{margin-top:20px;text-align:center;color:#FFF;max-width:1000px}#sidebar-featured-article .author a{color:#c51818!important}.fetaured-caption{position:absolute;right:30px;top:0;background:#000;color:#fff;font-size:14px;padding:6px 30px}.landing-section-title{margin:40px 0;text-align:center;font-size:24px}#interest-inspiration article.hentry.slider-post .entry-content{background:0 0}#interest-inspire{margin:20px auto}#interest-title{font-size:60px;letter-spacing:8px;margin:0 auto;line-height:54px;text-align:center;color:#fff;font-family:Lato;font-weight:400}#interest-inspiration .entry-content .post-title,#interest-list3 .entry-content .post-title{font-size:16px}#landing-tab{margin-bottom:20px}#sidebar-featured-article{background:#ebebeb;padding:60px 30px 0}.post-list-style-landing .thumbnail{float:left;width:80px;margin-right:20px}.post-list-style-landing ul li{min-height:100px;list-style:none}.post-list-style-landing .post-title{margin-bottom:0;font-size:16px;padding-top:20px}.section-header:after{content:'';display:block;position:absolute;background:#000;height:2px;left:0;right:50%;bottom:0}#sidebar-featured-article .author{color:#c51818!important}.landing-featured li{display:inline-block;width:25%}#interest-inspiration .column img{border-left:1px solid #FFF}.item-thumbnail img{height:240px;width:100%}#interest-inspiration .entry-content{padding:20px;text-align:center}#interest-list3{padding-top:20px}#interest-list3 .column-2{padding-right:20px}.interest-section-title{border-bottom:1px solid #dedede;margin-bottom:20px;font-size:35px;padding-bottom:15px}#interest-list3 article{min-height:180px}#interest-list3 article.hentry.full-width-post.left-thumbnail{margin-bottom:20px}@media only screen and (min-width:300px) and (max-width:480px){#interest-maincontent .entry-meta,#interest-writeup{display:none}.main-hero>.hero-search{margin-top:-42px}#interest-title{font-size:36px;letter-spacing:6px;margin-bottom:0;line-height:36px}.main-hero>.hero-search>.hsearch-text{font-size:12px;line-height:44px;letter-spacing:2px}#interest-inspire #primary{margin-bottom:0;border-bottom:none}#sidebar-featured-article{padding:60px 30px 30px}#interest-inspire .postlistbox .entry-content{padding:10px}}@media only screen and (min-width:480px) and (max-width:768px){#landing-inspiration .row .column-4{width:50%}#interest-writeup{display:none}#interest-title{line-height:68px}}
</style>
<script type="text/javascript">
jQuery(document).ready(function($) {	
	$('#hero-carousel').css('height', $(window).height()*0.30); //set height 30% of the window
	$('.main-hero').css('height', $(window).height()*0.30); //set height 30% of the window		
	$("#hero-carousel").backstretch([
			'/wp-content/uploads/2016/01/family_and_kids.jpg'
	]);		
});

</script>