  <footer class="footer">
    <div class="footer__container">
      <div class="footer__left">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="footer__logo">Trattoria</a>
        <div class="footer__copy">© <?php echo date('Y'); ?> Trattoria Restobar. Все права защищены.</div>
      </div>
      <nav class="footer__nav">
        <a href="#about" class="footer__nav-link">О МЕСТЕ</a>
        <a href="#menu" class="footer__nav-link">МЕНЮ</a>
        <a href="#booking" class="footer__nav-link">КОНТАКТЫ И БРОНЬ</a>
      </nav>
    </div>
  </footer>
  <div class="proto-modal" id="protoModal" aria-hidden="true" role="dialog">
    <div class="proto-modal__box">
      <p class="proto-modal__text">Не выйдет. Это лишь прототип :(</p>
      <button type="button" class="proto-modal__close" id="protoModalClose">Понятно</button>
    </div>
  </div>
  <?php wp_footer(); ?>
</body>
</html>
