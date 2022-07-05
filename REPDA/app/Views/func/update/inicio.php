<section>

    <h4>
        En este apartado podrás hacer actualizaciones de los registros existentes. Para ello deberás conocer los identificadores, si los desconoces, recuerda que puedes consultarlo en la <a href="http://localhost/BDA2022/REPDA/index.php/MainViews/consult" target="_blank">página de consultas</a>. <br>

        Recuerda que debes rellenar únicamente aquellos campos que deseas actualizar.
    </h4>

	<div class="tab">
        <button class="tablinks" onclick="openQuery(event, 'Conce')" id="defaultOpenQuery">
            Concesión
        </button>
        <button class="tablinks" onclick="openQuery(event, 'Des')">
            Anexo de Descarga
        </button>
        <button class="tablinks" onclick="openQuery(event, 'Subte')">
            Anexo Subterráneo
        </button>
        <button class="tablinks" onclick="openQuery(event, 'Sup')">
            Anexo Superficial
        </button>
        <button class="tablinks" onclick="openQuery(event, 'Zon')">
           	Zona Federal
        </button>
    </div>

    <div id="Conce" class="tabcontent">
	<h3>
		<svg style="height: 32px; width: 32px; color: rgb(0, 0, 0);" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-card-text" viewBox="0 0 16 16"> <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z" fill="#000000"></path> <path d="M3 5.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 8a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 8zm0 2.5a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5z" fill="#000000"></path> </svg>
		Concesión
	</h3>
	<form method="post" action="http://localhost/BDA2022/REPDA/index.php/Update/concesion">
		<h4>Título de la concesión a actualizar <input type="text" name="titulo_condicion" required maxlength="20"></h4> 
        <hr style="border: 2px solid rgb(110,207,253)">
        <h4>Título <input type="text" name="titulo" maxlength="20"></h4> 
		<h4>Titular <input type="text" name="titular" maxlength="255"></h4> 
		<h4>Uso <select name="uso">
            <option selected="selected">Selecciona un uso</option>
            <?php
                foreach($usos as $item){
                    $nombre = $item['uso'];
                    echo "<option value='$nombre'>$nombre</option>";
                }
            ?>
            </select>
        </h4>
		<h4>Autoridad que emite el registro <input type="text" name="autoridad" maxlength="255"></h4>
		<input type="submit" name="send" style="background-color: rgb(110,207,253); font-size: 16px; border-radius: 12px; border-style: groove;" value="Actualizar"> 
	</form>
	</div>
	
	<div id="Des" class="tabcontent">
	<h3>
		<svg style="height: 32px; width: 32px; color: rgb(0, 0, 0);" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-double-down" viewBox="0 0 16 16"> <path fill-rule="evenodd" d="M1.646 6.646a.5.5 0 0 1 .708 0L8 12.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" fill="#000000"></path> <path fill-rule="evenodd" d="M1.646 2.646a.5.5 0 0 1 .708 0L8 8.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" fill="#000000"></path> </svg>
		Anexo de Descarga
	</h3>

	<form method="post" action="http://localhost/BDA2022/REPDA/index.php/Update/descarga">
        <h4>Id del anexo de descarga a actualizar <input type="number" name="id_condicion" step="1" min="0"></h4> 
        <hr style="border: 2px solid rgb(110,207,253)">
		<h4>Título <input list="titulos" name="titulo"  placeholder = "Selecciona un titulo">
			<datalist id="titulos">
            <?php
                foreach($Concesiones as $item){
                    $nombre = $item['titulo'];
                    echo "<option value='$nombre'>$nombre</option>";
                }
            ?>
            </datalist>
        </h4>
		<h4>Procedencia <input list="procedencias" name="procedencia" placeholder = "Selecciona una procedencia">
			<datalist id="procedencias">>
            <?php
                foreach($procedencia as $item){
                    $nombre = $item['procedencia'];
                    echo "<option value='$nombre'>$nombre</option>";
                }
            ?>
            </datalisst>
        </h4>
        <h4>Cuerpo receptor <input list="cuerpos" name="cuerpo_receptor" placeholder = "Selecciona un cuerpo receptor">
			<datalist id="cuerpos">
            <?php
                foreach($cuerpo_receptor as $item){
                    $nombre = $item['cuerpo_receptor'];
                    echo "<option value='$nombre'>$nombre</option>";
                }
            ?>
            </datalist>
        </h4>
        <h4>Longitud <input type="number" name="longitud" step="0.001"></h4>	
        <h4>Latitud <input type="number"  name="latitud" step="0.001"></h4>
        <h4>Afluente al que se descarga <input list="afluentes"  name="afluente" placeholder = "Selecciona un afluente">
			<datalist id="afluentes">
            <?php
                foreach($afluente_des as $item){
                    $nombre = $item['afluente'];
                    echo "<option value='$nombre'>$nombre</option>";
                }
            ?>
            </datalist>
        </h4>
        <h4>Forma de descarga <input list="formas" name="forma" placeholder = "Selecciona una forma de descarga">
			<datalist id="formas">
            <?php
                foreach($forma as $item){
                    $nombre = $item['forma'];
                    echo "<option value='$nombre'>$nombre</option>";
                }
            ?>
            </datalist>
        </h4>
        <h4>Tipo de descarga <input list="tipos_des" name="tipo_des" placeholder = "Selecciona un tipo de descarga">
			<datalist id="tipos_des">
            <?php
                foreach($tipo_des as $item){
                    $nombre = $item['tipo'];
                    echo "<option value='$nombre'>$nombre</option>";
                }
            ?>
            </datalist>
        </h4>
        <h4>
            Estado
            <input list="estados" name="estado" placeholder = "Selecciona un estado">
			<datalist id="estados">
            <?php
            
            foreach($estados as $item){
                $clave = $item['clave'];
                $nombre = $item['nombre'];
                echo "<option value='$clave'>$nombre</option>";
            }
            ?>
            </datalist>
        </h4>
        <h4>
            Municipio
            <input list="municipios" name="municipio" placeholder = "Selecciona un municipio">
			<datalist id="municipios">
            <?php
            
            foreach($municipios as $item){
                $clave = $item['clave'];
                $nombre = $item['nombre'];
                echo "<option value='$clave'>$nombre</option>";
            }
            ?>
            </datalist>
        </h4>
        <h4>
            Cuenca
            <input list="cuencas" name="cuenca" placeholder = "Selecciona una cuenca">
			<datalist id="cuencas">
            <?php
            
            foreach($cuencas as $item){
                $clave = $item['clave'];
                $nombre = $item['nombre'];
                echo "<option value='$clave'>$nombre</option>";
            }
            ?>
            </datalist>
        </h4>
		<input type="submit" name="send" style="background-color: rgb(110,207,253); font-size: 16px; border-radius: 12px; border-style: groove;" value="Actualizar"> 
	</form>
	</div>


	<div id="Subte" class="tabcontent">
	<h3>
		<svg style="height: 32px; width: 32px; color: rgb(0, 0, 0);" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-layer-backward" viewBox="0 0 16 16"> <path d="M8.354 15.854a.5.5 0 0 1-.708 0l-3-3a.5.5 0 0 1 0-.708l1-1a.5.5 0 0 1 .708 0l.646.647V4H1a1 1 0 0 1-1-1V1a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H9v7.793l.646-.647a.5.5 0 0 1 .708 0l1 1a.5.5 0 0 1 0 .708l-3 3z" fill="#000000"></path> <path d="M1 9a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1h4.5a.5.5 0 0 1 0 1H1v2h4.5a.5.5 0 0 1 0 1H1zm9.5 0a.5.5 0 0 1 0-1H15V6h-4.5a.5.5 0 0 1 0-1H15a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-4.5z" fill="#000000"></path> </svg>
		Anexo Subterráneo
	</h3>
	<form method="post" action="http://localhost/BDA2022/REPDA/index.php/Update/subte">
        <h4>Id del anexo subterráneo a actualizar <input type="number" name="id_condicion" step="1" min="0"></h4> 
        <hr style="border: 2px solid rgb(110,207,253)">
		<h4>Título <input list="titulos" name="titulo" placeholder = "Selecciona un titulo">
			<datalist id="titulos">
            <?php
                foreach($Concesiones as $item){
                    $nombre = $item['titulo'];
                    echo "<option value='$nombre'>$nombre</option>";
                }
            ?>
            </datalist>
        </h4>
        <h4>Longitud <input type="number" name="longitud" step="0.001"></h4>	
        <h4>Latitud <input type="number" name="latitud" step="0.001"></h4>
        <h4>
            Estado
            <input list="estados" name="estado" placeholder = "Selecciona un estado">
			<datalist id="estados">
            <?php
            
            foreach($estados as $item){
                $clave = $item['clave'];
                $nombre = $item['nombre'];
                echo "<option value='$clave'>$nombre</option>";
            }
            ?>
            </datalist>
        </h4>
        <h4>
            Municipio
            <input list="municipios" name="municipio" placeholder = "Selecciona un municipio">
			<datalist id="municipios">
            <?php
            
            foreach($municipios as $item){
                $clave = $item['clave'];
                $nombre = $item['nombre'];
                echo "<option value='$clave'>$nombre</option>";
            }
            ?>
            </datalist>
        </h4>
        <h4>
            Acuífero
            <input list="acuiferos" name="acuifero" placeholder = "Selecciona un acuífero">
			<datalist id="acuiferos">
            <?php
            
            foreach($acuiferos as $item){
                $clave = $item['clave'];
                $nombre = $item['nombre'];
                echo "<option value='$clave'>$nombre</option>";
            }
            ?>
            </datalist>
        </h4>
        <h4>
            Cuenca
            <input list="cuencas" name="cuenca" placeholder = "Selecciona una cuenca">
			<datalist id="cuencas">
            <?php
            
            foreach($cuencas as $item){
                $clave = $item['clave'];
                $nombre = $item['nombre'];
                echo "<option value='$clave'>$nombre</option>";
            }
            ?>
            </datalist>
        </h4>
		<input type="submit" name="send" style="background-color: rgb(110,207,253); font-size: 16px; border-radius: 12px; border-style: groove;" value="Actualizar"> 
	</form>
	</div>

	<div id="Sup" class="tabcontent">
	<h3>
		<svg style="height: 32px; width: 32px; color: rgb(0, 0, 0);" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-layer-forward" viewBox="0 0 16 16"> <path d="M8.354.146a.5.5 0 0 0-.708 0l-3 3a.5.5 0 0 0 0 .708l1 1a.5.5 0 0 0 .708 0L7 4.207V12H1a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1v-2a1 1 0 0 0-1-1H9V4.207l.646.647a.5.5 0 0 0 .708 0l1-1a.5.5 0 0 0 0-.708l-3-3z" fill="#000000"></path> <path d="M1 7a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h4.5a.5.5 0 0 0 0-1H1V8h4.5a.5.5 0 0 0 0-1H1zm9.5 0a.5.5 0 0 0 0 1H15v2h-4.5a.5.5 0 0 0 0 1H15a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1h-4.5z" fill="#000000"></path> </svg>
		Anexo Superficial
	</h3>
	<form method="post" action="http://localhost/BDA2022/REPDA/index.php/Update/sup">
        <h4>Id del anexo superficial a actualizar <input type="number" name="id_condicion" step="1" min="0"></h4> 
        <hr style="border: 2px solid rgb(110,207,253)">
		<h4>Título <input list="titulos" name="titulo"  placeholder = "Selecciona un titulo">
			<datalist id="titulos">
            <?php
                foreach($Concesiones as $item){
                    $nombre = $item['titulo'];
                    echo "<option value='$nombre'>$nombre</option>";
                }
            ?>
            </datalist>
        </h4>
        <h4>Longitud <input type="number"  name="longitud" step="0.001"></h4>	
        <h4>Latitud <input type="number"  name="latitud" step="0.001"></h4>
        <h4>
            Estado
            <input list="estados" name="estado"  placeholder = "Selecciona un estado">
			<datalist id="estados">
            <?php
            
            foreach($estados as $item){
                $clave = $item['clave'];
                $nombre = $item['nombre'];
                echo "<option value='$clave'>$nombre</option>";
            }
            ?>
            </datalist>
        </h4>
        <h4>
            Municipio
            <input list="municipios" name="municipio"  placeholder = "Selecciona un municipio">
			<datalist id="municipios">
            <?php
            
            foreach($municipios as $item){
                $clave = $item['clave'];
                $nombre = $item['nombre'];
                echo "<option value='$clave'>$nombre</option>";
            }
            ?>
            </datalist>
        </h4>
        <h4>
            Fuente-Afluente
            <input list="superficies" name="superficie" placeholder = "Selecciona un par fuente-afluente">
			<datalist id="superficies">
            <?php
            
            foreach($superficies as $item){
                $clave = $item['id'];
                $fuente = $item['fuente'];
                $afluente = $item['afluente'];
                echo "<option value='$clave'>$fuente-$afluente</option>";
            }
            ?>
            </datalist>
        </h4>
        <h4>
            Cuenca
            <input list="cuencas" name="cuenca" placeholder = "Selecciona una cuenca">
			<datalist id="cuencas">
            <?php
            
            foreach($cuencas as $item){
                $clave = $item['clave'];
                $nombre = $item['nombre'];
                echo "<option value='$clave'>$nombre</option>";
            }
            ?>
            </datalist>
        </h4>
		<input type="submit" name="send" style="background-color: rgb(110,207,253); font-size: 16px; border-radius: 12px; border-style: groove;" value="Actualizar">  
	</form>
	</div>


	<div id="Zon" class="tabcontent">
	<h3>
		<svg style="height: 32px; width: 32px; color: rgb(0, 0, 0);" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-layers-fill" viewBox="0 0 16 16"> <path d="M7.765 1.559a.5.5 0 0 1 .47 0l7.5 4a.5.5 0 0 1 0 .882l-7.5 4a.5.5 0 0 1-.47 0l-7.5-4a.5.5 0 0 1 0-.882l7.5-4z" fill="#000000"></path> <path d="m2.125 8.567-1.86.992a.5.5 0 0 0 0 .882l7.5 4a.5.5 0 0 0 .47 0l7.5-4a.5.5 0 0 0 0-.882l-1.86-.992-5.17 2.756a1.5 1.5 0 0 1-1.41 0l-5.17-2.756z" fill="#000000"></path> </svg>
		Zona Federal
	</h3>
	<form method="post" action="http://localhost/BDA2022/REPDA/index.php/Update/zona">
        <h4>Id del anexo de la zona federal a actualizar <input type="number" name="id_condicion" step="1" min="0"></h4> 
        <hr style="border: 2px solid rgb(110,207,253)">
		<h4>Título <input list="titulos" name="titulo" placeholder = "Selecciona un titulo">
			<datalist id="titulos">
            <?php
                foreach($Concesiones as $item){
                    $nombre = $item['titulo'];
                    echo "<option value='$nombre'>$nombre</option>";
                }
            ?>
            </datalist>
        </h4>
        <h4>Longitud <input type="number" name="longitud" step="0.001"></h4>	
        <h4>Latitud <input type="number" name="latitud"  step="0.001"></h4>
        <h4>
            Estado
            <input list="estados" name="estado" placeholder = "Selecciona un estado">
			<datalist id="estados">
            <?php
            
            foreach($estados as $item){
                $clave = $item['clave'];
                $nombre = $item['nombre'];
                echo "<option value='$clave'>$nombre</option>";
            }
            ?>
            </datalist>
        </h4>
        <h4>
            Municipio
            <input list="municipios" name="municipio" placeholder = "Selecciona un municipio">
			<datalist id="municipios">
            <?php
            
            foreach($municipios as $item){
                $clave = $item['clave'];
                $nombre = $item['nombre'];
                echo "<option value='$clave'>$nombre</option>";
            }
            ?>
            </datalist>
        </h4>
        <h4>
            Corriente
            <input list="corrientes" name="corriente" placeholder = "Selecciona una corriente">
			<datalist id="corrientes">
            <?php
            
            foreach($corrientes as $item){
                $corriente = $item['corriente'];
                echo "<option value='$corriente'>$corriente</option>";
            }
            ?>
            </datalist>
        </h4>
        <h4>
            Cuenca
            <input list="cuencas" name="cuenca" placeholder = "Selecciona una cuenca">
			<datalist id="cuencas">
            <?php
            
            foreach($cuencas as $item){
                $clave = $item['clave'];
                $nombre = $item['nombre'];
                echo "<option value='$clave'>$nombre</option>";
            }
            ?>
            </datalist>
        </h4>
        <h4>Superficie (m²) <input type="number" name="superficie" step="0.001"></h4>
		<input type="submit" name="send" style="background-color: rgb(110,207,253); font-size: 16px; border-radius: 12px; border-style: groove;" value="Actualizar"> 
	</form>
	</div>

</section>