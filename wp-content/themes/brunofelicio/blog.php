<?php // Template name: blog

 get_header(); ?>
 		<div class='background-blog'>
		<div class='wrapper wrapper-blog'>
    	<div class='container'>
    		<div class='row row-md-blog'>
				<div class='col-md-6 col-md-blog'>
					<h1>Blog</h1>
					<p>Mini intro com algum comentário interessante sobre
					quem somos. Bla bla blá wiskas sachê.</p>
				</div>
				<div class='col-md-6 man-blog'>
				</div>
			</div>
    	</div>
		</div>

		<div class='wrapper wrapper--blog'>
    	<div class='container'>
    		<div class='row'>
				<div class='col-md-8 col-md-blog-h2'>
  		   		<?php
  		   		$args = array('post_type' => 'post');
				$the_query = new WP_Query( $args );
  		   		if ( $the_query->have_posts() ) {while ( $the_query->have_posts() ) {	$the_query->the_post(); ?>
					<h2><?php the_title();?></h2>
					<div class='list-param'>
						<ul>
							<li><p><?php the_time('j \d\e F \d\e Y ');?></p></li>
							<li><p class='list-param-vertical list-param-pp'><?php wp_count_comments(); ?> comentário(s)</p></li>
							<li><p class='list-param-pp'><?php the_category(); ?></p></li>
						</ul>
					</div>
					<div class='box-blue'>
						<?php if ( has_post_thumbnail() ) {
							the_post_thumbnail();?>
								<div class='box-blue-down'><p><small><?php echo get_post(get_post_thumbnail_id())->post_excerpt; ?></small></p></div>
						<?php }?> 
					</div>
					<p><?php the_content();?></p>

					<div class='feed-news'>
						<p class='reading-p'><a href="<?php the_permalink() ?>" class="readMore">Continue lendo</a></p>
						<p class='three-coment'><?php wp_count_comments(); ?> comentário(s)</p>
						<a href="http://twitter.com/share" class="twitter-share-button" data-count="horizontal" data-via="SeuTwitter" rel="nofollow">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
						<g:plusone size="small"></g:plusone>
						<iframe src="//www.facebook.com/plugins/like.php?href=<?php echo urlencode(get_permalink($post->ID)); ?>&amp;width=100&amp;height=21&amp;colorscheme=light&amp;layout=button_count&amp;action=like&amp;show_faces=false&amp;send=false" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:100px; height:21px;" allowTransparency="true"></iframe>
					</div>
				<?php } // end while
	} // end if
	wp_reset_query();
?>
					<div class='anchor-number'>
						<?php if (function_exists('wp_pagenavi')) {
							wp_pagenavi();
						}
						?>
					</div>
					<div class='wrapper-steps-blog'></div>

				</div>
				<div class='col-md-4 col-md-blog-right'>
					<p class='search-blog-p'>Buscar</p>
					<form class="form-horizontal" role="form">
						<div class='line'>
							<div class='box'>
								<input type="text" class="form-control form-control_blog" name='nome' placeholder='Digite o que procura'>
							</div>
						</div>
						<div class='line'>
							<div class='box'>
								<input class="lens" type="image" name='' src='<?php echo get_stylesheet_directory_uri() ?>/img/lens-search.png'>
								
							</div>
						</div>
					</form>
					<div class='box-edit'>
						<div class='box-edit-center'>
							<div class='box-edit-h3'>
								<h3>Navege por categoria</h3>
								<p>Categoria 1</p>
								<p>Categoria 2</p>
								<p>Categoria 3</p>
								<p>Categoria 4</p>
								<p>Categoria 5</p>
								<p>Categoria 6</p>
								<p>Categoria 7</p>
							</div>
							<div class='box-edit-h3'>
								<h3>Últimas postagens</h3>
								
								<div class='last-post'>
									<div class='box-edit-box'></div>
									<div class='box-edit-p'><p>Ao ser contratado, o empregado deve apresentar quais documentos?</p></div>
							
									<div class='box-edit-box'></div>
									<div class='box-edit-p'><p>Ao ser contratado, o empregado deve apresentar quais documentos?</p></div>
							
									<div class='box-edit-box'></div>
									<div class='box-edit-p'><p>Ao ser contratado, o empregado deve apresentar quais documentos?</p></div>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
    	</div>
		</div>

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

		<div class='wrapper-parceiros'>
			
    	<div class='container container-parceiros'>
       	<div class='row row-seguro-estagio'>
         	<div class='col-md-6'>
           	<h2 class='title-h2'>Sobre o seguro estagio</h2>
           	<p class="text-background">O <strong>Seguro de Estágio</strong> é uma exigência determinada pela <strong class='strong-blue'>Lei 11.788</strong> e estabelece
           	que todo estágiario deve estar assegurado por uma apólice de seguros contra
           	aceidentes pessoais. A contratação do seguro estagiário é <strong>obrigatória</strong> e de total
           	responsabilidade da empresa.</p>
         	</div>
         	
        	<div class='col-md-6'>
           	<h2 class="title-h2">Parceiros</h2>
          	<div class="image_carousel img img-1">
							<div id="foo2">
								<img src="<?php echo get_stylesheet_directory_uri() ?>/img/img1.png" alt="basketball" width="100" height="100" />
								<img src="<?php echo get_stylesheet_directory_uri() ?>/img/img2.png" alt="beachtree" width="100" height="100" />
								<img src="<?php echo get_stylesheet_directory_uri() ?>/img/img3.png" alt="cupcackes" width="100" height="100" />

								<img src="<?php echo get_stylesheet_directory_uri() ?>/img/img2.png" alt="beachtree" width="100" height="100" />
								<img src="<?php echo get_stylesheet_directory_uri() ?>/img/img3.png" alt="cupcackes" width="100" height="100" />
								<img src="<?php echo get_stylesheet_directory_uri() ?>/img/img1.png" alt="basketball" width="100" height="100" />

								<img src="<?php echo get_stylesheet_directory_uri() ?>/img/img3.png" alt="cupcackes" width="100" height="100" />
								<img src="<?php echo get_stylesheet_directory_uri() ?>/img/img1.png" alt="basketball" width="100" height="100" />
								<img src="<?php echo get_stylesheet_directory_uri() ?>/img/img2.png" alt="beachtree" width="100" height="100" />
								
								
							</div>
							<div class="clearfix"></div>
				<a class="prev" id="foo2_prev" href="#"><span>prev</span></a>
				<a class="next" id="foo2_next" href="#"><span>next</span></a>
				
				</div>
          </div>
        </div>
    	</div>
		</div>

<?php get_footer();
