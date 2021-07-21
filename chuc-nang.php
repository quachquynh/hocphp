function new_excerpt_length($length) {
return 30;
}
add_filter('excerpt_length', 'new_excerpt_length');

function new_excerpt_more($more) {
return '...<a href="'. get_permalink() . '">' . ' Xem thêm' . '</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');