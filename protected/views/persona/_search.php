<?php
/* @var $this PersonaController */
/* @var $model Persona */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'PER_CORREL'); ?>
		<?php echo $form->textField($model,'PER_CORREL',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'EMP_CORREL'); ?>
		<?php echo $form->textField($model,'EMP_CORREL',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'COM_CORREL'); ?>
		<?php echo $form->textField($model,'COM_CORREL',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PER_NOMBRE'); ?>
		<?php echo $form->textField($model,'PER_NOMBRE',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PER_PATERNO'); ?>
		<?php echo $form->textField($model,'PER_PATERNO',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PER_MATERNO'); ?>
		<?php echo $form->textField($model,'PER_MATERNO',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PER_CARGO'); ?>
		<?php echo $form->textField($model,'PER_CARGO',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PER_TIPO'); ?>
		<?php echo $form->textField($model,'PER_TIPO',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PER_NIVEL'); ?>
		<?php echo $form->textField($model,'PER_NIVEL',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PER_EMAIL'); ?>
		<?php echo $form->textField($model,'PER_EMAIL',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PER_RUT'); ?>
		<?php echo $form->textField($model,'PER_RUT',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->