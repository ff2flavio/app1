<div class="atestados form">
<?php echo $this->Form->create('Atestado'); ?>
	<fieldset>
		<legend><?php echo __('Edit Atestado'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('cid');
		echo $this->Form->input('quantidade');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Atestado.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Atestado.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Atestados'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Funcionarios'), array('controller' => 'funcionarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Funcionario'), array('controller' => 'funcionarios', 'action' => 'add')); ?> </li>
	</ul>
</div>
