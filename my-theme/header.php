<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="robots" content="noindex, nofollow, noarchive">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <header class="header">
    <div class="header__container">
      <nav class="header__nav" id="nav">
        <a href="#about" class="header__link">О месте</a>
        <a href="#menu" class="header__link">Меню</a>
        <a href="#booking" class="header__link header__link--alt">Контакты и бронь</a>
        <div class="header__nav-contacts">
          <a href="tel:+79999999999" class="header__nav-phone">+7 (999) 99-99-99</a>
          <div class="socials">
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
      </nav>
      <a href="<?php echo esc_url(home_url('/')); ?>" class="header__logo">Trattoria</a>
      <div class="header__right">
        <div class="header__socials socials">
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
        <a href="tel:+79999999999" class="header__phone">+7 (999) 99-99-99</a>
        <button class="header__burger burger" id="burger" aria-label="Открыть меню">
          <span class="burger__line"></span>
          <span class="burger__line"></span>
        </button>
      </div>
    </div>
  </header>
