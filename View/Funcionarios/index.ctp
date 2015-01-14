<div class="funcionarios index">
	<h2><?php echo __('Funcionarios'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nome'); ?></th>
			<th><?php echo $this->Paginator->sort('idade'); ?></th>
			<th><?php echo $this->Paginator->sort('endereco'); ?></th>
			<th><?php echo $this->Paginator->sort('cep'); ?></th>
			<th><?php echo $this->Paginator->sort('bairro'); ?></th>
			<th><?php echo $this->Paginator->sort('cidade'); ?></th>
			<th><?php echo $this->Paginator->sort('foto'); ?></th>
			<th><?php echo $this->Paginator->sort('caminho'); ?></th>
			<th><?php echo $this->Paginator->sort('cpf'); ?></th>
			<th><?php echo $this->Paginator->sort('indentidade'); ?></th>
			<th><?php echo $this->Paginator->sort('sexo'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('empresa_id'); ?></th>
			<th><?php echo $this->Paginator->sort('atestado_id'); ?></th>
			<th><?php echo $this->Paginator->sort('cargo_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($funcionarios as $funcionario): ?>
	<tr>
		<td><?php echo h($funcionario['Funcionario']['id']); ?>&nbsp;</td>
		<td><?php echo h($funcionario['Funcionario']['nome']); ?>&nbsp;</td>
		<td><?php echo h($funcionario['Funcionario']['idade']); ?>&nbsp;</td>
		<td><?php echo h($funcionario['Funcionario']['endereco']); ?>&nbsp;</td>
		<td><?php echo h($funcionario['Funcionario']['cep']); ?>&nbsp;</td>
		<td><?php echo h($funcionario['Funcionario']['bairro']); ?>&nbsp;</td>
		<td><?php echo h($funcionario['Funcionario']['cidade']); ?>&nbsp;</td>
		<td><?php echo h($funcionario['Funcionario']['foto']); ?>&nbsp;</td>
		<td><?php echo h($funcionario['Funcionario']['caminho']); ?>&nbsp;</td>
		<td><?php echo h($funcionario['Funcionario']['cpf']); ?>&nbsp;</td>
		<td><?php echo h($funcionario['Funcionario']['indentidade']); ?>&nbsp;</td>
		<td><?php echo h($funcionario['Funcionario']['sexo']); ?>&nbsp;</td>
		<td><?php echo h($funcionario['Funcionario']['created']); ?>&nbsp;</td>
		<td><?php echo h($funcionario['Funcionario']['modified']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($funcionario['Empresa']['id'], array('controller' => 'empresas', 'action' => 'view', $funcionario['Empresa']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($funcionario['Atestado']['id'], array('controller' => 'atestados', 'action' => 'view', $funcionario['Atestado']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($funcionario['Cargo']['id'], array('controller' => 'cargos', 'action' => 'view', $funcionario['Cargo']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $funcionario['Funcionario']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $funcionario['Funcionario']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $funcionario['Funcionario']['id']), array(), __('Are you sure you want to delete # %s?', $funcionario['Funcionario']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Funcionario'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Empresas'), array('controller' => 'empresas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Empresa'), array('controller' => 'empresas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Atestados'), array('controller' => 'atestados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Atestado'), array('controller' => 'atestados', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cargos'), array('controller' => 'cargos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cargo'), array('controller' => 'cargos', 'action' => 'add')); ?> </li>
	</ul>
</div>
