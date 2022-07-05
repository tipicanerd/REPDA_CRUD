<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Consulta REPDA | Inicio</title>
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
				<a href="#">
				Inicio
			</a>
			</li>
			<li class="menu-item hidden">
				<a href="http://localhost/BDA2022/REPDA/index.php/MainViews/consult">
				Consulta
				</a>
			</li>
			<li class="menu-item hidden">
				<a href="http://localhost/BDA2022/REPDA/index.php/MainViews/login" >
				Acceder
				</a>
			</li>
		</ul>
	</div>

	<div class="heroe">

		<h1>Bienvenidx</h1>

		<h2>Un pequeño sistema de consultas y registros</h2>

	</div>

</header>

<!-- CONTENT -->

<section>

	<h1>Sobre este proyecto</h1>

	<p>
		La intención deeste proyecto es contar con un sistema de consultas para los
		Registros Públicos de Derechos de Agua.
	</p>

	<p>Los datos fueron capturados el día 22 de mayo de 2022 del portal de datos
	abiertos del gobierno de México, específicmente de este 
	
	<a href="https://datos.gob.mx/busca/dataset/concesiones-asignaciones-permisos-otorgados-y-registros-de-obras-situadas-en-zonas-de-libre-alu" target="_blank">conjunto</a>. Posteriormente se tomó una muestra de 100 anexos de cada tipo para cada estado para hacer el conjutno de datos manejable ante el poder de cómputo disponible.
	</p>

	<p>Así mismo, todo el código para la limpieza de datos puede ser consultado en el 
	siguiente <a href="https://github.com/tipicanerd/REPDA_Limpieza" target="_blank">repositorio</a> de Github.
	</p>

	<p>Los íconos SVG de este proyecto se obtuvieron de esta <a href="https://fontawesomeicons.com/svg/icons">página web</a>.</p>

</section>

