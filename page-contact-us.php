<?php get_header(); ?>
<main class="main">
  <?php get_template_part('partials/embellishments'); ?>
  <section class="grid grid__contact">
    <div class="contact-form__form">
      <div class="form-container">
        <h2>Contact Us By Email</h2>
        <p>We'd love to hear from you! If you have and questions about us or the classes we offer please fill out the
          contact form below.
        </p>
        <?php if (get_field('footer_contact', 'option')): ?>
        <?php echo do_shortcode('[contact-form-7 id="'.get_field('footer_contact', 'option').'" title="Contact Form"]'); ?>
        <?php else: ?>
        <span></span>
        <?php endif; ?>
      </div>

    </div>
    <div class="contact-form__details">
      <div class="details-container">
        <h2>All Other Inquiries</h2>
        <ul>
          <li><strong>Location:</strong> 123 W. Mineral St</li>
          <li><strong>Phone:</strong> 262-123-4567</li>
          <li><strong>Email:</strong> <a href="mailto:info@gkds.com">info@gkds.com</a></li>
        </ul>
      </div>
    </div>
    <div class="contact-form__map" id="map"></div>
  </section>
  <?php get_footer(); ?>