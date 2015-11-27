<?php

use Phalcon\Forms\Form;
use \Phalcon\Forms\Element\Text;
use \Phalcon\Forms\Element\Password;
use \Phalcon\Validation\Validator\PresenceOf;
use \Phalcon\Validation\Validator\Email;

Class RegisterForm extends Form
{
	public function initialize($entity = null, $options = null)
	{
	//Name
	$name = new Text('name');
	$name->setLabel('Zita Rakazara');
	$name->setFilters(array('striptags', 'string'));
	$name->addValidators(array(
		new PresenceOf(array(
		    'message' => "Zita tinorida"
		))
	)
	);
	$this->add($name);
	
	//Name
	$name = new Text('username');
	$name->setLabel('Zita rekurogga Rakazara');
	$name->setFilters(array('alpha'));
	$name->addValidators(array(
	new PresenceOf(array(
	'message' => "Zita tinorida pakuroga apa"
	))
	)
	);
	$this->add($name);

	//Email
	$email = new Text('email');
	$email->setLabel('E-Mail');
	$email->setFilters('email');
	$email->addValidators(array(
	new PresenceOf(array(
	'message' => "Email inodikanwa vakuru vangu"
	)),
	new Email(array(
	'message' => "Email yorudzi urwu ndeyenhema isai yechokwadi"
	)),
	)
	);
	$this->add($email);

	//password
	$password = new Password('password');
	$password->setLabel('Password');
	$password->addValidators(array(
	new PresenceOf(array(
	'message' => "Password inodikanwa"
	))
	)
	);
	$this->add($password);

	//Confirm Password
	$repeatPassword = new Password('repeatPassword');
	$repeatPassword->setLabel('Repeat Password');
	$repeatPassword->addValidators(array(
	new PresenceOf(array(
	'message' => "Password yepiri inodikanwa"
	))
	)
	);
	$this->add($repeatPassword);
	}
}