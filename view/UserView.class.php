<?php

class UserView extends View {

	public function __construct($controller, $templateName, $args = array()) {
		parent::__construct($controller, $templateName, $args = array());
		$this->templateNames['head'] = 'head';
		$this->templateNames['menu'] = 'menuUser';

		if (($templateName == 'compte') or ($templateName == 'futursTrajets') or ($templateName == 'historiqueTrajets') or ($templateName == 'statistiques')){
			$this->templateNames['side'] = 'menuCompte';}
	}

	public function render(){
		if (!isset($_SESSION)) { session_start(); }
		$this->loadTemplate($this->templateNames['head'], $this->args);
		$this->loadTemplate($this->templateNames['top'], $this->args);
		$this->loadTemplate($this->templateNames['menu'], $this->args);
		if (isset($this->templateNames['side'])){$this->loadTemplate($this->templateNames['side'], $this->args); }
		$this->loadTemplate($this->templateNames['content'], $this->args);
		$this->loadTemplate($this->templateNames['foot'], $this->args);
   }

}

?>
