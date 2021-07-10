<?php
/**
 * Displays Swiper Template
 */
?>

<div class="swiper2-wrapper">

    <div class="swiper-container swiper2">
        <div class="swiper-wrapper">

            <div class="swiper-slide">
                <figure class="swiper-slide-img-wrapper">
                    <img src="<?php echo get_theme_file_uri('assets/images/american-heritage-chocolate-vdx5hPQhXFk-unsplash.jpg'); ?>">
                </figure><!-- .swiper-slide-img-wrapper -->
            </div><!-- .swiper-slide -->
            
            <div class="swiper-slide">
                <figure class="swiper-slide-img-wrapper">
                    <img src="<?php echo get_theme_file_uri('assets/images/kristiana-pinne-gZv1nVGr2Xc-unsplash.jpg'); ?>">
                </figure><!-- .swiper-slide-img-wrapper -->
            </div><!-- .swiper-slide -->

            <div class="swiper-slide">
                <figure class="swiper-slide-img-wrapper">
                    <img src="<?php echo get_theme_file_uri('assets/images/kaouther-djouada-hcEDfkiVmMI-unsplash.jpg'); ?>">
                </figure><!-- .swiper-slide-img-wrapper -->
            </div><!-- .swiper-slide -->

            <div class="swiper-slide">
                <figure class="swiper-slide-img-wrapper">
                    <img src="<?php echo get_theme_file_uri('assets/images/alex-loup-aX_ljOOyWJY-unsplash.jpg'); ?>">
                </figure><!-- .swiper-slide-img-wrapper -->
            </div><!-- .swiper-slide -->

        </div><!-- .swiper-wrapper -->
    </div><!-- .swiper-container -->

    <div class="swiper-container swiper2 rtl" dir="rtl">
        <div class="swiper-wrapper">

            <div class="swiper-slide">
                <figure class="swiper-slide-img-wrapper">
                    <img src="<?php echo get_theme_file_uri('assets/images/jeremy-yap-jn-HaGWe4yw-unsplash.jpg'); ?>">
                </figure><!-- .swiper-slide-img-wrapper -->
            </div><!-- .swiper-slide -->
            
            <div class="swiper-slide">
                <figure class="swiper-slide-img-wrapper">
                    <img src="<?php echo get_theme_file_uri('assets/images/nathan-dumlao-2z3MOB3kfJU-unsplash.jpg'); ?>">
                </figure><!-- .swiper-slide-img-wrapper -->
            </div><!-- .swiper-slide -->

            <div class="swiper-slide">
                <figure class="swiper-slide-img-wrapper">
                    <img src="<?php echo get_theme_file_uri('assets/images/fahmi-fakhrudin-nzyzAUsbV0M-unsplash.jpg'); ?>">
                </figure><!-- .swiper-slide-img-wrapper -->
            </div><!-- .swiper-slide -->

            <div class="swiper-slide">
                <figure class="swiper-slide-img-wrapper">
                    <img src="<?php echo get_theme_file_uri('assets/images/demi-deherrera-L-sm1B4L1Ns-unsplash.jpg'); ?>">
                </figure><!-- .swiper-slide-img-wrapper -->
            </div><!-- .swiper-slide -->

        </div><!-- .swiper-wrapper -->
    </div><!-- .swiper-container -->

</div><!-- .swiper2-wrapper -->


<script>
    function setSwiper() {
        var mySwiper = new Swiper ('.swiper2', {
            autoplay: {
                delay: 0,
                disableOnInteraction: false,
            },
            loop: true,
            loopAdditionalSlides: 1,
            speed: 8000,
            slidesPerView: 1.5,
            spaceBetween: 20,
            freeMode: true,
            rtl: true,
            breakpoints: {
                700: {
                    slidesPerView: 1.5,
                    spaceBetween: 30,
                },
                1000: {
                    slidesPerView: 3,
                    spaceBetween: 30,
                },
            },
        });
    }

    setSwiper();

    window.addEventListener('resize', setSwiper);
</script>
