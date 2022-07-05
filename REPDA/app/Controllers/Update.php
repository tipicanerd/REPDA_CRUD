<?php

namespace App\Controllers;

use App\Models\Updates;


class Update extends BaseController{
	public function concesion(){
		$mainModel = model(Updates::class);
		$data['mensaje'] = $mainModel->update_concesion($_POST);
		return view('func/header')
			. view('func/update/confirmacion',$data)
			. view('func/footer');
	
	}

	public function descarga(){
		$mainModel = model(Updates::class);
		$data['mensaje'] = $mainModel->update_descarga($_POST);
		return view('func/header')
			. view('func/update/confirmacion',$data)
			. view('func/footer');

	}
	public function subte(){
		$mainModel = model(Updates::class);
		$data['mensaje'] = $mainModel->update_subte($_POST);
		$data['tipo'] = "";
		return view('func/header')
			. view('func/update/confirmacion',$data)
			. view('func/footer');

	}
	public function sup(){
		$mainModel = model(Updates::class);
		$data['mensaje'] = $mainModel->update_sup($_POST);
		return view('func/header')
			. view('func/update/confirmacion',$data)
			. view('func/footer');

	}
	public function zona(){
		$mainModel = model(Updates::class);
		$data['mensaje'] = $mainModel->update_zona($_POST);
		return view('func/header')
			. view('func/update/confirmacion',$data)
			. view('func/footer');

	}
}