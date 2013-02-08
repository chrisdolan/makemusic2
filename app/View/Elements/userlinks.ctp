<div id="userlinks">
<?php
$user = AuthComponent::user('screenname');

if ($user) {
	echo "Hello, $user ";
	echo $this->Html->link('Logout', array('controller' => 'users', 'action' => 'logout'));
} else {
	echo "Who are you? ";
	echo $this->Html->link('Log In', array('controller' => 'users', 'action' => 'login')) . '&nbsp';
	echo $this->Html->link('Sign Up ', array('controller' => 'users', 'action' => 'register'));
} ?>
</div>