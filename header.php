<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="preload" href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500&display=swap"></noscript>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

  <!-- =====================
       Header
       ===================== -->
  <header class="site-header" id="site-header">
    <div class="l-container site-header__inner">

      <a href="<?php echo esc_url( home_url('/') ); ?>" class="logo site-header__logo">
        <span class="logo__bars" aria-hidden="true">
          <span class="logo__bar logo__bar--r"></span>
          <span class="logo__bar logo__bar--g"></span>
          <span class="logo__bar logo__bar--b"></span>
        </span>
        <span class="logo__text">RGB Nexus</span>
      </a>

      <nav class="site-nav site-header__nav"
           id="site-nav"
           aria-label="グローバルナビゲーション">
        <ul class="site-nav__list">
          <li class="site-nav__item">
            <a class="site-nav__link" href="<?php echo esc_url( home_url('/service/') ); ?>">サービス</a>
          </li>
          <li class="site-nav__item">
            <a class="site-nav__link" href="<?php echo esc_url( home_url('/cases/') ); ?>">支援実績</a>
          </li>
          <li class="site-nav__item">
            <a class="site-nav__link" href="<?php echo esc_url( home_url('/pricing/') ); ?>">料金</a>
          </li>
          <li class="site-nav__item">
            <a class="site-nav__link" href="<?php echo esc_url( home_url('/company/') ); ?>">会社概要</a>
          </li>
          <li class="site-nav__item site-nav__item--cta">
            <a class="btn btn--sm btn--dark" href="<?php echo esc_url( home_url('/contact/') ); ?>">お問い合わせ</a>
          </li>
        </ul>
      </nav>

      <button class="hamburger site-header__hamburger"
              id="menu-toggle"
              aria-controls="site-nav"
              aria-expanded="false"
              aria-label="メニューを開く">
        <span class="hamburger__line"></span>
        <span class="hamburger__line"></span>
        <span class="hamburger__line"></span>
      </button>

    </div>
  </header>
