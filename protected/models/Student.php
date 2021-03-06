<?php

/**
 * This is the model class for table "student".
 *
 * The followings are the available columns in table 'student':
 * @property integer $studentId
 * @property string $studentCode
 * @property string $studentName
 * @property integer $classId
 * @property string $adress
 * @property string $birthDay
 * @property integer $student_check
 * @property integer $student_del
 *
 * The followings are the available model relations:
 * @property Classroom $class
 * @property SubjectStudent[] $subjectStudents
 */
class Student extends CActiveRecord {

    public $className;

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'student';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('studentId', 'required'),
            array('studentId, classId, student_check, student_del', 'numerical', 'integerOnly' => true),
            array('studentCode, studentName, adress, birthDay', 'length', 'max' => 45),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('studentId, studentCode, studentName, class.className, adress, birthDay, student_check, student_del', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'class' => array(self::BELONGS_TO, 'Classroom', 'classId'),
            'subjectStudents' => array(self::HAS_MANY, 'SubjectStudent', 'studentId'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'studentId' => 'Student',
            'studentCode' => 'Student Code',
            'studentName' => 'Student Name',
            'className' => 'Class Name',
            'adress' => 'Adress',
            'birthDay' => 'Birth Day',
            'student_check' => 'Student Check',
            'student_del' => 'Student Del',
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
    public function search() {
        // @todo Please modify the following code to remove attributes that should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('studentId', $this->studentId);
        $criteria->compare('studentCode', $this->studentCode, true);
        $criteria->compare('studentName', $this->studentName, true);
        $criteria->compare('className', $this->className);
        $criteria->compare('adress', $this->adress, true);
        $criteria->compare('birthDay', $this->birthDay, true);
        $criteria->compare('student_check', $this->student_check);
        $criteria->compare('student_del', $this->student_del);

        return new CActiveDataProvider($this, array(
                    'criteria' => $criteria,
                ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Student the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
