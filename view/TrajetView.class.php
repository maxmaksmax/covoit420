<?php

class TrajetView extends View {
	
	public function __construct($controller, $templateName, $args = array()) {
		parent::__construct($controller, $templateName, $args = array());
		$this->templateNames['head'] = 'head'; 
		$this->templateNames['menu'] = 'menuUser';
		$this->templateNames['content'] = 'rechercheTrajet';
	} 
   
	public function render(){
		$this->loadTemplate($this->templateNames['head'], $this->args);
		$this->loadTemplate($this->templateNames['menu'], $this->args);
		$this->loadTemplate($this->templateNames['content'], $this->args);
		$this->loadTemplate($this->templateNames['foot'], $this->args);
   }

}

?>