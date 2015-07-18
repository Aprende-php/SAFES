<?php
/* @var $this UsuHasActController */
/* @var $data UsuHasAct */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ACT_CORREL')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ACT_CORREL),array('view','id'=>$data->ACT_CORREL)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PER_CORREL')); ?>:</b>
	<?php echo CHtml::encode($data->PER_CORREL); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TIPO')); ?>:</b>
	<?php echo CHtml::encode($data->TIPO); ?>
	<br />


</div>