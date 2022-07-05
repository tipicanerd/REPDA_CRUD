<?php

namespace App\Models;

use CodeIgniter\Model;

class Municipios extends Model{
    public function getMunicipality(){
        
        $query = $this->db->query("SELECT clave,nombre FROM municipio ORDER BY clave");
        return $query->getResultArray();
    }
}