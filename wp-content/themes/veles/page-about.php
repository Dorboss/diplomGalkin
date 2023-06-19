<?php
/*
Template Name: О нас
*/
 get_header() ?>
    <!-- Page Content -->
    <div class="page-heading about-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>О нас</h4>
              <h2>Наша мастерская</h2>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="best-features about-features">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>О нашей мастерской</h2>
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-image">
              <img src="<?=get_template_directory_uri()?>/assets/images/feature-image.jpg" alt="">
            </div>
          </div>
          <div class="col-md-6">
            <div class="left-content">
              <h4>О нас</h4>
  
              <?= the_field('about'); ?>
  
              <ul class="social-icons">
                <li><a href="https://wa.me/78005553535"><i class="fa fa-whatsapp"></i></a></li>
                <li><a href="https://telegram.me/Dorboss"><i class="fa fa-telegram"></i></a></li>
                <li><a href="https://vk.com/dorboss"><i class="fa fa-vk"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    <? get_footer() ?>