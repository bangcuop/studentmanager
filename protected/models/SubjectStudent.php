<?php

/**
 * This is the model class for table "subject_student".
 *
 * The followings are the available columns in table 'subject_student':
 * @property integer $subjectId
 * @property integer $studentId
 * @property integer $subject_studentId
 *
 * The followings are the available model relations:
 * @property Result[] $results
 * @property Student $student
 * @property Subject $subject
 */
class SubjectStudent extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'subject_student';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('subjectId, studentId, subject_studentId', 'required'),
			array('subjectId, studentId, subject_studentId', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('subjectId, studentId, subject_studentId', 'safe', 'on'=>'search'),
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
			'results' => array(self::HAS_MANY, 'Result', 'subject_studentId'),
			'student' => array(self::BELONGS_TO, 'Student', 'studentId'),
			'subject' => array(self::BELONGS_TO, 'Subject', 'subjectId'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'subjectId' => 'Subject',
			'studentId' => 'Student',
			'subject_studentId' => 'Subject Student',
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

		$criteria->compare('subjectId',$this->subjectId);
		$criteria->compare('studentId',$this->studentId);
		$criteria->compare('subject_studentId',$this->subject_studentId);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return SubjectStudent the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
