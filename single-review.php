<?php
/*

Template Name Posts: Review

*/
?>
<?php get_header( 'post' ); ?>
	
<div class="corpo" style="padding-top:70px; width:960px;">
	<div class="conteudo" style="width:640px; background-color:#FFFFFF; border:1px solid #E6E6E6;">
	<?php if ( has_post_thumbnail()) the_post_thumbnail('imagem-post'); ?>	
	
		<div class="artigos" style="padding-top:0; margin-top:10px;">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="artigo">
            <h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
            <h5>Por <?php the_author_posts_link(); ?> | <img alt="Data da publicação" src="<?php bloginfo('template_directory'); ?>/img/relogio_icone.png" title="Data da Publicação" /> <?php the_time('d/m/Y') ?> | <img alt="Número de Comentários" src="<?php bloginfo('template_directory'); ?>/img/comentario_icone.png" title="Número de Comentários" /> <?php disqus_count('aethercentral'); ?> <?php edit_post_link('(Editar este post)'); ?></h5>
            <p><?php the_content(); ?></p>
		</div>
		<div class="review">
			<div class="container-review">
				<div class="container-nota">
					<div class="nota">
					<p><?php meta('nota'); ?></p>
					<img src="<?php bloginfo('template_directory'); ?>/img/nota_icone.png" alt="Nota" />
					</div>
				</div>
				<br>
				<div class="separador-review"></div>
				<br>
				<div class="container-resumo">
					<div class="resumo">
						<h1><?php meta('avaliacao'); ?></h1>
						<p><?php meta('resumo'); ?></p>
					</div>
				</div>
			</div>
		</div>
		<br>
		<h2 style="margin-left:20px; font-size:18px; font-weight:600; color:#002144;">Gostou do post? Que tal deixar um comentário?</h2>
		<br>
		<?php comments_template(); ?>
		</div>
	  <?php endwhile; else: ?>
	  
      <?php endif; ?>
	</div>
	<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>