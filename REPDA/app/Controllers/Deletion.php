<?php

namespace App\Controllers;

use App\Models\Deletes;


class Deletion extends BaseController{
	public function concesion(){
		$mainModel = model(Deletes::class);
		$data['mensaje'] = $mainModel->delete_concesion($_POST);
		return view('func/header')
			. view('func/delete/confirmacion',$data)
			. view('func/footer');
	
	}

	public function descarga(){
		$mainModel = model(Deletes::class);
		$data['mensaje'] = $mainModel->delete_descarga($_POST);
		$data['tipo'] = "";
		return view('func/header')
			. view('func/delete/confirmacion',$data)
			. view('func/footer');

	}
	public function subte(){
		$mainModel = model(Deletes::class);
		$data['mensaje'] = $mainModel->delete_subte($_POST);
		$data['tipo'] = "";
		return view('func/header')
			. view('func/delete/confirmacion',$data)
			. view('func/footer');

	}
	public function sup(){
		$mainModel = model(Deletes::class);
		$data['mensaje'] = $mainModel->delete_sup($_POST);
		$data['tipo'] = "";
		return view('func/header')
			. view('func/delete/confirmacion',$data)
			. view('func/footer');

	}
	public function zona(){
		$mainModel = model(Deletes::class);
		$data['mensaje'] = $mainModel->delete_zona($_POST);
		$data['tipo'] = "";
		return view('func/header')
			. view('func/delete/confirmacion',$data)
			. view('func/footer');

	}
}