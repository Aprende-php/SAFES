<?php
/* @var $this ControlerController */
/* @var $data Controler */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('CON_CORREL')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->CON_CORREL),array('view','id'=>$data->CON_CORREL)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CON_NOMBRE')); ?>:</b>
	<?php echo CHtml::encode($data->CON_NOMBRE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CON_FICTICIO')); ?>:</b>
	<?php echo CHtml::encode($data->CON_FICTICIO); ?>
	<br />


</div>