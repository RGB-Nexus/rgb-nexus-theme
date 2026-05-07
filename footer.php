  <!-- =====================
       Footer
       ===================== -->
  <footer class="site-footer">
    <div class="l-container">

      <div class="site-footer__top">
        <a href="<?php echo esc_url( home_url('/') ); ?>" class="logo logo--white">
          <span class="logo__bars" aria-hidden="true">
            <span class="logo__bar logo__bar--r"></span>
            <span class="logo__bar logo__bar--g"></span>
            <span class="logo__bar logo__bar--b"></span>
          </span>
          <span class="logo__text">RGB Nexus</span>
        </a>
        <nav class="site-footer__nav" aria-label="フッターナビゲーション">
          <ul class="site-footer__nav-list">
            <li><a class="site-footer__nav-link" href="<?php echo esc_url( home_url('/service/') ); ?>">サービス</a></li>
            <li><a class="site-footer__nav-link" href="<?php echo esc_url( home_url('/works/') ); ?>">実績</a></li>
            <li><a class="site-footer__nav-link" href="<?php echo esc_url( home_url('/pricing/') ); ?>">料金</a></li>
            <li><a class="site-footer__nav-link" href="<?php echo esc_url( home_url('/company/') ); ?>">会社概要</a></li>
            <li><a class="site-footer__nav-link" href="<?php echo esc_url( home_url('/contact/') ); ?>">お問い合わせ</a></li>
          </ul>
        </nav>
      </div>

      <div class="site-footer__bottom">
        <p class="site-footer__copy">&copy; 2026 RGB Nexus. All rights reserved.</p>
      </div>

    </div>
  </footer>

  <?php wp_footer(); ?>
</body>
</html>