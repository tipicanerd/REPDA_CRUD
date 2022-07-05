<?php

namespace App\Models;

use CodeIgniter\Model;

class Updates extends Model{
	public function update_concesion($data){
		$titulo_con = $data['titulo_condicion'];
		$titulo = $data['titulo'];
		$titular = $data['titular'];
		$uso = $data['uso'];
		$autoridad = $data['autoridad'];

		if ($uso=="Selecciona un uso"){
			$uso = null;
		}


		if (empty($titulo)&&empty($titular)&&empty($uso)&&empty($autoridad)){
			$mensaje = "No hay ninguna actualización por hacer para la concesion $titulo";
			return $mensaje;
		}

		$consulta = "SELECT titulo FROM concesion WHERE titulo='$titulo_con' AND status=1";
		$result = $this->db->query($consulta)->getResultArray();

		if (count($result)!=1){
			$mensaje = "La concesion $titulo_con no se encuentra registrada.";
			return $mensaje;
		}

		$instruccion = "UPDATE concesion SET ";
		
		if (!empty($titulo)){
			$instruccion = $instruccion . "titulo = '$titulo'";
			if (!empty($titular)){
				$instruccion = $instruccion . ",titular='$titular'";
			}
			if (!empty($uso)){
				$instruccion = $instruccion . ",uso='$uso'";
			}
			if (!empty($autoridad)){
				$instruccion = $instruccion . ",autoridad='$autoridad'";
			}
		}

		else if (!empty($titular)){
			$instruccion = $instruccion . "titular='$titular'";
			if (!empty($uso)){
				$instruccion = $instruccion . ",uso='$uso'";
			}
			if (!empty($autoridad)){
				$instruccion = $instruccion . ",autoridad='$autoridad'";
			}
		}

		else if (!empty($uso)){
			$instruccion = $instruccion . "uso='$uso' ";
			if (!empty($autoridad)){
				$instruccion = $instruccion . ",autoridad='$autoridad'";
			}
		}

		else if (!empty($autoridad)){
				$instruccion = $instruccion . "autoridad='$autoridad'";
			}

		$instruccion = $instruccion . " WHERE titulo='$titulo_con'";
		
		$this->db->query($instruccion);

		$mensaje = "Se ha actualizado correctamente la concesion $titulo_con.";

		return $mensaje;

	}

