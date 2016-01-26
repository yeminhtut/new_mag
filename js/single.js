jQuery(document).ready(function($) {
  'use strict';
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
    /*featured slider*/
    var owl = $('.warrior-carousel-18');
	owl.owlCarousel({
	    items:4,
	    loop:true,
	    autoplay:false,
	    autoplayTimeout:1000,
	    autoplayHoverPause:true,
	    lazyLoad:true,
	    responsive : {
        0 : {
            items: 1,
            startPosition: 0
        },
        480 : {

            items: 2,
            startPosition: 0
        },
        760 : {

            items: 3,
            startPosition: 0
        },
        1000 : {
            items: 4,
            startPosition: 0
        }
      }
	});
    /*sidebar popup*/
        var sticky = $('#ads-banner');
        if (sticky.length) {
            var stickySidebar = $('#sticky_div').offset().top; 
        };
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