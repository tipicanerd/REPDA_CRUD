<style type="text/css">
.tg  {border-collapse:collapse;border-spacing:0; overflow: auto; width: 100%; height: 100%;}
.tg td{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
  overflow:hidden;padding:10px 5px;word-break:normal;}
.tg th{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
  font-weight:normal;overflow:hidden;padding:10px 5px;word-break:normal;}
.tg .tg-a8id{background-color:#6ecffd;border-color:inherit;font-family:Arial, Helvetica, sans-serif !important;font-size:16px;
  text-align:center;vertical-align:middle}
.tg .tg-0bcl{background-color:#6ECFFD;border-color:inherit;font-family:Arial, Helvetica, sans-serif !important;font-size:16px;
  text-align:center;vertical-align:middle}
.tg .tg-z290{border-color:inherit;font-family:Arial, Helvetica, sans-serif !important;font-size:16px;text-align:left;
  vertical-align:top}
.tg .tg-z291{border-color:inherit;font-family:Arial, Helvetica, sans-serif !important;font-size:16px;text-align:right;
  vertical-align:top}
</style>

<h2>
        <svg style="height: 32px; width: 32px; color: rgb(0, 0, 0);" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-droplet" viewBox="0 0 16 16"> <path fill-rule="evenodd" d="M7.21.8C7.69.295 8 0 8 0c.109.363.234.708.371 1.038.812 1.946 2.073 3.35 3.197 4.6C12.878 7.096 14 8.345 14 10a6 6 0 0 1-12 0C2 6.668 5.58 2.517 7.21.8zm.413 1.021A31.25 31.25 0 0 0 5.794 3.99c-.726.95-1.436 2.008-1.96 3.07C3.304 8.133 3 9.138 3 10a5 5 0 0 0 10 0c0-1.201-.796-2.157-2.181-3.7l-.03-.032C9.75 5.11 8.5 3.72 7.623 1.82z" fill="#000000"></path> <path fill-rule="evenodd" d="M4.553 7.776c.82-1.641 1.717-2.753 2.093-3.13l.708.708c-.29.29-1.128 1.311-1.907 2.87l-.894-.448z" fill="#000000"></path> </svg>
        Resultados de consulta
    </h2>
    <div class="tab">
        <button class="tablinks" onclick="openResult(event, 'Concesion')" id="defaultOpenResult">
            Concesiones
        </button>
        <button class="tablinks" onclick="openResult(event, 'Anexo')">
            Anexos
        </button>
    </div>

    <!-- Tab content -->
    
    <div id="Concesion" class="tabcontentResult">
        <h4>En este apartado se presenta un resumen de los títulos de agua.</h4>

