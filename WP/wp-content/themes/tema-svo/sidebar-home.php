<?php
/**sidebar-home
 *
 * @package Odin
 * @since 2.2.0
 */
?>
<div id="secondary" class="aside col-md-4 sidebar direita " role="complementary">
					<section id="pagina-home" class="modulo-sidebar">
						<?php get_template_part("loop", "sidebar")?>
					</section>
					<?php global $odin_general_opts;
					if (isset($odin_general_opts['mostra-evento'])):
						?>
					<section id="noticias-home" class="modulo-sidebar">
						<?php get_template_part("loop", "agenda")?>
					</section>
					<?php endif;?>
					<!-- <section id="participe" class="modulo-sidebar">
											<h2>Participe</h2>
											<div id="contatos"><img src="<?php echo get_stylesheet_directory_uri().'/assets/images/face.png'?>"><img src="<?php echo get_stylesheet_directory_uri().'/assets/images/email.png'?>"><img src="<?php echo get_stylesheet_directory_uri().'/assets/images/skype.png'?>"></div>
											<div class="clearfix"></div>
											<form>
											    <div class="form-group">
											        <label for="inputEmail">Email</label>
											        <input type="email" class="form-control" id="inputEmail" placeholder="Email">
											    </div>
											    <div class="form-group">
											        <label for="inputText">Mensagem</label>
											        <textarea type="text" class="form-control" id="inputText" placeholder="Mensagem"></textarea>
											    </div>
											    <div class="checkbox">
											        <label><input type="checkbox"> Desejo receber atualizações</label>
											    </div>
											    <button type="submit" class="btn btn-primary">Enviar</button>
											</form>
										</section> -->
</div><!-- #secondary -->