<?php

class BotaoCalculadora {

	private $name;
	private $value;

	public function __construct($name, $value) {
		$this->name = $name;
		$this->value = $value;
	} 	

	public function __toString() {
		return "<input id='botaoCalculadora' class='col-1 text-center' type='submit' name='" . $this->name . "' value='" . $this->value . "'> \n";
	}

}