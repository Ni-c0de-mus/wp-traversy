<?php get_header(); ?>

<div class="main">
 <div class="container">

  <?php if (have_posts()) : ?>
   <?php while (have_posts()) : the_post(); ?>
    <h3><?php the_title(); ?></h3>
    <div class="meta">Create by <?php the_author(); ?> on<br><?php the_date('l jS \of F Y h:i:s A'); ?></div>
    <h3><?php the_content(); ?></h3>
   <?php endwhile; ?>
   <?php echo wpautop('Sorry, there are no posts'); ?>
  <?php endif; ?>
 </div>
</div>

<?php get_footer();  ?>