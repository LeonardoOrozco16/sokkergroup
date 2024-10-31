<?php get_header(); ?>
<div id="content-wrapp" class="container-fluid inner-content single-content">
	<div class="row universalframe w-frame">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="col-12 col-sm-6 col-md-6 col-lg-4">
				<div class="news-frame">
					<div class="img-news">
						<a href="<?php the_permalink(); ?>"><?php if ( function_exists( 'get_post_image' ) ) get_post_image( 0, true ); ?></a>
					</div>
					<div class="data-news">
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<div class="date-post">
							<?php the_time('d M Y'); ?>
						</div>
					</div>
				</div>
			</div>
		<?php endwhile; else: ?>
		<?php endif; ?>
		<div class="w-100"></div>
		<div id="paginacion" class="col-xs-12 col-sm-12 col-md-12 clearp">
			<?php previous_posts_link('<i class="fa fa-angle-double-left" aria-hidden="true"></i> Noticias Recientes '); ?>
			<?php next_posts_link(' Noticias Anteriores <i class="fa fa-angle-double-right" aria-hidden="true"></i>'); ?>
		</div>
	</div>
</div>
<?php get_footer(); ?> 