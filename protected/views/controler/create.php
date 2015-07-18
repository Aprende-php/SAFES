<?php
/* @var $this ControlerController */
/* @var $model Controler */
?>

<?php
$this->breadcrumbs=array(
	'Controlers'=>array('index'),
	'Create',
);

$this->menu=array(
    array('icon' => 'glyphicon glyphicon-list','label'=>'List Controler', 'url'=>array('index')),
	array('icon' => 'glyphicon glyphicon-tasks','label'=>'Manage Controler', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('Create','Controler') ?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>