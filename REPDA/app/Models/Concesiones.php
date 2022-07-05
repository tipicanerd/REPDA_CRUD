<?php

namespace App\Models;

use CodeIgniter\Model;

class Concesiones extends Model{
    public function getTitles($filters){
        $this->db->query("SET SESSION sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''));");
        $consulta = 'SELECT * FROM vista_concesion ';

        if (!empty($filters['titular'])) {
            $consulta = $consulta . "WHERE titular LIKE '%" . $filters['titular'] . "%'";
            if (!empty($filters["titulo"])) {
                $consulta = $consulta . " AND titulo= '" . $filters['titulo'] ."'";
            }
            if ($filters["Estado"]!="Selecciona un estado"){
                $consulta = $consulta . " AND eClave=" . $filters['Estado'];
            }
            if ($filters["Uso"]!="Selecciona un uso"){
                $consulta = $consulta . " AND uso= '" . $filters["Uso"] . "'";
            }
            if (isset($filters['tipo_anexo'])) {
                $ta = $filters['tipo_anexo'];
                if ($ta=="des") {
                    $consulta = $consulta . " AND totDS>0";
                }
                else if ($ta=="sub") {
                    $consulta = $consulta . " AND totSB>0";
                }
                else if ($ta=="sup") {
                    $consulta = $consulta . " AND totSP>0";
                }
                else if ($ta=="zon") {
                    $consulta = $consulta . " AND totZF>0";
                }
            }

        }

        else if (!empty($filters['titulo'])) {
            $consulta = $consulta . "WHERE titulo= '" . $filters['titulo'] . "'";
            if ($filters["Estado"]!="Selecciona un estado"){
                $consulta = $consulta . " AND eClave=" . $filters['Estado'];
            }
            if ($filters["Uso"]!="Selecciona un uso"){
                $consulta = $consulta . " AND uso= '" . $filters["Uso"] . "'" ;
            }
            if (isset($filters['tipo_anexo'])) {
                $ta = $filters['tipo_anexo'];
                if ($ta=="des") {
                    $consulta = $consulta . " AND totDS>0";
                }
                else if ($ta=="sub") {
                    $consulta = $consulta . " AND totSB>0";
                }
                else if ($ta=="sup") {
                    $consulta = $consulta . " AND totSP>0";
                }
                else if ($ta=="zon") {
                    $consulta = $consulta . " AND totZF>0";
                }
            }
        }

        else if ($filters["Estado"]!="Selecciona un estado") {
            $consulta = $consulta . "WHERE eClave=" . $filters['Estado'];
            if ($filters["Uso"]!="Selecciona un uso"){
                $consulta = $consulta . " AND uso= '" . $filters["Uso"] . "'" ;
            }
            if (isset($filters['tipo_anexo'])) {
                $ta = $filters['tipo_anexo'];
                if ($ta=="des") {
                    $consulta = $consulta . " AND totDS>0";
                }
                else if ($ta=="sub") {
                    $consulta = $consulta . " AND totSB>0";
                }
                else if ($ta=="sup") {
                    $consulta = $consulta . " AND totSP>0";
                }
                else if ($ta=="zon") {
                    $consulta = $consulta . " AND totZF>0";
                }
            }
        }
        else if ($filters["Uso"]!="Selecciona un uso"){
            $consulta = $consulta . "WHERE uso= '" . $filters["Uso"] . "'" ;
            if (isset($filters['tipo_anexo'])) {
                $ta = $filters['tipo_anexo'];
                if ($ta=="des") {
                    $consulta = $consulta . " AND totDS>0";
                }
                else if ($ta=="sub") {
                    $consulta = $consulta . " AND totSB>0";
                }
                else if ($ta=="sup") {
                    $consulta = $consulta . " AND totSP>0";
                }
                else if ($ta=="zon") {
                    $consulta = $consulta . " AND totZF>0";
                }
            }
        }

        else if (isset($filters['tipo_anexo'])) {
                $ta = $filters['tipo_anexo'];
                if ($ta=="des") {
                    $consulta = $consulta . "WHERE totDS>0";
                }
                else if ($ta=="sub") {
                    $consulta = $consulta . "WHERE totSB>0";
                }
                else if ($ta=="sup") {
                    $consulta = $consulta . "WHERE totSP>0";
                }
                else if ($ta=="zon") {
                    $consulta = $consulta . "WHERE totZF>0";
                }
            }
        $query = $this->db->query($consulta);
        return $query->getResultArray();
    }

    public function getOnlyTitles(){
        $consulta = "SELECT titulo FROM concesion";
        $query = $this->db->query($consulta);
        return $query->getResultArray();

    }
}