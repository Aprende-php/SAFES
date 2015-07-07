<?php
/* @var $this PersonaController */
/* @var $model Persona */

$this->breadcrumbs=array(
	'Personas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Administrar Usuario', 'url'=>array('admin')),
	array('label'=>'Añadir Usuario', 'url'=>array('create'),'active'=>true),
);
?>

<h1>Añadir Usuario</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>