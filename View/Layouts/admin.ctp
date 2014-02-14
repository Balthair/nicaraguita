<!DOCTYPE html>
<html>
  <head>
  	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $title_for_layout; ?>
	</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php 
		echo $this->Html->meta('icon', $this->Html->url('/img/favicon.png'));
		echo $this->Html->css('cake.generic');
		echo $this->Html->css('bootstrap');
		echo $this->Html->css('admin');
		echo $this->Html->css('toggle-switch');
		//echo $this->Html->css('demo_table_jui');
		echo $this->Html->css('http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css');
		//echo $this->Html->css('jquery.ui.modify');

		echo $this->Html->css('uploadifive.css');

		echo $this->Html->css('chosen.css');
		echo $this->Html->css('chosen-bootstrap.css');

		echo $this->Html->script('http://code.jquery.com/jquery-2.0.0.min.js');
		echo $this->Html->script('http://code.jquery.com/ui/1.10.3/jquery-ui.js');


		//echo $this->Html->script('bootstrap');


		//echo $this->Html->script('jquery.dataTables.min');

		//echo $this->Html->script('tinymce/tinymce.min.js');

		echo $this->Html->script('jquery.uploadifive.min.js');

		//echo $this->Html->script('jquery-ui-timepicker-addon.js');

		echo $this->Html->script('chosen.jquery.min');

		echo $this->Html->script('admincommon.js');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');

	?>
</head>
<body>
	<?php //echo $this->Session->flash(); ?>
	<header id="adminHead">
		<div id="brand">
			<div class="wrapperLogo">
				<?php echo $this->Html->image('g_piggy2.png',array('height' => '100%')); ?>
			</div>
			<div class="textHead">
				<span class="title">Asodenic</span>
			</div>
		</div>
		<div id="mainMenu" class="textHead">
			<?php echo $this->element('admin/main_menu'); ?>
		</div>
		<div id="logInfo">
			<div class="wrapperLogo">
				<?php echo $this->Html->image('user.png',array('height' => '100%')); ?>
			</div>
			<div class="textHead">
				<span class="title"><?php echo 'Bienvenido '.$dataUser['User']['username'].' | '.$this->Html->link('Cerrar Sesión','/users/logout');?></span>
			</div>
		</div>
	</header>
	<div id="content_main">
		<div class="row" id="wrapper_main">
			<div class="wrap_titulo"><?php echo $title_for_layout; ?></div>
			<?php 
			echo $this->Session->flash();
        	echo $this->Session->flash('auth');
        	?>
			<?php echo $this->fetch('content'); ?>
		</div>
	</div>
</body>
</html>


