<?php get_header(); ?>
<main class="main">
  <?php get_template_part('partials/embellishments'); ?>
  <section class="grid grid--classes-page">
    <div class="adult-classes">
      <div class="adult-classes__title" id="adult-classes">
        <h1><span class="highlight">Adult</span> Classes</h1>
      </div>
      <div class="adult-classes__grid">
        <div class="class-container">
          <div class="class-container__image"><img
              src="<?php echo get_template_directory_uri() . '/images/'; ?>private_dance_lessons.png"
              alt="Private Dance Lessons" /></div>
          <div class="class-container__details">
            <h2>
              Private Dance Lessons
            </h2><a href="/adult-classes#adult-private-classes">Learn More</a>
          </div>
        </div>
        <div class="class-container">
          <div class="class-container__image"><img
              src="<?php echo get_template_directory_uri() . '/images/'; ?>classes_placeholder.jpg"
              alt="Private Dance Lessons" /></div>
          <div class="class-container__details">
            <h2>
              Group Dance Lessons
            </h2><a href="/adult-classes#adult-group-classes">Learn More</a>
          </div>
        </div>
        <div class="class-container">
          <div class="class-container__image"><img
              src="<?php echo get_template_directory_uri() . '/images/'; ?>classes_placeholder_2.jpg"
              alt="Private Dance Lessons" /></div>
          <div class="class-container__details">
            <h2>
              Choreography Teams
            </h2><a href="/adult-classes#adult-choreography-classes">Learn More</a>
          </div>
        </div>
      </div>
    </div>
    <div class="adult-classes">
      <div class="adult-classes__title" id="childrens-classes">
        <h1><span class="highlight">Children's</span> Classes</h1>
      </div>
      <div class="adult-classes__grid">
        <div class="class-container">
          <div class="class-container__image"><img
              src="<?php echo get_template_directory_uri() . '/images/'; ?>dance_kids_1.png"
              alt="Private Dance Lessons" /></div>
          <div class="class-container__details">
            <h2>
              Private Dance Lessons
            </h2><a href="/childrens-classes#childrens-private-classes">Learn More</a>
          </div>
        </div>
        <div class="class-container">
          <div class="class-container__image"><img
              src="<?php echo get_template_directory_uri() . '/images/'; ?>dance_kids_2.png"
              alt="Private Dance Lessons" /></div>
          <div class="class-container__details">
            <h2>
              Group Dance Lessons
            </h2><a href="/childrens-classes#childrens-group-classes">Learn More</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php get_footer(); ?>