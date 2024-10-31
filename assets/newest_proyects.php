<div class="row section-block recents-proyects <?php if(is_page()){ echo "page";} ?>">
		<div class="col">
			<div class="row universalframe equal news-frame">
				<h2>Proyectos <span>Recientes</span></h2>
				<div class="w-100"></div>
				<?php $the_query = new WP_Query( 'cat=17&showposts=3' ); ?>
					<?php $postnum = 0; if (have_posts()) : ?>
						<?php while ($the_query -> have_posts()) : $postnum = $postnum +1; $the_query -> the_post(); ?>
							<div class="col-lg-4 scrollreveal" data-animation="slideInUp" data-timeout="<?php echo $postnum++; ?>00">
								<div class="news-col">
									<div class="newscol-img"><?php the_post_thumbnail(); ?></div>
									<div class="newscol-data">
										<h3>Cliente: <?php the_title(); ?></h3>
										<h4><?php the_content(); ?></h4>
									</div>
								</div>
							</div>
					<?php endwhile;  else: ?>
				<?php endif; ?>
			</div>
		</div>
	</div>