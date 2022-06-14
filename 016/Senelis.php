<?php
namespace Super\Old;
class Senelis {

    public function __construct() {
        echo '<h3>Senelio konstruktorius</h3>';
    }

    public static $posakis = 'VA, VA, Sakiau Tau';

    public function pasaka() {
        echo '<h3>Seka pasaka</h3>';
        echo '<h3>Ziuri filma, ne pasaka</h3>';
        echo '<h3>'.self::$posakis.'</h3>';
        echo '<h3>'.static::$posakis.'</h3>'; // vaiko overwritintas statinis posakis pas seneli

    }
}