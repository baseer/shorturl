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
			$submit = $this->Js->submit('Shorten',
				array(	'class'		=> 'btn btn-primary',
						'div'		=> array('class'=>'input-group-btn'),
						'type'		=> 'json',
						'success'	=> '$("#shortened-url").html(data.shortened_url);$("#shortened-url-modal").modal();'));

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
<div class="modal fade" id="shortened-url-modal" tabindex="-1" role="dialog" aria-labelledby="shortened-url-modal-label" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h1 id="shortened-url-modal-label" class="modal-title blue">Your new shortened URL is:</h1>
      </div>
      <div id="shortened-url" class="modal-body"></div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->