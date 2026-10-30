<?php
/**
 * Template Name: Главная страница (Trattoria)
 * Description: Шаблон главной страницы рестобара с возможностью редактирования контента из админки
 */

get_header(); ?>

  <section class="hero">
    <?php 
      $hero_bg = get_the_post_thumbnail_url(get_the_ID(), 'full');
      if (!$hero_bg) {
          $hero_bg = get_template_directory_uri() . '/assets/hero-bg.jpg';
      }
    ?>
    <img src="<?php echo esc_url($hero_bg); ?>" alt="<?php the_title_attribute(); ?>" class="hero__bg">
    <div class="hero__overlay"></div>
    <div class="hero__inner">
      <div class="hero__left">
        <span class="hero__text">Drink.</span>
        <span class="hero__text">Eat.</span>
        <span class="hero__text hero__text--accent">vibe.</span>
      </div>
      <div class="hero__right">
        <h1 class="hero__title"><?php bloginfo('name'); ?></h1>
        <div class="hero__subtitle">рестобар</div>
      </div>
      <div class="hero__cta-wrap">
        <a href="#booking" class="hero__cta cta-link">
          <span class="cta-link__text">Забронировать стол</span>
          <span class="cta-link__arrow"></span>
        </a>
      </div>
    </div>
  </section>

  <section class="about" id="about">
    <div class="about__top">
      <div class="about__content">
        <h2 class="section-heading about__title">О месте</h2>
        <div class="about__text">
          <?php 
            if (have_posts()) :
              while (have_posts()) : the_post();
                if (get_the_content()) {
                  the_content();
                } else {
                  echo '<p>Уютное пространство в самом центре города, где гастрономические традиции встречаются с современным авторским подходом. Мы создали место для теплых встреч с друзьями, романтических ужинов и семейных праздников. В нашем меню вас ждет палитра изысканных блюд европейской и авторской кухни.</p>';
                }
              endwhile;
            endif;
          ?>
        </div>
      </div>
    </div>
    <div class="about__gallery">
      <div class="about__img-box">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/about-1.jpg'); ?>" alt="Интерьер рестобара 1" class="about__img">
      </div>
      <div class="about__img-box">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/about-2.jpg'); ?>" alt="Интерьер рестобара 2" class="about__img">
      </div>
      <div class="about__img-box about__img-box--flipped">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/about-3.jpg'); ?>" alt="Интерьер рестобара 3" class="about__img">
      </div>
    </div>
  </section>

  <section class="menu" id="menu">
    <div class="menu__container">
      <div class="menu__photo-box">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/menu-feature.jpg'); ?>" alt="Сезонное меню" class="menu__photo">
      </div>
      <div class="menu__content">
        <h2 class="section-heading menu__title">Сезонное меню</h2>
        <div class="menu__lists">
          <div class="menu__group">
            <h3 class="menu__group-title">ЗАКУСКИ</h3>
            <div class="menu__items">
              <div class="menu__row">
                <div class="menu__item-info">
                  <span class="menu__item-title">Тартар из говядины с трюфельным муссом</span>
                  <span class="menu__item-desc">Вырезка прайм, каперсы, лук шалот, крем из черного трюфеля, бриошь</span>
                </div>
                <div class="menu__item-line"></div>
                <span class="menu__item-price">790 ₽</span>
              </div>
              <div class="menu__row">
                <div class="menu__item-info">
                  <span class="menu__item-title">Страчателла с узбекскими томатами и песто</span>
                  <span class="menu__item-desc">Домашний сливочный сыр, базиликовое масло, кедровый орех</span>
                </div>
                <div class="menu__item-line"></div>
                <span class="menu__item-price">790 ₽</span>
              </div>
              <div class="menu__row">
                <div class="menu__item-info">
                  <span class="menu__item-title">Вителло тоннато с каперсами</span>
                  <span class="menu__item-desc">Ростбиф су-вид в тонком соусе из тунца и анчоусов</span>
                </div>
                <div class="menu__item-line"></div>
                <span class="menu__item-price">740 ₽</span>
              </div>
            </div>
          </div>
          <div class="menu__group">
            <h3 class="menu__group-title">САЛАТЫ</h3>
            <div class="menu__items">
              <div class="menu__row">
                <div class="menu__item-info">
                  <span class="menu__item-title">Зеленый салат с авокадо и семенами</span>
                  <span class="menu__item-desc">Микс молодых листьев, спелый хасс, бобы эдамаме, цитрусовый дрессинг</span>
                </div>
                <div class="menu__item-line"></div>
                <span class="menu__item-price">650 ₽</span>
              </div>
              <div class="menu__row">
                <div class="menu__item-info">
                  <span class="menu__item-title">Салат с огурцами и помидорами</span>
                  <span class="menu__item-desc">Микс сочных огурцов и помидоров</span>
                </div>
                <div class="menu__item-line"></div>
                <span class="menu__item-price">350 ₽</span>
              </div>
            </div>
          </div>
        </div>
        <a href="#menu" class="hero__cta cta-link cta-link--compact menu__cta">
          <span class="cta-link__text">Смотреть полное меню</span>
          <span class="cta-link__arrow"></span>
        </a>
      </div>
    </div>
  </section>

  <section class="booking" id="booking">
    <div class="booking__wrapper">
      <div class="booking__contacts">
        <div class="contact-group">
          <span class="contact-group__label">Контакты</span>
          <a href="tel:<?php echo esc_attr(get_theme_mod('trattoria_phone', '+7 (999) 99-99-99')); ?>" class="contact-group__val">
            <?php echo esc_html(get_theme_mod('trattoria_phone', '+7 (999) 99-99-99')); ?>
          </a>
          <div class="contact-group__socials socials">
            <a href="#" class="socials__link socials__link--tg" aria-label="Telegram">
              <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M23.503 5.039L2.818 13.016C1.406 13.583 1.414 14.371 2.559 14.722L7.87 16.379L20.157 8.626C20.738 8.273 21.269 8.463 20.832 8.85L10.877 17.835H10.875L10.877 17.836L10.511 23.31C11.048 23.31 11.285 23.064 11.586 22.773L14.165 20.265L19.531 24.228C20.52 24.773 21.231 24.493 21.477 23.312L24.999 6.713C25.36 5.267 24.447 4.613 23.503 5.039Z" fill="currentColor"/>
              </svg>
            </a>
            <a href="#" class="socials__link socials__link--2gis" aria-label="2ГИС">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="12" cy="12" r="11" fill="currentColor"/>
                <path d="M12 5.5C8.96 5.5 6.5 7.85 6.5 10.75C6.5 14.15 12 18.5 12 18.5C12 18.5 17.5 14.15 17.5 10.75C17.5 7.85 15.04 5.5 12 5.5ZM12 12.75C10.76 12.75 9.75 11.74 9.75 10.5C9.75 9.26 10.76 8.25 12 8.25C13.24 8.25 14.25 9.26 14.25 10.5C14.25 11.74 13.24 12.75 12 12.75Z" fill="#0C0B08"/>
              </svg>
            </a>
          </div>
        </div>
        <div class="contact-group">
          <span class="contact-group__label">Адрес</span>
          <span class="contact-group__val"><?php echo esc_html(get_theme_mod('trattoria_address', 'г. Москва, ул. Большая Дмитровка, 67')); ?></span>
        </div>
        <div class="contact-group">
          <span class="contact-group__label">Режим работы</span>
          <div class="contact-group__schedule">
            <span class="contact-group__val">Вс–Чт: 12:00 — 00:00</span>
            <span class="contact-group__val">Пт–Сб: 12:00 — 02:00</span>
          </div>
        </div>
      </div>
      <div class="booking__image-box">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/hookah-bg.jpg'); ?>" alt="Зона отдыха Trattoria" class="booking__image">
      </div>
      <div class="booking__form-card">
        <h2 class="section-heading booking__title">Бронь стола</h2>
        <form class="booking__form form" id="bookingForm">
          <div class="form__field">
            <input type="text" class="form__input" placeholder="Имя">
          </div>
          <div class="form__field">
            <input type="tel" class="form__input" placeholder="Телефон">
          </div>
          <div class="form__row form__row--cols-2">
            <div class="form__field">
              <input type="text" class="form__input" placeholder="Дата и время">
            </div>
            <div class="form__field">
              <input type="text" class="form__input" placeholder="Количество гостей">
            </div>
          </div>
        </form>
        <button type="submit" form="bookingForm" class="booking__submit">ЗАБРОНИРОВАТЬ СТОЛ</button>
      </div>
    </div>
  </section>

<?php get_footer(); ?>
