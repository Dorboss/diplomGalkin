<?php
  $active = [];
  $active = apply_filters('get_active', $active); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <? wp_head() ?>
    <title><?=get_the_title()?></title>
    <body>
    <!-- ***** Preloader Start ***** --> 
     <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="/"><h2>Мастерская <em>ВЕЛЕС</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item <?=$active[0] ?>">
                <a class="nav-link" href="/">Главная
                </a>
              </li> 
              <li class="nav-item <?=$active[1] ?>">
                <a class="nav-link" href="/products">Наши продукты</a>
              </li>
              <li class="nav-item <?=$active[2] ?>">
                <a class="nav-link" href="/about">О нас</a>
              </li>
              <li class="nav-item <?=$active[3] ?>">
                <a class="nav-link" href="/contacts">Контакты</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
  </head>