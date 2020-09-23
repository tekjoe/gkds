<?php get_header(); ?>
<main class="main">
  <?php get_template_part('partials/embellishments'); ?>
  <?php get_template_part('partials/masthead'); ?>
  <?php get_template_part('partials/adult-classes'); ?>
  <?php get_template_part('partials/childrens-classes'); ?>

  <section class="grid grid__features">
    <div class="features">
      <div class="feature">
        <div class="feature__image">
          <div class="image-overlay"></div>
          <img src="<?php echo get_template_directory_uri() . '/images/'; ?>adults_dancing.png" alt="" />
        </div>
        <div class="feature__content">
          <h2>Dance Classes for All Levels</h2>
          <p>
            Our wide range of dance classes offer something for all skill levels. Whether you're a novice or an expert,
            you've come to the right place.
          </p>
          <a href="<?php echo site_url('/registration'); ?>" class="button">View Availability</a>
        </div>
      </div>
      <div class="feature feature--reverse">
        <div class="feature__image">
          <div class="image-overlay"></div>
          <img src="<?php echo get_template_directory_uri() . '/images/'; ?>single_adult_dancing.png" alt="" />
        </div>
        <div class="feature__content">
          <h2>We make magic happen</h2>
          <p>
            Our mission is to provide the highest level of artistic education and to inspire our students. We're
            confident we have a dance class you'll enjoy.
          </p>
          <a href="<?php echo site_url('/registration'); ?>" class="button">View Availability</a>
        </div>
      </div>
      <div class="feature">
        <div class="feature__image">
          <div class="image-overlay"></div>
          <img src="<?php echo get_template_directory_uri() . '/images/home-page/'; ?>baila_milwaukee.jpg" alt="" />
        </div>
        <div class="feature__content">
          <h2>Baila Milwaukee</h2>
          <p>
            We are the hosts of Baila Milwaukee, an annual dance event that is one of Milwaukee's hottest social
            gatherings.
          </p>
          <a href="<?php echo site_url('/baila-milwaukee'); ?>" class="button">Learn More</a>
        </div>
      </div>
    </div>
  </section>
  <?php get_template_part('partials/testimonials'); ?>
  <section class="grid grid__schedule">
    <h2 class="grid__title">Class Schedule</h2>
    <!-- Dev Calendar -->
    <?php echo do_shortcode('[calendar id="87"]'); ?>
    <!-- Production Calendar -->
    <?php echo do_shortcode('[calendar id="376"]'); ?>
    </div>
  </section>
  <section class="grid grid__staff">
    <h2 class="grid__title">Meet Our Award Winning Staff</h2>
    <div class="staff">
      <div class="staff__flex">
        <div class="staff__member">
          <div class="staff__overlay">
            <h3>Krystal Nicola</h3>
            <a href="<?php echo site_url('/about#krystal-nicola');?>">Read Bio</a>
          </div>
          <img src="<?php echo get_template_directory_uri() . '/images/home-page/'; ?>krystal_nicola.jpg"
            alt="Krystal Nicola" />
        </div>
        <div class="staff__member">
          <div class="staff__overlay">
            <h3>Gustavo Nicola</h3>
            <a href="<?php echo site_url('/about#gustavo-nicola');?>">Read Bio</a>
          </div>
          <img src="<?php echo get_template_directory_uri() . '/images/home-page/'; ?>gustavo_nicola.jpg"
            alt="Gustavo Nicola" />
        </div>

      </div>
    </div>
  </section>
  <?php get_footer(); ?>