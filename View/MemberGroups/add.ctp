<?=$this->Actions->memberGroups_add()?>
<?=$this->ContentBar->memberGroups($memberGroups)?>
<div class="memberGroups form right">
<?php echo $this->Form->create('Group',  array( 'url' => array('controller' => 'member_groups', 'action' => 'add')));?>
	<fieldset>
		<legend><?php echo __('Add Member Group'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('description');
		echo $this->Form->error('profile_layout_id');
		echo $this->Form->select('profile_layout_id', $profiles);
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>