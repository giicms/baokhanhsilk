<?php
App::uses('AuthComponent', 'Controller/Component');
class User extends AppModel {
    // other code.
	
	
	public $name = 'User';
	
	var $validate = array(
		'role_id' => array(
				'numeric' => array(
						'rule' => array('numeric'),
						'message' => 'Role invalid.'
				)
		),
		'username' => array(
				'notempty' =>  array(
						'rule' => array('notempty'),
						'message' => 'Username is required.'
				),
				'unique' => array(
						'rule' => array('checkUsernameDuplication'),
						'message' => 'Username is duplicated.'
				)
		),
		'password' => array(
				'notempty' => array(
						'rule' => array('notempty'),
						'message' => 'Password is required.'
				),
				'minLength' => array(
						'rule' => array('minLength', 6),
						'message' => 'Password too short, min length is 6.'
				)
		),
		'email' => array(
				'email' => array(
						'email' => array('email'),
						'message' => 'Email is required.'
				),
				'unique' => array(
						'rule' => array('checkEmailDuplication'),
						'message' => 'Email is duplicated.'
				)
		),
	);
	
	public function checkUsernameDuplication($check) {
			$count = $this->find('count', array(
							'conditions' =>$check,
							'recursive' => -1
					)
			);
			return $count == 0;
	}
	
	public function checkEmailDuplication() {
			$count = $this->find('count', array(
							'conditions' =>$check,
							'recursive' => -1
					)
			);
			return $count == 0;
	}
	
  public $belongsTo = array('Role');
  public $actsAs = array('Acl' => array('type' => 'requester'));

  public function parentNode() {
      if (!$this->id && empty($this->data)) {
          return null;
      }
      if (isset($this->data['User']['role_id'])) {
          $roleId = $this->data['User']['role_id'];
      } else {
          $roleId = $this->field('role_id');
      }
      if (!$roleId) {
          return null;
      } else {
          return array('Role' => array('id' => $roleId));
      }
  }

	public function beforeSave($options = array()) {
		if (isset($this->data[$this->alias]['password'])) {
			$this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
		}
		return true;
	}
}