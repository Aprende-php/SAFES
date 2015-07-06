<?php
/* @var $this EmpresaController */
/* @var $model Empresa */

$this->breadcrumbs=array(
	'Empresas'=>array('index'),
	$model->EMP_CORREL,
);

$this->menu=array(
	array('label'=>'List Empresa', 'url'=>array('index')),
	array('label'=>'Create Empresa', 'url'=>array('create')),
	array('label'=>'Update Empresa', 'url'=>array('update', 'id'=>$model->EMP_CORREL)),
	array('label'=>'Delete Empresa', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->EMP_CORREL),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Empresa', 'url'=>array('admin')),
);
?>

<h1>View Empresa #<?php echo $model->EMP_CORREL; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'EMP_CORREL',
		'COM_CORREL',
		'EMP_RUT',
		'EMP_RSOCIAL',
		'EMP_FANTASIA',
		'EMP_PREFIJO',
		'EMP_GIRO',
		'EMP_INC',
		'EMP_TELEFONO',
		'EMP_CELULAR',
		'EMP_WEB',
		'EMP_EMAIL',
		'EMP_TWEETER',
		'EMP_FACEBOOK',
		'EMP_SKYPE',
		'EMP_ESTADO',
	),
)); ?>
