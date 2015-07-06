<?php
/* @var $this EmpresaController */
/* @var $model Empresa */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'empresa-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'COM_CORREL'); ?>
		<?php echo $form->textField($model,'COM_CORREL',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'COM_CORREL'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'EMP_RUT'); ?>
		<?php echo $form->textField($model,'EMP_RUT',array('size'=>12,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'EMP_RUT'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'EMP_RSOCIAL'); ?>
		<?php echo $form->textField($model,'EMP_RSOCIAL',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'EMP_RSOCIAL'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'EMP_FANTASIA'); ?>
		<?php echo $form->textField($model,'EMP_FANTASIA',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'EMP_FANTASIA'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'EMP_PREFIJO'); ?>
		<?php echo $form->textField($model,'EMP_PREFIJO',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'EMP_PREFIJO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'EMP_GIRO'); ?>
		<?php echo $form->textField($model,'EMP_GIRO',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'EMP_GIRO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'EMP_INC'); ?>
		<?php echo $form->textField($model,'EMP_INC',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'EMP_INC'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'EMP_TELEFONO'); ?>
		<?php echo $form->textField($model,'EMP_TELEFONO',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'EMP_TELEFONO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'EMP_CELULAR'); ?>
		<?php echo $form->textField($model,'EMP_CELULAR',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'EMP_CELULAR'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'EMP_WEB'); ?>
		<?php echo $form->textField($model,'EMP_WEB',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'EMP_WEB'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'EMP_EMAIL'); ?>
		<?php echo $form->textField($model,'EMP_EMAIL',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'EMP_EMAIL'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'EMP_TWEETER'); ?>
		<?php echo $form->textField($model,'EMP_TWEETER',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'EMP_TWEETER'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'EMP_FACEBOOK'); ?>
		<?php echo $form->textField($model,'EMP_FACEBOOK',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'EMP_FACEBOOK'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'EMP_SKYPE'); ?>
		<?php echo $form->textField($model,'EMP_SKYPE',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'EMP_SKYPE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'EMP_ESTADO'); ?>
		<?php echo $form->textField($model,'EMP_ESTADO',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'EMP_ESTADO'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->