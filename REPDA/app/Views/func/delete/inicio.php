<section>
    <h4>
        En este apartado podrás eliminar concesiones e información sobre los aprovechamientos que amparan. Es importante recordar que si eliminas una concesión, se eliminarán todos los registros relacionados a la misma. En caso de eliminar por error una concesión, favor de enciar un correo a <a href="mailto:jazminlch@comunidad.unam.mx" target="_blank">jazminlch@comunidad.unam.mx </a>con el asunto <i>RECUPERACIÓN DE [campo]</i>.<br>

        Si desconoces el título de la concesión o el identificador de los anexos, recuerda que puedes consultarlos en este <a href="http://localhost/BDA2022/REPDA/index.php/MainViews/consult" target="_blank">enlace</a>.

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
	<form method="post" action="http://localhost/BDA2022/REPDA/index.php/Deletion/concesion" onsubmit="return confirm('¿Estás seguro de eliminar el registro?');">
		<h4>Título <input type="text" name="titulo" required maxlength="20"></h4>
		<input type="submit" name="send" style="background-color: rgb(110,207,253); font-size: 16px; border-radius: 12px; border-style: groove;" value="Eliminar"> 
	</form>
	</div>
	
	<div id="Des" class="tabcontent">
	<h3>
		<svg style="height: 32px; width: 32px; color: rgb(0, 0, 0);" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-double-down" viewBox="0 0 16 16"> <path fill-rule="evenodd" d="M1.646 6.646a.5.5 0 0 1 .708 0L8 12.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" fill="#000000"></path> <path fill-rule="evenodd" d="M1.646 2.646a.5.5 0 0 1 .708 0L8 8.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" fill="#000000"></path> </svg>
		Anexo de Descarga
	</h3>

	<form method="post" action="http://localhost/BDA2022/REPDA/index.php/Deletion/descarga" onsubmit="return confirm('¿Estás seguro de eliminar el registro?');">
        <h4>ID <input type="number" required name="id" step="1" min="0"></h4>	
		<input type="submit" name="send" style="background-color: rgb(110,207,253); font-size: 16px; border-radius: 12px; border-style: groove;" value="Eliminar"> 
	</form>
	</div>


	<div id="Subte" class="tabcontent">
	<h3>
		<svg style="height: 32px; width: 32px; color: rgb(0, 0, 0);" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-layer-backward" viewBox="0 0 16 16"> <path d="M8.354 15.854a.5.5 0 0 1-.708 0l-3-3a.5.5 0 0 1 0-.708l1-1a.5.5 0 0 1 .708 0l.646.647V4H1a1 1 0 0 1-1-1V1a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H9v7.793l.646-.647a.5.5 0 0 1 .708 0l1 1a.5.5 0 0 1 0 .708l-3 3z" fill="#000000"></path> <path d="M1 9a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1h4.5a.5.5 0 0 1 0 1H1v2h4.5a.5.5 0 0 1 0 1H1zm9.5 0a.5.5 0 0 1 0-1H15V6h-4.5a.5.5 0 0 1 0-1H15a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-4.5z" fill="#000000"></path> </svg>
		Anexo Subterráneo
	</h3>
	<form method="post" action="http://localhost/BDA2022/REPDA/index.php/Deletion/subte" onsubmit="return confirm('¿Estás seguro de eliminar el registro?');">
		<h4>ID <input type="number" required name="id" step="1" min="0"></h4>   
        <input type="submit" name="send" style="background-color: rgb(110,207,253); font-size: 16px; border-radius: 12px; border-style: groove;" value="Eliminar">
	</form>
	</div>

	<div id="Sup" class="tabcontent">
	<h3>
		<svg style="height: 32px; width: 32px; color: rgb(0, 0, 0);" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-layer-forward" viewBox="0 0 16 16"> <path d="M8.354.146a.5.5 0 0 0-.708 0l-3 3a.5.5 0 0 0 0 .708l1 1a.5.5 0 0 0 .708 0L7 4.207V12H1a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1v-2a1 1 0 0 0-1-1H9V4.207l.646.647a.5.5 0 0 0 .708 0l1-1a.5.5 0 0 0 0-.708l-3-3z" fill="#000000"></path> <path d="M1 7a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h4.5a.5.5 0 0 0 0-1H1V8h4.5a.5.5 0 0 0 0-1H1zm9.5 0a.5.5 0 0 0 0 1H15v2h-4.5a.5.5 0 0 0 0 1H15a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1h-4.5z" fill="#000000"></path> </svg>
		Anexo Superficial
	</h3>
	<form method="post" action="http://localhost/BDA2022/REPDA/index.php/Deletion/sup" onsubmit="return confirm('¿Estás seguro de eliminar el registro?');">
		<h4>ID <input type="number" required name="id" step="1" min="0"></h4>   
        <input type="submit" name="send" style="background-color: rgb(110,207,253); font-size: 16px; border-radius: 12px; border-style: groove;" value="Eliminar">
	</form>
	</div>


	<div id="Zon" class="tabcontent">
	<h3>
		<svg style="height: 32px; width: 32px; color: rgb(0, 0, 0);" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-layers-fill" viewBox="0 0 16 16"> <path d="M7.765 1.559a.5.5 0 0 1 .47 0l7.5 4a.5.5 0 0 1 0 .882l-7.5 4a.5.5 0 0 1-.47 0l-7.5-4a.5.5 0 0 1 0-.882l7.5-4z" fill="#000000"></path> <path d="m2.125 8.567-1.86.992a.5.5 0 0 0 0 .882l7.5 4a.5.5 0 0 0 .47 0l7.5-4a.5.5 0 0 0 0-.882l-1.86-.992-5.17 2.756a1.5 1.5 0 0 1-1.41 0l-5.17-2.756z" fill="#000000"></path> </svg>
		Zona Federal
	</h3>
	<form method="post" action="http://localhost/BDA2022/REPDA/index.php/Deletion/zona" onsubmit="return confirm('¿Estás seguro de eliminar el registro?');">
		<h4>ID <input type="number" required name="id" step="1" min="0"></h4>   
        <input type="submit" name="send" style="background-color: rgb(110,207,253); font-size: 16px; border-radius: 12px; border-style: groove;" value="Eliminar">
	</form>
	</div>

</section>