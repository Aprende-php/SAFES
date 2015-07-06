<?php

/**
 * This is the model class for table "proyecto".
 *
 * The followings are the available columns in table 'proyecto':
 * @property string $PRO_CORREL
 * @property string $EMP_CORREL
 * @property string $P_EST_CORREL
 * @property string $PER_CORREL
 * @property string $TIP_CORREL
 * @property string $E_PRO_CORREL
 * @property string $A_PRO_CORREL
 * @property string $PRO_FINICIO
 * @property string $PRO_FTERMINO
 * @property string $PRO_FREVISADA
 * @property string $PRO_FVERIFICADA
 * @property string $PRO_FDESCARTADO
 * @property string $PRO_TAMANO
 * @property string $PRO_PRIORIDAD
 * @property string $PRO_COMPLEJIDAD
 *
 * The followings are the available model relations:
 * @property AntecedentesProyecto[] $antecedentesProyectos
 * @property Detalle[] $detalles
 * @property Formulario[] $formularios
 * @property Propuesta[] $propuestas
 * @property AntecedentesProyecto $aPROCORREL
 * @property EstProyecto $ePROCORREL
 * @property Empresa $eMPCORREL
 * @property PlanEstrategico $pESTCORREL
 * @property Persona $pERCORREL
 * @property Tipo $tIPCORREL
 */
class Proyecto extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'proyecto';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('EMP_CORREL, P_EST_CORREL, PER_CORREL, TIP_CORREL, E_PRO_CORREL, A_PRO_CORREL', 'required'),
			array('EMP_CORREL, P_EST_CORREL, PER_CORREL, TIP_CORREL, E_PRO_CORREL, A_PRO_CORREL', 'length', 'max'=>10),
			array('PRO_TAMANO, PRO_PRIORIDAD, PRO_COMPLEJIDAD', 'length', 'max'=>100),
			array('PRO_FINICIO, PRO_FTERMINO, PRO_FREVISADA, PRO_FVERIFICADA, PRO_FDESCARTADO', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('PRO_CORREL, EMP_CORREL, P_EST_CORREL, PER_CORREL, TIP_CORREL, E_PRO_CORREL, A_PRO_CORREL, PRO_FINICIO, PRO_FTERMINO, PRO_FREVISADA, PRO_FVERIFICADA, PRO_FDESCARTADO, PRO_TAMANO, PRO_PRIORIDAD, PRO_COMPLEJIDAD', 'safe', 'on'=>'search'),
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
			'antecedentesProyectos' => array(self::HAS_MANY, 'AntecedentesProyecto', 'PRO_CORREL'),
			'detalles' => array(self::HAS_MANY, 'Detalle', 'PRO_CORREL'),
			'formularios' => array(self::HAS_MANY, 'Formulario', 'PRO_CORREL'),
			'propuestas' => array(self::HAS_MANY, 'Propuesta', 'PRO_CORREL'),
			'aPROCORREL' => array(self::BELONGS_TO, 'AntecedentesProyecto', 'A_PRO_CORREL'),
			'ePROCORREL' => array(self::BELONGS_TO, 'EstProyecto', 'E_PRO_CORREL'),
			'eMPCORREL' => array(self::BELONGS_TO, 'Empresa', 'EMP_CORREL'),
			'pESTCORREL' => array(self::BELONGS_TO, 'PlanEstrategico', 'P_EST_CORREL'),
			'pERCORREL' => array(self::BELONGS_TO, 'Persona', 'PER_CORREL'),
			'tIPCORREL' => array(self::BELONGS_TO, 'Tipo', 'TIP_CORREL'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'PRO_CORREL' => 'Pro Correl',
			'EMP_CORREL' => 'Emp Correl',
			'P_EST_CORREL' => 'P Est Correl',
			'PER_CORREL' => 'Per Correl',
			'TIP_CORREL' => 'Tip Correl',
			'E_PRO_CORREL' => 'E Pro Correl',
			'A_PRO_CORREL' => 'A Pro Correl',
			'PRO_FINICIO' => 'Pro Finicio',
			'PRO_FTERMINO' => 'Pro Ftermino',
			'PRO_FREVISADA' => 'Pro Frevisada',
			'PRO_FVERIFICADA' => 'Pro Fverificada',
			'PRO_FDESCARTADO' => 'Pro Fdescartado',
			'PRO_TAMANO' => 'Pro Tamano',
			'PRO_PRIORIDAD' => 'Pro Prioridad',
			'PRO_COMPLEJIDAD' => 'Pro Complejidad',
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

		$criteria->compare('PRO_CORREL',$this->PRO_CORREL,true);
		$criteria->compare('EMP_CORREL',$this->EMP_CORREL,true);
		$criteria->compare('P_EST_CORREL',$this->P_EST_CORREL,true);
		$criteria->compare('PER_CORREL',$this->PER_CORREL,true);
		$criteria->compare('TIP_CORREL',$this->TIP_CORREL,true);
		$criteria->compare('E_PRO_CORREL',$this->E_PRO_CORREL,true);
		$criteria->compare('A_PRO_CORREL',$this->A_PRO_CORREL,true);
		$criteria->compare('PRO_FINICIO',$this->PRO_FINICIO,true);
		$criteria->compare('PRO_FTERMINO',$this->PRO_FTERMINO,true);
		$criteria->compare('PRO_FREVISADA',$this->PRO_FREVISADA,true);
		$criteria->compare('PRO_FVERIFICADA',$this->PRO_FVERIFICADA,true);
		$criteria->compare('PRO_FDESCARTADO',$this->PRO_FDESCARTADO,true);
		$criteria->compare('PRO_TAMANO',$this->PRO_TAMANO,true);
		$criteria->compare('PRO_PRIORIDAD',$this->PRO_PRIORIDAD,true);
		$criteria->compare('PRO_COMPLEJIDAD',$this->PRO_COMPLEJIDAD,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Proyecto the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
