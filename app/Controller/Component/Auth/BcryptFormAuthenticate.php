<?php
App::uses('FormAuthenticate', 'Controller/Component/Auth');
 
class BcryptFormAuthenticate extends FormAuthenticate {
 
/**
 * The cost factor for the hashing.
 *
 * @var integer
 */
    public static $cost = 10;
 
/**
 * Find a user record using the standard options.
 *
 * @param string $username The username/identifier.
 * @param string $password The unhashed password.
 * @return Mixed Either false on failure, or an array of user data.
 */
protected function _findUser($username, $password) {
	$userModel = $this->settings['userModel'];
	list($plugin, $model) = pluginSplit($userModel);
	$fields = $this->settings['fields'];

	$conditions = array(
		$model . '.' . $fields['username'] => $username,
	);

	if (!empty($this->settings['scope'])) {
		$conditions = array_merge($conditions, $this->settings['scope']);
	}
	
	$result = ClassRegistry::init($userModel)->find('first', array(
		'conditions' => $conditions,
		'recursive' => 0,
		'fields' => array($fields['username'], $fields['password'], 'salt'),
	));
	
	if (empty($result) || empty($result[$model])) {
		return false;
	}
	
	if($result[$model][$fields['password']] != $this->_password($password, $result[$model]['salt'])){
		return false;
	}
	
	unset($result[$model][$fields['password']]);
	unset($result[$model]['salt']);
	return $result[$model];
}
    
/**
 * Password method used for logging in.
 *
 * @param string $password Password.
 * @return string Hashed password.
 */
    protected function _password($password, $salt) {
        return self::hash($password, $salt);
    }
 
/**
 * Create a blowfish / bcrypt hash.
 * Individual salts are used to be even more secure.
 *
 * @param string $password Password.
 * @return string Hashed password.
 */
    public static function hash($password, $salt) {
    	if (!CRYPT_BLOWFISH) {
    		throw new CakeException('No blowfish encryption installed');
    	}

        return crypt($password, '$2a$' . self::$cost . '$' . $salt);
    }
}

?>
