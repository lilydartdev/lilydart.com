<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <header>
      <?php if(has_post_thumbnail()) : ?>
        <div class="featured-image">
           <?php the_post_thumbnail(array(750,400)); ?>
        </div>
      <?php endif; ?>
      <h1 class="entry-title"><?php the_title(); ?></h1>
      <?php get_template_part('templates/partials/entry-meta'); ?>

    </header>
    <div class="entry-content">
      <?php the_content(); ?>
    </div>
    <footer>
      <?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
    </footer>
    <?php comments_template('/templates/comments.php'); ?>
  </article>
<?php endwhile; ?>
