<?php

namespace App\Models;

use CodeIgniter\Model;

class Estados extends Model{
    protected $table = 'estado';
    public function getStates($nombre = null){
        if ($nombre === null) {
            return $this->findAll();
        }

        return $this->where(['nombre' => $nombre])->first();
    }
}