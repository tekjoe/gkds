<?php get_header(); ?>
<main class="main">
  <?php get_template_part('partials/embellishments'); ?>
  <section class="grid">
    <div class="woocommerce">
      <?php echo do_shortcode('[products]') ?>
      <p>greetings from the registration template</p>
    </div>
  </section>
  <?php get_footer(); ?>