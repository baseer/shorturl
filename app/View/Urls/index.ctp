<div class="row">
	<div class="col-md-12">
		<h1 class="site-title uppercase blue underline">shorturl<span class="glyphicon glyphicon-resize-small"></span></h1>
	</div>
</div>
<div class="row">
	<div class="col-md-6">
		<h2 class="blue">Shorten, share and track your shortened URLs.</h2>
		<p>shorturl allows you to track, in real-time, the clicks and referrers on any shortened URL - a perfect tool to help you understand what appeals to your audience and to help you optimize your social, email, and other click-through campaigns.</p>
		<p><?php echo $this->Html->link("Create your account", "#"); ?> to get started today.</p>
	</div>
	<div class="col-md-6">
		<div id="shorten-form-container" class="light-gray-bg">
			<h2 class="blue">Paste your long URL here:</h2>
			<?php
			echo $this->Form->create('Url');
			$submit = $this->Js->submit('Shorten', array('class'=>'btn btn-primary', 'div'=>array('class'=>'input-group-btn')));
			echo $this->Form->input('url',
				array(	'label'	=>	array('class'=>"input-group-addon glyphicon glyphicon-link", 'text'=>false),
						'class'	=> 'form-control',
						'div'	=>	array('class'=>'input-group input text'),
						'after'	=>	$submit));
			echo $this->Form->end();
			?>
			<p>All shorturl URLs and click analytics are public and can be viewed by anyone.</p>
		</div>
	</div>
</div>