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