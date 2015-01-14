<div class="funcionarios form">
<?php echo $this->Form->create('Funcionario'); ?>
	<fieldset>
		<legend><?php echo __('Edit Funcionario'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nome');
		echo $this->Form->input('idade');
		echo $this->Form->input('endereco');
		echo $this->Form->input('cep');
		echo $this->Form->input('bairro');
		echo $this->Form->input('cidade');
		echo $this->Form->input('foto');
		echo $this->Form->input('caminho');
		echo $this->Form->input('cpf');
		echo $this->Form->input('indentidade');
		echo $this->Form->input('sexo');
		echo $this->Form->input('empresa_id');
		echo $this->Form->input('atestado_id');
		echo $this->Form->input('cargo_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Funcionario.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Funcionario.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Funcionarios'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Empresas'), array('controller' => 'empresas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Empresa'), array('controller' => 'empresas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Atestados'), array('controller' => 'atestados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Atestado'), array('controller' => 'atestados', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cargos'), array('controller' => 'cargos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cargo'), array('controller' => 'cargos', 'action' => 'add')); ?> </li>
	</ul>
</div>
