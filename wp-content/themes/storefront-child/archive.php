<?php 

    get_header();
?>

        <main>
			<section>
				<div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12 col-md-9">
							<h1>Arkiv: <?php the_archive_title(); ?></h1> 

							
                            <?php while ( have_posts() ) {
                                the_post(); ?> 
                            
							<article>
								<?php the_post_thumbnail( ); ?> 
								<h2 class="title">
									<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> 
								</h2>
								<ul class="meta">
									<li>
										</i><?php the_date(); ?> 
									</li>
									<li>
										 <?php the_author_posts_link();; ?> 
									</li>
									<li>
										<i class="fa fa-tag"></i> 
                                        <?php the_category(", "); ?> 
								<p><?php the_excerpt(); ?></p> 

                            <?php } ?>

							<nav class="navigation pagination">
								<?php echo paginate_links(); ?> 
							</nav>
						</div>
						<?php get_template_part('./templates/sidebar-template'); ?> 
					</div>
				</div>
			</section>
		</main>




<?php
	
    get_footer();
?>