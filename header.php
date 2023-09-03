<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fundacja
 */
 ?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
   <!-- META TAGS -->
   <meta charset="<?php bloginfo( 'charset' ); ?>">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="description"
      content="Fundacja Nadzieja Rodzinie - Ochrona życia rodzinnego, profilaktyka społeczna, wspieranie osób bezrobotnych ze szczególnym uwzględnieniem młodzieży zagrożonej wykluczeniem społecznym. Poprawa funkcjonowania osób niepełnosprawnych poprzez zatrudnienie, rehabilitację, aktywizację społeczną i kulturalną, pomoc w życiu codziennym. Nasza misja to niesienie pomocy w ochronie życia rodzinnego, profilaktyce społecznej i wspieraniu osób bezrobotnych." />

   <link rel="shortcut icon" type="image/png" href="<?php echo get_template_directory_uri(); ?> /assets/img/favicon.png">

   <!-- STYLES -->
   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?> /assets/css/bootstrap.min.css">
   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?> /assets/css/ionicons.min.css">
   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?> /assets/css/flexslider.css">
   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?> /assets/css/animsition.min.css">
   <!-- <link rel="stylesheet" href="assets/css/animate.css"> -->
   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?> /assets/css/style.css">
   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?> /assets/css/mobile.css">
   <script defer src="<?php echo get_template_directory_uri(); ?> /assets/js/script.js"></script>

   <!-- AOS -->
   <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
   <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

   <!-- UP BUTTON button-up -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
   <link href="https://fonts.googleapis.com/css?family=Merriweather:400,900,900i" rel="stylesheet">
   <?php wp_head(); ?>
</head>

<body <?php body_class('animsition'); ?>>
    <?php wp_body_open(); ?>

   <!-- HEADER  -->
   <header class="main-header">
      <div class="container">
         <div class="logo">
            <a href="index.html">
               <img class="logo-big" src="<?php echo get_template_directory_uri(); ?> /assets/img/fnr-logo.png" alt="logo">
               <img class="logo-small" src="<?php echo get_template_directory_uri(); ?> /assets/img/fnr-logo-min.png" alt="logo-min">
            </a>
         </div>

         <div class="menu">
            <!-- desktop navbar -->
            <nav class="desktop-nav">
               <ul class="first-level">
                  <li><a href="index.html" class="animsition-link">Strona główna</a></li>
                  <li><a href="about.html" class="animsition-link">O nas</a></li>
                  <li><a href="projects.html" class="animsition-link">Projekty</a></li>
                  <li><a href="announcements.html" class="animsition-link">Ogłoszenia</a></li>
                  <li><a href="https://nadziejarodzinie.org.pl/praca/" target="_blank">Praca</a>
                  </li>
                  <li><a href="contact.html" class="animsition-link">Kontakt</a></li>
               </ul>
            </nav>
            <!-- mobile navbar -->
            <nav class="mobile-nav"></nav>
            <div class="menu-icon">
               <div class="line"></div>
               <div class="line"></div>
               <div class="line"></div>
            </div>
         </div>
      </div>
   </header>
