<?php
/* @var $this EmpresaController */
/* @var $model Empresa */
/* @var $form BSActiveForm */
?>

<?php $form=$this->beginWidget('bootstrap.widgets.BsActiveForm', array(
    'layout' => BsHtml::FORM_LAYOUT_HORIZONTAL,
    // 'enableAjaxValidation'=>false,
    'enableClientValidation'=>true,
)); ?>
    <?php echo $form->errorSummary($model); ?>
    <?php echo $form->textFieldControlGroup($model,'COM_CORREL',array('maxlength'=>10)); ?>
    <?php echo $form->textFieldControlGroup($model,'EMP_RUT',array('maxlength'=>12)); ?>
    <?php echo $form->textFieldControlGroup($model,'EMP_RSOCIAL',array('maxlength'=>200)); ?>
    <?php echo $form->textFieldControlGroup($model,'EMP_FANTASIA',array('maxlength'=>200)); ?>
    <?php echo $form->textFieldControlGroup($model,'EMP_PREFIJO',array('maxlength'=>200)); ?>
    <?php echo $form->textFieldControlGroup($model,'EMP_GIRO',array('maxlength'=>200)); ?>
    <?php echo $form->textFieldControlGroup($model,'EMP_INC',array('maxlength'=>200)); ?>
    <?php echo $form->textFieldControlGroup($model,'EMP_TELEFONO',array('maxlength'=>200)); ?>
    <?php echo $form->textFieldControlGroup($model,'EMP_CELULAR',array('maxlength'=>200)); ?>
    <?php echo $form->textFieldControlGroup($model,'EMP_WEB',array('maxlength'=>200)); ?>
    <?php echo $form->textFieldControlGroup($model,'EMP_EMAIL',array('maxlength'=>200)); ?>
    <?php echo $form->textFieldControlGroup($model,'EMP_TWEETER',array('maxlength'=>200)); ?>
    <?php echo $form->textFieldControlGroup($model,'EMP_FACEBOOK',array('maxlength'=>200)); ?>
    <?php echo $form->textFieldControlGroup($model,'EMP_SKYPE',array('maxlength'=>200)); ?>
    <?php echo $form->textFieldControlGroup($model,'EMP_ESTADO',array('maxlength'=>200)); ?>
    <?php echo BsHtml::formActions(array(BsHtml::submitButton('Guardar', array('color' => BsHtml::BUTTON_COLOR_PRIMARY))));?>

<?php $this->endWidget(); ?>
