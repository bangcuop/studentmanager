<?php
/* @var $this ClassroomController */
/* @var $model Classroom */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'classroom-form',
        // Please note: When you enable ajax validation, make sure the corresponding
        // controller action is handling ajax validation correctly.
        // There is a call to performAjaxValidation() commented in generated controller code.
        // See class documentation of CActiveForm for details on this.
        'enableAjaxValidation' => false,
            ));
    ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>

    <div class="row">
        <?php echo $form->labelEx($model, 'classCode'); ?>
        <?php echo $form->textField($model, 'classCode', array('size' => 45, 'maxlength' => 45)); ?>
        <?php echo $form->error($model, 'classCode'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'className'); ?>
        <?php echo $form->textField($model, 'className', array('size' => 45, 'maxlength' => 45)); ?>
        <?php echo $form->error($model, 'className'); ?>
    </div>
    <div class="row">
        <?php echo $form->labelEx($model, 'departmentId'); ?>
        <?php $list = CHtml::listData(Department::model()->findAll(), 'departmentId', 'departmentName'); ?>
        <?php echo $form->dropDownList($model, 'departmentId', $list, array('empty' => '(Select a Department)')); ?>
        <?php echo $form->error($model, 'departmentId'); ?>
    </div>
    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->