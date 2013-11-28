<?php
/* @var $this DepartmentController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Departments',
);

$this->menu=array(
	array('label'=>'Tạo khoa', 'url'=>array('create')),
	array('label'=>'Quản lý khoa', 'url'=>array('admin')),
);
?>

<h1>Departments</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
