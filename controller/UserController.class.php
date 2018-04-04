<?php

class UserController extends Controller {
	
	public function connection($request) {
		
		$view = new UserView($this);
		$view->render();
		}
	
   
}

?>