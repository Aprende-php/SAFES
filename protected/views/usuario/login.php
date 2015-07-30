<?php
Valida::setRut($model,'username');
?>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-7">
        <?php
            $this->beginWidget('bootstrap.widgets.BsPanel', array(
                'title' => ' <span class="glyphicon glyphicon-lock"></span> SAFEs',
                'footer'=>'¿No estas registrado? <a href="http://www.jquery2dotnet.com">Ingresa Aquí</a>'
            ));
        ?>
        <?php
        $form = $this->beginWidget('bootstrap.widgets.BsActiveForm');
        ?>
        <?php echo $form->textFieldControlGroup($model, 'username',array('required'=>true));?>
        <?php echo $form->passwordFieldControlGroup($model, 'password',array('required'=>true));?>
        <?php echo $form->checkBoxControlGroup($model, 'rememberMe'); ?>
        <?php echo BsHtml::submitButton('Ingresar', array('color' => BsHtml::BUTTON_COLOR_SUCCESS,'class' => 'btn-sm'));?>
        <button type="reset" class="btn btn-default btn-sm">Borrar</button>
        <?php $this->endWidget();?>
        <?php $this->endWidget();?>
    </div>
</div>
