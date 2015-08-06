<?php get_header(); ?>

  <div class="content">
    <div class="inner-content">

        <?php
        $args = array( 
          'taxonomy' => 'jobs_cat',
        );
        $categories = get_terms( $args );
        if ($categories) : ?>

          <?php foreach ($categories as $cat) : ?>

          <div class="block">
            <div class="block-content">

            <h2 class="job-category-title"><?php echo $cat->name; ?></h2>

            <?php 
            $args = array(
              'post_type' => 'jobs',
              'posts_per_page' => -1,
              'tax_query' => array(
                array(
                  'taxonomy' => 'jobs_cat',
                  'field'    => 'id',
                  'terms' => $cat->term_id
                )
              ),
            );
            $the_query = new WP_Query( $args );
            if ( $the_query->have_posts() ) : ?>

              <div class="fs-wrap">

              <?php
              while ( $the_query->have_posts() ) : $the_query->the_post();
                ?>

                  <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

              <?php 
              endwhile; ?>

              </div>

            <?php 
            endif; //end if cats have posts?>

          </div>
        </div>

            <?php
          endforeach; //end foreach cat
        endif; //end if categories 
        wp_reset_postdata();
        ?>


    </div>
  </div>


<?php get_footer(); ?>