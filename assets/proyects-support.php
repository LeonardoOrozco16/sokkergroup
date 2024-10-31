<div class="row section-block proyects-support scrollreveal" data-animation="fadeIn" data-timeout="100">
		<div class="col clearp universalframe">
			<div id="proyectSupport" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner">
					<?php $the_query = new WP_Query( 'cat=18&showposts=3' ); ?>
						<?php $postnum = 0; if (have_posts()) : ?>
							<?php while ($the_query -> have_posts()) : $postnum = $postnum +1; $the_query -> the_post(); ?>
									<div class="carousel-item container-fluid">
										<div class="row">
											<div class="col-lg-6 proyec-support-capt">
												<h3>Proyectos Blockchain que Apoyamos</h3>
												<h2><?php the_title();?></h2>
												<div class="proyec-support-desc">
													<?php the_excerpt(); ?>
												</div>
												<div class="proyects-view row">
													<div class="col col-sm-6 col-md-6 col-lg-6">
														<?php the_post_thumbnail(); ?>
													</div>
													<div class="col col-sm-6 col-md-6  col-lg-6">
														<a href="#">Visitar</a>
													</div>
												</div>
											</div>
											<div class="col-lg-6 proyects-img">
												<?php if ( function_exists( 'get_post_image' ) ) get_post_image( 0, true ); ?>
											</div>
										</div>
										</div>
						<?php endwhile;  else: ?>
					<?php endif; ?>
				</div>
				<a class="carousel-control-prev" href="#proyectSupport" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#proyectSupport" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>
	</div>