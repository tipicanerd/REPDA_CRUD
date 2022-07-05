<?php

namespace App\Models;

use CodeIgniter\Model;

class Deletes extends Model{
	public function delete_concesion($data){
		$titulo = $data['titulo'];

		$ins = "SELECT status FROM concesion WHERE titulo='$titulo'";
		$status = $this->db->query($ins)->getResultArray()[0]['status'];

		if ($status==0){
			return "El registro ya no existe.";
		}

		$instruccion = "UPDATE concesion SET status=0 WHERE titulo='$titulo'";
		
		$this->db->query($instruccion);
		
		$mensaje = "Se ha eliminado la concesion $titulo.";
		return $mensaje;

	}

	public function delete_descarga($data){
		$id = $data['id'];

		$ins = "SELECT status FROM descarga WHERE id=$id";
		$status = $this->db->query($ins)->getResultArray()[0]['status'];

		if ($status==0){
			return "El registro ya no existe.";
		}

		$instruccion = "UPDATE descarga SET status=0 WHERE id=$id";

		$this->db->query($instruccion);

        $mensaje = "Se ha eliminado el anexo de descargas $id";
        return $mensaje;
	}


	public function delete_subte($data){
		$id = $data['id'];

		$ins = "SELECT status FROM anexoExt WHERE id=$id";
		$status = $this->db->query($ins)->getResultArray()[0]['status'];

		if ($status==0){
			return "El registro ya no existe.";
		}

		$instruccion = "UPDATE anexoExt SET status=0 WHERE id=$id";

		$this->db->query($instruccion);

        $mensaje = "Se ha eliminado el anexo de agua subterránea $id";
        return $mensaje;
	}


	public function delete_sup($data){
		$id = $data['id'];

		$ins = "SELECT status FROM anexoExt WHERE id=$id";
		$status = $this->db->query($ins)->getResultArray()[0]['status'];

		if ($status==0){
			return "El registro ya no existe.";
		}

		$instruccion = "UPDATE descarga SET status=0 WHERE id=$id";

		$this->db->query($instruccion);

        $mensaje = "Se ha eliminado el anexo de agua superficial $id";
        return $mensaje;	
	}

	public function delete_zona($data){
		$id = $data['id'];
		$instruccion = "UPDATE zonaFd SET status=0 WHERE id=$id";

		$this->db->query($instruccion);

        $mensaje = "Se ha eliminado el anexo de zona federal $id";
        return $mensaje;
	}
}