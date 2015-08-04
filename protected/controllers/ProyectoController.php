<?php

class ProyectoController extends Controller
{
	public function actionAdminBases()
	{
		$this->render('adminBases');
	}

	public function actionAdminProyecto()
	{
		$this->render('adminProyecto');
	}

	public function actionConsultarProyectos()
	{
		$this->render('consultarProyectos');
	}

	public function actionCrearBases()
	{
		$this->render('crearBases');
	}

	public function actionCrearInforme()
	{
		$this->render('crearInforme');
	}

	public function actionCrearPropuesta()
	{
		$this->render('crearPropuesta');
	}

	public function actionCrearProyecto()
	{
		$this->render('crearProyecto');
	}

	public function actionEditarBases()
	{
		$this->render('editarBases');
	}

	public function actionEstadoProyectos()
	{
		$this->render('estadoProyectos');
	}

	public function actionEvaluarProyecto()
	{
		$this->render('evaluarProyecto');
	}

	public function actionRevisarProyecto()
	{
		$this->render('revisarProyecto');
	}

	public function actionVerInforme()
	{
		$this->render('verInforme');
	}

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}