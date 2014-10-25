<div class="users form">
	<?= $this->Session->flash( 'auth' ) ?>
	<?= $this->Form->create( 'User' ) ?>
	<fieldset>
		<legend><?= _('Please enter your username and password')  ?></legend>
		<?= $this->Form->input('username')  ?>
		<?= $this->Form->input('password')  ?>
	</fieldset>
	<?= $this->Form->end( _('Login') ) ?>
</div>