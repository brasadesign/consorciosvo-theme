<?php
/**
 * The template for displaying all bibliotecas pages.
 *
 * * Template Name: O que é
 *
 * @package Odin
 * @since 2.2.0
 */

get_header(); ?>
	<div class="col-md-11 esquerda"><!--esquerda-->
				<?php
								// Start the Loop.
								while ( have_posts() ) : the_post();

									// Include the page content template.
									get_template_part( 'content', 'page' );

									// If comments are open or we have at least one comment, load up the comment template.
									if ( comments_open() || get_comments_number() ) :
										comments_template();
									endif;
								endwhile;
							?>
	</div>
	

</div><!--row principal-->
</div><!--container pagina-->

<?php
get_footer();
