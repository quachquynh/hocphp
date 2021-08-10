/*--------------------------------------------------------------
# CS CODESTAR FRAMEWORK
--------------------------------------------------------------*/
<?php echo cs_get_option('introduce-title-3'); ?>
Thêm thẻ P: <?php echo wpautop(cs_get_option('video_des')); ?>      
<?php if (!cs_get_option('use_ptb')) {  smm_custom_breadcrumbs();} ?>
      
<div class="related-post">
    <?php hrm_recent_post_category(); ?>
  </div>

// Tạo readmore
function new_excerpt_length($length) {
return 30;
}
add_filter('excerpt_length', 'new_excerpt_length');

function new_excerpt_more($more) {
return '...<a href="'. get_permalink() . '">' . ' Xem thêm' . '</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');


// Lấy Widget cũ
add_filter('gutenberg_use_widgets_block_editor', '__return_false');
add_filter('use_widgets_block_editor', '__return_false');

/*--------------------------------------------------------------
# Forms
--------------------------------------------------------------*/

define( 'WPCF7_AUTOP', false ); - wp-config.php
add_filter('wpcf7_autop_or_not', '__return_false'); - function.php

input[type="text"],
input[type="email"],
input[type="url"],
input[type="password"],
input[type="search"],
input[type="number"],
input[type="tel"],
input[type="range"],
input[type="date"],
input[type="month"],
input[type="week"],
input[type="time"],
input[type="datetime"],
input[type="datetime-local"],
input[type="color"],
select,
textarea {
    width: 100%;
    height: 36px;
    padding: 0 15px;
    border-radius: 5px;
    margin-bottom: 15px;
}
input[type="text"]:focus,
input[type="email"]:focus,
input[type="url"]:focus,
input[type="password"]:focus,
input[type="search"]:focus,
input[type="number"]:focus,
input[type="tel"]:focus,
input[type="range"]:focus,
input[type="date"]:focus,
input[type="month"]:focus,
input[type="week"]:focus,
input[type="time"]:focus,
input[type="datetime"]:focus,
input[type="datetime-local"]:focus,
input[type="color"]:focus,
textarea:focus {
  color: #111;
}
textarea {
  width: 100%;
}
.wpcf7-form input.wpcf7-submit {
    background: #eb0606;
    border: 0 none;
    color: #fff;
    padding: 5px 20px;
    width: 100%;
    height: 40px;
    cursor: pointer;
    border-radius: 5px;
}

/*--------------------------------------------------------------
# Đăng ký sidebar
--------------------------------------------------------------*/

function mytheme_widgets_init() {
register_sidebar( array(
'name' => esc_html__( 'Sidebar', 'mytheme' ),
'id' => 'sidebar-1',
'description' => esc_html__( 'Add widgets here.', 'mytheme' ),
'before_widget' => '<section id="%1$s" class="widget %2$s">',
'after_widget' => '</section>',
'before_title' => '<h2 class="widget-title">',
'after_title' => '</h2>',
) );

register_sidebar( array(
'name' => esc_html__( 'Footer 1', 'mytheme' ),
'id' => 'footer-1',
'description' => esc_html__( 'Add widgets here.', 'mytheme' ),
'before_widget' => '<div id="%1$s" class="widget %2$s">',
'after_widget' => '</div>',
'before_title' => '<h4 class="widget-title">',
'after_title' => '</h4>',
) );

register_sidebar( array(
'name' => esc_html__( 'Footer 2', 'mytheme' ),
'id' => 'footer-2',
'description' => esc_html__( 'Add widgets here.', 'mytheme' ),
'before_widget' => '<div id="%1$s" class="widget %2$s">',
'after_widget' => '</div>',
'before_title' => '<h4 class="widget-title">',
'after_title' => '</h4>',
) );

register_sidebar( array(
'name' => esc_html__( 'Footer 3', 'mytheme' ),
'id' => 'footer-3',
'description' => esc_html__( 'Add widgets here.', 'mytheme' ),
'before_widget' => '<div id="%1$s" class="widget %2$s">',
'after_widget' => '</div>',
'before_title' => '<h4 class="widget-title">',
'after_title' => '</h4>',
) );
}
add_action( 'widgets_init', 'mytheme_widgets_init' );

