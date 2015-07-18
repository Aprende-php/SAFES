<?php
/* @var $this UsuHasActController */
/* @var $model UsuHasAct */
/* @var $form BSActiveForm */
?>

<?php $form=$this->beginWidget('bootstrap.widgets.BsActiveForm', array(
    'action'=>Yii::app()->createUrl($this->route),
    'method'=>'get',
)); ?>

    <?php echo $form->textFieldControlGroup($model,'ACT_CORREL',array('maxlength'=>10)); ?>
    <?php echo $form->textFieldControlGroup($model,'PER_CORREL',array('maxlength'=>10)); ?>
    <?php echo $form->textFieldControlGroup($model,'TIPO',array('maxlength'=>10)); ?>

    <div class="form-actions">
        <?php echo BsHtml::submitButton('Search',  array('color' => BsHtml::BUTTON_COLOR_PRIMARY,));?>
    </div>

<?php $this->endWidget(); ?>
