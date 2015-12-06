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
<div class="separador-art">
	<h1>BUSCA DE POSTS</h1>
</div>

<div class="corpo">
	<div class="conteudo">
		<div class="artigos">
			<div class="artigo" style="margin-left:76px; width:750px;">            
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<h1 class="post-title" style="margin-top:20px">
				<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					</h1>
					<h5>Por <?php the_author_posts_link(); ?> | <img alt="Data da publicação" src="<?php bloginfo('template_directory'); ?>/img/relogio_icone.png" /> <?php the_time('d/m/Y') ?> | <img alt="Número de Comentários" src="<?php bloginfo('template_directory'); ?>/img/comentario_icone.png" /> <?php disqus_count('aethercentral'); ?></h5>
					<p><?php the_content('<span class="moretext">Continue lendo!</span>'); ?></p>
				<?php endwhile; else: ?>
				
				<div class="entry"><h1 style="font-size:18px; text-align:center; margin-top:20px;"><?php _e('Ooops, sua pesquisa não retornou resultado algum. Que tal usar palavras-chave diferentes e ver se funfa?'); ?></h1></div>
				<?php endif; ?>  
			</div>
		</div>
 
<?php get_footer(); ?>