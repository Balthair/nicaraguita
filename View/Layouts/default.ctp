<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php //echo $cakeDescription ?>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		//echo $this->Html->css('cake.generic');

        echo $this->Html->css('normalize');
        echo $this->Html->css('default');
        echo $this->Html->css('skitter.styles');
        echo $this->Html->css('//code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css');

        echo $this->Html->script('jquery');
        echo $this->Html->script('//code.jquery.com/ui/1.10.4/jquery-ui.js');
        echo $this->Html->script('jquery.easing.1.3');
        echo $this->Html->script('jquery.animate-colors-min.js');
        echo $this->Html->script('jquery.skitter.min');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
    <link href='http://fonts.googleapis.com/css?family=Maven+Pro' rel='stylesheet' type='text/css'>
</head>
<body>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/es_ES/all.js#xfbml=1";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
	<div id="container">
		<header id="header">
            <div class="headBack">
                <nav id="mainMenuContainer">
                    <div class="center">
                        <ul id="mainMenu">
                            <li><a href="<?php echo $this->Html->url('/'); ?>">Inicio</a></li>
                            <li><a href="">¿Quienes Somos?</a></li>
                            <li><a href="<?php echo $this->Html->url('/packages/viewAll'); ?>">Paquetes</a></li>
                            <li><a href="">Contactenos</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="center">
            <?php echo $this->Html->image(
                'logo.png',
                array(
                    'id' => 'logo'
                )
            ); ?>
            </div>
        <div class="clear"></div>
        </header>
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
        <div class="clear"></div>
		<div id="footer">
			<?php echo $this->element('footer');?>
		</div>
	</div>
	<?php //echo $this->element('sql_dump'); ?>
</body>
</html>
