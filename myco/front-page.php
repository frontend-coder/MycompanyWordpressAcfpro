<?php
/**
Template Name: main-page-tamplate
**/
?>
<?php
get_header();
?>

<section class="block " id="aboutus">
  <div class="container">
    <div class="row">
      <div class="about_us_wrap">
        <div class="about_us_items">
          <?php
          $us_fon = get_field('us_fon', 'option');
          if($us_fon) :
            ?>
            <img class="img-responsive" src="<?php echo esc_url($us_fon[url]); ?>" alt="<?php echo esc_html($us_fon[alt]); ?>">
          <?php endif; ?>
        </div>
        <div class="about_us_items">
          <div class="about_us_title_wrap">
            <?php $us_title = get_field('us_title', 'option');
            if($us_title) :
              ?>

              <h2 class="about_us_title"><?php echo esc_html($us_title); ?>
              <span class="about_us_title_line"></span>
            </h2>
          <?php endif; ?>

        </div>
        <?php $us_descr = get_field('us_descr', 'option');
        if($us_descr) :
          ?>
          <div class="about_us_descr">
            <?php echo esc_html($us_descr); ?>
          </div>
        <?php endif; ?>
        <?php while( has_sub_field('us_listdost', 'option') ):
          $us_listdost_list = get_sub_field('us_listdost_list', 'option');
          ?>
          <ul class="about_us_lists">
            <li> <?php echo $us_listdost_list; ?></li>
          </ul>
        <?php endwhile; ?>
      </div>
    </div>
  </div>
</div>
</section>

<section class="block our_team_fon" id="our_team">
  <div class="container">

    <?php
    $comand_title = get_field('comand_title', 'option');
    if($comand_title) :
      ?>

      <h2 class="block_title"><?php echo esc_html($comand_title); ?></h2>
    <?php endif; ?>

    <div class="row">
      <div class="our_team_wrap">

        <?php while( has_sub_field('comand_list', 'option') ):
          $comand_list_picture = get_sub_field('comand_list_picture', 'option');
          $comand_list_name = get_sub_field('comand_list_name', 'option');
          $comand_list_position = get_sub_field('comand_list_position', 'option');
          $comand_list_descr = get_sub_field('comand_list_descr', 'option');
          ?>
          <div class="our_team_items">
            <div class="our_team_foto">
              <img src="<?php echo esc_url($comand_list_picture[url]); ?>" alt="<?php echo esc_html($comand_list_picture[alt]); ?>">
            </div>
            <div class="our_team_title"><?php echo esc_html($comand_list_name); ?></div>
            <div class="our_team_pozition"><?php echo esc_html($comand_list_position); ?></div>
            <div class="our_team_deskr"> <?php echo esc_html($comand_list_descr); ?>
          </div>
        </div>
      <?php endwhile; ?>
    </div>
  </div>
</div>
</section>


<section class="block" id="service">
  <div class="container">
    <h2 class="block_title">наши услуги</h2>
    <div class="block_descr">
      Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты. Жаренные по всей ее, она даль текста предупреждал всеми страну! Дороге взгляд там приставка щеке продолжил наш коварный деревни если она над моей мир правилами вопроса рукопись, необходимыми строчка злых назад силуэт диких грустный журчит они грамматики заглавных? Вскоре она эта, свой заглавных точках парадигматическая толку, вопроса, рекламных коварный взобравшись диких.
    </div>
    <div class="row">
      <div class="our_team_wrap">

        <div class="our_team_items our_service_items">
          <div class="our_service_foto">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/icon1-monitor.png" alt="монитор">
          </div>
          <div class="our_service_title">Веб-дизайн</div>
          <div class="our_service_deskr"> Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты. Родного маленький напоивший рекламных имеет, букв.
          </div>
        </div>

        <div class="our_team_items our_service_items">
          <div class="our_service_foto">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/icon2-mobile.png" alt="мобильные приложения">
          </div>
          <div class="our_service_title">Мобильность</div>
          <div class="our_service_deskr"> Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты. Родного маленький напоивший рекламных имеет, букв.
          </div>
        </div>

        <div class="our_team_items our_service_items">
          <div class="our_service_foto">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/icon3-photo.png" alt="фотокамера">
          </div>
          <div class="our_service_title">Фотография</div>
          <div class="our_service_deskr"> Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты. Родного маленький напоивший рекламных имеет, букв.
          </div>
        </div>

        <div class="our_team_items our_service_items">
          <div class="our_service_foto">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/icon4-voice.png" alt="изучение рынка">
          </div>
          <div class="our_service_title">Маркетинг</div>
          <div class="our_service_deskr"> Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты. Родного маленький напоивший рекламных имеет, букв.
          </div>
        </div>

      </div>
    </div>
  </div>
