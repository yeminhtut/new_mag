<ul id="menu-main_menu" class="main-menu">
	<li id="menu-item-13" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children">
		<a href="#">Destinations</a>
		<ul class="sub-menu" id="dest-menu" >			
				<div id="dest-sub-menu">
					<div class="row">
						<div class="dest-sub-menu"><a href="/category/destinations/asia/east-asia/south-korea"><img src="/web/images/sub-menu/desktop/korea.jpg"></a></div>
						<div class="dest-sub-menu"><a href="/category/destinations/asia/southeast-asia/singapore"><img src="/web/images/sub-menu/desktop/sg.jpg"></a></div>
						<div class="dest-sub-menu"><a href="/category/destinations/asia/southeast-asia/malaysia"><img src="/web/images/sub-menu/desktop/malaysia.jpg"></a></div>
						<div class="dest-sub-menu"><a href="/category/destinations/europe"><img src="/web/images/sub-menu/desktop/europe.jpg"></a></div>
					</div>
					<div class="row">
						<div class="dest-sub-menu"><a href="/category/destinations/oceania/australia"><img src="/web/images/sub-menu/desktop/aussie.jpg"></a></a></div>
						<div class="dest-sub-menu"><a href="/category/destinations/asia/east-asia/japan"><img src="/web/images/sub-menu/desktop/japan.jpg"></a></a></div>
						<div class="dest-sub-menu"><a href="/category/destinations/asia/southeast-asia/thailand"><img src="/web/images/sub-menu/desktop/thailand.jpg"></a></div>
						<div class="dest-sub-menu"><a href="/category/destinations/asia/southeast-asia/indonesia"><img src="/web/images/sub-menu/desktop/indo.jpg"></a></div>
					</div>
				</div>				
				<div class="other-dest-menu">									
					<h5><a href="/category/destinations/asia/southeast-asia">SOUTH EAST ASIA</a></h5>
					<ul class="a">
						<li><a href="/category/destinations/asia/southeast-asia/cambodia"><i class="fa fa-circle" style="margin-bottom: 6px;"></i>Cambodia</a></li>
						<li><a href="/category/destinations/asia/southeast-asia/laos"><i class="fa fa-circle" style="margin-bottom: 6px;"></i>Laos</a></li>
						<li><a href="/category/destinations/asia/southeast-asia/myanmar"><i class="fa fa-circle" style="margin-bottom: 6px;"></i>Myanmar</a></li>
						<li><a href="/category/destinations/asia/southeast-asia/philippines"><i class="fa fa-circle" style="margin-bottom: 6px;"></i>Philippines</a></li>
						<li><a href="/category/destinations/asia/southeast-asia/vietnam"><i class="fa fa-circle" style="margin-bottom: 6px;"></i>Vietnam</a></li>
					</ul>
				</div>
				<div class="other-dest-menu">									
					<h5><a href="/category/destinations/asia/east-asia">EAST ASIA</a></h5>
					<ul class="a">
						<li><a href="/category/destinations/asia/east-asia/hong-kong"><i class="fa fa-circle" style="margin-bottom: 6px;"></i>Hong Kong</a></li>
						<li><a href="/category/destinations/asia/east-asia/japan"><i class="fa fa-circle" style="margin-bottom: 6px;"></i>Japan</a></li>
						<li><a href="/category/destinations/asia/east-asia/taiwan"><i class="fa fa-circle" style="margin-bottom: 6px;"></i>Taiwan</a></li>
					</ul>
				</div>
				<div class="other-dest-menu">
					<h5><a href="/category/destinations/africa">AFRICA</a></h5>
					<h5><a href="/category/destinations/north-america">NORTH AMERICA</a></h5>
					<h5><a href="/category/destinations/oceania">OCEANIA</a></h5>
					<h5><a href="/category/destinations/asia/rest-of-asia">REST OF ASIA</a></h5>
				</div>
				<div class="clear"></div>			
		</ul>
	</li>
	<li id="interest-parent-menu" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children"><a href="#">Interests</a>
				<ul class="sub-menu" style="display: none;" id="interest-menu" >
				<div class="row">
					<div class="interest-menu"><a href="/category/interest/sports-adventure"><img src="/web/images/sub-menu/desktop/sports.jpg"></a></div>
					<div class="interest-menu"><a href="/category/interest/shopping-eating"><img src="/web/images/sub-menu/desktop/shop.jpg"></a></div>
					<div class="interest-menu"><a href="/category/interest/island-beach"><img src="/web/images/sub-menu/desktop/island.jpg"></a></div>						
				</div>
				<div class="row" style="margin-bottom:6px;">
					<div class="interest-menu"><a href="/category/interest/cruises-land-journeys"><img src="/web/images/sub-menu/desktop/cruises.jpg"></a></a></div>
					<div class="interest-menu"><a href="/category/interest/luxury-spa-retreat"><img src="/web/images/sub-menu/desktop/luxury.jpg"></a></a></div>
					<div class="interest-menu"><a href="/category/interest/family-kids"><img src="/web/images/sub-menu/desktop/family.jpg"></a></div>					
				</div>				
				<div class="other-interest-menu">									
					<h5><a href="/category/trip-planning">TRIP PLANNING</a></h5>
					<h5><a href="/category/travel-inspiration">TRAVEL INSPIRATION</a></h5>
					<h5><a href="/category/travel-stories">TRAVEL STORIES</a></h5>					
				</div>
				<div class="clear"></div>
			</ul>
	</li>
	<li id="travel-news" class="menu-item menu-item-type-custom menu-item-object-custom"><a href="/category/travel-news">TRAVEL NEWS</a></li>
	<?php 
		$location = get_country_code();
		switch ($location) {
			case 'MY':
				echo '<li id="travel-deals" class="menu-item menu-item-type-custom menu-item-object-custom"><a href="http://tripzilla.my/" target="_blank">TRAVEL DEALS</a></li>';
				break;
			
			default:
				echo '<li id="travel-deals" class="menu-item menu-item-type-custom menu-item-object-custom"><a href="http://tripzilla.sg/" target="_blank">TRAVEL DEALS</a></li>';
				break;
		}
	?>
	
	<li id="travel-deals" class="menu-item menu-item-type-custom menu-item-object-custom"><a href="https://flyzilla.com/flight/deals" target="_blank">FLIGHT DEALS</a></li>
	<li id="giveaways" class="menu-item menu-item-type-custom menu-item-object-custom"><a href="/past-winner-announcement">GIVEAWAYs</a></li>
	<li id="get-involved" class="menu-item menu-item-type-custom menu-item-has-children parent-menu"><a href="#">GET INVOLVED</a>
		<ul class="sub-menu">
			<li><a href="/hall-of-fame">Writer of the month</a></li>
			<li><a href="/media-trips">Media trips</a></li>											
		</ul>
	</li>
	<li id="contact-menu" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children parent-menu"><a href="#">CONTACT</a>
		<ul class="sub-menu">
			<li><a href="/about">About us</a></li>
			<li><a href="/advertise">Advertise with us</a></li>	
			<li><a href="/contact-us">Contact us</a></li>										
		</ul>
	</li>
