<div class="atestados view">
<h2><?php echo __('Atestado'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($atestado['Atestado']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cid'); ?></dt>
		<dd>
			<?php echo h($atestado['Atestado']['cid']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($atestado['Atestado']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Quantidade'); ?></dt>
		<dd>
			<?php echo h($atestado['Atestado']['quantidade']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Atestado'), array('action' => 'edit', $atestado['Atestado']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Atestado'), array('action' => 'delete', $atestado['Atestado']['id']), array(), __('Are you sure you want to delete # %s?', $atestado['Atestado']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Atestados'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Atestado'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Funcionarios'), array('controller' => 'funcionarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Funcionario'), array('controller' => 'funcionarios', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Funcionarios'); ?></h3>
	<?php if (!empty($atestado['Funcionario'])): ?>
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
	<?php foreach ($atestado['Funcionario'] as $funcionario): ?>
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
