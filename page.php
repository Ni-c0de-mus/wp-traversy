<?php get_header(); ?>

<div class="container">
  <div class="main">
    <!-- Wordpress Loop -->
    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
        <!-- Article PHP -->
        <article class="post">
          <h3>
            <?php the_title(); ?>
            </a>
          </h3>
          <div class="meta">Created by <?php the_author(); ?> on <?php the_date('l jS \of F Y h:i:s A'); ?>
          </div>
          <!-- Thumbnail Image -->
          <?php if (has_post_thumbnail()) : ?>
            <div class="post-thumbnail">
              <?php the_post_thumbnail(); ?>
            </div>
          <?php endif; ?>

          <?php the_content(); ?>
        </article>
        <!-- WP Auto Respond -->
      <?php endwhile; ?>
    <?php else : ?>
      <?php echo wpautop('Sorry, there are no posts'); ?>
    <?php endif; ?>
  </div>

  <div class="sidebar">
    <?php if (is_active_sidebar('sidebar')) : ?>
      <?php dynamic_sidebar('sidebar'); ?>
    <?php endif; ?>
  </div>
  <div class="clr"></div>
</div>


</div>


<?php get_footer();  ?>