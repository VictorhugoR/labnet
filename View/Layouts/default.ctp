<?php
/**
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

$cakeDescription = __d('cake_dev', 'LABNET: LABORATORIO CLÍNICO EMANUEL');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		//echo $this->Html->css('cake.generic');
		echo $this->Html->css(array('foundation'));
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body style="background-color:#F4F4F4">
	<div id="container">
		<div id="header" style="background-color:white">
			<h3><center>LABNET-LABORATORIO CLÍNICO EMANUEL</center></h3>
			<h4 ><?php //echo $this->Html->link($cakeDescription, 'http://cakephp.org'); ?></h4>
		</div>
		<div class="small-2 large-2 columns" style="background-color:#F4F4F4">
			<?php echo $this->element('menu'); ?>
		</div>
		<div id="content" class="small-10 large-10 columns">

			<?php echo $this->Flash->render(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			<p>
				<?php // $cakeVersion; ?>
			</p>
		</div>
	</div>
	<?php
	/*
	<script src="js/vendor/jquery.js"></script>
	<script src="js/vendor/what-input.js"></script>
	<script src="js/vendor/foundation.js"></script>
	<script src="js/app.js"></script>*/
	echo $this->Html->script(array(
		'vendor/jquery',
		'vendor/foundation',
		));
	//echo $this->element('sql_dump');
	?>
</body>
</html>
