<?php

class Cart {

    public $id;

    static private $cart;

    const BAD = 'klasine konstanta';

    static public function create() {
        return self::$cart ?? self::$cart = new self; // singletone, pats paprasciausias patterna'as
    }

    private function __construct() {
        $this->id = rand(1000, 9999);
    }
    private function __clone() { }
    private function __wakeup() { }
    private function __sleep() 
    { return []; }
}