<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Monster
 */

?>


	<div class="container">
		<footer id="footer" class="footer">
			<div class="row align-items-center">
           		<div class="col-md-12 col-lg-2 ">
					
						<a href=""<?php get_home_url() ?>" class="header__logo_links" >
							<img src="<?php bloginfo('template_directory') ?>/img/lodo.png" alt="logo" class="logo_img">
						</a>
					
				</div>
					<div class="col-md-6 col-lg-4 ">
						<ul class="footer__list d-flex">
							<li class="footer__item wow fadeInUp" data-wow-duration="1s">
								<a href="#" target="_blank" tabindex="-1">instagram</a> 
							</li>
							<li class="footer__item wow fadeInUp" data-wow-duration="1.5s">
								<a href="#" target="_blank" tabindex="-1">facebook</a> 
							</li>
							<li class="footer__item wow fadeInUp" data-wow-duration="2s">
								<a href="#" target="_blank" tabindex="-1">pinterest</a> 
							</li>
						</ul>
					</div>
            	
				 <div class="col-md-12 col-lg-6 ml-auto   text-right">
					<div class="footer__mail d-flex">
					<img src="<?php bloginfo('template_directory') ?>/img/mail.png" alt="logo" class="mail_img">
					<ul class=" d-flex">
						<li >
						<p class="text-sl">
							Enter email
						</p> 
						</li>
						<li>
							<p class="text-bg">
							Subscribe	
							</p>
					
						</li>
					</ul>
					
					</div>
				</div>
			</div>
			</div>
	</footer><!-- #footer -->


</div><!-- #site-container -->

<!-- jQuery -->
<script src="<?php bloginfo('template_directory')?>/js/jquery-3.3.1.min.js"></script>
<!-- popper -->
<script src="<?php bloginfo('template_directory')?>/js/popper.min.js"></script>
<!-- Bootstrap JS -->
<script src="<?php bloginfo('template_directory')?>/js/bootstrap.min.js"></script>
<!-- Slick -->
<script src="<?php bloginfo('template_directory')?>/js/slick.min.js"></script> 



<!-- wow.js -->
<script src="<?php bloginfo( 'template_directory')?>/js/wow.min.js"></script>
<script>new WOW().init();</script>
<!-- главный файл main.js -->
<script src="<?php bloginfo( 'template_directory')?>/js/main.js"></script>
</body>
</html>



<?php wp_footer() ?>
