<?php get_header(); ?>
<main class="main">
  <?php get_template_part('partials/embellishments'); ?>

  <section class="grid grid__cart">
    <?php echo do_shortcode('[woocommerce_cart]'); ?>
  </section>
  <?php get_footer(); ?>