<div class="intro-wrapper">
  <h1 class="job-title">Freelance service design and user experience</h1>
  <h2 class="intro">I combine technical knowledge with design expertise to help organisations solve difficult problems.</h2>
  <a href="mailto:<?php bloginfo('admin_email')?>" class="button">Get in touch</a>
</div>

<div class="blog-loop">
<h2>Recent posts</h2>
  <?php if(have_posts()) : while (have_posts()) : the_post(); ?>
    <article>
      <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
      <?php the_excerpt(); ?>
    </article>
  <?php endwhile; else: ?>
    <h3>No posts found</h3>
  <?php endif; ?>

<?php get_template_part('templates/partials/pager'); ?>
</div>
