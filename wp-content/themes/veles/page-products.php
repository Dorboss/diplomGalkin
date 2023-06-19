<?php
/*
Template Name: Изделия
*/
 get_header() ?>
    <!-- Page Content -->
    <div class="page-heading products-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h2>Наши изделия</h2>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php 
    $posts = get_posts([
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
    <div class="products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="filters">
              <ul>
                  <li class="active" data-filter="*">Все продукты</li>
              </ul>
            </div>
          </div>
          <div class="col-md-12">
            <div class="filters-content">
                <div class="row grid">
                    <? foreach($posts as $post): ?>
                    <div class="col-lg-4 col-md-4 all des">
                    
                      <div class="product-item">
                        <a href="#"><img src="<?=wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'thumbnail_size_w', false)[0];?>" alt="<?=the_title()?>"></a>
                        <div class="down-content">
                          <a href="#"><h4><?=$post->post_title?></h4></a>
                          <p><?=the_content()?></p>
                        </div>
                      </div>
                    
                    </div>
                    <?=wp_reset_postdata();endforeach;?>
                    
                </div>
            </div>
          </div>
        </div>
      </div>
</div>
<? get_footer() ?>