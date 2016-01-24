<?php
/**
 * Template for displaying header part.
 *
 * @package WordPress
 * @subpackage Newmagz
 * @since Newmagz 1.0.0
 */

global $newmagz_option;
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta property="fb:admins" content="100008034553082"/>
<meta property="fb:admins" content="592129311"/>
<meta property="fb:app_id" content="450376811760233" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable = yes" >
<link rel="shortcut icon" href="/wp-content/uploads/2014/04/blog_fav.ico" type="image/x-icon" />
<link rel="icon" href="http://magazine.tripzilla.com/wp-content/uploads/2014/04/blog_fav.ico" type="image/x-icon" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php 
	$country_code = get_geoIP();
	if ($country_code == 'MY') {?>
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		  ga('create', 'UA-18745286-16', 'tripzilla.com');
		  ga('require','displayfeatures');
		  ga('send', 'pageview');
		</script>
<?php	}else{ ?>
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-18745286-16', 'tripzilla.com');
		  ga('require','displayfeatures');
		  ga('send', 'pageview');
		</script>
<?php } ?>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=450376811760233";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<?php wp_head(); ?>
<style type="text/css">
.single-post article.hentry .entry-content p{font-size:16px !important;}.header-search input{min-width:160px;float:right;font-size:14px;width:160px;background:#EBEBEB;border:none}
.header-search{margin-right:50px;float:right;margin-top:9px;margin-left:10px;position:relative;border:none;border-radius:20px;font-family:Lato;font-weight:400;font-style:normal;color:grey;font-size:15px;padding:0 10px;background-color:#3A3A3A;}
#searchbar_submit{padding:7px 10px!important;border:none;z-index:999;position:absolute;right:0;background-color:#3A3A3A;margin-right:10px}#input-web{border:none!important;background:#3A3A3A!important}
.header-search .fa-search{color:#FFF!important}
</style>
</head>
<body <?php body_class(); ?>>
	<!-- Start: Search Form -->
	<div id="search-full">
		<div class="container">
			<div class="overlay"></div>
			<?php get_search_form(); ?>
		</div>
	</div>
	<!-- End: Search Form -->
	<!-- Start : Header Section -->
	<?php 
		// $check_mobile = detect_mobile(); 		
		// switch ($check_mobile) {
		// 	case 'true':
		// 		get_template_part('partials/header/header', 'mobile'); 
		// 		break;			
		// 	default:
		// 		get_template_part('partials/header/header', 'web'); 
		// 		break;
		// }
		// get_template_part('partials/header/header', 'mobile'); 
		// get_template_part('partials/header/header', 'web'); 		
	?>
	<!-- End : Header Section -->
<style type="text/css">
/*@media screen and (max-width:640px){
		.header-web{display: none;}
		.header-mobile{display: block;}
	}
	@media screen and (min-width:640px){
		.header-web{display: block;}
		.header-mobile{display: none;}
		.site-navigation ul li a, .site-navigation ul li a a{
			display: inline-block;
			color:#333;
		}
	}*/
</style>