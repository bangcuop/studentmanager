<?php
/* @var $this StudentController */
/* @var $data Student */
?>

<div class="view">
    <b><?php echo CHtml::encode($data->getAttributeLabel('studentCode')); ?>:</b>
    <?php echo CHtml::link(CHtml::encode($data->studentCode), array('view', 'id' => $data->studentId)); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('studentName')); ?>:</b>
    <?php echo CHtml::encode($data->studentName); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('className')); ?>:</b>
    <?php echo CHtml::encode($data->class->className); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('adress')); ?>:</b>
    <?php echo CHtml::encode($data->adress); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('birthDay')); ?>:</b>
    <?php echo CHtml::encode($data->birthDay); ?>
    <br />

</div>