<?php
/* @var $this EmpresaController */
/* @var $data Empresa */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('EMP_CORREL')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->EMP_CORREL),array('view','id'=>$data->EMP_CORREL)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('COM_CORREL')); ?>:</b>
	<?php echo CHtml::encode($data->COM_CORREL); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('EMP_RUT')); ?>:</b>
	<?php echo CHtml::encode($data->EMP_RUT); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('EMP_RSOCIAL')); ?>:</b>
	<?php echo CHtml::encode($data->EMP_RSOCIAL); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('EMP_FANTASIA')); ?>:</b>
	<?php echo CHtml::encode($data->EMP_FANTASIA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('EMP_PREFIJO')); ?>:</b>
	<?php echo CHtml::encode($data->EMP_PREFIJO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('EMP_GIRO')); ?>:</b>
	<?php echo CHtml::encode($data->EMP_GIRO); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('EMP_INC')); ?>:</b>
	<?php echo CHtml::encode($data->EMP_INC); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('EMP_TELEFONO')); ?>:</b>
	<?php echo CHtml::encode($data->EMP_TELEFONO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('EMP_CELULAR')); ?>:</b>
	<?php echo CHtml::encode($data->EMP_CELULAR); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('EMP_WEB')); ?>:</b>
	<?php echo CHtml::encode($data->EMP_WEB); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('EMP_EMAIL')); ?>:</b>
	<?php echo CHtml::encode($data->EMP_EMAIL); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('EMP_TWEETER')); ?>:</b>
	<?php echo CHtml::encode($data->EMP_TWEETER); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('EMP_FACEBOOK')); ?>:</b>
	<?php echo CHtml::encode($data->EMP_FACEBOOK); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('EMP_SKYPE')); ?>:</b>
	<?php echo CHtml::encode($data->EMP_SKYPE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('EMP_ESTADO')); ?>:</b>
	<?php echo CHtml::encode($data->EMP_ESTADO); ?>
	<br />

	*/ ?>

</div>