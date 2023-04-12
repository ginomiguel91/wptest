<div class="site-info">

<?php
/*
Template Name: Página HTML inicio
 */
wp_nav_menu( array(
	'theme_location' => 'footer',
	'menu_id' => 'footer-menu',
) );
?>

</div>
<!-- Aqui irá el código HTML -->
<!doctype html>
<html lang="es">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2.0">
<meta name='robots' content='noindex,follow' />

<title>Mi Tienda &#8211; Corporativa</title>

<style id='estilos' type='text/css'>
	body{
		font-family: Helvetica;
	}

	h1{
		text-align: center;
		display: block;
		text-transform: uppercase;
		margin-top:30px;
		font-size: 24px;
	}

	nav {
		margin-top:10px;
		padding-top:20px;
		border-top: 1px dotted #ccc;
	}

	ul{
		text-align: center;
		list-style: none;
		padding:0;
	}

	ul li {
		display: inline-block;
	}

	ul li a{
		border:1px solid #ccc;
		padding:10px;
		text-decoration: none;
		color: black;
		background-color: #f3f3f3;
	}

	ul li a:hover{
		background-color: #a8e1f8;
	}

	section, div.flags{
		text-align: center;
		margin-top:40px;
	}
	hr{
		margin-top:40px;
		border:1px dotted #ccc;
	}

	div.flags img{
		width: 25px;
		margin-left: 4px;
		margin-right: 4px;
	}

    #footer-menu li{
	display:inline-block;
	margin-left:15px;
}

</style>

</head>

<body class="home-static">


<div id="page" class="">
	<header>
		<h1>Mi tienda corporativa</h1>
		<nav>
			<ul>
				<li><a href="#">Tienda</a></li>
				<li><a href="#">Blog</a></li>
				<li><a href="#">Tu cuenta</a></li>
				<li><a href="#">Contacto</a></li>
			</ul>
		</nav>
	</header>

	<section>
		<img src="<?=get_stylesheet_directory_uri()?>/assets-home/img-tienda.png" width=200 />
	</section>

	<div class="flags">
		<img src="<?=get_stylesheet_directory_uri()?>/assets-home/flags/belgica-bandera-200px.jpg" width=20/>
		<img src="<?=get_stylesheet_directory_uri()?>/assets-home/flags/eslovenia-bandera-200px.jpg" width=20/>
		<img src="<?=get_stylesheet_directory_uri()?>/assets-home/flags/espana-bandera-200px.jpg" width=20/>
		<img src="<?=get_stylesheet_directory_uri()?>/assets-home/flags/hungria-bandera-200px.jpg" width=20/>
		<img src="<?=get_stylesheet_directory_uri()?>/assets-home/flags/portugal-bandera-200px.jpg" width=20/>
		<img src="<?=get_stylesheet_directory_uri()?>/assets-home/flags/reino-unido-bandera-200px.jpg" width=20/>
	</div>

	<hr>
</div>

</body>
</html>
