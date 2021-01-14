//var swiper = new Swiper('.swiper-container', {
//    effect: 'cube',
//    grabCursor: true,
//    cubeEffect: {
//      shadow: true,
//      slideShadows: true,
//      shadowOffset: 20,
//      shadowScale: 0.94,
//    },
//    autoplay: {
//        delay: 1000,
//    },
//    loop: true,
//    speed: 1200,
//    pagination: '.swiper-pagination',
//    paginationClickable: true
//});
//
//console.log(swiper);


;(function ($, w) {
    "use strict";
    
    var $window = $(w);
    
    
    $window.on('elementor/frontend/init', function() {
		var EF = elementorFrontend,
			EM = elementorModules;
                    
                        
       //console.log(EF);
       //console.log(EM.frontend.handlers.Base.extend());
       
       
       elementorFrontend.hooks.addAction( 'frontend/element_ready/global', function( $scope ) {
           
           console.log($scope);
           console.log($scope.data( 'settings' ));
                if ( $scope.data( 'shake' ) ){
                        //$scope.shake();
                }
        } );
       
       
       
       
       
       
    });



    
//    //Counter animation
//    $(document).ready(function ($) {
//
//    
//    
//    });
}(jQuery, window));