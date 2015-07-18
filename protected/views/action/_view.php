<?php
/* @var $this ActionController */
/* @var $data Action */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ACT_CORREL')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ACT_CORREL),array('view','id'=>$data->ACT_CORREL)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CON_CORREL')); ?>:</b>
	<?php echo CHtml::encode($data->CON_CORREL); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ACT_NOMBRE')); ?>:</b>
	<?php echo CHtml::encode($data->ACT_NOMBRE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ACT_FICTICIO')); ?>:</b>
	<?php echo CHtml::encode($data->ACT_FICTICIO); ?>
	<br />


</div>