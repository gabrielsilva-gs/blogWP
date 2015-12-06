<?php get_header(); ?>
 </div>
</div>

<div class="separador-art">
	<?php error_reporting(E_ALL ^ E_NOTICE); $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
            <?php /* If this is a category archive */ if (is_category()) { ?>
                <h1>Arquivo da Categoria "<?php echo single_cat_title(); ?>"</h1>
            <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
                <h1>Arquivo de <?php the_time('j \d\e F \d\e Y'); ?></h1>
            <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
                <h1>Arquivo de <?php the_time('F \d\e Y'); ?></h1>
            <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
                <h1>Arquivo de <?php the_time('Y'); ?></h1>
            <?php /* If this is an author archive */ } elseif (is_author()) { ?>
                <h1>Arquivo do Autor</h1>
            <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
                <h1>Arquivo do Blog</h1>
    <?php } ?>		
</div>
	
<div class="corpo">
	<div class="conteudo">
 <div class="artigos">
	
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="artigo" style="margin-left:76px; width:750px;">   
            <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
            <h5>Por <?php the_author_posts_link(); ?> | <img alt="Data da publicaÃ§Ã£o" src="<?php bloginfo('template_directory'); ?>/img/relogio_icone.png" /> <?php the_time('d/m/Y') ?> | <img alt="NÃºmero de ComentÃ¡rios" src="<?php bloginfo('template_directory'); ?>/img/comentario_icone.png" /> <?php disqus_count('aethercentral'); ?> <?php edit_post_link('(Editar este post)'); ?></h5>
            <p><?php the_content('<span class="moretext">Continue lendo!</span>'); ?></p>
		</div>
		
	  <?php endwhile?>
	  
            <?php next_posts_link('<div class="maisposts" style="margin-bottom:0;"><p>Mais Posts</p></div>') ?>	

			<?php previous_posts_link('<div class="maisposts" style="margin-bottom:0;"><p>Voltar aos posts anteriores</p></div>') ?>	
			
      <?php else: ?>
			<div class="artigo" style="margin-left:76px; width:750px;">   
				<h2>Ooops, nada encontrado!</h2>
				<p>Erro 404!</p>
				<p>Infelizmente ainda não há artigos por aqui... ou o nosso webdesigner filho-de-uma-mãe não fez as coisas direito e ferrou com tudo.
				Acreditamos na última possibilidade, mas por ora gostaríamos apenas de nos desculpar pelo inconveniente. Volte em breve!</p>
			</div>    
			
      <?php endif; ?>
			
    </div>
<?php get_footer(); ?>