</section>

<section class="block our_team_fon" id="our_clients">
  <div class="container">
   <h2 class="block_title">Наши клиенты</h2>
   <div class="row">
    <div class="our_clients_wrap">

      <div class="our_clients_items">
        <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/assets/img/clients/clients-1.png" alt="фотография клиента">
      </div>

      <div class="our_clients_items">
        <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/assets/img/clients/clients-2.png" alt="фотография клиента">
      </div>
      <div class="our_clients_items">
        <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/assets/img/clients/clients-3.png" alt="фотография клиента">
      </div>

      <div class="our_clients_items">
        <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/assets/img/clients/clients-4.png" alt="фотография клиента">
      </div>
      <div class="our_clients_items">
        <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/assets/img/clients/clients-5.png" alt="фотография клиента">
      </div>

    </div>
  </div>
</div>
</section>

<section class="block" id="portfolio">
  <div class="container">
    <h2 class="block_title">посмотрите на наши работы</h2>
    <div class="block_descr">
      Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты. Жаренные по всей ее, она даль текста предупреждал всеми страну! Дороге взгляд там приставка щеке продолжил наш коварный деревни если она над моей мир правилами вопроса рукопись, необходимыми строчка злых назад силуэт диких грустный журчит они грамматики заглавных? Вскоре она эта, свой заглавных точках парадигматическая толку, вопроса, рекламных коварный взобравшись диких.
    </div>
    <div class="row">
      <div class="our_portfolio_wrap" id="our_portfolio_wrap">

        <a  href="<?php bloginfo('template_url'); ?>/assets/img/portfolio/portfolio-1.jpg" class="our_portfolio_items">
         <img src="<?php bloginfo('template_url'); ?>/assets/img/portfolio/portfolio-1.jpg" alt="первый фото к портфолио">
       </a>

       <a href="<?php bloginfo('template_url'); ?>/assets/img/portfolio/portfolio-1.jpg" class="our_portfolio_items">
         <img src="<?php bloginfo('template_url'); ?>/assets/img/portfolio/portfolio-1.jpg" alt="первый фото к портфолио">
       </a>

       <a href="<?php bloginfo('template_url'); ?>/assets/img/portfolio/portfolio-1.jpg" class="our_portfolio_items">
         <img src="<?php bloginfo('template_url'); ?>/assets/img/portfolio/portfolio-1.jpg" alt="первый фото к портфолио">
       </a>

       <a href="<?php bloginfo('template_url'); ?>/assets/img/portfolio/portfolio-1.jpg" class="our_portfolio_items">
         <img src="<?php bloginfo('template_url'); ?>/assets/img/portfolio/portfolio-1.jpg" alt="первый фото к портфолио">
       </a>

       <a href="<?php bloginfo('template_url'); ?>/assets/img/portfolio/portfolio-2.jpg" class="our_portfolio_items">
         <img src="<?php bloginfo('template_url'); ?>/assets/img/portfolio/portfolio-2.jpg" alt="первый фото к портфолио">
       </a>

       <a href="<?php bloginfo('template_url'); ?>/assets/img/portfolio/portfolio-2.jpg" class="our_portfolio_items">
         <img src="<?php bloginfo('template_url'); ?>/assets/img/portfolio/portfolio-2.jpg" alt="первый фото к портфолио">
       </a>


       <a href="<?php bloginfo('template_url'); ?>/assets/img/portfolio/portfolio-2.jpg" class="our_portfolio_items">
         <img src="<?php bloginfo('template_url'); ?>/assets/img/portfolio/portfolio-2.jpg" alt="первый фото к портфолио">
       </a>

       <a href="<?php bloginfo('template_url'); ?>/assets/img/portfolio/portfolio-2.jpg" class="our_portfolio_items">
         <img src="<?php bloginfo('template_url'); ?>/assets/img/portfolio/portfolio-2.jpg" alt="первый фото к портфолио">
       </a>

       <a href="<?php bloginfo('template_url'); ?>/assets/img/portfolio/portfolio-3.jpg" class="our_portfolio_items">
         <img src="<?php bloginfo('template_url'); ?>/assets/img/portfolio/portfolio-3.jpg" alt="первый фото к портфолио">
       </a>

       <a href="<?php bloginfo('template_url'); ?>/assets/img/portfolio/portfolio-3.jpg" class="our_portfolio_items">
         <img src="<?php bloginfo('template_url'); ?>/assets/img/portfolio/portfolio-3.jpg" alt="первый фото к портфолио">
       </a>

       <a href="<?php bloginfo('template_url'); ?>/assets/img/portfolio/portfolio-3.jpg" class="our_portfolio_items">
         <img src="<?php bloginfo('template_url'); ?>/assets/img/portfolio/portfolio-3.jpg" alt="первый фото к портфолио">
       </a>

       <a href="<?php bloginfo('template_url'); ?>/assets/img/portfolio/portfolio-3.jpg" class="our_portfolio_items">
         <img src="<?php bloginfo('template_url'); ?>/assets/img/portfolio/portfolio-3.jpg" alt="первый фото к портфолио">
       </a>


     </div>
   </div>
 </div>
