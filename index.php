<?php
/*
The main template file.
Theme Name: SokkerGroup Theme
Theme URI: url del tema
Description: Tema Personalizado
Author: Producciones 5 Sentidos
Author URI: url del autor
Version: 1.0
*/
?>
<?php get_header(); ?>
	<div id="content-wrapp" class="container-fluid clearp">
		<?php if ( is_active_sidebar( 'slider_intro' ) ): ?>
			<div class="row">
				<?php dynamic_sidebar( 'Slider' ); ?>
			</div>
		<?php endif; ?>
		<?php if ( is_active_sidebar( 'col_01' ) ): ?>
			<div class="row section-row about-row">
				<div class="col">
					<div class="row equal universalframe">
						<?php dynamic_sidebar( 'Cols 01' ); ?>
					</div>
				</div>
			</div>
		<?php endif; ?>
		<?php if ( is_active_sidebar( 'full_02' ) ): ?>
			<div class="row equal section-row serv-row">
				<div class="col">
					<div class="row universalframe">
						<?php dynamic_sidebar( 'Full 02' ); ?>
					</div>
				</div>
			</div>
		<?php endif; ?>
		<?php if ( is_active_sidebar( 'full_fundacion' ) ): ?>
			<div class="row equal section-row bio-row">
				<div class="col">
					<div class="row universalframe">
						<?php dynamic_sidebar( 'Full Fundacion' ); ?>
					</div>
				</div>
			</div>
		<?php endif; ?>
		<?php if ( is_active_sidebar( 'full_03' ) ): ?>
			<div class="d-none d-sm-none d-md-none d-lg-flex row equal section-row feed-row">
				<div class="col">
					<div class="row universalframe">
						<?php dynamic_sidebar( 'Full 03' ); ?>
					</div>
				</div>
			</div>
		<?php endif; ?>
		<?php if ( is_active_sidebar( 'full_04' ) ): ?>
			<div class="d-none d-sm-none d-md-none d-lg-flex row equal section-row news-row">
				<?php dynamic_sidebar( 'Full 04' ); ?>
			</div>
		<?php endif; ?>
		<!--<div class="d-none d-sm-none d-md-none d-lg-flex row equal section-row news-row">
			<div class="col">
				<div class="row universalframe">
					<h1>Novedades</h1>
					<div class="w-100"></div>
					<?php $the_query = new WP_Query( 'cat=4&showposts=3' ); ?>
						<?php $postnum = 0; if (have_posts()) : ?>
							<?php while ($the_query -> have_posts()) : $postnum = $postnum +1; $the_query -> the_post(); ?>
								<?php if ($postnum > 0 && $postnum <=3 ) :?>
									<div class="col-lg-4">
										<div class="news-frame">
											<div class="img-news">
												<a href="<?php the_permalink(); ?>"><?php if ( function_exists( 'get_post_image' ) ) get_post_image( 0, true ); ?></a>
											</div>
											<div class="data-news">
												<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
											</div>
										</div>
									</div>
								<?php endif; ?>
					<?php endwhile; else: ?>
							<p><?php _e('Lo siento, la categoria en estos momentos no posee articulos para mostrar.'); ?></p>
					<?php endif; ?>
				</div>
			</div>
		</div>-->
	</div>
<?php get_footer(); ?> 		