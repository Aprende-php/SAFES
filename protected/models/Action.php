<?php

/**
 * This is the model class for table "action".
 *
 * The followings are the available columns in table 'action':
 * @property string $ACT_CORREL
 * @property string $CON_CORREL
 * @property string $ACT_NOMBRE
 * @property string $ACT_FICTICIO
 *
 * The followings are the available model relations:
 * @property Controler $cONCORREL
 * @property Role[] $roles
 * @property UsuHasAct $usuHasAct
 */
class Action extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'action';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('CON_CORREL, ACT_NOMBRE, ACT_FICTICIO', 'required'),
			array('CON_CORREL', 'length', 'max'=>10),
			array('ACT_NOMBRE, ACT_FICTICIO', 'length', 'max'=>200),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ACT_CORREL, CON_CORREL, ACT_NOMBRE, ACT_FICTICIO', 'safe', 'on'=>'search'),
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
			'cONCORREL' => array(self::BELONGS_TO, 'Controler', 'CON_CORREL'),
			'roles' => array(self::MANY_MANY, 'Role', 'rol_has_action(ACT_CORREL, ROL_CORREL)'),
			'usuHasAct' => array(self::HAS_ONE, 'UsuHasAct', 'ACT_CORREL'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ACT_CORREL' => 'Acción',
			'CON_CORREL' => 'Controlador',
			'ACT_NOMBRE' => 'Acción',
			'ACT_FICTICIO' => 'Nombre Ficticio',
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

		$criteria->compare('ACT_CORREL',$this->ACT_CORREL,true);
		$criteria->compare('CON_CORREL',$this->CON_CORREL,true);
		$criteria->compare('ACT_NOMBRE',$this->ACT_NOMBRE,true);
		$criteria->compare('ACT_FICTICIO',$this->ACT_FICTICIO,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Action the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
