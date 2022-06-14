<?php 
namespace Meska\Lokys;

class Vaikas/* extends Tevas*/ { //gali buti tik 1 extends klase

    public function __construct() {
        //parent::__construct();
        echo '<h3>Vaiko konstruktorius</h3>';
    }

    public static $posakis = 'bu bu buu';

    public function betvarke() {
        echo '<h3>Visiska betvarke</h3>';
    }
    /*public function pasaka() {
        echo '<h3>Ziuri filma, ne pasaka</h3>';
        echo '<h3>'.self::$posakis.'</h3>';
        echo '<h3>'.static::$posakis.'</h3>';
    }*/

}