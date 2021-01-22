<?php 
/*Template Name: home
Template Post Type: post, page, product*/ 
?>

<!-- Подключение header -->
<?php get_header(); ?>
<!--  секция -->

<section class="hero" id="hero">
    <div class="container">
        <div class="row">
        <div class="col-12 text-center">
<h1 class="hero__title wow zoomIn" data-wow-duration="2s">
Handcraft Minimalist Modern  Jewelry
</h1>
<p class="hero__text">
Jewelry that Emphasizes Your Individuality
</p>

        </div>
    </div>
</section>
<section class="offer" id="offer">
    <div class="container">
        <div class="row">
            <div class="  col-10 m-auto">
                 <div class="sliders text-center" id="sliders">
                    <div class="slider">
                        <img src="<?php bloginfo('template_directory') ?>/img/sylvie.jpg" alt="Slide" class="slider__img">
                    </div>
                    <div class="slider">
                        <img src="<?php bloginfo('template_directory') ?>/img/vinicius.jpg" alt="Slide" class="slider__img">
                    </div>
                    <div class="slider">
                        <img src="<?php bloginfo('template_directory') ?>/img/sandi.jpg" alt="Slide" class="slider__img">
                    </div>
                    <div class="slider">
                        <img src="<?php bloginfo('template_directory') ?>/img/sylvie.jpg" alt="Slide" class="slider__img">
                    </div>
                    <div class="slider">
                        <img src="<?php bloginfo('template_directory') ?>/img/vinicius.jpg" alt="Slide" class="slider__img">
                    </div>
                    <div class="slider">
                        <img src="<?php bloginfo('template_directory') ?>/img/sandi.jpg" alt="Slide" class="slider__img">
                    </div>
                </div>
            </div>
            
        </div>
        <div class="row">
            <div class="col-12 ">
            <ul class="social__list d-flex">
                <li class="social__item wow fadeInUp" data-wow-duration="1s">
                <a href="#" target="_blank" tabindex="-1"><i class="fab fa-instagram slider__link"></i></a> 
                </li>
                <li class="social__item wow fadeInUp" data-wow-duration="1.5s">
                <a href="#" target="_blank" tabindex="-1"><i class="fab fa-pinterest-p slider__link"></i></a> 
                </li>
                <li class="social__item wow fadeInUp" data-wow-duration="2s">
                <a href="#" target="_blank" tabindex="-1"><i class="fab fa-facebook-f slider__link"></i></a> 
                </li>
            </ul>
            </div>
           </div>
           <div class="row">
            <div class="col-12 ">
                <div class="offer__wrapp wow fadeInUp" data-wow-duration="2s">
                    <h2>
                    When You Are in Jewelry, I Know <span>Who You Are</span> 
                    </h2>

                </div>
            </div>
           </div>
    </div>
</section>	
       <!------ footer секция------>
       <?php get_footer(); ?>