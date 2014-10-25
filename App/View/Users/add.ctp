<div class="users form">
<?=$this->Form->create('User')?>
	<fieldset>
		<legend><?= _('Add User') ?></legend>
		<?= $this->Form->input('username') ?>
		<?= $this->Form->input('password') ?>
		<?= $this->Form->input('role',
		[
			'options' => ['admin' => 'Admin','author' => 'Author']
		]) ?>
	</fieldset>
	<?= $this->Form->end( _('Submit') ) ?>
</div>