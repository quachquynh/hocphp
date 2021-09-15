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
# WP Forms
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

// Placeholder
.wpcf7-form input::-webkit-input-placeholder,
.wpcf7-form textarea::-webkit-input-placeholder
{
  color: #555;
  font-weight: 400;
}

// Xóa bỏ icon load

<script type='text/javascript'>
    document.addEventListener( 'wpcf7submit', function( event ) {
        jQuery('.wpcf7 .processing').removeClass('processing');
    }, false );
</script>
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

// Bật builder Flatsome
add_action( 'init', function () {
  if ( function_exists( 'add_ux_builder_post_type' ) ) {
    add_ux_builder_post_type( 'custom_post_type' );
  }
} );

// TAXONOMY FLATSOME

//archive-2-col.php (template-parts/posts/archive-2-col.php)

<?php if( is_tax('tax-du-an')) : ?>
  <?php get_template_part( 'template-parts/posts/archive-taxonomy');?>
<?php endif ; ?>


/*****************************************
*       THÊM WIDGET BẰNG JQUERY          *
*****************************************/
<script type="text/javascript">
  
jQuery(document).ready(function(){
  jQuery('.product-info .cart').after('<?php dynamic_sidebar("widget-hotline"); ?>');
  jQuery('.price-wrapper').after('<?php dynamic_sidebar("thongtinnoibat"); ?>');
});
</script>

/*****************************************
*       Scollbar          *
*****************************************/
#secondary::-webkit-scrollbar {
  width: 12px;               /* width of the entire scrollbar */
}

#secondary::-webkit-scrollbar-track {
  background-color: transparent;
}
#secondary::-webkit-scrollbar-thumb {
  background-color: #d6dee1;
  border-radius: 20px;       /* roundness of the scroll thumb */
  background-color: #d6dee1;
}
#secondary.shrink {
       height: auto;
}
#secondary::-webkit-scrollbar-thumb:hover {
  background-color: #a8bbbf;
}

/*****************************************
*       THÊM LINK BẰNG JQUERY          *
*****************************************/
<script type="text/javascript">
jQuery(document).ready(function() {
  $("div.header-slogan").click(function() {
    window.location = "http://minhcuong.dn-media.net/";
  });
});

</script>

/*****************************************
*       POPUP Maker Border          *
*****************************************/
.pum-theme-64 .pum-content, .pum-theme-enterprise-blue .pum-content
{
  border: 0!important;
  outline: 0!important;
}

// SHORT CODE BREADCRUMB
/*****************************************
*       POPUP Maker Border          *
*****************************************/
function breadcrumbs() {

  // Code
  if(!is_home()) {
    echo '<nav class="breadcrumb">';
    echo '<a href="'.home_url('/').'">'.get_bloginfo('name').'</a><span class="divider">/ </span>';
    if (is_category() || is_single()) {
      the_category(' <span class="divider">/ </span> ');
      if (is_single()) {
        echo ' <span class="divider">/ </span> ';
        the_title();
      }
    } elseif (is_page()) {
      echo the_title();
    }
    echo '</nav>';
  }
}
add_shortcode( 'breadcrumbs', 'breadcrumbs' );

// Contact - Liên hệ
<div class="contact-list">
  <div class="hide-show">
    
  <button class="btnContact">
  <a title="Trang chủ" href="https://nhasachbaoan.com/"><img src="/wp-content/uploads/2021/08/icon-home.png" alt="Hotline">
  </a><span>Trang chủ </span>
  </button>
  <button class="btnContact btn-zalo">
  <a title="Chat zalo" href="https://zalo.me/0949813381" target="_blank" rel="nofollow"><img src="/wp-content/uploads/2021/08/zalo.png" alt="Zalo chat">
  </a>
  <span>Chat zalo</span>
  </button>
  <button class="btnContact btn-zalo">
  <a title="Hotline" href="tel:0949813381" target="_blank" rel="nofollow"><img src="/wp-content/uploads/2021/08/icon-call.png" alt="Hotline">
    </a><span>Gọi điện</span>
  </button>
  <button class="btnContact btn-hotline popmake-290">
  <a title="Đặt lịch" href="tel:012345678" rel="nofollow"><img src="/wp-content/uploads/2021/08/icon-contact.png" alt="Đặt lịch">
    </a><span>Đặt lịch</span>
  </button>
  <button class="btnContact btn-fb">
  <a title="Messenger" href="https://www.facebook.com/vesinhcongnghiepuytingiarehanoi/" target="_blank" rel="nofollow"><img src="/wp-content/uploads/2021/08/messenger-2.png" alt="Massenger"></a><span>Messenger</span>
  </button>
  </div>
  
