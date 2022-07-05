<?php

namespace App\Controllers;

use App\Models\Concesiones;
use App\Models\Anexos;

class Queries extends BaseController{
    public function index(){
        $modelCon = model(Concesiones::class);
        $data['Concesiones'] = $modelCon->getTitles($_POST);

        $modelAne = model(Anexos::class);
        $data['Anexos'] = $modelAne->getAnexos($_POST);

        $modelEdo = model(Estados::class);
        $data['estados'] = $modelEdo->getStates();
        
        $modelMun = model(Municipios::class);
        $data['moeloMun'] = $modelMun;

        $modelUse = model(Usos::class);
        $data['usos'] = $modelUse->getUses();

        return 
            view('consulta/query',$data) .
            view('consulta/results',$data) .
            view('consulta/footer');
    }


}