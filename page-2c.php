<?php 

/**
 * Template Name: Pagina Dos Columnas
 *
 *
 * Template general para el home
 */ get_header(); ?>
<div id="content-wrapp" class="container-fluid inner-content">
		<div class="row universalframe">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="col">
				<div class="heading-page">
					<h1><?php the_title(); ?></h1>
				</div>
			</div>
			<div class="w-100"></div>
			<div class="col-lg-8 clearp">
				<div class="content-page">
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
		<?php if ( is_active_sidebar( 'full_page' ) ): ?>
			<div class="d-none d-sm-none d-md-none d-lg-flex row equal section-row news-row">
				<?php dynamic_sidebar( 'Full Bottom Page' ); ?>
			</div>
		<?php endif; ?>
</div>	
<?php get_footer(); ?> 