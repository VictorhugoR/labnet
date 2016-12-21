<div class="patients form">
<?php echo $this->Form->create('Patient'); ?>
	<fieldset>
		<legend><?php echo __('Add Patient'); ?></legend>
	<?php
		echo $this->Form->input('code');
		echo $this->Form->input('name');
		echo $this->Form->input('last_name');
		echo $this->Form->input('edad');
		echo $this->Form->input('address');
		echo $this->Form->input('email');
		echo $this->Form->input('phone');
		echo $this->Form->input('movil');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Patients'), array('action' => 'index')); ?></li>
	</ul>
</div>
