<?php

// Template name: Contato

 get_header();

?>
   <!-- INICIO FALE CONOSCO -->

   <?php
	   $page_contato = get_page_by_path('contato');
	   $page_contato->meta = (object) array(
	   		'title_one' => get_field('title_one_contact', $page_contato->ID),
	   		'sub_title_one' => get_field('sub_title_one_contact', $page_contato->ID),
	   		'description_form' => get_field('description_form_contact', $page_contato->ID),
	   		'img_contact' => get_field('img_top_contact', $page_contato->ID)
	   	);
   ?>

<div class='wrapper-header  background-duvidas wrapper-contact'>

			<div class='container'>

				   <div class='background-img'>
						<img class='position-img' src='<?php echo $page_contato->meta->img_contact['url']; ?>' />
				</div>				

				<div class='row row-header'>

					<div class='col-md-4 colmd4-space'>
							<h1 class='title_principal text_duvida'><?php echo $page_contato->meta->title_one; ?> <br> <span class='title_principal bold'> <?php echo $page_contato->meta->sub_title_one; ?>  <span> </h1>
							<p class='text_topic'> <?php echo $page_contato->meta->description_form; ?>  </p>
							<form class='form-horizontal' role='form'>
									<div class='line'>
										<div class='box'>
											<input type='text' class='form-control input_size' name='nome' placeholder='Nome completo'>
										</div>
									</div>
									<div class='line'>
										<div class='box'>
											<input type='text' class='form-control input_size' name='cpf' placeholder='E-mail'>
										</div>
									</div>
									<div class='line'>
										
										<div class='box box-halfsize-duvidas'>
											<select class='form-control'>
												<option>Departamento</option>
											</select>
										</div>
									</div>

									<div class='line'>
										<div class='box'>
											<textarea class='form-control' rows='3' placeholder='Mensagem'></textarea>
										</div>
									</div>
								<button type='button' class='btn bt-continue'>Enviar</button>
							</form>
					
					</div>
					
			    </div>
			    
			 
			</div> <!-- FIM CONTAINER -->
		
		</div> <!-- FIM WRAPPER -->

		<!-- INICIO COMO FUNCIONA -->
		<div class="wrapper-steps">
		<div class="container container-function">
			<div class='row'>
				<h2 class="col-md-12 title">Como funciona</h2>
			</div>
			<div class="row">
				<div class="col-md-4 step even">
					<div class="image"><img src='<?php echo get_stylesheet_directory_uri() ?>/img/preencha_dados.png'></div>
					<h3 class="title">Preencha os dados</h3>
					<div class="text">Preencha o formul&aacute;rio de solicitação do seguro com os dados do estagi&aacute;rio</div>
				</div>

				<div class="col-md-4 step odd">
					<div class="image"><img src='<?php echo get_stylesheet_directory_uri() ?>/img/pagamento.png'></div>
					<h3 class="title">Efetue o Pagamento</h3>
					<div class="text">Preencha o formul&aacute;rio de solicitação do seguro com os dados do estagi&aacute;rio</div>					
				</div>

				<div class="col-md-4 step even">
					<div class="image"><img src='<?php echo get_stylesheet_directory_uri() ?>/img/certificado.png'></div>
					<h3 class="title">Receba seu Certificado</h3>
					<div class="text">Após a confirmação do pagamento,receba,por e-mail,o certificado do seu segurado.</div>
				</div>
			</div>
		</div>
		</div>
		<!-- FIM COMO FUNCIONA-->

		<!-- INICIO NOSSOS CLIENTES -->
		<div class='wrapper-parceiros'>
			<div class='container container-contact'>
				<div class='row'>
					<div class='col-md-12'>
					<h2 class="title-h2">Nossos clientes</h2>
						<ul class="jcarousel">
							<?php if(get_field('img_parceiros')): ?>
								<?php while(has_sub_field('img_parceiros')): ?>
								<li class='item'>
									<a href='#'><img src="<?php the_sub_field('image'); ?>" alt="<?php the_sub_field('text_alt'); ?>"/></a>
								</li>
								<?php endwhile; ?>
							<?php endif; ?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
	
<?php get_footer();