<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate()
	{
		//Ucenter 登录
	    Yii::import('application.vendor.*');
	    require_once 'ucenter.php';	    
	    list($uid, $username, $password, $email) = uc_user_login($this->username, $this->password);    
	    if($uid > 0) {
	        $this->errorCode =  self::ERROR_NONE;
	    } elseif($uid == -1) {
	       $this->errorCode =  self::ERROR_USERNAME_INVALID;
	    } elseif($uid == -2) {
	        $this->errorCode =  self::ERROR_PASSWORD_INVALID;
	    } else {
	        $this->errorCode =  self::ERROR_UNKNOWN_IDENTITY;
	    }
	   return !$this->errorCode;
	}
}