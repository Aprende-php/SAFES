<?php
/* @var $this ActionController */
/* @var $model Action */
?>

<?php
$this->breadcrumbs=array(
	'Actions'=>array('index'),
	$model->ACT_CORREL=>array('view','id'=>$model->ACT_CORREL),
	'Update',
);

$this->menu=array(
    array('icon' => 'glyphicon glyphicon-list','label'=>'List Action', 'url'=>array('index')),
	array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Create Action', 'url'=>array('create')),
    array('icon' => 'glyphicon glyphicon-list-alt','label'=>'View Action', 'url'=>array('view', 'id'=>$model->ACT_CORREL)),
    array('icon' => 'glyphicon glyphicon-tasks','label'=>'Manage Action', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('Update','Action '.$model->ACT_CORREL) ?>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>