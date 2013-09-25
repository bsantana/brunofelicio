<?php

// Template name: Sobre

 get_header();

?>

   <?php
	   $page_sobre = get_page_by_path('sobre');
	   $page_sobre->meta = (object) array(
	   		'titlesobre' => get_field('title_sobre', $page_sobre->ID),
	   		'descriptionsobre' => get_field('description_sobre', $page_sobre->ID),
	   		'textsobre' => get_field('content_sobre', $page_sobre->ID),
	   	);
   ?>

	<div class='wrapper-header_sobre'>
			<div class='container background_container'>
				<div class='row row-header'>
					<div class='col-md-5 space-md5-somos'>
						<h1 class='title_principal'><?php echo $page_sobre->meta->titlesobre; ?></h1>
						<p class='text_topic'> <?php echo $page_sobre->meta->descriptionsobre; ?></p>
					</div>

					<div class='background-img-sobre'>
						<img class='position-img-sobre' src='<?php echo get_stylesheet_directory_uri() ?>/img/men-quem-somos.png' />
					</div>
				</div>
			</div>
	</div>

	<div class='wrapper-text'>
		<div class='container background-container'>
			<div class='row'>
				<div class='col-md-6 space-md5-quem'>
					<p class='text_photo'><?php echo $page_sobre->meta->textsobre; ?></p>
				</div>
				
				<div class="image_quem_somos">
					<img src='<?php echo get_stylesheet_directory_uri() ?>/img/foto_dulpa.png'>
				</div>
			</div>
		</div>
	</div>

	<!-- INICIO COMO FUNCIONA -->
		<div class="wrapper-steps wrapper-border">
			<div class="container container-function">
				<div class='row'>
				 	<div class='hr'></div>
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


           		 <div class="image_carousel">
							<div id="foo2">
									<?php if(get_field('img_parceiros')): ?>
									<?php while(has_sub_field('img_parceiros')): ?>
										<img src="<?php the_sub_field('image'); ?>" alt="<?php the_sub_field('text_alt'); ?>" width="100" height="100" />
									<?php endwhile; ?>
 								<?php endif; ?>
								
								
							</div>
							<div class="clearfix"></div>
				<a class="prev" id="foo2_prev" href="#"><span>prev</span></a>
				<a class="next" id="foo2_next" href="#"><span>next</span></a>
				
			</div>

			</div>

           	   
			</div> 

			</div>
          </div>
        </div>
    	</div>
		</div>

		<!-- INICIO FOTTER CONTACT -->

		<div class='wrapper-footer'>
            
            <div class='container'>
                <div class='row row-footer'>
                    <div class='hr'></div>
                    <div class='col-md-12 space-footer'>
                        <p class='text-opensans'>Copyright 2013 - Todos os direitos reservados</p>
                    </div>
                 
                </div>
            </div>
        </div>

		
        


</body>
</html>