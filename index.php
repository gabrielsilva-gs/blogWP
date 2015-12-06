<?php get_header(); ?>
	<div class="conteudo">	
		<div class="destaques">
		
		</div>
		<div class="anuncio1">
			<img src="<?php bloginfo('template_directory'); ?>/img/anuncio1.png">
		</div>
		<div class="artigos">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="artigo">
					<h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
                  				<p><?php the_content('<span class="moretext">Continue lendo!</span>'); ?></p>
                    				<center><p class="post-info"><?php the_time('d/m/Y') ?> | <?php comments_popup_link('sdds comentários', '1 comentário', '% comentários', 'comments-link', ''); ?><?php edit_post_link(' (Editar)'); ?></p></center>
				</div>
			<?php endwhile?>
 
			<?php else: ?>

			<?php endif; ?>

		</div>

<?php get_footer(); ?>