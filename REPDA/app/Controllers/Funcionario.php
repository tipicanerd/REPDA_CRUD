<?php

namespace App\Controllers;

use App\Models\Login;
use App\Models\Estados;
use App\Models\Municipios;
use App\Models\Usos;
use App\Models\Concesiones;
use App\Models\Anexos;
use App\Models\Cuencas;
use App\Models\Acuiferos;
use App\Models\Superficies;



class Funcionario extends BaseController{
    public function index(){
        $modelLog = model(Login::class);
        $data['nombre'] = $modelLog->getName($_POST);
        if (empty($data['nombre'])){
            $data['mensaje'] = "USUARIO O CONTRASEÑA INCORRECTAS";
            return view("login",$data);
        }
        else if (count($data['nombre'])==1){
            $data['nombre'] = $data['nombre'][0]['nombre'];
            return view("func/header")
                .  view("func/inicio",$data)
                .  view("func/footer");
        }
    }

    public function insert(){
        #Concesiones
        $modelCon = model(Concesiones::class);
        $data['Concesiones'] = $modelCon->getOnlyTitles();

        $modelEdo = model(Estados::class);
        $data['estados'] = $modelEdo->getStates();
        
        $modelMun = model(Municipios::class);
        $data['municipios'] = $modelMun->getMunicipality();

        $modelUse = model(Usos::class);
        $data['usos'] = $modelUse->getUses();

        #ANEXOS
        $modelAne = model(Anexos::class);
        $modelCuen = model(Cuencas::class);
        $data['cuencas'] = $modelCuen->getCuencas();

        #Descargas
        $data['procedencia'] = $modelAne->getProcedencia();
        $data['cuerpo_receptor'] = $modelAne->getCuerpoReceptor();
        $data['afluente_des'] = $modelAne->getAfluenteDes();
        $data['forma'] = $modelAne->getForma();
        $data['tipo_des'] = $modelAne->getTipoDes();

        #Subtes
        $data['acuiferos'] = $modelAne->getAcuiferos();

        #Sup
        $data['superficies'] = $modelAne->getSuperficies();

        #Zon
        $data['corrientes'] = $modelAne->getCorrientes();

        return view("func/header")
            . view("func/insert/inicio",$data)
            .  view("func/footer");
    }

    public function update(){
        #Concesiones
        $modelCon = model(Concesiones::class);
        $data['Concesiones'] = $modelCon->getOnlyTitles();

        $modelEdo = model(Estados::class);
        $data['estados'] = $modelEdo->getStates();
        
        $modelMun = model(Municipios::class);
        $data['municipios'] = $modelMun->getMunicipality();

        $modelUse = model(Usos::class);
        $data['usos'] = $modelUse->getUses();

        #ANEXOS
        $modelAne = model(Anexos::class);
        $modelCuen = model(Cuencas::class);
        $data['cuencas'] = $modelCuen->getCuencas();

        #Descargas
        $data['procedencia'] = $modelAne->getProcedencia();
        $data['cuerpo_receptor'] = $modelAne->getCuerpoReceptor();
        $data['afluente_des'] = $modelAne->getAfluenteDes();
        $data['forma'] = $modelAne->getForma();
        $data['tipo_des'] = $modelAne->getTipoDes();

        #Subtes
        $data['acuiferos'] = $modelAne->getAcuiferos();

        #Sup
        $data['superficies'] = $modelAne->getSuperficies();

        #Zon
        $data['corrientes'] = $modelAne->getCorrientes();

        return view("func/header")
            . view("func/update/inicio",$data)
            .  view("func/footer");
    }

    public function delete(){
        return view("func/header")
            .  view("func/delete/inicio")
            .  view("func/footer");
    }

    public function add(){
        #Descarga
        $modelCon = model(Concesiones::class);
        $data['Concesiones'] = $modelCon->getOnlyTitles();
        
        #ANEXOS
        $modelAne = model(Anexos::class);

        #Subtes
        $data['acuiferos'] = $modelAne->getAcuiferos();

        #Sup
        $data['superficies'] = $modelAne->getSuperficies();


        return view("func/header")
            .  view("func/add/inicio",$data)
            .  view("func/footer");
    }

    public function logout(){
        return view('welcome_message');
    }
}
