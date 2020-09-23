<footer class="footer">
  <div class="footer__content footer__content--left">
    <img src="<?php echo get_template_directory_uri() . '/images/'; ?>gkds_logo.png"
      alt="Gustavo Krystal Dance Studio" />
    <div class="info">
      <p>
        Gustavo Krystal Dance Studio is Milwaukee's premier Latin dance studio, with dance classes for people from all
        walks of life.
      </p>
    </div>
    <div class="address">
      <p>Gustavo Krystal Dance Studio</p>
      <p>132 W. Mineral St.</p>
      <p>Miwaukee, WI 53213</p>
    </div>
    <div class="social">
      <p>Follow Us</p>
      <ul>
        <li><a href="https://www.facebook.com/GustavoKrystalDanceStudio/" target="_blank" rel="noreferrer"
            rel="noopener"><i class="fab fa-facebook fa-lg"></i></a></li>
        <li><a href="https://www.instagram.com/gustavokrystaldance/" target="_blank" rel="noreferrer" rel="noopener"><i
              class="fab fa-instagram fa-lg"></i></a></li>
        <li><a href="https://www.youtube.com/channel/UCdZrQytkuj9pQfcEoNR22XQ" target="_blank" rel="noreferrer"
            rel="noopener"><i class="fab fa-youtube fa-lg"></a></i></li>
      </ul>
    </div>
  </div>
  <div class="footer__content footer__content--right">
    <h3>Contact Us</h3>
    <?php if (get_field('footer_contact', 'option')): ?>
    <?php echo do_shortcode('[contact-form-7 id="'.get_field('footer_contact', 'option').'" title="Contact Form"]'); ?>
    <?php else: ?>
    <span></span>
    <?php endif; ?>
  </div>
</footer>
<?php wp_footer(); ?>
</main>
</body>

</html>