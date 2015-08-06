<?php get_header(); ?>

<div class="content">
    <div class="inner-content">

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

          <?php 
            $job_url = get_field('job_url');
            if ($job_url) { 
          ?>
          
            <a href="<?php echo $job_url; ?>" class="apply-link">Apply Now</a>

          <?php } ?>

    </div>
  </div>

<?php get_footer(); ?>