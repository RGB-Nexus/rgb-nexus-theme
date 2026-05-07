/**
 * RGB Nexus — script.js
 *
 * モジュール:
 *   1. NAV       — スマホナビゲーション開閉
 *   2. ACCORDION — FAQ 汎用アコーディオン
 *
 * 依存: なし（Vanilla JS）
 * 読み込み: </body> 直前（WP: wp_enqueue_script の in_footer => true）
 */

(function () {
  'use strict';

  /* ================================================================
     1. NAV — モバイルナビゲーション
     対象: #menu-toggle / #site-nav
     ================================================================ */
  function initNav() {
    var toggle = document.getElementById('menu-toggle');
    var nav    = document.getElementById('site-nav');

    // 要素がないページ（404 等）では即終了
    if (!toggle || !nav) return;

    var isOpen = false;

    function openMenu() {
      isOpen = true;
      toggle.setAttribute('aria-expanded', 'true');
      toggle.setAttribute('aria-label',    'メニューを閉じる');
      toggle.classList.add('hamburger--open');
      nav.classList.add('site-nav--open');
      document.body.classList.add('is-nav-open');
    }

    function closeMenu() {
      isOpen = false;
      toggle.setAttribute('aria-expanded', 'false');
      toggle.setAttribute('aria-label',    'メニューを開く');
      toggle.classList.remove('hamburger--open');
      nav.classList.remove('site-nav--open');
      document.body.classList.remove('is-nav-open');
    }

    // ① ハンバーガーボタン → 開閉
    toggle.addEventListener('click', function () {
      isOpen ? closeMenu() : openMenu();
    });

    // ② ナビ内のリンク・ボタン → 閉じる
    nav.querySelectorAll('a, button').forEach(function (el) {
      el.addEventListener('click', closeMenu);
    });

    // ③ メニュー外クリック → 閉じる
    document.addEventListener('click', function (e) {
      if (!isOpen) return;
      if (nav.contains(e.target) || toggle.contains(e.target)) return;
      closeMenu();
    });

    // ④ ESC キー → 閉じてボタンへフォーカスを戻す
    document.addEventListener('keydown', function (e) {
      if (e.key === 'Escape' && isOpen) {
        closeMenu();
        toggle.focus();
      }
    });

    // ⑤ PC 幅（1024px+）に変わったら強制クローズ
    //    Safari 13 以前は matchMedia.addEventListener 非対応のため分岐
    var mq = window.matchMedia('(min-width: 1024px)');
    function handleBreakpoint(e) {
      if (e.matches && isOpen) closeMenu();
    }
    if (typeof mq.addEventListener === 'function') {
      mq.addEventListener('change', handleBreakpoint);
    } else {
      mq.addListener(handleBreakpoint);
    }
  }

  /* ================================================================
     2. ACCORDION — FAQ 汎用アコーディオン
     ================================================================

     【HTML の書き方】

     <div data-accordion>                        ← グループ要素
       <div class="faq__item">
         <button class="faq__trigger"
                 data-accordion-trigger          ← このボタンが起動点
                 aria-expanded="false"           ← 初期状態を HTML で宣言
                 aria-controls="faq-item-1">     ← パネルの id を指定
           質問テキスト
         </button>
         <div class="faq__panel" id="faq-item-1" hidden>  ← 対応パネル
           回答テキスト
         </div>
       </div>
     </div>

     【オプション】
     data-accordion="multiple"  → 複数パネルを同時に開くことを許可
                                   （省略時は単一展開）

     【アクセシビリティ】
     - aria-expanded をボタンで宣言し、JS がトグル
     - パネルは hidden 属性で表示制御（display:none → スクリーンリーダーも除外）
     - キーボード操作は <button> が担保
     ================================================================ */
  function initAccordion() {
    var triggers = document.querySelectorAll('[data-accordion-trigger]');
    if (!triggers.length) return;

    triggers.forEach(function (trigger) {
      var panelId = trigger.getAttribute('aria-controls');
      var panel   = panelId ? document.getElementById(panelId) : null;

      // aria-controls が未設定 or 対応 id が存在しなければスキップ
      if (!panel) return;

      // HTML の aria-expanded 初期値に合わせてパネルを初期化
      panel.hidden = (trigger.getAttribute('aria-expanded') !== 'true');

      trigger.addEventListener('click', function () {
        var expanded = (trigger.getAttribute('aria-expanded') === 'true');

        // 単一展開モード: 同グループ内の他パネルをすべて閉じる
        var group = trigger.closest('[data-accordion]');
        if (group && group.getAttribute('data-accordion') !== 'multiple') {
          group.querySelectorAll('[data-accordion-trigger]').forEach(function (t) {
            if (t === trigger) return;
            t.setAttribute('aria-expanded', 'false');
            var pid = t.getAttribute('aria-controls');
            var p   = pid ? document.getElementById(pid) : null;
            if (p) p.hidden = true;
          });
        }

        // クリックしたトリガーをトグル
        trigger.setAttribute('aria-expanded', String(!expanded));
        panel.hidden = expanded;
      });
    });
  }

  /* ================================================================
     INIT — 各モジュールを起動
     要素が存在しないページでは各 init 関数が早期 return するため安全
     ================================================================ */
  initNav();
  initAccordion();

}());
