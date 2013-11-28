<?php

/**
 * This is the model class for table "result".
 *
 * The followings are the available columns in table 'result':
 * @property integer $resultId
 * @property integer $subject_studentId
 * @property integer $point
 * @property integer $executionTime
 *
 * The followings are the available model relations:
 * @property SubjectStudent $subjectStudent
 */
class Result extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'result';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('resultId', 'required'),
			array('resultId, subject_studentId, point, executionTime', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('resultId, subject_studentId, point, executionTime', 'safe', 'on'=>'search'),
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
			'subjectStudent' => array(self::BELONGS_TO, 'SubjectStudent', 'subject_studentId'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'resultId' => 'Result',
			'subject_studentId' => 'Subject Student',
			'point' => 'Point',
			'executionTime' => 'Execution Time',
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

		$criteria->compare('resultId',$this->resultId);
		$criteria->compare('subject_studentId',$this->subject_studentId);
		$criteria->compare('point',$this->point);
		$criteria->compare('executionTime',$this->executionTime);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Result the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
