<?php 

    get_header();
?>



        <main>
			<section>
				<div class="container">
					
						
                            <?php while ( have_posts() ) {
                                the_post(); ?>
							<article>
								<?php the_post_thumbnail( ); ?> 
								<h2 class="title">
									<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> 
								</h2>
								<ul class="meta">
									</i><?php the_date(); ?> 
									
									<?php the_author_posts_link();; ?> 
									
                                        <?php the_category(", "); ?> 
								</ul>
								<p><?php the_content(); ?></p> 
							</article>
							
							
                            <?php } ?>

						</div>
						
					</div>
				</div>
			</section>
		</main>




<?php
	
    get_footer();