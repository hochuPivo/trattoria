<?php
get_header(); ?>

<main class="page-content" style="padding: 140px 40px 80px; max-width: 1200px; margin: 0 auto; color: #fff;">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <h1 class="section-heading" style="margin-bottom: 30px;"><?php the_title(); ?></h1>
    <div class="entry-content" style="font-size: 1.1rem; line-height: 1.8; color: var(--text-light);">
      <?php the_content(); ?>
    </div>
  <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>
