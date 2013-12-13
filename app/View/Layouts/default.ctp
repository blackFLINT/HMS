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

$cakeDescription = __d('cake_dev', 'Login : Hospital Management System');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
	echo $this->Html->meta('icon');

	/** css inclusion */
	echo $this->Html->css('style.default');
	echo $this->Html->css('style.palegreen');
	echo $this->Html->css('responsive-tables');

	/** js inclusion */
	echo $this->html->script("jquery-1.9.1.min.js");
	echo $this->html->script("jquery-migrate-1.1.1.min.js");
	echo $this->html->script("jquery-ui-1.10.3.min.js");
	echo $this->html->script("modernizr.min.js");
	echo $this->html->script("bootstrap.min.js");
	echo $this->html->script("jquery.cookie.js");
	echo $this->html->script("jquery.uniform.min.js");
	echo $this->html->script("flot/jquery.flot.min.js");
	echo $this->html->script("flot/jquery.flot.resize.min.js");
	echo $this->html->script("responsive-tables.js");
	echo $this->html->script("jquery.slimscroll.js");
	echo $this->html->script("custom.js");

	echo $this->fetch('meta');
	echo $this->fetch('css');
	echo $this->fetch('script');
	?>
	<script type="text/javascript">
	jQuery(document).ready(function(){
		jQuery('#login').submit(function(){
			var u = jQuery('#username').val();
			var p = jQuery('#password').val();
			if(u == '' || p == '') {
				jQuery('.login-alert').fadeIn();
				return false;
			}
		});
	});
	</script>
	<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/excanvas.min.js"></script><![endif]-->
</head>
<?php echo $this->Session->flash(); ?>

<?php echo $this->fetch('content'); ?>
</html>
