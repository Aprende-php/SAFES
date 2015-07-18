<?php
/* @var $this ControlerController */
/* @var $model Controler */
?>

<?php
$this->breadcrumbs=array(
	'Controlers'=>array('index'),
	$model->CON_CORREL=>array('view','id'=>$model->CON_CORREL),
	'Update',
);

$this->menu=array(
    array('icon' => 'glyphicon glyphicon-list','label'=>'List Controler', 'url'=>array('index')),
	array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Create Controler', 'url'=>array('create')),
    array('icon' => 'glyphicon glyphicon-list-alt','label'=>'View Controler', 'url'=>array('view', 'id'=>$model->CON_CORREL)),
    array('icon' => 'glyphicon glyphicon-tasks','label'=>'Manage Controler', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('Update','Controler '.$model->CON_CORREL) ?>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>