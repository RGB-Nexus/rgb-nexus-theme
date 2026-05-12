<?php
/*
Template Name: Contact
*/
get_header();
?>

<main id="main" class="site-main">

    <!-- Hero -->
    <section class="page-hero" aria-labelledby="page-hero-title">
      <div class="rgb-blob-bg" aria-hidden="true">
        <span class="rgb-blob-bg__blob rgb-blob-bg__blob--r"></span>
        <span class="rgb-blob-bg__blob rgb-blob-bg__blob--b"></span>
      </div>
      <div class="l-container">
        <div class="page-hero__inner">
          <div class="page-hero__rgb-deco" aria-hidden="true">
            <span class="page-hero__deco-line"></span>
            <div class="rgb-dots">
              <span class="rgb-dots__dot rgb-dots__dot--r"></span>
              <span class="rgb-dots__dot rgb-dots__dot--g"></span>
              <span class="rgb-dots__dot rgb-dots__dot--b"></span>
            </div>
            <span class="page-hero__deco-line"></span>
          </div>
          <span class="section-eyebrow section-eyebrow--light">CONTACT</span>
          <h1 class="page-hero__title" id="page-hero-title">お問い合わせ</h1>
          <p class="page-hero__lead">ざっくりしたご相談でも大丈夫です。<br>まずは気軽にお問い合わせください。</p>
        </div>
      </div>
    </section>

    <!-- Features -->
    <section class="contact-features l-section" aria-label="サービスの特徴">
      <div class="l-container">
        <ul class="contact-features__list">

          <li class="feature-card feature-card--r">
            <span class="feature-card__icon-wrap feature-card__icon-wrap--r" aria-hidden="true">
              <svg class="feature-card__icon" width="24" height="24" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
              </svg>
            </span>
            <h3 class="feature-card__title">無料相談</h3>
            <p class="feature-card__desc">初回相談は無料で対応しています</p>
          </li>

          <li class="feature-card feature-card--g">
            <span class="feature-card__icon-wrap feature-card__icon-wrap--g" aria-hidden="true">
              <svg class="feature-card__icon" width="24" height="24" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"/>
              </svg>
            </span>
            <h3 class="feature-card__title">無理な営業なし</h3>
            <p class="feature-card__desc">無理な営業は一切行いません</p>
          </li>

          <li class="feature-card feature-card--b">
            <span class="feature-card__icon-wrap feature-card__icon-wrap--b" aria-hidden="true">
              <svg class="feature-card__icon" width="24" height="24" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"/>
              </svg>
            </span>
            <h3 class="feature-card__title">小規模案件も対応</h3>
            <p class="feature-card__desc">小規模なご相談も歓迎しています</p>
          </li>

        </ul>
      </div>
    </section>

    <!-- Form -->
    <section class="contact-form-section l-section" aria-label="お問い合わせフォーム">
      <div class="l-container">
        <div class="contact-form-section__card">
          <?php // 本番移行後、Contact Form 7 のフォームIDが一致しているか確認すること。 ?>
          <?php echo do_shortcode('[contact-form-7 id="dd0c95c" title="問い合わせフォーム"]'); ?>
        </div>
      </div>
    </section>

    <!-- Notes -->
    <section class="contact-notes l-section l-section--gray" aria-label="お問い合わせに関する注意事項">
      <div class="l-container">
        <div class="contact-notes__card">
          <h3 class="contact-notes__title">
            <svg class="contact-notes__title-icon" width="24" height="24" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
            </svg>
            お問い合わせについて
          </h3>
          <ul class="contact-notes__list">
            <li class="contact-notes__item">内容を確認後、順次ご返信いたします</li>
            <li class="contact-notes__item">内容によっては返信までお時間をいただく場合があります</li>
            <li class="contact-notes__item">メールが届かない場合は、入力内容をご確認のうえ再度お問い合わせください</li>
          </ul>
        </div>
      </div>
    </section>

</main>

<?php get_footer(); ?>
