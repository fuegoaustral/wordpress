<?php get_header(); ?>

<div class="whatis">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-10">
				<p>Fuego Austral es una comunidad que se reúne con el objetivo de crear una ciudad temporal, dedicada a la comunidad, el arte, la auto-expresión radical y la auto-suficiencia radical.</p>
			</div>
		</div>
	</div>
</div>

<div class="principles py-md-3">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-10">
				<h2><a href="/el-evento/10-principios/">10 Principios</a></h2>

				<p>Fuego Austral es el evento regional de  Burning Man en América Latina y como tal, está inspirado en los mismos 10 principios. Para nosotros son una fuente de inspiración y definen cómo nos organizamos y participamos de este experimento de co-creación. Son enunciados no para dictar cómo deberíamos ser o actuar, sino como un reflejo de la cultura y hábitos de quienes participamos.</p>

				<ul class="mb-4">
					<li>
						<img src="<?php echo get_template_directory_uri(); ?>/img/principles/inclusion-radical.svg" alt="" width="50">
						Inclusión Radical
					</li>
					<li>
						<img src="<?php echo get_template_directory_uri(); ?>/img/principles/economia-del-regalo.svg" alt="" width="50">
						Economía del Regalo
					</li>
					<li>
						<img src="<?php echo get_template_directory_uri(); ?>/img/principles/expresion-radical.svg" alt="" width="50">
						Expresión Radical
						</li>
					<li>
						<img src="<?php echo get_template_directory_uri(); ?>/img/principles/autosuficiencia-radical.svg" alt="" width="50">
						Autosuficiencia Radical
					</li>
					<li>
						<img src="<?php echo get_template_directory_uri(); ?>/img/principles/responsabilidad-civica.svg" alt="" width="50">
						Responsabilidad Cívica
					</li>
					<li>
						<img src="<?php echo get_template_directory_uri(); ?>/img/principles/desmercantilizacion.svg" alt="" width="50">
						Desmercantilización
					</li>
					<li>
						<img src="<?php echo get_template_directory_uri(); ?>/img/principles/esfuerzo-comunal.svg" alt="" width="50">
						Esfuerzo Comunal
					</li>
					<li>
						<img src="<?php echo get_template_directory_uri(); ?>/img/principles/no-dejar-rastro.svg" alt="" width="50">
						No Dejar Rastro
					</li>
					<li>
						<img src="<?php echo get_template_directory_uri(); ?>/img/principles/participacion.svg" alt="" width="50">
						Participación
					</li>
					<li>
						<img src="<?php echo get_template_directory_uri(); ?>/img/principles/inmediatez.svg" alt="" width="50">
						Inmediatez
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>

<div class="current-edition">
	<div class="container">
		<div class="card">
			<div class="card-body">
				<div class="row">
					<div class="col-md-7">
						<h2><?php echo get_theme_mod( 'fuegoaustral_current_event_title' ); ?></h2>
						<h3><?php echo get_theme_mod( 'fuegoaustral_current_event_date' ); ?></h3>
						<p>
							<?php echo str_replace(
								"\n\n", '</p><p>',
								get_theme_mod( 'fuegoaustral_current_event_description' ) ); ?>
						</p>
					</div>
					<div class="col-md-5 d-none d-md-block">
						<img src="<?php echo wp_get_attachment_image_src( get_theme_mod( 'fuegoaustral_current_event_image' ), 'full' )[0]; ?>" alt="" width="100%">
					</div>
				</div>
			</div>
			<div class="card-body card-actions">
				<a class="btn btn-primary d-block d-md-inline-block" href="/bono-contribucion/">Comprar Bono Contribución de Ingreso</a>
				<a class="btn btn-default d-block d-md-inline-block mt-2 mt-md-0 ml-md-2" href="/el-evento/">Más información</a>
			</div>
		</div>
	</div>

	<div class="container no-spectators pb-3 pt-5">
		<h2 class="mt-md-5 pt-md-5"><a href="/participar/">Espectadores, ¡no!</a></h2>

		<p class="lead">A Fuego Austral lo construímos entre todos, todo lo que sucede en Fuego Austral está hecho por gente como vos, por nosotros, desde el proceso de creación hasta el armado de infraestructuras, campamentos, obras de arte y luego el desarmado de la ciudad para que todo quede como si no hubiésemos estado ahí (no dejar rastro). Todos podemos ser voluntarios y cuantos más seamos mejor va a ser nuestra ciudad temporal.</p>

		<div class="row pt-md-5">
			<div class="col-md">
				<h3><a href="/participar/voluntarios/">Voluntarios</a></h3>
				<p><?php echo get_the_excerpt( 8 ); ?></p>
			</div>
			<div class="col-md">
				<h3><a href="/participar/campamentos/">Campamentos</a></h3>
				<p><?php echo get_the_excerpt( 41 ); ?></p>
			</div>
			<div class="col-md">
				<h3><a href="/participar/arte/">Arte</a></h3>
				<p><?php echo get_the_excerpt( 43 ); ?></p>
			</div>
		</div>
	</div>
</div><!-- .current-edition -->

<?php
get_footer();
