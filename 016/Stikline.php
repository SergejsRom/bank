<?php

class Stikline {

    public $turis;
    static public $gerimas = 'Pepsi';

    public static function valio() {
        echo '<h1>VALIO</h1>';
    }

    public function __construct() {
        $this->turis = rand(100, 200);
    }

    public function kas() {
        echo '<br>---is klases tiesiai--->'.self::$gerimas;
    }

}