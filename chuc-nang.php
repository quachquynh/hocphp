https://wordpress.org/plugins/string-locator/
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


/*****************************************
*                  Meta bôx
****************************************/
add_filter( 'rwmb_meta_boxes', 'prefix_register_meta_boxes' );

function prefix_register_meta_boxes( $meta_boxes ) {

  $meta_boxes[] = [
    'title'      => 'Thông tin',
    'post_types' => 'du-an',
    'fields' => array(

      array(
        'id'   => 'trang_thai',
        'name' => __( 'Trạng thái', 'smw' ),
        'type' => 'text',
      ),

      array(
        'id'   => 'chu_dau_tu',
        'name' => __( 'Chủ đầu tư', 'smw' ),
        'type' => 'text',
      ),
    ),
  ];


  return $meta_boxes;
}


/*****************************************
*                  Liên quan custom post type
****************************************/
<div class='clearfix'></div>
<h3>Dự án liên quan</h3>
<div id="related_posts" class="single_related">
<?php
  //Get array of terms
$terms = get_the_terms( $post->ID , 'tax-du-an', 'string');
//Pluck out the IDs to get an array of IDS
$term_ids = wp_list_pluck($terms,'term_id');

//Query posts with tax_query. Choose in 'IN' if want to query posts with any of the terms
//Chose 'AND' if you want to query for posts with all terms
  $second_query = new WP_Query( array(
      'post_type' => 'du-an',
      'tax_query' => array(
                    array(
                        'taxonomy' => 'tax-du-an',
                        'field' => 'id',
                        'terms' => $term_ids,
                        'operator'=> 'IN' //Or 'AND' or 'NOT IN'
                     )),
      'posts_per_page' => 3,
      'ignore_sticky_posts' => 1,
      'orderby' => 'rand',
      'post__not_in'=>array($post->ID)
   ) );

//Loop through posts and display...
    if($second_query->have_posts()) {
     while ($second_query->have_posts() ) : $second_query->the_post(); ?>
      
        <ul>
            <li class="col large-4">
                <div class="relatedthumb">
                <?php if (has_post_thumbnail()) { ?>

                <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"> <?php the_post_thumbnail( 'related_sm', array('alt' => get_the_title()) ); ?> </a>
                </div>
                <?php } else { ?>
                     <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                <?php } ?>
                <h4>
                  <a href="'. get_the_permalink().'"><?php echo get_the_title()?></a>
                </h4>
            </li>
        </ul>
       
   <?php endwhile; wp_reset_query();
   }?>
   </div>
   <div class='clearfix'></div>


   #related_posts .col {
  float: left;
  margin-left: 0;
  list-style: none;
}
.relatedcontent h3 {
  font-size: 16px;
  margin-top: 7px;
}
.relatedthumb img {
  height: 100%;
  max-height: 165px;
}
#related_posts {
  border-top: 4px double #e8e8e8;
        padding-top: 10px;
}
#related_posts li:nth-child(1) {
  padding-left: 0 !important;
}
#related_posts li:nth-child(2) {
  padding-left: 0 !important;
  padding-right: 0 !important;
}
#related_posts li:nth-child(3) {
  padding-right: 0 !important;
}
.relatedthumb img {
  min-height: 125px;
}