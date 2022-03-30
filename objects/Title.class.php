<?php

class Title {
	private $text;

	public function __construct($text) {
		$this->text = $text;
	}

	public function getTitle() {
		return '<title>' . $this->text . '</title>';
	}

	public function __toString() {
		return '<title>' . $this->text . '</title>';
	}
}