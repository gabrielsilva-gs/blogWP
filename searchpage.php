<?php
global $query_string;

$query_args = explode("&", $query_string);
$search_query = array();

foreach($query_args as $key => $string) {
	$query_split = explode("=", $string);
	$search_query[$query_split[0]] = urldecode($query_split[1]);
} // foreach

$search = new WP_Query($search_query);
?>

<?php
/*
Template Name: Página de Busca
*/
?>

<?php get_header(); ?>
</div>
</div>
<div id="separador-art">
	<h1>BUSCA DE POSTS</h1>
</div>

<div class="corpo">
	<div class="conteudo">
	
		 
<?php get_footer(); ?>
