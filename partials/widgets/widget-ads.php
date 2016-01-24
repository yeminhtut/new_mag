<style type="text/css">
	.popup_ads .fa{margin-left: 10px;}
	.popup_title{
		font-family: 'bakeryregular';
	    margin-bottom: 10px;
	    font-size: 50px;
	    font-weight: 500;
	    text-align: center;
	}
	.ads-widget-des{margin-bottom: 10px; /*font-family: Merriweather;font-size: 14px;*/}
	.popup_ads{
		background: #de6868;
	    color: #fff;
	    letter-spacing: 1px;
	    font: 14px/160% Lato,Georgia,serif;
	    font-size: 11px;
	    padding: 10px 14px!important;
	    border-radius: 6px;
	}
	.close-modal:hover{cursor: pointer;}
	#magazine_modal {
	    display: none;
	    width: 100%;
	    height: 100%;
	    position: fixed;
	    top: 0;
	    overflow-y: scroll;
	    z-index: 1000;
	    bottom: 0;
	    background-color: rgba(0, 0, 0, 0.6);
	}
	.ads-banner-link a {
	    color: #FFF!important;
	    font-weight: 300
	}
	.ads-banner-link a:hover {
	    color: #c51818!important
	}
	#sidear_subscribe {
	    width: 80%;
	    margin: 30px auto 0
	}
	.form-button {
	    float: right;
	    background: #DE6868;
	    color: #fff;
	    letter-spacing: 1px;
	    font: 14px/160% Lato, Georgia, serif;
	    font-size: 11px;
	    padding: 6px!important;
	    width: 30%
	}
	#subscribe-form {
	    border: 1px solid #DE6868
	}
	#email-input {
	    float: left;
	    width: 70%;
	    height: 28px;
	    border: none;
	    padding: 10px;
	    background: 0 0
	}
	
	#subscribe-writeup {
	    font-size: 15px;
	    line-height: 18px;
	    letter-spacing: normal;
	    margin-bottom: 16px;
	    display: block;
	    font-weight: 400
	}
	.pop-up-form-wrap {
	    border: 1px solid #807f7f;
	    display: none;
	    position: fixed;
	    /*background-color: rgba(255, 255, 255, .8);*/
	    padding: 30px;
	    z-index: 1001;
	    width: 785px;
	    overflow: auto; 
	    background:#FFF;   	
	}
	.btn-close-splash-img {
	    position: fixed;
	    bottom: 5%;
	    left: 2%;
	    height: 40px
	}
	.sidebar-popup-close-btn {
	    position: absolute;
	    top: 1%;
	    border-radius: 50%;
	    right: 1%;
	    width: 20px;
	    height: 20px
	}
	.ads_link_span{
		text-decoration: underline;
		font-weight: bold;
	}
	.ads-banner-link,.ads-banner-link-external {
	    margin-top: 10px;
	    display: block;	    
	}
	.ads-banner-link:hover{cursor: pointer;}
	.ads-banner-icon{margin-right:10px;}
	.ads_link_span i,.ads-banner-icon i{color:#de6868;}
	.ads-widget-des .medium-icon .fa{font-size: 22px;font-weight: bold;}
	.ads-banner-link-external .post-list-style .post-title{margin-left: 30px;}
	.ads-banner-link-external .post-list-style .thumbnail .medium-icon .fa{font-size: 36px;}
	.icon-right{margin-left: 10px;}
	.ads_banner_divider{height: 1px;background: #de6868;}
	.ads_banner_header{font-family: 'bakeryregular';margin-bottom: 10px;font-size: 50px;font-weight: 500;}
	.ads-banner-link-external .post-list-style ul{margin-top:0px;}
	.ads-banner-link-external .post-list-style ul li{margin-bottom: 0px;}
	.pop_up_des{font-size: 20px;padding: 10px;}
	.pop-up-form-wrap .pop_up_write_up{padding: 20px;}
	.form-button-on-widget {
	    float: right;
	    background: #de6868;
	    color: #fff;
	    letter-spacing: 1px;
	    font: 14px/160% Lato,Georgia,serif;
	    font-size: 11px;
	    padding: 6px!important;
	    width: 30%;
	}
	#email-input-on-widget {
	    float: left;
	    width: 70%;
	    height: 28px;
	    border: none;
	    padding: 10px;
	    background: 0 0;
	}
	#subscribe-form-on-sidebar {
	    border: 1px solid #de6868;
	}
