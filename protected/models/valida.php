<?php

/**
 * LoginForm class.
 * LoginForm is the data structure for keeping
 * user login form data. It is used by the 'login' action of 'SiteController'.
 */
class Valida extends CFormModel
{
	// public function rules()
	// {
	// 	return array(
	// 	);
	// }

	/**
	 * Declares attribute labels.
	 */
	// public function attributeLabels()
	// {
	// 	return array(
	// 	);
	// }

	public function setRut($model,$nombre)
	{
		$cs        = Yii::app()->clientScript;
		$themePath = Yii::app()->theme->baseUrl;
		$cs->registerScriptFile($themePath . '/assets/js/jquery.Rut.min.js', CClientScript::POS_END);
		$cs->registerScript('validaRut',"$('#".get_class($model)."_$nombre').Rut({on_error: function(){ alert('Rut incorrecto'); }});");
	}

    public function validaRut($rut=''){$suma=0;if(strpos($rut,"-")==false){$RUT[0] = substr($rut, 0, -1);$RUT[1] = substr($rut, -1);}else{$RUT = explode("-",trim($rut));}$elRut = str_replace(".", "", trim($RUT[0]));$factor = 2;for($i = strlen($elRut)-1; $i >= 0; $i--):$factor = $factor > 7 ? 2 : $factor;$suma +=$elRut{$i}*$factor++;endfor;$resto = $suma % 11;$dv= 11 - $resto;if($dv == 11){$dv=0;}else if($dv== 10){$dv="k";}else{$dv=$dv;}if($dv == trim(strtolower($RUT[1]))){return true;}else{return false;}
	}
}
