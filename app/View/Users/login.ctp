<div class="users login">

<?php //echo $this->Session->flash('auth'); ?>
<?php echo $this->Form->create('User');?>
<fieldset>
<legend><?php echo __('Login'); ?></legend>
<?php
echo $this->Form->input('username', array('label' => 'Email address'));
echo $this->Form->input('password');
?>
</fieldset>
<?php echo $this->Form->end(__('Login'));?>
</div>