<button class="btnContact HideShow">

</button>
  
</div>

/* CSS Contact */
.contact-list {
    position: fixed;
    bottom: 20px;
    left: 0px;
    z-index: 99999;
    background: #fff;
    padding-top: 6px;
  border-radius: 4px;
  padding-bottom: 6px;
  border: 1px solid #f6f6f6;
  box-shadow: 0px 2px 2px 0px rgb(0 0 0 / 14%), 0px 3px 1px -2px rgb(0 0 0 / 12%), 0px 1px 5px 0px rgb(0 0 0 / 20%);
  margin-left: 10px;
}
.contact-list .add-class {
  background: transparent!important;
}
    .quote1{font-family:Verdana;padding:10px;
       background:#44c767;color:#fff;}
     
    .quote2{
    padding:10px;
       background: transparent;
    color:#fff;
    border:0;
    box-shadow:none;
    
}
.quote2 .btnContact {
    display: block;
    line-height: 42px;
    text-align: center;
    margin: 5px;
    border-radius: 50%;
    color: #fff;
    cursor: pointer;
    position: relative;
    width: 58px;
    height: 58px;
  background: url(https://nhasachbaoan.com/wp-content/uploads/2021/08/icon-cta.png) no-repeat;
}
.HideShow {
  display: block;
    width: 42px;
    height: 42px;
    line-height: 42px;
    text-align: center;
    margin: 5px;
    border-radius: 50%;
    color: #fff;
    cursor: pointer;
    position: relative;
    background-color: #bc484c;
}
.HideShow:before {
  content: "\f00d";
  width: 42px;
  height: 42px;
  font-family: 'Font Awesome\ 5 Free';
  font-weight: 900;
}
.quote2 .HideShow:before {
  content: "";
}
.btnContact {
  border-radius: 20px;
  padding: 0 5px;
  display: block;
  margin-bottom: 6px;
  margin-right: 0;
  margin: 0 auto;
}
.btnContact span {
  display: block;
  font-size: 11px;
  text-transform: none;
  font-weight: 400;
  line-height: 19px;
}
.btn-zalo a, .btn-fb a, .btn-hotline a {
font-size: 15px;
color: white;
font-weight: 400;
text-transform: none;
line-height: 0;
margin-bottom: 0;
}
.contact-list img {
  width: 40px;
}
.contact-list .btn_hide_cta {
  background-color: #e55a5d;
  background: url(http://localhost/nhasachvietnam/wp-content/uploads/2021/08/icon-cta.png);
    background-size: cover;
}

/* Jquery */
jQuery(document).ready(function(){
  jQuery(".HideShow").click(function(){
    jQuery(".hide-show").toggle(1000);
    jQuery(".contact-list").toggleClass("quote1 quote2");  
  });

});

/* Fixed Sidebar -Siderbar trượt khi cuộn chuột
<?php if( is_single() ) : ?>
<script>
jQuery(document).ready(function(){
jQuery(window).scroll(function () {   
   
  if (jQuery(window).width() > 1024) {
  if(jQuery(window).scrollTop() > 550) {
   
    jQuery('#text-2').css('position','fixed');
    jQuery('#text-2').css('top','10px'); 
   
  }

 else if (jQuery(window).scrollTop() <= 550) {
    jQuery('#text-2').css('position','');
    jQuery('#text-2').css('top','');
 }  
    if (jQuery('#text-2').offset().top + jQuery("#text-2").height() > jQuery(".news-post").offset().top) {
        jQuery('#text-2').css('top',-(jQuery("#text-2").offset().top + jQuery("#text-2").height() - jQuery(".news-post").offset().top));
    }}
});
});
  
</script>
<?php endif ; ?>


// WP_Query metabox
<?php

$args = array(
  'post_type' => 'custom-posts',
  'order' => 'ASC',
  'orderby' => 'ID', // Sắp xếp bài viết theo thứ tự ID
    'meta_query' => array(
        array(
            'key' => 'id_bai_viet',
            'value' => '100',
            'compare' => '<',
            'type' => 'NUMERIC',
        ),
    ),
);
$query_posts = new WP_Query( $args );

if( $query_posts->have_posts() ):
while( $query_posts->have_posts() ) : $query_posts->the_post();

echo the_title();

endwhile;
endif;
wp_reset_query(); ?>

/*************************
//        Get taxonomy    /
/*************************/
$categories = get_terms( 'danh-muc-cpt' );
var_dump($categories);

// Get

$cat_terms = get_terms(
array('danh-muc-cpt'),
array(
    'hide_empty'    => false,
    //'orderby'       => 'name',
    'order'         => 'ASC',
    'number'        => 6 //specify yours
     )
);
foreach ($cat_terms as $term) {
  echo $term->name;
} 
?>

// Get the taxonomy's terms
$terms = get_terms(
    array(
        'taxonomy'   => 'danh-muc-cpt',
        'hide_empty' => false,
    )
);

// Check if any term exists
if ( ! empty( $terms ) && is_array( $terms ) ) {
    // add links for each category
    foreach ( $terms as $term ) { ?>
        <a class="btn  btn-default" href="<?php echo esc_url( get_term_link( $term ) ) ?>">
            <?php echo $term->name; ?>
        </a><?php
    }
}

// WP_Query all post taxonomy
// get all terms in the taxonomy
$terms = get_terms( 'danh-muc-cpt' ); 
// convert array of term objects to array of term IDs
$term_ids = wp_list_pluck( $terms, 'term_id' );

// proceed with tax query
$args = array ('tax_query' => array(
    array(
        'taxonomy' => 'danh-muc-cpt',
        'field' => 'term_id',
        'terms' => $term_ids,
         )
)
);
https://clients.r1software.com/knowledgebase/27/Taxonomy-Query-tax_query-using-WP_Query-example.html
      
      
// Z codestar
<?php $item_system = cs_get_option('item_system'); ?>
<?php foreach ($item_system as $item) { ?>
      
<?php $img_ar_full = wp_get_attachment_image_src( $item['system_image'] );
$img_link_full = $img_ar_full[0]; ?>
<img src="<?php echo $img_link_full ?>" alt="<?php $img['system_image'] ?>">
<h6 class="system-title"><?php echo $item['system_title'];?></h6>
<p><?php echo $item['system_des'];?></p>

 // GET ALL TAXONOMY
 echo '</ul>';

					$taxonomyName = "danh-muc-tour";
 
					$parent_terms = get_terms( $taxonomyName, array( 'parent' => 0, 'orderby' => 'slug', 'hide_empty' => false ) );  

					echo '<ul>';
					foreach ( $parent_terms as $pterm ) {
					    //Get the Child terms
					    $terms = get_terms( $taxonomyName, array( 'parent' => $pterm->term_id, 'orderby' => 'slug', 'hide_empty' => false ) );
					    foreach ( $terms as $term ) {
					        echo '<li class="col-md-2"><a href="' . get_term_link( $term ) . '">' . $term->name . '</a></li>';   
					    }
					
					echo '</ul>';

// GET DANH MỤC CON
			    <?php 

			    	$term_id = 182;
					$taxonomy_name = 'danh-muc-tour';
					$termchildren = get_term_children( $term_id, $taxonomy_name );
					
					echo '<ul>';
					foreach ( $termchildren as $child ) {
					    $term = get_term_by( 'id', $child, $taxonomy_name );
    echo '<li class="col-md-2"><a href="' . get_term_link( $child, $taxonomy_name ) . '">' . $term->name . '</a></li>';
					}
					
					?>

// Slider

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- SLider -->
	<?php $items = rwmb_meta('prefix_album'); ?>

	<div class="album-single">
	<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="true" data-interval="6000">
	  <!-- The slideshow -->
	<div class="carousel-inner">
		
    <?php 
		$dem = 0;
		foreach ( $items as $image ) { 
		$dem++;
		?>
		<?php if($dem == 1) { ?>
		  <div class="large-image carousel-item active">
			<img id="toggleImage" src="<?php echo $image['url'];?>" style="width:100%">
		  </div>
		<?php } ?>
			<div class="large-image carousel-item">
			<img id="toggleImage" src="<?php echo $image['url'];?>" style="width:100%">
		  </div> 
		
	<?php } ?>
</div>

  <!-- Left and right controls -->
	<?php if($items) { ?>
	<a class="left carousel-control" href="#myCarousel" data-slide="prev">
	<span class="glyphicon glyphicon-chevron-left"><i class="fas fa-chevron-circle-left"></i></span>
	<span class="sr-only">Previous</span>
	</a>
	<a class="right carousel-control" href="#myCarousel" data-slide="next">
	<span class="glyphicon glyphicon-chevron-right"><i class="fas fa-chevron-circle-right"></i></span>
	<span class="sr-only">Next</span>
	</a>
	<?php } ?>

<!-- Indicators -->
<ul class="carousel-indicators">
	<?php 
	$i = 0;
	foreach ( $items as $image ) { 
	$i++;
	?>
	<?php if($i == 1) { ?>
		<li data-target="#myCarousel" data-slide-to="<?php echo $i;?>" class="active"><img src="<?php echo $image['url'];?>"></li>
	<?php } ?>
		<li data-target="#myCarousel" data-slide-to="<?php echo $i;?>"><img src="<?php echo $image['url'];?>"></li>
	<?php } ?>
</ul>	
		</div></div>
<!-- End Slider -->

// MÃ CSS
/*************************
 *       SLIDE GALLERY   *
 * **********************/
ul.album-single {
	list-style-type: none;
	margin-left: 0;
}
.album-single li {
	width: 10%;
	display: inline-block;
	margin-right: 10px;
}
.album-single li img {
	width: 100px;
}
.album-single .large-image img {
	margin-bottom: 110px;
	object-fit: cover;
}
.glyphicon-chevron-right:before,
.glyphicon-chevron-left:before
{
	display: none;
}
.fa-chevron-circle-right,
.fa-chevron-circle-left
{
	font-size: 45px;
}
.carousel{
position: relative;
}
.carousel-indicators{
	position: relative;
}
.carousel-indicators li{
	text-indent:0;
	display:inherit;
	float:left;
	width: 135px!important;
	height: 100px;
	opacity: 1 !important;
	border: 0 !important;
	margin-left: 0;
	margin: 0 !important;
}
.carousel-indicators li.active {
	margin: 0 !important;
}

.carousel-indicators li img{
width: 100%;
height: 100px;
border: 0;
padding: 0;
}
.carousel-indicators .active img{
	border: 0;
}
.carousel-indicators .active{
margin:0;
	margin-right: 3px;
width: 100px;
height: 100px;
}
.carousel-control.right,
.carousel-control.left{
background-image: none;
}
@media screen and (min-width:320px) and (max-width:360px) {
.carousel-indicators{
top:115px;
left:95px;
}
.carousel-indicators li img{
width:95%;
height:50px;
}
.carousel-indicators li{
	width:100px;
	height:50px;
	overflow: auto !important;
	margin: 0 !important;
	
}
.carousel-indicators .active{
width:20%;
height:50px;
}
}
@media screen and (min-width:768px) and (max-width:980px){
.carousel-indicators{
top:240px;
left:213px;
}
}
/*********************
 *       End Slider  *
 * ******************/
