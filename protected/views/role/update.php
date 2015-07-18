<?php
/* @var $this RoleController */
/* @var $model Role */
?>

<?php
$this->breadcrumbs=array(
	'Roles'=>array('index'),
	$model->ROL_CORREL=>array('view','id'=>$model->ROL_CORREL),
	'Update',
);

$this->menu=array(
    array('icon' => 'glyphicon glyphicon-list','label'=>'List Role', 'url'=>array('index')),
	array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Create Role', 'url'=>array('create')),
    array('icon' => 'glyphicon glyphicon-list-alt','label'=>'View Role', 'url'=>array('view', 'id'=>$model->ROL_CORREL)),
    array('icon' => 'glyphicon glyphicon-tasks','label'=>'Manage Role', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('Update','Role '.$model->ROL_CORREL) ?>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>