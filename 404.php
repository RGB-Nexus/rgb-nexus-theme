<?php get_header(); ?>

<main id="main" class="site-main">
  <div class="l-container">
    <div class="error404__body">

      <p class="error404__code" aria-hidden="true">404</p>

      <h1 class="error404__title">お探しのページは<br>見つかりませんでした。</h1>

      <p class="error404__lead">ページが移動または削除された可能性があります。</p>

      <div class="error404__actions">
        <a class="btn btn--primary btn--md" href="<?php echo esc_url( home_url('/') ); ?>">
          <span class="btn__text">トップページへ戻る</span>
          <svg class="btn__icon" width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
          </svg>
        </a>
        <a class="btn btn--outline btn--md" href="<?php echo esc_url( home_url('/cases/') ); ?>">
          <span class="btn__text">実績一覧を見る</span>
          <svg class="btn__icon" width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
          </svg>
        </a>
      </div>

    </div>
  </div>
</main>

<?php get_footer(); ?>
