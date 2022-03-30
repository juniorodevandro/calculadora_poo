<?php

class Body {
	private $prop = array();

	function addProp(...$prop) {
		$this->prop = array_merge($this->prop, $prop);
	}

	public function __toString() {
		$body = '<body>';
		foreach ($this->prop as $valor) {
			$body .= $valor;
		}
		$body .= '</body>';
		return $body;
	}
}