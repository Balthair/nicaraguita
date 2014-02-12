<!DOCTYPE html>
<html>
  <head>
  	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $title_for_layout; ?>
	</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <?php 

		//echo $this->Html->css('http://necolas.github.io/normalize.css/2.1.1/normalize.css');
		echo $this->Html->css('bootstrap');
		echo $this->Html->css('admin');

		echo $this->Html->script('http://code.jquery.com/jquery-2.0.3.min.js');
		echo $this->Html->script('bootstrap');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');

	?>
  </head>
  <body>
    <?php //echo $this->Session->flash(); ?>
	<header id="adminHead">
		<div class="brand">
			<div class="wrapperLogo">
				<?php echo $this->Html->image('g_piggy2.png',array('height' => '100%')); ?>
			</div>
			<div class="textHead">
				<span class="title">PiggyAdmin</span>
			</div>
		</div>
	</header>
	<div id="content_main">
		<div class="row">
			<?php echo $this->fetch('content'); ?>
		</div>
	</div>
  </body>
</html>