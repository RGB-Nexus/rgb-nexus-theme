<?php

function rgb_nexus_setup() {

  add_theme_support('title-tag');

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


function rgb_nexus_register_post_types() {

  register_post_type( 'work', [
    'labels' => [
      'name'               => '実績',
      'singular_name'      => '実績',
      'add_new'            => '新規追加',
      'add_new_item'       => '実績を追加',
      'edit_item'          => '実績を編集',
      'new_item'           => '新しい実績',
      'view_item'          => '実績を表示',
      'search_items'       => '実績を検索',
      'not_found'          => '実績が見つかりません',
      'not_found_in_trash' => 'ゴミ箱に実績はありません',
    ],
    'public'       => true,
    'has_archive'  => true,
    'rewrite'      => [ 'slug' => 'works' ],
    'supports'     => [ 'title', 'editor', 'thumbnail', 'excerpt' ],
    'menu_icon'    => 'dashicons-portfolio',
    'show_in_rest' => true,
  ] );

}

add_action( 'init', 'rgb_nexus_register_post_types' );