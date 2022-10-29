<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <?php wp_head(); ?> 
</head>
<body>
  <nav>
    <div class="nav-title">
      <p>Helheim</p>
    </div>
    <div class="nav-menu">
      <div id="BurgerIcon" class="nav-menu-open-btn">
        <p>Menu</p>
        <svg  xmlns="http://www.w3.org/2000/svg" width="32" height="20" viewBox="0 0 32 20">
          <rect id="Rectangle_25" data-name="Rectangle 25" width="32" height="4" rx="2" transform="translate(0 8)" fill="#035a31"/>
          <rect id="Rectangle_26" data-name="Rectangle 26" width="32" height="4" rx="2" transform="translate(0 16)" fill="#035a31"/>
          <rect id="Rectangle_27" data-name="Rectangle 27" width="32" height="4" rx="2" transform="translate(0 0)" fill="#035a31"/>
        </svg>
      </div>
      <div id="CloseIcon" class="nav-menu-close-btn">
        <p>Close</p>
        <svg  xmlns="http://www.w3.org/2000/svg" width="29.698" height="29.698" viewBox="0 0 29.698 29.698">
          <rect id="Rectangle_18" data-name="Rectangle 18" width="37" height="5" transform="translate(3.536 0) rotate(45)" fill="#035a31"/>
          <rect id="Rectangle_19" data-name="Rectangle 19" width="37" height="5" transform="translate(0 26.163) rotate(-45)" fill="#035a31"/>
        </svg>
      </div>
    </div> 
  </nav>
  <div id="menuList" class='nav-menu-list'>
      <?php wp_nav_menu(['theme_location' => 'header',
                          'container' => false]);//on va cherche le menu nommer header, on retire le container (div) qui l'entoure?>
  </div>
  <header style="background:center / cover no-repeat url(<?php echo get_header_image(); ?>);" > 
    <?php the_custom_logo(); ?>
  </header> 
    <div id="grid">