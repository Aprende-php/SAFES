<?php

/**
 * This is the model class for table "controller".
 *
 * The followings are the available columns in table 'controller':
 * @property string $CON_CORREL
 * @property string $CON_NOMBRE
 * @property string $CON_FICTICIO
 *
 * The followings are the available model relations:
 * @property Action[] $actions
 */
class Controllers extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'controller';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('CON_NOMBRE, CON_FICTICIO', 'required'),
			array('CON_NOMBRE, CON_FICTICIO', 'length', 'max'=>200),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('CON_CORREL, CON_NOMBRE, CON_FICTICIO', 'safe', 'on'=>'search'),
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
			'actions' => array(self::HAS_MANY, 'Action', 'CON_CORREL'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'CON_CORREL' => 'Controlador',
			'CON_NOMBRE' => 'Nombre Modulo',
			'CON_FICTICIO' => 'Nombre Sistema',
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

		$criteria->compare('CON_CORREL',$this->CON_CORREL,true);
		$criteria->compare('CON_NOMBRE',$this->CON_NOMBRE,true);
		$criteria->compare('CON_FICTICIO',$this->CON_FICTICIO,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Controller the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
