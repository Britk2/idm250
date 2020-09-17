<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name');?> | <?php wp_title();?></title>
    <?php wp_head();?>
</head>
<body <?php body_class();?>>
<header class="header" onload="screenCheck()">
  <div class="container header__content">
    <a href="<?php echo get_site_url();?>"><img class="header__logo" src="<?php echo get_site_icon_url();?>" alt="This is the logo">
    </a>

    <div class="mobile-menu" id="mobile-menu">
      <a href="javascript:void(0);" class="icon" onclick="toggleMenu()">
        <img src="<?php echo get_template_directory_uri();?>/pic/menu-close.png" alt="menu button" id="closed-menu">
        <img src="<?php echo get_template_directory_uri();?>/pic/menu-open.png" alt="menu button" id="opened-menu">
        <!-- <img src="../wp-content/uploads/2020/08/menu-close.png" alt="menu button" id="closed-menu">
        <img src="../wp-content/uploads/2020/08/menu-open.png" alt="menu button" id="opened-menu"> -->
      </a>
    </div>
    
    <div id="menu-drop">
      <?php
        wp_nav_menu([
          'theme_location' => 'primary_menu'
        ]);
      ?>
    </div>

    <!--
    <nav class="header__nav main-nav">
      <ul  class="main-nav__group">
        <li class="main-nav__item"> <a href="#" class="main-nav__link">About</a></li>
        <li class="main-nav__item"> <a href="#" class="main-nav__link">Portfolio</a></li>
        <li class="main-nav__item"> <a href="#" class="main-nav__link">Resume</a></li>
      </ul>
    </nav>
    -->
  </div>
</header>