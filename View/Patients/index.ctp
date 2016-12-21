<div class="patients index">

	<h3><i><b><?php echo __('Pacientes'); ?></b></i></h3>

	<?php echo $this->Html->link(
			$this->Html->image('add2.png', array('alt' => 'Nuevo', 'border' => '1')),
			'add',array('controller' => 'patients', 'action' => 'add', 'escape' => false)
		);
		?>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('code'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('last_name'); ?></th>
			<th><?php echo $this->Paginator->sort('edad'); ?></th>
			<th><?php echo $this->Paginator->sort('address'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('phone'); ?></th>
			<th><?php echo $this->Paginator->sort('movil'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($patients as $patient): ?>
	<tr>
		<td><?php echo h($patient['Patient']['id']); ?>&nbsp;</td>
		<td><?php echo h($patient['Patient']['code']); ?>&nbsp;</td>
		<td><?php echo h($patient['Patient']['name']); ?>&nbsp;</td>
		<td><?php echo h($patient['Patient']['last_name']); ?>&nbsp;</td>
		<td><?php echo h($patient['Patient']['edad']); ?>&nbsp;</td>
		<td><?php echo h($patient['Patient']['address']); ?>&nbsp;</td>
		<td><?php echo h($patient['Patient']['email']); ?>&nbsp;</td>
		<td><?php echo h($patient['Patient']['phone']); ?>&nbsp;</td>
		<td><?php echo h($patient['Patient']['movil']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $patient['Patient']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $patient['Patient']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $patient['Patient']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $patient['Patient']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Patient'), array('action' => 'add')); ?></li>
	</ul>
</div>
