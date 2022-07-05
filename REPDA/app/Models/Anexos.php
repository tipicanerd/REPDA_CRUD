<?php

namespace App\Models;

use CodeIgniter\Model;

class Anexos extends Model{
    private function get_anexo($filters, $ta){
        $this->db->query("SET SESSION sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));");
        $consulta = "SELECT c.titular, ta.*  FROM concesion AS c INNER JOIN vista_$ta AS ta ON(c.titulo=ta.titulo) WHERE c.status=1";  
        if (!empty($filters['titular'])) {
            $consulta = $consulta . " AND titular LIKE '%" . $filters['titular'] . "%'";
            if (!empty($filters["titulo"])) {
                $consulta = $consulta . " AND ta.titulo= '" . $filters['titulo'] ."'";
            }
            if ($filters["Estado"]!="Selecciona un estado"){
                $consulta = $consulta . " AND eClave=" . $filters['Estado'];
            }
            if ($filters["Uso"]!="Selecciona un uso"){
                $consulta = $consulta . " AND uso= '" . $filters["Uso"] . "'";
            }
        }

        else if (!empty($filters['titulo'])) {
            $consulta = $consulta . " AND ta.titulo= '" . $filters['titulo'] . "'";
            if ($filters["Estado"]!="Selecciona un estado"){
                $consulta = $consulta . " AND eClave=" . $filters['Estado'];
            }
            if ($filters["Uso"]!="Selecciona un uso"){
                $consulta = $consulta . " AND uso= '" . $filters["Uso"] . "'" ;
            }
        }

        else if ($filters["Estado"]!="Selecciona un estado") {
            $consulta = $consulta . " AND eClave=" . $filters['Estado'];
            if ($filters["Uso"]!="Selecciona un uso"){
                $consulta = $consulta . " AND uso= '" . $filters["Uso"] . "'" ;
            }
        }
        else if ($filters["Uso"]!="Selecciona un uso"){
            $consulta = $consulta . " AND uso= '" . $filters["Uso"] . "'" ;
        }  
        return $this->db->query($consulta)->getResultArray();
    }


    public function getAnexos($filters){
        $anexos = array(
            'des' => array(),
            'subte' => array(),
            'supe' => array(),
            'zona' => array()
        );
        $this->db->query("SET SESSION sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));");

        if (isset($filters['tipo_anexo'])){
            $ta = $filters['tipo_anexo'];
            $anexos[$ta] = $this->get_anexo($filters,$ta);
        }

        else{
            $tas = array('des','subte','supe','zona');
            foreach ($tas as $ta) {
                $anexos[$ta] = $this->get_anexo($filters,$ta);
            }

        }

        return $anexos;
    }

    #INFO DESCARGAS
    public function getProcedencia(){
        $consulta = "SELECT DISTINCT(procedencia) FROM descarga ORDER BY procedencia";
        return $this->db->query($consulta)->getResultArray();
    }

    public function getCuerpoReceptor(){
        $consulta = "SELECT DISTINCT(cuerpo_receptor) FROM descarga ORDER BY cuerpo_receptor";
        return $this->db->query($consulta)->getResultArray();
    }

    public function getAfluenteDes(){
        $consulta = "SELECT DISTINCT(afluente) FROM descarga ORDER BY afluente";
        return $this->db->query($consulta)->getResultArray();
    }

    public function getForma(){
        $consulta = "SELECT DISTINCT(forma) FROM descarga ORDER BY forma";
        return $this->db->query($consulta)->getResultArray();
    }

    public function getTipoDes(){
        $consulta = "SELECT DISTINCT(tipo) FROM descarga ORDER BY tipo";
        return $this->db->query($consulta)->getResultArray();
    }

    #Subterraneos
    public function getAcuiferos(){
        $consulta = "SELECT * FROM acuifero ORDER BY clave";
        return $this->db->query($consulta)->getResultArray();
    }

    #Superficiales
    public function getSuperficies(){
        $consulta = "SELECT * FROM superficie ORDER BY id";
        return $this->db->query($consulta)->getResultArray();
    }
    #Zona Federal
    public function getCorrientes(){
        $consulta = "SELECT DISTINCT(corriente) FROM zonaFd ORDER BY corriente";
        return $this->db->query($consulta)->getResultArray();
    }


}