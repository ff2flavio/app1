<div class="funcionarios form">
<?php echo $this->Form->create('Funcionario'); ?>
	<fieldset>
		<legend><?php echo __('Adicionando novo Funcionario'); ?></legend>
	<?php
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
<?php echo $this->Form->end(__('Enviar')); ?>
</div>
<div class="actions">
	<h3><?php echo __(' Opções'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Listar Funcionarios'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Empresas'), array('controller' => 'empresas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nova Empresa'), array('controller' => 'empresas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Atestados'), array('controller' => 'atestados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Novo Atestado'), array('controller' => 'atestados', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Cargos'), array('controller' => 'cargos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Novo Cargo'), array('controller' => 'cargos', 'action' => 'add')); ?> </li>
	</ul>
</div>
