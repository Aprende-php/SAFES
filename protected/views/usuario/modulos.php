
<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
<?php foreach ($model as $value): ?>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#acc<?php echo $value->CON_CORREL; ?>" aria-expanded="false" aria-controls="acc<?php echo $value->CON_CORREL; ?>">
          <?php echo $value->CON_FICTICIO ?>
        </a>
      </h4>
    </div>
	<div id="acc<?php echo $value->CON_CORREL; ?>" class="panel-collapse collapse acc" role="tabpanel">
      <div class="panel-body">
	<?php foreach ($value->actions as $val): ?>
        <?php echo $val->ACT_NOMBRE ?>
	<?php endforeach ?>
	<?php if (!$value->actions): ?>
		No hay nada
	<?php endif ?>
      </div>
    </div>
  </div>
<?php endforeach ?>
</div>
<div>
<?php echo BsHtml::button('Contraer Modulos', array('color' => BsHtml::BUTTON_COLOR_PRIMARY,'onclick'=>"$('.acc').collapse('hide')"));?>
<?php echo BsHtml::button('Expandir Modulos', array('color' => BsHtml::BUTTON_COLOR_INFO,'onclick'=>"$('.acc').collapse('show')"));?>
</div>