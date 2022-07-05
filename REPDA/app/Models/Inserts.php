<?php

namespace App\Models;

use CodeIgniter\Model;

class Inserts extends Model{
	public function insert_concesion($data){
		$titulo = $data['titulo'];
		$titular = $data['titular'];
		$uso = $data['uso'];
		$autoridad = $data['autoridad'];

		$instruccion = "INSERT INTO concesion(titulo,titular,uso,autoridad,fecha) VALUES ('$titulo','$titular', '$uso','$autoridad', CURDATE())";
		$this->db->query($instruccion);
		$mensaje = "Se ha insertado correctamente la concesion $titulo perteneciente a $titular para el uso $uso.";

		return $mensaje;

	}

	public function insert_descarga($data){
		$titulo = $data['titulo'];
		$procedencia = $data['procedencia'];
		$cuerpo_receptor = $data['cuerpo_receptor'];
		$longitud = $data['longitud'];
		$latitud = $data['latitud'];
		$afluente = $data['afluente'];
        $forma = $data['forma'];
        $tipo = $data['tipo_des'];
        $estado = $data['estado'];
        $municipio = $data['municipio'];
        $cuenca = $data['cuenca'];
        $vol_diario = $data['vol_diario'];
        $vol_anual = $data['vol_anual'];

        $ins_descarga = "INSERT INTO descarga(procedencia,cuerpo_receptor,tipo,latitud,longitud,afluente,forma,clave_mun,clave_edo,clave_cuenca) VALUES ('$procedencia','$cuerpo_receptor','$tipo',$latitud,$longitud,'$afluente','$forma',$municipio,$estado,$cuenca) ";
        $this->db->query($ins_descarga);


        $id_anexo = $this->db->query("SELECT max(id) AS 'id' FROM descarga")->getResultArray()[0]['id'];
        $ins_des_con = "INSERT INTO descarga_concesion(id_anexo,titulo,vol_diario,vol_anual,fecha) VALUES($id_anexo,'$titulo',$vol_diario,$vol_anual,CURDATE())";
        $this->db->query($ins_des_con);

        $mensaje = "Se ha insertado correctamente el anexo $id_anexo, que ampara el título $titulo con coordenadas ($longitud,$latitud)";

        return $mensaje;

		
	}

	public function insert_subte($data){
		$titulo = $data['titulo'];
		$longitud = $data['longitud'];
		$latitud = $data['latitud'];
		$estado = $data['estado'];
		$municipio = $data['municipio'];
		$acuifero = $data['acuifero'];
		$cuenca = $data['cuenca'];
		$vol_anual = $data['vol_anual'];
		$tipo = "SUBTERRÁNEO";
		
		$ins_anexoExt = "INSERT INTO anexoExt(latitud,longitud,titulo,clave_mun,clave_edo,clave_cuenca,tipo) VALUES ($latitud,$longitud,'$titulo',$municipio,$estado,$cuenca,'$tipo')";

		$this->db->query($ins_anexoExt);

		$id_anexo = $this->db->query("SELECT max(id) AS 'id' FROM anexoExt")->getResultArray()[0]['id'];

        $ins_ae_ac = "INSERT INTO anexoExt_ac(id_anexo,clave_ac,vol_anual,fecha) VALUES($id_anexo,$acuifero,$vol_anual,CURDATE())";

        $this->db->query($ins_ae_ac);

        $mensaje = "Se ha insertado correctamente el anexo $id_anexo, que ampara el título $titulo con coordenadas ($longitud,$latitud)";

        return $mensaje;
	}

	public function insert_sup($data){
		$titulo = $data['titulo'];
		$longitud = $data['longitud'];
		$latitud = $data['latitud'];
		$estado = $data['estado'];
		$municipio = $data['municipio'];
		$superficie = $data['superficie'];
		$cuenca = $data['cuenca'];
		$vol_anual = $data['vol_anual'];
		$tipo = "SUPERFICIAL";
		
		$ins_anexoExt = "INSERT INTO anexoExt(latitud,longitud,titulo,clave_mun,clave_edo,clave_cuenca,tipo) VALUES ($latitud,$longitud,'$titulo',$municipio,$estado,$cuenca,'$tipo')";

		$this->db->query($ins_anexoExt);

		$id_anexo = $this->db->query("SELECT max(id) AS 'id' FROM anexoExt")->getResultArray()[0]['id'];

        $ins_ae_sup = "INSERT INTO anexoExt_sup(id_anexo,id_sup,vol_anual,fecha) VALUES($id_anexo,$superficie,$vol_anual,CURDATE())";

        $this->db->query($ins_ae_sup);

        $mensaje = "Se ha insertado correctamente el anexo $id_anexo, que ampara el título $titulo con coordenadas ($longitud,$latitud)";

        return $mensaje;
		
	}

	public function insert_zona($data){
		$titulo = $data['titulo'];
		$longitud = $data['longitud'];
		$latitud = $data['latitud'];
		$estado = $data['estado'];
		$municipio = $data['municipio'];
		$corriente = $data['corriente'];
		$cuenca = $data['cuenca'];
		$superficie = $data['superficie'];
		
		$ins_zona = "INSERT INTO zonaFd(superficie,corriente,latitud,longitud,titulo,clave_mun,clave_edo,clave_cuenca) VALUES ($superficie,'$corriente',$latitud,$longitud,'$titulo',$municipio,$estado,$cuenca)";

		$this->db->query($ins_zona);

		$id_anexo =  $this->db->query("SELECT max(id) AS 'id' FROM zonaFd")->getResultArray()[0]['id'];


        $mensaje = "Se ha insertado correctamente el anexo $id_anexo, que ampara el título $titulo con coordenadas ($longitud,$latitud)";

        return $mensaje;
	}
}