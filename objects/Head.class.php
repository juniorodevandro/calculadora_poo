<?php

class Head {
	private $prop = array();
	private $title;

	function Head($title) {
		$this->title = $title;
	}

	function addProp($prop) {
		$this->prop[] = $prop;
	}

	function __toString() {
		$head = '<head>';
		$head .= '<meta charset="utf-8">';
		foreach ($this->prop as $valor) {
			$head .= $valor;
		}
		$head .= '<title>' . $this->title . '</title>';
		$head .= '</head>';
		return $head;
	}
}