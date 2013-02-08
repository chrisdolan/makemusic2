<div class="cities view">
<h2><?php  echo __('City'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($city['City']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($city['City']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hostname'); ?></dt>
		<dd>
			<?php echo h($city['City']['hostname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Facebook Url'); ?></dt>
		<dd>
			<?php echo h($city['City']['facebook_url']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Twitter Url'); ?></dt>
		<dd>
			<?php echo h($city['City']['twitter_url']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Instagram Url'); ?></dt>
		<dd>
			<?php echo h($city['City']['instagram_url']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Youtube Url'); ?></dt>
		<dd>
			<?php echo h($city['City']['youtube_url']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Flickr Url'); ?></dt>
		<dd>
			<?php echo h($city['City']['flickr_url']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Official Url'); ?></dt>
		<dd>
			<?php echo h($city['City']['official_url']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Performance Cutoff'); ?></dt>
		<dd>
			<?php echo h($city['City']['performance_cutoff']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Homepage Description'); ?></dt>
		<dd>
			<?php echo h($city['City']['homepage_description']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit City'), array('action' => 'edit', $city['City']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete City'), array('action' => 'delete', $city['City']['id']), null, __('Are you sure you want to delete # %s?', $city['City']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Cities'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New City'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related City Extdata'); ?></h3>
	<?php if (!empty($city['CityExtdatum'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('City Id'); ?></th>
		<th><?php echo __('Key'); ?></th>
		<th><?php echo __('Val'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($city['CityExtdatum'] as $cityExtdatum): ?>
		<tr>
			<td><?php echo $cityExtdatum['id']; ?></td>
			<td><?php echo $cityExtdatum['city_id']; ?></td>
			<td><?php echo $cityExtdatum['key']; ?></td>
			<td><?php echo $cityExtdatum['val']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'city_extdata', 'action' => 'view', $cityExtdatum['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'city_extdata', 'action' => 'edit', $cityExtdatum['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'city_extdata', 'action' => 'delete', $cityExtdatum['id']), null, __('Are you sure you want to delete # %s?', $cityExtdatum['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New City Extdatum'), array('controller' => 'city_extdata', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related City Hours'); ?></h3>
	<?php if (!empty($city['CityHour'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('City Id'); ?></th>
		<th><?php echo __('Start Time'); ?></th>
		<th><?php echo __('End Time'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($city['CityHour'] as $cityHour): ?>
		<tr>
			<td><?php echo $cityHour['id']; ?></td>
			<td><?php echo $cityHour['city_id']; ?></td>
			<td><?php echo $cityHour['start_time']; ?></td>
			<td><?php echo $cityHour['end_time']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'city_hours', 'action' => 'view', $cityHour['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'city_hours', 'action' => 'edit', $cityHour['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'city_hours', 'action' => 'delete', $cityHour['id']), null, __('Are you sure you want to delete # %s?', $cityHour['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New City Hour'), array('controller' => 'city_hours', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Districts'); ?></h3>
	<?php if (!empty($city['District'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('City Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($city['District'] as $district): ?>
		<tr>
			<td><?php echo $district['id']; ?></td>
			<td><?php echo $district['city_id']; ?></td>
			<td><?php echo $district['name']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'districts', 'action' => 'view', $district['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'districts', 'action' => 'edit', $district['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'districts', 'action' => 'delete', $district['id']), null, __('Are you sure you want to delete # %s?', $district['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New District'), array('controller' => 'districts', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Locations'); ?></h3>
	<?php if (!empty($city['Location'])): ?>
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
		foreach ($city['Location'] as $location): ?>
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
<div class="related">
	<h3><?php echo __('Related Users'); ?></h3>
	<?php if (!empty($city['User'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('City Id'); ?></th>
		<th><?php echo __('Username'); ?></th>
		<th><?php echo __('Password'); ?></th>
		<th><?php echo __('Is City Admin'); ?></th>
		<th><?php echo __('Screenname'); ?></th>
		<th><?php echo __('Address'); ?></th>
		<th><?php echo __('Phone'); ?></th>
		<th><?php echo __('Contact Preference'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($city['User'] as $user): ?>
		<tr>
			<td><?php echo $user['id']; ?></td>
			<td><?php echo $user['city_id']; ?></td>
			<td><?php echo $user['username']; ?></td>
			<td><?php echo $user['password']; ?></td>
			<td><?php echo $user['is_city_admin']; ?></td>
			<td><?php echo $user['screenname']; ?></td>
			<td><?php echo $user['address']; ?></td>
			<td><?php echo $user['phone']; ?></td>
			<td><?php echo $user['contact_preference']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'users', 'action' => 'view', $user['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'users', 'action' => 'edit', $user['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'users', 'action' => 'delete', $user['id']), null, __('Are you sure you want to delete # %s?', $user['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
