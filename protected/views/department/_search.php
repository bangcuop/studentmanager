<?php
/* @var $this DepartmentController */
/* @var $model Department */
/* @var $form CActiveForm */
?>

<div class="wide form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'action' => Yii::app()->createUrl($this->route),
        'method' => 'get',
            ));
    ?>
    <div class="row">
        <?php echo $form->label($model, 'departmentCode'); ?>
        <?php echo $form->textField($model, 'departmentCode', array('size' => 45, 'maxlength' => 45)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model, 'departmentName'); ?>
        <?php echo $form->textField($model, 'departmentName', array('size' => 45, 'maxlength' => 45)); ?>
    </div>
    <div class="row buttons">
        <?php echo CHtml::submitButton('Search'); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- search-form -->