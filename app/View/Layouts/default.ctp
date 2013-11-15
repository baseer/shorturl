<!DOCTYPE html>
<html lang="en">
<head>
	<?php echo $this->Html->charset(); ?>
	<title><?php echo $title_for_layout; ?></title>
	<?php
	echo $this->Html->meta('icon');
	echo $this->Html->meta(array('name'=>'viewport', 'content'=>'width=device-width, initial-scale=1.0'));
	echo $this->Html->css(array('bootstrap.min', /*'bootstrap-theme.min',*/ 'main'));

	echo $this->fetch('meta');
	echo $this->fetch('css');
	echo $this->fetch('script');
	?>
</head>
<body>
	<div class="container">
		<?php
		echo $this->Session->flash();
		echo $this->fetch('content');
		?>
	</div>
	<?php
	echo $this->element('sql_dump');
	echo $this->Html->script(array('jquery.min', 'bootstrap.min'));
	echo $this->Js->writeBuffer(); // Write cached scripts
	?>
</body>
</html>