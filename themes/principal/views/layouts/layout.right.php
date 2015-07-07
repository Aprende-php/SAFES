<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div class="col-xs-12 col-sm-12 col-md-2">
	<h2>Opciones</h2>
	<?php
echo BsHtml::stackedPills($this->menu, array(
    'style' => '',
          'activateParents' => true,
));
?>
</div>
<div class="col-xs-12 col-sm-12 col-md-10">
	<div id="content">
		<?php echo $content; ?>
	</div><!-- content -->
</div>
<?php $this->endContent(); ?>