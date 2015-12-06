<?php
// Do not delete these lines
    if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
        die (esc_html__('Please do not load this page directly. Thanks!','Polished'));
 
    if ( post_password_required() ) { ?>
 
<p class="nocomments"><?php esc_html_e('Opa, esse post é protegido por uma senha super-secreta. Insira-a para ter acesso aos comentários!','Polished') ?></p>
<div id="comments">  
    <?php if ( post_password_required() ) : ?>  
        <p class="nopassword"><?php _e( 'Opa, esse post é protegido por uma senha super-secreta. Insira-a para ter acesso aos comentários!', 'twentyten' ); ?></p>  
        </div>  
        <?php return; ?>  
    <?php endif; ?>  
  
    <?php if ( comments_open() ) : ?>  
        
    <?php endif; ?>  
  
    <?php if ( ! comments_open() ) : ?>  
        <p><?php _e( 'Vish, os comentários para esse post foram fechados. Desculpe-nos!', 'twentyten' ); ?></p>  
    <?php endif; ?>  
</div> 