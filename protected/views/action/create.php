<?php
/* @var $this ActionController */
/* @var $model Action */
?>

<?php
$this->breadcrumbs=array(
	'Actions'=>array('index'),
	'Create',
);

$this->menu=array(
    array('icon' => 'glyphicon glyphicon-list','label'=>'List Action', 'url'=>array('index')),
	array('icon' => 'glyphicon glyphicon-tasks','label'=>'Manage Action', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('Create','Action') ?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>