</section>


<section class="block our_team_fon" id="adwice">
  <div class="container">
   <h2 class="block_title">отзывы наших клиентов</h2>
   <div class="row">


    <div id="adwise_carousel" class="owl-carousel owl-theme">
      <div class="item">
        <div class="inner-testimonial">

          <div class="adwice_text">Григорий, Москва Григорий, Москва Григорий, Москва Григорий, МоскваГригорий, Григорий, Москва Григорий, Москва Григорий, Москва Григорий, МоскваГригорий, Григорий, Москва Григорий, Москва Григорий, Москва Григорий, МоскваГригорий, Москва Григорий, Москва Григорий, Москва Григорий, Москва Григорий, Москва Григорий, Москва.</div>
          <h3 class="adwice_name">Григорий Бон <span>CEO Моска Паблик лимитед</span></h3>
        </div>
      </div>

      <div class="item">
        <div class="inner-testimonial">

          <div class="adwice_text">Григорий, Москва Григорий, Москва Григорий, Москва Григорий, МоскваГригорий, Григорий, Москва Григорий, Москва Григорий, Москва Григорий, МоскваГригорий, Григорий, Москва Григорий, Москва Григорий, Москва Григорий, МоскваГригорий, Москва Григорий, Москва Григорий, Москва Григорий, Москва Григорий, Москва Григорий, Москва.</div>
          <h3 class="adwice_name">Григорий Бон <span>CEO Моска Паблик лимитед</span></h3>
        </div>
      </div>

      <div class="item">
        <div class="inner-testimonial">

          <div class="adwice_text">Григорий, Москва Григорий, Москва Григорий, Москва Григорий, МоскваГригорий, Григорий, Москва Григорий, Москва Григорий, Москва Григорий, МоскваГригорий, Григорий, Москва Григорий, Москва Григорий, Москва Григорий, МоскваГригорий, Москва Григорий, Москва Григорий, Москва Григорий, Москва Григорий, Москва Григорий, Москва.</div>
          <h3 class="adwice_name">Григорий Бон <span>CEO Моска Паблик лимитед</span></h3>
        </div>
      </div>
    </div>

  </div>
</div>
</section>

<section class="block" id="contacts">
  <div class="container">
    <h2 class="block_title">Напишите нам</h2>
    <div class="block_descr">
      Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты. Жаренные по всей ее, она даль текста предупреждал всеми страну! Дороге взгляд там приставка щеке продолжил наш коварный деревни если она над моей мир правилами вопроса рукопись, необходимыми строчка злых назад силуэт диких грустный журчит они грамматики заглавных?
    </div>
    <div class="row">
      <form class="forms-call">
        <div class="forms-call_items">
          <label for="id_name"> Имя <span>*</span></label>
          <input id="id_name" type="text" name="name" value="">
        </div>
        <div class="forms-call_items">
          <label for="id_email"> E-mail <span>*</span></label>
          <input id="id_email" type="email" name="email" value="">
        </div>

        <div class="forms-call_items">
          <label> Сообщение <span>*</span></label>
          <textarea id="id_message" name="messagesite"></textarea>
        </div>

        <div class="forms-call_buttons">
          <button class="call_buttons" > Сообщение </button>

        </div>

      </form>
    </div>
  </div>
</section>

<?php
get_footer();
?>