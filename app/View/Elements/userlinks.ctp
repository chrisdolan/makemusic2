<div id="userlinks">
<?php
$user = AuthComponent::user();
if ($user) {
?>

You are logged in!
<?php echo $this->Html->link('Logout', array('controller' => 'users', 'action' => 'logout')); ?>

<?php } else { ?>

Who are you?
<?php echo $this->Html->link('Log In', array('controller' => 'users', 'action' => 'login')); ?>

<?php } ?>
</div>