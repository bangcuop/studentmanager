<?php

/**
 * This is the model class for table "department".
 *
 * The followings are the available columns in table 'department':
 * @property integer $departmentId
 * @property string $departmentCode
 * @property string $departmentName
 * @property integer $department_check
 * @property integer $department_del
 *
 * The followings are the available model relations:
 * @property Class[] $classes
 */
class Department extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'department';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('department_check, department_del', 'numerical', 'integerOnly'=>true),
			array('departmentCode, departmentName', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('departmentId, departmentCode, departmentName, department_check, department_del', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'classes' => array(self::HAS_MANY, 'Class', 'departmentId'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'departmentId' => 'Department',
			'departmentCode' => 'Department Code',
			'departmentName' => 'Department Name',
			'department_check' => 'Department Check',
			'department_del' => 'Department Del',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('departmentId',$this->departmentId);
		$criteria->compare('departmentCode',$this->departmentCode,true);
		$criteria->compare('departmentName',$this->departmentName,true);
		$criteria->compare('department_check',$this->department_check);
		$criteria->compare('department_del',0);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        
       

        /**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Department the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
