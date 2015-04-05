<header role="banner" class="banner">
  <div class="outer-container">
    <span class="email"><a href="mailto:<?php bloginfo('admin_email')?>"><?php bloginfo('admin_email')?></a></span>

    <ul class="social">
      <li><a href="http://www.twitter.com/lily_dart" class="twitter">Twitter</a></li>
      <li><a href="http://uk.linkedin.com/in/lilydart" class="linkedin">LinkedIn</a></li>
      <li><a href="https://dribbble.com/lilydart" class="dribbble">Dribbble</a></li>
      <li><a href="https://github.com/lilydartdev" class="github">Github</a></li>
    </ul>

    <h1 class="logo"><a href="<?php bloginfo('url') ?>"><?php bloginfo('name'); ?></a></h1>

    <nav role="navigation">
      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'walker' => new Roots_Nav_Walker(), 'menu_class' => 'nav'));
        endif;
      ?>
    </nav>
  </div>
</header>
