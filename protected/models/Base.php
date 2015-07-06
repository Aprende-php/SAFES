<?php

/**
 * This is the model class for table "base".
 *
 * The followings are the available columns in table 'base':
 * @property string $BAS_CORREL
 * @property string $BAS_NOMBRE
 * @property string $BAS_DESCRIPCION
 *
 * The followings are the available model relations:
 * @property Empresa[] $empresas
 * @property Persona[] $personas
 * @property Formulario[] $formularios
 */
class Base extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'base';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('BAS_NOMBRE', 'length', 'max'=>200),
			array('BAS_DESCRIPCION', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('BAS_CORREL, BAS_NOMBRE, BAS_DESCRIPCION', 'safe', 'on'=>'search'),
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
			'empresas' => array(self::MANY_MANY, 'Empresa', 'emp_has_bas(BAS_CORREL, EMP_CORREL)'),
			'personas' => array(self::MANY_MANY, 'Persona', 'evalua(BAS_CORREL, PER_CORREL)'),
			'formularios' => array(self::MANY_MANY, 'Formulario', 'for_has_base(BAS_CORREL, FOR_CORREL)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'BAS_CORREL' => 'Bas Correl',
			'BAS_NOMBRE' => 'Bas Nombre',
			'BAS_DESCRIPCION' => 'Bas Descripcion',
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

		$criteria->compare('BAS_CORREL',$this->BAS_CORREL,true);
		$criteria->compare('BAS_NOMBRE',$this->BAS_NOMBRE,true);
		$criteria->compare('BAS_DESCRIPCION',$this->BAS_DESCRIPCION,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Base the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
