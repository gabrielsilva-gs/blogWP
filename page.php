<?php get_header(); ?>
</div>
</div>
<div class="separador-art">
<h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
</div>

<div class="corpo">
<div class="conteudo">
<div class="artigos">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="artigo" style="margin-left:76px; width:750px;">            
            <p><?php the_content(); ?></p>
		</div>	
	 <?php endwhile; else: ?>
        <div class="artigo" style="margin-left:76px; width:750px;">
			<h2>Ooops, nada encontrado!</h2>
			<p>Erro 404!</p>
			<p>Infelizmente ainda não há artigos por aqui... ou o nosso desenvolvedor filho-de-uma-mãe não fez as coisas direito e ferrou com tudo.
			Acreditamos na última possibilidade, mas por ora gostaríamos apenas de nos desculpar pelo inconveniente. Volte em breve!</p>
		</div>          
      <?php endif; ?>
			
</div>	

<?php get_footer(); ?>