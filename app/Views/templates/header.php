<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/style/css/normalize.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/style/libs/hamburgers.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/style/css/fonts.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/style/css/index.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/style/css/mixins.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/style/css/header.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/style/css/footer.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/style/css/styles.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/style/css/popup_form.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/style/css/not_ready.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/style/css/<?php echo $style; ?>.css">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <link rel="icon" href="<?php echo base_url(); ?>/favicon.ico" type="image/icon">
  <title><?php echo $title; ?></title>
</head>

<body>
  <div class="logo-container text-center">
    <a href="/"><img class="logo-container__image" src="<?php echo base_url(); ?>/img/logo.svg" alt="logo" /></a>
    <p class="logo-container__subtitle">производственное и опытно-конструкторское предприятие</p>
  </div>

  <!-- Модификатор header_main-page добавляет баннеры в хедер и меняет меню -->
  <div class="header <?php echo $style_header_main; ?>">
    <button class="hamburger hamburger--spring js-menu-toggle header__hamburger" type="button">
      <span class="hamburger-box">
        <span class="hamburger-inner"></span>
      </span>
    </button>

    <ul class="header__menu-nav flex-center">
      <li class="header__menu-link-wrapper">
        <a href="/types_of_jobs" class="header__menu-link text-uppercase">Виды работы</a>
      </li>
      <li class="header__menu-link-wrapper">
        <a href="/rent_and_sale" class="header__menu-link text-uppercase">Аренда и покупка земснаряда</a>
      </li>
      <li class="header__menu-link-wrapper">
        <a href="/about_us" class="header__menu-link text-uppercase">О компании</a>
      </li>
      <li class="header__menu-link-wrapper">
        <a href="/not_ready" class="header__menu-link text-uppercase">Патенты и изобретения</a>
      </li>
      <li class="header__menu-link-wrapper">
        <a href="/not_ready" class="header__menu-link text-uppercase">Отзывы</a>
      </li>
      <li class="header__menu-link-wrapper">
        <a href="/not_ready" class="header__menu-link text-uppercase">Контакты</a>
      </li>
    </ul>

    <div class="header__banners">
      <div class="header__banners-row">
        <div class="header__banner header__banner_one">
          <h2 class="header__banner-title wrapper">Произодим земснаряды <br>с 1988 года</h2>
        </div>

        <div class="header__banner header__banner_two">
        </div>

        <div class="header__banner header__banner_three">
        </div>

        <div class="header__banner header__banner_one">
          <h2 class="header__banner-title wrapper">Произодим земснаряды <br>с 1988 года</h2>
        </div>
      </div>
    </div>
  </div>