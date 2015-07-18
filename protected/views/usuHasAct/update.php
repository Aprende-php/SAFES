<?php
/* @var $this UsuHasActController */
/* @var $model UsuHasAct */
?>

<?php
$this->breadcrumbs=array(
	'Usu Has Acts'=>array('index'),
	$model->ACT_CORREL=>array('view','id'=>$model->ACT_CORREL),
	'Update',
);

$this->menu=array(
    array('icon' => 'glyphicon glyphicon-list','label'=>'List UsuHasAct', 'url'=>array('index')),
	array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Create UsuHasAct', 'url'=>array('create')),
    array('icon' => 'glyphicon glyphicon-list-alt','label'=>'View UsuHasAct', 'url'=>array('view', 'id'=>$model->ACT_CORREL)),
    array('icon' => 'glyphicon glyphicon-tasks','label'=>'Manage UsuHasAct', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('Update','UsuHasAct '.$model->ACT_CORREL) ?>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>