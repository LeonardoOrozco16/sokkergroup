<div class="row">
	<div class="col">
		<div class="row universalframe equal">
			<div class="col">
				<ul class="hosting-plans row">
				<?php
					$args = array(
						'post_type' => 'product',
						'posts_per_page' => 3,
						'product_cat' => 'hosting'
						);
					$loop = new WP_Query( $args );
					if ( $loop->have_posts() ) {
						while ( $loop->have_posts() ) : $loop->the_post();
							//wc_get_template_part( 'content', 'product' );
							?>
							<!-- estructura de planes hosting -->
								<li class="col-lg-4 scrollreveal" data-animation="fadeInUp" data-timeout="100">
									<div class="plans-frame">
										<div class="plans-topframe">
											<?php
											$has_custom = false;
												foreach(get_post_custom_keys() as $k => $v) {
												    $t = trim($v);
												    if('_' != $t{0}) {
												        $has_custom = true;
												        break;
												    }
												}
												if($has_custom) {
												    the_meta();
												}
											 ?>
											<div class="title-plan"><h2><?php the_title(); ?></h2></div>
											<div class="plans-desc">
												<?php the_content(); ?>
											</div>
											<div class="price"><?php echo $product->get_price_html(); ?></div>
										</div>
										<div class="plans-bottomframe">
											<?php woocommerce_template_loop_add_to_cart();?>
										</div>
									</div>
								</li>
							<!-- estructura de planes hosting -->
							<?php
						endwhile;
					} else {
						echo __( 'No products found' );
					}
					wp_reset_postdata();
				?>
			</ul>
			</div>
			
		</div>
	</div>
</div>