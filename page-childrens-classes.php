<?php get_header(); ?>
<main class="main">
  <?php get_template_part('partials/embellishments'); ?>
  <section class="grid grid__childrens-classes--full-width">
    <div class="childrens-classes__masthead">
      <h1>Children's Dance Classes</h1>
    </div>
  </section>
  <section class="grid grid__childrens-classes">
    <div class="childrens-classes__class" id="childrens-private-classes">
      <h2>Private Dance Lessons</h2>
      <p>Perfect for the student who wants to speed up their learning process or would like to compete or perform.
        Private classes offer the advantage of having a dance instructor just for you, giving you the opportunity to
        learn exactly what you want at your pace. Private lessons are by far the best way to learn how to dance. Private
        lessons are scheduled by phone or in person, so call us today to set up your first private lesson!</p>
      <a href="<?php echo site_url('/register-online'); ?>" class="button">Get in Touch</a>
    </div>
    <div class="childrens-classes__fw-image">
      <img src="<?php echo get_template_directory_uri() . '/images/home-page/'; ?>kids_classes.jpeg"
        alt="Gustavo Krystal Dance Studio Private Lessons" class="fw-image">
    </div>
    <div class="class-grid">
      <h2 class="title">Group Dance Classes</h2>
      <div class="column">
        <img src="<?php echo get_template_directory_uri() . '/images/'; ?>childrens_latin_dance.jpg"
          alt="Children's Latin Dance" />
        <h3>Children's Latin Dance</h3>
        <p>Latin dance class for kids. This class teaches leading and following as well as basic footwork in popular
          Latin dances usually focusing on salsa.</p>
        <a href="<?php echo site_url('/register-online'); ?>" class="button">Call to Register</a>
      </div>
      <div class="column">
        <img src="<?php echo get_template_directory_uri() . '/images/'; ?>childrens_ballet_jazz.jpg"
          alt="Children's Ballet/Jazz" />
        <h3>Children's Ballet/Jazz</h3>
        <p>Our ballet/jazz classes for children teach proper dance technique and dance training from a young age all the
          way up to adults. We work on strength, stretching, ballet and jazz terminology, isolating, and overall
          corporal awareness and coordination.</p>
        <a href="<?php echo site_url('/register-online'); ?>" class="button">Call to Register</a>
      </div>
    </div>
  </section>
  <?php get_footer(); ?>