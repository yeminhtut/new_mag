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
            $(window).on('scroll', function() {
                var available = $(document).height();
                var percentage_of_page = 0.7;
                var half_screen = available * percentage_of_page;
                var height = $(window).scrollTop();
                console.log(half_screen);
                console.log(height);
                if ( height > half_screen && !$.cookie("magSubscribed")) {
                    $(window).off('scroll');
                    call_signup_dialog($);
                    console.log('time to show');
                }
            });
        } else {
            $("#mag-model").hide();
        }        
});
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

        }, 5000);

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
#pop_up_title{font-family:'Playfair Display',serif;font-size:55px;margin-bottom:30px}#subscribe-des{font-size:16px;font-family:Lato}.btn-close-splash-img li{display:inline}.btn-close-splash-btn,.btn-close-splash-img{padding:5px;z-index:1;display:none;color:#fff;cursor:pointer}.btn-close-splash-img li img{width:60px}.btn-close-splash-btn{position:absolute;top:6%;border:1px solid #DDD;border-radius:50%;right:1%;width:25px;height:25px}.btn-close-splash-img{position:fixed;bottom:5%;left:2%;height:40px}#mag-model,.background{width:100%;height:100%}.btn-close-text{position:relative;display:block;font-family:Helvetica,sans-serif;text-align:center;margin:10px 10px 0;font-size:20px;text-decoration:underline;color:#232323;cursor:pointer}#dialog-form,#mag-model{display:none;position:fixed}#dialog-form{top:50%;left:40%;margin-top:-180px;background-color:rgba(255,255,255,.8);padding:50px 30px;text-align:center}#mag-model{top:0;overflow-y:scroll;z-index:10000;bottom:0}#dialog-form .body{margin:0 0 5px;text-align:center}#dialog-form .body span{font-size:16px}#dialog-form .body label{font-size:20px}#dialog-form a{text-decoration:none}#dialog-form>.btn-close-text{margin:10px;font-size:16px}.background{position:absolute;display:block;background:#000;opacity:.6}#subscribe-form{margin:0 auto;width:540px;border:1px solid #de6868}#email-input{float:left;width:400px;height:35px;border:none;padding:10px;background:0 0}#suscribe_btn{padding:9px 20px!important}.form-button{float:right;background:#de6868;color:#fff;letter-spacing:3px;font:14px/160% Lato,Georgia,serif;font-size:11px}
</style>