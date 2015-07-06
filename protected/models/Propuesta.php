<?php

/**
 * This is the model class for table "propuesta".
 *
 * The followings are the available columns in table 'propuesta':
 * @property string $PROP_CORREL
 * @property string $PRO_CORREL
 * @property string $PER_CORREL
 * @property string $E_PRO_CORREL
 * @property string $EMP_CORREL
 * @property string $PER_PER_CORREL
 * @property string $FECHA_INICIO
 * @property string $FECHA_REVISADO
 * @property string $FECHA_TERMINO
 * @property string $PRO_NOMBRE
 *
 * The followings are the available model relations:
 * @property Detalle[] $detalles
 * @property Documento[] $documentos
 * @property ItemPropuesta[] $itemPropuestas
 * @property Persona $pERPERCORREL
 * @property Persona $pERCORREL
 * @property EstPropuesta $ePROCORREL
 * @property Proyecto $pROCORREL
 * @property Empresa $eMPCORREL
 * @property RechazoPropuesta[] $rechazoPropuestas
 */
class Propuesta extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'propuesta';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('PRO_CORREL, PER_CORREL, E_PRO_CORREL, EMP_CORREL, PER_PER_CORREL', 'required'),
			array('PRO_CORREL, PER_CORREL, E_PRO_CORREL, EMP_CORREL, PER_PER_CORREL', 'length', 'max'=>10),
			array('PRO_NOMBRE', 'length', 'max'=>200),
			array('FECHA_INICIO, FECHA_REVISADO, FECHA_TERMINO', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('PROP_CORREL, PRO_CORREL, PER_CORREL, E_PRO_CORREL, EMP_CORREL, PER_PER_CORREL, FECHA_INICIO, FECHA_REVISADO, FECHA_TERMINO, PRO_NOMBRE', 'safe', 'on'=>'search'),
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
			'detalles' => array(self::HAS_MANY, 'Detalle', 'PROP_CORREL'),
			'documentos' => array(self::HAS_MANY, 'Documento', 'PROP_CORREL'),
			'itemPropuestas' => array(self::HAS_MANY, 'ItemPropuesta', 'PROP_CORREL'),
			'pERPERCORREL' => array(self::BELONGS_TO, 'Persona', 'PER_PER_CORREL'),
			'pERCORREL' => array(self::BELONGS_TO, 'Persona', 'PER_CORREL'),
			'ePROCORREL' => array(self::BELONGS_TO, 'EstPropuesta', 'E_PRO_CORREL'),
			'pROCORREL' => array(self::BELONGS_TO, 'Proyecto', 'PRO_CORREL'),
			'eMPCORREL' => array(self::BELONGS_TO, 'Empresa', 'EMP_CORREL'),
			'rechazoPropuestas' => array(self::HAS_MANY, 'RechazoPropuesta', 'PROP_CORREL'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'PROP_CORREL' => 'Prop Correl',
			'PRO_CORREL' => 'Pro Correl',
			'PER_CORREL' => 'Per Correl',
			'E_PRO_CORREL' => 'E Pro Correl',
			'EMP_CORREL' => 'Emp Correl',
			'PER_PER_CORREL' => 'Per Per Correl',
			'FECHA_INICIO' => 'Fecha Inicio',
			'FECHA_REVISADO' => 'Fecha Revisado',
			'FECHA_TERMINO' => 'Fecha Termino',
			'PRO_NOMBRE' => 'Pro Nombre',
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

		$criteria->compare('PROP_CORREL',$this->PROP_CORREL,true);
		$criteria->compare('PRO_CORREL',$this->PRO_CORREL,true);
		$criteria->compare('PER_CORREL',$this->PER_CORREL,true);
		$criteria->compare('E_PRO_CORREL',$this->E_PRO_CORREL,true);
		$criteria->compare('EMP_CORREL',$this->EMP_CORREL,true);
		$criteria->compare('PER_PER_CORREL',$this->PER_PER_CORREL,true);
		$criteria->compare('FECHA_INICIO',$this->FECHA_INICIO,true);
		$criteria->compare('FECHA_REVISADO',$this->FECHA_REVISADO,true);
		$criteria->compare('FECHA_TERMINO',$this->FECHA_TERMINO,true);
		$criteria->compare('PRO_NOMBRE',$this->PRO_NOMBRE,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Propuesta the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