</style>
<div id="ads-banner" class="sidebar-widget row side-ads">
	<h4 class="ads_banner_header">brand managers!</h4>
	<span class="ads-banner-link" data-id="advertisement">		
		<p class="ads-widget-des">
			Want to see your travel brand or business in this story?<span class="ads_link_span">Talk to us about it.</span><span class="ads-banner-icon icon-right"><i class="fa fa-play-circle"></i></span>
		</p>
	</span>	
	<div class="ads_banner_divider"></div>
	<div class="ads-banner-link-external">
		<a href="http://magazine.tripzilla.com/contact-us" target="_blank">
			<div class="post-list-style">
				<ul>
					<li>
						<div class="thumbnail">
							<span class="ads-banner-icon medium-icon"><i class="fa fa-envelope"></i></span>
						</div>
						<h3 class="post-title">Send Press Releases &amp; Media Invites to <span class="ads_link_span">editor@tripzilla.com</span></h3>
						<div class="cls" style="clear:both;"></div>
					</li>
				</ul>
			</div>
		</a>		
	</div>
	<div class="ads-banner-link-external">	
		<a href="http://magazine.tripzilla.com/contribute" target="_blank">	
			<div class="post-list-style">
				<ul>
					<li>
						<div class="thumbnail">
							<span class="ads-banner-icon medium-icon"><i class="fa fa-pencil-square-o"></i></span>
						</div>
						<h3 class="post-title">Travellers! Submit your story <span class="ads_link_span">here!</span></h3>
						<div class="cls" style="clear:both;"></div>
					</li>
				</ul>
			</div>
		</a>
	</div>
	<div class="ads-banner-link-external">		
		<?php echo do_shortcode('[subscribe_form_sidebar]'); ?>
	</div>
	<!--forms-->
	<div id="advertisement" style="display:none;">
		<div class='pop-up-form-wrap'>
			<div class='white-layer'>
				<h3 class="popup_title">advertising &amp; collaboration</h3>
				<div class="row pop_up_write_up">
					<div class="column column-2">
						<img src="http://magdev.tripzilla.com/wp-content/uploads/2016/01/pop_up_pc.jpg">
					</div>
					<div class="column column-2 pop_up_des">
						<p class="ads-widget-des">Break through the noise with native ads!</p>
						<p class="ads-widget-des">We offer a variety of <b>integrated marketing solutions</b> across multiple channels, including <b>web,mobile and emails</b></p>		
					</div>
				</div>  
	        	<?php echo do_shortcode('[ads_form_popup]'); ?>
	        	<span class='sidebar-popup-close-btn close-modal'><i class="fa fa-times" style="font-size: 25px;"></i></span>
	        </div>
		</div>
	</div>
</div>
<script type="text/javascript">
jQuery(document).ready(function($) {  
		if ($(window).width() < 768) {$('#ads-banner').hide();};      
        $('.ads-banner-link').click(function(){ 
        	var pop_up_id = $(this).attr("data-id");
        	var ads_form = $('#'+pop_up_id).html();        	
        	$('#magazine_modal').show();
        	$('.background').show();
        	$('#sidebar-wrapper').removeClass('sticky-sidebar');
        	$('#ads-success').html('');
        	$('#ads_form').show();
        	$('#'+pop_up_id).show();
        	var windowWidth = $(window).width();
        	var pop_up_div = $('#'+pop_up_id).children();  

        	pop_up_div.show();        	
        	var half_of_div = 785/2;
        	var lyr_cont = pop_up_div;
	        var lyr_cont_height = lyr_cont.height() + 62;
	        var windowHeight = $(window).height();
	        var div_top = (windowHeight/2) - (lyr_cont_height/2);
	        if ($(window).height() > 627) {	            
	            $('.pop-up-form-wrap').css("top",  div_top);
	        }
	        else{
	        	$('.pop-up-form-wrap').css("top",  '0px');
	        	$('.pop-up-form-wrap').css("left", '0px');
	        	$('.pop-up-form-wrap').css("margin-top", '0px');
	        	$('.pop-up-form-wrap').css("padding", '10px');
	        	$('.ads-widget-des').css('display','none');
	        	$('.popup_title').css('font-size','16px');
	        	$('.listing-container .row').css('margin-top','10px');
	        	$('.white-layer').css('display','none');
	        }
	        //lyr_cont.css("left", '0px');
	        if (windowWidth > 768) {
	        	lyr_cont.css({
	            	left: ((windowWidth / 2) - half_of_div)
	        	});
	        };
	        if (windowWidth < 769) {
	        	lyr_cont.css({
	            	left: 0,
	            	width: '100%',
	            	height: '100%',    				
	        	});
	        	$('body').css({
	        		overflow: 'hidden',
	        	});
	        	$('.addthis-smartlayers-mobile').hide();
	        };
        });
        $('.close-modal').click(function(){
        	$('.pop-up-form-wrap').hide();
        	$('#magazine_modal').hide();
        	$('body').css({
	        		overflow: 'auto',
	        	});
        })
});

</script>


