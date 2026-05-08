<?php get_header(); ?>

<main id="main" class="site-main">


    <!-- =====================
         1. Hero（下層共通）
         ===================== -->
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
          <span class="section-eyebrow section-eyebrow--light">WORKS</span>
          <h1 class="page-hero__title" id="page-hero-title">制作実績</h1>
          <p class="page-hero__lead">
            これまでに手がけた様々な業種のWEB制作実績をご紹介します。<br>
            お客様の課題に寄り添い、最適なソリューションを提供してきました。
          </p>
        </div>
      </div>
    </section>


    <!-- =====================
         2. Works Archive（実績一覧）
         ===================== -->
    <section class="l-section l-section--gray works-archive" aria-label="制作実績一覧">
      <div class="l-container">

        <?php if ( have_posts() ) : ?>

          <ul class="l-grid-3 works-archive__grid" role="list">

            <?php
            $color_map = [ 'red' => 'r', 'green' => 'g', 'blue' => 'b' ];

            while ( have_posts() ) : the_post();
              $work_color    = function_exists('get_field') ? get_field('work_color')    : '';
              $work_category = function_exists('get_field') ? get_field('work_category') : '';
              $color_key     = isset( $color_map[ $work_color ] ) ? $color_map[ $work_color ] : 'b';
            ?>

            <li class="works-archive__item">
              <article class="works-archive__article">
                <a class="home-works__card" href="<?php the_permalink(); ?>">

                  <div class="home-works__thumb">
                    <?php if ( has_post_thumbnail() ) : ?>
                      <?php the_post_thumbnail( 'large', [
                        'class'   => 'works-archive__thumb-img',
                        'loading' => 'lazy',
                      ] ); ?>
                    <?php endif; ?>
                    <div class="home-works__thumb-overlay home-works__thumb-overlay--<?php echo esc_attr( $color_key ); ?>" aria-hidden="true"></div>
                  </div>

                  <div class="home-works__body">
                    <?php if ( $work_category ) : ?>
                      <span class="home-works__badge home-works__badge--<?php echo esc_attr( $color_key ); ?>"><?php echo esc_html( $work_category ); ?></span>
                    <?php endif; ?>
                    <h3 class="home-works__title"><?php the_title(); ?></h3>
                    <p class="home-works__desc"><?php the_excerpt(); ?></p>
                  </div>

                </a>
              </article>
            </li>

            <?php endwhile; ?>

          </ul>


          <!-- ページネーション -->
          <?php
          $pagination = paginate_links( [
            'prev_text' => '前へ',
            'next_text' => '次へ',
            'type'      => 'array',
          ] );

          if ( $pagination ) : ?>
          <nav class="works-archive__pager" aria-label="ページ送り">
            <?php foreach ( $pagination as $page ) : ?>
              <?php echo $page; ?>
            <?php endforeach; ?>
          </nav>
          <?php endif; ?>

        <?php else : ?>

          <p class="works-archive__empty">実績はまだ登録されていません。</p>

        <?php endif; ?>

      </div>
    </section>


    <!-- =====================
         3. CTA（共通）
         ===================== -->
    <section class="cta-section cta-section--dark" aria-labelledby="works-cta-title">

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

          <h2 class="cta-section__title" id="works-cta-title">
            まずはお気軽に<br>ご相談ください
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

<?php get_footer(); ?>
