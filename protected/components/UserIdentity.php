<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
    private $_id;
	public function authenticate()
	{
		// $users=array(
		// 	// username => password
		// 	'demo'=>'demo',
		// 	'admin'=>'admin',
		// 	$this->username=>$this->password,
		// );
		$user=Usuario::checkLogin();

		if(!$user)
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		elseif($user['USU_PASSWORD']!==$this->password)
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		else{
			$this->_id=$user['PER_CORREL'];
            // $this->username=$user->USU_ROLE;
            // $this->setState('role', $user->USU_ROLE);
            // $this->setState('nombre',$user->PER_NOMBRE);
            // $this->setState('empresa',$user->EMP_CORREL);
            // $this->setState('correl',$user->PER_CORREL);
			$this->errorCode=self::ERROR_NONE;
		}
		return !$this->errorCode;
	}

    public function getId()
    {
        return $this->_id;
    }
}