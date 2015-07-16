<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?php echo $site->title()->html() ?> - <?php echo $page->title()->html() ?></title>
  <meta name="description" content="<?php echo $site->description()->html() ?>">
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">

  <!-- Open Graph Protocol -->
  <meta property="og:title" content="<?php echo $site->title().' – '.$page->title() ?>" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="<?php echo $page->url() ?>" />
  <?php
  $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
    if (false == strpos($url, 'projects')){ ?>
<meta property="og:image" content="<?php echo url('assets/images/default-thumb.jpg') ?>" />
    <?php } else { ?>
<meta property="og:image" content="<?php echo $page->images()->first()->url() ?>" />
  <?php } ?>

  <!-- Webfonts -->
  <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic' rel='stylesheet' type='text/css'>
  <script src="//use.typekit.net/bsu4zxn.js"></script>
  <script>try{Typekit.load();}catch(e){}</script>

  <?php echo css('assets/css/core.css') ?>
</head>
<body>
  <button class="scrollToTop round-button" type="button" name="top"></button>
  <header>
    <div id="menu">
      <div id="logo">
        <a href="/">
          <h1>Daniel Ngo &mdash; <em>Digital Designer</em></h1>
        </a>
      </div>
      <div id="contact">
        <p>
          <span>+44 07479 840831</span><br>
          <span><a href="mailto:hello@danielno.com">hello@danielno.com</a></span>
        </p>
        <ul id="social-media">
          <li><a href="http://instagram.com/danngofett"><img src="<?php echo url('assets/images/icon-instagram.png') ?>" alt="Instagram"></a></li>
          <li><a href="https://www.linkedin.com/in/dango"><img src="<?php echo url('assets/images/icon-linkedin.png') ?>" alt="LinkedIn"></a></li>
          <li><a href="http://www.pinterest.com/dangofett2/"><img src="<?php echo url('assets/images/icon-pinterest.png') ?>" alt="Pinterest"></a></li>
        </ul>
      </div>
    </div>
  </header>