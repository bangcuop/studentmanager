<?php

/**
 * This is the model class for table "classroom".
 *
 * The followings are the available columns in table 'classroom':
 * @property integer $classId
 * @property string $classCode
 * @property string $className
 * @property integer $departmentId
 * @property integer $class_check
 * @property integer $class_del
 *
 * The followings are the available model relations:
 * @property Department $department
 * @property Student[] $students
 */
class Classroom extends CActiveRecord {

    public $departmentName;

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'classroom';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('departmentId', 'required'),
            array('classCode', 'required'),
            array('className', 'required'),
            array('classId, departmentId, class_check, class_del', 'numerical', 'integerOnly' => true),
            array('classCode, className', 'length', 'max' => 45),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('classCode, className, departmentName', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'department' => array(self::BELONGS_TO, 'Department', 'departmentId'),
            'students' => array(self::HAS_MANY, 'Student', 'classId'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'classId' => 'Class',
            'classCode' => 'Class Code',
            'className' => 'Class Name',
            'departmentName' => 'Department Name',
            'class_check' => 'Class Check',
            'class_del' => 'Class Del',
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
        $criteria->join = 'INNER JOIN department d ON d.departmentId=t.departmentId';
        $criteria->compare('t.classId', $this->classId);
        $criteria->compare('t.classCode', $this->classCode, true);
        $criteria->compare('t.className', $this->className, true);
        $criteria->compare('d.departmentName', $this->departmentName,true);
        return new CActiveDataProvider($this, array(
                    'criteria' => $criteria,
                ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Classroom the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
