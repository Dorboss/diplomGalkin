<?php
/*
Template Name: Контакты
*/
 get_header() ?>
    <!-- Page Content -->
    <div class="page-heading contact-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>Контакты</h4>
              <h2>Как связаться с нами</h2>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="find-us">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Наше расположеие на карте</h2>
            </div>
          </div>
          <div class="col-md-8">
            <div id="map">
              <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A8a6e43b9e64c009440c765adb43fa4cd99c8d7d53fee73834746b11d8cd536d3&amp;source=constructor" width="100%" height="330px" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
          </div>
          <div class="col-md-4">
            <div class="left-content">
                <?= the_field('address');?>
              <!--<h4>О нашем офисе</h4>-->
              <!--<p>Наш офис расположен по адресу: г.Брянск, Бежицкий район, улица Камозина, 7/2.</p>-->
              <!--<p>Время работы: <br> Пн-Пт: 9:00 - 18:00 <br> Сб: 9:00 - 16:00 <br> Вс: Выходной</p>-->
              <ul class="social-icons">
                <li><a href="https://wa.me/78005553535"><i class="fa fa-whatsapp"></i></a></li>
                <li><a href="https://telegram.me/Dorboss"><i class="fa fa-telegram"></i></a></li>
                <li><a href="https://vk.com/dorboss"><i class="fa fa-vk"></i></a></li>
                <!--<li><a href="#"><i class="fa fa-behance"></i></a></li>-->
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    <div class="send-message">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Свяжитесь с нами</h2>
            </div>
          </div>
          <div class="col-md-8">
            <div class="contact-form">
              <?= do_shortcode('[contact-form-7 id="5" title="Контактная форма 1"]'); ?>
            </div>
          </div>
          <div class="col-md-4">
            <ul class="accordion">
              <li>
                  <a class="accord">Связь через сайт.</a>
                  <div class="content">
                      <?= the_field('accord1'); ?>
                      <!--<p>Чтобы связаться с нами через сайт - заполните поля формы и нажмите кнопку "Отправить". Мы свяжемся с вами в течении 2-х дней.</p>-->
                  </div>
              </li>
              <li>
                  <a class="accord">Задать вопрос по телефону</a>
                  <div class="content">
                      <?= the_field('accord2'); ?>
                      <!--<p>Чтобы задать вопрос по телефону - наберите номер <a href="tel:88005553535">8 (800) 555-35-35</a></p>-->
                  </div>
              </li>
              <li>
                  <a class="accord">Сообщения через мессенджер</a>
                  <div class="content">
                      <?= the_field('accord3'); ?>
                      <!--<p>Для связи через мессенджер доступны следующие номера: <br>-->
                      <!--  WhatsApp - <a href="https://wa.me/78005553535">8 (800) 555-35-35</a>   <br>-->
                      <!--  Viber - <a href="viber://chat?number=%2B78005553535">8 (800) 555-35-35</a>-->
                      <!--</p>-->
                  </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <? get_footer() ?>