<?php

namespace App\Controllers;

use App\Models\Adds;


class Addition extends BaseController{
	public function descarga(){
		$mainModel = model(Adds::class);
		$data['mensaje'] = $mainModel->add_descarga($_POST);
		return view('func/header')
			. view('func/add/confirmacion',$data)
			. view('func/footer');

	}
	public function subte(){
		$mainModel = model(Adds::class);
		$data['mensaje'] = $mainModel->add_subte($_POST);
		return view('func/header')
			. view('func/add/confirmacion',$data)
			. view('func/footer');

	}
	public function sup(){
		$mainModel = model(Adds::class);
		$data['mensaje'] = $mainModel->add_sup($_POST);
		return view('func/header')
			. view('func/add/confirmacion',$data)
			. view('func/footer');

	}
	
}