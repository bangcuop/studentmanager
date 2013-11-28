<?php
/* @var $this DepartmentController */
/* @var $data Department */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('departmentCode')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->departmentCode), array('view', 'id'=>$data->departmentId)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('departmentName')); ?>:</b>
	<?php echo CHtml::encode($data->departmentName); ?>
	<br />
</div>