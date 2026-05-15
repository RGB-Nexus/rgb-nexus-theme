<?php

function rgb_nexus_setup() {

  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');

}

add_action('after_setup_theme', 'rgb_nexus_setup');


function rgb_nexus_scripts() {

  wp_enqueue_style(
    'rgb-nexus-style',
    get_template_directory_uri() . '/css/style.css',
    array(),
    filemtime(get_template_directory() . '/css/style.css')
  );

  wp_enqueue_script(
    'rgb-nexus-script',
    get_template_directory_uri() . '/js/script.js',
    array(),
    filemtime(get_template_directory() . '/js/script.js'),
    true
  );

}

add_action('wp_enqueue_scripts', 'rgb_nexus_scripts');


// script.js に defer を付与してパーサーブロックを回避
add_filter('script_loader_tag', function( $tag, $handle ) {
  if ( $handle !== 'rgb-nexus-script' ) return $tag;
  return str_replace( ' src=', ' defer src=', $tag );
}, 10, 2 );


// 長期運用でテーマ変更の可能性がある場合は、CPT登録の専用プラグイン化を検討する。
function rgb_nexus_register_post_types() {

  register_post_type( 'work', [
    'labels' => [
      'name'               => '支援実績',
      'singular_name'      => '支援実績',
      'menu_name'          => '支援実績',
      'name_admin_bar'     => '支援実績',
      'all_items'          => '支援実績一覧',
      'add_new'            => '新規追加',
      'add_new_item'       => '支援実績を追加',
      'edit_item'          => '支援実績を編集',
      'new_item'           => '新しい支援実績',
      'view_item'          => '支援実績を表示',
      'search_items'       => '支援実績を検索',
      'not_found'          => '支援実績が見つかりません',
      'not_found_in_trash' => 'ゴミ箱内に支援実績が見つかりません',
      'archives'           => '支援実績',
    ],
    'public'       => true,
    'has_archive'  => 'cases',
    'rewrite'      => [ 'slug' => 'cases', 'with_front' => false ],
    'supports'     => [ 'title', 'editor', 'thumbnail', 'excerpt' ],
    'menu_icon'    => 'dashicons-portfolio',
    'show_in_rest' => true,
  ] );

}

add_action( 'init', 'rgb_nexus_register_post_types' );


// work投稿スラッグ自動採番（001, 002, 003...）
function rgb_nexus_next_work_slug() {
  global $wpdb;

  $slugs = $wpdb->get_col(
    "SELECT post_name
     FROM {$wpdb->posts}
     WHERE post_type = 'work'
       AND post_status NOT IN ('auto-draft', 'trash')
       AND post_name REGEXP '^[0-9]{3}$'"
  );

  $max = 0;
  foreach ( $slugs as $slug ) {
    $num = (int) $slug;
    if ( $num > $max ) {
      $max = $num;
    }
  }

  return sprintf( '%03d', $max + 1 );
}

function rgb_nexus_auto_slug_work( $data, $postarr ) {
  if ( $data['post_type'] !== 'work' ) {
    return $data;
  }

  if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
    return $data;
  }

  $current_slug = $data['post_name'];

  // すでに3桁数字スラッグなら変更しない
  if ( preg_match( '/^\d{3}$/', $current_slug ) ) {
    return $data;
  }

  // DBにスラッグがある既存投稿は変更しない（公開済み投稿の保護）
  if ( ! empty( $postarr['ID'] ) ) {
    $db_slug = get_post_field( 'post_name', $postarr['ID'] );
    if ( ! empty( $db_slug ) ) {
      return $data;
    }
  }

  // タイトルからの自動生成スラッグかどうかを判定
  $auto_slug       = sanitize_title( $postarr['post_title'] );
  $is_auto_generated = empty( $current_slug )
    || $current_slug === $auto_slug
    || ( ! empty( $auto_slug ) && 0 === strpos( $current_slug, $auto_slug . '-' ) );

  // 手動設定のカスタムスラッグはそのまま尊重する
  if ( ! $is_auto_generated ) {
    return $data;
  }

  $data['post_name'] = rgb_nexus_next_work_slug();
  return $data;
}

add_filter( 'wp_insert_post_data', 'rgb_nexus_auto_slug_work', 10, 2 );