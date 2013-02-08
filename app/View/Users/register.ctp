<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend>Sign up for Making Music Festival</legend>
	<?php
		if (isset($taken)) {
			echo $this->Html->link('Forgot your password?', array('controller' => 'users', 'action' => 'forgot'));
		}

		echo $this->Form->input('username', array('label' => 'Email address'));
		echo $this->Form->input('password');
		echo $this->Form->input('screenname');
		echo $this->Form->input('address');
		echo $this->Form->input('phone');
		echo $this->Form->input('contact_preference', array('label' => 'Receive email notifications for activity on your account?'));
	?>
	</fieldset>

<?php echo $this->Form->end(__('Submit')); ?>
</div>