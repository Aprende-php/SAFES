<?php
/* @var $this EmpresaController */
/* @var $model Empresa */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'EMP_CORREL'); ?>
		<?php echo $form->textField($model,'EMP_CORREL',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'COM_CORREL'); ?>
		<?php echo $form->textField($model,'COM_CORREL',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'EMP_RUT'); ?>
		<?php echo $form->textField($model,'EMP_RUT',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'EMP_RSOCIAL'); ?>
		<?php echo $form->textField($model,'EMP_RSOCIAL',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'EMP_FANTASIA'); ?>
		<?php echo $form->textField($model,'EMP_FANTASIA',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'EMP_PREFIJO'); ?>
		<?php echo $form->textField($model,'EMP_PREFIJO',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'EMP_GIRO'); ?>
		<?php echo $form->textField($model,'EMP_GIRO',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'EMP_INC'); ?>
		<?php echo $form->textField($model,'EMP_INC',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'EMP_TELEFONO'); ?>
		<?php echo $form->textField($model,'EMP_TELEFONO',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'EMP_CELULAR'); ?>
		<?php echo $form->textField($model,'EMP_CELULAR',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'EMP_WEB'); ?>
		<?php echo $form->textField($model,'EMP_WEB',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'EMP_EMAIL'); ?>
		<?php echo $form->textField($model,'EMP_EMAIL',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'EMP_TWEETER'); ?>
		<?php echo $form->textField($model,'EMP_TWEETER',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'EMP_FACEBOOK'); ?>
		<?php echo $form->textField($model,'EMP_FACEBOOK',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'EMP_SKYPE'); ?>
		<?php echo $form->textField($model,'EMP_SKYPE',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'EMP_ESTADO'); ?>
		<?php echo $form->textField($model,'EMP_ESTADO',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->