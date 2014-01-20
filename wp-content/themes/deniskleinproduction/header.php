<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=<?php bloginfo('language');?>> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=<?php bloginfo('language');?>> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=<?php bloginfo('language');?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=<?php bloginfo('language');?>> <!--<![endif]-->
<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<html>
  <head <?php language_attributes(); ?>>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="description" content="<?php bloginfo('description'); ?>" />
    <meta name="keywords" content="Denis, Klein, Production, Caméraman, Vidéos, Aftermovie, Freelance, Liège, Belgique" />
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css">
    <link rel="icon" type="image/png" href="<?php bloginfo('template_url') ?>/img/favicon.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <?php wp_head(); ?>
  </head>
  <body>
      <header>
      <div class="content">
          <div itemscope itemtype="http://schema.org/Person">
            <h1>
              <a href="<?php echo site_url(); ?>" title="Denis Klein Production - Caméraman, Monteur, Réalisateur">
                <img src="<?php bloginfo('template_url') ?>/img/denis-klein-production.png" alt="Denis Klein Production - Logo" widht="512" height="355">
                <span class="hidden" itemprop="name">Denis Klein</span>
                <span class="hidden" itemprop="jobTitle" >Caméraman / Monteur / Réalisateur freelance</span>
              </a>
            </h1>
          </div>
          <h2 itemprop="jobTitle" >Caméraman / Monteur / Réalisateur</h2>
      </div>
    </header>
    <?php if ( is_home() ):?>
      <div class="cf main-menu menu-home">
        <div class="content">
             <?php wp_nav_menu('header-menu');?>
    <?php else:?>
        <div class="cf main-menu">
          <div class="content">
            <nav class="navigation">
            <ul>
              <li><a href="<?php echo site_url(); ?>/#apropos">À propos</a></li>
              <li><a href="<?php echo site_url(); ?>/#videos">Mes vidéos</a></li>
              <li><a href="<?php echo site_url(); ?>/#contact">Me contacter</a></li>
            </ul>
            </nav>
          <?php endif;?>
            <nav class="social-networks">
              <ul>
                <li><a target="_blank" href="https://www.facebook.com/DenisKleinVideoProduction" title="Voir ma page Facebook"></a></li>
                <li><a target="_blank" href="http://www.youtube.com/user/TheDenzProduction" title="Voir ma page Youtube"></a></li>
                <li><a target="_blank" href="https://vimeo.com/user17405191" title="Voir ma page Viméo"></a></li>
                <li><a target="_blank" href="http://www.linkedin.com/pub/denis-klein/74/614/811" title="Voir mon profil Linkedin"></a></li>
              </ul>
            </nav>
          </div>
        </div>
