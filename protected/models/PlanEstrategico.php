<?php

/**
 * This is the model class for table "plan_estrategico".
 *
 * The followings are the available columns in table 'plan_estrategico':
 * @property string $P_EST_CORREL
 * @property string $EMP_CORREL
 * @property string $P_EST_NOMBRE
 * @property string $P_EST_DESCRIPCION
 * @property string $P_EST_FINICIO
 * @property string $P_EST_FTERMINO
 *
 * The followings are the available model relations:
 * @property Empresa $eMPCORREL
 * @property Proyecto[] $proyectos
 */
class PlanEstrategico extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'plan_estrategico';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('EMP_CORREL', 'required'),
			array('EMP_CORREL', 'length', 'max'=>10),
			array('P_EST_NOMBRE', 'length', 'max'=>200),
			array('P_EST_DESCRIPCION, P_EST_FINICIO, P_EST_FTERMINO', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('P_EST_CORREL, EMP_CORREL, P_EST_NOMBRE, P_EST_DESCRIPCION, P_EST_FINICIO, P_EST_FTERMINO', 'safe', 'on'=>'search'),
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
			'eMPCORREL' => array(self::BELONGS_TO, 'Empresa', 'EMP_CORREL'),
			'proyectos' => array(self::HAS_MANY, 'Proyecto', 'P_EST_CORREL'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'P_EST_CORREL' => 'P Est Correl',
			'EMP_CORREL' => 'Emp Correl',
			'P_EST_NOMBRE' => 'P Est Nombre',
			'P_EST_DESCRIPCION' => 'P Est Descripcion',
			'P_EST_FINICIO' => 'P Est Finicio',
			'P_EST_FTERMINO' => 'P Est Ftermino',
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

		$criteria->compare('P_EST_CORREL',$this->P_EST_CORREL,true);
		$criteria->compare('EMP_CORREL',$this->EMP_CORREL,true);
		$criteria->compare('P_EST_NOMBRE',$this->P_EST_NOMBRE,true);
		$criteria->compare('P_EST_DESCRIPCION',$this->P_EST_DESCRIPCION,true);
		$criteria->compare('P_EST_FINICIO',$this->P_EST_FINICIO,true);
		$criteria->compare('P_EST_FTERMINO',$this->P_EST_FTERMINO,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PlanEstrategico the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