	public function update_descarga($data){

		$id_con = $data['id_condicion'];

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
        
        $pattern = "/selecciona/i";


        if (preg_match($pattern,$titulo)){
        	$titulo = null;
        }
        if (preg_match($pattern,$procedencia)){
        	$procedencia = null;
        }
        if (preg_match($pattern,$cuerpo_receptor)){
        	$cuerpo_receptor = null;
        }
        if (preg_match($pattern,$afluente)){
        	$afluente = null;
        }
        if (preg_match($pattern,$forma)){
        	$forma = null;
        }
        if (preg_match($pattern,$tipo)){
        	$tipo = null;
        }
        if (preg_match($pattern,$estado)){
        	$estado = null;
        }
        if (preg_match($pattern,$municipio)){
        	$municipio = null;
        }
        if (preg_match($pattern,$cuenca)){
        	$cuenca = null;
        }


        if(empty($titulo)&&empty($procedencia)&&empty($cuerpo_receptor)&&empty($longitud)&&empty($latitud)&&empty($afluente)&&empty($forma)&&empty($tipo)&&empty($estado)&&empty($municipio)&&empty($cuenca)&&empty($vol_diario)&&empty($vol_anual)){
        	$mensaje = "No hay ninguna actualización por hacer para el anexo de descarga $id_con";
			return $mensaje;
        }

        $consulta = "SELECT id FROM descarga WHERE id=$id_con AND status=1";
		
		$result = $this->db->query($consulta)->getResultArray();

		if (count($result)!=1){
			$mensaje = "El anexo de descarga $id_con no se encuentra registrado.";
			return $mensaje;
		}

		# Descargas
		if (!empty($procedencia) || !empty($cuerpo_receptor) || !empty($longitud)|| !empty($latitud)|| !empty($afluente) && !empty($forma) || !empty($tipo) || !empty($estado) || !empty($municipio) && !empty($cuenca)){
			$ins_des = "UPDATE descarga SET ";

			if (!empty($procedencia)){
				$ins_des = $ins_des . "procedencia='$procedencia ";

				if (!empty($cuerpo_receptor)){
					$ins_des = $ins_des . ",cuerpo_receptor='$cuerpo_receptor' ";
				}
				if (!empty($tipo)){
					$ins_des = $ins_des . ",tipo='$tipo' ";
				}
				if (!empty($latitud)){
					$ins_des = $ins_des . ",latitud=$latitud ";
				}
				if (!empty($longitud)){
					$ins_des = $ins_des . ",longitud=$longitud ";
				}
				if (!empty($afluente)){
					$ins_des = $ins_des . ",afluente='$afluente' ";
				}
				if (!empty($forma)){
					$ins_des = $ins_des . ",forma = '$forma' ";
				}
				if (!empty($municipio)){
					$ins_des = $ins_des . ",clave_mun=$municipio ";
				}
				if (!empty($estado)){
					$ins_des = $ins_des . ",clave_edo=$estado ";
				}
				if (!empty($cuenca)){
					$ins_des = $ins_des . ", clave_cuenca=$cuenca ";
				}
			}

			else if (!empty($cuerpo_receptor)){
				$ins_des = $ins_des . "cuerpo_receptor='$cuerpo_receptor' ";
				if (!empty($tipo)){
					$ins_des = $ins_des . ",tipo='$tipo' ";
				}
				if (!empty($latitud)){
					$ins_des = $ins_des . ",latitud=$latitud ";
				}
				if (!empty($longitud)){
					$ins_des = $ins_des . ",longitud=$longitud ";
				}
				if (!empty($afluente)){
					$ins_des = $ins_des . ",afluente='$afluente' ";
				}
				if (!empty($forma)){
					$ins_des = $ins_des . ",forma = '$forma' ";
				}
				if (!empty($municipio)){
					$ins_des = $ins_des . ",clave_mun=$municipio ";
				}
				if (!empty($estado)){
					$ins_des = $ins_des . ",clave_edo=$estado ";
				}
				if (!empty($cuenca)){
					$ins_des = $ins_des . ", clave_cuenca=$cuenca ";
				}
			}
			else if (!empty($tipo)){
					$ins_des = $ins_des . "tipo='$tipo' ";
				if (!empty($latitud)){
					$ins_des = $ins_des . ",latitud=$latitud ";
				}
				if (!empty($longitud)){
					$ins_des = $ins_des . ",longitud=$longitud ";
				}
				if (!empty($afluente)){
					$ins_des = $ins_des . ",afluente='$afluente' ";
				}
				if (!empty($forma)){
					$ins_des = $ins_des . ",forma = '$forma' ";
				}
				if (!empty($municipio)){
					$ins_des = $ins_des . ",clave_mun=$municipio ";
				}
				if (!empty($estado)){
					$ins_des = $ins_des . ",clave_edo=$estado ";
				}
				if (!empty($cuenca)){
					$ins_des = $ins_des . ", clave_cuenca=$cuenca ";
				}
			}

			else if (!empty($latitud)){
					$ins_des = $ins_des . "latitud=$latitud ";
				if (!empty($longitud)){
					$ins_des = $ins_des . ",longitud=$longitud ";
				}
				if (!empty($afluente)){
					$ins_des = $ins_des . ",afluente='$afluente' ";
				}
				if (!empty($forma)){
					$ins_des = $ins_des . ",forma = '$forma'";
				}
				if (!empty($municipio)){
					$ins_des = $ins_des . ",clave_mun=$municipio ";
				}
				if (!empty($estado)){
					$ins_des = $ins_des . ",clave_edo=$estado ";
				}
				if (!empty($cuenca)){
					$ins_des = $ins_des . ", clave_cuenca=$cuenca ";
				}
			}

			else if (!empty($longitud)){
					$ins_des = $ins_des . "longitud=$longitud ";

				if (!empty($afluente)){
					$ins_des = $ins_des . ",afluente='$afluente' ";
				}
				if (!empty($forma)){
					$ins_des = $ins_des . ",forma = '$forma' ";
				}
				if (!empty($municipio)){
					$ins_des = $ins_des . ",clave_mun=$municipio ";
				}
				if (!empty($estado)){
					$ins_des = $ins_des . ",clave_edo=$estado ";
				}
				if (!empty($cuenca)){
					$ins_des = $ins_des . ", clave_cuenca=$cuenca ";
				}
			}

			else if (!empty($afluente)){
					$ins_des = $ins_des . "afluente='$afluente' ";

				if (!empty($forma)){
					$ins_des = $ins_des . ",forma = '$forma' ";
				}
				if (!empty($municipio)){
					$ins_des = $ins_des . ",clave_mun=$municipio ";
				}
				if (!empty($estado)){
					$ins_des = $ins_des . ",clave_edo=$estado ";
				}
				if (!empty($cuenca)){
					$ins_des = $ins_des . ", clave_cuenca=$cuenca ";
				}
			}

			else if (!empty($forma)){
					$ins_des = $ins_des . "forma = '$forma' ";
				
				if (!empty($municipio)){
					$ins_des = $ins_des . ",clave_mun=$municipio ";
				}
				if (!empty($estado)){
					$ins_des = $ins_des . ",clave_edo=$estado ";
				}
				if (!empty($cuenca)){
					$ins_des = $ins_des . ", clave_cuenca=$cuenca ";
				}
			}
			
			else if (!empty($municipio)){
					$ins_des = $ins_des . "clave_mun=$municipio ";
				
				if (!empty($estado)){
					$ins_des = $ins_des . ",clave_edo=$estado ";
				}
				if (!empty($cuenca)){
					$ins_des = $ins_des . ", clave_cuenca=$cuenca ";
				}
			}
			
			else if (!empty($estado)){
					$ins_des = $ins_des . "clave_edo=$estado ";
				
				if (!empty($cuenca)){
					$ins_des = $ins_des . ", clave_cuenca=$cuenca ";
				}
			}

			else if (!empty($cuenca)){
				$ins_des = $ins_des . "clave_cuenca=$cuenca ";
			}

			$ins_des = $ins_des . "WHERE id=$id_con";
			$this->db->query($ins_des);

		}

		#Descarga-concesion
		if(!empty($titulo)){
			$ins_des_con = "UPDATE descarga_concesion SET ";
			$ins_des_con = $ins_des_con . "titulo='$titulo' ";

			$ins_des_con = $ins_des_con . "WHERE id_anexo=$id_con" ;
			$this->db->query($ins_des_con);
			
		}
        

        $mensaje = "Se ha actualizado correctamente el anexo de descarga $id_con.";

        return $mensaje;

	}

