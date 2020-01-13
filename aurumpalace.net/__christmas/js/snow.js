$('body').flurry({
  height: 900,
  speed: 20000,
  small: 48,
  large: 250,
  character: " ",
  wind: 100,
  windVariance: 100,
  blur: false,
  reventScroll: true,
  density: 100,
  frequency: 200
});
//
// ( function( $ ) {
//
//   $.fn.flurry = function( options ) {
//
//     var settings = $.extend({
//       height: 1000,
//       speed: 22000,
//       small: 88,
//       large: 280,
//       character: "В ",
//       wind: 8000,
//       windVariance: 5,
//       blur: false,
//       frequency: 200
//     }, options );
//
//     if ( settings.preventScroll === true ) {
//       $( 'html' ).css({
//         "overflow-x": "hidden"
//       });
//     }
//
//
//     var windowWidth = $( window ).width();
//     $( window ).resize( function() {
//       windowWidth = $( window ).width();
//     });
//
//     var randomNumberInRange = function( min, max ) {
//       return Math.random() * ( max - min ) + min;
//     };
//
//     var createFlake = function() {
//
//       var left = randomNumberInRange( 0 - Math.abs( settings.wind ), windowWidth + Math.abs( settings.wind ) );
//
//       var flake = '<span> </span>';
//       $( flake ).css({
//         "color": "#FFF",
//         "font-size": randomNumberInRange( settings.small, settings.large ) + "px",
//         "position": "absolute",
//         "top": "-35px",
//         "left": left + "px",
//         "z-index": "999"
//       }).appendTo( '.flurry-container' ).animate({
//         "top": settings.height + "px",
//         "left": ( left + randomNumberInRange( settings.wind - settings.variance, settings.wind + settings.variance ) ) + "px",
//         "opacity": 0
//       }, randomNumberInRange( settings.speed - 400, settings.speed + 400 ), "linear", function() {
//         $( this ).remove();
//       });
//     };
//
//     setInterval( createFlake, settings.density );
//   };
// }( jQuery ));
//
// $().flurry();
