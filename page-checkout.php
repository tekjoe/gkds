<?php get_header(); ?>
<main class="main">
  <?php get_template_part('partials/embellishments'); ?>

  <section class="grid grid__checkout">
    <?php echo do_shortcode('[woocommerce_checkout]'); ?>
  </section>
  <?php get_footer(); ?>