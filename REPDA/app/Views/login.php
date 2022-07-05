<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Consulta REPDA | Acceder</title>
	<meta name="description" content="Un pequeño sistema deconsultas y registros">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/png" href="/drop.ico"/>

	<!-- STYLES -->

	<style {csp-style-nonce}>
		* {
			transition: background-color 300ms ease, color 300ms ease;
		}
		*:focus {
			background-color: rgba(135,215,253,.2);
			outline: none;
		}
		html, body {
			color: rgba(33, 37, 41, 1);
			font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji";
			font-size: 16px;
			margin: 0;
			padding: 0;
			-webkit-font-smoothing: antialiased;
			-moz-osx-font-smoothing: grayscale;
			text-rendering: optimizeLegibility;
		}
		header {
			background-color: rgba(247, 248, 249, 1);
			padding: .4rem 0 0;
		}
		.menu {
			padding: .4rem 2rem;
		}
		header ul {
			border-bottom: 1px solid rgba(242, 242, 242, 1);
			list-style-type: none;
			margin: 0;
			overflow: hidden;
			padding: 0;
			text-align: right;
		}
		header li {
			display: inline-block;
		}
		header li a {
			border-radius: 5px;
			color: rgba(0, 0, 0, .5);
			display: block;
			height: 44px;
			text-decoration: none;
		}
		header li.menu-item a {
			border-radius: 5px;
			margin: 5px 0;
			height: 38px;
			line-height: 36px;
			padding: .4rem .65rem;
			text-align: center;
		}
		header li.menu-item a:hover,
		header li.menu-item a:focus {
			background-color: rgba(135, 215, 253, 1);
			color: rgba(4, 138, 232, 1);
		}
		header .logo {
			float: left;
			height: 44px;
			padding: .4rem .5rem;
		}
		header .menu-toggle {
			display: none;
			float: right;
			font-size: 2rem;
			font-weight: bold;
		}
		header .menu-toggle button {
			background-color: rgba(60, 190, 252, 1);
			border: none;
			border-radius: 3px;
			color: rgba(255, 255, 255, 1);
			cursor: pointer;
			font: inherit;
			font-size: 1.3rem;
			height: 36px;
			padding: 0;
			margin: 11px 0;
			overflow: visible;
			width: 40px;
		}
		header .menu-toggle button:hover,
		header .menu-toggle button:focus {
			background-color: rgba(135,215,253,.8);
			color: rgba(255, 255, 255, .8);
		}
		header .heroe {
			margin: 0 auto;
			max-width: 1100px;
			padding: 1rem 1.75rem 1.75rem 1.75rem;
		}
		header .heroe h1 {
			font-size: 2.5rem;
			font-weight: 500;
		}
		header .heroe h2 {
			font-size: 1.5rem;
			font-weight: 300;
		}
		section {
			margin: 0 auto;
			max-width: 1100px;
			padding: 2.5rem 1.75rem 3.5rem 1.75rem;
		}
		section h1 {
			margin-bottom: 2.5rem;
		}
		section h2 {
			font-size: 120%;
			line-height: 2.5rem;
			padding-top: 1.5rem;
		}
		section pre {
			background-color: rgba(247, 248, 249, 1);
			border: 1px solid rgba(242, 242, 242, 1);
			display: block;
			font-size: .9rem;
			margin: 2rem 0;
			padding: 1rem 1.5rem;
			white-space: pre-wrap;
			word-break: break-all;
		}
		section code {
			display: block;
		}
		section a {
			color: rgb(10,173,251);
		}
		section svg {
			margin-bottom: -5px;
			margin-right: 5px;
			width: 25px;
		}
		.further {
			background-color: rgba(247, 248, 249, 1);
			border-bottom: 1px solid rgba(242, 242, 242, 1);
			border-top: 1px solid rgba(242, 242, 242, 1);
		}
		.further h2:first-of-type {
			padding-top: 0;
		}
		footer {
			background-color: rgba(60, 190, 252, .5);
			text-align: center;
		}
		footer .environment {
			color: rgba(15, 15, 15, 1);
			padding: 2rem 1.75rem;
		}
		footer .copyrights {
			background-color: rgba(110,207,253,1);
			color: rgba(20, 20, 20, 1);
			padding: .25rem 1.75rem;
		}
		@media (max-width: 629px) {
			header ul {
				padding: 0;
			}
			header .menu-toggle {
				padding: 0 1rem;
			}
			header .menu-item {
				background-color: rgba(60, 190, 252, 1);
				border-top: 1px solid rgba(242, 242, 242, 1);
				margin: 0 15px;
				width: calc(100% - 30px);
			}
			header .menu-toggle {
				display: block;
			}
			header .hidden {
				display: none;
			}
			header li.menu-item a {
				background-color: rgba(60, 190, 252, 1);
			}
			header li.menu-item a:hover,
			header li.menu-item a:focus {
				background-color: rgba(60, 190, 252, 1);
				color: rgba(255, 255, 255, .8);
			}
		}
		.column {
		  float: left;
		  width: 320px;
		  display: table-column;
		  column-fill: auto;
		  margin: 15px;
		  align-content: center;
		}
		.row:after {
		  content: "";
		  display: table;
		  clear: both;
		}
	</style>
	<style type="text/css">
	.tg  {border-collapse:collapse;border-spacing:0;}
	.tg td{border-bottom-width:1px;border-color:black;border-style:solid;border-top-width:1px;border-width:0px;
	  font-family:Arial, sans-serif;font-size:14px;overflow:hidden;padding:10px 5px;word-break:normal;}
	.tg th{border-bottom-width:1px;border-color:black;border-style:solid;border-top-width:1px;border-width:0px;
	  font-family:Arial, sans-serif;font-size:14px;font-weight:normal;overflow:hidden;padding:10px 5px;word-break:normal;}
	.tg .tg-z1fk{border-color:inherit;font-weight:bold;text-align:left;vertical-align:top}
	.tg .tg-thvl{background-color:#6ecffd;border-color:inherit;text-align:left;vertical-align:top}
	.tg .tg-pe50{background-color:#6ecffd;border-color:inherit;text-align:left;vertical-align:top}
	.tg .tg-6qv3{background-color:#6ecffd;border-color:inherit;font-weight:bold;text-align:left;vertical-align:top}
	.tg .tg-yiby{background-color:#6ecffd;border-color:inherit;font-weight:bold;text-align:left;vertical-align:top}
	.tg .tg-0pky{border-color:inherit;text-align:left;vertical-align:top}
	.tg .tg-pcvp{border-color:inherit;text-align:left;vertical-align:top}
	</style>
</head>
<body>

<!-- HEADER: MENU + HEROE SECTION -->
<header>

	<div class="menu">
		<ul>
			<li class="logo"><a href="https://sina.conagua.gob.mx/sina/" target="_blank"><img height="44" title="Logo Conagua"alt="Visit CodeIgniter.com official website!"
			src="http://sina.conagua.gob.mx/sina/images/Logo-Conagua_Horizontal_fondo-trasparente.png"></a>
			</li>
			<li class="menu-toggle">
				<button onclick="toggleMenu();">&#9776;</button>
			</li>
			<li class="menu-item hidden">
				<a href="http://localhost/BDA2022/REPDA/index.php/Home/index">
				Inicio
			</a>
			</li>
			<li class="menu-item hidden">
				<a href="http://localhost/BDA2022/REPDA/index.php/MainViews/consult">
				Consulta
				</a>
			</li>
			<li class="menu-item hidden">
				<a href="#" >
				Acceder
				</a>
			</li>
		</ul>
	</div>
	<div class="heroe">
		<h1>Bienvenidx</h1>
		En este apartado podrás ingresar a tu cuenta para comenzar a realizar altas, bajas y modificaciones con relación a las concesiones.
	</div>

</header>

<!-- CONTENT -->

<section>
	<h2>Inicio de sesión</h2>
	Ingresa tus datos para continuar
	<?php  

	if ($mensaje!=""){
		echo "<h4 style='color:#cd2626'>$mensaje </h4>";
	}
	?>
	<form method="post" action="http://localhost/BDA2022/REPDA/index.php/Funcionario/index">
		<h4>Usuario</h4> <input type="text" name="usuario" required>
		<h4>Contraseña</h4> <input type="password" name="contrasenia" required> <br><br>
		<input type="submit" name="send" value="Ingresar" style="background-color: rgb(110,207,253); font-size: 16px; border-radius: 12px; border-style: groove;">
	</form>

</section>

<!-- FOOTER: DEBUG INFO + COPYRIGHTS -->

<footer>
	<div class="copyrights">

		<p>
			&copy; <?= date('Y') ?> Jazmín López Chacón.
			Escuela Nacional de Estudios Superiores, Unidad Morelia <br>
			Hecho con amor &#128420;
		</p>

	</div>

</footer>

<!-- SCRIPTS -->

<script>
	function toggleMenu() {
		var menuItems = document.getElementsByClassName('menu-item');
		for (var i = 0; i < menuItems.length; i++) {
			var menuItem = menuItems[i];
			menuItem.classList.toggle("hidden");
		}
	}
</script>

<!-- -->

</body>
</html>
