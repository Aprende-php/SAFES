<?php

/**
 * This is the model class for table "empresa".
 *
 * The followings are the available columns in table 'empresa':
 * @property string $EMP_CORREL
 * @property string $COM_CORREL
 * @property string $EMP_RUT
 * @property string $EMP_RSOCIAL
 * @property string $EMP_FANTASIA
 * @property string $EMP_PREFIJO
 * @property string $EMP_GIRO
 * @property string $EMP_INC
 * @property string $EMP_TELEFONO
 * @property string $EMP_CELULAR
 * @property string $EMP_WEB
 * @property string $EMP_EMAIL
 * @property string $EMP_TWEETER
 * @property string $EMP_FACEBOOK
 * @property string $EMP_SKYPE
 * @property string $EMP_ESTADO
 *
 * The followings are the available model relations:
 * @property Departamento[] $departamentos
 * @property Base[] $bases
 * @property Role[] $roles
 * @property Comuna $cOMCORREL
 * @property Persona[] $personas
 * @property PlanEstrategico[] $planEstrategicos
 * @property Propuesta[] $propuestas
 * @property Proyecto[] $proyectos
 */
class Empresa extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'empresa';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('COM_CORREL', 'length', 'max'=>10),
			array('EMP_RUT,EMP_RSOCIAL,EMP_FANTASIA,EMP_PREFIJO,EMP_GIRO,COM_CORREL', 'required'),
			array('EMP_RUT', 'length', 'max'=>12),
			array('EMP_RSOCIAL, EMP_FANTASIA, EMP_PREFIJO, EMP_GIRO, EMP_INC, EMP_TELEFONO, EMP_CELULAR, EMP_WEB, EMP_EMAIL, EMP_TWEETER, EMP_FACEBOOK, EMP_SKYPE, EMP_ESTADO', 'length', 'max'=>200),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('EMP_CORREL, COM_CORREL, EMP_RUT, EMP_RSOCIAL, EMP_FANTASIA, EMP_PREFIJO, EMP_GIRO, EMP_INC, EMP_TELEFONO, EMP_CELULAR, EMP_WEB, EMP_EMAIL, EMP_TWEETER, EMP_FACEBOOK, EMP_SKYPE, EMP_ESTADO', 'safe', 'on'=>'search'),
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
			'departamentos' => array(self::HAS_MANY, 'Departamento', 'EMP_CORREL'),
			'bases' => array(self::MANY_MANY, 'Base', 'emp_has_bas(EMP_CORREL, BAS_CORREL)'),
			'roles' => array(self::MANY_MANY, 'Role', 'emp_has_rol(EMP_CORREL, ROL_CORREL)'),
			'cOMCORREL' => array(self::BELONGS_TO, 'Comuna', 'COM_CORREL'),
			'personas' => array(self::HAS_MANY, 'Persona', 'EMP_CORREL'),
			'planEstrategicos' => array(self::HAS_MANY, 'PlanEstrategico', 'EMP_CORREL'),
			'propuestas' => array(self::HAS_MANY, 'Propuesta', 'EMP_CORREL'),
			'proyectos' => array(self::HAS_MANY, 'Proyecto', 'EMP_CORREL'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'EMP_CORREL' => 'Empresa',
			'COM_CORREL' => 'Comuna',
			'EMP_RUT' => 'Rut',
			'EMP_RSOCIAL' => 'Razón social',
			'EMP_FANTASIA' => 'Nombre Fantasia',
			'EMP_PREFIJO' => 'Prefijo',
			'EMP_GIRO' => 'Giro',
			'EMP_INC' => 'Inc',
			'EMP_TELEFONO' => 'Telefono',
			'EMP_CELULAR' => 'Celular',
			'EMP_WEB' => 'Web',
			'EMP_EMAIL' => 'Email',
			'EMP_TWEETER' => 'Tweeter',
			'EMP_FACEBOOK' => 'Facebook',
			'EMP_SKYPE' => 'Skype',
			'EMP_ESTADO' => 'Estado',
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
		$criteria->compare('COM_CORREL',$this->COM_CORREL,true);
		$criteria->compare('EMP_RUT',$this->EMP_RUT,true);
		$criteria->compare('EMP_RSOCIAL',$this->EMP_RSOCIAL,true);
		$criteria->compare('EMP_FANTASIA',$this->EMP_FANTASIA,true);
		$criteria->compare('EMP_PREFIJO',$this->EMP_PREFIJO,true);
		$criteria->compare('EMP_GIRO',$this->EMP_GIRO,true);
		$criteria->compare('EMP_INC',$this->EMP_INC,true);
		$criteria->compare('EMP_TELEFONO',$this->EMP_TELEFONO,true);
		$criteria->compare('EMP_CELULAR',$this->EMP_CELULAR,true);
		$criteria->compare('EMP_WEB',$this->EMP_WEB,true);
		$criteria->compare('EMP_EMAIL',$this->EMP_EMAIL,true);
		$criteria->compare('EMP_TWEETER',$this->EMP_TWEETER,true);
		$criteria->compare('EMP_FACEBOOK',$this->EMP_FACEBOOK,true);
		$criteria->compare('EMP_SKYPE',$this->EMP_SKYPE,true);
		$criteria->compare('EMP_ESTADO',$this->EMP_ESTADO,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Empresa the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
