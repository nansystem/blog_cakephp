<?php
App::uses('SimplePasswordHasher', 'Controller/Component/Auth');

class User extends AppModel {
	public $validate = [
			'username' => [
				'required' => [
					'rule' =>['notEmpty'],
					'message'=>'ユーザー名を入力してください'
				]
			],
			'password' => [
				'required' => [
					'rule' =>['notEmpty'],
					'message'=>'パスワードを入力してください'
				]
			],
			'role' => [
				'required' => [
					'rule' => ['inList',['admin','author']],
					'message'=> '正しい役割を入力してください',
					'allowEmpty' => false,
				]
			]
		];

	public function beforeSave( $options = [] ) {
		if( isset($this->data[ $this->alias ][ 'password' ] ) ) {
			$passwordHasher = new SimplePasswordHasher();
			$this->data[ $this->alias ][ 'password' ] = $passwordHasher->hash( $this->data[ $this->alias ][ 'password' ] );
		}
		return true;
	}
}