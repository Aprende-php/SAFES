<?php

class UsuarioController extends Controller
{
	public $layout='//layouts/main';

	public function filters()
	{
		return array(
			'accessControl',
			'postOnly + delete',
		);
	}

	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('action','admin','controller','create','delete','login','logout','modulos','permisos','role'),
				'users'=>array('@'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),			
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('login'),
				'users'=>array('*'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	public function actionAction()
	{
		$this->render('action');
	}


	public function actionAdmin()
	{
		$this->render('admin');
	}

	public function actionController()
	{
		$this->render('controller');
	}

	public function actionCreate()
	{
		$this->render('create');
	}

	public function actionDelete()
	{
		$this->render('delete');
	}

	public function actionLogin()
	{
		$this->render('login');
	}

	public function actionLogout()
	{
		$this->render('logout');
	}

	public function actionModulos()
	{
		$model=Controllers::model()->with('actions')->findAll();
		$this->render('modulos',array('model'=>$model));
	}

	public function actionPermisos()
	{
		$this->render('permisos');
	}

	public function actionRole()
	{
		$this->render('role');
	}
}