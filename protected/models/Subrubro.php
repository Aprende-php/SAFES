<?php

/**
 * This is the model class for table "subrubro".
 *
 * The followings are the available columns in table 'subrubro':
 * @property integer $SUB_CORREL
 * @property string $SUB_NOMBRE
 * @property integer $RUB_CORREL
 */
class Subrubro extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'subrubro';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('SUB_NOMBRE, RUB_CORREL', 'required'),
			array('RUB_CORREL', 'numerical', 'integerOnly'=>true),
			array('SUB_NOMBRE', 'length', 'max'=>150),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('SUB_CORREL, SUB_NOMBRE, RUB_CORREL', 'safe', 'on'=>'search'),
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
			'ACTIVIDAD' => array(self::HAS_MANY, 'ACTIVIDAD', 'SUB_CORREL'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'SUB_CORREL' => 'Sub Correl',
			'SUB_NOMBRE' => 'Sub Nombre',
			'RUB_CORREL' => 'Rub Correl',
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

		$criteria->compare('SUB_CORREL',$this->SUB_CORREL);
		$criteria->compare('SUB_NOMBRE',$this->SUB_NOMBRE,true);
		$criteria->compare('RUB_CORREL',$this->RUB_CORREL);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Subrubro the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
