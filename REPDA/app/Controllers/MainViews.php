<?php

namespace App\Controllers;

class MainViews extends BaseController
{

    public function consult(){
        $modelEdo = model(Estados::class);
        $data['estados'] = $modelEdo->getStates();
        
        $modelMun = model(Municipios::class);
        $data['moeloMun'] = $modelMun;

        $modelUse = model(Usos::class);
        $data['usos'] = $modelUse->getUses();
        
        $data['Concesiones']= array();
        $data['Anexos'] = array();
        return 
            view('consulta/query',$data) .
            view('consulta/results',$data) .
            view('consulta/footer');
    }
    public function login(){
        $data['mensaje']="";
        return view('login',$data);
    }
}
