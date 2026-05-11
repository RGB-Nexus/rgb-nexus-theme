<?php get_header(); ?>

<?php while ( have_posts() ) : the_post();

  $work_color       = function_exists('get_field') ? get_field('work_color')       : '';
  $work_category    = function_exists('get_field') ? get_field('work_category')    : '';
  $work_meta        = function_exists('get_field') ? get_field('work_meta')        : '';
  $project_url      = function_exists('get_field') ? get_field('project_url')      : '';
  $project_scope    = function_exists('get_field') ? get_field('project_scope')    : [];
  $project_problem  = function_exists('get_field') ? get_field('project_problem')  : '';
  $project_solution = function_exists('get_field') ? get_field('project_solution') : '';
  $project_points   = function_exists('get_field') ? get_field('project_points')   : '';
  $project_result   = function_exists('get_field') ? get_field('project_result')   : '';
  $client_name      = function_exists('get_field') ? get_field('client_name')      : '';

  $color_map = [ 'red' => 'r', 'green' => 'g', 'blue' => 'b' ];
  $color_key = isset( $color_map[ $work_color ] ) ? $color_map[ $work_color ] : 'b';

?>

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

        <a class="page-hero__back" href="<?php echo esc_url( home_url('/cases/') ); ?>">
          <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
          </svg>
          支援実績一覧に戻る
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
          <span class="section-eyebrow section-eyebrow--light">CASE STUDIES</span>
          <h1 class="page-hero__title" id="work-detail-title"><?php the_title(); ?></h1>
          <?php if ( $work_meta ) : ?>
            <p class="page-hero__lead"><?php echo esc_html( $work_meta ); ?></p>
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
              <div class="home-works__thumb">
                <div class="home-works__thumb-overlay home-works__thumb-overlay--<?php echo esc_attr( $color_key ); ?>" aria-hidden="true"></div>
              </div>
            <?php endif; ?>
          </div>

          <?php if ( $project_url ) : ?>
            <div class="work-detail__visual-footer">
              <a class="work-detail__site-link"
                 href="<?php echo esc_url( $project_url ); ?>"
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
      $has_overview = $client_name || $work_category || ( is_array( $project_scope ) && ! empty( $project_scope ) );
      if ( $has_overview ) : ?>
      <section class="work-detail__section work-detail__section--gray">
        <div class="l-container">
          <div class="work-detail__inner">
            <div class="work-detail__overview-card">
              <h2 class="work-detail__overview-title">プロジェクト概要</h2>
              <div class="work-detail__overview-list">

                <?php if ( $client_name ) : ?>
                <div class="work-detail__overview-row">
                  <span class="work-detail__overview-label">クライアント</span>
                  <span class="work-detail__overview-value"><?php echo esc_html( $client_name ); ?></span>
                </div>
                <?php endif; ?>

                <?php if ( $work_category ) : ?>
                <div class="work-detail__overview-row">
                  <span class="work-detail__overview-label">業種</span>
                  <span class="work-detail__overview-value"><?php echo esc_html( $work_category ); ?></span>
                </div>
                <?php endif; ?>

                <?php if ( is_array( $project_scope ) && ! empty( $project_scope ) ) : ?>
                <div class="work-detail__overview-row">
                  <span class="work-detail__overview-label">対応範囲</span>
                  <div class="work-detail__scope-tags">
                    <?php foreach ( $project_scope as $scope_item ) : ?>
                      <span class="work-detail__scope-tag"><?php echo esc_html( $scope_item ); ?></span>
                    <?php endforeach; ?>
                  </div>
                </div>
                <?php endif; ?>

              </div>
            </div>
          </div>
        </div>
      </section>
      <?php endif; ?>

      <?php if ( $project_problem ) : ?>
      <section class="work-detail__section">
        <div class="l-container">
          <div class="work-detail__inner">
            <div class="work-detail__block-card work-detail__block-card--r">
              <div class="work-detail__block-heading">
                <div class="work-detail__block-icon work-detail__block-icon--r" aria-hidden="true">
                  <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                  </svg>
                </div>
                <h2 class="work-detail__block-title">課題</h2>
              </div>
              <p class="work-detail__block-body"><?php echo nl2br( esc_html( $project_problem ) ); ?></p>
            </div>
          </div>
        </div>
      </section>
      <?php endif; ?>

      <?php if ( $project_solution ) : ?>
      <section class="work-detail__section work-detail__section--gray">
        <div class="l-container">
          <div class="work-detail__inner">
            <div class="work-detail__block-card work-detail__block-card--g">
              <div class="work-detail__block-heading">
                <div class="work-detail__block-icon work-detail__block-icon--g" aria-hidden="true">
                  <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                  </svg>
                </div>
                <h2 class="work-detail__block-title">対応内容</h2>
              </div>
              <p class="work-detail__block-body"><?php echo nl2br( esc_html( $project_solution ) ); ?></p>
            </div>
          </div>
        </div>
      </section>
      <?php endif; ?>

      <?php if ( $project_points ) : ?>
      <section class="work-detail__section">
        <div class="l-container">
          <div class="work-detail__inner">
            <div class="work-detail__block-card work-detail__block-card--b">
              <div class="work-detail__block-heading">
                <div class="work-detail__block-icon work-detail__block-icon--b" aria-hidden="true">
                  <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                  </svg>
                </div>
                <h2 class="work-detail__block-title">工夫したポイント</h2>
              </div>
              <p class="work-detail__block-body"><?php echo nl2br( esc_html( $project_points ) ); ?></p>
            </div>
          </div>
        </div>
      </section>
      <?php endif; ?>

      <?php if ( $project_result ) : ?>
      <section class="work-detail__section work-detail__section--gray">
        <div class="l-container">
          <div class="work-detail__inner">
            <div class="work-detail__block-card work-detail__block-card--rgb">
              <div class="work-detail__block-heading">
                <div class="work-detail__block-icon work-detail__block-icon--rgb" aria-hidden="true">
                  <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
                  </svg>
                </div>
                <h2 class="work-detail__block-title">成果</h2>
              </div>
              <p class="work-detail__block-body"><?php echo nl2br( esc_html( $project_result ) ); ?></p>
            </div>
          </div>
        </div>
      </section>
      <?php endif; ?>

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
