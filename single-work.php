<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

<main id="main" class="site-main">


    <!-- =====================
         1. Hero（下層共通）
         ===================== -->
    <section class="page-hero" aria-labelledby="work-detail-title">

      <div class="rgb-blob-bg" aria-hidden="true">
        <span class="rgb-blob-bg__blob rgb-blob-bg__blob--r"></span>
        <span class="rgb-blob-bg__blob rgb-blob-bg__blob--b"></span>
      </div>

      <div class="l-container">

        <a class="page-hero__back" href="<?php echo esc_url( home_url('/works/') ); ?>">
          <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
          </svg>
          制作実績一覧に戻る
        </a>

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
          <span class="section-eyebrow section-eyebrow--light">WORKS</span>
          <h1 class="page-hero__title" id="work-detail-title"><?php the_title(); ?></h1>
          <?php if ( has_excerpt() ) : ?>
            <div class="page-hero__lead"><?php echo wp_kses_post( get_the_excerpt() ); ?></div>
          <?php endif; ?>
          <?php
          $acf_industry = function_exists( 'get_field' ) ? get_field( 'industry' ) : '';
          $acf_scope    = function_exists( 'get_field' ) ? get_field( 'scope' )    : '';
          if ( $acf_industry || $acf_scope ) :
          ?>
            <div class="page-hero__lead">
              <?php echo esc_html( $acf_industry ); ?>&nbsp;/&nbsp;<?php echo esc_html( $acf_scope ); ?>
            </div>
          <?php endif; ?>
        </div>

      </div>
    </section>


    <!-- =====================
         2. Work Detail Content
         ===================== -->
    <article id="post-<?php the_ID(); ?>" <?php post_class('work-detail'); ?>>


      <!-- =====================
           2-1. メインビジュアル
           ===================== -->
      <section class="work-detail__visual-section">
        <div class="l-container">

          <div class="work-detail__visual-wrap">
            <?php if ( has_post_thumbnail() ) : ?>
              <?php the_post_thumbnail( 'full', [
                'class'  => 'work-detail__visual-img',
                'alt'    => esc_attr( get_the_title() ) . ' スクリーンショット',
                'width'  => '1200',
                'height' => '600',
              ] ); ?>
            <?php else : ?>
              <!-- サムネイル未設定時: ダミービジュアル -->
              <div class="home-works__thumb">
                <div class="home-works__thumb-overlay home-works__thumb-overlay--r" aria-hidden="true"></div>
              </div>
            <?php endif; ?>
          </div>

          <?php
          $acf_site_url = function_exists( 'get_field' ) ? get_field( 'site_url' ) : '';
          if ( $acf_site_url ) :
          ?>
            <div class="work-detail__visual-footer">
              <a class="work-detail__site-link"
                 href="<?php echo esc_url( $acf_site_url ); ?>"
                 target="_blank"
                 rel="noopener noreferrer">
                <span>サイトを見る</span>
                <svg class="work-detail__site-link-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                </svg>
              </a>
            </div>
          <?php endif; ?>

        </div>
      </section>


      <!-- =====================
           2-2. 本文（エディタ入力内容）
           ===================== -->
      <div class="work-detail__section">
        <div class="l-container">
          <div class="work-detail__inner">
            <div class="work-detail__content">
              <?php the_content(); ?>
            </div>
          </div>
        </div>
      </div>
      <?php
      // TODO: ACF フィールドを登録後、以下の構造化セクションを復元・有効化
      // - work-detail__overview-card : 業種 (industry), 対応範囲 (scope repeater)
      // - work-detail__block-card--r : 課題 (challenge)
      // - work-detail__block-card--g : 対応内容 (solution)
      // - work-detail__block-card--b : 工夫したポイント (point)
      // - work-detail__block-card--rgb : 成果 (result)
      ?>


    </article>
    <!-- /work-detail -->


    <!-- =====================
         3. CTA（共通）
         ===================== -->
    <section class="cta-section cta-section--dark" aria-labelledby="work-cta-title">

      <span class="cta-section__topline" aria-hidden="true"></span>

      <div class="rgb-blob-bg" aria-hidden="true">
        <span class="rgb-blob-bg__blob rgb-blob-bg__blob--r"></span>
        <span class="rgb-blob-bg__blob rgb-blob-bg__blob--g"></span>
        <span class="rgb-blob-bg__blob rgb-blob-bg__blob--b"></span>
      </div>

      <div class="l-container">
        <div class="cta-section__inner">

          <div class="cta-section__ornament" aria-hidden="true">
            <span class="cta-section__ornament-line"></span>
            <div class="cta-section__ornament-dots">
              <span class="cta-section__ornament-dot cta-section__ornament-dot--r"></span>
              <span class="cta-section__ornament-dot cta-section__ornament-dot--g"></span>
              <span class="cta-section__ornament-dot cta-section__ornament-dot--b"></span>
            </div>
            <span class="cta-section__ornament-line"></span>
          </div>

          <h2 class="cta-section__title" id="work-cta-title">
            同様の課題をお持ちの方は<br>お気軽にご相談ください
          </h2>

          <p class="cta-section__lead">
            どんな小さなことでも構いません。<br>
            ご予算・スケジュールのご相談も、お気軽にどうぞ。<br>
            <strong class="cta-section__lead-em">初回相談・お見積りは無料です。</strong>
          </p>

          <div class="cta-section__actions">
            <a class="btn btn--white btn--md" href="<?php echo esc_url( home_url('/contact/') ); ?>">
              <span class="btn__text">お問い合わせ</span>
              <svg class="btn__icon" width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
              </svg>
            </a>
          </div>

          <ul class="cta-section__badges" aria-label="サービスの特徴">
            <li class="cta-section__badge">
              <svg class="cta-section__badge-icon" width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
              </svg>
              初回相談無料
            </li>
            <li class="cta-section__badge">
              <svg class="cta-section__badge-icon" width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
              </svg>
              24時間受付
            </li>
            <li class="cta-section__badge">
              <svg class="cta-section__badge-icon" width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
              </svg>
              即日返信
            </li>
          </ul>

        </div>
      </div>
    </section>

</main>

<?php endwhile; ?>

<?php get_footer(); ?>
