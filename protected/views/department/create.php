<?php
/* @var $this DepartmentController */
/* @var $model Department */

$this->breadcrumbs=array(
	'Departments'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Danh sách khoa', 'url'=>array('index')),
	array('label'=>'Quản lý khoa', 'url'=>array('admin')),
);
?>

<h1>Create Department</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>