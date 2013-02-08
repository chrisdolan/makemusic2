<div class="cities home">
<h2>Welcome to the Making Music Festival booking site for <?php echo h($city['City']['name']); ?>!</h2>
	
	<dl>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($city['City']['homepage_description']); ?>
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
	</dl>
</div>
