<?= $this->Html->link('user add',['action'=>'add'])  ?>
<ul>
<?php foreach ($users as $user): ?>
	<li><?= $user['User']['username'] ?><br>
		<?= $user['User']['password'] ?><br>
		<?= $user['User']['role'] ?>
	</li>
<?php endforeach ?>
</ul>