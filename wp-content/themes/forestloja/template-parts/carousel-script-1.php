<script>
    jQuery( document ).ready(function() {
jQuery('.carousel-dobra-1').slick({
      dots: true,
  infinite: false,
  initialSlide: 1,
  speed: 800,
  slidesToShow: 3,
  slidesToScroll: 3,
prevArrow: jQuery('.prev-carousel'),
   nextArrow: jQuery('.next-carousel'),
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
    });
});
</script>