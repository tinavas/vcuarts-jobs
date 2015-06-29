<?php get_header(); ?>

			<div id="content">
				<div id="inner-content">

              <div class="block">
              	<div class="block-content">

		             <h2 class="job-category-title">All positions in this category</h2>

                  <div class="fs-wrap">

                  	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                      <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

                      <?php endwhile; ?>
                      <?php else : ?>

                      <h4>No jobs found.</h4>

                      <?php endif; ?>

                  </div>

              </div>
            </div>

				</div>
			</div>

<?php get_footer(); ?>
