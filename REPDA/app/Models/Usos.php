<?php

namespace App\Models;

use CodeIgniter\Model;

class Usos extends Model{
    protected $table = 'concesiones';
    public function getUses(){
        
        $query = $this->db->query('SELECT DISTINCT(uso) FROM concesion;');
        return $query->getResultArray();
    }
}