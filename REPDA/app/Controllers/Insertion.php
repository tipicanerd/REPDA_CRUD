<?php

namespace App\Controllers;

use App\Models\Inserts;


class Insertion extends BaseController{
	public function concesion(){
		$mainModel = model(Inserts::class);
		$data['mensaje'] = $mainModel->insert_concesion($_POST);
		$data['tipo'] = "concesion";
		return view('func/header')
			. view('func/insert/confirmacion',$data)
			. view('func/footer');
	
	}

	public function descarga(){
		$mainModel = model(Inserts::class);
		$data['mensaje'] = $mainModel->insert_descarga($_POST);
		$data['tipo'] = "";
		return view('func/header')
			. view('func/insert/confirmacion',$data)
			. view('func/footer');

	}
	public function subte(){
		$mainModel = model(Inserts::class);
		$data['mensaje'] = $mainModel->insert_subte($_POST);
		$data['tipo'] = "";
		return view('func/header')
			. view('func/insert/confirmacion',$data)
			. view('func/footer');

	}
	public function sup(){
		$mainModel = model(Inserts::class);
		$data['mensaje'] = $mainModel->insert_sup($_POST);
		$data['tipo'] = "";
		return view('func/header')
			. view('func/insert/confirmacion',$data)
			. view('func/footer');

	}
	public function zona(){
		$mainModel = model(Inserts::class);
		$data['mensaje'] = $mainModel->insert_zona($_POST);
		$data['tipo'] = "";
		return view('func/header')
			. view('func/insert/confirmacion',$data)
			. view('func/footer');

	}
}