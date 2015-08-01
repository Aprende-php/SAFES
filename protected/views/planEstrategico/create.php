<?php
/* @var $this EmpresaController */
/* @var $model Empresa */
?>

<?php
$this->breadcrumbs=array(
	'Plan Estrategico'
);

?>
<?php echo BsHtml::formActions(BsHtml::pageHeader('Añadir','Plan Estrategico'));?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>