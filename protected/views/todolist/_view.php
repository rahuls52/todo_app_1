<?php
/* @var $this TodolistController */
/* @var $data Todolist */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('N')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->N), array('view', 'id'=>$data->N)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Task')); ?>:</b>
	<?php echo CHtml::encode($data->Task); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Action')); ?>:</b>
	<?php echo CHtml::encode($data->Action); ?>
	<br />


</div>