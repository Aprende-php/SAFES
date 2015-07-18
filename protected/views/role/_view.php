<?php
/* @var $this RoleController */
/* @var $data Role */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ROL_CORREL')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ROL_CORREL),array('view','id'=>$data->ROL_CORREL)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ROL_NOMBRE')); ?>:</b>
	<?php echo CHtml::encode($data->ROL_NOMBRE); ?>
	<br />


</div>