	public function update_subte($data){
		$id_con = $data['id_condicion'];

		$titulo = $data['titulo'];
		$longitud = $data['longitud'];
		$latitud = $data['latitud'];
		$estado = $data['estado'];
		$municipio = $data['municipio'];
		$acuifero = $data['acuifero'];
		$cuenca = $data['cuenca'];
		
		$pattern = "/selecciona/i";

		if (preg_match($pattern,$titulo)){
			$titulo = null;
		}

		if (preg_match($pattern,$estado)){
			$estado = null;
		}

		if (preg_match($pattern,$municipio)){
			$municipio = null;
		}

		if (preg_match($pattern,$acuifero)){
			$acuifero = null;
		}

		if (preg_match($pattern,$cuenca)){
			$cuenca = null;
		}

		if(empty($titulo) && empty($longitud) && empty($latitud) && empty($estado) && empty($municipio) && empty($acuifero) && empty($cuenca) && empty($vol_anual)){
			$mensaje = "No hay ninguna actualización por hacer para el anexo subterráneo $id_con";
		}

		$consulta = "SELECT id FROM anexoExt WHERE id=$id_con AND status=1 AND tipo='SUBTERRÁNEO'";
		$result = $this->db->query($consulta)->getResultArray();

		if (count($result)!=1){
			$mensaje = "El anexo subterráneo $id_con no se encuentra registrado.";
			return $mensaje;
		}


		#Anexo
		#latitud,longitud,titulo,clave_mun,clave_edo,clave_cuenca
		if (!empty($latitud) || !empty($longitud) || !empty($titulo) || !empty($municipio) || !empty($estado) || !empty($cuenca)) {
			$ins_ae = "UPDATE anexoExt SET ";

			if (!empty($latitud)) {
				$ins_ae = $ins_ae . "latitud=$latitud ";

				if (!empty($longitud)) {
					$ins_ae = $ins_ae . ",longitud=$longitud ";
				}

				if(!empty($titulo)){
					$ins_ae = $ins_ae . ",titulo='$titulo' ";
				}

				if (!empty($municipio)) {
					$ins_ae = $ins_ae . ",clave_mun=$municipio ";
				}

				if (!empty($estado)) {
					$ins_ae = $ins_ae . ",clave_edo=$estado ";
				}

				if (!empty($cuenca)) {
					$ins_ae = $ins_ae . ",clave_cuenca=$cuenca " ;
				}
			}

			else if (!empty($longitud)) {
				$ins_ae = $ins_ae . "longitud=$longitud ";

				if(!empty($titulo)){
					$ins_ae = $ins_ae . ",titulo='$titulo' ";
				}

				if (!empty($municipio)) {
					$ins_ae = $ins_ae . ",clave_mun=$municipio ";
				}

				if (!empty($estado)) {
					$ins_ae = $ins_ae . ",clave_edo=$estado ";
				}

				if (!empty($cuenca)) {
					$ins_ae = $ins_ae . ",clave_cuenca=$cuenca " ;
				}
			}

			else if(!empty($titulo)){
				$ins_ae = $ins_ae . "titulo='$titulo' ";

				if (!empty($municipio)) {
					$ins_ae = $ins_ae . ",clave_mun=$municipio ";
				}

				if (!empty($estado)) {
					$ins_ae = $ins_ae . ",clave_edo=$estado ";
				}

				if (!empty($cuenca)) {
					$ins_ae = $ins_ae . ",clave_cuenca=$cuenca " ;
				}
			}

			else if (!empty($municipio)) {
				$ins_ae = $ins_ae . "clave_mun=$municipio ";

				if (!empty($estado)) {
					$ins_ae = $ins_ae . ",clave_edo=$estado ";
				}

				if (!empty($cuenca)) {
					$ins_ae = $ins_ae . ",clave_cuenca=$cuenca " ;
				}
			}

			else if (!empty($estado)) {
				$ins_ae = $ins_ae . "clave_edo=$estado ";

				if (!empty($cuenca)) {
					$ins_ae = $ins_ae . ",clave_cuenca=$cuenca " ;
				}
			}

			else if (!empty($cuenca)) {
					$ins_ae = $ins_ae . "clave_cuenca=$cuenca " ;
			}

			$ins_ae = $ins_ae . "WHERE id=$id_con";
			$this->db->query($ins_ae);			
		}

		#Anexo acuifero
		if (!empty($acuifero)) {
			$ins_ae_ac = "UPDATE anexoExt_ac SET ";
			$ins_ae_ac = $ins_ae_ac . "clave_ac=$acuifero ";

			$ins_ae_ac = $ins_ae_ac . "WHERE id_anexo=$id_con";
			$this->db->query($ins_ae_ac);
		}

        $mensaje = "Se ha actualizado correctamente el anexo subterráneo $id_con.";

        return $mensaje;
	}

