<script src="<?= base_url(); ?>assets/minified/owl.carousel.min.js"></script>
<script>
    $(document).ready(function() {
        $(".owl-carousel").owlCarousel();
    });
</script>
<script>
    $('.owl-carousel').owlCarousel({
        center: true,
        loop: true,
        margin: 18,
        nav: true,
        dots:false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 6.2
            }
        }
    })
</script>