<?php
/**
 * Template for displaying single posts.
 *
 * @package WordPress
 * @subpackage Newmagz
 * @since Newmagz 1.0.0
 */
?>
<?php get_header(); ?>
<?php global $newmagz_option; ?>
<?php $check_mobile = detect_mobile(); ?>
<!-- Start : Single Page -->
<div id="maincontent">
	<div class="container clearfix">
		<div id="primary" class="content-area site-main" role="main">
			<section id="single-post" class="single-post">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class( 'hentry full-width-post' ); ?> >
					<header class="single-post-header">						
						<h1 class="post-title"><?php the_title(); ?></h1>
						<?php echo warrior_post_meta(); // display post meta ?>
					</header>
					<div class="thumbnail">
					<?php
					if ( $newmagz_option['display_featured_image'] ) :
						// Featured image
						if ( has_post_thumbnail() ) {
							echo '<a href="'. get_permalink() .'" title="'. get_the_title() .'">';
							the_post_thumbnail('newmagz-single-thumbnail-large');
							echo '</a>';
						} else {
							echo '<a href="'. get_permalink() .'" title="'. get_the_title() .'">';
							echo '<img src="http://placehold.it/826x532&text=&nbsp;" />';
							echo '</a>';
						}
					endif;	
					?>
					</div>
					<div class="entry-content">
						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '<p class="page-links"><span class="page-links-title">' . esc_html__( 'Pages:', 'newmagz' ) . '</span>', 'after' => '</p>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
					</div>

					<div class="tags">
					<?php
					if ( $newmagz_option['display_tags'] ) :
						if( has_tag() ) : // display tags
							the_tags( '<span>', '</span><span>', '</span>' );
						endif;
					endif;
					?>
					</div>	

					<?php get_template_part( 'includes/share-buttons' ); // display share buttons section ?>
					<?php warrior_set_post_views( get_the_ID() ); // set post view count ?>
				</article>
			<?php endwhile; endif; wp_reset_postdata(); ?>
			
			<?php get_template_part( 'includes/post-nav' ); // display post navigation section ?>
			
			<?php get_template_part( 'includes/author-bio' ); // display about author section ?>
			<?php 						
				switch ($check_mobile) {
					case 'true':
						get_template_part( 'includes/related-postsMobile' );
						break;			
					default:
						get_template_part( 'includes/related-posts' );
						break;
				}		
			?>
				<div id="facebook_cmt">
					<h3 class="main-box-title" style="border-bottom:none !important;">Share with us your thoughts</h3>
					<div id="comment_box_wrap" style="margin-bottom:40px;">
						<div class="fb-comments" data-href="<?php the_permalink() ?>" data-numposts="5" data-colorscheme="light" data-width="100%" data-notify="true"></div>
					</div>	
				</div>
				<?php
					if ( is_user_logged_in()  ) {						
						$user_id = ($current_user->data->ID);
						if ( $user_id == 101049 ) {
						    if(function_exists('pf_show_link')){echo pf_show_link();}
						}					
					} 
				?>
			</section>
		</div>
		<?php get_sidebar(); ?>
	</div>
</div>
<!-- End : Single Page -->
<?php get_footer(); ?>
<?php 
	switch ($check_mobile) {
		case 'true':
			get_template_part('partials/widgets/widget','subscribeSingleMobile');
			break;			
		default:
			get_template_part('partials/widgets/widget','subscribeSingle');
			break;
	}
?>

<style type="text/css">
	@media screen and (max-width: 480px){#custom_iframe iframe{height:220px;}}	
</style>
