<?php

namespace App\Models;

use CodeIgniter\Model;

class Login extends Model{
    public function getName($data){
        $consulta = "SELECT nombre FROM funcionario WHERE usuario='".$data['usuario'] ."' AND contrasenia=MD5('" .$data['contrasenia']."')";
        $query = $this->db->query($consulta);
        return $query->getResultArray();
    }
}