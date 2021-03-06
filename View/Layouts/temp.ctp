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
	
	<?php echo $this->Html->image('under-construction.png', array('style'=>'width:1000px; margin:0 auto; display:block')); ?>
</body>
</html>