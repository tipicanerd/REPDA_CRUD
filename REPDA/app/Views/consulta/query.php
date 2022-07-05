<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Consulta REPDA | Consultas</title>
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
    
    /*
    Creditos: https://www.w3schools.com/howto/howto_js_tabs.asp;
    */
    /* Style the tab */
    .tab {
      overflow: hidden;
      border: 1px solid #ccc;
      background-color: #f1f1f1;
    }

    /* Style the buttons that are used to open the tab content */
    .tab button {
      background-color: inherit;
      float: left;
      border: none;
      outline: none;
      cursor: pointer;
      padding: 14px 16px;
      transition: 0.3s;
    }

    /* Change background color of buttons on hover */
    .tab button:hover {
      background-color: #ddd;
    }

    /* Create an active/current tablink class */
    .tab button.active {
      background-color: #ccc;
    }

    /* Style the tab content */
    .tabcontent {
      display: none;
      padding: 6px 12px;
      border: 1px solid #ccc;
      border-top: none;
    }
    .tabcontentResult {
      display: none;
      overflow: auto;
      padding: 6px 12px;
      border: 1px solid #ccc;
      border-top: none;
    }
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
                <a href="#">
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

        <h1>
            <svg style="height: 32px; width: 32px; color: rgb(0, 0, 0);" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16"> <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" fill="#000000"></path> </svg>
            Consultas
        </h1>

    </div>

</header>

<!-- CONTENT -->

<section>
    <div class="tab">
        <button class="tablinks" onclick="openQuery(event, 'Basic')" id="defaultOpenQuery">
            Búsqueda Básica
        </button>
        <button class="tablinks" onclick="openQuery(event, 'Advanced')">
            Búsqueda Avanzada
        </button>
    </div>

    <!-- Tab content -->
    <div id="Basic" class="tabcontent">
      <h3>Búsqueda Básica</h3>
      <form method="post" action="http://localhost/BDA2022/REPDA/index.php/Queries/index">
          <h4>Titular  <input type="text" name="titular" placeholder="Inserte el nombre del titular total o parcial" style="width: 500px;" maxlength="255"> 
          </h4>
          <h4>Título  <input type="text" name="titulo" placeholder="Inserte el título de la concesión" style="width: 500px;" maxlength="20"> 
          </h4>
          <h4>
            Estado
            <select name="Estado">
            <option selected="selected">Selecciona un estado</option>
            <?php
            
            foreach($estados as $item){
                $clave = $item['clave'];
                $nombre = $item['nombre'];
                echo "<option value='$clave'>$nombre</option>";
            }
            ?>
            </select>
          </h4>
          <h4>
            Usos
            <select name="Uso">
            <option selected="selected">Selecciona un uso</option>
            <?php
                foreach($usos as $item){
                    $nombre = $item['uso'];
                    echo "<option value='$nombre'>$nombre</option>";
                }
            ?>
            </select>
          </h4>
          <input type="submit" name="send" value="Buscar" style="background-color: rgb(110,207,253); font-size: 16px; border-radius: 12px; border-style: groove;">
      </form>
    </div>

    <div id="Advanced" class="tabcontent">
        <h3>Búsqueda Avanzada</h3>
        <form method="post" action="http://localhost/BDA2022/REPDA/index.php/Queries/index">
          <h4>Titular  <input type="text" name="titular" placeholder="Inserte el nombre del titular total o parcial" style="width: 500px;" maxlength="255"> 
          </h4>
          <h4>Título  <input type="text" name="titulo" placeholder="Inserte el título de la concesión" style="width: 500px;" maxlength="20"> 
          </h4>
          <h4>
            Estado
            <select name="Estado">
            <option selected="selected">Selecciona un estado</option>
            <?php
            
            foreach($estados as $item){
                $clave = $item['clave'];
                $nombre = $item['nombre'];
                echo "<option value='$clave'>$nombre</option>";
            }
            ?>
            </select>
          </h4>
          <h4>
            Usos
            <select name="Uso">
            <option selected="selected">Selecciona un uso</option>
            <?php
                foreach($usos as $item){
                    $nombre = $item['uso'];
                    echo "<option value='$nombre'>$nombre</option>";
                }
            ?>
            </select>
          </h4>
          <h4>
              Tipo de aprovechamiento
              <select name="tipo_anexo">
                <option selected="selected">Seleccione un tipo de aprovechamiento</option>
                <?php
                    $tipos = array(array("des","Descargas"),array("subte","Subterráneo"),array("supe","Superficial"),array("zona","Zona Federal"));
                    foreach ($tipos as $item) {
                        echo "<option value='$item[0]'>$item[1]</option>";
                    }
                ?>
              </select>
          </h4>
          <input type="submit" name="send" value="Buscar" style="background-color: rgb(110,207,253); font-size: 16px; border-radius: 12px; border-style: groove;">
      </form>
    </div>