	public function update_sup($data){
		$id_con = $data['id_condicion'];

		$titulo = $data['titulo'];
		$longitud = $data['longitud'];
		$latitud = $data['latitud'];
		$estado = $data['estado'];
		$municipio = $data['municipio'];
		$superficie = $data['superficie'];
		$cuenca = $data['cuenca'];
		
		$pattern = "/selecciona/i";

		if (preg_match($pattern,$titulo)){
			$titulo = null;
		}

		if (preg_match($pattern,$estado)){
			$estado = null;
		}

		if (preg_match($pattern,$municipio)){
			$municipio = null;
		}

		if (preg_match($pattern,$superficie)){
			$superficie = null;
		}


		if (preg_match($pattern,$cuenca)){
			$cuenca = null;
		}

		if(empty($titulo) && empty($longitud) && empty($latitud) && empty($estado) && empty($municipio) && empty($superficie) && empty($cuenca) && empty($vol_anual)){
			$mensaje = "No hay ninguna actualización por hacer para el anexo superficial $id_con";
			return $mensaje;
		}

		$consulta = "SELECT id FROM anexoExt WHERE id=$id_con AND status=1 AND tipo='SUPERFICIAL'";
		$result = $this->db->query($consulta)->getResultArray();

		if (count($result)!=1){
			$mensaje = "El anexo superficial $id_con no se encuentra registrado.";
			return $mensaje;
		}


		#Anexo
		if (!empty($latitud) || !empty($longitud) || !empty($titulo) || !empty($municipio) || !empty($estado) || !empty($cuenca)) {
			$ins_ae = "UPDATE anexoExt SET ";

			if (!empty($latitud)) {
				$ins_ae = $ins_ae . "latitud=$latitud ";

				if (!empty($longitud)) {
					$ins_ae = $ins_ae . ",longitud=$longitud ";
				}

				if(!empty($titulo)){
					$ins_ae = $ins_ae . ",titulo='$titulo' ";
				}

				if (!empty($municipio)) {
					$ins_ae = $ins_ae . ",clave_mun=$municipio ";
				}

				if (!empty($estado)) {
					$ins_ae = $ins_ae . ",clave_edo=$estado ";
				}

				if (!empty($cuenca)) {
					$ins_ae = $ins_ae . ",clave_cuenca=$cuenca " ;
				}
			}

			else if (!empty($longitud)) {
				$ins_ae = $ins_ae . "longitud=$longitud ";

				if(!empty($titulo)){
					$ins_ae = $ins_ae . ",titulo='$titulo' ";
				}

				if (!empty($municipio)) {
					$ins_ae = $ins_ae . ",clave_mun=$municipio ";
				}

				if (!empty($estado)) {
					$ins_ae = $ins_ae . ",clave_edo=$estado ";
				}

				if (!empty($cuenca)) {
					$ins_ae = $ins_ae . ",clave_cuenca=$cuenca " ;
				}
			}

			else if(!empty($titulo)){
				$ins_ae = $ins_ae . "titulo='$titulo' ";

				if (!empty($municipio)) {
					$ins_ae = $ins_ae . ",clave_mun=$municipio ";
				}

				if (!empty($estado)) {
					$ins_ae = $ins_ae . ",clave_edo=$estado ";
				}

				if (!empty($cuenca)) {
					$ins_ae = $ins_ae . ",clave_cuenca=$cuenca " ;
				}
			}

			else if (!empty($municipio)) {
				$ins_ae = $ins_ae . "clave_mun=$municipio ";

				if (!empty($estado)) {
					$ins_ae = $ins_ae . ",clave_edo=$estado ";
				}

				if (!empty($cuenca)) {
					$ins_ae = $ins_ae . ",clave_cuenca=$cuenca " ;
				}
			}

			else if (!empty($estado)) {
				$ins_ae = $ins_ae . "clave_edo=$estado ";

				if (!empty($cuenca)) {
					$ins_ae = $ins_ae . ",clave_cuenca=$cuenca " ;
				}
			}

			else if (!empty($cuenca)) {
					$ins_ae = $ins_ae . "clave_cuenca=$cuenca " ;
			}

			$ins_ae = $ins_ae . "WHERE id=$id_con";
			$this->db->query($ins_ae);			
		}

		#Anexo superficie
		if (!empty($superficie)) {
			$ins_ae_sup = "UPDATE anexoExt_sup SET ";
			$ins_ae_sup = $ins_ae_sup . "id_sup=$superficie ";

			$ins_ae_sup = $ins_ae_sup . "WHERE id_anexo=$id_con";
			$this->db->query($ins_ae_sup);
		}

		$mensaje = "Se ha actualizado correctamente el anexo superficial $id_con.";

        return $mensaje;
		
	}

