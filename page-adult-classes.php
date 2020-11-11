<?php get_header(); ?>
<main class="main">
  <?php get_template_part('partials/embellishments'); ?>
  <section class="grid grid__adult-classes--full-width">
    <div class="adult-classes__masthead">
      <h1>Adult Dance Classes</h1>
    </div>
  </section>
  <section class="grid grid__adult-classes">
    <div class="adult-classes__class" id="adult-private-classes">
      <h2>Private Dance Lessons</h2>
      <p>Perfect for the student who wants to speed up their learning process or would like to compete or perform.
        Private classes offer the advantage of having a dance instructor just for you, giving you the opportunity to
        learn exactly what you want at your pace. Private lessons are by far the best way to learn how to dance. Private
        lessons are scheduled by phone or in person, so call us today to set up your first private lesson!</p>
      <a href="<?php echo site_url('/registration'); ?>" class="button">Schedule by Phone</a>
    </div>
    <div class="adult-classes__fw-image">
      <img src="<?php echo get_template_directory_uri() . '/images/'; ?>classes_placeholder_2.jpg"
        alt="Gustavo Krystal Dance Studio Private Lessons" class="fw-image">
    </div>



    <div class="class-grid">
      <h2 class="title">Drop-in Group Classes</h2>
      <p class="description">Our drop in classes are perfect for new students who are just getting into the dance scene
        or for students who can not make a weekly commitment. We offer 3 disciplines of dance on a weekly basis. See
        each class description below and just drop-in anytime!</p>
      <div class="column">
        <img src="<?php echo get_template_directory_uri() . '/images/'; ?>dance-technique.png"
          alt="Adult Dance Technique" />
        <h3>Dance Technique</h3>
        <p>Improve your overall dance technique that will help you in any style of dance. We work with a ballet/jazz
          base to improve flexibility, strength, center of balance, and much more.</p>
        <a href="<?php echo site_url('/product/adult-dance-technique/'); ?>" class="button">Check Availability</a>
      </div>
      <div class="column">
        <img src="<?php echo get_template_directory_uri() . '/images/'; ?>adult-bachata.jpg"
          alt="Bachata Fundamentals" />
        <h3>Bachata Fundamentals</h3>
        <p>In this class we teach the bachata basics and additional footwork as well as partner work. We teach out
          students patterns that you can take social dancing for your next night out on the town.</p>
        <a href="<?php echo site_url('/product/adult-bachata-fundamentals/'); ?>" class="button">Check Availability</a>
      </div>
      <div class="column">
        <img src="<?php echo get_template_directory_uri() . '/images/home-page/'; ?>adult_group.jpg"
          alt="Saslsa Fundamentals" />
        <h3>Salsa Fundamentals</h3>
        <p>In this fast-paced salsa group class we will definitely get you moving. We teach the proper techniques for
          salsa footwork as well as turn patterns and how to properly lead and follow.</p>
        <a href="<?php echo site_url('/product/adult-salsa-fundamentals/'); ?>" class="button">Check Availability</a>
      </div>
    </div>

    <div class="adult-classes__fw-image">
      <img src="<?php echo get_template_directory_uri() . '/images/'; ?>classes_placeholder.jpg"
        alt="Gustavo Krystal Dance Studio Group Lessons" class="fw-image">
    </div>

    <div class="class-grid">
      <h2 class="title">Choreography Classes</h2>
      <p class="description">Our choreography groups are perfect for those wanting to take their dance to the next
        level. Our choreography groups meet twice a week and have the opportunity to perform as a team. See the groups
        we offer below and call ahead to register.</p>
      <div class="column">
        <img src="<?php echo get_template_directory_uri() . '/images/'; ?>ladies-latin-styling.jpg"
          alt="Ladies Latin Styling Class" />
        <h3>Ladies Latin Styling</h3>
        <p>This class is designed for women or for anyone wanting to learn feminine styling in Latin dance. Each season
          we choose a different style of Latin dance for our choreography. Our ladies class focuses on feminine movement
          and styling through core movement. All levels are welcome, however we do recommend those who join have a solid
          understanding of basic salsa footwork patterns. We also recommend those who plan on performing to attend our
          drop-in technique classes. Call to register for this class or to see when our next choreography begins.</p>
        <a href="<?php echo site_url('/register-online'); ?>" class="button">Call to Register</a>
      </div>
      <div class="column">
        <img src="<?php echo get_template_directory_uri() . '/images/home-page/'; ?>adult_choreo.jpg"
          alt="Salsa Dance Classes" />
        <h3>Salsa 1, 2, and 3</h3>
        <p>Due to high demand we offer 3 levels of salsa choreography. Level placement is determined by our staff.
          Choreography groups begin periodically throughout the year and require prior registration. All of our groups
          require a basic knowledge of our Salsa level A curriculum. These groups allow our students to expand their
          knowledge of salsa movement and provide performance and competition opportunities at the higher levels. All
          groups meet twice weekly.</p>
        <a href="<?php echo site_url('/register-online'); ?>" class="button">Call to Register</a>
      </div>
    </div>





    <!-- <div class="adult-classes__class" id="adult-group-classes">
      <h2>Group Dance Classes</h2>
      <p>We offer both Drop-in classes and choreography groups in a group class setting. There is no partner needed for
        any of our group classes. Please see our two options below to decide which group class option would be best for
        you.</p>
      <div class="group-classes">
        <div class="sub-class">
          <h3>Drop-in Groups</h3>
          <p>Our drop-in classes are perfect for new students who are just getting into the dance scene or for students
            who can not make a weekly commitment. We offer 3 discipline of dance on a weekly basis. See each class
            description below and just drop-in anytime!​</p>
        </div>
        <div class="sub-class" id="adult-choreography-classes">
          <h3>Choreography Groups</h3>
          <p>Our Choreography groups are perfect for those wanting to take their dance to the next level. Our
            choreography groups meet twice a week and have the opportunity to perform as a team. See the groups we offer
            below and call ahead to register. </p>
        </div>
      </div>
    </div> -->

    <!-- <div class="adult-classes__class">
      <h2>Drop-in Classes</h2>
      <div class="faq-list">
        <div class="faq">
          <p>Adult Dance Technique
          </p>
        </div>
        <div class="answer">
          <p>
            Improve your overall dance technique that will help you in any style of dance. We work with a ballet/jazz
            base to improve flexibility, strength, center of balance and much more.
          </p>
          <a href="<?php echo site_url('/registration'); ?>" class="button">Check Availability</a>
        </div>
        <div class="faq">
          <p>Bachata Dance Class
          </p>
        </div>
        <div class="answer">
          <p>
            In this class we teach the bachata basics and additional footwork as well as partner work. We teach our
            students patterns that you can take social dancing for your next night out on the town.
          </p>
          <a href="<?php echo site_url('/registration')?>" class="button">Check Availability</a>
        </div>
        <div class="faq">
          <p>Salsa Dance Class
          </p>
        </div>
        <div class="answer">
          <p>
            In this high paced salsa group class, we will definitely get you moving. We teach the proper techniques for
            salsa footwork as well as turn patterns and how to properly lead and follow.
          </p>
          <a href="<?php echo site_url('/registration'); ?>" class="button">Check Availability</a>
        </div>
      </div>
    </div>
    <div class="adult-classes__class">
      <h2>Choreography Groups</h2>
      <div class="faq-list">
        <div class="faq">
          <p>Salsa Levels 1, 2, and 3</p>
        </div>
        <div class="answer">
          <p>
            Because of a high demand we offer 3 levels of salsa choreography. Level placement is determined by our
            staff. Choreography groups begin periodically throughout the year and require prior registration. All of our
            groups require a basic knowledge of our Salsa level A curriculum. These groups allow our students to expand
            their knowledge of salsa movement as well as providing performance opportunities and well as competition
            opportunities in the higher levels. All groups meet twice weekly. Call to register today!
          </p>
          <a href="<?php echo site_url('/registration'); ?>" class="button">Check Availability</a>
        </div>
        <div class="faq">
          <p>Ladies Latin Styling
          </p>
        </div>
        <div class="answer">
          <p>
            This class is designed for women or for anyone wanting to learn feminine styling in Latin dance. Each season
            we choose a different style of Latin dance for our choreography. Our ladies class focuses on feminine
            movement and styling through core movement, footwork, and upper body movement. All levels are welcome,
            however we do recommend those who join to have a solid understanding of salsa basic footwork patter. We also
            recommend those who plan on performing to attend our drop-in technique classes. Call to register for this
            class or to see when our next choreography begins.
          </p>
          <a href="<?php echo site_url('/registration'); ?>" class="button">Check Availability</a>
        </div>
      </div>
    </div> -->
  </section>
  <?php get_footer(); ?>