</ul>

<style type="text/css">	
	.site-navigation ul li.menu-item-has-children ul.sub-menu li:hover{background:#313131 !important;}    
	.interest-menu{float: left; width: 33.3333%; margin-bottom: 4px;  padding-right: 4px;}
	.dest-sub-menu{float:left;width: 25%;margin-bottom: 4px;}
	.dest-sub-menu a img:hover{opacity: 0.5;}
	.interest-menu a,.dest-sub-menu a,#dest-menu li a,#interest-menu li a{padding:0px !important;} 
    .other-interest-menu{width: 50%;float:left;}  
    .other-interest-menu a:hover,.other-interest-menu a:hover{background: none !important; color: #c51818;}
    .other-interest-menu h5{margin-bottom: 0px;color:#FFF;font-size: 13px;}    
    .other-interest-menu li{padding-bottom: 5px;}    
    .other-interest-menu h5 a:hover{background: #313131;color:red;}
    .other-dest-menu{width: 33%;float:left;}    
    .other-dest-menu a:hover,.other-interest-menu a:hover{background: none !important; color: #c51818;}
    .other-dest-menu h5{margin-bottom: 0px;color:#FFF;font-size: 13px;}
    .other-interest-menu h5 a,.other-dest-menu h5 a{color: #FFF !important;padding: 0px !important;}
    .other-interest-menu a,ul.a li a{font-size: 12px !important;} 
	#dest-menu{width: 594px !important;left:0px !important; padding: 10px 18px 20px 18px !important;}
	#dest-sub-menu li { width: 137px;display: inline-block;}
	#dest-sub-menu{margin: 10px 0px;}
    #dest-sub-menu img{width: 100%;height: 96px;}     
    #interest-menu{width: 444px !important;left: 0px !important;padding: 18px 14px 18px 18px!important;padding-bottom: 10px!important;}
    #interest-sub-menu{margin-bottom: 10px;}    
    #interest-sub-menu li {width: 134px; display: inline-block;} 
    nav#main-menu.site-navigation ul li a{padding:13px 10px;font-size: 14px;}   
    nav#main-menu.site-navigation ul li a .fa{margin-left: 0px !important;}     
    ul.a {list-style-type: circle;}
    ul.a .fa{ font-size: 4px;margin-bottom: 6px;color: #E0DEDE; margin-right: 6px;}      
    #interest-menu a:hover,#dest-menu a:hover{color:#c51818 !important;}
    #interest-parent-menu img:hover{opacity: 0.5;background:#313131;}
    nav#main-menu.site-navigation{padding-top: 14px !important;}
    nav#main-menu.site-navigation ul .menu-item-has-children:hover>a{color:#000 !important;cursor:default;}
    nav#main-menu.site-navigation ul .menu-item-has-children:hover{cursor: default;}

    nav#main-menu.site-navigation ul #travel-deals:hover>a{color:#999 !important;cursor:pointer;}
    #logo_new{padding-top:40px;max-width:340px;margin:0 auto}
    @media only screen and (min-width: 961px) and (max-width: 1120px){
		nav#main-menu.site-navigation ul li a{font-size: 10px}
		#logo{max-width: 250px !important;}
	}
</style>