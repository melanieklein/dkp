( function ( $ ) {
    "use strict";

    // --- GLOBAL VARS

    var smoothScroll = function(){
        $('a[href^="#"]').on('click',function (e) {
            e.preventDefault();
            var target = this.hash,
            $target = $(target);
            $('html, body').stop().animate({
                'scrollTop': $target.offset().top
            }, 900, 'swing', function () {
                window.location.hash = target;
            });
        });
    };

    var voirDetails = function(){
        $('.voirDetails').on('click', function(e){
            $(this).hide();
            $(this).next().slideDown();
            $('.moinsDetails').on('click',function(){
                $(this).parent().slideUp();
                $(this).parent().prev('.voirDetails').show();
            });
        });
    };



        $(window).scroll(function(){  
            var posScroll = $(document).scrollTop(); 
            var largeur = $(window).width();
            if(posScroll>542){
                    $('.menu-home').css("position", "fixed").css("top","0").css("width", "100%").css("z-index","999");
                }else{  
                    $('.menu-home').css("position", "static");
                }
            if (largeur < 900) {
                if(posScroll>410){
                    $('.menu-home').css("position", "fixed").css("top","0").css("width", "100%").css("z-index","999");
                }else{  
                    $('.menu-home').css("position", "static");
                }
            }
            if (largeur < 768) {
                if(posScroll>300){
                    $('.menu-home').css("position", "fixed").css("top","0").css("width", "100%").css("z-index","999");
                }else{  
                    $('.menu-home').css("position", "static");
                }
            }
            if (largeur < 480) {
                if(posScroll>160){
                    $('.menu-home').css("position", "fixed").css("top","0").css("width", "100%").css("z-index","999");
                }else{  
                    $('.menu-home').css("position", "static");
                }
            }


        });


    var carousel = function(){
        $("#foo").carouFredSel({
            infinite            : true,
            responsive          : true,
            direction           : "left",
            align               : "center",
            width               : 1080,

            items : {
                start           : "#foo li:first",
                visible         : 1,
                width           : 1080
            },

            scroll : {

                items           : 1,
                fx              : "scroll", //scroll, directscroll, fade, crossfade, cover, cover-fade, uncover, uncover-fade
                easing          : "linear", //"linear" and "swing", built in: "quadratic", "cubic" and "elastic".
                duration        : 600,               
                pauseOnHover    : true

            },

            auto : {
                play            : false 
            },

            prev : {
                button          :"#sliderPrev",
                key             :"left"
            },

            next : {
                button          :"#sliderNext",
                key             :"right"
            }                    
        });
    };

    // --- ONLOAD ROUTINES
    $( function () {
        smoothScroll();
        $('.videoDetails').hide();
        voirDetails();
        carousel();
    });


}(jQuery));





    

  
    









