<?php

class UserController extends Controller {
	
	public function __construct($myRequest) {
        parent::__construct($myRequest);
		
    }
	
	
	public function defaultAction($request) {
		$view = new UserView($this, 'index');
		$view->render();
	}
	
	public function inscription($request) {
		$view = new View($this, 'inscription');
		$view->render();
	}
	
	public function index($request) {
		$view = new UserView($this, 'index');
		$view->render();
	}	
	
	public function monCompte($request) {
		$view = new UserView($this, 'monCompte');
		$view->render();
	}
	
   
}

?>