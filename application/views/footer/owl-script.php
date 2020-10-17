<script src="<?= base_url(); ?>assets/js/owl.carousel.min.js"></script>

<script>
    $(document).ready(function(){
  $(".owl-carousel").owlCarousel();
});
</script>
<script>
    $('.owl-carousel').owlCarousel({
    loop:true,
    margin:0,
    dots:false,
    nav:true,

    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:3
        }
    }
})
</script>