<section>
    <h4>
        En este apartado podrás agregar información acerca de la extracción de aguas nacionales y de la descargas.<br>

        Si desconoces el identificador de los anexos o las claves de los cuerpos de agua relacionados, recuerda que puedes consultarlos en este <a href="http://localhost/BDA2022/REPDA/index.php/MainViews/consult" target="_blank">enlace</a>.

    </h4>
	<div class="tab">
        <button class="tablinks" onclick="openQuery(event, 'Des')" id="defaultOpenQuery">
            Anexo de Descarga
        </button>
        <button class="tablinks" onclick="openQuery(event, 'Subte')">
            Anexo Subterráneo
        </button>
        <button class="tablinks" onclick="openQuery(event, 'Sup')">
            Anexo Superficial
        </button>
    </div>
	
	<div id="Des" class="tabcontent">
	<h3>
		<svg style="height: 32px; width: 32px; color: rgb(0, 0, 0);" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-double-down" viewBox="0 0 16 16"> <path fill-rule="evenodd" d="M1.646 6.646a.5.5 0 0 1 .708 0L8 12.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" fill="#000000"></path> <path fill-rule="evenodd" d="M1.646 2.646a.5.5 0 0 1 .708 0L8 8.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" fill="#000000"></path> </svg>
		Anexo de Descarga
	</h3>

	<form method="post" action="http://localhost/BDA2022/REPDA/index.php/Addition/descarga" >
        <h4>ID <input type="number" required name="id" step="1" min="0"></h4>
        <h4>Título <input list="titulos" name="titulo" required placeholder = "Selecciona un titulo">
			<datalist id="titulos">
            <?php
                foreach($Concesiones as $item){
                    $nombre = $item['titulo'];
                    echo "<option value='$nombre'>$nombre</option>";
                }
            ?>
            </datalist>
        </h4>
        <h4>Volumen de descarga diaria (m³) <input type="number" required name="vol_diario" step="0.001"></h4>
        <h4>Volumen de descarga anual (m³) <input type="number" required name="vol_anual" step="0.001"></h4>
		<input type="submit" name="send" style="background-color: rgb(110,207,253); font-size: 16px; border-radius: 12px; border-style: groove;" value="Agregar"> 
	</form>
	</div>


	<div id="Subte" class="tabcontent">
	<h3>
		<svg style="height: 32px; width: 32px; color: rgb(0, 0, 0);" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-layer-backward" viewBox="0 0 16 16"> <path d="M8.354 15.854a.5.5 0 0 1-.708 0l-3-3a.5.5 0 0 1 0-.708l1-1a.5.5 0 0 1 .708 0l.646.647V4H1a1 1 0 0 1-1-1V1a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H9v7.793l.646-.647a.5.5 0 0 1 .708 0l1 1a.5.5 0 0 1 0 .708l-3 3z" fill="#000000"></path> <path d="M1 9a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1h4.5a.5.5 0 0 1 0 1H1v2h4.5a.5.5 0 0 1 0 1H1zm9.5 0a.5.5 0 0 1 0-1H15V6h-4.5a.5.5 0 0 1 0-1H15a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-4.5z" fill="#000000"></path> </svg>
		Anexo Subterráneo
	</h3>
	<form method="post" action="http://localhost/BDA2022/REPDA/index.php/Addition/subte" >
		<h4>ID <input type="number" required name="id" step="1" min="0"></h4>
		<h4>
            Acuífero
            <input list="acuiferos" name="acuifero" required placeholder = "Selecciona un acuífero">
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
        <h4>Volumen de extracción anual (m³) <input type="number" required name="vol_anual" step="0.001"></h4>  
        <input type="submit" name="send" style="background-color: rgb(110,207,253); font-size: 16px; border-radius: 12px; border-style: groove;" value="Agregar">
	</form>
	</div>

	<div id="Sup" class="tabcontent">
	<h3>
		<svg style="height: 32px; width: 32px; color: rgb(0, 0, 0);" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-layer-forward" viewBox="0 0 16 16"> <path d="M8.354.146a.5.5 0 0 0-.708 0l-3 3a.5.5 0 0 0 0 .708l1 1a.5.5 0 0 0 .708 0L7 4.207V12H1a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1v-2a1 1 0 0 0-1-1H9V4.207l.646.647a.5.5 0 0 0 .708 0l1-1a.5.5 0 0 0 0-.708l-3-3z" fill="#000000"></path> <path d="M1 7a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h4.5a.5.5 0 0 0 0-1H1V8h4.5a.5.5 0 0 0 0-1H1zm9.5 0a.5.5 0 0 0 0 1H15v2h-4.5a.5.5 0 0 0 0 1H15a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1h-4.5z" fill="#000000"></path> </svg>
		Anexo Superficial
	</h3>
	<form method="post" action="http://localhost/BDA2022/REPDA/index.php/Addition/sup" >
		<h4>ID <input type="number" required name="id" step="1" min="0"></h4>   
		<h4>
            Fuente-Afluente
            <input list="superficies" name="superficie" required placeholder = "Selecciona un par fuente-afluente">
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
        <h4>Volumen de extracción anual (m³) <input type="number" required name="vol_anual" step="0.001"></h4>
        <input type="submit" name="send" style="background-color: rgb(110,207,253); font-size: 16px; border-radius: 12px; border-style: groove;" value="Agregar">
	</form>
	</div>


</section>