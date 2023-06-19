<?php
/*
Template Name: Главная страница
*/

?>



<? get_header() ?>

 

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner header-text">
      <div class="owl-banner owl-carousel">
        <div class="banner-item-01">
          <div class="text-content">
            <!-- <h4>Best Offer</h4> -->
            <h2>Лучшие изделия из дерева и керамики</h2>
          </div>
        </div>
        <div class="banner-item-02">
          <div class="text-content">
            <!-- <h4>Flash Deals</h4> -->
            <h2>Высокое качество ручной работы</h2>
          </div>
        </div>
        <div class="banner-item-03">
          <div class="text-content">
            <!-- <h4>Last Minute</h4> -->
            <h2>Участие в выставках</h2>
          </div>
        </div>
      </div>
    </div>
    <!-- Banner Ends Here -->
    <?php 
    $posts = get_posts([
      'numberposts' => 6,
      'category'    => 0,
      'orderby'     => 'date',
      'order'       => 'DESC',
      'include'     => array(),
      'exclude'     => array(),
      
      'meta_key'    => '',
      'meta_value'  =>'',
      'post_type'   => 'post',
      'suppress_filters' => true,
  ]);
  ?>
    <div class="latest-products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Наши продукты</h2>
              <a href="/products">все продукты <i class="fa fa-angle-right"></i></a>
            </div>
          </div>
          <? foreach($posts as $post): ?>
          <div class="col-md-4">
            <div class="product-item">
              <a href="#"><img src="<?=wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'thumbnail_size_w', false)[0];?>" alt="<?=the_title()?>"></a>
              <div class="down-content">
                <a href="#"><h4><?=$post->post_title?></h4></a>
                <p><?=the_content()?></p>
              </div>
            </div>
          </div>
          <?wp_reset_postdata();endforeach;?>
        </div>
      </div>
    </div>

    <div class="best-features">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>О нашей мастерской</h2>
            </div>
          </div>
          <div class="col-md-6">
            <div class="left-content">
                <?= the_field('about')?>
              
              <a href="/about" class="filled-button">Подробнее</a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-image">
              <img src="<?=get_template_directory_uri()?>/assets/images/feature-image.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>


    
    <? get_footer() ?>