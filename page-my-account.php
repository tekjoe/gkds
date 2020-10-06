<?php get_header(); ?>
<main class="main">
  <?php get_template_part('partials/embellishments'); ?>

  <section class="grid grid__my-account">
    <?php echo do_shortcode('[woocommerce_my_account]'); ?>
  </section>
  <?php get_footer(); ?>