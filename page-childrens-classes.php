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
      <a href="/registration" class="button">Get in Touch</a>
    </div>
    <div class="childrens-classes__fw-image">
      <img src="<?php echo get_template_directory_uri() . '/images/home-page/'; ?>kids_classes.jpeg"
        alt="Gustavo Krystal Dance Studio Private Lessons" class="fw-image">
    </div>
    <div class="childrens-classes__class" id="childrens-group-classes">
      <h2>Group Dance Classes</h2>
      <p>We offer both Drop-in classes and choreography groups in a group class setting. There is no partner needed for
        any of our group classes. Please see our two options below to decide which group class option would be best for
        you.</p>
      <div class="sub-class">
        <img src="<?php echo get_template_directory_uri() . '/images/'; ?>childrens_latin_dance.jpg"
          alt="Children's Latin Dance" />
        <h3>Children's Latin Dance</h3>
        <p>Latin dance class for kids. This class teaches leading and following as well as basic footwork in popular
          Latin dances usually focusing on salsa.</p>
        <a href="/registration" class="button">Register Today</a>
      </div>
      <div class="sub-class">
        <img src="<?php echo get_template_directory_uri() . '/images/'; ?>childrens_ballet_jazz.jpg"
          alt="Children's Ballet/Jazz" />
        <h3>Children's Ballet/Jazz</h3>
        <p>Latin dance class for kids. This class teaches leading and following as well as basic footwork in popular
          Latin dances usually focusing on salsa. </p>
        <a href="/registration" class="button">Register Today</a>
      </div>
    </div>
    <!-- <div class="childrens-classes__class">
      <h2>Drop-in Classes</h2>
      <div class="faq-list">
        <div class="faq">
          <p>Childrens Latin Dance
          </p>
        </div>
        <div class="answer">
          <p>
            Latin dance class for kids. This class teaches leading and following as well as basic footwork in popular
            Latin dances usually focusing on salsa.
          </p>
          <a href="/registration" class="button">Check Availability</a>
        </div>
        <div class="faq">
          <p>Children's Ballet/Jazz
          </p>
        </div>
        <div class="answer">
          <p>
            This class meets weekly and is open to all children. They will learn proper dance technique as well as class
            etiquette. In this class we focus on flexibility, strength, corporal awareness and coordination as well as
            dance techniques that can be carried over to all styles of dance.
          </p>
          <a href="/registration" class="button">Check Availability</a>
        </div>
      </div>
    </div> -->
  </section>
  <?php get_footer(); ?>