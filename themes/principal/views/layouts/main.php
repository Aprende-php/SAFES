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
		<!--[if lt IE 9]>
				<script src="<?php
		echo Yii::app()->theme->baseUrl . '/assets/js/html5shiv.js';
		?>"></script>
				<script src="<?php
		echo Yii::app()->theme->baseUrl . '/assets/js/respond.min.js';
		?>"></script>
		<![endif]-->
		<style type="text/css">body { padding-top: 70px; }</style>
	</head>
	<body>
	<div class="container">
	 <?php 
		// Begin Navbar
		$this->widget('bootstrap.widgets.BsNavbar', array(
			'collapse' => true,
			'brandLabel'=>BsHtml::icon(BsHtml::GLYPHICON_FIRE).' SAFES',
			'brandUrl' => Yii::app()->homeUrl,
			'position' => BsHtml::NAVBAR_POSITION_FIXED_TOP,
			// 'htmlOptions' => array(
			//         'containerOptions' => array(
			//             'fluid' => true
			//         ),
			// ),
			//'color' => BsHtml::NAVBAR_COLOR_INVERSE,
			'items' => array(
				// Usuarios
				array(	
					'class' => 'bootstrap.widgets.BsNav',
					'type' => 'navbar',
					'activateParents' => true,
					'items' => array(
						array(
							'visible' => TRUE,
							'label' => 'Usuarios',
							'url' => array('/Usuario/index'),
							'icon'=> BsHtml::GLYPHICON_COG,
							'items' => array(
								// BsHtml::dropDownHeader('Administración de Empresas'),
								// array('label' => 'Administrar Empresa','url' => array('/Empresa/admin'),'visible' => TRUE),
								// array('label' => 'Agregar Empresa','url' => array('/Empresa/create'),'visible' => TRUE),
								// BsHtml::menuDivider(),
								BsHtml::dropDownHeader('Administración de Usuarios'),
								array('label' => 'Administrar Usuarios','url' => array('/usuario/admin'),'visible' => TRUE),
								array('label' => 'Administrar Modulos','url' => array('/usuario/modulos'),'visible' => TRUE),
								array('label' => 'Administrar Permisos','url' => array('/usuario/permisos'),'visible' => TRUE),
								array('label' => 'Administrar Roles','url' => array('/usuario/role'),'visible' => TRUE),

								)
						)
					)
				),				
				// Empresa
				array(
					'class' => 'bootstrap.widgets.BsNav',
					'type' => 'navbar',
					'activateParents' => true,
					'items' => array(
						array(
							'visible' => TRUE,
							'label' => 'Empresa',
							'url' => array('/Usuario/index'),
							'icon'=> BsHtml::GLYPHICON_COG,
							'items' => array(
								BsHtml::dropDownHeader('Administración de Empresas'),
								array('label' => 'Administrar Empresa','url' => array('/Empresa/admin'),'visible' => TRUE),
								array('label' => 'Agregar Empresa','url' => array('/Empresa/create'),'visible' => TRUE),
								BsHtml::menuDivider(),
								
								BsHtml::dropDownHeader('Administración de Usuarios'),
								array('label' => 'Administrar Usuarios','url' => array('/persona/admin'),'visible' => TRUE),
								array('label' => 'Agregar Persona','url' => array('/persona/create'),'visible' => TRUE),
								)
						)
					)
				),
				// Roles
				array(
					'class' => 'bootstrap.widgets.BsNav',
					'type' => 'navbar',
					'activateParents' => true,
					'items' => array(
						array(
							'visible' => TRUE,
							'label' => 'Proyectos',
							'url' => array('/Usuario/index'),
							'icon'=> BsHtml::GLYPHICON_SAVED,
							'items' => array(
								BsHtml::dropDownHeader('Proyectos'),
								array('label' => 'Agregar Tasa de accidentes','url' => array('/indicador/create'),'visible' => TRUE),
								BsHtml::menuDivider(),
								BsHtml::dropDownHeader('Accidentes de trabajo'),
								array('label' => 'Agregar Accidente','url' => array('/accidente/ingresarForestal'),'visible' => TRUE),
							)
						)
					)
				),
				// Proyectos
				array(
					'class' => 'bootstrap.widgets.BsNav',
					'type' => 'navbar',
					'activateParents' => true,
					'items' => array(
						array(
							'label' => 'Informes',
							'url' => array('/Usuario/index'),
							'icon'=> BsHtml::GLYPHICON_LIST_ALT,
							'items' => array(
								array('label' => 'Seguridad por empresa','url' => array('/estadistica/seg_emp/'),'visible' => TRUE),
								array('label' => 'Seguridad de empresas por area','url' => array('/estadistica/seg_emp_are/'),'visible' => TRUE),
								array('label' => 'Seguridad planta con areas','url' => array('/estadistica/seg_plan_are/'),'visible' => TRUE),
								array('label' => 'Seguridad de empresas con otras empresas','url' => array('/estadistica/seg_emp_emp/'),'visible' => TRUE),
								array('label' => 'Accidentes mensuales por empresas','url' => array('/estadistica/acc_men_emp/'),'visible' => TRUE),
								array('label' => 'Accidentes Anuales Area Bosque','url' => array('/estadistica/acc_anu_are_bosque/'),'visible' => TRUE),
							)
						)
					)
				),
				// Usuarios Login
				array(
					'class' => 'bootstrap.widgets.BsNav',
					'type' => 'navbar',
					'activateParents' => true,
					'items' => array(
						array(
							'label' => 'Bienvenido Ruben',
							'url' => array(
								'/site/index'
							),
					'icon'=>BsHtml::GLYPHICON_USER,
							'items' => array(

								array('icon'=>BsHtml::GLYPHICON_USER,'label' => 'Cambiar Contraseña','url' => array('/usuario/changepassword'),'visible' => !Yii::app()->user->isGuest),
								BsHtml::menuDivider(),
								array('icon'=>BsHtml::GLYPHICON_LOG_OUT,'label' => 'Cerrar Sesión','url' => array('/site/logout'),'visible' => !Yii::app()->user->isGuest)
						
							)
						)
					),
					'htmlOptions' => array(
						'pull'=> BsHtml::NAVBAR_NAV_PULL_RIGHT
					),
				),
			)
		// fin de items
		)
	);
		// end nabvar
		// breadcrumbs
			$this->widget('bootstrap.widgets.BsBreadCrumb', array(
				'links' => $this->breadcrumbs,
				// will change the container to ul
				'tagName' => 'ul',
				// will generate the clickable breadcrumb links
				'activeLinkTemplate' => '<li><a href="{url}">{label}</a></li>',
				// will generate the current page url : <li>News</li>
				'inactiveLinkTemplate' => '<li>{label}</li>',
				// will generate your homeurl item : <li><a href="/dr/dr/public_html/">Home</a></li>
				'homeLink' => BsHtml::openTag('li') . BsHtml::icon(BsHtml::GLYPHICON_HOME) . BsHtml::closeTag('li')
			));
	?>
		<!-- contenido -->
		<div class="jumbotron">
			<div class="row">
				<?php echo $content; ?>
			</div>                    
		</div>
	</div>
	</body>
</html>