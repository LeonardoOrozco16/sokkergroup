<?php get_header(); ?>
<div id="content-wrapp" class="container-fluid inner-content single-content">
		<div class="row universalframe w-frame">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="col-lg-8">
				<div class="heading-post">
					<h1><?php the_title(); ?></h1>
					<div class="date-post">
						<?php the_time('d M Y'); ?>
					</div>
				</div>
				<div class="content-post">
					<?php the_content(); ?> 
				</div>
			</div>
			<?php endwhile; else: ?>
			<?php endif; ?>
			<div class="col-lg-4 right-bar">
				<?php if ( is_active_sidebar( 'col_page' ) ): ?>
					<div class="row">
						<?php dynamic_sidebar( 'Col Page' ); ?>
					</div>
				<?php endif; ?>
			</div>
		</div>
		<?php if ( is_active_sidebar( 'full_post' ) ): ?>
			<div class="d-none d-sm-none d-md-none d-lg-flex row equal section-row news-row">
				<?php dynamic_sidebar( 'Full Bottom Post' ); ?>
			</div>
		<?php endif; ?>
</div>
<?php get_footer(); ?> 