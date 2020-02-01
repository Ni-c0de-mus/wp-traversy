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
          <div class="meta">Created by
            <a href="<? get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?>
            </a>
            on <?php the_date('l jS \of F Y h:i:s A'); ?>
          </div>
          <!-- Thumbnail PHP -->
          <?php if (has_post_thumbnail()) : ?>
            <div class="post-thumbnail">
              <?php the_post_thumbnail(); ?>
            </div>
          <?php endif; ?>
          <?php the_content(); ?><br>
        </article>
        <!-- WP Auto Respond -->
      <?php endwhile; ?>
      <?php echo wpautop('Sorry, there are no posts'); ?>
    <?php endif; ?>
    <?php comments_template(); ?>
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