/*--------------------------------------------------------------
# Bootstrap
--------------------------------------------------------------*/
.block-group {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
}
<div class="col-xs-12 col-sm-6 col-md-3">

function my_scripts() {
wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css');
wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js', array( 'jquery' ),'',true );
}
add_action( 'wp_enqueue_scripts', 'my_scripts' );


https://tuongads.com/cf7-demo/

/*--------------------------------------------------------------
# Hiệu ứng phóng to ảnh khi rê chuột
--------------------------------------------------------------*/

.item-box img, .Latest_news img {
  transition: transform .5s ease;
  -webkit-transform:transform 5s ease out;
  -moz-transform:transform 5s ease out;
  -o-transform:transform 5s ease out;
}
.item-box img:hover, .Latest_news img:hover {
  -webkit-transform:scale(1.1);
  -moz-transform:scale(1.1); 
  -o-transform:scale(1.1); 
}

/*--------------------------------------------------------------
# Xóa bỏ swipebox
--------------------------------------------------------------*/
<script>
$("body").click(function(){
jQuery(document).ready(function(){
   $("html").removeClass("#swipebox-overlay,.swipebox-html,.swipebox-no-touch");
});
});
</script>

/*--------------------------------------------------------------
# Loop và WP_Query
--------------------------------------------------------------*/
<?php 
          $cats = get_categories();
          foreach ($cats as $cat) {
            print_r($cat);
          }

        ?>

  $loop = new WP_Query( array(
    'post_type' => 'product',
    'post_status' => 'publish',
    'posts_per_page' => 5,
    'tax_query' => array( array(
        'taxonomy'         => 'product_cat',
        'field'            => 'slug', // Or 'term_id' or 'name'
        'terms'            => get_query_var( 'product_cat' ), // A slug term
        // 'include_children' => false // or true (optional)
    )),
    'orderby' => 'rand'
) );

foreach ($loop as $cat) {
            print_r($cat);
          }

/*--------------------------------------------------------------
# KỸ THUẬT css
--------------------------------------------------------------*/
  .item-group .item:not(:nth-child(4)):not(:nth-child(8)) {
    margin-right: 20px;
  }


/*--------------------------------------------------------------
# Voyager
--------------------------------------------------------------*/
config/filesystem.php

Upload file

// Lastet post
->orderBy('id', 'desc')

//Đường dẫn image
<img src="{{ asset('storage/photos/sec_category_1.jpg') }}">

// Lấy Widget cũ
add_filter('gutenberg_use_widgets_block_editor', '__return_false');
add_filter('use_widgets_block_editor', '__return_false');

// Tắt update
function remove_core_updates(){
global $wp_version;return(object) array('last_checked'=> time(),'version_checked'=> $wp_version,);
}
add_filter('pre_site_transient_update_core','remove_core_updates'); //hide updates for WordPress itself
add_filter('pre_site_transient_update_plugins','remove_core_updates'); //hide updates for all plugins
add_filter('pre_site_transient_update_themes','remove_core_updates'); //hide updates for all themes

add_filter( 'auto_update_plugin', '__return_false' );

add_filter( 'auto_update_theme', '__return_false' );


/*****************************************
* Fixed Sidebar 
****************************************/
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
jQuery(window).scroll(function() {
  if (jQuery(document).scrollTop() > 50) {
    jQuery('#custom_html-3').addClass('shrink');
  } else {
    jQuery('#custom_html-3').removeClass('shrink');
  }
});
$(window).scroll(() => {
    const footerToTop = $('.footer-wrapper').position().top;
    const scrollTop = $(document).scrollTop() + $(window).height();
    const difference = scrollTop - footerToTop;
    const bottomValue = scrollTop > footerToTop ? difference : 0;
    $('#custom_html-3').css('bottom', bottomValue);
}); 
</script>

#custom_html-3 {
    padding: 15px 20px 15px;
    background-color: #fff;
    border: 1px solid #ddd;
    box-shadow: 2px 2px 10px 0 rgb(0 0 0 / 5%);
}
.post-sidebar.large-3 {
    padding-left: 0;
}
#custom_html-3 {
   position: fixed;
   max-width: 268px;
   background: #fff;
   z-index: 999;
   box-shadow: 0 4px 8px 0 rgb(0 0 0 / 15%);
}
#custom_html-3.header-main.shrink {
       height: 60px;
}