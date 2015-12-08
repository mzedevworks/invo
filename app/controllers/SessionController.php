<?php

class SessionController extends ControllerBase
{
	public function initiaze()
	{
		$this->tag->setTitle('Sign Up/Sign in');
		parent:initialize();
	}

	public function indexAction()
	{
		if(!$this->request->isPost()){
			$this->tag->setDefault('email', 'musaz01@gmail.com');
			$this->tag->setDefault('password', 'benaya');
		}	
	}

	/**
	*Register an authenticated user
	*
	*@param users $user
	*/
	private function _registerSession(Users $user)
	{
		$this->session->set('auth', array(
					    'id' => $user->id,
					    'name' => $user->name
		));				
	}
	
	/**
	* This action authenticate and logs a user into the application
	*
	*/
	public function startAction()
	{
		if($this->request->isPost()){
			$email = $this->request->getPost('email');
			$password = $this->request->getPost('password');
			try {
			    $user = Users::findFirst(array(
			    	  "(email = :email: OR username= :email:) AND password = :password: And active ='Y'",
				  'bind' => array('email' => $email, 'password' => ($password))
			    ));
			}catch (Exception $e){
			       echo 'Caught exception: ', $e->getMessage(), "\n";
			}
			if($user != false){
				 $this->_registerSession($user);
				 $this->flash->success('Wapinda '. $user->name);
				 return $this->forward('invoices/index');
			}
			$this->flash->error('Email kana password ndeyekunyepa');
		}
		return $this->forward('session/index');
	}
	 /**
	 * Finishes the active session redirecting to txhe index
	 *
	 * @return unknown
	 */
	 public function endAction()
	 {
		 $this->session->remove('auth');
        	 $this->flash->success('Goodbye!');
		 return $this->forward('index/index');
	 }

}