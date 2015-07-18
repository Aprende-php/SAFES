<?php
/* @var $this UsuHasActController */
/* @var $model UsuHasAct */
?>

<?php
$this->breadcrumbs=array(
	'Usu Has Acts'=>array('index'),
	$model->ACT_CORREL,
);

$this->menu=array(
    array('icon' => 'glyphicon glyphicon-list','label'=>'List UsuHasAct', 'url'=>array('index')),
	array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Create UsuHasAct', 'url'=>array('create')),
	array('icon' => 'glyphicon glyphicon-edit','label'=>'Update UsuHasAct', 'url'=>array('update', 'id'=>$model->ACT_CORREL)),
	array('icon' => 'glyphicon glyphicon-minus-sign','label'=>'Delete UsuHasAct', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ACT_CORREL),'confirm'=>'Are you sure you want to delete this item?')),
    array('icon' => 'glyphicon glyphicon-tasks','label'=>'Manage UsuHasAct', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('View','UsuHasAct '.$model->ACT_CORREL) ?>

<?php $this->widget('zii.widgets.CDetailView',array(
	'htmlOptions' => array(
		'class' => 'table table-striped table-condensed table-hover',
	),
	'data'=>$model,
	'attributes'=>array(
		'ACT_CORREL',
		'PER_CORREL',
		'TIPO',
	),
)); ?>