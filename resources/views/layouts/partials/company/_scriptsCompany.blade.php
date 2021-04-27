<script>
    //Car Appear In View
    function isScrolledIntoView(elem) {
        var docViewTop = $(window).scrollTop();
        var docViewBottom = docViewTop + $(window).height();

        var elemTop = $(elem).offset().top + 180;
        var elemBottom = elemTop + $(elem).height() - 500;

        return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
    }

    $(window).scroll(function () {
        $('.running-car').each(function () {
            if (isScrolledIntoView(this) === true) {
                $(this).addClass('in-view');
            } else {
                $(this).removeClass('in-view');
            }
        });
    });

    //threesixty degree
    var car;
    function init(){
        car = $('.360-car').ThreeSixty({
            totalFrames: 52, // Total no. of image you have for 360 slider
            endFrame: 52, // end frame for the auto spin animation
            currentFrame: 3, // This the start frame for auto spin
            imgList: '.threesixty_images', // selector for image list
            progress: '.spinner', // selector to show the loading progress
            imagePath:'{{asset('company/demos/car/images/360degree-cars')}}/', // path of the image assets
            filePrefix: '', // file prefix if any
            ext: '.png', // extention for the assets
            height: 887,
            width: 500,
            navigation: true,
            responsive: true,
        });
    };

    // Rev Slider
    var tpj=jQuery;
    var revapi424;
    tpj(document).ready(function() {
        if(tpj("#rev_slider_424_1").revolution == undefined){
            revslider_showDoubleJqueryError("#rev_slider_424_1");
        }else{
            revapi424 = tpj("#rev_slider_424_1").show().revolution({
                sliderType:"carousel",
                jsFileLocation:"include/rs-plugin/js/",
                sliderLayout:"auto",
                dottedOverlay:"none",
                delay:7000,
                navigation: {
                    keyboardNavigation:"off",
                    keyboard_direction: "horizontal",
                    mouseScrollNavigation:"off",
                    mouseScrollReverse:"default",
                    onHoverStop:"off",
                    touch:{
                        touchenabled:"on",
                        swipe_threshold: 75,
                        swipe_min_touches: 1,
                        swipe_direction: "horizontal",
                        drag_block_vertical: false
                    }
                    ,
                    arrows: {
                        style:"uranus",
                        enable:false,
                        hide_onmobile:false,
                        hide_onleave:true,
                        hide_delay:200,
                        hide_delay_mobile:1200,
                        tmp:'',
                        left: {
                            h_align:"left",
                            v_align:"center",
                            h_offset:-10,
                            v_offset:0
                        },
                        right: {
                            h_align:"right",
                            v_align:"center",
                            h_offset:-10,
                            v_offset:0
                        }
                    },
                    carousel: {
                        maxRotation: 65,
                        vary_rotation: "on",
                        minScale: 55,
                        vary_scale: "on",
                        horizontal_align: "center",
                        vertical_align: "center",
                        fadeout: "on",
                        vary_fade: "on",
                        maxVisibleItems: 5,
                        infinity: "off",
                        space: 0,
                        stretch: "on"
                    }
                    ,
                    tabs: {
                        style:"ares",
                        enable:true,
                        width:270,
                        height:80,
                        min_width:270,
                        wrapper_padding: 10,
                        wrapper_color:"transparent",
                        wrapper_opacity:"0.5",
                        tmp:'<div class="tp-tab-content">  <span class="tp-tab-date">@{{param1}}</span>  <span class="tp-tab-title">@{{title}}</span></div><div class="tp-tab-image"></div>',
                        visibleAmount: 7,
                        hide_onmobile: false,
                        hide_under:420,
                        hide_onleave:false,
                        hide_delay_mobile:1200,
                        hide_delay:200,
                        direction:"horizontal",
                        span:true,
                        position:"outer-bottom",
                        space:20,
                        h_align:"left",
                        v_align:"bottom",
                        h_offset:0,
                        v_offset:0
                    }
                },
                visibilityLevels:[1240,1024,778,480],
                gridwidth:[1240,992,768,420],
                gridheight:[600,500,960,720],
                lazyType:"single",
                shadow:0,
                spinner:"off",
                stopLoop:"off",
                stopAfterLoops: 0,
                stopAtSlide: 1,
                shuffle:"off",
                autoHeight:"off",
                hideThumbsOnMobile:"off",
                hideSliderAtLimit:0,
                hideCaptionAtLimit:0,
                hideAllCaptionAtLilmit:0,
                debugMode:false,
                fallbacks: {
                    simplifyAll:"off",
                    nextSlideOnWindowFocus:"off",
                    disableFocusListener:false,
                }
            });
        }
    });	/*ready*/

    $(function () {
        window.mobilecheck() ? $("body").removeClass('use-nicescroll') : $("body").css("overflow", "hidden");

        $('[data-toggle="tooltip"]').tooltip();
        $('[data-toggle="popover"]').popover();

        $('.videoplay-on-hover').hover( function(){
            if( $(this).find('video').length > 0 ) {
                $(this).find('video').get(0).play();
            }
        }, function(){
            if( $(this).find('video').length > 0 ) {
                $(this).find('video').get(0).pause();
            }
        });

        @if(session('contact'))
        swal('Successfully sent a message!', '{{ session('contact') }}', 'success');
        @endif
    });

    var recaptchaCallback = function () {
        if ( $('#recaptcha-contact').length ) {
            grecaptcha.render('recaptcha-contact', {
                'sitekey': '{{env('reCAPTCHA_v2_SITEKEY')}}',
                'callback': 'enable_btnContact',
                'expired-callback': 'disabled_btnContact'
            });
        }
        if ( $('#recaptcha-quick-contact').length ) {
            grecaptcha.render('recaptcha-quick-contact', {
                'sitekey': '{{env('reCAPTCHA_v2_SITEKEY')}}',
                'callback': 'enable_btnQuickContact',
                'expired-callback': 'disabled_btnQuickContact'
            });
        }
    };

    function enable_btnContact() {
        $("#template-contactform-submit").removeAttr('disabled');
    }

    function disabled_btnContact() {
        $("#template-contactform-submit").attr('disabled', 'disabled');
    }

    function enable_btnQuickContact() {
        $("#quick-contact-form-submit").removeAttr('disabled');
    }

    function disabled_btnQuickContact() {
        $("#quick-contact-form-submit").attr('disabled', 'disabled');
    }

    $("#template-contactform").on("submit", function (e) {
        if (grecaptcha.getResponse(recaptcha_contact).length === 0) {
            e.preventDefault();
            swal('ATTENTION!', 'Please confirm us that you\'re not a robot by clicking in ' +
                'the reCAPTCHA dialog-box.', 'warning');
        }
    });

    $("#quick-contact-form").on("submit", function (e) {
        if (grecaptcha.getResponse(recaptcha_quick_contact).length === 0) {
            e.preventDefault();
            swal('ATTENTION!', 'Please confirm us that you\'re not a robot by clicking in ' +
                'the reCAPTCHA dialog-box.', 'warning');
        }
    });

    function numberOnly(e, decimal) {
        var key;
        var keychar;
        if (window.event) {
            key = window.event.keyCode;
        } else if (e) {
            key = e.which;
        } else return true;
        keychar = String.fromCharCode(key);
        if ((key == null) || (key == 0) || (key == 8) || (key == 9) || (key == 13) || (key == 27) || (key == 188)) {
            return true;
        } else if ((("0123456789").indexOf(keychar) > -1)) {
            return true;
        } else if (decimal && (keychar == ".")) {
            return true;
        } else return false;
    }

    function thousandSeparator(nStr) {
        nStr += '';
        x = nStr.split('.');
        x1 = x[0];
        x2 = x.length > 1 ? '.' + x[1] : '';
        var rgx = /(\d+)(\d{3})/;
        while (rgx.test(x1)) {
            x1 = x1.replace(rgx, '$1' + '.' + '$2');
        }
        return x1 + x2;
    }

    function number_format(number, decimals, dec_point, thousands_sep) {
        number = (number + '').replace(/[^0-9+\-Ee.]/g, '');
        var n = !isFinite(+number) ? 0 : +number,
            prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
            sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
            dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
            s = '',
            toFixedFix = function (n, prec) {
                var k = Math.pow(10, prec);
                return '' + Math.round(n * k) / k;
            };
        s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
        if (s[0].length > 3) {
            s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
        }
        if ((s[1] || '').length < prec) {
            s[1] = s[1] || '';
            s[1] += new Array(prec - s[1].length + 1).join('0');
        }
        return s.join(dec);
    }

    function goToSection(id) {
        $(".one-page-menu ul li a[data-href='#"+id+"']").click();
    }

    var title = document.getElementsByTagName("title")[0].innerHTML;
    (function titleScroller(text) {
        document.title = text;
        setTimeout(function () {
            titleScroller(text.substr(1) + text.substr(0, 1));
        }, 500);
    }(title + " ~ "));

    <!--Scroll Progress Bar-->
    function progress() {
        var windowScrollTop = $(window).scrollTop();
        var docHeight = $(document).height();
        var windowHeight = $(window).height();
        var progress = (windowScrollTop / (docHeight - windowHeight)) * 100;
        var $bgColor = progress > 99 ? '#ff1f27' : '#E31B23';
        var $textColor = progress > 99 ? '#fff' : '#333';

        $('.myProgress .bar').width(progress + '%').css({backgroundColor: $bgColor});
        // $('h1').text(Math.round(progress) + '%').css({color: $textColor});
        $('.fill').height(progress + '%').css({backgroundColor: $bgColor});
    }

    progress();

    $(document).on('scroll', progress);

    window.onload = function () {
        // $('.images-preloader').fadeOut();

        init();

        $(".use-nicescroll").niceScroll({
            cursorcolor: "rgb(227,27,35)",
            cursorwidth: "8px",
            background: "rgba(222, 222, 222, .75)",
            cursorborder: 'none',
            horizrailenabled: false,
            autohidemode: 'leave',
            zindex: 9999999,
        });

        if(window.location.hash) {
            $(".one-page-menu ul li a[data-href='#"+window.location.hash.substr(1)+"']").click();
        }

        var options = {
            whatsapp: "+62817597777",
            email: "sindhu@ppf.co.id",
            call_to_action: "Contact us",
            button_color: "#e31b23",
            position: "left",
            order: "email,whatsapp",
        };
        var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
        var s = document.createElement('script');
        s.type = 'text/javascript';
        s.async = true;
        s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () {
            WhWidgetSendButton.init(host, proto, options);
        };
        var x = document.getElementsByTagName('script')[0];
        x.parentNode.insertBefore(s, x);
    };

    $(document).on('mouseover', '.use-nicescroll', function () {
        $(this).getNiceScroll().resize();
    });
</script>
