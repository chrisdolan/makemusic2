<div class="users view">
<h2><?php  echo __('User'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('City'); ?></dt>
		<dd>
			<?php echo $this->Html->link($user['City']['name'], array('controller' => 'cities', 'action' => 'view', $user['City']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Username'); ?></dt>
		<dd>
			<?php echo h($user['User']['username']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($user['User']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is City Admin'); ?></dt>
		<dd>
			<?php echo h($user['User']['is_city_admin']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Screenname'); ?></dt>
		<dd>
			<?php echo h($user['User']['screenname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($user['User']['address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone'); ?></dt>
		<dd>
			<?php echo h($user['User']['phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contact Preference'); ?></dt>
		<dd>
			<?php echo h($user['User']['contact_preference']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), null, __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cities'), array('controller' => 'cities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New City'), array('controller' => 'cities', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Artists'), array('controller' => 'artists', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Artist'), array('controller' => 'artists', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Locations'), array('controller' => 'locations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Location'), array('controller' => 'locations', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Artists'); ?></h3>
	<?php if (!empty($user['Artist'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Groupname'); ?></th>
		<th><?php echo __('Website'); ?></th>
		<th><?php echo __('Facebook'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Previous Venues'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['Artist'] as $artist): ?>
		<tr>
			<td><?php echo $artist['id']; ?></td>
			<td><?php echo $artist['user_id']; ?></td>
			<td><?php echo $artist['groupname']; ?></td>
			<td><?php echo $artist['website']; ?></td>
			<td><?php echo $artist['facebook']; ?></td>
			<td><?php echo $artist['description']; ?></td>
			<td><?php echo $artist['previous_venues']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'artists', 'action' => 'view', $artist['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'artists', 'action' => 'edit', $artist['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'artists', 'action' => 'delete', $artist['id']), null, __('Are you sure you want to delete # %s?', $artist['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Artist'), array('controller' => 'artists', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Locations'); ?></h3>
	<?php if (!empty($user['Location'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('City Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Neighborhood Id'); ?></th>
		<th><?php echo __('Location Type Id'); ?></th>
		<th><?php echo __('Location Electricity Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Address'); ?></th>
		<th><?php echo __('Contact Name'); ?></th>
		<th><?php echo __('Contact Phone'); ?></th>
		<th><?php echo __('Website'); ?></th>
		<th><?php echo __('Promoting'); ?></th>
		<th><?php echo __('Rain Accommodations'); ?></th>
		<th><?php echo __('Rain Description'); ?></th>
		<th><?php echo __('Electricity'); ?></th>
		<th><?php echo __('Performances Wanted'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['Location'] as $location): ?>
		<tr>
			<td><?php echo $location['id']; ?></td>
			<td><?php echo $location['city_id']; ?></td>
			<td><?php echo $location['user_id']; ?></td>
			<td><?php echo $location['neighborhood_id']; ?></td>
			<td><?php echo $location['location_type_id']; ?></td>
			<td><?php echo $location['location_electricity_id']; ?></td>
			<td><?php echo $location['name']; ?></td>
			<td><?php echo $location['address']; ?></td>
			<td><?php echo $location['contact_name']; ?></td>
			<td><?php echo $location['contact_phone']; ?></td>
			<td><?php echo $location['website']; ?></td>
			<td><?php echo $location['promoting']; ?></td>
			<td><?php echo $location['rain_accommodations']; ?></td>
			<td><?php echo $location['rain_description']; ?></td>
			<td><?php echo $location['electricity']; ?></td>
			<td><?php echo $location['performances_wanted']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'locations', 'action' => 'view', $location['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'locations', 'action' => 'edit', $location['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'locations', 'action' => 'delete', $location['id']), null, __('Are you sure you want to delete # %s?', $location['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Location'), array('controller' => 'locations', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
