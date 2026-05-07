<?php get_header(); ?>
<!-- =====================
       Main
       ===================== -->
  <main id="main" class="site-main">

    <!-- =====================
         1. Hero（TOP専用）
         ===================== -->
    <section class="home-hero" aria-labelledby="home-hero-title">

      <!-- 多層RGB装飾背景 -->
      <div class="home-hero__bg" aria-hidden="true">

        <div class="home-hero__blobs">
          <div class="home-hero__blob home-hero__blob--r"></div>
          <div class="home-hero__blob home-hero__blob--g"></div>
          <div class="home-hero__blob home-hero__blob--b"></div>
        </div>

        <div class="home-hero__rings">
          <div class="home-hero__ring home-hero__ring--outer"></div>
          <div class="home-hero__ring home-hero__ring--mid"></div>
          <div class="home-hero__ring home-hero__ring--inner"></div>
        </div>

        <div class="home-hero__rays">
          <div class="home-hero__ray home-hero__ray--r"></div>
          <div class="home-hero__ray home-hero__ray--g"></div>
          <div class="home-hero__ray home-hero__ray--b"></div>
        </div>

      </div>

      <div class="l-container">
        <div class="home-hero__inner">

          <!-- アイブロウ: ライン + ドット + ライン -->
          <div class="home-hero__eyebrow" aria-hidden="true">
            <span class="home-hero__eyebrow-rule home-hero__eyebrow-rule--l"></span>
            <div class="rgb-dots">
              <span class="rgb-dots__dot rgb-dots__dot--r"></span>
              <span class="rgb-dots__dot rgb-dots__dot--g"></span>
              <span class="rgb-dots__dot rgb-dots__dot--b"></span>
            </div>
            <span class="home-hero__eyebrow-rule home-hero__eyebrow-rule--r"></span>
          </div>

          <!-- キャッチコピー -->
          <h1 class="home-hero__title" id="home-hero-title">
            作って終わりにしない<br>
            <span class="home-hero__title-accent">WEB制作。</span>
          </h1>

          <!-- サブコピー -->
          <p class="home-hero__lead">相談から制作、公開後の運用まで伴走します。</p>

          <!-- RGBビジュアル: フェーズ + サポートテキスト -->
          <div class="home-hero__visual">

            <!-- 3フェーズ（flex row）+ 接続ライン -->
            <div class="home-hero__phases">

              <!-- PC: フェーズ間の接続ライン（lg のみ） -->
              <div class="home-hero__connections" aria-hidden="true">
                <div class="home-hero__connection home-hero__connection--rg"></div>
                <div class="home-hero__connection home-hero__connection--gb"></div>
              </div>

              <!-- 企画（R） -->
              <div class="home-hero__phase">
                <div class="home-hero__phase-glow home-hero__phase-glow--r" aria-hidden="true"></div>
                <div class="home-hero__phase-static-ring home-hero__phase-static-ring--r" aria-hidden="true"></div>
                <div class="home-hero__phase-body">
                  <div class="home-hero__phase-outer-glow home-hero__phase-outer-glow--r" aria-hidden="true"></div>
                  <div class="home-hero__phase-circle home-hero__phase-circle--r">
                    <div class="home-hero__phase-circle-blur home-hero__phase-circle-blur--1" aria-hidden="true"></div>
                    <div class="home-hero__phase-circle-blur home-hero__phase-circle-blur--2" aria-hidden="true"></div>
                    <div class="home-hero__phase-circle-ring" aria-hidden="true"></div>
                    <svg width="28" height="28" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                    </svg>
                  </div>
                </div>
                <div class="home-hero__phase-label">
                  <span class="home-hero__phase-name">企画</span>
                  <span class="home-hero__phase-en">Planning</span>
                </div>
              </div>

              <!-- 制作（G） -->
              <div class="home-hero__phase">
                <div class="home-hero__phase-glow home-hero__phase-glow--g" aria-hidden="true"></div>
                <div class="home-hero__phase-static-ring home-hero__phase-static-ring--g" aria-hidden="true"></div>
                <div class="home-hero__phase-body">
                  <div class="home-hero__phase-outer-glow home-hero__phase-outer-glow--g" aria-hidden="true"></div>
                  <div class="home-hero__phase-circle home-hero__phase-circle--g">
                    <div class="home-hero__phase-circle-blur home-hero__phase-circle-blur--1" aria-hidden="true"></div>
                    <div class="home-hero__phase-circle-blur home-hero__phase-circle-blur--2" aria-hidden="true"></div>
                    <div class="home-hero__phase-circle-ring" aria-hidden="true"></div>
                    <svg width="28" height="28" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                    </svg>
                  </div>
                </div>
                <div class="home-hero__phase-label">
                  <span class="home-hero__phase-name">制作</span>
                  <span class="home-hero__phase-en">Development</span>
                </div>
              </div>

              <!-- 運用（B） -->
              <div class="home-hero__phase">
                <div class="home-hero__phase-glow home-hero__phase-glow--b" aria-hidden="true"></div>
                <div class="home-hero__phase-static-ring home-hero__phase-static-ring--b" aria-hidden="true"></div>
                <div class="home-hero__phase-body">
                  <div class="home-hero__phase-outer-glow home-hero__phase-outer-glow--b" aria-hidden="true"></div>
                  <div class="home-hero__phase-circle home-hero__phase-circle--b">
                    <div class="home-hero__phase-circle-blur home-hero__phase-circle-blur--1" aria-hidden="true"></div>
                    <div class="home-hero__phase-circle-blur home-hero__phase-circle-blur--2" aria-hidden="true"></div>
                    <div class="home-hero__phase-circle-ring" aria-hidden="true"></div>
                    <svg width="28" height="28" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/>
                    </svg>
                  </div>
                </div>
                <div class="home-hero__phase-label">
                  <span class="home-hero__phase-name">運用</span>
                  <span class="home-hero__phase-en">Operation</span>
                </div>
              </div>

            </div><!-- /.home-hero__phases -->

            <!-- フェーズ説明テキスト（visual内 / Figma構造に準拠） -->
            <div class="home-hero__support">
              <div class="home-hero__support-line">
                <span class="home-hero__support-rule"></span>
                <span class="home-hero__support-text">3つのフェーズを一貫してサポート</span>
                <span class="home-hero__support-rule"></span>
              </div>
              <p class="home-hero__support-desc">企画から運用まで、ひとつのチームが責任を持って伴走します</p>
            </div>

          </div><!-- /.home-hero__visual -->

          <!-- CTAボタン -->
          <div class="home-hero__actions">
            <a class="btn btn--primary btn--md" href="<?php echo esc_url( home_url('/contact/') ); ?>">
              <span class="btn__text">お問い合わせ</span>
              <svg class="btn__icon" width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
              </svg>
            </a>
            <p class="home-hero__action-note">初回相談無料・24時間受付</p>
          </div>

        </div>
      </div>
    </section>


    <!-- =====================
         2. Problem（課題提起）
         ===================== -->
    <section class="l-section l-section--gray" aria-labelledby="problem-title">
      <div class="l-container">

        <div class="section-heading section-heading--center">
          <span class="section-eyebrow section-eyebrow--light">PROBLEM</span>
          <h2 class="section-heading__title" id="problem-title">
            こんなお悩みはありませんか？
          </h2>
          <p class="section-heading__lead">
            WEB制作でよくあるお困りごと
          </p>
        </div>

        <ul class="problem-list l-grid-2" role="list">

          <li class="problem-item problem-item--r">
            <div class="problem-item__deco" aria-hidden="true"></div>
            <div class="problem-item__inner">
              <span class="problem-item__icon-wrap problem-item__icon-wrap--r" aria-hidden="true">
                <svg width="24" height="24" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                </svg>
              </span>
              <p class="problem-item__text">大手は敷居が高く、費用感もわからない。まず話を聞いてほしいだけなのに。</p>
            </div>
          </li>

          <li class="problem-item problem-item--g">
            <div class="problem-item__deco" aria-hidden="true"></div>
            <div class="problem-item__inner">
              <span class="problem-item__icon-wrap problem-item__icon-wrap--g" aria-hidden="true">
                <svg width="24" height="24" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
              </span>
              <p class="problem-item__text">小規模案件は対応してもらえないことが多い。低予算でも質の良いサイトが欲しい。</p>
            </div>
          </li>

          <li class="problem-item problem-item--b">
            <div class="problem-item__deco" aria-hidden="true"></div>
            <div class="problem-item__inner">
              <span class="problem-item__icon-wrap problem-item__icon-wrap--b" aria-hidden="true">
                <svg width="24" height="24" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
              </span>
              <p class="problem-item__text">いつ完成するかわからず、事業計画に影響が出てしまっている。</p>
            </div>
          </li>

          <li class="problem-item problem-item--gray">
            <div class="problem-item__deco" aria-hidden="true"></div>
            <div class="problem-item__inner">
              <span class="problem-item__icon-wrap problem-item__icon-wrap--gray" aria-hidden="true">
                <svg width="24" height="24" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z"/>
                </svg>
              </span>
              <p class="problem-item__text">作ってみたらイメージと全然違う。コミュニケーションの取り方がわからない。</p>
            </div>
          </li>

        </ul>
      </div>
    </section>


    <!-- =====================
         3. Solution（解決）
         ===================== -->
    <section class="l-section" aria-labelledby="solution-title">
      <div class="l-container">

        <div class="section-heading section-heading--center">
          <span class="section-eyebrow section-eyebrow--rgb">SOLUTION</span>
          <h2 class="section-heading__title" id="solution-title">
            一貫対応で、すべて解決できます
          </h2>
          <p class="section-heading__lead">
            RGB Nexusは、ヒアリングから企画・制作・公開・運用まで、Webサイトに関わるすべてのフェーズをワンストップでサポートします。<br>
            <strong>Webに詳しくない方でも安心してお任せいただけます。</strong>
          </p>
        </div>

        <div class="solution-flow">
          <div class="solution-flow__inner">

            <div class="solution-flow__steps">

              <!-- Step 1: 相談・企画 (Red) -->
              <div class="solution-flow__step">
                <div class="solution-flow__step-icon-wrap">
                  <span class="solution-flow__step-glow solution-flow__step-glow--r" aria-hidden="true"></span>
                  <div class="solution-flow__step-icon-box solution-flow__step-icon-box--r">
                    <svg class="solution-flow__step-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"/>
                    </svg>
                  </div>
                </div>
                <div class="solution-flow__step-text">
                  <p class="solution-flow__step-label">相談・企画</p>
                  <p class="solution-flow__step-desc">ヒアリング<br>要件定義</p>
                </div>
              </div>

              <!-- Arrow R→G -->
              <div class="solution-flow__arrow" aria-hidden="true">
                <span class="solution-flow__arrow-line solution-flow__arrow-line--rg"></span>
                <svg width="24" height="24" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                </svg>
              </div>

              <!-- Step 2: 制作 (Green) -->
              <div class="solution-flow__step">
                <div class="solution-flow__step-icon-wrap">
                  <span class="solution-flow__step-glow solution-flow__step-glow--g" aria-hidden="true"></span>
                  <div class="solution-flow__step-icon-box solution-flow__step-icon-box--g">
                    <svg class="solution-flow__step-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/>
                    </svg>
                  </div>
                </div>
                <div class="solution-flow__step-text">
                  <p class="solution-flow__step-label">制作</p>
                  <p class="solution-flow__step-desc">デザイン<br>開発・実装</p>
                </div>
              </div>

              <!-- Arrow G→B -->
              <div class="solution-flow__arrow" aria-hidden="true">
                <span class="solution-flow__arrow-line solution-flow__arrow-line--gb"></span>
                <svg width="24" height="24" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                </svg>
              </div>

              <!-- Step 3: 運用 (Blue) -->
              <div class="solution-flow__step">
                <div class="solution-flow__step-icon-wrap">
                  <span class="solution-flow__step-glow solution-flow__step-glow--b" aria-hidden="true"></span>
                  <div class="solution-flow__step-icon-box solution-flow__step-icon-box--b">
                    <svg class="solution-flow__step-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                    </svg>
                  </div>
                </div>
                <div class="solution-flow__step-text">
                  <p class="solution-flow__step-label">運用</p>
                  <p class="solution-flow__step-desc">保守<br>改善サポート</p>
                </div>
              </div>

            </div>

            <div class="solution-flow__note">
              <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/>
              </svg>
              <span>継続的な改善サイクルで、サイトを成長させます</span>
            </div>

          </div>
        </div>

      </div>
    </section>


    <!-- =====================
         4. Strength（強み）
         ===================== -->
    <section class="l-section l-section--gray home-strength" aria-labelledby="strength-title">
      <div class="l-container">

        <div class="section-heading section-heading--center">
          <span class="section-eyebrow section-eyebrow--light">STRENGTH</span>
          <h2 class="section-heading__title" id="strength-title">RGB Nexusの強み</h2>
          <p class="section-heading__lead">選ばれる3つの理由</p>
        </div>

        <ul class="home-strength__list l-grid-3" role="list">

          <!-- Card 01: 一貫対応 (Red) -->
          <li class="home-strength__card-group">
            <div class="home-strength__card-glow home-strength__card-glow--r" aria-hidden="true"></div>
            <div class="home-strength__card home-strength__card--r">

              <div class="home-strength__card-top">
                <div class="home-strength__card-icon home-strength__card-icon--r" aria-hidden="true">
                  <svg width="36" height="36" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                  </svg>
                </div>
                <div class="home-strength__card-num-row">
                  <span class="home-strength__card-num-line home-strength__card-num-line--r" aria-hidden="true"></span>
                  <span class="home-strength__card-num home-strength__card-num--r">01</span>
                </div>
                <h3 class="home-strength__card-title">一貫対応</h3>
              </div>

              <p class="home-strength__card-desc">企画から運用まで、一つの窓口で対応。複数の会社とやりとりする手間がありません。</p>

              <ul class="home-strength__card-bullets" role="list">
                <li class="home-strength__card-bullet">
                  <span class="home-strength__card-bullet-dot home-strength__card-bullet-dot--r" aria-hidden="true"></span>
                  ワンストップサービス
                </li>
                <li class="home-strength__card-bullet">
                  <span class="home-strength__card-bullet-dot home-strength__card-bullet-dot--r" aria-hidden="true"></span>
                  スムーズな進行管理
                </li>
              </ul>

            </div>
          </li>

          <!-- Card 02: 運用サポート (Green) -->
          <li class="home-strength__card-group">
            <div class="home-strength__card-glow home-strength__card-glow--g" aria-hidden="true"></div>
            <div class="home-strength__card home-strength__card--g">

              <div class="home-strength__card-top">
                <div class="home-strength__card-icon home-strength__card-icon--g" aria-hidden="true">
                  <svg width="36" height="36" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7"/>
                  </svg>
                </div>
                <div class="home-strength__card-num-row">
                  <span class="home-strength__card-num-line home-strength__card-num-line--g" aria-hidden="true"></span>
                  <span class="home-strength__card-num home-strength__card-num--g">02</span>
                </div>
                <h3 class="home-strength__card-title">運用サポート</h3>
              </div>

              <p class="home-strength__card-desc">公開後も更新・改善を継続サポート。サイトを育てていくパートナーとして伴走します。</p>

              <ul class="home-strength__card-bullets" role="list">
                <li class="home-strength__card-bullet">
                  <span class="home-strength__card-bullet-dot home-strength__card-bullet-dot--g" aria-hidden="true"></span>
                  継続的な改善提案
                </li>
                <li class="home-strength__card-bullet">
                  <span class="home-strength__card-bullet-dot home-strength__card-bullet-dot--g" aria-hidden="true"></span>
                  迅速なサポート体制
                </li>
              </ul>

            </div>
          </li>

          <!-- Card 03: 明確な料金設計 (Blue) -->
          <li class="home-strength__card-group">
            <div class="home-strength__card-glow home-strength__card-glow--b" aria-hidden="true"></div>
            <div class="home-strength__card home-strength__card--b">

              <div class="home-strength__card-top">
                <div class="home-strength__card-icon home-strength__card-icon--b" aria-hidden="true">
                  <svg width="36" height="36" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                  </svg>
                </div>
                <div class="home-strength__card-num-row">
                  <span class="home-strength__card-num-line home-strength__card-num-line--b" aria-hidden="true"></span>
                  <span class="home-strength__card-num home-strength__card-num--b">03</span>
                </div>
                <h3 class="home-strength__card-title">明確な料金設計</h3>
              </div>

              <p class="home-strength__card-desc">予算に合わせた柔軟なプラン設計。必要な機能だけを提案し、無駄なコストを削減します。</p>

              <ul class="home-strength__card-bullets" role="list">
                <li class="home-strength__card-bullet">
                  <span class="home-strength__card-bullet-dot home-strength__card-bullet-dot--b" aria-hidden="true"></span>
                  透明性の高い見積もり
                </li>
                <li class="home-strength__card-bullet">
                  <span class="home-strength__card-bullet-dot home-strength__card-bullet-dot--b" aria-hidden="true"></span>
                  柔軟なプラン提案
                </li>
              </ul>

            </div>
          </li>

        </ul>
      </div>
    </section>


    <!-- =====================
         5. Service（サービス紹介）
         ===================== -->
    <section class="l-section home-service" aria-labelledby="service-title">
      <div class="l-container">

        <div class="section-heading section-heading--center">
          <span class="section-eyebrow section-eyebrow--gray">SERVICE</span>
          <h2 class="section-heading__title" id="service-title">サービス</h2>
          <p class="section-heading__lead">目的に合わせた最適なWEB制作</p>
        </div>

        <div class="home-service__layout">

          <!-- Main Service: コーポレートサイト制作 -->
          <div class="home-service__main-card">
            <div class="home-service__main-inner">

              <!-- RGB Bars アイコン -->
              <div class="home-service__main-logo" aria-hidden="true">
                <span class="home-service__main-logo-bar home-service__main-logo-bar--r"></span>
                <span class="home-service__main-logo-bar home-service__main-logo-bar--g"></span>
                <span class="home-service__main-logo-bar home-service__main-logo-bar--b"></span>
              </div>

              <!-- Body -->
              <div class="home-service__main-body">

                <div class="home-service__main-head">
                  <h3 class="home-service__main-title">コーポレートサイト制作</h3>
                  <span class="home-service__main-badge">MAIN SERVICE</span>
                </div>

                <p class="home-service__main-desc">
                  企業の信頼性を高めるコーポレートサイトを制作。お客様の想いをカタチにし、ターゲットに届くサイトを設計します。
                </p>

                <ul class="home-service__main-features" role="list">
                  <li class="home-service__main-feature">
                    <svg class="home-service__main-feature-check home-service__main-feature-check--r" width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                    </svg>
                    <div>
                      <p class="home-service__main-feature-title">ヒアリング・企画設計</p>
                      <p class="home-service__main-feature-sub">要件定義から設計まで</p>
                    </div>
                  </li>
                  <li class="home-service__main-feature">
                    <svg class="home-service__main-feature-check home-service__main-feature-check--g" width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                    </svg>
                    <div>
                      <p class="home-service__main-feature-title">デザイン・コーディング</p>
                      <p class="home-service__main-feature-sub">UI/UX設計と実装</p>
                    </div>
                  </li>
                  <li class="home-service__main-feature">
                    <svg class="home-service__main-feature-check home-service__main-feature-check--b" width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                    </svg>
                    <div>
                      <p class="home-service__main-feature-title">CMS構築・保守運用</p>
                      <p class="home-service__main-feature-sub">更新しやすい仕組み</p>
                    </div>
                  </li>
                </ul>

              </div>
            </div>
          </div>

          <!-- Sub Services: LP + バナー -->
          <div class="home-service__subs">

            <!-- ランディングページ制作 (Green) -->
            <div class="home-service__sub-card home-service__sub-card--g">
              <span class="home-service__sub-deco home-service__sub-deco--g" aria-hidden="true"></span>
              <div class="home-service__sub-icon home-service__sub-icon--g" aria-hidden="true">
                <svg width="28" height="28" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                </svg>
              </div>
              <h3 class="home-service__sub-title">ランディングページ制作</h3>
              <p class="home-service__sub-desc">CV獲得に特化したLP制作。広告運用との連携もサポートします。</p>
            </div>

            <!-- バナー・画像制作 (Blue) -->
            <div class="home-service__sub-card home-service__sub-card--b">
              <span class="home-service__sub-deco home-service__sub-deco--b" aria-hidden="true"></span>
              <div class="home-service__sub-icon home-service__sub-icon--b" aria-hidden="true">
                <svg width="28" height="28" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                </svg>
              </div>
              <h3 class="home-service__sub-title">バナー・画像制作</h3>
              <p class="home-service__sub-desc">広告バナーやSNS用画像など、各種ビジュアル制作に対応。</p>
            </div>

          </div>

        </div>

      </div>
    </section>


    <!-- =====================
         6. Works（実績プレビュー）
         ===================== -->
    <section class="l-section l-section--gray home-works" aria-labelledby="works-title">
      <div class="l-container">

        <div class="section-heading section-heading--center">
          <span class="section-eyebrow section-eyebrow--light">WORKS</span>
          <h2 class="section-heading__title" id="works-title">制作実績</h2>
          <p class="section-heading__lead">これまでに手がけた制作事例の一部をご紹介します</p>
        </div>

        <?php
        $works_query = new WP_Query( [
          'post_type'      => 'work',
          'posts_per_page' => 3,
          'no_found_rows'  => true,
        ] );
        $overlay_colors = [ 'r', 'g', 'b' ];
        ?>

        <ul class="home-works__list l-grid-3" role="list">

          <?php if ( $works_query->have_posts() ) : ?>

            <?php while ( $works_query->have_posts() ) : $works_query->the_post(); ?>
            <?php $color = $overlay_colors[ $works_query->current_post % 3 ]; ?>

            <li>
              <a class="home-works__card" href="<?php the_permalink(); ?>">
                <div class="home-works__thumb" aria-hidden="true">
                  <?php if ( has_post_thumbnail() ) : ?>
                    <?php the_post_thumbnail( 'large', [
                      'class'   => 'works-archive__thumb-img',
                      'loading' => 'lazy',
                    ] ); ?>
                  <?php endif; ?>
                  <span class="home-works__thumb-overlay home-works__thumb-overlay--<?php echo esc_attr( $color ); ?>"></span>
                </div>
                <div class="home-works__body">
                  <?php // TODO: work_category タクソノミー登録後、バッジを動的出力 ?>
                  <h3 class="home-works__title"><?php the_title(); ?></h3>
                  <p class="home-works__desc"><?php
                    if ( has_excerpt() ) {
                      echo wp_kses_post( get_the_excerpt() );
                    } else {
                      echo wp_trim_words( get_the_content(), 60 );
                    }
                  ?></p>
                </div>
              </a>
            </li>

            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>

          <?php else : ?>

            <?php wp_reset_postdata(); ?>

            <!-- 投稿なし: 静的ダミーカード3件 -->
            <li>
              <a class="home-works__card" href="<?php echo esc_url( home_url('/works/') ); ?>">
                <div class="home-works__thumb" aria-hidden="true">
                  <span class="home-works__thumb-overlay home-works__thumb-overlay--r"></span>
                </div>
                <div class="home-works__body">
                  <span class="home-works__badge home-works__badge--r">製造業</span>
                  <h3 class="home-works__title">株式会社Aコーポレートサイト</h3>
                  <p class="home-works__desc">企業の信頼性を高めるコーポレートサイトをリニューアル。CMSを導入し、更新性を向上しました。</p>
                </div>
              </a>
            </li>

            <li>
              <a class="home-works__card" href="<?php echo esc_url( home_url('/works/') ); ?>">
                <div class="home-works__thumb" aria-hidden="true">
                  <span class="home-works__thumb-overlay home-works__thumb-overlay--g"></span>
                </div>
                <div class="home-works__body">
                  <span class="home-works__badge home-works__badge--g">IT・サービス</span>
                  <h3 class="home-works__title">Bサービス ランディングページ</h3>
                  <p class="home-works__desc">新規サービスのローンチに伴うLP制作。CV率を重視した設計で目標を達成しました。</p>
                </div>
              </a>
            </li>

            <li>
              <a class="home-works__card" href="<?php echo esc_url( home_url('/works/') ); ?>">
                <div class="home-works__thumb" aria-hidden="true">
                  <span class="home-works__thumb-overlay home-works__thumb-overlay--b"></span>
                </div>
                <div class="home-works__body">
                  <span class="home-works__badge home-works__badge--b">医療・健康</span>
                  <h3 class="home-works__title">C医院 ホームページ制作</h3>
                  <p class="home-works__desc">患者様に寄り添う温かみのあるデザインで、予約数の向上に貢献しました。</p>
                </div>
              </a>
            </li>

          <?php endif; ?>

        </ul>

        <div class="home-works__cta">
          <a class="btn btn--primary btn--md" href="<?php echo esc_url( home_url('/works/') ); ?>">
            <span class="btn__text">制作実績を見る</span>
            <svg class="btn__icon" width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
            </svg>
          </a>
        </div>

      </div>
    </section>


    <!-- =====================
         7. CTA（共通）
         ===================== -->
    <section class="cta-section cta-section--dark" aria-labelledby="cta-title">

      <span class="cta-section__topline" aria-hidden="true"></span>

      <div class="rgb-blob-bg" aria-hidden="true">
        <span class="rgb-blob-bg__blob rgb-blob-bg__blob--r"></span>
        <span class="rgb-blob-bg__blob rgb-blob-bg__blob--g"></span>
        <span class="rgb-blob-bg__blob rgb-blob-bg__blob--b"></span>
      </div>

      <div class="l-container">
        <div class="cta-section__inner">

          <!-- RGB dots eyebrow ornament -->
          <div class="cta-section__ornament" aria-hidden="true">
            <span class="cta-section__ornament-line"></span>
            <div class="cta-section__ornament-dots">
              <span class="cta-section__ornament-dot cta-section__ornament-dot--r"></span>
              <span class="cta-section__ornament-dot cta-section__ornament-dot--g"></span>
              <span class="cta-section__ornament-dot cta-section__ornament-dot--b"></span>
            </div>
            <span class="cta-section__ornament-line"></span>
          </div>

          <h2 class="cta-section__title" id="cta-title">
            まずはお気軽に<br>ご相談ください
          </h2>

          <p class="cta-section__lead">
            ざっくりしたご相談でも大丈夫です。<br>
            お見積りやご提案は無料で対応いたします。<br>
            <strong class="cta-section__lead-em">まずは気軽にお問い合わせください。</strong>
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