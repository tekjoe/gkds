<!DOCTYPE html>
<html lang="en" id="html">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php wp_title('|', true, 'right'); ?> Gustavo Krystal Dance Studio</title>
  <meta name="description" content="<?php echo "Milwaukee's Premier Latin Dance Studio" ?>">
  <?php wp_head(); ?>
</head>

<body>
  <?php if (get_field('shtf', 'option')): ?>
  <div class="shtf">
    <p class="message"><?php the_field('shtf', 'option'); ?></p>
    <span class="close-button" role="button"><img
        src="<?php echo get_template_directory_uri() . '/images/'; ?>close.svg"" alt=" Close button"></span>
  </div>
  <?php else: ?>
  <span></span>
  <?php endif; ?>
  <header class="header">
    <nav class="desktop-nav">
      <div class="logo">
        <img src="<?php echo get_template_directory_uri() . '/images/'; ?>gkds_logo.png"
          alt="Gustavo Krystal Dance Studio Logo" />
        <span>414-294-9494</span>
      </div>
      <ul class="menu">
        <li><a href="<?php echo site_url('/')?>">Home</a></li>
        <li><a href="<?php echo site_url('/about'); ?>">About Us</a></li>
        <li><a href="<?php echo site_url('/adult-classes'); ?>">Adult Classes</a></li>
        <li><a href="<?php echo site_url('/childrens-classes'); ?>">Children's Classes</a></li>
        <li><a href="<?php echo site_url('/baila-milwaukee'); ?>">Baila Milwaukee</a></li>
        <li><a href="https://squareup.com/gift/ZTW903YCEDYTR/order" rel="noopener noreferrer" target="_blank">Gift
            Cards</a></li>
        <li><a href="<?php echo site_url('/contact-us'); ?>">Contact Us</a></li>
        <li>
          <ul class="social">
            <li><a href="https://www.facebook.com/GustavoKrystalDanceStudio/" target="_blank" rel="noreferrer"
                rel="noopener"><i class="fab fa-facebook fa-lg"></i></a></li>
            <li><a href="https://www.instagram.com/gustavokrystaldance/" target="_blank" rel="noreferrer"
                rel="noopener"><i class="fab fa-instagram fa-lg"></i></a></li>
            <li><a href="https://www.youtube.com/channel/UCdZrQytkuj9pQfcEoNR22XQ" target="_blank" rel="noreferrer"
                rel="noopener"><i class="fab fa-youtube fa-lg"></a></i></li>
          </ul>
        </li>
      </ul>



      <a href="<?php echo site_url('/registration');?>" class="button cta">Start Dancing</a>
    </nav>
    <nav class="mobile-nav">
      <div class="mobile-nav__controls">
        <div class="mobile-nav__hamburger" id="menuToggle">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
            <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" fill="#fff" />
          </svg>
        </div>
      </div>
      <div class="mobile-nav__menu" id="mobileNav">
        <ul>
          <li class="menu-item"><a href="<?php echo site_url('/'); ?>">Home</a></li>
          <li class="menu-item"><a href="<?php echo site_url('/about'); ?>">About Us</a></li>
          <li class="menu-item"><a href="<?php echo site_url('/classes'); ?>">Classes</a></li>
          <li class="menu-item"><a href="<?php echo site_url('/baila-milwaukee'); ?>">Baila Milwaukee</a></li>
          <li class="menu-item"><a href="https://squareup.com/gift/ZTW903YCEDYTR/order" rel="noopener noreferrer"
              target="_blank">Gift
              Cards</a></li>
          <li class="menu-item"><a href="<?php echo site_url('/contact-us'); ?>">Contact Us</a></li>
        </ul>
      </div>
    </nav>
  </header>