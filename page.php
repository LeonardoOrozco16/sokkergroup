<?php get_header(); ?>
<div id="content-wrapp" class="container-fluid inner-content">
		<div class="row universalframe">
			<div class="col clearp">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<div class="heading-page">
						<h1><?php the_title(); ?></h1>
					</div>
					<div class="content-page">
						<?php the_content(); ?> 
					</div>
				<?php endwhile; else: ?>
				<?php endif; ?>
			</div>
		</div>
		<?php if ( is_active_sidebar( 'full_page' ) ): ?>
			<div class="d-none d-sm-none d-md-none d-lg-flex row equal section-row news-row">
				<?php dynamic_sidebar( 'Full Bottom Page' ); ?>
			</div>
		<?php endif; ?>
	</div>	
<?php get_footer(); ?> 