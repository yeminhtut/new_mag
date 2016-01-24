<script src="/ajax/js/jquery.cookie.js" type="text/javascript"></script>
<div id="mag-model">
    <div class="background"></div>
    <div>
        <div id="dialog-form">
            <div class="form-layer-wrapper">
                <div class="white-layer">
                    <h2 id="pop_up_title">Hey Traveller,</h2>
                    <h3 id="subscribe-des">Receive insider travel tips, trending stories &amp; exclusive giveaways in your mailbox</h3>
                    <?php echo do_shortcode('[subscribe_form_mobile]'); ?>
                </div>
            </div>            
            <span class="btn-close-splash-btn  close-modal">
                <img src="http://res.cloudinary.com/tzsg/image/upload/v1435545938/cross_cylg3a.png" width="100%" height="100%">
            </span>
        </div>
    </div>
<script type="text/javascript">
jQuery(document).ready(function($) {
        if (!$.cookie("magSubscribed")) {        
            $(window).on('scroll', function() {
                var available = $(document).height();
                var percentage_of_page = 0.8;
                var half_screen = available * percentage_of_page;
                var height = $(window).scrollTop();
                if ( height > half_screen && !$.cookie("magSubscribed")) {
                    $(window).off('scroll');
                    call_signup_dialog($);
                }
            });
        } else {
            $("#mag-model").hide();
        }        
});
function show_subscribe_pop_up(){
    clear_cookie();
    call_signup_dialog();
}
function clear_cookie(){
    $.removeCookie('magSubscribed', { path: '/' });
}
function call_signup_dialog($){
        var lyr_cont = jQuery($('#dialog-form'));
        var lyr_cont_height = lyr_cont.height();
        // if ($(window).height() > lyr_cont_height) {
        //     lyr_cont.css("top", "50%");
        //     lyr_cont.css("margin-top", "-" + ((lyr_cont_height / 2)) + "px");
        // }        
        setTimeout(function() {
            $("#mag-model").show();
            $("#mag-model").css({
                "width": "100%"
            });
            $('#dialog-form').css({
                "display": "block"
            });
            $('html, body').css({
                'overflow': 'hidden',
                'height': '100%'
            });

            $('.btn-close-splash-img').show();
            $('.btn-close-splash-btn').show();

        }, 10000);
        $('.close-modal').click(function() {
            $.cookie("magSubscribed", 1, {
                expires: 1,path:'/'
            });
            $("#mag-model").hide();
            $('#dialog-form').hide();
            $('.btn-close-splash-img').hide();
            $('.btn-close-splash-btn').hide();
            $('html, body').css({
                'overflow': 'auto',
                'height': 'auto'
            });
        });
};
</script>
<link href='https://fonts.googleapis.com/css?family=Playfair+Display:700italic' rel='stylesheet' type='text/css'>
<style type="text/css">
#no_thanks{text-decoration:underline;color:#c51818;letter-spacing:1px;font:14px/160% Lato,Georgia,serif}#pop_up_title{font-family:'Playfair Display',serif;font-size:44px;letter-spacing:1px;margin-bottom:30px;line-height:46px}#subscribe-des{font-size:14px}.btn-close-splash-img li{display:inline}.btn-close-splash-btn,.btn-close-splash-img{padding:5px;z-index:1;display:none;color:#fff;cursor:pointer}.btn-close-splash-img li img{width:60px}.btn-close-splash-btn{position:absolute;top:4%;border:2px solid #aaa;border-radius:50%;right:4%;width:30px;height:30px}.btn-close-splash-img{position:fixed;bottom:5%;left:2%;height:40px}#dialog-form,#mag-model,.background,.form-layer-wrapper{width:100%;height:100%}.btn-close-text,.btn-install{position:relative;display:block;font-family:Helvetica,sans-serif;text-align:center}#dialog-form,#mag-model{display:none;position:fixed}.form-layer-wrapper{display:table}.white-layer{display:table-cell;text-align:center;vertical-align:middle}.btn-close-text{margin:10px 10px 0;font-size:20px;text-decoration:underline;color:#232323;cursor:pointer}#dialog-form{background-color:rgba(255,255,255,.9);padding:50px 30px;text-align:center}#mag-model{top:0;overflow-y:scroll;z-index:10000;bottom:0}#email-input,.form-button{width:100%;margin-bottom:16px}.background{position:absolute;display:block;background:#000;opacity:.6}#email-input{height:35px;border:none;padding:10px;border:1px solid rgba(200,88,88,.9);background:0 0;font-size:16px}.form-button{background:#CE5957;color:#fff;letter-spacing:3px;font:14px/160% Lato,Georgia,serif;font-size:11px;padding:9px 20px!important}@media screen and (-webkit-min-device-pixel-ratio:0){input:focus,select:focus,textarea:focus{font-size:16px}}
</style>