<div class="further">

	<section>

		<h1>Documentación</h1>

		<h2>
			<svg style="height: 32px; width: 32px; color: rgb(0, 0, 0);" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16"> <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" fill="#000000"></path> <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" fill="#000000"></path> </svg>
			Información General
		</h2>

		<p>
			<ul>
				<li>La base de datos de inscritos que se publican en la presente página de internet, es con fecha de corte al 31 de enero de 2022.</li>
				<li>Los resultados que se presentan corresponden a la información general que ampara cada título de concesión/asignación y sus bienes públicos inherentes; en este sentido, cabe aclarar que un título de concesión/asignación y sus bienes públicos inherentes, puede contener uno o varios anexos que pueden o no ser del mismo tipo de aprovechamiento.</li>
				<li>Para poder obtener información de los título/constancia se deben especificar los caracteres que integran el número de título/constancia vigente.</li>
				<li>La información contenida en la columna "Autoridad que emite el acto", corresponde a la autoridad administrativa que otorgó o autorizó la más reciente modificación al título de concesión, asignación, permiso o registro de que se trate.</li>
				<li>El dato de Cuenca Hidrológica se presenta con el enfoque adaptativo que permitirá brindar mayor certeza a los usuarios respecto de la ubicación del lugar donde se lleva a cabo la explotación uso o aprovechamiento de las aguas, así como mejorar la administración y gestión de los recursos hídricos, mismo que es utilizado para realizar los cálculos de la disponibilidad media anual de las aguas superficiales.</li>
			</ul>

			Para más información consulte la <a href="https://www.gob.mx/cms/uploads/attachment/file/105137/Ley_Aguas_Nacionales.pdf" target="_blank">Ley de Aguas Nacionales</a>
		</p>

		<h2>
			<svg style="height: 32px; width: 32px; color: rgb(0, 0, 0);" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-diagram-3" viewBox="0 0 16 16"> <path fill-rule="evenodd" d="M6 3.5A1.5 1.5 0 0 1 7.5 2h1A1.5 1.5 0 0 1 10 3.5v1A1.5 1.5 0 0 1 8.5 6v1H14a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-1 0V8h-5v.5a.5.5 0 0 1-1 0V8h-5v.5a.5.5 0 0 1-1 0v-1A.5.5 0 0 1 2 7h5.5V6A1.5 1.5 0 0 1 6 4.5v-1zM8.5 5a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1zM0 11.5A1.5 1.5 0 0 1 1.5 10h1A1.5 1.5 0 0 1 4 11.5v1A1.5 1.5 0 0 1 2.5 14h-1A1.5 1.5 0 0 1 0 12.5v-1zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zm4.5.5A1.5 1.5 0 0 1 7.5 10h1a1.5 1.5 0 0 1 1.5 1.5v1A1.5 1.5 0 0 1 8.5 14h-1A1.5 1.5 0 0 1 6 12.5v-1zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zm4.5.5a1.5 1.5 0 0 1 1.5-1.5h1a1.5 1.5 0 0 1 1.5 1.5v1a1.5 1.5 0 0 1-1.5 1.5h-1a1.5 1.5 0 0 1-1.5-1.5v-1zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1z" fill="#000000"></path> </svg>
			Diagrama Entidad-Relación
		</h2>

		<p>
			Para la creación de la base de datos, se consideró el siguiente DER (Diagrama
			Entidad Relación)
		</p>
		<embed src="http://localhost/BDA2022/REPDA/DER_BDA_Conagua_2.pdf" width="100%" height="630px" />



		<h2>
			<svg style="height: 32px; width: 32px; color: rgb(0, 0, 0);" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-table" viewBox="0 0 16 16"> <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm15 2h-4v3h4V4zm0 4h-4v3h4V8zm0 4h-4v3h3a1 1 0 0 0 1-1v-2zm-5 3v-3H6v3h4zm-5 0v-3H1v2a1 1 0 0 0 1 1h3zm-4-4h4V8H1v3zm0-4h4V4H1v3zm5-3v3h4V4H6zm4 4H6v3h4V8z" fill="#000000"></path> </svg>
			Diccionario de datos
		</h2>

		<p>
			En este apartado se explicarán los componentes de cada una de las entidades
			a usar. Las tablas fueron realizadas con la ayuda de <a href="https://www.tablesgenerator.com/html_tables" target="_blank">Tables Generator</a>.
		</p>


		<div class="row">
			<div class="column">
						<h4>Tabla Estado</h4>
						<table class="tg">
						<thead>
						  <tr>
						    <th class="tg-thvl">Tabla</th>
						    <th class="tg-yiby" colspan="2">Estado</th>
						  </tr>
						</thead>
						<tbody>
						  <tr>
						    <td class="tg-pe50">Creadora</td>
						    <td class="tg-6qv3" colspan="2">Jazmín López Chacón</td>
						  </tr>
						  <tr>
						    <td class="tg-thvl">Versión</td>
						    <td class="tg-yiby" colspan="2">1.0</td>
						  </tr>
						  <tr>
						    <td class="tg-z1fk">TIPO</td>
						    <td class="tg-z1fk">COLUMNA</td>
						    <td class="tg-z1fk">COMENTARIOS</td>
						  </tr>
						  <tr>
						    <td class="tg-0pky">INT</td>
						    <td class="tg-0pky">clave</td>
						    <td class="tg-0pky">PK</td>
						  </tr>
						  <tr>
						    <td class="tg-pcvp">VARCHAR(255)</td>
						    <td class="tg-pcvp">nombre</td>
						    <td class="tg-pcvp"></td>
						  </tr>
						</tbody>
						</table>
			</div>
			<div class="column">
				<h4>Tabla Municipio</h4>

				<table class="tg">
				<thead>
				  <tr>
				    <th class="tg-thvl">Tabla</th>
				    <th class="tg-yiby" colspan="2">Municipio</th>
				  </tr>
				</thead>
				<tbody>
				  <tr>
				    <td class="tg-pe50">Creadora</td>
				    <td class="tg-6qv3" colspan="2">Jazmín López Chacón</td>
				  </tr>
				  <tr>
				    <td class="tg-thvl">Versión</td>
				    <td class="tg-yiby" colspan="2">1.0</td>
				  </tr>
				  <tr>
				    <td class="tg-z1fk">TIPO</td>
				    <td class="tg-z1fk">COLUMNA</td>
				    <td class="tg-z1fk">COMENTARIOS</td>
				  </tr>
				  <tr>
				    <td class="tg-0pky">INT</td>
				    <td class="tg-0pky">clave</td>
				    <td class="tg-0pky">PK</td>
				  </tr>
				  <tr>
				    <td class="tg-pcvp">VARCHAR(255)</td>
				    <td class="tg-pcvp">nombre</td>
				    <td class="tg-pcvp"></td>
				  </tr>
				  <tr>
				    <td class="tg-0lax">INT</td>
				    <td class="tg-0lax">clave_edo</td>
				    <td class="tg-0lax">FK(Estado)</td>
				  </tr>
				</tbody>
				</table>

			</div>
			<div class="column">
				<h4>Tabla Cuenca</h4>

				<table class="tg">
				<thead>
				  <tr>
				    <th class="tg-thvl">Tabla</th>
				    <th class="tg-yiby" colspan="2">Cuenca</th>
				  </tr>
				</thead>
				<tbody>
				  <tr>
				    <td class="tg-pe50">Creadora</td>
				    <td class="tg-6qv3" colspan="2">Jazmín López Chacón</td>
				  </tr>
				  <tr>
				    <td class="tg-thvl">Versión</td>
				    <td class="tg-yiby" colspan="2">1.0</td>
				  </tr>
				  <tr>
				    <td class="tg-z1fk">TIPO</td>
				    <td class="tg-z1fk">COLUMNA</td>
				    <td class="tg-z1fk">COMENTARIOS</td>
				  </tr>
				  <tr>
				    <td class="tg-0pky">INT</td>
				    <td class="tg-0pky">clave</td>
				    <td class="tg-0pky">PK</td>
				  </tr>
				  <tr>
				    <td class="tg-pcvp">VARCHAR(255)</td>
				    <td class="tg-pcvp">nombre</td>
				    <td class="tg-pcvp"></td>
				  </tr>
				</tbody>
				</table>
			</div>
		</div>

		<div class="row">
			<div class="column">
				<h4>Tabla Región</h4>
				<table class="tg">
				<thead>
				  <tr>
				    <th class="tg-thvl">Tabla</th>
				    <th class="tg-yiby" colspan="2">Región</th>
				  </tr>
				</thead>
				<tbody>
				  <tr>
				    <td class="tg-pe50">Creadora</td>
				    <td class="tg-6qv3" colspan="2">Jazmín López Chacón</td>
				  </tr>
				  <tr>
				    <td class="tg-thvl">Versión</td>
				    <td class="tg-yiby" colspan="2">1.0</td>
				  </tr>
				  <tr>
				    <td class="tg-z1fk">TIPO</td>
				    <td class="tg-z1fk">COLUMNA</td>
				    <td class="tg-z1fk">COMENTARIOS</td>
				  </tr>
				  <tr>
				    <td class="tg-0pky">INT</td>
				    <td class="tg-0pky">clave</td>
				    <td class="tg-0pky">PK</td>
				  </tr>
				  <tr>
				    <td class="tg-pcvp">VARCHAR(255)</td>
				    <td class="tg-pcvp">nombre</td>
				    <td class="tg-pcvp"></td>
				  </tr>
				</tbody>
				</table>
			</div>
			<div class="column">
				<h4>Tabla Región-Cuenca</h4>
				<table class="tg">
				<thead>
				  <tr>
				    <th class="tg-thvl">Tabla</th>
				    <th class="tg-yiby" colspan="2">Región-Cuenca</th>
				  </tr>
				</thead>
				<tbody>
				  <tr>
				    <td class="tg-pe50">Creadora</td>
				    <td class="tg-6qv3" colspan="2">Jazmín López Chacón</td>
				  </tr>
				  <tr>
				    <td class="tg-thvl">Versión</td>
				    <td class="tg-yiby" colspan="2">1.0</td>
				  </tr>
				  <tr>
				    <td class="tg-z1fk">TIPO</td>
				    <td class="tg-z1fk">COLUMNA</td>
				    <td class="tg-z1fk">COMENTARIOS</td>
				  </tr>
				  <tr>
				    <td class="tg-0pky">INT</td>
				    <td class="tg-0pky">clave_cuenca</td>
				    <td class="tg-0pky">PK,FK(cuenca)</td>
				  </tr>
				  <tr>
				    <td class="tg-pcvp">INT</td>
				    <td class="tg-pcvp">clave_region</td>
				    <td class="tg-pcvp">PK,FK(cuenca)</td>
				  </tr>
				</tbody>
				</table>
			</div>

			<div class="column">
				<h4>Tabla Acuífero</h4>
				<table class="tg">
				<thead>
				  <tr>
				    <th class="tg-thvl">Tabla</th>
				    <th class="tg-yiby" colspan="2">Acuífero</th>
				  </tr>
				</thead>
				<tbody>
				  <tr>
				    <td class="tg-pe50">Creadora</td>
				    <td class="tg-6qv3" colspan="2">Jazmín López Chacón</td>
				  </tr>
				  <tr>
				    <td class="tg-thvl">Versión</td>
				    <td class="tg-yiby" colspan="2">1.0</td>
				  </tr>
				  <tr>
				    <td class="tg-z1fk">TIPO</td>
				    <td class="tg-z1fk">COLUMNA</td>
				    <td class="tg-z1fk">COMENTARIOS</td>
				  </tr>
				  <tr>
				    <td class="tg-0pky">INT</td>
				    <td class="tg-0pky">clave</td>
				    <td class="tg-0pky">PK</td>
				  </tr>
				  <tr>
				    <td class="tg-pcvp">VARCHAR(100)</td>
				    <td class="tg-pcvp">nombre</td>
				    <td class="tg-pcvp"></td>
				  </tr>
				  <tr>
				    <td class="tg-0pky"></td>
				    <td class="tg-0pky"></td>
				    <td class="tg-0pky"></td>
				  </tr>
				</tbody>
				</table>
			</div>
		</div>
		<div class="row">
			<div class="column">
				<h4>Tabla Superficie</h4>
				<table class="tg">
				<thead>
				  <tr>
				    <th class="tg-thvl">Tabla</th>
				    <th class="tg-yiby" colspan="2">Superficie</th>
				  </tr>
				</thead>
				<tbody>
				  <tr>
				    <td class="tg-pe50">Creadora</td>
				    <td class="tg-6qv3" colspan="2">Jazmín López Chacón</td>
				  </tr>
				  <tr>
				    <td class="tg-thvl">Versión</td>
				    <td class="tg-yiby" colspan="2">1.0</td>
				  </tr>
				  <tr>
				    <td class="tg-z1fk">TIPO</td>
				    <td class="tg-z1fk">COLUMNA</td>
				    <td class="tg-z1fk">COMENTARIOS</td>
				  </tr>
				  <tr>
				    <td class="tg-0pky">BIGINT</td>
				    <td class="tg-0pky">id</td>
				    <td class="tg-0pky">PK</td>
				  </tr>
				  <tr>
				    <td class="tg-pcvp">VARCHAR(100)</td>
				    <td class="tg-pcvp">fuente</td>
				    <td class="tg-pcvp"></td>
				  </tr>
				  <tr>
				    <td class="tg-0pky">VARCHAR(100)</td>
				    <td class="tg-0pky">afluente</td>
				    <td class="tg-0pky"></td>
				  </tr>
				</tbody>
				</table>
			</div>
			
			<div class="column">
				<h4>Tabla Concesión</h4>
				<table class="tg">
				<thead>
				  <tr>
				    <th class="tg-thvl">Tabla</th>
				    <th class="tg-yiby" colspan="2">Concesión</th>
				  </tr>
				</thead>
				<tbody>
				  <tr>
				    <td class="tg-pe50">Creadora</td>
				    <td class="tg-6qv3" colspan="2">Jazmín López Chacón</td>
				  </tr>
				  <tr>
				    <td class="tg-thvl">Versión</td>
				    <td class="tg-yiby" colspan="2">1.0</td>
				  </tr>
				  <tr>
				    <td class="tg-z1fk">TIPO</td>
				    <td class="tg-z1fk">COLUMNA</td>
				    <td class="tg-z1fk">COMENTARIOS</td>
				  </tr>
				  <tr>
				    <td class="tg-0pky">VARCHAR(20)</td>
				    <td class="tg-0pky">titulo</td>
				    <td class="tg-0pky">PK</td>
				  </tr>
				  <tr>
				    <td class="tg-pcvp">VARCHAR(100)</td>
				    <td class="tg-pcvp">uso</td>
				    <td class="tg-pcvp"></td>
				  </tr>
				  <tr>
				    <td class="tg-0pky">VARCHAR(255)</td>
				    <td class="tg-0pky">titular</td>
				    <td class="tg-0pky"></td>
				  </tr>
				  <tr>
				    <td class="tg-tf2e">DATE</td>
				    <td class="tg-tf2e">fecha</td>
				    <td class="tg-tf2e"></td>
				  </tr>
				  <tr>
				    <td class="tg-0lax">VARCHAR(255)</td>
				    <td class="tg-0lax">autoridad</td>
				    <td class="tg-0lax"></td>
				  </tr>
				</tbody>
				</table>
			</div>

			<div class="column">
				<h4>Tabla Zona Federal</h4>
				<table class="tg">
				<thead>
				  <tr>
				    <th class="tg-thvl">Tabla</th>
				    <th class="tg-yiby" colspan="2">Zona Federal</th>
				  </tr>
				</thead>
				<tbody>
				  <tr>
				    <td class="tg-pe50">Creadora</td>
				    <td class="tg-6qv3" colspan="2">Jazmín López Chacón</td>
				  </tr>
				  <tr>
				    <td class="tg-thvl">Versión</td>
				    <td class="tg-yiby" colspan="2">1.0</td>
				  </tr>
				  <tr>
				    <td class="tg-z1fk">TIPO</td>
				    <td class="tg-z1fk">COLUMNA</td>
				    <td class="tg-z1fk">COMENTARIOS</td>
				  </tr>
				  <tr>
				    <td class="tg-0pky">BIGINT</td>
				    <td class="tg-0pky">id</td>
				    <td class="tg-0pky">PK</td>
				  </tr>
				  <tr>
				    <td class="tg-pcvp">DOUBLE</td>
				    <td class="tg-pcvp">superficie</td>
				    <td class="tg-pcvp"></td>
				  </tr>
				  <tr>
				    <td class="tg-0pky">VARCHAR(100)</td>
				    <td class="tg-0pky">corriente</td>
				    <td class="tg-0pky"></td>
				  </tr>
				  <tr>
				    <td class="tg-tf2e">FLOAT</td>
				    <td class="tg-tf2e">latitud</td>
				    <td class="tg-tf2e"></td>
				  </tr>
				  <tr>
				    <td class="tg-0lax">FLOAT</td>
				    <td class="tg-0lax">longitud</td>
				    <td class="tg-0lax"></td>
				  </tr>
				  <tr>
				    <td class="tg-0lax">VARCHAR(20)</td>
				    <td class="tg-0lax">titulo</td>
				    <td class="tg-0lax"></td>
				  </tr>
				  <tr>
				    <td class="tg-tf2e">INT</td>
				    <td class="tg-tf2e">clave_mun</td>
				    <td class="tg-tf2e">FK(Municipio)</td>
				  </tr>
				  <tr>
				    <td class="tg-0lax">INT</td>
				    <td class="tg-0lax">clave_edo</td>
				    <td class="tg-0lax">FK(Municipio)</td>
				  </tr>
				  <tr>
				    <td class="tg-tf2e">INT</td>
				    <td class="tg-tf2e">clave_cuenca</td>
				    <td class="tg-tf2e">FK(Cuenca)</td>
				  </tr>
				</tbody>
				</table>
			</div>
		</div>

		<div class="row">
			<div class="column">
				<h4>Tabla Descarga</h4>
				<table class="tg">
				<thead>
				  <tr>
				    <th class="tg-thvl">Tabla</th>
				    <th class="tg-yiby" colspan="2">Descarga</th>
				  </tr>
				</thead>
				<tbody>
				  <tr>
				    <td class="tg-pe50">Creadora</td>
				    <td class="tg-6qv3" colspan="2">Jazmín López Chacón</td>
				  </tr>
				  <tr>
				    <td class="tg-thvl">Versión</td>
				    <td class="tg-yiby" colspan="2">1.0</td>
				  </tr>
				  <tr>
				    <td class="tg-z1fk">TIPO</td>
				    <td class="tg-z1fk">COLUMNA</td>
				    <td class="tg-z1fk">COMENTARIOS</td>
				  </tr>
				  <tr>
				    <td class="tg-0pky">BIGINT</td>
				    <td class="tg-0pky">id</td>
				    <td class="tg-0pky">PK</td>
				  </tr>
				  <tr>
				    <td class="tg-pcvp">VARCHAR(100)</td>
				    <td class="tg-pcvp">procedencia</td>
				    <td class="tg-pcvp"></td>
				  </tr>
				  <tr>
				    <td class="tg-0lax">VARCHAR(100)</td>
				    <td class="tg-0lax">cuerpo_receptor</td>
				    <td class="tg-0lax"></td>
				  </tr>
				  <tr>
				    <td class="tg-tf2e">VARCHAR(100)</td>
				    <td class="tg-tf2e">tipo</td>
				    <td class="tg-tf2e"></td>
				  </tr>
				  <tr>
				    <td class="tg-tf2e">FLOAT</td>
				    <td class="tg-tf2e">latitud</td>
				    <td class="tg-tf2e"></td>
				  </tr>
				  <tr>
				    <td class="tg-0lax">FLOAT</td>
				    <td class="tg-0lax">longitud</td>
				    <td class="tg-0lax"></td>
				  </tr>
				  <tr>
				    <td class="tg-tf2e">VARCHAR(100)</td>
				    <td class="tg-tf2e">afluente</td>
				    <td class="tg-tf2e"></td>
				  </tr>
				  <tr>
				    <td class="tg-0lax">VARCHAR(150)</td>
				    <td class="tg-0lax">forma</td>
				    <td class="tg-0lax"></td>
				  </tr>
				  <tr>
				    <td class="tg-tf2e">INT</td>
				    <td class="tg-tf2e">clave_mun</td>
				    <td class="tg-tf2e">FK(Municipio)</td>
				  </tr>
				  <tr>
				    <td class="tg-0lax">INT</td>
				    <td class="tg-0lax">clave_edo</td>
				    <td class="tg-0lax">FK(Municipio)</td>
				  </tr>
				  <tr>
				    <td class="tg-tf2e">INT</td>
				    <td class="tg-tf2e">clave_cuenca</td>
				    <td class="tg-tf2e">FK(Cuenca)</td>
				  </tr>
				</tbody>
				</table>
			</div>
			<div class="column">
				<h4>Tabla Descarga-Concesión</h4>
				<table class="tg">
				<thead>
				  <tr>
				    <th class="tg-thvl">Tabla</th>
				    <th class="tg-yiby" colspan="2">Descarga-Conseción</th>
				  </tr>
				</thead>
				<tbody>
				  <tr>
				    <td class="tg-pe50">Creadora</td>
				    <td class="tg-6qv3" colspan="2">Jazmín López Chacón</td>
				  </tr>
				  <tr>
				    <td class="tg-thvl">Versión</td>
				    <td class="tg-yiby" colspan="2">1.0</td>
				  </tr>
				  <tr>
				    <td class="tg-z1fk">TIPO</td>
				    <td class="tg-z1fk">COLUMNA</td>
				    <td class="tg-z1fk">COMENTARIOS</td>
				  </tr>
				  <tr>
				    <td class="tg-0pky">FLOAT</td>
				    <td class="tg-0pky">vol_diario</td>
				    <td class="tg-0pky"></td>
				  </tr>
				  <tr>
				    <td class="tg-pcvp">FLOAT</td>
				    <td class="tg-pcvp">vol_anual</td>
				    <td class="tg-pcvp"></td>
				  </tr>
				  <tr>
				    <td class="tg-0lax">VARCHAR(100)</td>
				    <td class="tg-0lax">titulo</td>
				    <td class="tg-0lax">PK, FK(Concesión)</td>
				  </tr>
				  <tr>
				    <td class="tg-tf2e">BIGINT</td>
				    <td class="tg-tf2e">id_anexo</td>
				    <td class="tg-tf2e">PK,FK(Descarga)</td>
				  </tr>
				  <tr>
				    <td class="tg-tf2e">DATE</td>
				    <td class="tg-tf2e">fecha</td>
				    <td class="tg-tf2e">PK</td>
				  </tr>
				</tbody>
				</table>
			</div>
			<div class="column">
				<h4>Tabla de Anexo de Extracción</h4>
				<table class="tg">
				<thead>
				  <tr>
				    <th class="tg-thvl">Tabla</th>
				    <th class="tg-yiby" colspan="2">Anexo de Extracción</th>
				  </tr>
				</thead>
				<tbody>
				  <tr>
				    <td class="tg-pe50">Creadora</td>
				    <td class="tg-6qv3" colspan="2">Jazmín López Chacón</td>
				  </tr>
				  <tr>
				    <td class="tg-thvl">Versión</td>
				    <td class="tg-yiby" colspan="2">1.0</td>
				  </tr>
				  <tr>
				    <td class="tg-z1fk">TIPO</td>
				    <td class="tg-z1fk">COLUMNA</td>
				    <td class="tg-z1fk">COMENTARIOS</td>
				  </tr>
				  <tr>
				    <td class="tg-0pky">BIGINT</td>
				    <td class="tg-0pky">id</td>
				    <td class="tg-0pky">PK</td>
				  </tr>
				  <tr>
				    <td class="tg-pcvp">FLOAT</td>
				    <td class="tg-pcvp">latitud</td>
				    <td class="tg-pcvp"></td>
				  </tr>
				  <tr>
				    <td class="tg-0pky">FLOAT</td>
				    <td class="tg-0pky">longitud</td>
				    <td class="tg-0pky"></td>
				  </tr>
				  <tr>
				    <td class="tg-pcvp">VARCHAR(20)</td>
				    <td class="tg-pcvp">titulo</td>
				    <td class="tg-pcvp">FK(Concesión)</td>
				  </tr>
				  <tr>
				    <td class="tg-0pky">INT</td>
				    <td class="tg-0pky">clave_mun</td>
				    <td class="tg-0pky">FK(Municipio)</td>
				  </tr>
				  <tr>
				    <td class="tg-pcvp">INT</td>
				    <td class="tg-pcvp">clave_edo</td>
				    <td class="tg-pcvp">FK(Municipio)</td>
				  </tr>
				  <tr>
				    <td class="tg-0pky">INT</td>
				    <td class="tg-0pky">clave_cuenca</td>
				    <td class="tg-0pky">FK(Cuenca)</td>
				  </tr>
				</tbody>
				</table>
			</div>
		</div>

		<div class="row">
			<div class="column">
				<h4>Tabla de Anexo de Extracción-Acuífero</h4>
				<table class="tg">
				<thead>
				  <tr>
				    <th class="tg-thvl">Tabla</th>
				    <th class="tg-yiby" colspan="2">Anexo de Extracción-Acuífero</th>
				  </tr>
				</thead>
				<tbody>
				  <tr>
				    <td class="tg-pe50">Creadora</td>
				    <td class="tg-6qv3" colspan="2">Jazmín López Chacón</td>
				  </tr>
				  <tr>
				    <td class="tg-thvl">Versión</td>
				    <td class="tg-yiby" colspan="2">1.0</td>
				  </tr>
				  <tr>
				    <td class="tg-z1fk">TIPO</td>
				    <td class="tg-z1fk">COLUMNA</td>
				    <td class="tg-z1fk">COMENTARIOS</td>
				  </tr>
				  <tr>
				    <td class="tg-0pky">FLOAT</td>
				    <td class="tg-0pky">vol_anual</td>
				    <td class="tg-0pky"></td>
				  </tr>
				  <tr>
				    <td class="tg-pcvp">DATE</td>
				    <td class="tg-pcvp">fecha</td>
				    <td class="tg-pcvp">PK</td>
				  </tr>
				  <tr>
				    <td class="tg-0pky">BIGINT</td>
				    <td class="tg-0pky">id_anexo</td>
				    <td class="tg-0pky">PK,FK(Anexo de Extracción)</td>
				  </tr>
				  <tr>
				    <td class="tg-pcvp">BIGINT</td>
				    <td class="tg-pcvp">clave_ac</td>
				    <td class="tg-pcvp">PK,FK(Acuífero)</td>
				  </tr>
				</tbody>
				</table>
			</div>

			<div class="column">
				<h4>Tabla Anexo de Extracción-Superficie</h4>
				<table class="tg">
				<thead>
				  <tr>
				    <th class="tg-thvl">Tabla</th>
				    <th class="tg-yiby" colspan="2">Anexo de Extracción-Superficie</th>
				  </tr>
				</thead>
				<tbody>
				  <tr>
				    <td class="tg-pe50">Creadora</td>
				    <td class="tg-6qv3" colspan="2">Jazmín López Chacón</td>
				  </tr>
				  <tr>
				    <td class="tg-thvl">Versión</td>
				    <td class="tg-yiby" colspan="2">1.0</td>
				  </tr>
				  <tr>
				    <td class="tg-z1fk">TIPO</td>
				    <td class="tg-z1fk">COLUMNA</td>
				    <td class="tg-z1fk">COMENTARIOS</td>
				  </tr>
				  <tr>
				    <td class="tg-0pky">FLOAT</td>
				    <td class="tg-0pky">vol_anual</td>
				    <td class="tg-0pky"></td>
				  </tr>
				  <tr>
				    <td class="tg-pcvp">DATE</td>
				    <td class="tg-pcvp">fecha</td>
				    <td class="tg-pcvp">PK</td>
				  </tr>
				  <tr>
				    <td class="tg-0pky">BIGINT</td>
				    <td class="tg-0pky">id_anexo</td>
				    <td class="tg-0pky">PK,FK(Anexo de Extracción)</td>
				  </tr>
				  <tr>
				    <td class="tg-pcvp">BIGINT</td>
				    <td class="tg-pcvp">id_sup</td>
				    <td class="tg-pcvp">PK,FK(Superficie)</td>
				  </tr>
				</tbody>
				</table>
			</div>
		</div>


		<h2>
			<svg style="height: 32px; width: 32px; color: rgb(0, 0, 0);" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-book" viewBox="0 0 16 16"> <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z" fill="#000000"></path> </svg>
			Glosario
		</h2>

		<p>
			En este apartado se enlistan las definiciones términos utilizados en el proyecto. A su vez, estas definiciones provienen del artículo 3 de la Ley de Aguas Nacionales mencionada en la sección de Información General.
		</p>
		<ul>
			<li> <b>Acuífero</b> Cualquier formación geológica o conjunto de formaciones geológicas hidráulicamente conectados entre sí, por las que circulan o se almacenan aguas del subsuelo que pueden ser extraídas para su explotación, uso o aprovechamiento y cuyos límites laterales y verticales se definen convencionalmente para fines de evaluación, manejo y administración de las aguas nacionales del subsuelo 
			</li>
			<li><b>Aguas residuales</b> Las aguas de composición variada provenientes de las descargas de usos público urbano, doméstico, industrial, comercial, de servicios, agrícola, pecuario, de las plantas de tratamiento y en general, de cualquier uso, así como la mezcla de ellas.
			</li>
			<li><b>Cauce</b> El canal natural o artificial que tiene la capacidad necesaria para que las aguas de la creciente máxima ordinaria escurran sin derramarse. Cuando las corrientes estén sujetas a desbordamiento, se considera como cauce el canal natural, mientras no se construyan obras de encauzamiento; en los orígenes de cualquier corriente, se considera como cauce propiamente definido, cuando el escurrimiento se concentre hacia una depresión topográfica y éste forme una cárcava o canal, como resultado de la acción del agua fluyendo sobre el terreno. Para fines de aplicación de la presente Ley, la magnitud de dicha cárcava o cauce incipiente deberá ser de cuando menos de 2.0 metros de ancho por 0.75 metros de profundidad.
			</li>
			<li><b>Concesión</b> Título que otorga el Ejecutivo Federal, a través de "la Comisión" o del Organismo de Cuenca que corresponda, conforme a sus respectivas competencias, para la explotación, uso o aprovechamiento de las aguas nacionales, y de sus bienes públicos inherentes, a las personas físicas o morales de carácter público y privado, excepto los títulos de asignación.
			</li>
			<li><b>Cuenca Hidrológica</b>  Es la unidad del territorio, diferenciada de otras unidades, normalmente delimitada por un parte aguas o divisoria de las aguas -aquella línea poligonal formada por los puntos de mayor elevación en dicha unidad-, en donde ocurre el agua en distintas formas, y ésta se almacena o fluye hasta un punto de salida que puede ser el mar u otro cuerpo receptor interior, a través de una red hidrográfica de cauces que convergen en uno principal, o bien el territorio en donde las aguas forman una unidad autónoma o diferenciada de otras, aun sin que desemboquen en el mar. En dicho espacio delimitado por una diversidad topográfica, coexisten los recursos agua, suelo, flora, fauna, otros recursos naturales relacionados con éstos y el medio ambiente. La cuenca hidrológica conjuntamente con los acuíferos, constituye la unidad de gestión de los recursos hídricos. La cuenca hidrológica está a su vez integrada por subcuencas y estas últimas están integradas por microcuencas.
			Para los fines de la Ley de Aguas Nacionales, se considera como:
			<ol type="a"> 
			<li><b>Región hidrológica</b> Área territorial conformada en función de sus características morfológicas, orográficas e hidrológicas, en la cual se considera a la cuenca hidrológica como la unidad básica para la gestión de los recursos hídricos, cuya finalidad es el agrupamiento y sistematización de la información, análisis, diagnósticos, programas y acciones en relación con la ocurrencia del agua en cantidad y calidad, así como su explotación, uso o aprovechamiento. Normalmente una región hidrológica está integrada por una o varias cuencas hidrológicas. Por tanto, los límites de la región hidrológica son en general distintos en relación con la división política por estados, Distrito Federal y municipios. Una o varias regiones hidrológicas integran una región hidrológico - administrativa.
			</li>
			<li><b>Región Hidrológico - Administrativa</b> Área territorial definida de acuerdo con criterios hidrológicos, integrada por una o varias regiones hidrológicas, en la cual se considera a la cuenca hidrológica como la unidad básica para la gestión de los recursos hídricos y el municipio representa, como en otros instrumentos jurídicos, la unidad mínima de gestión administrativa en el país
			</li>
			</ol>
			</li>
			<li><b>Cuerpo receptor</b> La corriente o depósito natural de agua, presas, cauces, zonas marinas o bienes nacionales donde se descargan aguas residuales, así como los terrenos en donde se infiltran o inyectan dichas aguas, cuando puedan contaminar los suelos, subsuelo o los acuíferos.
			</li>
			<li><b>Descarga</b> La acción de verter, infiltrar, depositar o inyectar aguas residuales a un cuerpo receptor.
			</li>
			<li><b>Registro Público de Derechos de Agua (REPDA)</b> Registro que proporciona información y seguridad jurídica a los usuarios de aguas nacionales y bienes inherentes a través de la inscripción de los títulos de concesión, asignación y permisos de descarga, así como las modificaciones que se efectúen en las características de los mismos.
			</li>
			<li><b>Ribera o Zona Federal</b> Las fajas de diez metros de anchura contiguas al cauce de las corrientes o al vaso de los depósitos de propiedad nacional, medidas horizontalmente a partir del nivel de aguas máximas ordinarias. La amplitud de la ribera o zona federal será de cinco metros en los cauces con una anchura no mayor de cinco metros. El nivel de aguas máximas ordinarias se calculará a partir de la creciente máxima ordinaria que será determinada por "la Comisión" o por el Organismo de Cuenca que corresponda, conforme a sus respectivas competencias, de acuerdo con lo dispuesto en los reglamentos de esta Ley. En los ríos, estas fajas se delimitarán a partir de cien metros río arriba, contados desde la desembocadura de éstos en el mar. En los cauces con anchura no mayor de cinco metros, el nivel de aguas máximas ordinarias se calculará a partir de la media de los gastos máximos anuales producidos durante diez años consecutivos. Estas fajas se delimitarán en los ríos a partir de cien metros río arriba, contados desde la desembocadura de éstos en el mar. En los orígenes de cualquier corriente, se considera como cauce propiamente definido, el escurrimiento que se concentre hacia una depresión topográfica y forme una cárcava o canal, como resultado de la acción del agua fluyendo sobre el terreno. La magnitud de la cárcava o cauce incipiente deberá ser de cuando menos de 2.0 metros de ancho por 0.75 metros de profundidad
			</li>
			<li><b>Uso</b> Aplicación del agua a una actividad que implique el consumo, parcial o total de ese recurso.
			</li>
			<li><b>Uso Agrícola</b> La aplicación de agua nacional para el riego destinado a la producción agrícola y la preparación de ésta para la primera enajenación, siempre que los productos no hayan sido objeto de transformación industrial.
			</li>
			<li><b>Uso Doméstico</b> La aplicación de agua nacional para el uso particular de las personas y del hogar, riego de sus jardines y de árboles de ornato, incluyendo el abrevadero de animales domésticos que no constituya una actividad lucrativa, en términos del Artículo 115 de la Constitución Política de los Estados Unidos Mexicanos.
			</li>
			<li><b>Uso en Acuacultura</b> El aprovechamiento de paso de aguas nacionales en el conjunto de actividades dirigidas a la reproducción controlada, pre engorda y engorda de especies de la fauna y flora realizadas en instalaciones en aguas nacionales, por medio de técnicas de cría o cultivo, que sean susceptibles de explotación comercial, ornamental o recreativa.
			</li>
			<li><b>Uso industrial</b> La aplicación de aguas nacionales en fábricas o empresas que realicen la extracción, conservación o transformación de materias primas o minerales, el acabado de productos o la elaboración de satisfactores, así como el agua que se utiliza en parques industriales, calderas, dispositivos para enfriamiento, lavado, baños y otros servicios dentro de la empresa, las salmueras que se utilizan para la extracción de cualquier tipo de sustancias y el agua aun en estado de vapor, que sea usada para la generación de energía eléctrica o para cualquier otro uso o aprovechamiento de transformación.
			</li>
			<li><b>Uso Pecuario</b> La aplicación de aguas nacionales para la cría y engorda de ganado, aves de corral y otros animales, y su preparación para la primera enajenación siempre que no comprendan la transformación industrial; no incluye el riego de pastizales.
			</li>
			<li><b>Uso Público Urbano</b> La aplicación de agua nacional para centros de población y asentamientos humanos, a través de la red municipal.
			</li>
		</ul>

	</section>

</div>

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
