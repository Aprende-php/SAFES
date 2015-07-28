<?php

/**
 * This is the model class for table "emp_has_act".
 *
 * The followings are the available columns in table 'emp_has_act':
 * @property string $EMP_CORREL
 * @property integer $ACT_CORREL
 */
class EmpHasAct extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'emp_has_act';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('EMP_CORREL, ACT_CORREL', 'required'),
			array('ACT_CORREL', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('EMP_CORREL, ACT_CORREL', 'safe', 'on'=>'search'),
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
			'ActividadEmpresa' => array(self::HAS_ONE, 'Actividad', 'ACT_CORREL'),
			'Actividad' => array(self::HAS_MANY, 'Actividad', 'ACT_CORREL'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'EMP_CORREL' => 'Emp Correl',
			'ACT_CORREL' => 'Act Correl',
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

		$criteria->compare('EMP_CORREL',$this->EMP_CORREL,true);
		$criteria->compare('ACT_CORREL',$this->ACT_CORREL);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return EmpHasAct the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
