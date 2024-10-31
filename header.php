<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset= "<?php bloginfo( 'charset' ); ?>">
	<title><?php if ( is_category() ) {
		echo single_cat_title(); echo ' | '; bloginfo( 'name' );}
			elseif ( is_tag() ) {
				echo single_tag_title(); echo '" | '; bloginfo( 'name' );
					} elseif ( is_archive() ) {
						wp_title(''); echo " | "; bloginfo( 'name' );
						} elseif ( is_search() ) {
							echo 'Busqueda: '.esc_html($s).' | '; bloginfo( 'name' );
								} elseif ( is_home() || is_front_page()) {
									bloginfo( 'name' ); echo ' | '; bloginfo( 'description' );
									} elseif ( is_404() ) {
										echo " | "; bloginfo( 'name' );
									} elseif ( is_single() ) {
										wp_title(''); echo ' | '; bloginfo( 'name' );
									} else {
										wp_title( ' | ', true, 'right' ); bloginfo( 'name' );
		} ?></title>
<link rel="shortcut icon" href="<?php bloginfo('template_url') ?>/favicon.ico" />
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/css/animate.css" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/style.css?v=<?php echo rand(0,999)?>">
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
<?php wp_head(); ?>
</head>
<body>
	<?php 
		$options = get_option('rrss_theme_options');
		$RSfacebook = $options['rs_facebook'];
		$RStwitter = $options['rs_twitter'];
		$RSinstagram= $options['rs_instagram'];
		$RSyoutube = $options['rs_youtube'];
	?>
<div id="body-wrapp">
		<div id="header-wrapp" class="container-fluid">
		<div class="row universalframe">
			<div class="col-10 col-lg-3">
				<a href="#">
					<div class="logo"></div>
				</a>
				
			</div>
			<div class="d-block d-sm-block d-md-block d-lg-none col-2">
				<label id="menu-sw" for="movil-trigg"><span class="hamb"></span></label>
			</div>
			<div class="w-100 d-block d-sm-block d-md-none d-lg-none "></div>
			<input type="checkbox" id="movil-trigg" value="">
			<div class="col-lg-9 navigate-frame">
				<div class="row">
					<div class="col-lg-9">
						<label for="movil-trigg" class="close times">X</label>
						<nav class="nav-container">
							<?php
									wp_nav_menu(array(
									'container'=> false,
									'items_wrap'=>'<ul class="menu">%3$s</ul>',
									'theme_location'=>'menu'
									));
								?>
						</nav>
					</div>
					<div class="col-lg-3">
						<ul class="socials">
							<?php if($RSfacebook != ''){ echo '<li><a href="'.$RSfacebook.'" class="social-icon fa"></a></li>';} ?>
								<?php if($RStwitter != ''){ echo '<li><a href="'.$RStwitter.'" class="social-icon tw"></a></li>';} ?>
						        <?php if($RSinstagram != ''){ echo '<li><a href="'.$RSinstagram.'" class="social-icon ins"></a></li>';} ?>
						        <?php if($RSyoutube != ''){ echo '<li><a href="'.$RSyoutube.'" class="social-icon you"></a></li>';} ?>
						</ul>
					</div>
					
				</div>
			</div>
		</div>
	</div>
