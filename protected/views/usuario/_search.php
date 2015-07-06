<?php
/* @var $this UsuarioController */
/* @var $model Usuario */
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
		<?php echo $form->label($model,'USU_ESTADO'); ?>
		<?php echo $form->textField($model,'USU_ESTADO',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'USU_PASSWORD'); ?>
		<?php echo $form->textField($model,'USU_PASSWORD',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'USU_CREATE'); ?>
		<?php echo $form->textField($model,'USU_CREATE'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'USU_MODIFIED'); ?>
		<?php echo $form->textField($model,'USU_MODIFIED'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->