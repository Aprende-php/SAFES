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
		<style type="text/css">body { padding-top: 70px;background-image: url("<?php echo Yii::app()->theme->baseUrl.'/images/background.jpg'; ?>"); }</style>
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
							'visible' => Usuario::checkAccess('usuario'),
							'label' => 'Usuarios',
							'url' => array('/Usuario/index'),
							'icon'=> BsHtml::GLYPHICON_COG,
							'items' => array(
								// BsHtml::dropDownHeader('Administración de Empresas'),
								// array('label' => 'Administrar Empresa','url' => array('/Empresa/admin'),'visible' => Usuario::checkAccess('usuario')),
								// array('label' => 'Agregar Empresa','url' => array('/Empresa/create'),'visible' => Usuario::checkAccess('usuario')),
								// BsHtml::menuDivider(),
								BsHtml::dropDownHeader('Administración de Usuarios'),
								array('label' => 'Administrar Usuarios','url' => array('/usuario/admin'),'visible' => Usuario::checkAccess('usuario','admin')),
								array('label' => 'Administrar Modulos','url' => array('/usuario/modulos'),'visible' => Usuario::checkAccess('usuario','modulos')),
								array('label' => 'Administrar Permisos','url' => array('/usuario/permisos'),'visible' => Usuario::checkAccess('usuario','permisos')),
								array('label' => 'Administrar Roles','url' => array('/usuario/role'),'visible' => Usuario::checkAccess('usuario','role')),

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
							'visible' => Usuario::checkAccess('empresa'),
							'label' => 'Empresa',
							'url' => array('/Empresa/index'),
							'icon'=> BsHtml::GLYPHICON_COG,
							'items' => array(
								BsHtml::dropDownHeader('Administración de Empresas'),
								array('label' => 'Agregar Empresa','url' => array('/Empresa/create'),'visible' => Usuario::checkAccess('empresa','create')),
								array('label' => 'Administrar Empresa','url' => array('/Empresa/admin'),'visible' => Usuario::checkAccess('empresa','admin')),
								array('label' => 'Plan Estrategico','url' => array('/Empresa/create'),'visible' => Usuario::checkAccess('empresa','create')),
								BsHtml::menuDivider(),
								
								BsHtml::dropDownHeader('Administración de Usuarios'),
								array('label' => 'Administrar Usuarios','url' => array('/persona/admin'),'visible' => Usuario::checkAccess('empresa','admin')),
								array('label' => 'Agregar Persona','url' => array('/persona/create'),'visible' => Usuario::checkAccess('empresa','create')),
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
							'visible' => Usuario::checkAccess('proyecto'),
							'label' => 'Proyectos',
							'url' => array('/Usuario/index'),
							'icon'=> BsHtml::GLYPHICON_SAVED,
							'items' => array(
								BsHtml::dropDownHeader('Proyectos'),
								array('label' => 'Informe Ejecutivo','url' => array('/Informe/create'),'visible' => Usuario::checkAccess('proyecto')),
								array('label' => 'Crear Informe Ejecutivo','url' => array('/Informe/create'),'visible' => Usuario::checkAccess('proyecto')),
								array('label' => 'Formular Proyecto','url' => array('/indicador/create'),'visible' => Usuario::checkAccess('proyecto')),
								array('label' => 'Propuesta Proyecto','url' => array('/indicador/create'),'visible' => Usuario::checkAccess('proyecto')),
								array('label' => 'Administrar Proyecto','url' => array('/indicador/create'),'visible' => Usuario::checkAccess('proyecto')),
								array('label' => 'Evaluacion de Proyecto','url' => array('/indicador/create'),'visible' => Usuario::checkAccess('proyecto')),
								array('label' => 'Revicion de Proyecto','url' => array('/indicador/create'),'visible' => Usuario::checkAccess('proyecto')),
								array('label' => 'Consulta Proyectos','url' => array('/indicador/create'),'visible' => Usuario::checkAccess('proyecto')),
								array('label' => 'Estado Proyectos','url' => array('/indicador/create'),'visible' => Usuario::checkAccess('proyecto')),
								BsHtml::menuDivider(),
								BsHtml::dropDownHeader('Bases de Proyecto'),
								array('label' => 'Crear Bases de Proyectos','url' => array('/indicador/create'),'visible' => Usuario::checkAccess('proyecto')),
								array('label' => 'Administrar Bases de Proyectos','url' => array('/indicador/create'),'visible' => Usuario::checkAccess('proyecto')),
								BsHtml::menuDivider(),
								BsHtml::dropDownHeader('Accidentes de trabajo'),
								array('label' => 'Agregar Accidente','url' => array('/accidente/ingresarForestal'),'visible' => Usuario::checkAccess('proyecto')),
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
							'visible' => Usuario::checkAccess('informes'),
							'label' => 'Informes',
							'url' => array('/Usuario/index'),
							'icon'=> BsHtml::GLYPHICON_LIST_ALT,
							'items' => array(
								array('label' => 'Seguridad por empresa','url' => array('/estadistica/seg_emp/'),'visible' => Usuario::checkAccess('estadistica')),
								array('label' => 'Seguridad de empresas por area','url' => array('/estadistica/seg_emp_are/'),'visible' => Usuario::checkAccess('estadistica')),
								array('label' => 'Seguridad planta con areas','url' => array('/estadistica/seg_plan_are/'),'visible' => Usuario::checkAccess('estadistica')),
								array('label' => 'Seguridad de empresas con otras empresas','url' => array('/estadistica/seg_emp_emp/'),'visible' => Usuario::checkAccess('estadistica')),
								array('label' => 'Accidentes mensuales por empresas','url' => array('/estadistica/acc_men_emp/'),'visible' => Usuario::checkAccess('estadistica')),
								array('label' => 'Accidentes Anuales Area Bosque','url' => array('/estadistica/acc_anu_are_bosque/'),'visible' => Usuario::checkAccess('estadistica')),
							)
						)
					)
				),
				// Usuarios Login
				array(
					'class' => 'bootstrap.widgets.BsNav',
					'type' => 'navbar',
					// 'activateParents' => false,
					'items' => array(
						array(
							'label' => 'Bienvenido Ruben',
							// 'url' => array(
							// 	'/site/index'
							// ),
							'icon'=>BsHtml::GLYPHICON_USER,
							'visible' => !Yii::app()->user->isGuest,
							'items' => array(

								array('icon'=>BsHtml::GLYPHICON_USER,'label' => 'Cambiar Contraseña','url' => array('/usuario/changepassword')),
								BsHtml::menuDivider(),
								array('icon'=>BsHtml::GLYPHICON_LOG_OUT,'label' => 'Cerrar Sesión','url' => array('/usuario/logout'))
						
							),
						),
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
		<?php var_dump(Usuario::checkAccess()); ?>
			<div class="row">
				<?php echo $content; ?>
			</div>                    
		</div>
	</div>
	</body>
</html>