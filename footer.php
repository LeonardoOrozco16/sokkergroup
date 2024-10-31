<?php 
		$options = get_option('rrss_theme_options');
		$RSfacebook = $options['rs_facebook'];
		$RStwitter = $options['rs_twitter'];
		$RSinstagram= $options['rs_instagram'];
		$RSyoutube = $options['rs_youtube'];
	?>
<div id="footer-wrapp" class="container-fluid">
		<div class="row universaframe">
			<div class="col">
				<a href="#" class="logo"></a>
			</div>
			<div class="w-100"></div>
			<div class="col">
				<ul class="socials">
					<?php if($RSfacebook != ''){ echo '<li><a href="'.$RSfacebook.'" class="social-icon fa"></a></li>';} ?>
								<?php if($RStwitter != ''){ echo '<li><a href="'.$RStwitter.'" class="social-icon tw"></a></li>';} ?>
						        <?php if($RSinstagram != ''){ echo '<li><a href="'.$RSinstagram.'" class="social-icon ins"></a></li>';} ?>
						        <?php if($RSyoutube != ''){ echo '<li><a href="'.$RSyoutube.'" class="social-icon you"></a></li>';} ?>
				</ul>
				<span>© Copyright sokkergroup.com <?php echo date("Y");?> | Todos los derechos reservados.</span>
			</div>
		</div>
	</div>
<!-- Script Area -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.0/jquery.cookie.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script>jQuery.noConflict();</script>
<script src="<?php bloginfo('template_url') ?>/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_url') ?>/js/scripts.js?v=<?php echo rand(0,999)?>" type="text/javascript"></script>
<?php wp_footer(); ?>
</body>
</html>