<?php

class Link {
    private $url;
    private $rel;
    private $integrity;
    private $crossorigin;
    private $type;

    function Link($url, $rel, $integrity = null, $crossorigin = null, $type = null) {
        $this->url         = $url;
        $this->rel         = $rel;
        $this->integrity   = $integrity;
        $this->crossorigin = $crossorigin;
        $this->type        = $type;
    }

    public function __toString() {
        return '<link href="' . $this->url. '" rel="'.$this->rel . '" integrity="'.$this->integrity . 
        '" crossorigin="' . $this->crossorigin . '" type="' . $this->type. '">';
    }

}