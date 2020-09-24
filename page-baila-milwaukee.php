<?php get_header(); ?>
<main class="main">
  <?php get_template_part('partials/embellishments'); ?>
  <section class="grid grid__baila--full-width">
    <div class="baila__masthead">
      <div class="baila__cta">
        <div class="video-overlay">
          <a class="venobox" data-vbtype="video" href="https://www.youtube.com/watch?v=-Po1RWGwqms&feature=emb_title">
            <img src="<?php echo get_template_directory_uri() . '/images/'; ?>play_button.png" alt="" />
          </a>
        </div>
        <img src="<?php echo get_template_directory_uri() . '/images/'; ?>baila_milwaukee.png" alt="Baila Milwaukee" />
      </div>
    </div>
  </section>
  <section class="grid grid__baila">
    <div class="baila__history">
      <h1>Baila Milwaukee</h1>
      <p class="subtitle">Date TBD</p>
      <p>
        Gustavo Krystal Dance has been celebrating each year of dance with their Gala Baila Milwaukee, starting their
        first anniversary in 2015. The first anniversary of Gustavo Krystal Dance was a cause for celebration. The Gala
        was an opportunity to showcase the hard work and dedication of our students.
      </p>
      <p>
        The Gala was held at Milwaukee’s premier dance venue, the Wherehouse with local and national coverage by
        TeleMundo. The event was sold out in less than 3 weeks. Our 250 guests enjoyed performances by our students and
        International World Salsa Champion’s - Junior & Emily. In addition, special VIP packages which included
        champagne and elegant hors d’oeuvres by Chef Ana of KASANA, an Argentinian-Brazilian restaurant in Milwaukee’s
        3rd Ward.
      </p>
      <p>
        Since then the event has continued to grow and blossom becoming one of Milwaukee’s Hottest annual dance events.
        Including a weekend of social dancing, shows, workshops, and an elegant red carpet evening.
      </p>
    </div>

  </section>
  <section class="grid grid__baila">
    <h2 class="grid__title">Guest Artists</h2>
    <div class="baila__guest-artists">
      <div class="guest-artist">
        <div class="guest-artist__overlay">
          <div class="overlay__content">
            <p class="content__country">Puerto Rico</p>
            <p class="content__names">Tito & Tamara</p>
            <p class="content__years">Baila 2016, 2017, 2018, 2019</p>
          </div>
        </div>
        <img src="<?php echo get_template_directory_uri() . '/images/'; ?>tito_tamara_baila.png"
          alt="Tito and Tamara Baila Milwaukee" class="guest-artist__image" />
      </div>
      <div class="guest-artist">
        <div class="guest-artist__overlay">
          <div class="overlay__content">
            <p class="content__country">Colombia</p>
            <p class="content__names">Kike & Xiomar</p>
            <p class="content__years">Baila 2019</p>
          </div>

        </div>
        <img src="<?php echo get_template_directory_uri() . '/images/'; ?>kike_xiomar_baila.png"
          alt="Tito and Tamara Baila Milwaukee" class="guest-artist__image" />
      </div>
      <div class="guest-artist">
        <div class="guest-artist__overlay">
          <div class="overlay__content">
            <p class="content__country">Argentina/Chile</p>
            <p class="content__names">Karen & Ricardo</p>
            <p class="content__years">Baila 2018</p>
          </div>

        </div>
        <img src="<?php echo get_template_directory_uri() . '/images/'; ?>karen_ricardo_baila.png"
          alt="Tito and Tamara Baila Milwaukee" class="guest-artist__image" />
      </div>
      <div class="guest-artist">
        <div class="guest-artist__overlay">
          <div class="overlay__content">
            <p class="content__country">Los Angeles</p>
            <p class="content__names">Junior & Emily</p>
            <p class="content__years">Baila 2015,2016,2017</p>
          </div>

        </div>
        <img src="<?php echo get_template_directory_uri() . '/images/'; ?>junior_emily_baila.png"
          alt="Tito and Tamara Baila Milwaukee" class="guest-artist__image" />
      </div>
      <div class="guest-artist">
        <div class="guest-artist__overlay">
          <div class="overlay__content">
            <p class="content__country">Colombia</p>
            <p class="content__names">Jefferson & Adrianita</p>
            <p class="content__years">Baila 2017</p>
          </div>

        </div>
        <img src="<?php echo get_template_directory_uri() . '/images/'; ?>jefferson_adrianita_baila.png"
          alt="Tito and Tamara Baila Milwaukee" class="guest-artist__image" />
      </div>
    </div>
  </section>
  <?php get_footer(); ?>