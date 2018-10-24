<?php

namespace engine;

class HTTP
{
    private $curl = null;

    public function __construct($url){
        $this->curl = curl_init($url);
    }

    public function setopt($opt, $value){
        curl_setopt($this->curl, $opt, $value);
    }

    public function exec(){
        $html = curl_exec($this->curl);
        return $html;
    }
}
