<script src="/ajax/js/jquery.cookie.js" type="text/javascript"></script>
<div id="mag-model">
    <div class="background"></div>
    <div>
        <div id="dialog-form">
            <div class="white-layer">
                <h2 id="pop_up_title">Hey Traveller,</h2>
                <h3 id="subscribe-des">Receive insider travel tips, trending stories &amp; exclusive giveaways in your mailbox</h3>
                <?php echo do_shortcode('[subscribe_form]'); ?>
            </div>
            <span class="btn-close-splash-btn  close-modal">
                <img src="http://res.cloudinary.com/tzsg/image/upload/v1435545938/cross_cylg3a.png" width="100%" height="100%">
            </span>
        </div>
    </div>
<script type="text/javascript">
jQuery(document).ready(function($) {
        if (!$.cookie("magSubscribed")) {
            call_signup_dialog($);
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

        if ($(window).height() > lyr_cont_height) {
            lyr_cont.css("top", "50%");
            lyr_cont.css("margin-top", "-" + ((lyr_cont_height / 2)) + "px");
        }
        var dialogWidth = lyr_cont.width();
        var windowWidth = $(window).width();
        lyr_cont.css({
            left: (windowWidth / 2) - (737 / 2)
        });
        setTimeout(function() {
            $("#mag-model").show();
            $("#mag-model").css({
                "width": "100%"
            });
            $('#dialog-form').css({
                "display": "block"
            });
            // $('html, body').css({
            //     'overflow': 'hidden',
            //     'height': '100%'
            // });

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
#pop_up_title{font-family: 'Playfair Display',serif;font-size: 55px;margin-bottom: 30px;}#subscribe-des{font-size:16px;font-family: Lato;}.btn-close-splash-img li{display:inline}.btn-close-splash-btn,.btn-close-splash-img{padding:5px;z-index:1;display:none;color:#fff;cursor:pointer}.btn-close-splash-img li img{width:60px}.btn-close-splash-btn{position:absolute;top:3%;border:1px solid #DDD;border-radius:50%;right:1%;width:25px;height:25px}.btn-close-splash-img{position:fixed;bottom:5%;left:2%;height:40px}.btn-close-text,.btn-install{position:relative;display:block;font-family:Helvetica,sans-serif;text-align:center}.btn-install{font-size:22px;margin:5px 0 0 9%;font-weight:700;text-decoration:none;color:#fff;background:#f81;width:82%;padding:6px}.btn-close-text{margin:10px 10px 0;font-size:20px;text-decoration:underline;color:#232323;cursor:pointer}.modalDialog{position:fixed;font-family:Arial,Helvetica,sans-serif;top:0;right:0;bottom:0;left:0;background:rgba(0,0,0,.8);z-index:99999;-webkit-transition:opacity .4s ease-in;-moz-transition:opacity .4s ease-in;transition:opacity .4s ease-in;pointer-events:none;display:none}.modalDialog:target{opacity:1;pointer-events:auto}.tz_lightbox{width:80%;position:relative;margin:10% auto;padding:5px 20px 13px}
#dialog-form{border: 1px solid #807F7F;display:none;top:50%;left:40%;margin-top:-180px;position:fixed;background-color:rgba(255,255,255,.8);padding:50px 30px;text-align:center}.header .icon,.top .text{display:inline-block;vertical-align:bottom}.tzlbtop{height:170px;text-align:center}.tzlbtop p{font-size:24px;font-style:normal;font-weight:700;color:#2fa9dd}
#mag-model{display:none;width:100%;height:100%;position:fixed;top:0;overflow-y:scroll;z-index:10000;bottom:0}.header{margin:0;text-align:center}.header .icon{width:40px;height:40px;margin-right:5px}.top .text{font-size:30px;margin-left:5px;font-family:Helvetica,sans-serif;font-weight:700;letter-spacing:-1px;line-height:40px;color:#226796}.android,.apple,.dot li{display:inline-block;vertical-align:top}.header .bottom{font-size:16px;margin:5px 0 0;color:#226796}.dot{margin:20px 0;padding:0;list-style:none;font-size:0;text-align:center}.dot li{margin:0 2px;width:5px;height:5px;border-radius:50px;-moz-border-radius:50px;-webkit-border-radius:50px;background:#226796}#dialog-form .body{margin:0 0 5px;text-align:center}#dialog-form .body span{font-size:16px}#dialog-form .body label{font-size:20px}#dialog-form a{text-decoration:none}#dialog-form>.btn-close-text{margin:10px;font-size:16px}#dialog-form>.footer{margin-bottom:30px;text-align:center}.android,.apple{width:107px;height:35px;margin:0 5px}.background{position:absolute;display:block;width:100%;height:100%;background:#000;opacity:.6}
#subscribe-form{margin:0 auto;width:540px;border:1px solid #de6868}#email-input{float:left;width:400px;height:35px;border:none;padding:10px;background:0 0}#suscribe_btn{padding:9px 20px!important}
.form-button{float:right;background:#de6868;color:#fff;letter-spacing:3px;font:14px/160% Lato,Georgia,serif;font-size:11px} 
</style>