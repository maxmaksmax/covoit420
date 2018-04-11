<?php

class AnonymousController extends Controller {

  public function defaultAction($request) {
    $view = new View($this, 'index');
    $view->render();
  }

  public function validateConnection($request) {
		$email = $request->read('email');
		$password = $request->read('password');

    if(!User::isEmailUsed($email)) {
			$view = new View($this,'index');
			$view->setArg('inscErrorText',"Cet email n'existe pas");
			$view->render();
		}
		else {
			$mdp = User::getPassword($email);
			if($password == $mdp){
				session_start();
				$_SESSION['email'] = $email;
				// $_SESSION['password'] = $password;
				//$_SESSION['nom'] = User::getNom($email);
				//$_SESSION['prenom'] = User::getPrenom($email);
				//$_SESSION['telephone'] = User::getTelephone($email);

				echo 'Vous êtes connectés en tant que '.$email;
				$view = new View($this,'index');
				$view->render();
			}
			else {
				echo 'Mot de passe erroné';
				$view = new View($this,'index');
				$view->setArg('inscErrorText', 'Le couple mot de passe/Email ne correspond pas');
				$view->render();
			}
		}
	}

  public function inscription($request){
		$view = new View($this, 'inscription');
		$view->render();
	}

	public function validateInscription($request) {
		$email = $request->read('inputEmail');
		if(User::isEmailUsed($email)) {
			$view = new View($this,'inscription');
			$view->setArg('inscErrorText','This email is already used');
			$view->render();
		}
		else {
			$password = $request->read('inscPassword');
			$nom = $request->read('inputLastname');
			$prenom = $request->read('inputFirstname');
			$telephone = $request->read('inputTelephone');
			
			$user = User::createUser($email, $prenom, $nom, 0, $telephone, $password);
			if(!isset($user)) {
				$view = new View($this,'inscription');
				$view->setArg('inscErrorText', 'Cannot complete inscription');
				$view->render();
			}
			else {
				echo 'Inscription validée';

				$view = new View($this, 'index');
				$view->render();
				// $newRequest = new Request();
				// $newRequest->write('controller','user');
				// $newRequest->write('user',$user->id());
				// Dispatcher::getCurrentDispatcher()->dispatch($newRequest);
			}
		}

	}



}


 ?>
