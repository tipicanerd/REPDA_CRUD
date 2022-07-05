<?php

namespace App\Models;

use CodeIgniter\Model;

class Adds extends Model{
	public function add_descarga($data){
		$id = $data["id"];
		$titulo = $data["titulo"];
		$vol_diario = $data["vol_diario"];
		$vol_anual = $data["vol_anual"];

		$consulta = "SELECT id FROM descarga WHERE id=$id AND status=1";
		
		$result = $this->db->query($consulta)->getResultArray();

		if (count($result)!=1){
			$mensaje = "El anexo de descarga $id no se encuentra registrado.";
			return $mensaje;
		}

		$consulta = "SELECT id_anexo FROM descarga_concesion WHERE id_anexo=$id AND titulo='$titulo'";
		
		$result = $this->db->query($consulta)->getResultArray();

		if (count($result)<1){
			$mensaje = "El anexo de descarga $id no se encuentra registrado con el títlo $titulo.";
			return $mensaje;
		}

		$ins_descarga = "INSERT INTO descarga_concesion(id_anexo,titulo,fecha,vol_anual,vol_diario) VALUES ($id,'$titulo',CURDATE(),$vol_anual,$vol_diario)";

		$this->db->query($ins_descarga);

		$mensaje = "Se ha agregado correctamente.";
		return $mensaje;
	}

	public function add_subte($data){
		$id = $data["id"];
		$acuifero = $data["acuifero"];
		$vol_anual = $data["vol_anual"];

		$consulta = "SELECT id FROM anexoExt WHERE id=$id AND status=1 AND tipo='SUBTERRÁNEO'";
		$result = $this->db->query($consulta)->getResultArray();

		if (count($result)!=1){
			$mensaje = "El anexo subterráneo $id no se encuentra registrado.";
			return $mensaje;
		}

		$consulta = "SELECT id_anexo FROM anexoExt_ac WHERE id_anexo=$id AND clave_ac=$acuifero";
		
		$result = $this->db->query($consulta)->getResultArray();

		if (count($result)<1){
			$mensaje = "El anexo subterráneo $id no se encuentra registrado con el acuifero $acuifero.";
			return $mensaje;
		}

		$ins_subte = "INSERT INTO anexoExt_ac(id_anexo,clave_ac,fecha,vol_anual) VALUES ($id,$acuifero,CURDATE(),$vol_anual)";

		$this->db->query($ins_subte);

		$mensaje = "Se ha agregado correctamente.";
		return $mensaje;

	}

	public function add_sup($data){
		$id = $data["id"];
		$superficie = $data["superficie"];
		$vol_anual = $data["vol_anual"];


		$consulta = "SELECT id FROM anexoExt WHERE id=$id AND status=1 AND tipo='SUPERFICIAL'";
		$result = $this->db->query($consulta)->getResultArray();

		if (count($result)!=1){
			$mensaje = "El anexo superficial $id no se encuentra registrado.";
			return $mensaje;
		}

		$consulta = "SELECT id_anexo FROM anexoExt_sup WHERE id_anexo=$id AND id_sup=$superficie";
		
		$result = $this->db->query($consulta)->getResultArray();

		if (count($result)<1){
			$mensaje = "El anexo superficial $id no se encuentra registrado con la superficie $superficie.";
			return $mensaje;
		}

		$ins_sup = "INSERT INTO anexoExt_sup(id_anexo,id_sup,fecha,vol_anual) VALUES ($id,$superficie,CURDATE(),$vol_anual)";

		$this->db->query($ins_sup);

		$mensaje = "Se ha agregado correctamente.";
		return $mensaje;

		$mensaje = "Se ha agregado correctamente.";
		return $mensaje;
	}
}