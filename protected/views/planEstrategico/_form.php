<?php
/* @var $this PlanEstrategicoController */
/* @var $model PlanEstrategico */
/* @var $form BSActiveForm */
?>

<?php $form=$this->beginWidget('bootstrap.widgets.BsActiveForm', array(
    // 'layout' => BsHtml::FORM_LAYOUT_HORIZONTAL,
    // 'enableAjaxValidation'=>false,
    'enableClientValidation'=>true,
)); ?>
    <?php echo $form->errorSummary($model); ?>
    <div class="row">
        <div class="col-sm-12 col-md-6">
    <?php echo $form->textFieldControlGroup($model,'P_EST_NOMBRE',array('maxlength'=>200)); ?>
    <?php echo $form->textFieldControlGroup($model,'P_EST_DESCRIPCION'); ?>
    <?php echo $form->dateFieldControlGroup($model,'P_EST_FINICIO'); ?>
    <?php echo $form->dateFieldControlGroup($model,'P_EST_FTERMINO'); ?>

        </div>        
       <!--  <div class="col-sm-12 col-md-6">

        </div> -->
    <?php echo BsHtml::formActions(array(BsHtml::submitButton('Guardar', array('color' => BsHtml::BUTTON_COLOR_PRIMARY))));?>
    </div>

<?php $this->endWidget(); ?>
