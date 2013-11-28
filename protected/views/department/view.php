<?php
/* @var $this DepartmentController */
/* @var $model Department */

$this->breadcrumbs=array(
	'Departments'=>array('index'),
	$model->departmentId,
);

$this->menu=array(
	array('label'=>'Danh sách khoa', 'url'=>array('index')),
	array('label'=>'Tạo khoa', 'url'=>array('create')),
	array('label'=>'Chỉnh sửa khoa', 'url'=>array('update', 'id'=>$model->departmentId)),
	array('label'=>'Xóa khoa', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->departmentId),'confirm'=>'Bạn có chắc muốn xóa?')),
	array('label'=>'Quản lý khoa', 'url'=>array('admin')),
);
?>
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'departmentCode',
		'departmentName',
	),
)); ?>
