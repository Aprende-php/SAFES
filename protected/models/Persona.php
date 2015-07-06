<?php

/**
 * This is the model class for table "persona".
 *
 * The followings are the available columns in table 'persona':
 * @property string $PER_CORREL
 * @property string $EMP_CORREL
 * @property string $COM_CORREL
 * @property string $PER_NOMBRE
 * @property string $PER_PATERNO
 * @property string $PER_MATERNO
 * @property string $PER_CARGO
 * @property string $PER_TIPO
 * @property string $PER_NIVEL
 * @property string $PER_EMAIL
 * @property string $PER_RUT
 *
 * The followings are the available model relations:
 * @property Base[] $bases
 * @property ItemPropuesta[] $itemPropuestas
 * @property Empresa $eMPCORREL
 * @property Comuna $cOMCORREL
 * @property Propuesta[] $propuestas
 * @property Propuesta[] $propuestas1
 * @property Proyecto[] $proyectos
 * @property Usuario $usuario
 */
class Persona extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'persona';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('COM_CORREL', 'required'),
			array('EMP_CORREL, COM_CORREL', 'length', 'max'=>10),
			array('PER_NOMBRE, PER_PATERNO, PER_MATERNO, PER_CARGO, PER_TIPO, PER_NIVEL, PER_EMAIL', 'length', 'max'=>200),
			array('PER_RUT', 'length', 'max'=>12),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('PER_CORREL, EMP_CORREL, COM_CORREL, PER_NOMBRE, PER_PATERNO, PER_MATERNO, PER_CARGO, PER_TIPO, PER_NIVEL, PER_EMAIL, PER_RUT', 'safe', 'on'=>'search'),
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
			'bases' => array(self::MANY_MANY, 'Base', 'evalua(PER_CORREL, BAS_CORREL)'),
			'itemPropuestas' => array(self::HAS_MANY, 'ItemPropuesta', 'PER_CORREL'),
			'eMPCORREL' => array(self::BELONGS_TO, 'Empresa', 'EMP_CORREL'),
			'cOMCORREL' => array(self::BELONGS_TO, 'Comuna', 'COM_CORREL'),
			'propuestas' => array(self::HAS_MANY, 'Propuesta', 'PER_PER_CORREL'),
			'propuestas1' => array(self::HAS_MANY, 'Propuesta', 'PER_CORREL'),
			'proyectos' => array(self::HAS_MANY, 'Proyecto', 'PER_CORREL'),
			'usuario' => array(self::HAS_ONE, 'Usuario', 'PER_CORREL'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'PER_CORREL' => 'Per Correl',
			'EMP_CORREL' => 'Emp Correl',
			'COM_CORREL' => 'Com Correl',
			'PER_NOMBRE' => 'Per Nombre',
			'PER_PATERNO' => 'Per Paterno',
			'PER_MATERNO' => 'Per Materno',
			'PER_CARGO' => 'Per Cargo',
			'PER_TIPO' => 'Per Tipo',
			'PER_NIVEL' => 'Per Nivel',
			'PER_EMAIL' => 'Per Email',
			'PER_RUT' => 'Per Rut',
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

		$criteria->compare('PER_CORREL',$this->PER_CORREL,true);
		$criteria->compare('EMP_CORREL',$this->EMP_CORREL,true);
		$criteria->compare('COM_CORREL',$this->COM_CORREL,true);
		$criteria->compare('PER_NOMBRE',$this->PER_NOMBRE,true);
		$criteria->compare('PER_PATERNO',$this->PER_PATERNO,true);
		$criteria->compare('PER_MATERNO',$this->PER_MATERNO,true);
		$criteria->compare('PER_CARGO',$this->PER_CARGO,true);
		$criteria->compare('PER_TIPO',$this->PER_TIPO,true);
		$criteria->compare('PER_NIVEL',$this->PER_NIVEL,true);
		$criteria->compare('PER_EMAIL',$this->PER_EMAIL,true);
		$criteria->compare('PER_RUT',$this->PER_RUT,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Persona the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
