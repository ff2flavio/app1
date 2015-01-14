<div class="cargos view">
<h2><?php echo __('Cargo'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($cargo['Cargo']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($cargo['Cargo']['nome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tempo De Funcao'); ?></dt>
		<dd>
			<?php echo h($cargo['Cargo']['tempo_de_funcao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($cargo['Cargo']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($cargo['Cargo']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Empresa'); ?></dt>
		<dd>
			<?php echo $this->Html->link($cargo['Empresa']['id'], array('controller' => 'empresas', 'action' => 'view', $cargo['Empresa']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Cargo'), array('action' => 'edit', $cargo['Cargo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Cargo'), array('action' => 'delete', $cargo['Cargo']['id']), array(), __('Are you sure you want to delete # %s?', $cargo['Cargo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Cargos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cargo'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Empresas'), array('controller' => 'empresas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Empresa'), array('controller' => 'empresas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Funcionarios'), array('controller' => 'funcionarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Funcionario'), array('controller' => 'funcionarios', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Funcionarios'); ?></h3>
	<?php if (!empty($cargo['Funcionario'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nome'); ?></th>
		<th><?php echo __('Idade'); ?></th>
		<th><?php echo __('Endereco'); ?></th>
		<th><?php echo __('Cep'); ?></th>
		<th><?php echo __('Bairro'); ?></th>
		<th><?php echo __('Cidade'); ?></th>
		<th><?php echo __('Foto'); ?></th>
		<th><?php echo __('Caminho'); ?></th>
		<th><?php echo __('Cpf'); ?></th>
		<th><?php echo __('Indentidade'); ?></th>
		<th><?php echo __('Sexo'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Empresa Id'); ?></th>
		<th><?php echo __('Atestado Id'); ?></th>
		<th><?php echo __('Cargo Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($cargo['Funcionario'] as $funcionario): ?>
		<tr>
			<td><?php echo $funcionario['id']; ?></td>
			<td><?php echo $funcionario['nome']; ?></td>
			<td><?php echo $funcionario['idade']; ?></td>
			<td><?php echo $funcionario['endereco']; ?></td>
			<td><?php echo $funcionario['cep']; ?></td>
			<td><?php echo $funcionario['bairro']; ?></td>
			<td><?php echo $funcionario['cidade']; ?></td>
			<td><?php echo $funcionario['foto']; ?></td>
			<td><?php echo $funcionario['caminho']; ?></td>
			<td><?php echo $funcionario['cpf']; ?></td>
			<td><?php echo $funcionario['indentidade']; ?></td>
			<td><?php echo $funcionario['sexo']; ?></td>
			<td><?php echo $funcionario['created']; ?></td>
			<td><?php echo $funcionario['modified']; ?></td>
			<td><?php echo $funcionario['empresa_id']; ?></td>
			<td><?php echo $funcionario['atestado_id']; ?></td>
			<td><?php echo $funcionario['cargo_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'funcionarios', 'action' => 'view', $funcionario['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'funcionarios', 'action' => 'edit', $funcionario['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'funcionarios', 'action' => 'delete', $funcionario['id']), array(), __('Are you sure you want to delete # %s?', $funcionario['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Funcionario'), array('controller' => 'funcionarios', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
