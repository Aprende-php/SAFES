<?php

/**
 * This is the model class for table "formulario".
 *
 * The followings are the available columns in table 'formulario':
 * @property string $FOR_CORREL
 * @property string $PRO_CORREL
 * @property string $FOR_NOMBRE
 * @property string $FOR_DESCRIPCION
 * @property string $FOR_PONDERACION
 * @property string $FOR_DETALLE
 *
 * The followings are the available model relations:
 * @property FDocumentos[] $fDocumentoses
 * @property Base[] $bases
 * @property Proyecto $pROCORREL
 */
class Formulario extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'formulario';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('PRO_CORREL', 'required'),
			array('PRO_CORREL', 'length', 'max'=>10),
			array('FOR_NOMBRE', 'length', 'max'=>200),
			array('FOR_PONDERACION', 'length', 'max'=>6),
			array('FOR_DESCRIPCION, FOR_DETALLE', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('FOR_CORREL, PRO_CORREL, FOR_NOMBRE, FOR_DESCRIPCION, FOR_PONDERACION, FOR_DETALLE', 'safe', 'on'=>'search'),
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
			'fDocumentoses' => array(self::HAS_MANY, 'FDocumentos', 'FOR_CORREL'),
			'bases' => array(self::MANY_MANY, 'Base', 'for_has_base(FOR_CORREL, BAS_CORREL)'),
			'pROCORREL' => array(self::BELONGS_TO, 'Proyecto', 'PRO_CORREL'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'FOR_CORREL' => 'For Correl',
			'PRO_CORREL' => 'Pro Correl',
			'FOR_NOMBRE' => 'For Nombre',
			'FOR_DESCRIPCION' => 'For Descripcion',
			'FOR_PONDERACION' => 'For Ponderacion',
			'FOR_DETALLE' => 'For Detalle',
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

		$criteria->compare('FOR_CORREL',$this->FOR_CORREL,true);
		$criteria->compare('PRO_CORREL',$this->PRO_CORREL,true);
		$criteria->compare('FOR_NOMBRE',$this->FOR_NOMBRE,true);
		$criteria->compare('FOR_DESCRIPCION',$this->FOR_DESCRIPCION,true);
		$criteria->compare('FOR_PONDERACION',$this->FOR_PONDERACION,true);
		$criteria->compare('FOR_DETALLE',$this->FOR_DETALLE,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Formulario the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
