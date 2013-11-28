<?php
/* @var $this DepartmentController */
/* @var $model Department */

$this->breadcrumbs=array(
	'Departments'=>array('index'),
	$model->departmentId=>array('view','id'=>$model->departmentId),
	'Update',
);

$this->menu=array(
	array('label'=>'Danh sách khoa', 'url'=>array('index')),
	array('label'=>'Tạo khoa', 'url'=>array('create')),
	array('label'=>'Xem khoa', 'url'=>array('view', 'id'=>$model->departmentId)),
	array('label'=>'Quản lý khoa', 'url'=>array('admin')),
);
?>

<h1>Update Department <?php echo $model->departmentId; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>