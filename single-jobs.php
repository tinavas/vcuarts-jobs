<?php
/*
 * Jobs single page
*/
?>

<?php get_header(); ?>

  <div id="content">

    <div id="inner-content">

      <?php get_sidebar(); ?>

      <div id="main" role="main">

				<h2><?php the_title(); ?></h2>

				<?php $fs_img = get_field('fs_photo'); ?>
				<?php if ($fs_img) { ?><img src="<?php echo $fs_img['sizes']['large']; ?>" alt="<?php echo $fs_img['alt']; ?>" class="fs-photo-single"><?php } ?>

				<div class="fs-about entry-content">

					<?php
					if( have_rows('title_loop') ): ?>

					  <ul class="fs-title">

					    <?php
					    while ( have_rows('title_loop') ) : the_row(); ?>

					        <li><?php the_sub_field('fs_title'); ?></li>

					    <?php 
					    endwhile; ?>

					  </ul>

					<?php
					endif; ?>

					<?php
					if( have_rows('edu_loop') ): ?>

					  <ul class="fs-edu">

					    <?php
					    while ( have_rows('edu_loop') ) : the_row(); ?>

					        <li><?php the_sub_field('fs_edu'); ?></li>

					    <?php 
					    endwhile; ?>

					  </ul>

					<?php
					endif; ?>

					<a href="mailto:<?php the_field('fs_email'); ?>"><?php the_field('fs_email'); ?></a>

					<p><?php the_field('fs_bio'); ?></p>

				</div>

				<?php // Build our slider
				  if( have_rows( 'fs_work' ) ) : ?>

				  <div id="work-gallery" class="fs-work-gallery">
				  	<div class="grid-sizer"></div>
						
				  <?php
					  while( have_rows( 'fs_work' ) ): the_row();
					  $img_obj = get_sub_field('fs_work_image'); 
					  $video = get_sub_field('video_url');?>

					    <div class="work-item fs-work-item">

						    <?php if ($video){ ?><div class="play-btn"><i class="fa fa-play"></i></div><?php }; ?>

					      <a class="fs-work-lightbox <?php if ($video){ ?>mfp-iframe<?php }; ?>" href="<?php if ($video){ echo $video; } else echo $img_obj['url']; ?>">
					        <img data-original="<?php echo $img_obj['url']; ?>" alt="<?php echo $img_obj['alt']; ?>" height="<?php echo $img_obj['height']; ?>" width="<?php echo $img_obj['width']; ?>" class="lazy" />
					        <noscript><img src="<?php echo $img_obj['url']; ?>" alt="<?php echo $img_obj['alt']; ?>" /></noscript>
					      </a>

				      </div>

			    <?php 
				    endwhile; ?>

			    </div>

			  <?php 
				  endif; ?>

      </div>

    </div>

  </div>



<?php get_footer(); ?>