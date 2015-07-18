<?php
/* @var $this UsuHasActController */
/* @var $model UsuHasAct */
?>

<?php
$this->breadcrumbs=array(
	'Usu Has Acts'=>array('index'),
	'Create',
);

$this->menu=array(
    array('icon' => 'glyphicon glyphicon-list','label'=>'List UsuHasAct', 'url'=>array('index')),
	array('icon' => 'glyphicon glyphicon-tasks','label'=>'Manage UsuHasAct', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('Create','UsuHasAct') ?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>