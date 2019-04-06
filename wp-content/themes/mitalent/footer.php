    </main>
    <footer class="footer container">
      <div class="footer__top">
        <img src="<?php echo get_theme_mod('mitalent_custom_logo')?>" alt="Logo-company" class="footer__logo">
        <div class="footer__top-right">
          <p class="footer__letter-text">
            <?php echo get_theme_mod('mitalent_custom_letter_text')?>
          </p>
          <i class="far fa-envelope footer__envelope-icon"></i>
        </div>
      </div>
      <div class="footer__bottom">
        <p class="footer__copyright">
          <?php echo get_theme_mod('mitalent_footer_copyright')?>
        </p>
        <?php get_template_part( 'template-parts/social' ); ?>
      </div>
    </footer>
    <?php wp_footer(); ?>
  </body>
</html>