<div class="funcionarios view">
<h2><?php echo __('Funcionario'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($funcionario['Funcionario']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($funcionario['Funcionario']['nome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Idade'); ?></dt>
		<dd>
			<?php echo h($funcionario['Funcionario']['idade']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Endereco'); ?></dt>
		<dd>
			<?php echo h($funcionario['Funcionario']['endereco']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cep'); ?></dt>
		<dd>
			<?php echo h($funcionario['Funcionario']['cep']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bairro'); ?></dt>
		<dd>
			<?php echo h($funcionario['Funcionario']['bairro']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cidade'); ?></dt>
		<dd>
			<?php echo h($funcionario['Funcionario']['cidade']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Foto'); ?></dt>
		<dd>
			<?php echo h($funcionario['Funcionario']['foto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Caminho'); ?></dt>
		<dd>
			<?php echo h($funcionario['Funcionario']['caminho']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cpf'); ?></dt>
		<dd>
			<?php echo h($funcionario['Funcionario']['cpf']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Indentidade'); ?></dt>
		<dd>
			<?php echo h($funcionario['Funcionario']['indentidade']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sexo'); ?></dt>
		<dd>
			<?php echo h($funcionario['Funcionario']['sexo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($funcionario['Funcionario']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($funcionario['Funcionario']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Empresa'); ?></dt>
		<dd>
			<?php echo $this->Html->link($funcionario['Empresa']['id'], array('controller' => 'empresas', 'action' => 'view', $funcionario['Empresa']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Atestado'); ?></dt>
		<dd>
			<?php echo $this->Html->link($funcionario['Atestado']['id'], array('controller' => 'atestados', 'action' => 'view', $funcionario['Atestado']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cargo'); ?></dt>
		<dd>
			<?php echo $this->Html->link($funcionario['Cargo']['id'], array('controller' => 'cargos', 'action' => 'view', $funcionario['Cargo']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Funcionario'), array('action' => 'edit', $funcionario['Funcionario']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Funcionario'), array('action' => 'delete', $funcionario['Funcionario']['id']), array(), __('Are you sure you want to delete # %s?', $funcionario['Funcionario']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Funcionarios'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Funcionario'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Empresas'), array('controller' => 'empresas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Empresa'), array('controller' => 'empresas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Atestados'), array('controller' => 'atestados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Atestado'), array('controller' => 'atestados', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cargos'), array('controller' => 'cargos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cargo'), array('controller' => 'cargos', 'action' => 'add')); ?> </li>
	</ul>
</div>
