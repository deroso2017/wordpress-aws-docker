// Main Slider Js
jQuery(document).ready(function(){
  var owl = jQuery('.owl-carousel');
    owl.owlCarousel({
    margin: 30,
    nav: false,
    autoplay: true,
    lazyLoad: true,
    autoplayTimeout: 3000,
    loop: true,
    dots: true,
    responsive: {
      0: {
        items: 1,
        nav: false
      },
      600: {
        items: 1
      },
      1000: {
        items: 1
      }
    },
    autoplayHoverPause: true,
    mouseDrag: true
  });
});