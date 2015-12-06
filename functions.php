<?php
/**
 * Funções e definições do BielWP
 *
 * @package BielWP
 * @since BielWP 0.1
 */
?>
<?php
/* WIDGETS */
 
if (function_exists('register_sidebar'))
{
    register_sidebar(array(
        'name'          => 'Sidebar',
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ));
}
 
?>
<?php
function disqus_embed($disqus_shortname) {
    global $post;
    wp_enqueue_script('disqus_embed','http://aethercentral.disqus.com/admin/moderate/#/approved'.$disqus_shortname.'.disqus.com/embed.js');
    echo '<div id="disqus_thread"></div>
    <script type="text/javascript">
        var disqus_shortname = "'.$disqus_shortname.'";
        var disqus_title = "'.$post->post_title.'";
        var disqus_url = "'.get_permalink($post->ID).'";
        var disqus_identifier = "'.$disqus_shortname.'-'.$post->ID.'";
    </script>';
}
?>
<?php
function disqus_count($disqus_shortname) {
    wp_enqueue_script('disqus_count','http://'.$disqus_shortname.'.disqus.com/count.js');
    echo '<a href="'. get_permalink() .'#disqus_thread"></a>';
}
?>
<?php
    if ( function_exists( 'add_image_size' ) ) add_theme_support( 'post-thumbnails' );
 
    if ( function_exists( 'add_image_size' ) ) {
	
    add_image_size( 'ultimo-post', 590, 300, true );
	
    add_image_size( 'outro-post', 180, 93, true );
	
	add_image_size( 'outro-artigo', 260, 130, true );
	
	add_image_size( 'imagem-post', 640, 360, true );
	
	add_image_size( 'widget', 80, 42, true );
}
?>
<?php 
// Remove as páginas dos resultados de busca
	function SearchFilter($query) {
	if ($query->is_search) {
	$query->set('post_type', 'post');
	}
	return $query;
	}

	add_filter('pre_get_posts','SearchFilter');
?>
<?php
	wp_enqueue_script("jquery");
?>
<?php
function limit_posts_per_archive_page() {
	if ( is_category() )
		set_query_var('posts_per_archive_page', 5); // or use variable key: posts_per_page
}
add_filter('pre_get_posts', 'limit_posts_per_archive_page');
?>
<?php
    add_filter('the_content_more_link', 'filter_more_link');
 
function filter_more_link( $link ) {
return '<center><a class="read-more" href="'. get_permalink( get_the_ID() ) . '" title="Continue lendo '.get_the_title().'!"><div class="read-more-wrapper">Continue lendo!</div></a></center>';
}
?>