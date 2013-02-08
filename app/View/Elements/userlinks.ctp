<div id="userlinks">
<?php
$user = AuthComponent::user('screenname');

if ($user) {
	echo "Hello, $user";
	echo $this->Html->link('Logout', array('controller' => 'users', 'action' => 'logout'));

} else { ?>

Who are you?
<?php echo $this->Html->link('Log In', array('controller' => 'users', 'action' => 'login')); ?>

<?php } ?>
</div>