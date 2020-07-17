$(document).ready(function(evt){
    // console.log(evt);

    $('.parallax-window').each(function(){
        var bgImage = $(this).attr('data-image');
        $(this).parallax({imageSrc:bgImage});
    });

    $('.banner-main-text').addClass('animate__fadeInLeft').attr('style', 'visibility: visible !important;');
    
    var vp = ((parseInt($(window).height())/100)*90); // 90% of screen start animation

    $(window).on('scroll',function(){
        
        $('.rounded-circle:in-viewport('+vp+')').addClass('animate__bounceIn').attr('style', 'visibility: visible !important;');

        $('.footer_1:in-viewport('+vp+')').addClass('animate__fadeInLeft').attr('style', 'visibility: visible !important;');
        $('.footer_2:in-viewport('+vp+')').addClass('animate__fadeInRight').attr('style', 'visibility: visible !important;');

    });

    $('.animate__animated.visible').on('mouseover mouseout',function(evt){
        if(evt.type == 'mouseover'){
            $(this).addClass('animate__pulse');
        }else{
            $(this).removeClass('animate__pulse');
        }
    });
});