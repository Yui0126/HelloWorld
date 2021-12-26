<?php
  
  //バナーウィジェット
register_sidebars(2, array('name'=>'Top Bannar %d'));
	
	//カスタムメニュー
  register_nav_menus(array(
  'mainNavigation' => 'メインナビゲーション',
  'footNavigation' => 'フットナビゲーション'
));
  
//WordPressのバージョン情報の出力を停止
remove_action('wp_head','wp_generator');
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'wp_shortlink_wp_head' );
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
 
//WordPressログイン時にサイト表示した際のbody top marginを削除
add_filter( 'show_admin_bar', '__return_false' );

//RSSフィードの情報を出力
add_theme_support('automatic-feed-links');




  //エディタ・スタイルシート
add_editor_style('editor-style.css');
  
  //アイキャッチ画像
add_theme_support('post-thumbnails');

  add_image_size( 'top-slide', 1690, 880, true );
  add_image_size( 'country-slide', 800, 450, true );
  add_image_size( 'country-staff', 166, 220, true );
    add_image_size( 'pdf-img', 300, 424, true );
	
the_post_thumbnail('medium');          // 中サイズ
the_post_thumbnail('large');           // 大サイズ
the_post_thumbnail('full');            // アップロードしたオリジナルサイズ

//トップスライド投稿タイプ
register_post_type(
  'topImage', 
  array(
    'label' => 'トップスライド',
    'hierarchical' => false,
    'public' => true,
    'menu_position' => 5,
    'has_archive' => true,
    'supports' => array(
      'title','editor','thumbnail','custom-fields',
    )
  )
);

//国別投稿タイプ

register_post_type(
  'country', 
  array(
    'label' => '国',
    'hierarchical' => false,
    'public' => true,
    'menu_position' => 6,
	'has_archive' => true,
   'supports' => array(
      'title','editor','thumbnail','custom-fields',
    )
  
  )
);

register_taxonomy(
	'country-cat', 
	'country', 
	array(
		'label' => '国のカテゴリー',
		'hierarchical' => true,
	)
);

//プロジェクト別投稿タイプ

register_post_type(
  'project', 
  array(
    'label' => 'プロジェクト',
    'hierarchical' => false,
    'public' => true,
    'menu_position' => 7,
	'has_archive' => true,
   'supports' => array(
      'title','editor','thumbnail','custom-fields',
    )
  
  )
);

register_taxonomy(
	'project-cat', 
	'project', 
	array(
		'label' => 'プロジェクトのカテゴリー',
		'hierarchical' => true,
	)
);

//体験談投稿タイプ

register_post_type(
  'voice', 
  array(
    'label' => '体験談',
    'hierarchical' => false,
    'public' => true,
    'menu_position' => 8,
	'has_archive' => true,
   'supports' => array(
      'title','editor','thumbnail'
    )
  
  )
);

register_taxonomy(
	'voice-cat', 
	'voice', 
	array(
		'label' => '体験談のカテゴリー',
		'hierarchical' => true,
	)
);

//FAQ投稿タイプ

register_post_type(
  'faqs', 
  array(
    'label' => 'FAQ',
    'hierarchical' => false,
    'public' => true,
    
	'has_archive' => true,
   'supports' => array(
      'title','editor','thumbnail'
    )
  
  )
);

register_taxonomy(
	'faqs-cat', 
	'faqs', 
	array(
		'label' => 'FAQのカテゴリー',
		'hierarchical' => true,
	)
);







// エディタの自動整形解除
function override_mce_options( $init_array ) {
    global $allowedposttags;

    $init_array['valid_elements']          = '*[*]';
    $init_array['extended_valid_elements'] = '*[*]';
    $init_array['valid_children']          = '+a[' . implode( '|', array_keys( $allowedposttags ) ) . ']';
    $init_array['indent']                  = true;
    $init_array['wpautop']                 = false;
    $init_array['force_p_newlines']        = false;

    return $init_array;
}

add_filter( 'tiny_mce_before_init', 'override_mce_options' );
remove_filter ('acf_the_content', 'wpautop');
remove_filter('the_content', 'wpautop');
remove_filter('the_content', 'wptexturize');



  
// アイキャッチ画像 URL取得
function get_featured_image_url() { 
    $image_id = get_post_thumbnail_id();
    $image_url = wp_get_attachment_image_src($image_id,'thumbnail', true); 
    echo $image_url[0]; 
}









///投稿タイプ個別ページに親固定ページのClass名追加 （メニューのアクティブ化）など
function add_nav_menu_custom_class( $menu_items ) {
 
	$lists = array(
		'post_type6' => 'page_slug6',
		'post_type7' => 'page_slug7',
	);
    
    $current_post_type = get_post_type();
	
	foreach($lists as $post_type => $page_slug){
	
		if($current_post_type==$post_type){
			foreach ( $menu_items as $menu_key => $menu_item ) {
				if(get_page($menu_item->object_id)->post_name == $page_slug){
					$menu_items[$menu_key]->classes[] = 'current-menu-item'; //任意のクラス名
				}
			}
		}
	}
	return $menu_items;
}
add_filter( 'wp_nav_menu_objects', 'add_nav_menu_custom_class' );

// 親ページのスラッグを判定して取得
function is_parent_slug() {
	global $post;
	if ($post->post_parent) {
		$post_data = get_post($post->post_parent);
		return $post_data->post_name;
	}
}