	public function update_zona($data){
		$id_con = $data['id_condicion'];

		$titulo = $data['titulo'];
		$longitud = $data['longitud'];
		$latitud = $data['latitud'];
		$estado = $data['estado'];
		$municipio = $data['municipio'];
		$corriente = $data['corriente'];
		$cuenca = $data['cuenca'];
		$superficie = $data['superficie'];

		$pattern = "/selecciona/i";

		if (preg_match($pattern,$titulo)){
			$titulo = null;
		}

		if (preg_match($pattern,$estado)){
			$estado = null;
		}

		if (preg_match($pattern,$municipio)){
			$municipio = null;
		}

		if (preg_match($pattern,$corriente)){
			$corriente = null;
		}

		if (preg_match($pattern,$cuenca)){
			$cuenca = null;
		}

		if(empty($titulo) && empty($longitud) && empty($latitud) && empty($estado) && empty($municipio) && empty($corriente) && empty($cuenca) && empty($vol_anual)){
			$mensaje = "No hay ninguna actualización por hacer para la zona federal $id_con";
		}

		$consulta = "SELECT id FROM zonaFd WHERE id=$id_con AND status=1";
		$result = $this->db->query($consulta)->getResultArray();

		if (count($result)!=1){
			$mensaje = "La zona federal $id_con no se encuentra registrada.";
			return $mensaje;
		}

		/*$titulo, $longitud, $latitud, $estado, 
		$municipio, $corriente, $cuenca, $superficie*/

		$ins_zona = "UPDATE zonaFd SET ";

		if (!empty($titulo)){
			$ins_zona = $ins_zona . "titulo='$titulo' ";

			if (!empty($longitud)){
				$ins_zona = $ins_zona . ",longitud=$longitud ";
			}

			if (!empty($latitud)){
				$ins_zona = $ins_zona . ",latitud=$latitud ";
			}

			if (!empty($estado)) {
				$ins_zona = $ins_zona . ",clave_edo=$estado ";
			}

			if (!empty($municipio)) {
				$ins_zona = $ins_zona . ",clave_mun=$municipio ";
			}

			if (!empty($corriente)) {
				$ins_zona = $ins_zona . ",corriente='$corriente' ";
			}

			if (!empty($cuenca)) {
				$ins_zona = $ins_zona . ",clave_cuenca=$cuenca ";
			}

			if (!empty($superficie)){
				$ins_zona = $ins_zona. ",superficie=$superficie ";
			}
		}

		else if (!empty($longitud)){
			$ins_zona = $ins_zona . "longitud=$longitud ";

			if (!empty($latitud)){
				$ins_zona = $ins_zona . ",latitud=$latitud ";
			}

			if (!empty($estado)) {
				$ins_zona = $ins_zona . ",clave_edo=$estado ";
			}

			if (!empty($municipio)) {
				$ins_zona = $ins_zona . ",clave_mun=$municipio ";
			}

			if (!empty($corriente)) {
				$ins_zona = $ins_zona . ",corriente='$corriente' ";
			}

			if (!empty($cuenca)) {
				$ins_zona = $ins_zona . ",clave_cuenca=$cuenca ";
			}

			if (!empty($superficie)){
				$ins_zona = $ins_zona. ",superficie=$superficie ";
			}
		}

		else if (!empty($latitud)){
			$ins_zona = $ins_zona . "latitud=$latitud ";

			if (!empty($estado)) {
				$ins_zona = $ins_zona . ",clave_edo=$estado ";
			}

			if (!empty($municipio)) {
				$ins_zona = $ins_zona . ",clave_mun=$municipio ";
			}

			if (!empty($corriente)) {
				$ins_zona = $ins_zona . ",corriente='$corriente' ";
			}

			if (!empty($cuenca)) {
				$ins_zona = $ins_zona . ",clave_cuenca=$cuenca ";
			}

			if (!empty($superficie)){
				$ins_zona = $ins_zona. ",superficie=$superficie ";
			}
		}

		else if (!empty($estado)) {
			$ins_zona = $ins_zona . "clave_edo=$estado ";

			if (!empty($municipio)) {
				$ins_zona = $ins_zona . ",clave_mun=$municipio ";
			}

			if (!empty($corriente)) {
				$ins_zona = $ins_zona . ",corriente='$corriente' ";
			}

			if (!empty($cuenca)) {
				$ins_zona = $ins_zona . ",clave_cuenca=$cuenca ";
			}

			if (!empty($superficie)){
				$ins_zona = $ins_zona. ",superficie=$superficie ";
			}
		}

		else if (!empty($municipio)) {
			$ins_zona = $ins_zona . "clave_mun=$municipio ";

			if (!empty($corriente)) {
				$ins_zona = $ins_zona . ",corriente='$corriente' ";
			}

			if (!empty($cuenca)) {
				$ins_zona = $ins_zona . ",clave_cuenca=$cuenca ";
			}

			if (!empty($superficie)){
				$ins_zona = $ins_zona. ",superficie=$superficie ";
			}
		}

		else if (!empty($corriente)) {
			$ins_zona = $ins_zona . "corriente='$corriente' ";

			if (!empty($cuenca)) {
				$ins_zona = $ins_zona . ",clave_cuenca=$cuenca ";
			}

			if (!empty($superficie)){
				$ins_zona = $ins_zona. ",superficie=$superficie ";
			}
		}

		else if (!empty($cuenca)) {
			$ins_zona = $ins_zona . "clave_cuenca=$cuenca ";

			if (!empty($superficie)){
				$ins_zona = $ins_zona. ",superficie=$superficie ";
			}
		}

		else if (!empty($superficie)){
			$ins_zona = $ins_zona. "superficie=$superficie ";
		}

		$ins_zona = $ins_zona . "WHERE id=$id_con";		
		$this->db->query($ins_zona);

		$mensaje = "Se ha actualizado correctamente la zona federal $id_con";

        return $mensaje;
	}

}