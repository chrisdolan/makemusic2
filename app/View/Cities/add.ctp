<div class="cities form">
<?php echo $this->Form->create('City'); ?>
	<fieldset>
		<legend><?php echo __('Add City'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('hostname');
		echo $this->Form->input('facebook_url');
		echo $this->Form->input('twitter_url');
		echo $this->Form->input('instagram_url');
		echo $this->Form->input('youtube_url');
		echo $this->Form->input('flickr_url');
		echo $this->Form->input('official_url');
		echo $this->Form->input('performance_cutoff');
		echo $this->Form->input('homepage_description');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Cities'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List City Extdata'), array('controller' => 'city_extdata', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New City Extdatum'), array('controller' => 'city_extdata', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List City Hours'), array('controller' => 'city_hours', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New City Hour'), array('controller' => 'city_hours', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Districts'), array('controller' => 'districts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New District'), array('controller' => 'districts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Locations'), array('controller' => 'locations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Location'), array('controller' => 'locations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
