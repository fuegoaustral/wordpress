<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Amatic+SC|Open+Sans:300,400,600&display=swap" rel="stylesheet">
	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon4.png" type="image/png">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="content">

	<header id="masthead" class="site-header <?php if ( is_front_page() ) : echo "hero"; endif; ?>">
		<div class="container">
			<div class="row">
				<div class="col-md-3 site-branding">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
						<img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Fuego Austral" width="140">
					</a>
				</div><!-- .site-branding -->

				<div class="col-md main-navigation-wrap">
					<nav id="site-navigation" class="main-navigation">
						<button class="menu-toggle btn" aria-controls="primary-menu" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<?php
						wp_nav_menu( array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						) );
						?>
					</nav><!-- #site-navigation -->
				</div>
			</div>
		</div>
	</header><!-- #masthead -->

	<div class="site-content">
