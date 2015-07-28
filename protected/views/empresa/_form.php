<?php
Valida::setRut($model,'EMP_RUT');
?>

<?php $form=$this->beginWidget('bootstrap.widgets.BsActiveForm', array(
    // 'layout' => BsHtml::FORM_LAYOUT_HORIZONTAL,
    // 'enableAjaxValidation'=>false,
    'enableClientValidation'=>true,
)); ?>
    <div class="row">
    <?php echo $form->errorSummary($model); ?>
        <div class="col-sm-12 col-md-6">
    <?php
        echo $form->dropDownListControlGroup($model, 'COM_CORREL',
            Region::model()->getComunas(), 
            array(
                    'empty' => 'Seleccione la Comuna'
            )
        );
    ?>
    <?php echo $form->textFieldControlGroup($model,'EMP_RUT',array('maxlength'=>12)); ?>
    <?php echo $form->textFieldControlGroup($model,'EMP_RSOCIAL',array('maxlength'=>200)); ?>
    <?php echo $form->textFieldControlGroup($model,'EMP_FANTASIA',array('maxlength'=>200)); ?>
    <?php echo $form->textFieldControlGroup($model,'EMP_PREFIJO',array('maxlength'=>200)); ?>
    <?php //echo $form->textFieldControlGroup($model,'EMP_INC',array('maxlength'=>200)); ?>
    <?php echo $form->textFieldControlGroup($model,'EMP_TELEFONO',array('maxlength'=>200)); ?>
    </div>        
    <div class="col-sm-12 col-md-6">
    <?php echo $form->textFieldControlGroup($model,'EMP_CELULAR',array('maxlength'=>200)); ?>
    <?php echo $form->textFieldControlGroup($model,'EMP_WEB',array('maxlength'=>200)); ?>
    <?php echo $form->textFieldControlGroup($model,'EMP_EMAIL',array('maxlength'=>200)); ?>
    <?php echo $form->textFieldControlGroup($model,'EMP_TWEETER',array('maxlength'=>200)); ?>
    <?php echo $form->textFieldControlGroup($model,'EMP_FACEBOOK',array('maxlength'=>200)); ?>
    <?php echo $form->textFieldControlGroup($model,'EMP_SKYPE',array('maxlength'=>200)); ?>
    <?php //echo $form->textFieldControlGroup($model,'EMP_ESTADO',array('maxlength'=>200)); ?>
    </div>
    </div>
    <div class="row">
    <div class="col-sm-12 col-md-6">
    <?php
        echo $form->dropDownListControlGroup($model, '[]EMP_GIRO',
            Rubro::model()->getActividad(), 
            array(
                    'empty' => 'Favor Elegir Giros de la Empresa',
                     'onchange'=>'if($("#Empresa_EMP_GIRO").val())$(".EMP_GIRO").append(\'<div><input name="EMP_GIRO[\'+$("#Empresa_EMP_GIRO").val()+\']" value="\'+$("#Empresa_EMP_GIRO option:selected").text()+\'"class="form-control" type="text"><a href="#" class="remove_field">Quitar</a></div>\');'
            )
        );
    ?>
    <div class="EMP_GIRO">
    <?php if (isset($_POST['EMP_GIRO']))
        foreach($_POST['EMP_GIRO'] as $key => $value): ?>
        <div>
            <input name="EMP_GIRO[<?php echo $key ?>]" value="<?php echo $value ?>"class="form-control" type="text">
            <a href="#" class="remove_field">Quitar</a>
        </div> 
    <?php endforeach?>
    </div>
     <script>
        $(document).ready(function() {
            $(".EMP_GIRO").on("click",".remove_field", function(e){
                e.preventDefault(); $(this).parent('div').remove();
            })
        });
    </script>
    <?php    echo BsHtml::submitButton('Guardar', array(        'color' => BsHtml::BUTTON_COLOR_PRIMARY    ));?>
    </div>
    </div>
    <?php $this->endWidget(); ?>