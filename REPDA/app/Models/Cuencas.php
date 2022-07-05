<?php

namespace App\Models;

use CodeIgniter\Model;

class Cuencas extends Model{
	public function getCuencas(){
		$consulta = "SELECT * FROM cuenca ORDER BY clave";
		return $this->db->query($consulta)->getResultArray();
	}
}