<?php
/* @var $this ActionController */
/* @var $model Action */
?>

<?php
$this->breadcrumbs=array(
	'Actions'=>array('index'),
	$model->ACT_CORREL,
);

$this->menu=array(
    array('icon' => 'glyphicon glyphicon-list','label'=>'List Action', 'url'=>array('index')),
	array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Create Action', 'url'=>array('create')),
	array('icon' => 'glyphicon glyphicon-edit','label'=>'Update Action', 'url'=>array('update', 'id'=>$model->ACT_CORREL)),
	array('icon' => 'glyphicon glyphicon-minus-sign','label'=>'Delete Action', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ACT_CORREL),'confirm'=>'Are you sure you want to delete this item?')),
    array('icon' => 'glyphicon glyphicon-tasks','label'=>'Manage Action', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('View','Action '.$model->ACT_CORREL) ?>

<?php $this->widget('zii.widgets.CDetailView',array(
	'htmlOptions' => array(
		'class' => 'table table-striped table-condensed table-hover',
	),
	'data'=>$model,
	'attributes'=>array(
		'ACT_CORREL',
		'CON_CORREL',
		'ACT_NOMBRE',
		'ACT_FICTICIO',
	),
)); ?>