<?php get_header(); ?>
<main class="main">
  <?php get_template_part('partials/embellishments'); ?>

  <section class="grid">
    <div class="woocommerce"><?php woocommerce_content(); ?></div>
  </section>
  <?php get_footer(); ?>