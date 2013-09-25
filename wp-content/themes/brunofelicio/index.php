<?php

get_header();

?>


<div class='wrapper-header'>

			<div class='container container-header'>

				<div class='row row-header'>

					<div class='col-md-5 col-md5-header'>

						<h1 class='title_principal'><?php the_field('subtitle'); ?> <br> <span class='title_principal bold'> em apenas 2 minutos  <span> </h1>

							<p class='text_topic'> <?php the_field('description'); ?> </p>

						<form class="form-horizontal" role="form">
								<div class='line'>
									<div class='box'>
										<input type="text" class="form-control input_size" name='nome' placeholder="Nome completo">
									</div>
								</div>
								<div class='line'>
									<div class='box'>
										<input type="text" class="form-control input_size" name='cpf' placeholder="CPF">
									</div>
								</div>
								<div class='line'>
									<div class='box box-halfsize'>
										<input type="text" class="form-control " name='nascimento' placeholder="Data de Nascimento">
									</div>
									<div class='box box-halfsize'>
										<select class="form-control">
											<option>Estado civil</option>
										</select>
									</div>
								</div>

							<button type="button" class="btn bt-continue">continuar</button>
				
						</form>

					</div>

						

				</div> 

			</div> <!-- FIM CONTAINER -->
		</div> <!-- FIM WRAPPER -->



		<!-- INICIO COMO FUNCIONA -->
		<div class='wrapper-steps'>
		<div class='container container-function'>
			<div class='row'>
				<h2 class='col-md-12 title'><?php the_field('subtitle-step'); ?></h2> 
			</div>
			<div class='row steps'>
				<div class='col-md-4 step even'>
					<div class='animate'>
						<div class='image'><img src='<?php echo get_stylesheet_directory_uri() ?>/img/preencha_dados.png'></div> 					
						<h3 class='title'><?php the_field('title_one_function'); ?></h3>
						<div class='text'><?php the_field('texto_one'); ?></div>
					</div>
				</div>

				<div class='col-md-4 step odd'>
					<div class='animate'>
						<div class='image'><img src='<?php echo get_stylesheet_directory_uri() ?>/img/pagamento.png'></div>
						<h3 class='title'><?php the_field('title_two_function'); ?></h3>
						<div class='text'><?php the_field('texto_two'); ?></div>					
					</div>
				</div>

				<div class='col-md-4 step even'>
					<div class='animate'>
						<div class='image'><img src='<?php echo get_stylesheet_directory_uri() ?>/img/certificado.png'></div>
						<h3 class='title'><?php the_field('title_three'); ?></h3>
						<div class='text'><?php the_field('texto_three'); ?></div>
					</div>
				</div>
			</div>
		</div>
		</div>
		<!-- FIM COMO FUNCIONA-->

		<div class='wrapper-parceiros'>
			
    	<div class='container container-parceiros'>
       	<div class='row'>
         	<div class='col-md-6'>
           	<h2 class='title-h2'><?php the_field('title_subtitle_two'); ?></h2>
           	<p class="text-background"><?php the_field('texto_do_sobre_o_seguro'); ?></div>
         	
         	
        	<div class='col-md-6'>
           	<h2 class="title-h2"><?php the_field('title_parceiro'); ?></h2>
          	<div class='img'>
	      	  	<ul>
	          		<li><img src="<?php echo get_stylesheet_directory_uri() ?>/img/img-left.png" alt="" class="..."></li>
	          		<li><img src="<?php echo get_stylesheet_directory_uri() ?>/img/img1.png" alt="" class="..."></li>
	           		<li><img src="<?php echo get_stylesheet_directory_uri() ?>/img/img2.png" alt="" class="..."></li>
	           		<li><img src="<?php echo get_stylesheet_directory_uri() ?>/img/img3.png" alt="" class="..."></li>
	           		<li><img src="<?php echo get_stylesheet_directory_uri() ?>/img/img-right.png" alt="" class="..."></li>
	           	</ul>
          	</div>
          </div>
        </div>
    	</div>
		</div>

         <?php get_footer(); ?>


