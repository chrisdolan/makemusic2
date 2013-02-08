<div class="cities index">
	<h2><?php echo __('Cities'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('hostname'); ?></th>
			<th><?php echo $this->Paginator->sort('facebook_url'); ?></th>
			<th><?php echo $this->Paginator->sort('twitter_url'); ?></th>
			<th><?php echo $this->Paginator->sort('instagram_url'); ?></th>
			<th><?php echo $this->Paginator->sort('youtube_url'); ?></th>
			<th><?php echo $this->Paginator->sort('flickr_url'); ?></th>
			<th><?php echo $this->Paginator->sort('official_url'); ?></th>
			<th><?php echo $this->Paginator->sort('performance_cutoff'); ?></th>
			<th><?php echo $this->Paginator->sort('homepage_description'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($cities as $city): ?>
	<tr>
		<td><?php echo h($city['City']['id']); ?>&nbsp;</td>
		<td><?php echo h($city['City']['name']); ?>&nbsp;</td>
		<td><?php echo h($city['City']['hostname']); ?>&nbsp;</td>
		<td><?php echo h($city['City']['facebook_url']); ?>&nbsp;</td>
		<td><?php echo h($city['City']['twitter_url']); ?>&nbsp;</td>
		<td><?php echo h($city['City']['instagram_url']); ?>&nbsp;</td>
		<td><?php echo h($city['City']['youtube_url']); ?>&nbsp;</td>
		<td><?php echo h($city['City']['flickr_url']); ?>&nbsp;</td>
		<td><?php echo h($city['City']['official_url']); ?>&nbsp;</td>
		<td><?php echo h($city['City']['performance_cutoff']); ?>&nbsp;</td>
		<td><?php echo h($city['City']['homepage_description']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $city['City']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $city['City']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $city['City']['id']), null, __('Are you sure you want to delete # %s?', $city['City']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New City'), array('action' => 'add')); ?></li>
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