// 最上位親ページのスラッグ判定
function get_most_parent_page($current_id = ''){
    global $post;
    if($current_id == '') $current_id ==$post->ID; 
    $current_post = get_post($current_id);
    $par_id = $current_post->post_parent;
    while($par_id!= 0) :
        $par_post = get_post($par_id);
        $current_post = $par_post;
        $par_id = $par_post->post_parent;
    endwhile;
    return $current_post;
	
}

function my_excerpt_more($more) {
 return '…';
 }
 add_filter('excerpt_more', 'my_excerpt_more');


//コメントの非表示
function remove_menus() {

	global $menu;
	unset($menu[25]);	// コメント
}
add_action('admin_menu', 'remove_menus');


//管理画面一覧にアイキャッチ画像を表示
function manage_posts_columns($columns) {
 $columns['thumbnail'] = __('Thumbnail');
 return $columns;
}
function add_column($column_name, $post_id) {


 if ( 'thumbnail' == $column_name) {
 $thum = get_the_post_thumbnail($post_id, array(100,70), 'thumbnail');
  echo ( $thum ) ? $thum : '－';
 }
 
}
add_filter( 'manage_posts_columns', 'manage_posts_columns' );
add_action( 'manage_posts_custom_column', 'add_column', 10, 2 );



//管理画面　トップスライド画像表示

function manage_custom_columns($columns) {
    $columns['top_image'] = 'スライド画像';
    return $columns;
}
 

function add_custom_columns($column_name, $post_id) {
    if( $column_name == 'top_image' ) {
        $img = get_field('top_image');
		$imgurl = wp_get_attachment_image_src($img, 'top-slide'); 
        echo "<img src='" . $imgurl[0] . "' alt='' width='200' />";
    }
}

add_filter( 'manage_topimage_posts_columns', 'manage_custom_columns' );
add_action( 'manage_topimage_posts_custom_column', 'add_custom_columns', 10, 2 );



//管理画面　体験談サムネイル画像表示


//titleタグの出力
function change_title_separator( $sep ){
  $sep = ' | ';
  return $sep;
}
add_filter( 'document_title_separator', 'change_title_separator' );
add_theme_support( 'title-tag' );


//meta description
function get_description() {
 
  if(is_single() || is_page()) {
 $description = mb_substr(get_the_excerpt(), 0, 110);
  }

if( is_category()) {
	  $description = category_description(); 
  }
if( is_tag()) {
	  $description = tag_description(); 
  }
if(empty($description)) {
    $description = bloginfo('description');
  }
  return $description;
}

//Google Map Advance custum Field
function my_acf_google_map_api( $api ){
  $api['key'] = 'AIzaSyBzo_yIPZBqogO7m9nu00_qttYbzMg2xPg';
  return $api;
}
add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');

function my_acf_init() {
    acf_update_setting('google_api_key', 'AIzaSyBzo_yIPZBqogO7m9nu00_qttYbzMg2xPg');
}
add_action('acf/init', 'my_acf_init');

//カテゴリーの順番を維持
function keep_admin_posts_category_order( $args, $post_id = null ) {
    $args['checked_ontop'] = false;
    return $args;
}
add_action( 'wp_terms_checklist_args', 'keep_admin_posts_category_order' );

//管理画面でのカスタム投稿タイプカテゴリーの検索
function add_post_taxonomy_restrict_filter() {
    global $post_type;
    if ( 'country' == $post_type ) {
        echo '<select name="country-cat">';
            echo '<option value="">エリア指定なし</option>';
            $terms = get_terms('country-cat', 'hide_empty=0');
            foreach ($terms as $term) :
             if ($term->parent == 0):
              echo '<option value="' . $term->slug . '">' . $term->name . '</option>';
              $parentID = $term->term_id;
 
              $children = get_term_children( $parentID , 'country-cat' );
              if(!empty($children)):
 
               foreach($children as $childID):
                $child=get_term_by('id', $childID, 'country-cat');
                echo '<option value="' . $child->slug  . '">　' . $child->name . '</option>';
               endforeach;
 
              endif;
             endif;
           endforeach;
 
        echo '</select>';
    }
}
add_action( 'restrict_manage_posts', 'add_post_taxonomy_restrict_filter' );

//管理画面のカスタム投稿一覧にカテゴリーを表示
function add_custom_column( $defaults ) {
 $defaults['faqs-cat'] = 'カテゴリー';
 return $defaults;
}
add_filter('manage_faqs_posts_columns', 'add_custom_column');

function add_custom_column_id($column_name, $id) {
if( $column_name == 'faqs-cat' ) {
echo get_the_term_list($id, 'faqs-cat', '', ', ');
}
}
add_action('manage_faqs_posts_custom_column', 'add_custom_column_id', 10, 2);

//mw wp formの画像リンクを削除
function my_mail( $mail_raw, $values, $data ) {
	$images = array( 'photo');
	foreach ( $images as $image ) {
		$image_url = $data->get( $image );
		if ( $image_url ) {
			$parse_url = parse_url( $image_url );
			$path = explode( '/', $parse_url['path']);
			$file_name = end( $path );
			$mail_raw->body = str_replace( "{{$image}}", $file_name, $mail_raw->body );
		}
	}
	return $mail_raw;
}
add_filter( 'mwform_auto_mail_raw_mw-wp-form-150', 'my_mail', 10, 3 );

