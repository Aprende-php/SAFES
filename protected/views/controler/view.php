<?php
/* @var $this ControlerController */
/* @var $model Controler */
?>

<?php
$this->breadcrumbs=array(
	'Controlers'=>array('index'),
	$model->CON_CORREL,
);

$this->menu=array(
    array('icon' => 'glyphicon glyphicon-list','label'=>'List Controler', 'url'=>array('index')),
	array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Create Controler', 'url'=>array('create')),
	array('icon' => 'glyphicon glyphicon-edit','label'=>'Update Controler', 'url'=>array('update', 'id'=>$model->CON_CORREL)),
	array('icon' => 'glyphicon glyphicon-minus-sign','label'=>'Delete Controler', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->CON_CORREL),'confirm'=>'Are you sure you want to delete this item?')),
    array('icon' => 'glyphicon glyphicon-tasks','label'=>'Manage Controler', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('View','Controler '.$model->CON_CORREL) ?>

<?php $this->widget('zii.widgets.CDetailView',array(
	'htmlOptions' => array(
		'class' => 'table table-striped table-condensed table-hover',
	),
	'data'=>$model,
	'attributes'=>array(
		'CON_CORREL',
		'CON_NOMBRE',
		'CON_FICTICIO',
	),
)); ?>