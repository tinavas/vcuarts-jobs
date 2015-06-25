<?php
/*
 * Jobs single page
*/
?>

<?php get_header(); ?>

<div id="content">
    <div id="inner-content">

    	<div class="col2to1">
    		<div class="primary">

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

				</div>
			</div>


    </div>
  </div>

<?php get_footer(); ?>