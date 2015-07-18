<?php
/* @var $this RoleController */
/* @var $model Role */
?>

<?php
$this->breadcrumbs=array(
	'Roles'=>array('index'),
	'Create',
);

$this->menu=array(
    array('icon' => 'glyphicon glyphicon-list','label'=>'List Role', 'url'=>array('index')),
	array('icon' => 'glyphicon glyphicon-tasks','label'=>'Manage Role', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('Create','Role') ?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>