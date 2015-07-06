<?php
/* @var $this PersonaController */
/* @var $model Persona */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'persona-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'EMP_CORREL'); ?>
		<?php echo $form->textField($model,'EMP_CORREL',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'EMP_CORREL'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'COM_CORREL'); ?>
		<?php echo $form->textField($model,'COM_CORREL',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'COM_CORREL'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PER_NOMBRE'); ?>
		<?php echo $form->textField($model,'PER_NOMBRE',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'PER_NOMBRE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PER_PATERNO'); ?>
		<?php echo $form->textField($model,'PER_PATERNO',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'PER_PATERNO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PER_MATERNO'); ?>
		<?php echo $form->textField($model,'PER_MATERNO',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'PER_MATERNO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PER_CARGO'); ?>
		<?php echo $form->textField($model,'PER_CARGO',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'PER_CARGO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PER_TIPO'); ?>
		<?php echo $form->textField($model,'PER_TIPO',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'PER_TIPO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PER_NIVEL'); ?>
		<?php echo $form->textField($model,'PER_NIVEL',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'PER_NIVEL'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PER_EMAIL'); ?>
		<?php echo $form->textField($model,'PER_EMAIL',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'PER_EMAIL'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PER_RUT'); ?>
		<?php echo $form->textField($model,'PER_RUT',array('size'=>12,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'PER_RUT'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->