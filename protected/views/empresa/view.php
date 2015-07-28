<?php
/* @var $this EmpresaController */
/* @var $model Empresa */
?>

<?php
$this->breadcrumbs=array(
	'Empresas'=>array('index'),
	$model->EMP_CORREL,
);

$this->menu=array(
    array('icon' => 'glyphicon glyphicon-list','label'=>'List Empresa', 'url'=>array('index')),
	array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Create Empresa', 'url'=>array('create')),
	array('icon' => 'glyphicon glyphicon-edit','label'=>'Update Empresa', 'url'=>array('update', 'id'=>$model->EMP_CORREL)),
	array('icon' => 'glyphicon glyphicon-minus-sign','label'=>'Delete Empresa', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->EMP_CORREL),'confirm'=>'Are you sure you want to delete this item?')),
    array('icon' => 'glyphicon glyphicon-tasks','label'=>'Manage Empresa', 'url'=>array('admin')),
);
?>
<?php echo BsHtml::pageHeader('Ver','Empresa '.$model->EMP_RSOCIAL) ?>
<?php $Actividades = 
Yii::app()->db->createCommand()
	->select('a.ACT_CORREL,ACT_NOMBRE')
	->from('actividad a')
	->join('emp_has_act ea','a.ACT_CORREL=ea.ACT_CORREL')
	->join('empresa e','e.EMP_CORREL=ea.EMP_CORREL')
    ->where('e.EMP_CORREL=:EMP_CORREL',array(':EMP_CORREL'=>$model->EMP_CORREL))
    ->queryAll();
	$Lista='';
    foreach ($Actividades as $value) {
		$Lista.='<li>'.$value['ACT_CORREL'].' '.$value['ACT_NOMBRE'].'</li>';
	} 
?>
<?php $this->widget('zii.widgets.CDetailView',array(
	'htmlOptions' => array(
		'class' => 'table table-striped table-condensed table-hover',
	),
	'data'=>$model,
	'attributes'=>array(
		// 'EMP_CORREL',
		'Comuna.COM_NOMBRE',
		'EMP_RUT',
		'EMP_RSOCIAL',
		'EMP_FANTASIA',
		'EMP_PREFIJO',
		// 'EMP_INC',
		'EMP_TELEFONO',
		'EMP_CELULAR',
		'EMP_WEB',
		'EMP_EMAIL',
		'EMP_TWEETER',
		'EMP_FACEBOOK',
		'EMP_SKYPE',
		array(
			      'label'=>'Giro',
            'type'=>'raw',
			'value'=>$Lista)
		// 'EMP_ESTADO',
	),
)); ?>