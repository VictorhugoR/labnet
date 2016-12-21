<div class="partners index">
	<h3><i><b><?php echo __('Clientes'); ?></b></i></h3>

	<?php echo $this->Html->link(
			$this->Html->image('add2.png', array('alt' => 'Nuevo', 'border' => '1')),
			'add',array('controller' => 'categories', 'action' => 'add', 'escape' => false)
		);
		?>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('code'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('last_name'); ?></th>
			<th><?php echo $this->Paginator->sort('address'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('phone'); ?></th>
			<th><?php echo $this->Paginator->sort('movil'); ?></th>
			<th><?php //echo $this->Paginator->sort('product_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($partners as $partner): ?>
	<tr>
		<td><?php echo h($partner['Partner']['id']); ?>&nbsp;</td>
		<td><?php echo h($partner['Partner']['code']); ?>&nbsp;</td>
		<td><?php echo h($partner['Partner']['name']); ?>&nbsp;</td>
		<td><?php echo h($partner['Partner']['last_name']); ?>&nbsp;</td>
		<td><?php echo h($partner['Partner']['address']); ?>&nbsp;</td>
		<td><?php echo h($partner['Partner']['email']); ?>&nbsp;</td>
		<td><?php echo h($partner['Partner']['phone']); ?>&nbsp;</td>
		<td><?php echo h($partner['Partner']['movil']); ?>&nbsp;</td>
		<td>
			<?php //echo $this->Html->link($partner['Product']['name'], array('controller' => 'products', 'action' => 'view', $partner['Product']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $partner['Partner']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $partner['Partner']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $partner['Partner']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $partner['Partner']['id']))); ?>
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
	<h5><?php echo __('Actions'); ?></h5>
	<ul>
		<li><?php echo $this->Html->link(__('New Partner'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>
