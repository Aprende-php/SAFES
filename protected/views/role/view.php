<?php
/* @var $this RoleController */
/* @var $model Role */
?>

<?php
$this->breadcrumbs=array(
	'Roles'=>array('index'),
	$model->ROL_CORREL,
);

$this->menu=array(
    array('icon' => 'glyphicon glyphicon-list','label'=>'List Role', 'url'=>array('index')),
	array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Create Role', 'url'=>array('create')),
	array('icon' => 'glyphicon glyphicon-edit','label'=>'Update Role', 'url'=>array('update', 'id'=>$model->ROL_CORREL)),
	array('icon' => 'glyphicon glyphicon-minus-sign','label'=>'Delete Role', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ROL_CORREL),'confirm'=>'Are you sure you want to delete this item?')),
    array('icon' => 'glyphicon glyphicon-tasks','label'=>'Manage Role', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('View','Role '.$model->ROL_CORREL) ?>

<?php $this->widget('zii.widgets.CDetailView',array(
	'htmlOptions' => array(
		'class' => 'table table-striped table-condensed table-hover',
	),
	'data'=>$model,
	'attributes'=>array(
		'ROL_CORREL',
		'ROL_NOMBRE',
	),
)); ?>