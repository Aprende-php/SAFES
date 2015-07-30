<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $this->pageTitle ?></title>
		<?php
		$cs        = Yii::app()->clientScript;
		$themePath = Yii::app()->theme->baseUrl;
		/**
		 * StyleSHeets
		 */
		// $cs->registerCssFile($themePath . '/assets/css/bootstrap.min.css');
		$cs->registerCssFile($themePath . '/assets/css/bootstrap.cerulean.min.css');
		/**
		 * JavaScripts
		 */
		$cs->registerCoreScript('jquery', CClientScript::POS_END);
		$cs->registerCoreScript('jquery.ui', CClientScript::POS_END);
		$cs->registerScriptFile($themePath . '/assets/js/bootstrap.min.js', CClientScript::POS_END);
		$cs->registerScript('tooltip', "$('[data-toggle=\"tooltip\"]').tooltip();$('[data-toggle=\"popover\"]').tooltip()", CClientScript::POS_READY);
		?>
		<style type="text/css">body { padding-top: 70px;background-image: url("<?php echo Yii::app()->theme->baseUrl.'/images/background.jpg'; ?>"); }</style>

  </head>
  <body>
    <div class="container">
      <?php echo $content ?>
    </div><!-- container -->
  </body>
</html>