<table class="tg" id="concesion">
<thead>
  <tr>
    <th class="tg-a8id">Título</th>
    <th class="tg-a8id">Uso</th>
    <th class="tg-a8id">Titular</th>
    <th class="tg-a8id">Volumen de extracción superficial anual (m³)</th>
    <th class="tg-a8id">Total de anexos superficiales</th>
    <th class="tg-0bcl">Volumen de extracción subterránea anual (m³)</th>
    <th class="tg-0bcl">Total de anexos subterráneos</th>
    <th class="tg-a8id">Volumen total de extracción anual (m³)</th>
    <th class="tg-a8id">Volumen de descarga anual (m³)</th>
    <th class="tg-a8id">Total de anexos de descarga</th>
    <th class="tg-a8id">Superficie (m²)</th>
    <th class="tg-a8id">Total de zonas federales</th>
    <th class="tg-a8id">Fecha de registro</th>
    <th class="tg-a8id">Autoridad que emitió el registro</th>
    <th class="tg-a8id">Clave del estado</th>
    <th class="tg-a8id">Nombre del estado</th>
    </tr>
    </thead>
    <tbody>
  

      <?php
        if(!empty($Concesiones)){
            
            foreach ($Concesiones as $item) {
                echo "<tr>";
                echo '<td class="tg-z290">' . $item['titulo']. '</td>';
                echo '<td class="tg-z290">' . $item['uso']. '</td>';
                echo '<td class="tg-z290">' . $item['titular']. '</td>';
                echo '<td class="tg-z291">' . $item['volSP']. '</td>';
                echo '<td class="tg-z291">' . $item['totSP']. '</td>';
                echo '<td class="tg-z291">' . $item['volSB']. '</td>';
                echo '<td class="tg-z291">' . $item['totSB']. '</td>';
                echo '<td class="tg-z291">' . $item['volTO']. '</td>';
                echo '<td class="tg-z291">' . $item['volDS']. '</td>';
                echo '<td class="tg-z291">' . $item['totDS']. '</td>';
                echo '<td class="tg-z291">' . $item['Sup']. '</td>';
                echo '<td class="tg-z291">' . $item['totZF']. '</td>';
                echo '<td class="tg-z290">' . $item['fecha']. '</td>';
                echo '<td class="tg-z290">' . $item['autoridad']. '</td>';
                echo '<td class="tg-z290">' . $item['eClave']. '</td>';
                echo '<td class="tg-z290">' . $item['eNombre']. '</td>';
                echo "</tr>";
            }
            
        }
      ?>
    </tbody>
    </table>
    <br>
    <div>
            <button style="background-color: rgb(110,207,253); font-size: 16px; border-radius: 12px; border-style: groove;" onclick="exportTableToCSV('concesiones.csv','concesion')">
                Descargar CSV
            </button>
    </div>
    <br><br><br>
    </div>
    

    <div id="Anexo" class="tabcontentResult">
        <h4>En este apartado se presenta información sobre los anexos.</h4>
        <?php
        #DESCARGAS  
        $columns = array('titular','titulo','id','rClave','rNombre',
        'cClave','cNombre','eClave','eNombre','mClave','mNombre',
        'tipo','cuerpo_receptor','procedencia','afluente','forma',
        'longitud','latitud','vol_diario','vol_anual',
        );
        if (!empty($Anexos["des"])){
        echo "<h3>Anexos de descarga</h3>";
        echo "<table class='tg' id='descarga'>";
            echo "<thead>";
                echo "<tr>";
                    echo "<th class='tg-a8id'>Titular</th>";
                    echo "<th class='tg-a8id'>Título</th>";
                    echo "<th class='tg-a8id'>ID</th>";
                    echo "<th class='tg-a8id'>Clave de región</th>";
                    echo "<th class='tg-a8id'>Nombre de Región</th>";
                    echo "<th class='tg-a8id'>Clave de la cuenca</th>";
                    echo "<th class='tg-a8id'>Nombre de la cuenca</th>";
                    echo "<th class='tg-a8id'>Clave del estado</th>";
                    echo "<th class='tg-a8id'>Nombre del estado</th>";
                    echo "<th class='tg-a8id'>Clave del municipio</th>";
                    echo "<th class='tg-a8id'>Nombre del municipio</th>";
                    echo "<th class='tg-a8id'>Tipo de descarga</th>";
                    echo "<th class='tg-a8id'>Cuerpo receptor</th>";
                    echo "<th class='tg-a8id'>Procedencia</th>";
                    echo "<th class='tg-a8id'>Afluente al que se descarga</th>";
                    echo "<th class='tg-a8id'>Forma de descarga</th>";
                    echo "<th class='tg-a8id'>Longitud</th>";
                    echo "<th class='tg-a8id'>Latitud</th>";
                    echo "<th class='tg-a8id'>Volumen de descarga diaria(m³)</th>";
                    echo "<th class='tg-a8id'>Volumen de descarga anual(m³)</th>";
                echo "</tr>";
                echo "</thead>";
                echo "<tbody>";
                foreach ($Anexos['des'] as $a) {
                    echo "<tr>";
                        foreach ($columns as $c){
                            if(!in_array($c, array('longitud','latitud','vol_diario','vol_anual'))){
                                echo "<td class='tg-z290'>" . $a[$c] . "</td>";
                            }
                            else{
                                echo "<td class='tg-z291'>" . $a[$c] . "</td>";
                            }
                        }
                    echo "</tr>";
                }
            echo "</tbody>";
        echo "</table> ";
        echo '<br>'; 
        echo '<div>';
        echo '<button style="background-color: rgb(110,207,253); font-size: ;16px; border-radius: 12px; border-style: groove;" onclick="exportTableToCSV(' . "'descargas.csv','descarga')" . '">Descargar CSV';
        echo '</button>';
        echo '</div>';
        echo '<br><br><br>';
        }
        #SUBTERRANEOS
        $columns = array('titular', 'titulo','id','rClave','rNombre','cClave','cNombre','eClave','eNombre','mClave','mNombre',
            'acClave','acNombre','longitud','latitud','vol_anual');

        if (!empty($Anexos["subte"])){
        echo "<h3>Anexos subterráneos</h3>";
        echo "<table class='tg' id='subterraneo'>";
            echo "<thead>";
                echo "<tr>";
                    echo "<th class='tg-a8id'>Titular</th>";
                    echo "<th class='tg-a8id'>Título</th>";
                    echo "<th class='tg-a8id'>ID</th>";
                    echo "<th class='tg-a8id'>Clave de región</th>";
                    echo "<th class='tg-a8id'>Nombre de Región</th>";
                    echo "<th class='tg-a8id'>Clave de la cuenca</th>";
                    echo "<th class='tg-a8id'>Nombre de la cuenca</th>";
                    echo "<th class='tg-a8id'>Clave del estado</th>";
                    echo "<th class='tg-a8id'>Nombre del estado</th>";
                    echo "<th class='tg-a8id'>Clave del municipio</th>";
                    echo "<th class='tg-a8id'>Nombre del municipio</th>";
                    echo "<th class='tg-a8id'>Clave del acuífero</th>";
                    echo "<th class='tg-a8id'>Nombre del acuífero</th>";
                    echo "<th class='tg-a8id'>Longitud</th>";
                    echo "<th class='tg-a8id'>Latitud</th>";
                    echo "<th class='tg-a8id'>Volumen de extracción anual (m³)</th>";
                    
                echo "</tr>";
                echo "</thead>";
                echo "<tbody>";
                foreach ($Anexos['subte'] as $a) {
                    echo "<tr>";
                        foreach ($columns as $c){
                            if(!in_array($c, array('vol_anual','longitud','latitud'))){
                                echo "<td class='tg-z290'>" . $a[$c] . "</td>";
                            }
                            else{
                                echo "<td class='tg-z291'>" . $a[$c] . "</td>";
                            }
                        }
                    echo "</tr>";
                }
            echo "</tbody>";
        echo "</table> ";
        echo '<br>'; 
        echo '<div>';
        echo '<button style="background-color: rgb(110,207,253); font-size: ;16px; border-radius: 12px; border-style: groove;" onclick="exportTableToCSV(' . "'subterraneos.csv','subterraneo')" . '">Descargar CSV';
        echo '</button>';
        echo '</div>';
        echo '<br><br><br>';
        }
        #SUPERFICIALES
        $columns = array('titular', 'titulo','id','rClave','rNombre','cClave','cNombre','eClave','eNombre','mClave','mNombre',
            'fuente','afluente','longitud','latitud','vol_anual');

        if (!empty($Anexos["supe"])){
        echo "<h3>Anexos superficiales</h3>";
        echo "<table class='tg' id='superficial'>";
            echo "<thead>";
                echo "<tr>";
                    echo "<th class='tg-a8id'>Titular</th>";
                    echo "<th class='tg-a8id'>Título</th>";
                    echo "<th class='tg-a8id'>ID</th>";
                    echo "<th class='tg-a8id'>Clave de región</th>";
                    echo "<th class='tg-a8id'>Nombre de Región</th>";
                    echo "<th class='tg-a8id'>Clave de la cuenca</th>";
                    echo "<th class='tg-a8id'>Nombre de la cuenca</th>";
                    echo "<th class='tg-a8id'>Clave del estado</th>";
                    echo "<th class='tg-a8id'>Nombre del estado</th>";
                    echo "<th class='tg-a8id'>Clave del municipio</th>";
                    echo "<th class='tg-a8id'>Nombre del municipio</th>";
                    echo "<th class='tg-a8id'>Fuente</th>";
                    echo "<th class='tg-a8id'>Afluente</th>";
                    echo "<th class='tg-a8id'>Longitud</th>";
                    echo "<th class='tg-a8id'>Latitud</th>";
                    echo "<th class='tg-a8id'>Volumen de extracción anual (m³)</th>";
                echo "</tr>";
                echo "</thead>";
                echo "<tbody>";
                foreach ($Anexos['supe'] as $a) {
                    echo "<tr>";
                        foreach ($columns as $c){
                            if(!in_array($c, array('vol_anual','longitud','latitud'))){
                                echo "<td class='tg-z290'>" . $a[$c] . "</td>";
                            }
                            else{
                                echo "<td class='tg-z291'>" . $a[$c] . "</td>";
                            }
                        }
                    echo "</tr>";
                }
            echo "</tbody>";
        echo "</table> "; 
        echo '<br>'; 
        echo '<div>';
        echo '<button style="background-color: rgb(110,207,253); font-size: ;16px; border-radius: 12px; border-style: groove;" onclick="exportTableToCSV(' . "'superficiales.csv','superficial')" . '">Descargar CSV';
        echo '</button>';
        echo '</div>';
        echo '<br><br><br>';  
        }
        #ZONA FEDERAL
        $columns = array('titular', 'titulo','id','rClave','rNombre','cClave','cNombre',
            'eClave','eNombre','mClave','mNombre',
            'corriente','longitud','latitud','superficie');

        if (!empty($Anexos["zona"])){
        echo "<h3>Anexos zonas federales</h3>";
        echo "<table class='tg' id='zonaF'>";
            echo "<thead>";
                echo "<tr>";
                    echo "<th class='tg-a8id'>Titular</th>";
                    echo "<th class='tg-a8id'>Título</th>";
                    echo "<th class='tg-a8id'>ID</th>";
                    echo "<th class='tg-a8id'>Clave de región</th>";
                    echo "<th class='tg-a8id'>Nombre de Región</th>";
                    echo "<th class='tg-a8id'>Clave de la cuenca</th>";
                    echo "<th class='tg-a8id'>Nombre de la cuenca</th>";
                    echo "<th class='tg-a8id'>Clave del estado</th>";
                    echo "<th class='tg-a8id'>Nombre del estado</th>";
                    echo "<th class='tg-a8id'>Clave del municipio</th>";
                    echo "<th class='tg-a8id'>Nombre del municipio</th>";
                    echo "<th class='tg-a8id'>Corriente</th>";
                    echo "<th class='tg-a8id'>Longitud</th>";
                    echo "<th class='tg-a8id'>Latitud</th>";
                    echo "<th class='tg-a8id'>Superficie (m²)</th>";
                echo "</tr>";
                echo "</thead>";
                echo "<tbody>";
                foreach ($Anexos['zona'] as $a) {
                    echo "<tr>";
                        foreach ($columns as $c){
                            if(!in_array($c, array('superficie','longitud','latitud'))){
                                echo "<td class='tg-z290'>" . $a[$c] . "</td>";
                            }
                            else{
                                echo "<td class='tg-z291'>" . $a[$c] . "</td>";
                            }
                        }
                    echo "</tr>";
                }
            echo "</tbody>";
        echo "</table> ";   
        echo '<br>'; 
        echo '<div>';
        echo '<button style="background-color: rgb(110,207,253); font-size: ;16px; border-radius: 12px; border-style: groove;" onclick="exportTableToCSV(' . "'zonas_federales.csv','zonaF')" . '">Descargar CSV';
        echo '</button>';
        echo '</div>';
        echo '<br><br><br>';
        }
        ?>
    </div>
</section>

</div>
