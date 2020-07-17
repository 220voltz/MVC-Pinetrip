$(document).ready(function(){
    
    var vp = ((parseInt($(window).height())/100)*80); // 80% of screen start animation
    console.log(Math.floor(vp));

    $(window).scroll(function(){
        
        $('.rounded-circle-1:in-viewport('+vp+')').addClass('animate__zoomIn').attr('style', 'visibility: visible !important;');
        $('.rounded-circle-2:in-viewport('+vp+')').addClass('animate__zoomIn').attr('style', 'visibility: visible !important;');
        $('.rounded-circle-3:in-viewport('+vp+')').addClass('animate__zoomIn').attr('style', 'visibility: visible !important;');
        $('.rounded-circle-4:in-viewport('+vp+')').addClass('animate__zoomIn').attr('style', 'visibility: visible !important;');

        $('.featurette.1.animate__animated:in-viewport('+vp+')').addClass('animate__fadeInRight').attr('style', 'visibility: visible !important;');
        $('.featurette.2.animate__animated:in-viewport('+vp+')').addClass('animate__fadeInLeft').attr('style', 'visibility: visible !important;');
        $('.featurette.3.animate__animated:in-viewport('+vp+')').addClass('animate__fadeInRight').attr('style', 'visibility: visible !important;');
    });
});