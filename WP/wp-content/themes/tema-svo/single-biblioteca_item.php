<?php
/**
 * The Template for displaying Itens de biblioteca
 *
 * @package Odin
 * @since 2.2.0
 */

get_header(); ?>
	<div class="col-md-11 esquerda"><!--esquerda-->
			<?php
				// Start the Loop.
				while ( have_posts() ) : the_post();
					/*
					 * Include the post format-specific template for the content. If you want to
					 * use this in a child theme, then include a file called called content-___.php
					 * (where ___ is the post format) and that will be used instead.
					 */
					get_template_part( 'content', '' );
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				endwhile;?>
			</div>
		</div><!--row principal-->
		</div><!--container pagina-->
<?php
get_footer();
