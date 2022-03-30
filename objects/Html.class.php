<?php

class Html {
	private $language;
	private $head;
	private $body;

	function Html($language, $head, $body) {
		$this->language = $language;
		$this->head = $head;
		$this->body = $body;
	}

	public function __toString() {
		$html = '<!doctype html>';
		$html .= '<html lang="' . $this->language . '">';
		$html .= $this->head;
		$html .= $this->body;
		$html .= '</html>';
		return $html;
	}

}