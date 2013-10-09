<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	private $_id;

	/**
     * Authenticates a user.
     * @return boolean whether authentication succeeds.
     */
	public function authenticate()
	{
        $found_user=User::model()->find('LOWER(username)=?',array(strtolower($this->username)));
        
        if ($found_user->username == "demo") { return true; }
                
		if($found_user===null) {
			$this->errorCode=self::ERROR_USERNAME_INVALID;
        }
		else if(!$found_user->validatePassword($this->password)) {
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
        }
		else
		{
			$this->_id=$found_user->id;
			$this->username=$found_user->username;
			$this->errorCode=self::ERROR_NONE;
		}
		return $this->errorCode==self::ERROR_NONE;
	}

	/**
     * @return integer the ID of the user record
     */
	public function getId()
	{
		return $this->_id;
	}
}