<?php
/*
 * Jobs single page
*/
?>

<?php get_header(); ?>

<div id="content">
    <div id="inner-content">

    			<div class="block">
    				<div class="block-content">  	

    				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>				
							<h2><?php the_title(); ?></h2>
							<?php the_content(); ?>

								<?php endwhile; ?>

						<?php else : ?>			
						<?php endif; ?>

						</div>
					</div>

					<a href="#" class="apply-link">Apply Now via eJobs</a>

    </div>
  </div>

<?php get_footer(); ?>