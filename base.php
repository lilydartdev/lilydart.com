<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?> role="document">

  <?php
    do_action('get_header');
    get_template_part('templates/header');
  ?>

  <main class="main" role="main">
    <div class="outer-container">
      <div class="contain">
        <?php include roots_template_path(); ?>
      </div>
    </div>
  </main><!-- /.main -->

  <?php get_template_part('templates/footer'); ?>

  <?php wp_footer(); ?>

</body>
</html>
