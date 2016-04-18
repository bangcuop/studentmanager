<?php
/* @var $this StudentController */
/* @var $model Student */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'student-form',
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
        <?php echo $form->labelEx($model, 'studentCode'); ?>
        <?php echo $form->textField($model, 'studentCode', array('size' => 45, 'maxlength' => 45)); ?>
        <?php echo $form->error($model, 'studentCode'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'studentName'); ?>
        <?php echo $form->textField($model, 'studentName', array('size' => 45, 'maxlength' => 45)); ?>
        <?php echo $form->error($model, 'studentName'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'classId'); ?>
        <?php $list = CHtml::listData(Classroom::model()->findAll(), 'classId', 'className'); ?>
        <?php echo $form->dropDownList($model, 'classId', $list, array('empty' => '(Select a Class)')); ?>
        <?php echo $form->error($model, 'classId'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'adress'); ?>
        <?php echo $form->textField($model, 'adress', array('size' => 45, 'maxlength' => 45)); ?>
        <?php echo $form->error($model, 'adress'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'birthDay'); ?>
        <?php echo $form->textField($model, 'birthDay', array('size' => 45, 'maxlength' => 45)); ?>
        <?php echo $form->error($model, 'birthDay'); ?>
    </div>
    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->